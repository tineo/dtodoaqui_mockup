function buildEstablishment(est_link, est_status, est_photo, est_name, est_address, est_rating, est_valorations)
{
    return(
        '<div class="col-lg-4 col-md-6 isotope-item first-filter">'+
		    '<a href="'+est_link+'" class="listing-item-container compact">'+
				'<div class="listing-item">'+
					'<img src="'+est_photo+'" alt="">'+

					'<div class="listing-badge '+(est_status="open"?'now-open">Abierto ahora':'now-closed">Cerrado ahora')+'</div>'+

					'<div class="listing-item-content">'+
						'<div class="numerical-rating" data-rating="'+est_rating+'"></div>'+
						'<h3>'+est_name+'</h3>'+
						'<span>'+est_address+'</span>'+
					'</div>'+
					'<span class="like-icon"></span>'+
				'</div>'+
			'</a>'+
		'</div>'
        );
}
				
function searchEstablishments()
{
    photos = ['images/listing-item-01.jpg', 'images/listing-item-02.jpg', 'images/listing-item-03.jpg', 'images/listing-item-04.jpg', 'images/listing-item-05.jpg', 'images/listing-item-06.jpg', 'images/listing-item-01.jpg', 'images/listing-item-02.jpg'];
    $.ajax({
        url: "php/top_establecimientos.php",
        type: "GET",
        dataType: "json",
        success: function(response) {
            if(response.status == 200)
            {
                let index = 0;
                $('div .projects .isotope-item').remove();
                for (var key in response.data)
                  {
                    index++;
                    if(index<10)
                    {
                        let loc = response.data[key];
                        let photo;
                        // if(loc.foto){photo = loc.foto}
                        // else{photo = 'images/no-image.png'}
                        photo = photos[index];
                        $($('div .projects')).append(buildEstablishment('establecimiento-detalle.php', loc.abierto==0?false:true, photo, loc.nom_comercial, loc.direccion, (loc.val==''?0:loc.val), loc.votos));
                    }
                }
            }else{console.log('Request failed')}
        }
    })
}

searchEstablishments();