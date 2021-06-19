<?php include("php/session.php") ?>

<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Detalle del Establecimiento</title>
<?php include("builder/head.html"); ?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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
        .ui-widget-content{
		border: none !important;
		font-size: 15px !important;
		font-family: "Raleway", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		padding-top: 5px !important;
		padding-bottom: 5px !important;
		z-index: 1000 !important;
		color: #888 !important;
		padding: 0 4px 0 8px !important;
    	}
    	.ui-state-active{
    		color: #f91942 !important;
    		background: none !important;
    		border: none !important;
    	}
    	input.ui-autocomplete-input.active{
    		box-shadow: 0px 0px 6px 0px rgb(0 0 0 / 15%) !important;
    	}
    	.contEst{
    	    font-family: "Raleway", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
    	}
    	.contEst a{
    	    color: #333;
    	}
    	.mfp-content .row{
    	    margin-right: 0 !important;
    	    margin-left: 0 !important;
    	}
    	.cont-est .simple-slick-carousel .slick-slide{
    	    padding: 0 !important;
    	}
    	.cont-est .category-small-box {
            color: #333 !important;
            background-color: rgba(0,0,0,0) !important;
            padding: 0 !important;
        }
    	.cont-est .category-small-box:hover {
            color: #333 !important;
            background-color: rgba(0,0,0,0) !important;
        }
        body {
            font-family: "Raleway", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
        }
        .main-search-input-item {
            color: #333;
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


<div class="container">

	<!--BANNER DE ESTABLECIMIENTO-->
	<?php include("builder/secciones_detalle_est/banner_est.php"); ?>	

	<!--ESTRUCTURA PARA LA VERSION DESKTOP-->
	<div class="row hidden-xs hidden-sm" style="margin-top: 40px;">
		<!--Datos lado izquierdo-->
		<div class="col-md-6 col-sm-12 col-xs-12">
			<?php include("builder/secciones_detalle_est/mapa.php"); ?>
		    <?php include("builder/secciones_detalle_est/informacion.php"); ?>
		    <?php include("builder/secciones_detalle_est/video.php"); ?>
		</div>


		<!--Datos lado derecho-->
		<div class="col-md-6 col-sm-12 col-xs-12">
			<?php include("builder/secciones_detalle_est/info_est.php"); ?>
			<?php include("builder/secciones_detalle_est/extras.php"); ?>
			<?php /*include("builder/secciones_detalle_est/mini_tienda.php");*/ ?>
			<?php include("builder/secciones_detalle_est/galeria.php"); ?>
			<?php include("builder/secciones_detalle_est/horarios.php"); ?>
			<?php include("builder/secciones_detalle_est/tag.php"); ?>
		</div>
	</div>
	<!--FIN ESTRUCTURA PARA LA VERSION DESKTOP-->

	<!--ESTRUCTURA PARA LA VERSION MOVIL-->
	<div class="visible-xs visible-sm hidden-md">
		<?php include("builder/secciones_detalle_est/mapa.php"); ?>
		<?php include("builder/secciones_detalle_est/info_est.php"); ?>
		<?php include("builder/secciones_detalle_est/extras.php"); ?>
		<?php /*include("builder/secciones_detalle_est/mini_tienda.php");*/ ?>
		<?php include("builder/secciones_detalle_est/informacion.php"); ?>
		<?php include("builder/secciones_detalle_est/galeria.php"); ?>
		<?php include("builder/secciones_detalle_est/video.php"); ?>
		<?php include("builder/secciones_detalle_est/horarios.php"); ?>
		<?php include("builder/secciones_detalle_est/tag.php"); ?>
	</div>
	<!--FIN ESTRUCTURA PARA LA VERSION MOVIL-->

</div>

<!-- Content ervicios
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3>Servicios del Local</h3>

			<div data-slick='{"slidesToShow": 6, "slidesToScroll": 6, "autoplay": true}' class="simple-slick-carousel dots-nav">
				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Wifi"></i>
						<h4>Wifi</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Truck"></i>
						<h4>Delivery Gratis</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Smoking-Area"></i>
						<h4>Zona Fumadores</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Gamepad-2"></i>
						<h4>Zona Niños</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Credit-Card"></i>
						<h4>Pago con Tarjeta</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Wheelchair"></i>
						<h4>Rampa Silla de ruedas</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Shield"></i>
						<h4>Protocolo de Seguridad</h4>
					</li>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<li class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Headset"></i>
						<h4>Atención al Cliente</h4>
					</li>
				</div>
				<!-- Listing Item / End -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->


<div class="container cont-est">
	<!--Productos relacionados-->
	<h3>Establecimientos Similares</h3>
	<div class="row">
	    <div data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true}' class="simple-slick-carousel dots-nav">
			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
            		<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
            			<div class="contEst">
            				<div class="logoEst">
            					<img src="images/logo_est01.jpg" class="img-responsive">
            				</div>
            				<div class="DatosEst">
            					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
            					<small>Av. LA Marina 223 - San Miguel</small>
            					<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
            						<div class="rating-counter"></div>
            					</div>
            					<div class="valoraciones">12 valoraciones</div>
            				</div>
            				<div style="clear: both;"></div>
            			</div>
            		</div>
            		<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
            		<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
            			<div class="contEst">
            				<div class="logoEst">
            					<img src="images/logo_est02.jpg" class="img-responsive">
            				</div>
            				<div class="DatosEst">
            					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
            					<small>Av. LA Marina 223 - San Miguel</small>
            					<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
            						<div class="rating-counter"></div>
            					</div>
            					<div class="valoraciones">12 valoraciones</div>
            				</div>
            				<div style="clear: both;"></div>
            			</div>
            		</div>
            		<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
                	<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
                		<div class="contEst">
                			<div class="logoEst">
                				<img src="images/logo_est03.jpg" class="img-responsive">
                			</div>
                			<div class="DatosEst">
                				<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
                				<small>Av. LA Marina 223 - San Miguel</small>
                				<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
                					<div class="rating-counter"></div>
                				</div>
                				<div class="valoraciones">12 valoraciones</div>
                			</div>
                			<div style="clear: both;"></div>
                		</div>
                	</div>
                	<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
            		<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
            			<div class="contEst">
            				<div class="logoEst">
            					<img src="images/logo_est04.jpg" class="img-responsive">
            				</div>
            				<div class="DatosEst">
            					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
            					<small>Av. LA Marina 223 - San Miguel</small>
            					<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
            						<div class="rating-counter"></div>
            					</div>
            					<div class="valoraciones">12 valoraciones</div>
            				</div>
            				<div style="clear: both;"></div>
            			</div>
            		</div>
            		<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->
			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
            		<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
            			<div class="contEst">
            				<div class="logoEst">
            					<img src="images/logo_est01.jpg" class="img-responsive">
            				</div>
            				<div class="DatosEst">
            					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
            					<small>Av. LA Marina 223 - San Miguel</small>
            					<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
            						<div class="rating-counter"></div>
            					</div>
            					<div class="valoraciones">12 valoraciones</div>
            				</div>
            				<div style="clear: both;"></div>
            			</div>
            		</div>
            		<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
            		<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
            			<div class="contEst">
            				<div class="logoEst">
            					<img src="images/logo_est02.jpg" class="img-responsive">
            				</div>
            				<div class="DatosEst">
            					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
            					<small>Av. LA Marina 223 - San Miguel</small>
            					<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
            						<div class="rating-counter"></div>
            					</div>
            					<div class="valoraciones">12 valoraciones</div>
            				</div>
            				<div style="clear: both;"></div>
            			</div>
            		</div>
            		<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
                	<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
                		<div class="contEst">
                			<div class="logoEst">
                				<img src="images/logo_est03.jpg" class="img-responsive">
                			</div>
                			<div class="DatosEst">
                				<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
                				<small>Av. LA Marina 223 - San Miguel</small>
                				<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
                					<div class="rating-counter"></div>
                				</div>
                				<div class="valoraciones">12 valoraciones</div>
                			</div>
                			<div style="clear: both;"></div>
                		</div>
                	</div>
                	<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->

			<!-- Listing Item -->
			<div class="carousel-item">
				<li class="category-small-box" style="width: 100%;">
					<!--DatosEstablecimiento-->
            		<div class="col-md-3 col-sm-3 col-xs-12" style="width: 100%;">
            			<div class="contEst">
            				<div class="logoEst">
            					<img src="images/logo_est04.jpg" class="img-responsive">
            				</div>
            				<div class="DatosEst">
            					<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
            					<small>Av. LA Marina 223 - San Miguel</small>
            					<div class="star-rating" data-rating="3.5" style="display: flex; justify-content: center;">
            						<div class="rating-counter"></div>
            					</div>
            					<div class="valoraciones">12 valoraciones</div>
            				</div>
            				<div style="clear: both;"></div>
            			</div>
            		</div>
            		<!--Fin DatosEstablecimiento-->
				</li>
			</div>
			<!-- Listing Item / End -->
		</div>
	</div>
