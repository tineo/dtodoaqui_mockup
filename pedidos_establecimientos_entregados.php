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
				<h2 style="display: inline;">Pedidos por Establecimiento</h2>
				<div style="display: inline; padding-top: 15px;">
					<div style="margin-top: 5px;"></div>
					<a href="pedidos_establecimientos.php" class="button border">Pendientes</a>
					<a href="pedidos_establecimientos_entregados.php" class="button border">Entregados</a>
				</div>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Pedidos por Establecimiento</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<label style="font-weight: bold;">Buscar por rango de fecha</label>
					<div class="main-search-input-item" style="padding: 0;">
					<input type="text" placeholder="Check-In - Check-Out" id="booking-date-search" >
				</div>
			</div>
			<div class="col-md-3">
				<label style="font-weight: bold;">Buscar por Nº de pedido</label>
				<input type="text" placeholder="Nº pedido">
			</div>
			<div class="col-md-3">
				<label style="font-weight: bold;">Buscar por nombre de tienda</label>
				<input type="text" placeholder="">
			</div>
			<div class="col-md-3">
				<a href="#" class="button preview" style="margin-top: 30px;">Buscar <i class="fa fa-arrow-circle-right"></i></a>
			</div>

		</div>
		<!-- Toggles Container -->
				<div class="style-2">
					<!-- Toggle 1 -->
					<div class="toggle-wrap">
						<span class="trigger">
							<a href="#"><i class="sl sl-icon-plus"></i>
								<table style="width: 100%;">
									<tr>
										<td style="width: 10%;">
											<img src="images/logo_est02.jpg" alt="" style="width: 100%;">
										</td>
										<td style="width: 40%;">
											<div style="padding-left: 20px;">Pizza Hut</div>
										</td>
										<td style="width: 40%;" class="estadoPedidoEntregado">Entregado</td>
									</tr>
								</table>
							</a>
						</span>
						<div class="toggle-container">
							<div class="row">
								<div class="col-md-9">
									<div class="NumPedido">Pedido Nº 00003 | Fecha: 01/04/2020</div>
									<div class="tablaContenedor">
										<table class="tablaDTA">
											<thead>
												<tr>
													<th>Producto</th>
													<th style="text-align: center;">Cant.</th>
													<th>P. Unit.</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#popupfoto" class="popup-with-zoom-anim">Título del producto 1</a></td>
													<td style="text-align: center;">2</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
												<tr>
													<td>Título del producto 2</td>
													<td style="text-align: center;">2</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td>TOTAL</td>
													<td>S/140.00</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="visible-xs" style="margin-bottom: 25px;"><img src="images/imgslide.png"></div>
									<div style="font-size: 13px;">Nota: Se envió el Delivery a la dirección</div>
								</div>
								<div class="col-md-3">
									<div class="CajaEntrega">
										<strong>Comprobante:</strong> Factura <br>
										<hr>
										<strong>Razón social:</strong> Juan Pérez<br>
										<hr>
										<strong>RUC:</strong> 12345678912<br>
										<hr>
										<strong>Dirección:</strong> Av. Lima 245 - La Victoria<br>
										<hr>
										<strong>Forma de Pago:</strong> Contraentrega<br>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- Toggle 2 -->
					<div class="toggle-wrap">
						<span class="trigger">
							<a href="#"><i class="sl sl-icon-plus"></i>
								<table style="width: 100%;">
									<tr>
										<td style="width: 10%;">
											<img src="images/logo_est03.jpg" alt="" style="width: 100%;">
										</td>
										<td style="width: 40%;">
											<div style="padding-left: 20px;">Pommes</div>
										</td>
										<td style="width: 40%;" class="estadoPedidoEntregado">Entregado</td>
									</tr>
								</table>
							</a>
						</span>
						<div class="toggle-container">
							<div class="row">
								<div class="col-md-9">
									<div class="NumPedido">Pedido Nº 00004 | Fecha: 01/04/2020</div>
									<div class="tablaContenedor">
										<table class="tablaDTA">
											<thead>
												<tr>
													<th>Producto</th>
													<th style="text-align: center;">Cant.</th>
													<th>P. Unit.</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#popupfoto" class="popup-with-zoom-anim">Título del producto 1</a></td>
													<td style="text-align: center;">2</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
												<tr>
													<td>Título del producto 2</td>
													<td style="text-align: center;">2</td>
													<td>S/ 35</td>
													<td>S/ 70</td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td>TOTAL</td>
													<td>S/140.00</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="visible-xs" style="margin-bottom: 25px;"><img src="images/imgslide.png"></div>
									<div style="font-size: 13px;">Nota: Se envió el Delivery a la dirección</div>
								</div>
								<div class="col-md-3">
									<div class="CajaEntrega">
										<strong>Comprobante:</strong> Factura <br>
										<hr>
										<strong>Razón social:</strong> Juan Pérez<br>
										<hr>
										<strong>RUC:</strong> 12345678912<br>
										<hr>
										<strong>Dirección:</strong> Av. Lima 245 - La Victoria<br>
										<hr>
										<strong>Forma de Pago:</strong> Contraentrega<br>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

	</div>
	<!-- Content / End -->



</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>



<!--Detalle Pedidos-->
<div id="popupfoto" class="zoom-anim-dialog mfp-hide PopupDetProd">
 	<header><h3>Nombre del Producto</h3></header>
 	<div class="contenido">
 		<div class="row">
 			<div class="col"><img src="images/productos/prod01.jpg" class="img-responsive"></div>
 			<div class="col">
 				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quis nibh eu eleifend. Suspendisse potenti. Nullam tempus, magna at gravida mollis, lectus sapien ornare nunc, pulvinar finibus massa lorem in lectus. Mauris porta sed elit et maximus. Donec nec sollicitudin arcu. Nam sit amet rutrum turpis, vel lacinia nibh. </p>
 			</div>
 		</div>


		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>
<!--fin Modal detalle del producto-->



<?php include("builder/footer.php"); ?>
<?php include("builder/js_footer.php"); ?>



<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>

<script>
$(function() {

    var start = moment().subtract(0, 'days');
    var end = moment().add(2, 'days');

    function cb(start, end) {
        $('#booking-date-search').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'));
    }
    cb(start, end);
    $('#booking-date-search').daterangepicker({
    	"opens": "right",
	    "autoUpdateInput": true,
	    "alwaysShowCalendars": true,
        startDate: start,
        endDate: end
    }, cb);

    cb(start, end);

});

// Calendar animation and visual settings
$('#booking-date-search').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible calendar-animated bordered-style');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#booking-date-search').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
});

$(window).on('load', function() {
    $('#booking-date-search').val('');
});
</script>


<!-- Replacing dropdown placeholder with selected time slot -->
<script>
	$(".time-slot").each(function() {
		var timeSlot = $(this);
		$(this).find('input').on('change',function() {
			var timeSlotVal = timeSlot.find('strong').text();

			$('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
			$('.panel-dropdown').removeClass('active');
		});
	$('.input-daterange input').each(function() {
    $(this).datepicker('clearDates');
});
});
</script>




</body>
</html>