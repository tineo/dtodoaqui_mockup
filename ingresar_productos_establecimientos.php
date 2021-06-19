<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Añadir Establecimientos</title>
<?php include("builder/head.html"); ?>


<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

</head>

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
				<h2>Añadir Productos</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Añadir Productos</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	

	<div class="container">




		<div class="row">
			<div class="col-lg-12">

				<div class="row" style="margin-bottom: 30px;">
					<!--izquierda-->
					<div class="col-md-8 col-sm-6 col-xs-12" style="padding: 0;">

						<!-- Headline -->
						<div class="add-listing-section">
							<div class="row">
								<div class="col-md-4 col-xs-12" align="center">
									<img src="images/logo_est01.jpg" alt="" style="max-width: 150px;">
								</div>
								<div class="col-md-8 col-xs-12">	
									<a href="#PopupConfig" class="popup-with-zoom-anim button medium" style="margin-top: 10px;">
										<i class="sl sl-icon-settings"></i> Configuraciones
									</a>
									<div class="add-listing-headline hidden-xs hidden-sm" style="padding-top: 10px;">
										<h3><i class="sl sl-icon-clock"></i> Habilitar Venta en línea</h3>
										<!-- Switcher -->
										<label class="switch" style="top: 10px;"><input type="checkbox" checked><span class="slider round"></span></label>
									</div>
								</div>
							</div>

							<div class="add-listing-headline visible-xs visible-sm hidden-md" style="padding-top: 10px;">
								<h3><i class="sl sl-icon-clock"></i> Habilitar Venta en línea</h3>
								<!-- Switcher -->
								<label class="switch" style="top: 10px;"><input type="checkbox" checked><span class="slider round"></span></label>
							</div>
							<!-- Switcher ON-OFF Content -->
							<div class="switcher-content">
								<h3>Productos añadidos</h3>
								<hr>
								<div class="colTiendaAdd sinPadding">
									<div class="ProdImg">
										<img src="images/productos/prod01.jpg" class="img-responsive">
									</div>
									<div class="ProdNom">Título del producto</div>
									<div class="PrecioProd">S/ 20.00</div>
								</div>
								<div class="colTiendaAdd sinPadding">
									<div class="ProdImg">
										<img src="images/productos/prod02.jpg" class="img-responsive">
									</div>
									<div class="ProdNom">Título del producto</div>
									<div class="PrecioProd">S/ 20.00</div>
								</div>
								<div class="colTiendaAdd sinPadding">
									<div class="ProdImg">
										<img src="images/productos/prod03.jpg" class="img-responsive">
									</div>
									<div class="ProdNom">Título del producto</div>
									<div class="PrecioProd">S/ 20.00</div>
								</div>
								<div class="colTiendaAdd sinPadding">
									<div class="ProdImg">
										<img src="images/productos/prod02.jpg" class="img-responsive">
									</div>
									<div class="ProdNom">Título del producto</div>
									<div class="PrecioProd">S/ 20.00</div>
								</div>
							</div>
							<div style="clear: both;"></div>
						</div>

					</div>
					<!--fin izquierda-->

					<!--derecho-->
					<div class="col-md-4 col-sm-6 col-xs-12" style="background: #f1f1f1; padding: 20px;">
						<h3>Añadir Productos</h3>
						<hr>
						<div class="edit-profile-photo" style="text-align: center;">
							<img src="images/dashboard-avatar.jpg" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Subir imagen</span>
								    <input type="file" class="upload" />
								</div>
							</div>
						</div>
						<input type="text" placeholder="Nombre del producto">
						<input type="text" placeholder="Precio S/">
						<textarea  name="" rows="3" id="" spellcheck="true" placeholder="Descripción" style="font-size: 16px;"></textarea>
						<div style="padding: 5px;"><a href="#" class="button">Añadir</a></div>
						<div style="padding: 5px;"><a href="#" class="button border">Ocultar producto</a></div>
						<div style="padding: 5px;"><a href="#" class="button border">Actualizar producto</a></div>
					</div>
					<!--fin derecho-->
				</div>
			</div>
		</div>
	</div>
	<!-- Content / End -->



</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>
<?php include("builder/footer.php"); ?>
<?php include("builder/js_footer.php"); ?>


<!--Popup Configuraciones-->
<div id="PopupConfig" class="zoom-anim-dialog mfp-hide PopupDetProd">
 	<header><h3>Configuraciones</h3></header>
 	<div class="contenido">
 		<div class="row">
 			<div class="col-md-4">
 				<h3 style="color: #f91942;">Modo de reparto</h3>
 				<div class="checkboxes in-row margin-bottom-20">
					<div>
						<input id="check-a" type="checkbox" name="check">
						<label for="check-a">Servicio Delivery</label>
						<textarea  name="" rows="2" id="" spellcheck="true" placeholder="Condiciones" style="font-size: 16px;"></textarea>
					</div>
					<input id="check-b" type="checkbox" name="check">
					<label for="check-b">Recojo en tienda</label>

					<input id="check-c" type="checkbox" name="check">
					<label for="check-c">Contra entrega</label>
				</div>
 			</div>

 			<div class="col-md-4">
 				<h3 style="color: #f91942;">Formas de pago</h3>
				<select style="font-size: 16px;">
					<option selected>--Seleccione--</option>
					<option>Yape</option>
					<option>Tunki</option>
					<option>Lukita</option>
				</select>
				<div style="padding-top: 10px;">
					<input type="text" placeholder="Nº de Abonado">
					<input type="text" placeholder="Nombre del Abonado">
				</div>
				<div style="padding: 5px;"><a href="#" class="button border medium">Añadir</a></div>
				<hr>
				<h4>Activos</h4>
				<div class="table-responsive">
					<table class="basic-table" style="font-size: 14px;">
						<tr>
							<td>YAPE</td>
							<td><a href="#"><i class="sl sl-icon-trash"></i></a></td>
							<td><a href="#"><i class="sl sl-icon-pencil"></i></a></td>
						</tr>
					</table>
				</div>
 			</div>

 			<div class="col-md-4">
 				<h3 style="color: #f91942;">Tipo de comprobante</h3>
 				<div class="checkboxes in-row margin-bottom-20">
	 				<input id="tipo1" type="checkbox" name="check">
					<label for="tipo1">Boleta de venta</label>
					<input id="tipo2" type="checkbox" name="check">
					<label for="tipo2">Factura</label>
				</div>
 			</div>
 		</div>
 		<div style="height:15px;"></div>
 		<div style="padding: 5px;"><a href="#" class="button medium">GRABAR</a></div>
 	</div>
</div>




<!--Popup Configuraciones-->


<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	  $('#BtnBuscar').addClass('mostrar');
	});
</script>

</body>
</html>