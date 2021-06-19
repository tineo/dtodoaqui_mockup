$(document).ready(function(){
    $(function(){
          var decodeEntities = (function() {
          // this prevents any overhead from creating the object each time
          var element = document.createElement('div');
        
          function decodeHTMLEntities (str) {
            if(str && typeof str === 'string') {
              // strip script/html tags
              str = str.replace(/<script[^>]*>([\S\s]*?)<\/script>/gmi, '');
              str = str.replace(/<\/?\w(?:[^"'>]|"[^"]*"|'[^']*')*>/gmi, '');
              element.innerHTML = str;
              str = element.textContent;
              element.textContent = '';
            }
        
            return str;
          }
        
          return decodeHTMLEntities;
        })();
        
        function ajaxCall(data)
        {
            $.ajax({
            url: "php/autocomplete_region.php",
            type: "POST",
            dataType: "json",
            data: data,
            success: function(response) {
                if(response.data)
                {
                    setRegions(response.data);
                }
            }
        })
        return;
      }
      
      ajaxCall({});
      var countrySelect = $('select[name="country"]');
      var citySelect = $('select[name="city"]');
      var districtSelect = $('select[name="district"]');
      
      function setRegions(data)
      {
          data.forEach(row=>{
              countrySelect.append(new Option(decodeEntities(row["pais"]), row["idpais"]));
          })
          countrySelect.trigger('chosen:updated');
          
        countrySelect.on("change", (ev)=>{
            if(ev.target.value!='')
            {
                citySelect.empty();
                citySelect.append('<option value="" selected>-- Provincia / Estado --</option>');
                districtSelect.empty();
                districtSelect.append('<option value="" selected>-- Distrito / Ciudad --</option>');
                districtSelect.trigger('chosen:updated');
                
                $.ajax({
                    url: "php/autocomplete_region.php",
                    type: "POST",
                    dataType: "json",
                    data: {"country": countrySelect.val()},
                    success: function(response) {
                        if(response.data)
                        {
                            response.data.forEach(row=>{
                                citySelect.append(new Option(decodeEntities(row["ciudad"]), row["idciudad"]));
                            })
                            citySelect.trigger('chosen:updated');
                        }
                    }
                })   
            }
        })
          
        citySelect.on("change", (ev)=>{
            if(ev.target.value!='')
            {
                districtSelect.empty();
                districtSelect.append('<option value="" selected>-- Distrito / Ciudad --</option>');
                
                $.ajax({
                    url: "php/autocomplete_region.php",
                    type: "POST",
                    dataType: "json",
                    data: {"country": countrySelect.val(), "city": citySelect.val()},
                    success: function(response) {
                        if(response.data)
                        {
                            response.data.forEach(row=>{
                                districtSelect.append('<option value='+row["iddistrito"]+' data-location='+row["geoloca"]+'>'+decodeEntities(row["distrito"])+'</option>');
                            })
                            districtSelect.trigger('chosen:updated');
                        }
                    }
                })   
            }
        })
        
        districtSelect.on("change",(ev)=>{
            if(ev.target.value!='' && $(ev.target.selectedOptions).attr('data-location'))
            {
                setMapLocation($(ev.target.selectedOptions).attr('data-location').split(','));
            }
        })
      }
    })
})