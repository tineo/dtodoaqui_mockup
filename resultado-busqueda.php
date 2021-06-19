<?php include("php/session.php") ?>

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
	.ui-widget-content{
		border: none !important;
		font-size: 15px !important;
		font-family: "Raleway", "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		padding-top: 5px !important;
		padding-bottom: 5px !important;
		z-index: 999 !important;
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
	.col-fs-6 #autocomplete-container .pac-container, #geolocator-form-popup .pac-container{
        left: 0px !important;
        top: 51px !important;
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
								<form id="search-form" action="#" method="post"  class="geolocator-form2">
									<!-- Main Search Input -->
									<div class="col-fs-6">
										<div class="input-with-icon">
											<i class="sl sl-icon-magnifier"></i>
											<input id="palabcompleteresult" type="text" name="search" placeholder="¿Qué estás buscando?" value="<?php echo $_POST['search']??''; ?>" required />
										</div>
									</div>
									<!-- Main Search Input -->
									<div class="col-fs-6">
										<div class="input-with-icon location">

											<div id="autocomplete-container">
												<input id="geolocator-input2" class="geolocator-input2" name="location" type="text" placeholder="Ubicación" value="<?php echo $_POST['location']??$_SESSION["user_address"]??''; ?>" required/>
											</div>
											<a href="#" class="geolocator-btn"><i class="fa fa-map-marker"></i></a>
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
														<input id="check-1" type="checkbox" name="check" class="all" value="Todas las categorías" checked/>
														<label for="check-1">Todas las categorías</label>

														<input id="check-2" type="checkbox" name="check" value="Restaurantes"/>
														<label for="check-2">Restaurantes</label>

														<input id="check-3" type="checkbox" name="check" value="Hoteles"/>
														<label for="check-3">Hoteles</label>
													</div>

													<div class="col-md-6">
														<input id="check-4" type="checkbox" name="check" value="Spa"/>
														<label for="check-4">Spa</label>

														<input id="check-5" type="checkbox" name="check" value="Gimnasios"/>
														<label for="check-5">Gimnasios</label>

														<input id="check-6" type="checkbox" name="check" value="Eventos"/>
														<label for="check-6">Eventos</label>
													</div>
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
														<input id="chcdeliv" type="checkbox" name="chcdeliv">
														<label for="chcdeliv">Delivery</label>

														<input id="chcplinea" type="checkbox" name="chcplinea">
														<label for="chcplinea">Pedido en linea</label>

														<input id="chcest" type="checkbox" name="chcest">
														<label for="chcest">Estacionamiento</label>

														<input id="chcwifi" type="checkbox" name="chcwifi">
														<label for="chcwifi">Wifi</label>

														<input id="chctc" type="checkbox" name="chctc" >
														<label for="chctc">Pago con Tarjeta</label>
													</div>

													<div class="col-md-6">
														<input id="chcespt" type="checkbox" name="chcespt" >
														<label for="chcespt">Espacio para trabajo amigable</label>

														<input id="chcsillar" type="checkbox" name="chcsillar">
														<label for="chcsillar">Acceso a sillas de ruedas</label>

														<input id="chczonan" type="checkbox" name="chczonan">
														<label for="chczonan">Zona para niños</label>

														<input id="checzonaf" type="checkbox" name="checzonaf">
														<label for="checzonaf">Zona para fumadores</label>
													</div>
												</div>
											</div>
										</div>
										<!-- Panel Dropdown / End -->

										<!-- Panel Dropdown -->
										<div class="panel-dropdown">
											<a href="#">Distancia a la redonda</a>
											<div class="panel-dropdown-content">
												<input id="distance-radius" class="distance-radius" type="range" min="1" max="100" step="1" value="5" data-title="Radio alrededor del destino seleccionado">
											</div>
										</div>
										<!-- Panel Dropdown / End -->
                                        <button class="button" type="input">Buscar</button>
									</div>
									<!-- Filters / End -->
								</form>
							</div>
							<!-- Row With Forms / End -->
					</div>
				</div>
			</section>
			<!-- Search / End -->



		<section class="establishment-section">
			<!-- Sorting / Layout Switcher -->
			<div class="row fs-switcher" style="padding-top: 15px;">

				<div class="col-md-6">
					<div class="layout-switcher" style="right: 0;">
						<a href="#" class="grid active"><i class="fa fa-th"></i></a>
					</div>
				</div>
				<div class="col-md-6" align="right">
					<p class="showing-results">14 Establecimientos encontrados</p>
				</div>
			</div>

			<div class="row est_container">
				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="establecimiento-detalle.php" class="listing-item-container" data-marker-id="1">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge now-open">Abierto ahora</div>
								<img src="images/logo_est01.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->

				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="2">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge close-open">Cerrado ahora</div>
								<img src="images/logo_est02.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->

				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="3">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge now-open">Abierto ahora</div>
								<img src="images/logo_est03.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->

				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="4">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge close-open">Cerrado ahora</div>
								<img src="images/logo_est04.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->
			</div>

			<!--publicidad-->
			<div style="clear: both; width: 100%; padding: 40px; background: #ccc; color: #fff; text-align: center; font-size: 18px; margin: 0 0 30px 0;">
				PUBLICIDAD ...
			</div>
			<!--fin publicidad-->

			<div class="row est_container">
				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="5">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge now-open">Abierto ahora</div>
								<img src="images/logo_est01.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->

				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="6">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge now-open">Abierto ahora</div>
								<img src="images/logo_est02.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->

				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="7">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge close-open">Cerrado ahora</div>
								<img src="images/logo_est03.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->

				<!--DatosEstablecimiento-->
				<div class="col-md-3 col-sm-3 col-xs-6 est_card">
					<a href="#" class="listing-item-container" data-marker-id="8">
						<div class="contEst2" style="margin: 0;">
							<div class="logoEst listing-item">
								<div class="listing-badge now-open">Abierto ahora</div>
								<img src="images/logo_est04.jpg" class="img-responsive">
							</div>
							<div class="DatosEst">
								<div class="titEst2">Nombre Establecimiento</div>
								<div class="dirEst">Av. LA Marina 223 - San Miguel</div>
								<div class="star-rating" data-rating="3.5" style="padding: 0;">
									<div class="rating-counter"></div>
								</div>
								<div class="valoraciones">12 valoraciones</div>
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<!--Fin DatosEstablecimiento-->
			</div>

			<!-- Listings Container / End -->

			<!--publicidad-->
			<div style="clear: both; width: 100%; padding: 40px; background: #ccc; color: #fff; text-align: center; font-size: 18px; margin: 0 0 30px 0;">
				PUBLICIDAD ...
			</div>
			<!--fin publicidad-->

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

<div id="popupFiltros" class="mfp-hide PopupDTA zoom-anim-dialog" style="padding: 0 !important;">
  <header style="left: 0px !important; width: 100% !important;"><h3>Filtros de busqueda</h3></header>
  <div class="contenido" style="padding: 20px 40px;">
  	<!-- Search -->
	<section class="search" style="border-bottom: 1px solid #ccc;">
		<div class="row">
			<div class="col-md-12">
					<!-- Row With Forms -->
					<div class="row with-forms">
						<form id="search-form" action="#" method="post"  class="geolocator-form2" style="display: flex; flex-direction: column;">
							<!-- Main Search Input -->
							<div class="col-fs-6" style="display: none">
								<div class="input-with-icon">
									<i class="sl sl-icon-magnifier"></i>
									<input id="palabcompleteresult" type="text" name="search" placeholder="¿Qué estás buscando?" value="<?php echo $_POST['search']??''; ?>" required />
								</div>
							</div>
							<!-- Main Search Input -->
							<div class="col-fs-6" style="display: none">
								<div class="input-with-icon location">

									<div id="autocomplete-container">
										<input id="geolocator-input3" class="geolocator-input2" name="location" type="text" placeholder="Ubicación" value="<?php echo $_POST['location']??$_SESSION["user_address"]??''; ?>" required/>
									</div>
									<a href="#" class="geolocator-btn2"><i class="fa fa-map-marker"></i></a>
								</div>
							</div>

							<!-- Filters -->
							<div class="col-fs-12">
								<!-- Panel Dropdown / End -->
								<div class="panel-dropdown"  style="display: none">
									<a href="#">Categorías</a>
									<div class="panel-dropdown-content checkboxes categories">
										<!-- Checkboxes -->
										<div class="row">
											<div class="col-md-6">
												<input id="chcdeliv" type="checkbox" name="chcdeliv">
												<label for="chcdeliv">Delivery</label>

												<input id="chcplinea" type="checkbox" name="chcplinea">
												<label for="chcplinea">Pedido en linea</label>

												<input id="chcest" type="checkbox" name="chcest">
												<label for="chcest">Estacionamiento</label>

												<input id="chcwifi" type="checkbox" name="chcwifi">
												<label for="chcwifi">Wifi</label>

												<input id="chctc" type="checkbox" name="chctc" >
												<label for="chctc">Pago con Tarjeta</label>
											</div>

											<div class="col-md-6">
												<input id="chcespt" type="checkbox" name="chcespt" >
												<label for="chcespt">Espacio para trabajo amigable</label>

												<input id="chcsillar" type="checkbox" name="chcsillar">
												<label for="chcsillar">Acceso a sillas de ruedas</label>

												<input id="chczonan" type="checkbox" name="chczonan">
												<label for="chczonan">Zona para niños</label>

												<input id="checzonaf" type="checkbox" name="checzonaf">
												<label for="checzonaf">Zona para fumadores</label>
											</div>
										</div>

										<!-- Buttons -->
										<div class="panel-buttons">
											<button type="button" class="panel-cancel">Cancelar</button>
											<button type="button" class="panel-apply">Aplicar</button>
										</div>

									</div>
								</div>
								<!-- Panel Dropdown / End -->

								<div class="row">
                                    <div class="checkboxes">
    									<!-- Checkboxes -->
    									<div class="row">
    										<div class="col-md-6">
    											<input id="check-a" type="checkbox" name="check">
    											<label for="check-a">Delivery</label>
    
    											<input id="check-b" type="checkbox" name="check">
    											<label for="check-b">Pedido en linea</label>
    
    											<input id="check-c" type="checkbox" name="check">
    											<label for="check-c">Estacionamiento</label>
    
    											<input id="check-d" type="checkbox" name="check">
    											<label for="check-d">Wifi</label>

    											<input id="check-d" type="checkbox" name="check">
    											<label for="check-d">Pago con Tarjeta</label>
    										</div>
    
    										<div class="col-md-6">
    											<input id="check-e" type="checkbox" name="check" >
    											<label for="check-e">Espacio para trabajo amigable</label>
    
    											<input id="check-f" type="checkbox" name="check" >
    											<label for="check-f">Acceso a silla de ruedas</label>
    
    											<input id="check-g" type="checkbox" name="check">
    											<label for="check-g">Zona para niños</label>
    											
    											<input id="check-g" type="checkbox" name="check">
    											<label for="check-g">Zona para fumadores</label>
    										</div>
    									</div>
    								</div>
								</div>
                                
                                <div class="row" style="margin-top: 15px;">
    								<input id="distance-radius" class="distance-radius" type="range" min="1" max="100" step="1" value="5" data-title="Radio alrededor del destino">
    							</div>
							</div>
							<!-- Filters / End -->
                            <button class="button" type="input" style="margin-bottom: 10px;">Buscar</button>
						</form>
					</div>
					<!-- Row With Forms / End -->
			</div>
		</div>
	</section>
	<!-- Search / End -->
  </div>
</div>
<?php include("builder/js_footer.php"); ?>

<div id="backtotop" style="z-index: 1000; display: block !important;"><a href="#"></a></div>

<!--AUTOCOMPLETAR aqui-->
<script src="scripts/palabcomplete.js" charset="utf-8"></script>
<!--FIN-->

<script type="text/javascript">
	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	  $('#BtnBuscar').addClass('mostrar');
	});
