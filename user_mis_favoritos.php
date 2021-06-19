<?php include("php/session.php") ?>

<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Mis Favoritos</title>
<?php include("builder/head.html"); ?>
</head>

<style media="screen">
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
				<h2>Mis Favoritos</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Mis Favoritos</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">

			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<div style="padding: 20px;">
						<form id="establishment_form" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-2 col-sm-3 control-label" style="padding-top: 15px;">Filtrar:</label>
								<div class="col-md-10 col-sm-5">
									<input id="establishment_search" value="" type="text" placeholder="Escriba el nombre del establecimiento">
								</div>
							</div>
						</form>
					</div>
					<div style="clear: both;"></div>
					<div id="establishments_container" class="row visible-lg">
						<!--DatosEstablecimiento-->
						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card">
							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim"><i class="fa fa-times-circle fa-3x"></i></a></div>
							<div class="contEst">
								<div class="logoEst">
									<img src="images/logo_est01.jpg" class="img-responsive">
								</div>
								<div class="DatosEst">
									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
									<small>Av. La Marina 223 - San Miguel</small>
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
						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card">
							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim"><i class="fa fa-times-circle fa-3x"></i></a></div>
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

						<div style="clear: both;" class="visible-sm"></div>

						<!--DatosEstablecimiento-->
						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card">
							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim"><i class="fa fa-times-circle fa-3x"></i></a></div>
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
						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card">
							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim"><i class="fa fa-times-circle fa-3x"></i></a></div>
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
					<div id="establishments_container" class="row hidden-lg">
					    <div class="row" style="display: flex; justify-content: space-between;">
					        <!--DatosEstablecimiento-->
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est01.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. La Marina 223 - San Miguel</small>
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
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est02.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
					    <div style="clear: both;" class="visible-sm"></div>
					    <div class="row" style="display: flex; justify-content: space-between;">
					        <!--DatosEstablecimiento-->
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est03.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est04.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
					    <div class="row" style="display: flex; justify-content: space-between;">
					        <!--DatosEstablecimiento-->
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est03.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est04.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
					    <div class="row" style="display: flex; justify-content: space-between;">
					        <!--DatosEstablecimiento-->
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est03.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est04.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
					    <div class="row" style="display: flex; justify-content: space-between;">
					        <!--DatosEstablecimiento-->
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est03.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est04.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
					    <div class="row" style="display: flex; justify-content: space-between;">
					        <!--DatosEstablecimiento-->
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est03.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
    						<div class="col-md-3 col-sm-6 col-xs-12 sinPadding establishment_card" style="width: 45%;">
    							<div class="btnEliminar"><a href="#popupDelete" class="popup-with-zoom-anim" style="right: 5px; top: 5px;"><i class="fa fa-times-circle fa-2x"></i></a></div>
    							<div class="contEst">
    								<div class="logoEst">
    									<img src="images/logo_est04.jpg" class="img-responsive">
    								</div>
    								<div class="DatosEst">
    									<div class="titEst"><a href="#">Nombre Establecimiento</a></div>
    									<small style="display: block; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Av. LA Marina 223 - San Miguel</small>
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
				</div>
			</div>

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

		</div>
    	<div id="popupDelete" class="PopupDTA zoom-anim-dialog mfp-hide"  style="padding: 0 !important;">
         	<header style="left: 0px !important; width: 100% !important;"><h3>¿Esta seguro que desea eliminar este establecimiento?</h3></header>
         	<div class="contenido"  style="padding: 20px 40px;">
         		<div style="margin-bottom:40px;">
        			<div>
        				<button type="button" class="button" style="width: 100%">Si</button>
        			</div>
        			<br>
        			<div>
        				<button type="button" class="button" style="width: 100%">No</button>
        			</div>
        		</div>
        		<div style="clear: both; height: 10px;"></div>
         	</div>
        </div>
	</div>
	<!-- Content / End -->



</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>
<?php include("builder/footer.php"); ?>

<?php include("builder/js_footer.php"); ?>

<!--AUTOCOMPLETAR-->
  <script>
  $(function() {

    $("#busfavori")
    .on("keydown", function(event) {
      if (event.keyCode === $.ui.keyCode.TAB &&
        $(this).autocomplete("instance").menu.active) {
        event.preventDefault();
      }
    })
    .autocomplete({
      source: function(request, response) {
        $.ajax({
          url: "php/palabcomplete.php",
          dataType: "json",
          data: {
            search_text: request.term.split(/,\s*/).pop(),
            max_rows: 12,
          },
          success: function(data) {
            response(data);
          }
        });
      },
      minLength: 2,
      focus: function() {
        return false;
      },
      select: function(event, ui) {
        var terms = this.value.split(/,\s*/);
        terms.pop();
        terms.push(ui.item.value);
        terms.push("");
        this.value = terms.join("");
        return false;
      },
      open: function(event, ui) {
        $("ul.ui-autocomplete").css("z-index", 5000);
      }
    });

  });
  </script>
<script src="scripts/palabcomplete.js" charset="utf-8"></script>
<!--FIN-->

<?php include("user_location.php"); ?>

<script src="scripts/mis_establecimientos.js"></script>

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
</script>

</body>
</html>