// Default infoBox Rating Type
var infoBox_ratingType = 'star-rating';

function initMap(search, location, category, radius){
  (function($){
      "use strict";

      function mainMap() {

        // Map Attributes
        // ----------------------------------------------- //

        var mapZoomAttr = $('#map').attr('data-map-zoom');
        var mapScrollAttr = $('#map').attr('data-map-scroll');

        if (typeof mapZoomAttr !== typeof undefined && mapZoomAttr !== false) {
            var zoomLevel = parseInt(mapZoomAttr);
        } else {
            var zoomLevel = 10;
        }

        if (typeof mapScrollAttr !== typeof undefined && mapScrollAttr !== false) {
           var scrollEnabled = parseInt(mapScrollAttr);
        } else {
          var scrollEnabled = false;
        }


        // Main Map
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: zoomLevel,
          scrollwheel: scrollEnabled,
          center: new google.maps.LatLng(-12.077804, -77.092687),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          zoomControl: false,
          mapTypeControl: false,
          scaleControl: false,
          panControl: false,
          navigationControl: false,
          streetViewControl: false,
          gestureHandling: 'cooperative',
          clickableIcons: false,

          // Google Map Style
          styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]

        });

        // Locations
        // ----------------------------------------------- //
        var ib = new InfoBox();

        // Infobox Output
        function locationData(locationURL, locationImg, locationLogo, locationTitle, locationAddress, locationRating, locationRatingCounter) {
            return(''+
              '<a href="'+ locationURL +'" class="listing-img-container">'+
                 '<div class="infoBox-close"><i class="fa fa-times"></i></div>'+
                 '<img src="'+locationImg+'" alt="">'+

                 '<div class="listing-item-content">'+
                    '<h3>'+locationTitle+'</h3>'+
                 '</div>'+

              '</a>'+

              '<div class="listing-content" style="height: 50px; padding: 0px;">'+
                 '<div class="col-xs-2" style="height: 100%; padding: 0px;">' +
                    '<img src="'+ locationLogo +'" alt="" style="max-height: 100%;"/>' +
                 '</div>' +
                 '<div class="col-xs-10" style="height: 100%; padding: 6px 5px 3px 10px;">' +
                    '<div class="row" style="height: 50%;">' +
                        '<div class="listing-title" style="padding: 0px !important;">'+
                            '<div class="'+infoBox_ratingType+'" data-rating="'+locationRating+'"></div>'+
                        '</div>'+
                    '</div>' +
                    '<div class="row" style="height: 50%;">' +
                        '<span style="overflow: hidden; white-space: nowrap; display: block; text-overflow: ellipsis;">'+locationAddress+'</span>' +
                    '</div>' +
                 '</div>' +
              '</div>')
        }
        
        function establishmentCard(est_link, marker_id, est_status, est_photo, est_name, est_address, est_rating, est_valorations) {
            return(
                    '<div class="col-md-3 col-sm-3 col-xs-6 est_card">'+
    					'<a href="'+est_link+'" class="listing-item-container" data-marker-id="'+marker_id+'">'+
    						'<div class="contEst2" style="margin: 0;">'+
    							'<div class="logoEst listing-item">'+
    								'<div class="listing-badge '+(est_status="open"?'now-open">Abierto ahora':'now-closed">Cerrado ahora')+'</div>'+
    								'<img src="'+est_photo+'" class="img-responsive">'+
    							'</div>'+
    							'<div class="DatosEst">'+
    								'<div class="titEst2" style="display: block; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 50px; overflow: hidden;">'+est_name+'</div>'+
    								'<div class="dirEst" style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">'+est_address+'</div>'+
    								'<div class="star-rating" data-rating="'+est_rating+'" style="padding: 0;">'+
    									'<div class="rating-counter"></div>'+
    									(function(){
                                          let starString = '';
                                          var starIndex = parseFloat(est_rating);
                                          var completeStars = Math.floor(starIndex);
                                          var halfStars = starIndex - completeStars;
                                          var noStars = 5-completeStars-Math.ceil(halfStars);
                                          for(var i=0; i<completeStars; i++){starString = starString+'<span class="star"></span>'}
                                          for(var i=0; i<halfStars; i++){starString = starString+'<span class="star half"></span>'}
                                          for(var i=0; i<noStars; i++){starString = starString+'<span class="star empty"></span>'}
                                          return starString;
                                        })()+
    								'</div>'+
    								'<div class="valoraciones">'+est_valorations+' valoraciones</div>'+
    							'</div>'+
    							'<div style="clear: both;"></div>'+
    						'</div>'+
    					'</a>'+
				    '</div>'
                );
        }

        var typeIcons = {
            'restaurant': '<i class="im im-icon-Chef-Hat"></i>',
            'event': '<i class="im im-icon-Electric-Guitar"></i>',
            'gym': '<i class="im im-icon-Dumbbell"></i>',
            'spa': '<i class="im im-icon-Home-2"></i>',
            'lodging': '<i class="im im-icon-Hotel"></i>',
            'establishment': '<i class="im im-icon-Chef-Hat"></i>',
            'default': '<i class="im im-icon-Warehouse"></i>',
            'fast_food': '<i class="im im-icon-Hamburger"></i>',
            'coffe': '<i class="im im-icon-Coffee"></i>'
        }
        
        var allMarkers = [];
        var myMarker;
        var markerCluster;

        function initSearch(service, request, center, centerAddress){
          var locationsArr = [];
          $.ajax({
                url: "php/establecimientos.php",
                type: "POST",
                dataType: "json",
                data: request,
                success: function(response) {
                    if(markerCluster)
                      {
                          markerCluster.removeMarkers(allMarkers);
                          allMarkers = [];
                      }
                    if(myMarker)
                    {
                        myMarker.remove();
                        myMarker.setMap(null);
                    }
                      if (response.status === 200) {
                          // Establecimientos
                          let index = 0;
                          $('.est_card').remove();
                          for (var key in response.data)
                          {
                            index++;
                              if(index<9)
                              {
                                  let loc = response.data[key];
                                  let photo;
                                  if(loc.foto){photo = loc.foto}
                                  else{photo = 'images/no-image.png'}
                                  let icon = typeIcons['default'];
                                  locationsArr.push([locationData('establecimiento-detalle.php', photo, photo, loc.nom_comercial, loc.direccion, (loc.val==''?0:loc.val)), loc.coor_lt, loc.coor_lng, index, icon]);
                                  if(index<5)
                                  {
                                      $($('.est_container')[0]).append(establishmentCard('establecimiento-detalle.php', index, loc.abierto==0?false:true, photo, loc.nom_comercial, loc.direccion, (loc.val==''?0:loc.val), loc.votos));
                                  }else{
                                      $($('.est_container')[1]).append(establishmentCard('establecimiento-detalle.php', index, loc.abierto==0?false:true, photo, loc.nom_comercial, loc.direccion, (loc.val==''?0:loc.val), loc.votos));
                                  }
                              }
                          }
                          $('p.showing-results').text(index+' Establecimientos encontrados');
                          locationsArr.push([locationData('establecimiento-detalle.php', 'images/no-image.png', 'SU UBICACION', centerAddress, 5.0), center.lat(), center.lng(), 999, '<i class="im im-icon-Male"></i>']);
                          map.setCenter(center);
    
                          // Infobox
                          // ----------------------------------------------- //
    
                          var boxText = document.createElement("div");
                          boxText.className = 'map-box'
    
                          var currentInfobox;
    
                          var boxOptions = {
                                  content: boxText,
                                  disableAutoPan: false,
                                  alignBottom : true,
                                  maxWidth: 0,
                                  pixelOffset: new google.maps.Size(-134, -55),
                                  zIndex: null,
                                  boxStyle: {
                                    width: "270px"
                                  },
                                  closeBoxMargin: "0",
                                  closeBoxURL: "",
                                  infoBoxClearance: new google.maps.Size(25, 25),
                                  isHidden: false,
                                  pane: "floatPane",
                                  enableEventPropagation: false,
                          };
    
    
                          var overlay, i;
    
                          var clusterStyles = [
                            {
                              textColor: 'white',
                              url: '',
                              height: 50,
                              width: 50
                            }
                          ];
    
    
                          var markerIco;
                          for (i = 0; i < locationsArr.length; i++) {
    
                            markerIco = locationsArr[i][4];
    
                            var overlaypositions = new google.maps.LatLng(locationsArr[i][1], locationsArr[i][2]),
    
                            overlay = new CustomMarker(
                             overlaypositions,
                              map,
                              {
                                marker_id: i
                              },
                              markerIco
                            );
                            
                            if(i+1==locationsArr.length)
                            {
                                myMarker = overlay;
                            }else{allMarkers.push(overlay)}
    
                            google.maps.event.addDomListener(overlay, 'click', (function(overlay, i) {
    
                            return function() {
                                 ib.setOptions(boxOptions);
                                 boxText.innerHTML = locationsArr[i][0];
                                 ib.close();
                                 ib.open(map, overlay);
                                 currentInfobox = locationsArr[i][3];
                                 // var latLng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                                 // map.panTo(latLng);
                                 // map.panBy(0,-90);
    
    
                                google.maps.event.addListener(ib,'domready',function(){
                                  $('.infoBox-close').click(function(e) {
                                      e.preventDefault();
                                      ib.close();
                                      $('.map-marker-container').removeClass('clicked infoBox-opened');
                                  });
    
                                });
    
                              }
                            })(overlay, i));
    
                          }
    
    
                          // Marker Clusterer Init
                          // ----------------------------------------------- //
    
                          var options = {
                              imagePath: 'images/',
                              styles : clusterStyles,
                              minClusterSize : 2
                          };
    
                          markerCluster = new MarkerClusterer(map, allMarkers, options);
    
                          google.maps.event.addDomListener(window, "resize", function() {
                              var center = map.getCenter();
                              google.maps.event.trigger(map, "resize");
                              map.setCenter(center);
                          });
                      }
                }
          });
        }

        var service = new google.maps.places.PlacesService(map);
        var data;
        if(!category) category = ['Todas las categorías'];

        if(location)
        {
          var geocoder = new google.maps.Geocoder();

          geocoder.geocode({ address: location }, (results, status)=>{
              if(status === 'OK')
              {
                  if(results[0]){
                    data = {
                        query: search,
                        location_lat: results[0].geometry.location.lat(),
                        location_lng: results[0].geometry.location.lng(),
                        radius: radius,
                        category: category
                    };
                    initSearch(service, data, results[0].geometry.location, location);
                  }
              }else alert('Geocode was not successful for the following reason: ' + status);
          })
        }else{
            navigator.geolocation.getCurrentPosition(position=>{
                location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                
                data = {
                    query: search,
                    location_lat: location.lat(),
                    location_lng: location.lng(),
                    radius: radius,
                    category: category
                };

                initSearch(service, data, location);
            })
        }

        // Chosen Rating Type
        google.maps.event.addListener(ib,'domready',function(){
           if (infoBox_ratingType = 'numerical-rating') {
              numericalRating('.infoBox .'+infoBox_ratingType+'');
           }
           if (infoBox_ratingType = 'star-rating') {
              starRating('.infoBox .'+infoBox_ratingType+'');
           }
        });

        // Marker highlighting when hovering listing item
        $('.listing-item-container').on('mouseover', function(){
            if($(window).width()>1024)
            {
              var listingAttr = $(this).data('marker-id');

              if(listingAttr !== undefined) {
                var listing_id = $(this).data('marker-id') - 1;
                var marker_div = allMarkers[listing_id].div;
    
                $(marker_div).addClass('clicked');
    
                map.panTo(allMarkers[listing_id].getPosition());
                
                $(this).on('mouseout', function(){
                    if ($(marker_div).is(":not(.infoBox-opened)")) {
                       $(marker_div).removeClass('clicked');
                    }
                 });
                }
          }

        });
        
        $('.listing-item-container').on('click', function(ev){
            if($(window).width()<=1024)
            {
              ev.preventDefault();
              var listingAttr = $(this).data('marker-id');
    
              if(listingAttr !== undefined) {
                var listing_id = $(this).data('marker-id') - 1;
                var marker_div = allMarkers[listing_id].div;
    
                $(marker_div).addClass('clicked');
    
                map.panTo(allMarkers[listing_id].getPosition());
                
                $(marker_div).trigger('click');

                $(this).on('mouseout', function(){
                    if ($(marker_div).is(":not(.infoBox-opened)")) {
                       $(marker_div).removeClass('clicked');
                    }
                 });
              }
            }
        });

        // Custom User Interface Elements
        // ----------------------------------------------- //

        // Custom Zoom-In and Zoom-Out Buttons
          var zoomControlDiv = document.createElement('div');
          var zoomControl = new ZoomControl(zoomControlDiv, map);

          function ZoomControl(controlDiv, map) {

            zoomControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
            // Creating divs & styles for custom zoom control
            controlDiv.style.padding = '5px';
            controlDiv.className = "zoomControlWrapper";

            // Set CSS for the control wrapper
            var controlWrapper = document.createElement('div');
            controlDiv.appendChild(controlWrapper);

            // Set CSS for the zoomIn
            var zoomInButton = document.createElement('div');
            zoomInButton.className = "custom-zoom-in";
            controlWrapper.appendChild(zoomInButton);

            // Set CSS for the zoomOut
            var zoomOutButton = document.createElement('div');
            zoomOutButton.className = "custom-zoom-out";
            controlWrapper.appendChild(zoomOutButton);

            // Setup the click event listener - zoomIn
            google.maps.event.addDomListener(zoomInButton, 'click', function() {
              map.setZoom(map.getZoom() + 1);
            });

            // Setup the click event listener - zoomOut
            google.maps.event.addDomListener(zoomOutButton, 'click', function() {
              map.setZoom(map.getZoom() - 1);
            });

        }


        // Scroll enabling button
        var scrollEnabling = $('#scrollEnabling');

        $(scrollEnabling).click(function(e){
            e.preventDefault();
            $(this).toggleClass("enabled");

            if ( $(this).is(".enabled") ) {
               map.setOptions({'scrollwheel': true});
            } else {
               map.setOptions({'scrollwheel': false});
            }
        })


        // Geo Location Button
        $("#geoLocation, .input-with-icon.location a").click(function(e){
            e.preventDefault();
            geolocate();
        });

        function geolocate() {

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    map.setCenter(pos);
                    map.setZoom(10);
                });
            }
        }

         function newSearch(newQuery, newLocation, newCategories, newRadius){
            var data;
            if(!newCategories) newCategories = ['Todas las categorías'];
    
            if(newLocation)
            {
              var geocoder = new google.maps.Geocoder();
    
              geocoder.geocode({ address: newLocation }, (results, status)=>{
                  if(status === 'OK')
                  {
                      if(results[0]){
                        data = {
                            query: newQuery,
                            location_lat: results[0].geometry.location.lat(),
                            location_lng: results[0].geometry.location.lng(),
                            radius: newRadius,
                            category: newCategories
                        };
                        initSearch(service, data, results[0].geometry.location, newLocation);
                      }
                  }else alert('Geocode was not successful for the following reason: ' + status);
              })
            }
        }

        var form = $('.geolocator-form2');
		var submit = form.find(':submit');
		var input = form.find('.geolocator-input2');
		var changed = true;
		
		var autocomplete1 = new google.maps.places.Autocomplete(input[0], {types: ['address']});
		var autocomplete2 = new google.maps.places.Autocomplete(input[1], {types: ['address']});
		
		console.log(input);
		
        autocomplete1.addListener('place_changed', function() {
            var place = autocomplete1.getPlace();
            var address = place.formatted_address;
    		if(address && /\d/.test(address))
    		{
    		    changed = true;
    		    return true;
    		}else{
    		  input.val('');
    		  changed = false;
    		  return false;
    		}
        });
        
        $(input[0]).on('click',(ev)=>{
            showGeolocationPopup();
        });
        
        autocomplete2.addListener('place_changed', function() {
            var place = autocomplete2.getPlace();
            var address = place.formatted_address;
    		if(address && /\d/.test(address))
    		{
    		    changed = true;
    		    return true;
    		}else{
    		  input.val('');
    		  changed = false;
    		  return false;
    		}
        });
        
        $(input[1]).on('click',(ev)=>{
            showGeolocationPopup();
        });
        
        form.submit((ev)=>{
		    if(!changed) return false;
		    ev.preventDefault();
		    if($(window).width()<=1024)
		    {
		        $.magnificPopup.close();
		    }
		    var currentQuery = $(ev.target).find('#palabcompleteresult').val();
		    var currentLocation = $(ev.target).find('.geolocator-input2').val();
		    var currentCategories = [];
		    $(ev.target).find('.checkboxes.categories :checked').each(function(){
		        currentCategories.push($(this).val())
		    })
		    var currentRadius = $(ev.target).find('#distance-radius').val();

		    if(currentQuery && currentLocation && currentCategories && currentRadius)
		    {
		        newSearch(currentQuery, currentLocation, currentCategories, currentRadius);
		    }
		    return false;
		})
		
        var btn = form.find('.geolocator-btn2').click(()=>{
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(position=>{
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ location: new google.maps.LatLng(position.coords.latitude, position.coords.longitude) }, (results, status)=>{
                if (status == 'OK'){
                    input.val(results[0].formatted_address);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            })
          })
        }else console.log('Geolocati璐竛 is not supported by this browser')
      })
      }
      // Map Init
      var map =  document.getElementById('map');
      if (typeof(map) != 'undefined' && map != null) {
        mainMap();
      }


      // ---------------- Main Map / End ---------------- //


      // Custom Map Marker
      // ----------------------------------------------- //

      function CustomMarker(latlng, map, args, markerIco) {
        this.latlng = latlng;
        this.args = args;
        this.markerIco = markerIco;
        this.setMap(map);
      }

      CustomMarker.prototype = new google.maps.OverlayView();

      CustomMarker.prototype.draw = function() {

        var self = this;

        var div = this.div;

        if (!div) {

          div = this.div = document.createElement('div');
          div.className = 'map-marker-container';

          div.innerHTML = '<div class="marker-container">'+
                              '<div class="marker-card">'+
                                 '<div class="front face">' + self.markerIco + '</div>'+
                                 '<div class="back face">' + self.markerIco + '</div>'+
                                 '<div class="marker-arrow"></div>'+
                              '</div>'+
                            '</div>'


          // Clicked marker highlight
          google.maps.event.addDomListener(div, "click", function(event) {
              $('.map-marker-container').removeClass('clicked infoBox-opened');
              google.maps.event.trigger(self, "click");
              $(this).addClass('clicked infoBox-opened');
          });


          if (typeof(self.args.marker_id) !== 'undefined') {
            div.dataset.marker_id = self.args.marker_id;
          }

          var panes = this.getPanes();
          panes.overlayImage.appendChild(div);
        }

        var point = this.getProjection().fromLatLngToDivPixel(this.latlng);

        if (point) {
          div.style.left = (point.x) + 'px';
          div.style.top = (point.y) + 'px';
        }
      };

      CustomMarker.prototype.remove = function() {
        if (this.div) {
          this.div.parentNode.removeChild(this.div);
          this.div = null; $(this).removeClass('clicked');
        }
      };

      CustomMarker.prototype.getPosition = function() { return this.latlng; };

      // -------------- Custom Map Marker / End -------------- //



  })(this.jQuery);
}