function buildEstablishment(est_logo, est_url, est_name, est_address, est_rating, est_valorations, responsive, editable)
{
    return(
        '<!--DatosEstablecimiento-->'+
        '<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card"'+(responsive?' style="width: 45%;"':'')+'>'+
            '<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim"'+(responsive?' style="right: 5px; top: 5px;"':'')+'><i class="fa fa-times-circle fa-'+(responsive?'2':'3')+'x"></i></a></div>'+
            '<div class="contEst">'+
                '<div class="logoEst">'+
                    '<img src="'+est_logo+'" class="img-responsive">'+
                    '</div>'+
                '<div class="DatosEst">'+
                    '<div class="titEst"><a href="'+est_url+'" style="display: block; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 50px; overflow: hidden;">'+est_name+'</a></div>'+
                    '<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">'+est_address+'</small>'+
                    '<div class="star-rating" data-rating="'+est_rating+'">'+
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
                (editable?'<div class="accion"><a href="editar_establecimientos.php"'+(responsive?' style="font-size: 11px;"':'')+'><i class="sl sl-icon-settings"></i> Editar establecimiento</a></div>':'')+
            '</div>'+
        '</div>'+
        '<!--Fin DatosEstablecimiento-->'
        );
}
				
function searchEstablishments(query, userId, editable)
{
    $.ajax({
        url: "php/user_mis_establecimientos.php",
        type: "POST",
        dataType: "json",
        data: {
          query: query,
          userId: userId
        },
        success: function(response) {
            if(response.status == 200)
            {
                $('#establishments_container .establishment_card').remove();
                foto = ["images/logo_est01.jpg", "images/logo_est02.jpg", "images/logo_est03.jpg", "images/logo_est04.jpg", "images/logo_est01.jpg", "images/logo_est02.jpg", "images/logo_est03.jpg", "images/logo_est04.jpg", "images/logo_est01.jpg", "images/logo_est02.jpg", "images/logo_est03.jpg", "images/logo_est04.jpg"]
                let counter = 0;
                for (var key in response.data)
                  {
                    let establishment = response.data[key];
                    if(counter<=11)
                    {
                        if($(window).width()>1024)
                        {
                            $('#establishments_container.visible-lg').append(buildEstablishment(foto[counter], 'establecimiento-detalle.php', establishment.nom_comercial, establishment.direccion, (establishment.val==''?0:establishment.val), establishment.votos, false, editable)).find('a.popup-with-zoom-anim')
                            .magnificPopup({
                            	 type: 'inline',
                            
                            	 fixedContentPos: false,
                            	 fixedBgPos: true,
                            
                            	 overflowY: 'auto',
                            
                            	 closeBtnInside: true,
                            	 preloader: false,
                            
                            	 midClick: true,
                            	 removalDelay: 300,
                            	 mainClass: 'my-mfp-zoom-in'
                            });
                            counter++;
                        }else{
                            var rowSelector = 0;
                            if(counter>=2 && counter<4) rowSelector = 1;
                            if(counter>=4 && counter<6) rowSelector = 2;
                            if(counter>=6 && counter<8) rowSelector = 3;
                            if(counter>=8 && counter<10) rowSelector = 4;
                            if(counter>=10 && counter<12) rowSelector = 5;
                            $($('#establishments_container.hidden-lg').children('.row')[rowSelector]).append(buildEstablishment(foto[counter], 'establecimiento-detalle.php', establishment.nom_comercial, establishment.direccion, (establishment.val==''?0:establishment.val), establishment.votos, true, editable)).find('a.popup-with-zoom-anim')
                            .magnificPopup({
                            	 type: 'inline',
                            
                            	 fixedContentPos: false,
                            	 fixedBgPos: true,
                            
                            	 overflowY: 'auto',
                            
                            	 closeBtnInside: true,
                            	 preloader: false,
                            
                            	 midClick: true,
                            	 removalDelay: 300,
                            	 mainClass: 'my-mfp-zoom-in'
                            });
                            counter++;
                        }
                    }
                  }
            }else{console.log('Request failed')}
        }
    })
}

$('#establishment_form').not('.my_est').on('submit', (ev)=>{
    ev.preventDefault();
    
    var query = $('#establishment_search').val();
    searchEstablishments(query, 17);
})

$('#establishment_search').not('.my_est').on('keyup', (ev)=>{
    var query = $('#establishment_search').val();
    searchEstablishments(query, 17);
})

$('#establishment_form.my_est').on('submit', (ev)=>{
    ev.preventDefault();
    
    var query = $('#establishment_search').val();
    searchEstablishments(query, 17, true);
})

$('#establishment_search.my_est').on('keyup', (ev)=>{
    var query = $('#establishment_search').val();
    searchEstablishments(query, 17, true);
})

if($(window).width>1024) searchEstablishments('', 17);
else searchEstablishments('', 17, true);