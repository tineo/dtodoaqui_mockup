var popup;

function initAutocomplete(){
  var initialized = 0;
  var placeChangedArr = {};

  var geocoder = new google.maps.Geocoder();

  function initAutoCompleteForms(){
    if(($(window).width()<=1024 && initialized<=1) || initialized==0)
    {
      document.querySelectorAll('.geolocator-form').forEach((form, idx)=>{
        placeChangedArr['a'+idx] = false;
		var submitButton = $(form).find(':submit');
        var input = $(form).find('input.geolocator-input');
        
        if(input[0] && $(input[0]).val()!="")
        {
          placeChangedArr['a'+idx] = true;
        }

        var options = {types: ['address']};
		var autocomplete = new google.maps.places.Autocomplete(input[0], options);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            var address = place.formatted_address;
    		if(address && /\d/.test(address))
    		{
    		    placeChangedArr['a'+idx] = true;
    		    return true;
    		}else{
    		  $(input[0]).val('');
    		  placeChangedArr['a'+idx] = false;
    		  return false;
    		}
        });
        
        if(input[0])
        {
            $(input[0]).keydown((ev)=>{
                placeChangedArr['a'+idx] = false;
                showGeolocationPopup();
            }).click((ev)=>{
                showGeolocationPopup();
            });
        }

        $(form).submit((ev)=>{
          if(placeChangedArr['a'+idx]) return true;
          return false;
        })

        var btn = form.querySelector('.geolocator-btn');
        if(btn)
        {
          $(btn).click(()=>{
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(position=>{
                geocoder.geocode({ location: new google.maps.LatLng(position.coords.latitude, position.coords.longitude) }, (results, status)=>{
                    if (status == 'OK'){
                        document.querySelectorAll('.geolocator-form').forEach((form4)=>{
                            var input4 = $(form4).find('input.geolocator-input');
                            if($(input4[0])){
                                $(input4[0]).val(results[0].formatted_address);
                                placeChangedArr['a'+idx] = true;
                                return false;
                            }
                        })
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                })
              })
            }else console.log('Geolocati贸n is not supported by this browser')
          })
        }
      });
      initialized++;
    }
  }
  initAutoCompleteForms();
  $(window).on('resize', function(){
    initAutoCompleteForms()
  });

  placeChangedArr['b'] = false;
  var form2 = $('#geolocator-form-popup');
  var input2 = form2.find('input.geolocator-input');
  if(input2[0] && $(input2[0]).val()!="")
    {
      placeChangedArr['b'] = true;
    }

  var options = {types: ['address']};
  var autocomplete2 = new google.maps.places.Autocomplete(input2[0], options);

  $('#geolocator-button-popup').click(()=>{
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position=>{
          geocoder.geocode({ location: new google.maps.LatLng(position.coords.latitude, position.coords.longitude) }, (results, status)=>{
            if (status == 'OK'){
              $.ajax({
                url: "php/session.php",
                type: "POST",
                dataType: "json",
                data: {
                  latitude: results[0].geometry.location.lat(),
                  longitude: results[0].geometry.location.lng(),
                  address: results[0].formatted_address
                },
                success: function(data) {
                  if(data.status == 200)
                  {
                      document.querySelectorAll('.geolocator-form').forEach((form3)=>{
                          var input3 = $(form3).find('input.geolocator-input');
                          if($(input3[0])){
                              $(input3[0]).val(results[0].formatted_address);
                          } 
                      })
                      document.querySelectorAll('.geolocator-form2').forEach((form3)=>{
                          var input3 = $(form3).find('input.geolocator-input2');
                          if($(input3[0])){
                              $(input3[0]).val(results[0].formatted_address);
                          } 
                      })
                      for (const key in placeChangedArr) {
                        placeChangedArr[key] = true;
                      }
                      if (typeof initSearch === 'function') {initSearch()}
                      $('.direction-button').attr('href', 'https://www.google.com/maps/dir/'+results[0].geometry.location.lat()+','+results[0].geometry.location.lng()+'/Microscience+S.A.C.,+Yauli,+Cercado+de+Lima/@-12.0530499,-77.0955248,13z')
                      if (typeof searchEstablishments === 'function') {searchEstablishments()}
                      $.magnificPopup.close();
                  }else {
                    alert('Geocode was not successful for the following reason: ' + data.message);
                  }
                }
              })
            } else {
              alert('Geocode was not successful for the following reason: ' + status);
            }
          })
        })}else console.log('Geolocatión is not supported by this browser')
  });

  autocomplete2.addListener('place_changed', function() {
    var place = autocomplete2.getPlace();
    var address = place.formatted_address;
	if(address && /\d/.test(address))
	{
	   placeChangedArr['b'] = true;
	   geocoder.geocode({ 'address': address }, function(results, status){
        if (status == 'OK'){
          $.ajax({
            url: "php/session.php",
            type: "POST",
            dataType: "json",
            data: {
              latitude: results[0].geometry.location.lat(),
              longitude: results[0].geometry.location.lng(),
              address: place.formatted_address
            },
            success: function(data) {
              if (data.status == 200)
              {
                document.querySelectorAll('.geolocator-form').forEach((form3)=>{
                    var input3 = $(form3).find('input.geolocator-input');
                    if($(input3[0])){
                        $(input3[0]).val(results[0].formatted_address);
                    } 
                });
                document.querySelectorAll('.geolocator-form2').forEach((form3)=>{
                  var input3 = $(form3).find('input.geolocator-input2');
                  if($(input3[0])){
                      $(input3[0]).val(results[0].formatted_address);
                  } 
                })
                for(const key in placeChangedArr) {
                    placeChangedArr[key] = true;
                }
                if (typeof initSearch === 'function') {initSearch()}
                $('.direction-button').attr('href', 'https://www.google.com/maps/dir/'+results[0].geometry.location.lat()+','+results[0].geometry.location.lng()+'/Microscience+S.A.C.,+Yauli,+Cercado+de+Lima/@-12.0530499,-77.0955248,13z')
                if (typeof searchEstablishments === 'function') {searchEstablishments()}
                $.magnificPopup.close();
              }else {
                alert('Geocode was not successful for the following reason: ' + data.message);
                return false;
              }
            }
          })
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
          return false;
        }
      })
	}else{
	  $(input2[0]).val('');
	  placeChangedArr['b'] = false;
	  return false;
	}
  });
  
  if(input2[0])
    {
        $(input2[0]).keydown((ev)=>{
            placeChangedArr['b'] = false;
        });
    }

  $(form2).submit((ev)=>{
    return false;
  });
}

function showGeolocationPopup(){
  popup = $.magnificPopup.open({
    items: {
      src: '#geolocator-popup'
    },
    type: 'inline',
    closeOnBgClick: false,
    closeBtnInside: false,
    showCloseBtn: false,
    enableEscapeKey: false,
    fixedContentPos: false,
    fixedBgPos: true,
    autoFocusLast: false,
    overflowY: 'auto',
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  })
}
