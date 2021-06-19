<?php include("php/session.php") ?>

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
				<h2>Mis Datos</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Mis Datos</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>


	<div class="container">
		<div id="add-listing">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12">
					<!-- Avatar -->
					<div class="edit-profile-photo" style="text-align: center;">
						<img src="images/avatar_yoel.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Subir foto</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-8 col-xs-12 dashboard-list-box margin-top-0" style="box-shadow: none;">
					<h4 class="gray">Datos personales </h4>
					<div style="padding: 30px 18px;">
						<strong>Mi URL:</strong> https://www.dtodoaqui.com/username<br>
						<strong>Nombre:</strong> Yoel Velásquez<br>
						<strong>E-mail:</strong> yoel@dtodoaqui.com
					</div>
				</div>
			</div>

			<div class="row dashboard-list-box margin-top-0">
				<h4>Datos complementarios</h4>
				<form id="form" style="margin-top: 10px;">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">E-mail secundario:</label>
							<div class="col-md-8 col-sm-5">
								<input name="secondary-email" value="" type="text" placeholder="" pattern='^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-ZñÑ\-0-9]+\.)+[a-zA-ZñÑ]{2,}))$'>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Alias:</label>
							<div class="col-md-8 col-sm-5">
								<input id="user-alias" name="user-alias" value="" type="text" placeholder="" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Fecha de nacimiento:</label>
							<div class="col-md-8 col-sm-5">
								<input name="birthday" value="" type="date" placeholder="dd/mm/aaaa" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Fecha de registro:</label>
							<div class="col-md-8 col-sm-5" style="padding-top: 10px;">
								04 de Abril 2018
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form-group row altura">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Estado civil:</label>
							<div class="col-md-8 col-sm-5">
								<select id="civil-state" name="civil-state" class="chosen-select-no-single" required
								    <option value="">Seleccione</option>
									<option>Soltero</option>
									<option>Casado</option>
									<option>Divorciado</option>
									<option>Viudo</option>
									<option>Conviviente</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Celular:</label>
							<div class="col-md-8 col-sm-5">
								<input name="number" value="" type="text" placeholder="" pattern="^[0-9]{6,12}$">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Idioma:</label>
							<div class="col-md-8 col-sm-5">
								<input name="language" type="text" placeholder="" value="Español" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-4 col-sm-7 col-form-label" style="padding-top: 12px;">Género:</label>
							<div class="col-md-8 col-sm-5">
								<select id="gender" name="gender" class="chosen-select-no-single" required>
								    <option value="">Seleccione</option>
									<option>Masculino</option>
									<option>Femenino</option>
								</select>
							</div>
						</div>


					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
					    <div class="form-group row">
						<label class="col-md-12 col-sm-12 col-form-label" style="padding-top: 12px;">Facebook:</label>
						<div class="col-md-12 col-sm-12">
							<input name="facebook" value="" type="text" placeholder="">
						</div>
					</div>
					</div>
                    
					<div style="clear: both; padding-left: 30px; margin:15px 0;">Ubicación:</div>

					<div class="row" style="clear: both; padding: 0 15px;">

						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 5px;">
							<select id="country" name="country" class="chosen-select-no-single" required>
								<option value="">-- País --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 5px;">
							<select id="city" name="city" class="chosen-select-no-single" required>
								<option value="">-- Provincia / Estado --</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 5px;">
							<select id="district" name="district" class="chosen-select-no-single" required>
								<option value="">-- Distrito / Ciudad --</option>
							</select>
						</div>
					</div>

					<div style="padding: 30px 30px 0px 30px;" class="col-md-12">
						<div class="form-group">
						    <label for="exampleFormControlTextarea1">Descripción</label>
						    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="500"></textarea>
						    <div class="row" style="height: 10%; display: flex; justify-content: flex-end;">
						        <span id="descriptionCharacters" style="">500 Caracteres restantes</span>
						    </div>
						</div>
					</div>

					<div class="form-group row" style="margin-top: 10px; padding: 30px;">
						<button type="submit" class="button preview" style="font-size: 15px; padding: 10px 15px; margin-top: 0;">Actualizar mis Datos <i class="fa fa-arrow-circle-right"></i></button>
					</div>


				</form>

			</div>
		</div>
		<br><br>




	</div>
	<!-- Content / End -->



