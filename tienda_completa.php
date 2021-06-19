<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Detalle del Establecimiento</title>
<?php include("builder/head.html"); ?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 300px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
       .wht{
		  bottom: 70px;
		  position: fixed;
		  padding: 25px;
		  z-index: 1000;
		  right: 0;
		}

    </style>

</head>

<body>

<!--boton WhatsApp-->
<div class="wht">
	<a href="https://api.whatsapp.com/send?phone=51994572335" target="_blank">
		<img src="images/ico_wh.png">
	</a>
</div>
<!--Fin boton WhatsApp-->

<!-- Wrapper -->
<div id="wrapper">

<!-- Cabecera
================================================== -->
<?php include("builder/header.php"); ?>


<div class="container" style="margin-top: 20px;">

	<div class="row">
		<!--Datos lado izquierdo-->
		<div class="col-md-6 col-sm-12 col-xs-12">
			<!--mapa-->
			<div id="map"></div>
		    <script>
		      var map;
		      function initMap() {
				  var myLatLng = {lat: -12.072121, lng: -77.104287};

				  var map = new google.maps.Map(document.getElementById('map'), {
				    zoom: 16,
				    center: myLatLng
				  });

				  var marker = new google.maps.Marker({
				    position: myLatLng,
				    map: map,
				    title: 'Mi Establecimiento'
				  });
				}
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $MiApiKeyMaps ?>&callback=initMap"
		    async defer></script>
		    <!--fin mapa-->
		</div>


		<!--Datos lado derecho-->
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">
					<!-- Avatar -->
					<div class="edit-profile-photo" style="text-align: center; margin-bottom: 0;">
						<img src="images/logo_est01.jpg" style="max-width: 150px;" alt="">
					</div>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-12" >
					<div class="DatosEst" style="background: transparent; padding: 0;">
						<div class="titEst" style="font-size: 18px;"><strong>Nombre Establecimiento</strong></div>
						<small>Av. LA Marina 223 - San Miguel</small>
						<div class="star-rating" data-rating="3.5">
							<div class="rating-counter"></div>
						</div>
						<div class="valoraciones">12 valoraciones</div>
					</div>
				</div>
			</div>

			<!-- Extras -->
			<div class="listing-links-container" style="margin-top: 0;">

				<ul class="listing-links contact-links">
					<li><a href="tel:5114253554" class="listing-links"><i class="fa fa-phone"></i> (511) 425-3554</a></li>
					<li><a href="mailto:mail@example.com" class="listing-links"><i class="fa fa-envelope-o"></i> mail@example.com</a>
					</li>
					<li><a href="#" target="_blank"  class="listing-links"><i class="fa fa-link"></i> www.example.com</a></li>
				</ul>
				<div class="clearfix"></div>

				<ul class="listing-links">
					<li><a href="#" target="_blank" class="listing-links-fb"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="#" target="_blank" class="listing-links-yt"><i class="fa fa-youtube-play"></i></a></li>
					<li><a href="#" target="_blank" class="listing-links-ig"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank" class="listing-links-wt"><i class="fa fa-whatsapp"></i></a></li>
				</ul>
				<div class="clearfix" style="margin-bottom: 25px;"></div>
				<a href="establecimiento-detalle.php" class="button medium"><i class="sl sl-icon-arrow-left-circle"></i> Regresar</a>
				

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<hr>

	<!--Buscador-->
	<div class="visible-lg" style="height: 30px;"></div>
	<div class="row" style="margin: 15px 0;">
		<div class="col-md-9 col-sm-7 col-xs-12">
			<div class="input-with-icon">
				<i class="sl sl-icon-magnifier"></i>
				<input type="text" placeholder="¿Qué estás buscando?" value="">
			</div>
		</div>
		<div class="col-md-3 col-sm-5 col-xs-12">
			<a href="#" class="button medium" style="margin-top: 5px;">Buscar <i class="fa fa-arrow-circle-right"></i></a>
		</div>	
	</div>

	<!--Productos-->
	<div class="row" style="margin: 50px 0;">
		<!--Fila 1-->
		<div class="colTiendaLG">
			<div class="ProdImg">
				<a class="popup-with-zoom-anim" href="#popupDetProd"><img src="images/productos/prod01.jpg" class="img-responsive"></a>
			</div>
			<div class="ProdNom"><a class="popup-with-zoom-anim" href="#popupDetProd">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div class="MsgOk" align="center">
				<a href="javascript:void(0);" class="button" onclick="_gaq.push(['_trackEvent', 'MsgOk']);">Añadir <i class="fa fa-shopping-cart"></i></a>
			</div>
		</div>
		<div class="colTiendaLG">
			<div class="ProdImg"><img src="images/productos/prod02.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
		<div class="colTiendaLG">
			<div class="ProdImg"><img src="images/productos/prod03.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
		<div class="colTiendaLG">
			<div class="ProdImg"><img src="images/productos/prod04.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>


		<!--Fila 2-->
		<div class="colTiendaLG">
			<div class="ProdImg">
				<a class="popup-with-zoom-anim" href="#popupDetProd"><img src="images/productos/prod01.jpg" class="img-responsive"></a>
			</div>
			<div class="ProdNom"><a class="popup-with-zoom-anim" href="#popupDetProd">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
		<div class="colTiendaLG">
			<div class="ProdImg"><img src="images/productos/prod02.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
		<div class="colTiendaLG">
			<div class="ProdImg"><img src="images/productos/prod03.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
		<div class="colTiendaLG">
			<div class="ProdImg"><img src="images/productos/prod04.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>


		<!-- Pagination Container -->
		<div class="row fs-listings" style="text-align: center; z-index: -1; position: relative;">
			<div class="col-md-12">
				<!-- Pagination -->
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-15 margin-bottom-40">
							<nav class="pagination">
								<ul>
									<li><a href="#" class="current-page">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->
			</div>
		</div>
		<!-- Pagination Container / End -->


	</div>


	<!--Modal detalle del producto-->
	<div id="popupDetProd" class="zoom-anim-dialog mfp-hide PopupDetProd" style="width: 50%;">
	 	<header><h3>Titulo del producto</h3></header>
	 	<div class="contenido">
	 		<div class="row">
	 			<div class="col-md-4">
	 				<img src="images/productos/prod01.jpg" class="img-responsive">
	 			</div>
	 			<div class="col-md-8">
	 				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quis nibh eu eleifend. Suspendisse potenti. Nullam tempus, magna at gravida mollis, lectus sapien ornare nunc, pulvinar finibus massa lorem in lectus. Mauris porta sed elit et maximus. Donec nec sollicitudin arcu. Nam sit amet rutrum turpis, vel lacinia nibh.
	 			</div>
	 		</div>
			<div style="clear: both; height: 10px;"></div>
	 	</div>
	</div>
	<!--fin Modal detalle del producto-->


	<!--Alerta de Ok-->
	<script>
	  document.querySelector('.MsgOk').onclick = function(){
	    swal("Producto añadido", "Se agrego el producto correctamente.", "success");
	  };
	</script>

	<script>
	  document.querySelector('.MsgOk2').onclick = function(){
	    swal("Producto añadido", "Se agrego el producto correctamente.", "success");
	  };
	</script>
	<!--Fin Productos-->

	<!--Productos relacionados-->
	<h3>Establecimientos Similares</h3>
	<div class="row">
		<!--DatosEstablecimiento-->
		<div class="col-md-3 col-sm-3 col-xs-6">
			<div class="contEst">
				<div class="logoEst">
					<img src="images/logo_est01.jpg" class="img-responsive">
				</div>
				<div class="DatosEst">
					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
					<small>Av. LA Marina 223 - San Miguel</small>
					<div class="star-rating" data-rating="3.5">
						<div class="rating-counter"></div>
					</div>
					<div class="valoraciones">12 valoraciones</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<!--Fin DatosEstablecimiento-->

		<!--DatosEstablecimiento-->
		<div class="col-md-3 col-sm-3 col-xs-6">
			<div class="contEst">
				<div class="logoEst">
					<img src="images/logo_est02.jpg" class="img-responsive">
				</div>
				<div class="DatosEst">
					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
					<small>Av. LA Marina 223 - San Miguel</small>
					<div class="star-rating" data-rating="3.5">
						<div class="rating-counter"></div>
					</div>
					<div class="valoraciones">12 valoraciones</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<!--Fin DatosEstablecimiento-->

		<!--DatosEstablecimiento-->
		<div class="col-md-3 col-sm-3 col-xs-6">
			<div class="contEst">
				<div class="logoEst">
					<img src="images/logo_est03.jpg" class="img-responsive">
				</div>
				<div class="DatosEst">
					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
					<small>Av. LA Marina 223 - San Miguel</small>
					<div class="star-rating" data-rating="3.5">
						<div class="rating-counter"></div>
					</div>
					<div class="valoraciones">12 valoraciones</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<!--Fin DatosEstablecimiento-->

		<!--DatosEstablecimiento-->
		<div class="col-md-3 col-sm-3 col-xs-6">
			<div class="contEst">
				<div class="logoEst">
					<img src="images/logo_est04.jpg" class="img-responsive">
				</div>
				<div class="DatosEst">
					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
					<small>Av. LA Marina 223 - San Miguel</small>
					<div class="star-rating" data-rating="3.5">
						<div class="rating-counter"></div>
					</div>
					<div class="valoraciones">12 valoraciones</div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<!--Fin DatosEstablecimiento-->
	</div>
