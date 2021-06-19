<?php include("php/session.php") ?>

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
				<h2>Políticas de privacidad</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 15px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Políticas de privacidad</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	

	<div class="container">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque, lacus eu dignissim pulvinar, sapien ante interdum magna, a pharetra sem diam a neque. Donec sed sagittis mi. Vivamus vitae tincidunt nisi. Vestibulum eleifend fermentum nunc, ac auctor ligula porta ut. Vivamus non massa non risus mollis molestie. Nulla et dapibus odio. Aliquam consectetur leo vel leo cursus tincidunt. Quisque vel diam ante. Nam vulputate sem feugiat sodales hendrerit. Fusce sem quam, dictum sed nisl vulputate, iaculis lobortis velit.
		</p>
		<p>
			Mauris a bibendum leo, eu pulvinar mi. Morbi convallis pharetra magna a porta. Proin quis nibh sit amet arcu rhoncus malesuada eu in magna. Etiam dignissim, turpis semper dignissim rhoncus, metus orci efficitur mauris, at laoreet urna nunc porttitor velit. Sed sit amet gravida eros, fringilla rutrum mi. Mauris quis congue erat, et dapibus sem. Donec fringilla pretium felis, non venenatis dui dictum vitae. Aenean ante nibh, egestas eget iaculis in, finibus sit amet massa. Nullam blandit mi sed rhoncus vulputate. Vivamus ut nisl quis tellus dictum molestie.
		</p>
		<p>
			Cras aliquam tempus tellus, eu scelerisque lorem mollis fermentum. Suspendisse in posuere neque. Aliquam sed fermentum libero. Vivamus turpis est, eleifend vel mauris non, convallis faucibus felis. Phasellus euismod dui sapien, mattis bibendum sapien gravida et. Donec faucibus placerat luctus. Integer et nisl vitae est gravida pharetra. Fusce sed justo vestibulum, ullamcorper elit eget, tincidunt augue. Proin sed iaculis enim.
		</p>
		<p>
			Aenean bibendum metus eget consequat laoreet. Nam ultricies leo gravida, dignissim felis eu, pellentesque tortor. Praesent dapibus metus odio, vitae sodales neque semper non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin sodales enim vitae purus euismod, eu viverra tellus tristique. Fusce in nunc vel leo accumsan consequat sit amet sed metus. Donec lobortis mauris at orci hendrerit commodo. Etiam nec eleifend lorem. Etiam in venenatis augue. Nullam dapibus leo sit amet velit tempus egestas. Duis vel mauris at libero aliquet interdum. Duis eu metus in velit ultrices egestas convallis a ex.
		</p>
		<p>
			Sed neque urna, varius quis maximus eget, bibendum sit amet justo. Nulla convallis urna a tellus porttitor, a dictum tellus tristique. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus porta, sem in consectetur sodales, lacus purus consequat dolor, quis accumsan lacus sem a erat. Nullam faucibus urna quis mollis aliquet. Suspendisse at magna quis lacus finibus malesuada. Suspendisse potenti. Etiam odio quam, efficitur ut sodales nec, laoreet ornare dolor. Curabitur egestas purus sit amet placerat efficitur. Vivamus at blandit velit, in consectetur arcu. Aliquam erat volutpat. Sed in justo ex. Cras lectus mauris, congue sit amet ornare iaculis, ultricies at orci.
		</p>
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

<!--AUTOCOMPLETAR aqui-->
<script src="scripts/palabcomplete.js" charset="utf-8"></script>
<!--FIN-->

<?php include("user_location.php"); ?>

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
			})
		})
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0kphWL4y--yzEgat2x8bksm_sRmwf7NM&libraries=places&callback=initServices"></script>

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