</div>

<!-- Footer
================================================== -->
<?php include("builder/footer.php"); ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<?php include("builder/js_footer.php"); ?>

<?php include("user_location.php"); ?>

<script>
  // Note: This example requires that you consent to location sharing when
  // prompted by your browser. If you see the error "The Geolocation service
  // failed.", it means you probably did not give permission for the browser to
  // locate you.
  var map, infoWindow, marker;
  function initMap() {
    var mapDiv;
    if($(window).width()<=1024)
    {
        mapDiv = document.querySelector('.visible-xs.visible-sm.hidden-md #map');
    }else{
        mapDiv = document.querySelector('.row.hidden-xs.hidden-sm #map');
    }
    map = new google.maps.Map(mapDiv, {
      center: {lat: -12.053060494116805, lng: -77.06046716817464},
      zoom: 16,
      disableDefaultUI:true,
      styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
    });
    infoWindow = new google.maps.InfoWindow;

        var pos = {
          lat: -12.053060494116805,
          lng: -77.06046716817464
        };
        marker = new google.maps.Marker({position: pos, map: map});
        marker.setDraggable(false);
  }
</script>


<script src="scripts/googleServices.js"></script>
<script type="text/javascript">
	function initServices(){
		$(document).ready(function(){
			$(function() {
					if(!<?php echo isset($_SESSION['user_address'])? 1:0 ?>)
					{
						initAutocomplete();
						showGeolocationPopup();
					}else{
						initAutocomplete();
					}
					initMap();
			})
		})
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0kphWL4y--yzEgat2x8bksm_sRmwf7NM&libraries=places&callback=initServices"></script>
<script src="scripts/palabcomplete.js" charset="utf-8"></script>

<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	});
</script>

<script src="scripts/bootstrap.js"></script>

</body>
</html>