</div>
<!-- Wrapper / End -->



	<!--Popup Agregar dirección-->
	<div id="PopupNewDireccion" class="zoom-anim-dialog mfp-hide PopupDetProd">
	 	<header><h3>Agregar nueva dirección</h3></header>
	 	<div class="contenido">
	 		<input value="" type="text" placeholder="Dirección">
	 		<div id="map"></div>
	 		<button class="button" style="margin-top: 25px;">Grabar</button>
			<div style="clear: both; height: 10px;"></div>
	 	</div>
	</div>
	<!--fin popup Agregar dirección-->

<div style="clear: both;"></div>
<?php include("builder/footer.php"); ?>

<?php include("builder/js_footer.php"); ?>

<!--AUTOCOMPLETAR aqui-->
<script src="scripts/palabcomplete.js" charset="utf-8"></script>
<!--FIN-->

<script>
	$('#form').submit((ev)=>{
	    if($('[name="country"]').val()==""||$('[name="city"]').val()==""||$('[name="district"]').val()==""||$('[name="civil-state"]').val()==""||$('[name="gender"]').val()=="")
	    {
	        ev.preventDefault();
	    }
	})
	
	$('[name="civil-state"]').on('change', (ev)=>{
	    if($('[name="civil-state"]').val()=="")
	    {
	        ev.target.setCustomValidity('Escoja una categoria');
	    }else ev.target.setCustomValidity('');
	})
	
	$('[name="gender"]').on('change', (ev)=>{
	    if($('[name="gender"]').val()=="")
	    {
	        ev.target.setCustomValidity('Escoja una categoria');
	    }else ev.target.setCustomValidity('');
	})
	
	$('[name="category"]').on('change', (ev)=>{
	    if($('[name="category"]').val()=="")
	    {
	        ev.target.setCustomValidity('Escoja una categoria');
	    }else ev.target.setCustomValidity('');
	})
	
	$('[name="country"]').on('change', (ev)=>{
	    if($('[name="country"]').val()=="")
	    {
	        ev.target.setCustomValidity('Escoja una categoria');
	    }else ev.target.setCustomValidity('');
	})
	
	$('[name="city"]').on('change', (ev)=>{
	    if($('[name="city"]').val()=="")
	    {
	        ev.target.setCustomValidity('Escoja una categoria');
	    }else ev.target.setCustomValidity('');
	})
	
	$('[name="district"]').on('change', (ev)=>{
	    if($('[name="district"]').val()=="")
	    {
	        ev.target.setCustomValidity('Escoja una categoria');
	    }else ev.target.setCustomValidity('');
	})
	document.getElementById('civil-state').setCustomValidity('Escoja una categoria');
	document.getElementById('gender').setCustomValidity('Escoja una categoria');
	document.getElementById('country').setCustomValidity('Escoja una categoria');
	document.getElementById('city').setCustomValidity('Escoja una categoria');
	document.getElementById('district').setCustomValidity('Escoja una categoria');
	
  // Note: This example requires that you consent to location sharing when
  // prompted by your browser. If you see the error "The Geolocation service
  // failed.", it means you probably did not give permission for the browser to
  // locate you.
  var map, infoWindow, marker;
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
  
  function setMapLocation(geolocationArr){
      map.setCenter({lat: parseFloat(geolocationArr[0]), lng: parseFloat(geolocationArr[1])});
      
  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'Error: The Geolocation service failed.' :
                          'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
  }
  
  if($(window).width()<=1024)
  {
    $('input[name="birthday"]').css('padding-top', '15px');
  }
  
  $('#user-alias').on('focusin', (ev)=>{
  })
  
  $('#user-alias').on('focusout', (ev)=>{
      $.ajax({
                url: "php/aliasCheck.php",
                type: "POST",
                dataType: "json",
                data: {
                  alias: ev.target.value
                },
                success: function(data) {
                    if(data.status === 200)
                    {
                        if(!data.valid)
                        {
                            ev.target.setCustomValidity('Alias no disponible');
                            $(ev.target).css('border-color', 'red');
                        }else {
                            ev.target.setCustomValidity('');
                            $(ev.target).css('border-color', '#dbdbdb');
                        }
                        
                    }
                }
          
      })
      
  })
  
  $('#exampleFormControlTextarea1').on('keydown', (ev)=>{
      $('#descriptionCharacters').text(500 - ev.target.value.length + ' Caracteres restantes');
  })
</script>

<script src="scripts/region_autocomplete.js"></script>

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
</script>

</body>
</html>