<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Mis Datos</title>
<?php include("builder/head.html"); ?>


</head>
<style>
   /* Set the size of the div element that contains the map */
  #map {
    height: 400px;  /* The height is 400 pixels */
    width: 100%;  /* The width is the width of the web page */
   }
</style>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Cabecera
================================================== -->
<?php include("builder/header.php"); ?>

<!-- Content
	================================================== -->
	<div class="TitBread">
		<div class="container">
			<div class="col-md-6">
				<h2>Carrito de pedidos</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Carrito de pedidos</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	

	<div class="container">

		


		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
				<!-- Toggles Container -->
				<div class="style-2">

					<!-- Toggle 1 -->
					<div class="toggle-wrap">
						<span class="trigger">
							<a href="#"><i class="sl sl-icon-plus"></i>
								<table style="width: 100%;">
									<tr>
										<td style="width: 15%;">
											<img src="images/logo_est01.jpg" alt="" style="width: 100%;">
										</td>
										<td style="width: 85%;">
											<div style="padding-left: 20px;">Bembos</div>
										</td>
									</tr>
								</table>
							</a>
						</span>
						<div class="toggle-container">
							<div class="row">
								<div class="col-md-8">
									<div class="NumPedido">Pedido Nº 00001</div>
									<div class="tablaContenedor">
										<table class="tablaDTA">
											<thead>
												<tr>
													<th>&nbsp;</th>
													<th>Nombre del producto</th>
													<th style="text-align: center;">Cant.</th>
													<th>P. Unit</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align: center;"><a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
													<td><a href="#popupfoto" class="popup-with-zoom-anim">Título del producto 1</a></td>
													<td style="text-align: center;">
														<div class="number-input">
														  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
														  <input class="quantity" min="0" name="quantity" value="2" type="number">
														  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
														</div>
													</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
												<tr>
													<td style="text-align: center;"><a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
													<td><a href="#popupfoto" class="popup-with-zoom-anim">Título del producto 2</a></td>
													<td style="text-align: center;">
														<div class="number-input">
														  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
														  <input class="quantity" min="0" name="quantity" value="1" type="number">
														  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
														</div>
													</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
												<tr>
													<td style="text-align: center;"><a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
													<td><a href="#popupfoto" class="popup-with-zoom-anim">Título del producto 3</a></td>
													<td style="text-align: center;">
														<div class="number-input">
														  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
														  <input class="quantity" min="0" name="quantity" value="1" type="number">
														  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
														</div>
													</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="visible-xs" style="margin-bottom: 25px;"><img src="images/imgslide.png"></div>
									<div style="padding: 10px;">
										<form>
										    <label class="radio-inline">
										      <input type="radio" name="optradio" checked style="display: inline; margin-right: 5px;">Recojo en tienda
										    </label>
										    <label class="radio-inline">
										      <input type="radio" name="optradio" style="display: inline; margin-right: 5px;">Delivery
										    </label>
										</form>

										<div class="notification success closeable" style="border-radius: 15px; padding: 5px 30px; margin-top: 10px;">
											<p style="font-size: 12px !important; line-height: 18px !important;">
												Este DIV se activa cuando se presiona la opción DELIVERY con las condiciones del establecimiento. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra massa enim, in porta diam malesuada ut. Cras neque dui, consequat tempus facilisis ac, viverra quis urna.
											</p>
										</div>


										<div class="form-group row" style="margin-top: 10px; padding: 15px;">
											<div class="tablaContenedor">
												<table class="tablaDTA">
													<thead>
														<tr>
															<th>&nbsp;</th>
															<th>Dirección de Envío</th>
															<th>Mapa</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input type="radio" name="DirOp" checked></td>
															<td>Detalles de la dirección 1 + distrito</td>
															<td><a href="#PopupVerMapa" class="popup-with-zoom-anim">Ver mapa</a></td>
														</tr>
														<tr>
															<td><input type="radio" name="DirOp"></td>
															<td>Detalles de la dirección 1 + distrito</td>
															<td><a href="#">Ver mapa</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="visible-xs" style="margin-bottom: 25px;"><img src="images/imgslide.png"></div>

										<div>
											<a href="#" class="button">Hacer Pedido</a>
											<a href="#" class="button border" style="height: 45px;">Eliminar Pedido</a>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="CajaEntrega">
										<h5><strong>Tipo de comprobante</strong></h5>
										<select class="chosen-select-no-single cajasPedido" >
											<option>-- Seleccione --</option>
											<option>Factura</option>
											<option>Boleta de Venta</option>
										</select>
										<h5><strong>Datos del cliente</strong></h5>
										<input class="cajasPedido" type="text" placeholder="Nombre o Razón Social">
										<input class="cajasPedido" type="number" placeholder="RUC">

										<h5><strong>Forma de pago</strong></h5>
										<select class="chosen-select-no-single cajasPedido" >
											<option>-- Seleccione --</option>
											<option>Contra entrega</option>
											<option>Yape</option>
											<option>Tunky</option>
										</select>
										<div class="row" style="padding-top: 15px;">
											<div class="col-md-4 col-sm-4 col-xs-5">
												<img src="images/logo_yape.png" style="width: 100%;">
											</div>
											<div class="col-md-8 col-sm-8 col-xs-7">
												<strong>Beneficiario:<br></strong>
												NOMBRE DE LA EMPRESA S.A.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Toggle 2 -->
					<div class="toggle-wrap">
						<span class="trigger"><a href="#">Establecimiento 2 <i class="sl sl-icon-plus"></i> </a></span>
						<div class="toggle-container">
							<p>{Mismo esquema que el primero}</p>
						</div>
					</div>

				</div>
				<!-- Toggles Container / End -->
			</div>
		</div>
	</div>
	<!-- Content / End -->


	<!--Popup detalle producto-->
	<div id="popupfoto" class="zoom-anim-dialog mfp-hide PopupDetProd">
	 	<header><h3>Nombre del Producto</h3></header>
	 	<div class="contenido">
	 		<div class="row">
	 			<div class="col-md-4"><img src="images/productos/prod01.jpg" class="img-responsive"></div>
	 			<div class="col-md-8">
	 				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quis nibh eu eleifend. Suspendisse potenti. Nullam tempus, magna at gravida mollis, lectus sapien ornare nunc, pulvinar finibus massa lorem in lectus. Mauris porta sed elit et maximus. Donec nec sollicitudin arcu. Nam sit amet rutrum turpis, vel lacinia nibh. </p>
	 			</div>
	 		</div>


			<div style="clear: both; height: 10px;"></div>
	 	</div>
	</div>
	<!--fin popup  detalle del producto-->

</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>



<!--Popup Ver Mapa-->
<div id="PopupVerMapa" class="zoom-anim-dialog mfp-hide PopupDetProd">
 	<header><h3>Nombre de la dirección</h3></header>
 	<div class="contenido">
 		<div id="map"></div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>
<!--fin Ver Mapa-->


<?php include("builder/footer.php"); ?>
<?php include("builder/js_footer.php"); ?>

<script>
  // Note: This example requires that you consent to location sharing when
  // prompted by your browser. If you see the error "The Geolocation service
  // failed.", it means you probably did not give permission for the browser to
  // locate you.
  var map, infoWindow;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 14
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        infoWindow.open(map);
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'Error: The Geolocation service failed.' :
                          'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=<?php echo $MiApiKeyMaps ?>&callback=initMap">
</script>

<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	  $('#BtnBuscar').addClass('mostrar');
	});
</script>

</body>
</html>