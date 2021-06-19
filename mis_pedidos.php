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
				<h2>Mis Pedidos</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Mis Pedidos</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="tablaContenedor">
					<table class="tablaDTA">
						<thead>
							<tr>
								<th>Nº pedido</th>
								<th>Fecha</th>
								<th>Proveedor</th>
								<th>Estado</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>00001</td>
								<td>01/05/2020</td>
								<td>Delivery</td>
								<td>Confirmar pedido</td>
								<td>S/ 350</td>
							</tr>
							<tr>
								<td>00002</td>
								<td>01/05/2020</td>
								<td>Delivery</td>
								<td>Recibido</td>
								<td>S/ 350</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="visible-xs" style="margin-bottom: 25px;"><img src="images/imgslide.png"></div>

			</div>
		</div>
	</div>

	<br><br><br>
	<!-- Content / End -->



</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>



<!--Detalle Pedidos-->
<div id="popupDetallePedidos" class="zoom-anim-dialog mfp-hide PopupDetProd">
 	<header><h3>Detalle del pedido</h3></header>
 	<div class="contenido">

		<div class="row">
			<div class="col-md-9">
				Pedido Nº 00001
				<table class="DetTabla">
					<tr>
						<td class="CabTabla" style="width: 20%;">Imagen</td>
						<td class="CabTabla" style="width: 40%;">Producto</td>
						<td class="CabTabla" style="width: 10%; text-align: center;">Cant.</td>
						<td class="CabTabla" style="width: 15%; text-align: right;">P. Unit.</td>
						<td class="CabTabla" style="width: 15%; text-align: right;">Total</td>
					</tr>
					<tr>
						<td class="BodyTabla">
							<img src="images/productos/prod01.jpg" style="width: 100%;">
						</td>
						<td class="BodyTabla">Título del producto 1</td>
						<td class="BodyTabla" style="text-align: center;">
							2
						</td>
						<td class="BodyTabla" style="text-align: right;">S/ 35</td>
						<td class="BodyTabla" style="text-align: right;">S/ 70</td>
					</tr>
					<tr>
						<td class="BodyTabla">
							<img src="images/productos/prod02.jpg" style="width: 100%;">
						</td>
						<td class="BodyTabla">Título del producto 2</td>
						<td class="BodyTabla" style="text-align: center;">
							1
						</td>
						<td class="BodyTabla" style="text-align: right;">S/ 50</td>
						<td class="BodyTabla" style="text-align: right;">S/ 50</td>
					</tr>
					<tr>
						<td class="BodyTabla">
							<img src="images/productos/prod03.jpg" style="width: 100%;">
						</td>
						<td class="BodyTabla">Título del producto 3</td>
						<td class="BodyTabla" style="text-align: center;">
							<4
						</td>
						<td class="BodyTabla" style="text-align: right;">S/ 20</td>
						<td class="BodyTabla" style="text-align: right;">S/ 80</td>
					</tr>
					<tr>
						<td class="CabTabla" style="width: 20%;"></td>
						<td class="CabTabla" style="width: 40%;"></td>
						<td class="CabTabla" style="width: 10%; text-align: center;"></td>
						<td class="CabTabla" style="width: 15%; text-align: right;">TOTAL</td>
						<td class="CabTabla" style="width: 15%; text-align: right;">S/200.00</td>
					</tr>
				</table>
			</div>
			<div class="col-md-3">
				<div class="CajaEntrega">
					<h4><strong>Método de entrega: Delivery</strong></h4>
				</div>
				<div class="CajaEntrega">
					<h4><strong>Dirección de entrega:</strong></h4>
					<p>Av. Mi Dirección 333 - Los Olivos, Lima</p>
				</div>
				<div class="CajaEntrega">
					<h4><strong>Precio de delivery:</strong></h4>
					<div style="font-size: 28px; color: #f91942;"><strong>S/25</strong></div>
				</div>
			</div>
		</div>

		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>
<!--fin Modal detalle del producto-->



<?php include("builder/footer.php"); ?>
<?php include("builder/js_footer.php"); ?>



<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	  $('#BtnBuscar').addClass('mostrar');
	});

	$(function () {
	    $('.selectpicker').selectpicker();
	});
</script>



<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>

<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>


<script>
// Calendar Init
$(function() {
	$('#date-picker').daterangepicker({
		"opens": "left",
		singleDatePicker: true,

		// Disabling Date Ranges
		isInvalidDate: function(date) {
		// Disabling Date Range
		var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
		var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
		return date.isAfter(disabled_start) && date.isBefore(disabled_end);

		// Disabling Single Day
		// if (date.format('MM/DD/YYYY') == '08/08/2018') {
		//     return true;
		// }
		}
	});
});

// Calendar animation
$('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-animated');
});
$('#date-picker').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#date-picker').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
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
});
</script>




</body>
</html>