</div>




<script>
  document.querySelector('.MsgFav').onclick = function(){
    swal("Producto añadido a Favorito", "Se agrego el producto a Favoritos.", "success");
  };
</script>

<script>
  document.querySelector('.MsgRep').onclick = function(){
    Swal.fire({
	  title: 'Reportar este Establecimiento',
	  icon: 'warning',
	  html:
	    '<div class="panel-dropdown-content checkboxes categories">' +
	    '<input id="check-1" type="checkbox" name="check">'+
	    '<label for="check-1">Establecimiento no Existe</label>'+
	    '<input id="check-2" type="checkbox" name="check">'+
	    '<label for="check-2">Establecimiento Falso</label>'+
	    '<input id="check-3" type="checkbox" name="check">'+
	    '<label for="check-3">Establecimiento Peligroso</label>'+
	    '</div>',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Enviar reporte'
	}).then((result) => {
	  if (result.value) {
	    Swal.fire(
	      'Reportado!',
	      'El Establecimiento fue reportado.',
	      'success'
	    )
	  }
	})
  };
</script>

<script>
  document.querySelector('.MsgTit').onclick = function(){
    Swal.fire({
	  title: '¿Solicitar Titularidad?',
	  text: "Quiero solicitar la titularidad de este Establecimiento",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Enviar Solicitud'
	}).then((result) => {
	  if (result.value) {
	    Swal.fire(
	      'Enviado!',
	      'Su solicitud fué enviada.',
	      'success'
	    )
	  }
	})
  };
</script>



<!-- Footer
================================================== -->
<?php include("builder/footer.php"); ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<?php include("builder/js_footer.php"); ?>



<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>