</script>

<script type="text/javascript">
	var checkboxInputs = $('.checkboxes input:checkbox');

	var postSearch = "<?php echo $_POST['search']??'' ?>";
	var postLocation = "<?php echo $_POST['location']??$_SESSION['user_address']??'' ?>";
	var postCategory = "<?php echo $_POST['category']??'' ?>";

	if(postCategory!='')
	{
		var nodeArray = $('.checkboxes.categories input:checkbox');
		Object.keys(nodeArray).forEach((key, idx)=>{
			if(typeof nodeArray[key]=="object" && idx<Object.keys(nodeArray).length-1)
			{
				if($('label[for="'+$(nodeArray[key]).attr('id')+'"]').text() == postCategory)
				{
				    $('#check1').prop('checked', false);
					$(nodeArray[key]).prop('checked', true);
				}
			}
		})
	}

	function initSearch(){
	    var radius;
	    if(postSearch=='' && ($($('[id="palabcompleteresult"]')[0]).val()=="" && $($('[id="palabcompleteresult"]')[1]).val()=="")){
	        radius = 0.2
	        if($($('[id="palabcompleteresult"]')[0]).val()=="" && $($('[id="palabcompleteresult"]')[1]).val()=="")
	        {
	            initMap("everything", $('#geolocator-input2').val(), [postCategory], radius);
	        }else
	        {
	            if($($('[id="palabcompleteresult"]')[0]).val()!="") initMap($($('[id="palabcompleteresult"]')[0]).val(), $('#geolocator-input2').val(), [postCategory], radius);
	            else if($($('[id="palabcompleteresult"]')[1]).val()!="") initMap($($('[id="palabcompleteresult"]')[1]).val(), $('#geolocator-input2').val(), [postCategory], radius);
	        }
	    }else{
	        radius = 5;
	        initMap(postSearch, postLocation, [postCategory], radius);
	    }
	}
</script>

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
						initSearch();
					}
			})
		})
	}
</script>
<!--MAPA DE LOCALES-->

<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0kphWL4y--yzEgat2x8bksm_sRmwf7NM&libraries=places&callback=initServices"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/maps2.js"></script>




<!-- Typed Script -->
<!--<script type="text/javascript" src="scripts/typed.js"></script>-->
<!--<script>-->
<!--var typed = new Typed('.typed-words', {-->
<!--strings: ["Restaurantes"," Hoteles"," Gimnasios"],-->
<!--	typeSpeed: 80,-->
<!--	backSpeed: 80,-->
<!--	backDelay: 4000,-->
<!--	startDelay: 1000,-->
<!--	loop: true,-->
<!--	showCursor: true-->
<!--});-->
<!--</script>-->


</body>
</html>
