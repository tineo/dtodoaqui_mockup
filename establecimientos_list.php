<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Búsqueda de Establecimiento</title>
<?php include("builder/head.html"); ?>
<style type="text/css">
	.listing-item{
		height: 200px;
	}
	.contenidoItems{
		background: #f2f2f2;
		padding: 8px;
		border-radius: 0 0 8px 8px;
		position: relative;
		bottom: 0;
	}
	.contenidoItems span{
		color: #000 !important;
		font-size: 12px;
		line-height: 16px;
	}
	.contenidoItems .tag{
		color: #fff !important;
	}
	.listing-item-content h3 {
		line-height: 28px;
		bottom: 30px;
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
<div class="fs-container">

	<div class="fs-inner-container content PosicionResultado">
		<div class="fs-content">
			<!-- Search -->
			<section class="search hidden-xs" style="border-bottom: 1px solid #ccc;">
				<div class="row">
					<div class="col-md-12">
							<!-- Row With Forms -->
							<div class="row with-forms">
								<!-- Main Search Input -->
								<div class="col-fs-6">
									<div class="input-with-icon">
										<i class="sl sl-icon-magnifier"></i>
										<input type="text" placeholder="¿Qué estás buscando?" value=""/>
									</div>
								</div>
								<!-- Main Search Input -->
								<div class="col-fs-6">
									<div class="input-with-icon location">

										<div id="autocomplete-container">
											<input id="autocomplete-input" type="text" placeholder="Ubicación">
										</div>
										<a href="#"><i class="fa fa-map-marker"></i></a>
									</div>
								</div>

								<!-- Filters -->
								<div class="col-fs-12">
									<!-- Panel Dropdown / End -->
									<div class="panel-dropdown">
										<a href="#">Categorías</a>
										<div class="panel-dropdown-content checkboxes categories">
											<!-- Checkboxes -->
											<div class="row">
												<div class="col-md-6">
													<input id="check-1" type="checkbox" name="check" checked class="all">
													<label for="check-1">Todas las categorías</label>

													<input id="check-2" type="checkbox" name="check">
													<label for="check-2">Restaurantes</label>

													<input id="check-3" type="checkbox" name="check">
													<label for="check-3">Hoteles</label>
												</div>

												<div class="col-md-6">
													<input id="check-4" type="checkbox" name="check" >
													<label for="check-4">Spa</label>

													<input id="check-5" type="checkbox" name="check">
													<label for="check-5">Gimnasios</label>

													<input id="check-6" type="checkbox" name="check">
													<label for="check-6">Eventos</label>
												</div>
											</div>

											<!-- Buttons -->
											<div class="panel-buttons">
												<button class="panel-cancel">Cancelar</button>
												<button class="panel-apply">Aplicar</button>
											</div>

										</div>
									</div>
									<!-- Panel Dropdown / End -->

									<!-- Panel Dropdown -->
									<div class="panel-dropdown wide">
										<a href="#">Más filtros</a>
										<div class="panel-dropdown-content checkboxes">

											<!-- Checkboxes -->
											<div class="row">
												<div class="col-md-6">
													<input id="check-a" type="checkbox" name="check">
													<label for="check-a">Ascensor en el establecimiento</label>

													<input id="check-b" type="checkbox" name="check">
													<label for="check-b">Espacio de trabajo amigable</label>

													<input id="check-c" type="checkbox" name="check">
													<label for="check-c">Wifi</label>

													<input id="check-d" type="checkbox" name="check">
													<label for="check-d">Estacionamiento gratuito</label>
												</div>

												<div class="col-md-6">
													<input id="check-e" type="checkbox" name="check" >
													<label for="check-e">Vallet Parking</label>

													<input id="check-f" type="checkbox" name="check" >
													<label for="check-f">Se permite fumar</label>

													<input id="check-g" type="checkbox" name="check">
													<label for="check-g">Acceso a sillas de ruedas</label>
												</div>
											</div>

											<!-- Buttons -->
											<div class="panel-buttons">
												<button class="panel-cancel">Cancelar</button>
												<button class="panel-apply">Aplicar</button>
											</div>

										</div>
									</div>
									<!-- Panel Dropdown / End -->

									<!-- Panel Dropdown -->
									<div class="panel-dropdown">
										<a href="#">Distancia a la redonda</a>
										<div class="panel-dropdown-content">
											<input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radio alrededor del destino seleccionado">
											<div class="panel-buttons">
												<button class="panel-cancel">Cancelar</button>
												<button class="panel-apply">Aplicar</button>
											</div>
										</div>
									</div>
									<!-- Panel Dropdown / End -->

								</div>
								<!-- Filters / End -->

							</div>
							<!-- Row With Forms / End -->
					</div>
				</div>
			</section>
			<!-- Search / End -->



		<section class="listings-container">
			<!-- Sorting / Layout Switcher -->
			<div class="row fs-switcher" style="padding-top: 15px;">

				<div class="col-md-6">
					<div class="layout-switcher" style="right: 0;">
						<a href="establecimientos.php" class="list"><i class="fa fa-th"></i></a>
						<a href="#" class="grid active"><i class="fa fa-align-justify"></i></a>
					</div>
				</div>
				<div class="col-md-6" align="right">
					<p class="showing-results">14 Establecimientos encontrados</p>
				</div>
			</div>

			<div class="row">
				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="establecimiento-detalle.php" class="listing-item">

							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/logo_est01.jpg" alt="">
							</div>

							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Abierto Ahora</div>

								<div class="listing-item-inner">
									<h3>Nombre Establecimiento <i class="verified-icon"></i></h3>
									<span>Av. La Marina 223 - San Miguel</span>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(12 valoraciones)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->
			</div>

			<!--publicidad-->
			<div style="clear: both; width: 100%; padding: 40px; background: #ccc; color: #fff; text-align: center; font-size: 18px; margin: 0 0 30px 0;">
				PUBLICIDAD
			</div>
			<!--fin publicidad-->


			<div class="row">
				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="establecimiento-detalle.php" class="listing-item">

							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/logo_est02.jpg" alt="">
							</div>

							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Abierto Ahora</div>

								<div class="listing-item-inner">
									<h3>Nombre Establecimiento <i class="verified-icon"></i></h3>
									<span>Av. La Marina 223 - San Miguel</span>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(12 valoraciones)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->
			</div>


			<!-- Listings Container / End -->


			<!-- Pagination Container -->
			<div class="row fs-listings">
				<div class="col-md-12">

					<!-- Pagination -->
					<div class="clearfix"></div>
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
		</section>

		</div>
	</div>
	<div class="fs-inner-container map-fixed">
		<!-- Map -->
		<div id="map-container">
		    <div id="map" data-map-zoom="16" data-map-scroll="true">
		        <!-- map goes here -->
		    </div>
		</div>
	</div>
</div>


</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>


<?php include("builder/js_footer.php"); ?>



<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	  $('#BtnBuscar').addClass('mostrar');
	});
</script>



<!--MAPA DE LOCALES-->


<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        return;
      }
    });

	if ($('.main-search-input-item')[0]) {
	    setTimeout(function(){
	        $(".pac-container").prependTo("#autocomplete-container");
	    }, 300);
	}
}
</script>

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $MiApiKeyMaps ?>&libraries=places&callback=initAutocomplete"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>




<!-- Typed Script -->
<script type="text/javascript" src="scripts/typed.js"></script>
<script>
var typed = new Typed('.typed-words', {
strings: ["Restaurantes"," Hoteles"," Gimnasios"],
	typeSpeed: 80,
	backSpeed: 80,
	backDelay: 4000,
	startDelay: 1000,
	loop: true,
	showCursor: true
});
</script>


</body>
</html>