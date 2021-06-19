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
	.chosen-drop{
	    z-index: 991 !important;
	}
	.selectize-input.items{
	    padding: 5px 5px 0 5px !important;
	    font-size: inherit;
	}
	.selectize-input.items div.item{
	    background-image: none !important;
	    background: none !important;
	    background-color: #f91942 !important;
	    border: none;
	}
	.selectize-input.items .item.active{
	    border: none !important;
	}
	.selectize-input.items input{
	    position: relative !important;
	}
	.selectize-input.items div.item a{
	    border-left: none !important;
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
				<h2>Editar Establecimiento</h2>
			</div>
			<div class="col-md-6 hidden-xs" style="top: 35px;">
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li>Editar Establecimiento</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form id="form" action="#">

    				<div id="add-listing">
    
    					<!-- Section -->
    					<div class="add-listing-section">
    
    						<div class="row">
    							<div class="col-md-3 col-sm-4 col-xs-12">
    								<!-- Avatar -->
    								<div class="edit-profile-photo" style="text-align: center;">
    									<img src="images/logo_est01.jpg" alt="">
    									<div class="change-photo-btn">
    										<div class="photoUpload">
    										    <span><i class="fa fa-upload"></i> cambiar Logo</span>
    										    <input type="file" class="upload"/>
    										</div>
    									</div>
    								</div>
    							</div>
    							<div class="col-md-9 col-sm-8 col-xs-12 dashboard-list-box " style="box-shadow: none;">
    								<form style="margin-top: 10px;">
    									<div class="form-group row">
    										<h5>Nombre del establecimiento</h5>
    										<input name="nombre-est" value="" type="text" placeholder="" required>
    									</div>
    
    									<div class="form-group">
    										<h5>Categoría(s): </h5>
    										<div style="clear: both;"></div>
    										<select name="categoria-est" id="category" name="category" data-placeholder="Seleccion una o más categorías" class="chosen-select" multiple required>
    										    <option value="">Seleccione</option>
    											<option>Restaurante</option>
    											<option>Hotel</option>
    											<option>Spa</option>
    											<option>Gimnasio</option>
    											<option>Sala de Eventos</option>
    										</select>
    									</div>
    								</form>
    							</div>
    						</div>
    
    						<!-- Title -->

    						<div class="row with-forms">
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<h5>Teléfonos</h5>
    								<input name="telefono-est" class="search-field" type="text" value="" pattern="^[0-9]{6,12}$" placeholder="325-6522"/>
    							</div>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<h5>Correo electrónico</h5>
    								<input name="correo-est" class="search-field" type="email" placeholder="informes@establecimiento.com" pattern='^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-ZñÑ\-0-9]+\.)+[a-zA-ZñÑ]{2,}))$'/>
    							</div>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<h5>Página web:</h5>
    								<input name="web-est" class="search-field" type="text" placeholder="www.establecimiento.com" pattern='^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#]+\/?)*$'/>
    							</div>
    						</div>
    
    						<h3>Modalidades de pago</h3>
    						<div class="checkboxes in-row margin-bottom-20">
    							<input id="chyape" type="checkbox" name="chyape">
    							<label for="chyape">Yape</label>
    
    							<input id="chtunki" type="checkbox" name="chtunki">
    							<label for="chtunki">Tunki</label>
    
    							<input id="chluki" type="checkbox" name="chluki">
    							<label for="chluki">Lukita</label>
    
    							<input id="chetc" type="checkbox" name="chetc">
    							<label for="chetc">Tarjeta de Credito</label>
    						</div>
    
    						<h3>Comodidades</h3>
    						<div class="checkboxes in-row margin-bottom-20">
    							<input id="chcdeliv" type="checkbox" name="chcdeliv">
    							<label for="chcdeliv">Delivery</label>
    
    							<input id="chcplinea" type="checkbox" name="chcplinea">
    							<label for="chcplinea">Pedido en linea</label>
    
    							<input id="chcest" type="checkbox" name="chcest">
    							<label for="chcest">Estacionamiento</label>
    
    							<input id="chcwifi" type="checkbox" name="chcwifi">
    							<label for="chcwifi">Wifi</label>
    
    							<input id="chctc" type="checkbox" name="chctc">
    							<label for="chctc">Pago con Tarjeta</label>
    
    							<input id="chcespt" type="checkbox" name="chcespt">
    							<label for="chcespt">Espacio para trabajo amigable</label>
    
    							<input id="chcsillar" type="checkbox" name="chcsillar">
    							<label for="chcsillar">Acceso a silla de ruedas</label>

                                <input id="chczonan" type="checkbox" name="chczonan">
                                <label for="chczonan">Zona para niños</label>

                                <input id="checzonaf" type="checkbox" name="checzonaf">
                                <label for="checzonaf">Zona para fumadores</label>
    						</div>
    						<!-- Section -->
    					<div class="add-listing-section margin-top-45">
    
    						<!-- Headline -->
    						<div class="add-listing-headline" style="margin-bottom: 0px !important;">
    							<h3><i class="sl sl-icon-clock"></i> Horarios de Atención</h3>
    							<!-- Switcher -->
    							<label class="switch"><input type="checkbox"><span class="slider round"></span></label>
    						</div>
    
    						<!-- Switcher ON-OFF Content -->
    						<div class="switcher-content">
    							<div class="row" style="height: 10%; display: flex; justify-content: flex-end; margin-bottom: 20px; align-items: center;">
    							    <label for="toggle-horarios" style="margin-bottom: 0px; margin-right: 10px;">Todos los dias</label>
							        <input id="toggle-horarios" name="toggle-horarios" type="checkbox" style="height: 20px; width: 20px; margin: 0px; background: none;" checked> 
    							</div>
                                <!-- Multiple Selection -->
                                <div class="row opening-day multiple">
    								<div class="col-md-2"><h5>Todos los días</h5></div>
    								<div class="col-md-5">
    									<select id="all-day-opening" class="chosen-select" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select id="all-day-closing" class="chosen-select" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
                                <!-- Multiple Selection / END -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Lunes</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option selected="">12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option selected="">11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Martes</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Miércoles</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Jueves</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Viernes</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Sábado</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    
    							<!-- Day -->
    							<div class="row opening-day" style="display: none;">
    								<div class="col-md-2"><h5>Domingo</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select open" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select close" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    							<!-- Day -->
    							<div class="row">
    								<div class="col-md-2"><h5>Días feriados</h5></div>
    								<div class="col-md-5">
    									<select class="chosen-select" data-placeholder="Hora de apertura">
    										<option label="Hora de apertura"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    								<div class="col-md-5">
    									<select class="chosen-select" data-placeholder="Hora de Cierre">
    										<option label="Hora de Cierre"></option>
    										<option>Cerrado</option>
    										<option>1 AM</option>
    										<option>2 AM</option>
    										<option>3 AM</option>
    										<option>4 AM</option>
    										<option>5 AM</option>
    										<option>6 AM</option>
    										<option>7 AM</option>
    										<option>8 AM</option>
    										<option>9 AM</option>
    										<option>10 AM</option>
    										<option>11 AM</option>
    										<option>12 AM</option>
    										<option>1 PM</option>
    										<option>2 PM</option>
    										<option>3 PM</option>
    										<option>4 PM</option>
    										<option>5 PM</option>
    										<option>6 PM</option>
    										<option>7 PM</option>
    										<option>8 PM</option>
    										<option>9 PM</option>
    										<option>10 PM</option>
    										<option>11 PM</option>
    										<option>12 PM</option>
    									</select>
    								</div>
    							</div>
    							<!-- Day / End -->
    						</div>
    						<!-- Switcher ON-OFF Content / End -->
    
    					</div>
    					<!-- Section / End -->
    
    						<h3 style="margin-bottom: 20px;">Google Analytics</h3>
    						<textarea  name="ganalyticsest" rows="2" id="g-analytics" spellcheck="true" placeholder="" style="font-size: 16px;"></textarea>
    
    						<h3 style="margin-bottom: 20px;">Redes Sociales</h3>
    						<!-- Row -->
    						<div class="row with-forms">
    
    							<!-- facebook -->
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(opcional)</span></h5>
    								<input name="face-est" type="text" placeholder="https://www.facebook.com/">
    							</div>
    
    							<!-- WhatsApp -->
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<h5 class="whatsapp-input"><i class="fa fa-whatsapp"></i> WhatsApp <span>(opcional)</span></h5>
    								<input name="whatsapp-est" type="text" placeholder="999999999" pattern="^[0-9]{6,12}$" />
    							</div>
    
    							<!-- Instagram -->
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<h5 class="gplus-input"><i class="fa fa-instagram"></i> Instagram <span>(opcional)</span></h5>
    								<input name="instagram-est" type="text" placeholder="https://www.instagram.com">
    							</div>
    
    						</div>
    						<!-- Row / End -->
    
    						<h3 style="margin-bottom: 20px;">Descripción</h3>
    						<textarea name="desc-est"  id="exampleFormControlTextarea1" name="" rows="3" id="" spellcheck="true" placeholder="" style="font-size: 16px;" maxlength="500"></textarea>
    					    <div class="row" style="height: 10%; display: flex; justify-content: flex-end;">
    					        <span id="descriptionCharacters" style="">500 Caracteres restantes</span>
    					    </div>
    
    						<h3 style="margin-bottom: 20px;">Palabras claves</h3>
    						Separado por comas
    						<input name="palab-est" type="text" name="keywords" placeholder="Seleccione una o más palabras claves" >

    						<h3 style="margin-bottom: 20px;">Galería de fotos</h3>
    						<div class="add-listing-section">
    							<!-- Dropzone -->
    							<div class="submit-section">
    								<form action="/file-upload" class="dropzone" ></form>
    							</div>
    						</div>
    
    						<div class="row" style="margin-top: 20px;">
    							<div class="colGaleria sinPadding">
    								<div class="btnEliminar">
    									<a href="#popupDelete" style="position: relative; right: 0; top: 0; font-size: 25px;" class="popup-with-zoom-anim">
    										<i class="fa fa-times-circle"></i>
    									</a>
    								</div>
    								<img src="images/estab/single-listing-05a.jpg">
    							</div>
    							<div class="colGaleria sinPadding">
    								<div class="btnEliminar">
    									<a href="#popupDelete" style="position: relative; right: 0; top: 0; font-size: 25px;" class="popup-with-zoom-anim">
    										<i class="fa fa-times-circle"></i>
    									</a>
    								</div>
    								<img src="images/estab/single-listing-05b.jpg">
    							</div>
    							<div class="colGaleria sinPadding">
    								<div class="btnEliminar">
    									<a href="#popupDelete" style="position: relative; right: 0; top: 0; font-size: 25px;" class="popup-with-zoom-anim">
    										<i class="fa fa-times-circle"></i>
    									</a>
    								</div>
    								<img src="images/estab/single-listing-05c.jpg">
    							</div>
    							<div class="colGaleria sinPadding">
    								<div class="btnEliminar">
    									<a href="#popupDelete" style="position: relative; right: 0; top: 0; font-size: 25px;" class="popup-with-zoom-anim">
    										<i class="fa fa-times-circle"></i>
    									</a>
    								</div>
    								<img src="images/estab/single-listing-05d.jpg">
    							</div>
    						</div>
    
    						<h3 style="margin-bottom: 20px;">Banners</h3>
    
    						<div class="add-listing-section">
    							<!-- Dropzone -->
    							<div class="submit-section">
    								<form action="/file-upload" class="dropzone" ></form>
    							</div>
    						</div>
    						
    						<div class="row" style="margin-top: 20px;">
    							<div class="colGaleria sinPadding">
    								<div class="btnEliminar">
    									<a href="#popupDelete" style="position: relative; right: 0; top: 0; font-size: 25px;" class="popup-with-zoom-anim">
    										<i class="fa fa-times-circle"></i>
    									</a>
    								</div>
    								<img src="images/banner/banner_prueba.jpg">
    							</div>
    							<div class="colGaleria sinPadding">
    								<div class="btnEliminar">
    									<a href="#popupDelete" style="position: relative; right: 0; top: 0; font-size: 25px;" class="popup-with-zoom-anim">
    										<i class="fa fa-times-circle"></i>
    									</a>
    								</div>
    								<img src="images/banner/banner_prueba2.jpg">
    							</div>
    						</div>
    
    						<h3 style="margin-bottom: 20px;">Video</h3>
    						<input name="youtube-est" type="text" placeholder="https://www.youtube.com">
    						
    						<div class="row with-forms">
    						    <h5 style="padding: 0 10px;">Ubicación</h5>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<select id="country" name="country" class="chosen-select-no-single" required>
    									<option value="" selected>-- País --</option>
    								</select>
    							</div>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<select id="city" name="city" class="chosen-select-no-single" required>
    									<option value="" selected>-- Ciudad --</option>
    								</select>
    							</div>
    							<div class="col-md-4 col-sm-4 col-xs-12">
    								<select id="district" name="district" class="chosen-select-no-single" required>
    									<option value="">-- Distrito --</option>
    								</select>
    							</div>
    						</div>
    						<div class="row with-forms">
    							<div class="col-md-12">
    								<h5>Dirección</h5>
    								<input name="direccion-est" class="search-field" type="text" placeholder="Dirección del cliente" required/>
    							</div>
    						</div>
    					</div>
    					<!-- Section / End -->
    
    					<!--Mapa-->
    					<div id="map"></div>
                        <input id="latitude" name="latitude" value="" style="display: none;"></input>
                        <input id="longitude" name="longitude" value="" style="display: none;"></input>
                        
    					<button type="submit" href="#" class="button preview">Grabar Establecimiento <i class="fa fa-arrow-circle-right"></i></button>
    					<br><br><br>
    				</div>
    			</form>
			</div>
		</div>
	</div>
	<div id="popupDelete" class="PopupDTA zoom-anim-dialog mfp-hide"  style="padding: 0 !important;">
     	<header style="left: 0px !important; width: 100% !important;"><h3>¿Esta seguro que desea eliminar esta imagen?</h3></header>
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
	<!-- Content / End -->

</div>
<!-- Wrapper / End -->

<div style="clear: both;"></div>
<?php include("builder/footer.php"); ?>
<?php include("builder/js_footer.php"); ?>

<script src="scripts/selectize/selectize.min.js"></script>

<!--AUTOCOMPLETAR aqui-->
<script src="scripts/palabcomplete.js" charset="utf-8"></script>

<script type="text/javascript">
	$('#form').submit((ev)=>{
	    if($('[name="category"]').val()==""||$('[name="country"]').val()==""||$('[name="city"]').val()==""||$('[name="district"]').val()=="")
	    {
	        ev.preventDefault();
	    }
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
	document.getElementById('category').setCustomValidity('Escoja una categoria');
	document.getElementById('country').setCustomValidity('Escoja una categoria');
	document.getElementById('city').setCustomValidity('Escoja una categoria');
	document.getElementById('district').setCustomValidity('Escoja una categoria');

    $(document).ready(function(){
          $(function() {
            $('#all-day-opening').chosen().change((ev, params)=>{
              $('select.open').val(params.selected).trigger('chosen:updated');;
            })
        
            $('#all-day-closing').chosen().change((ev, params)=>{
              $('select.close').val(params.selected).trigger('chosen:updated');;
            })
        
            $('.chosen-select').chosen({inherit_select_classes: true});
          })
        })

	$(function(){
	  $('#logoInt').removeClass( "ocultar").addClass('mostrarLogo');
	  $('#logoIndex').addClass('ocultar');
	  $('#BtnBuscar').addClass('mostrar');
	});

// 	$(function () {
// 	    $('.selectpicker').selectpicker();
// 	});
</script>

<script>
  // Note: This example requires that you consent to location sharing when
  // prompted by your browser. If you see the error "The Geolocation service
  // failed.", it means you probably did not give permission for the browser to
  // locate you.
  var map, infoWindow, marker;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -10.0000000, lng: -76.0000000},
      zoom: 15,
      styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        marker = new google.maps.Marker({position: pos, map: map});
        /*infoWindow.setPosition(pos);
        infoWindow.setContent('Localizado');
        infoWindow.open(map);*/
        map.setCenter(pos);
        marker.setDraggable(true);
        marker.setAnimation = google.maps.Animation.DROP;
        //alert('xxx' + coords.lat + ' , ' + coords.lng );
	      _lat1 = position.coords.lat;
	      _lng1 = position.coords.lng;
	      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica
	      //cuando el usuario a soltado el marcador
	      marker.addListener('click', toggleBounce);

	      marker.addListener( 'dragend', function (event)
	      {
	        //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
	       // document.getElementById("coords").value = this.getPosition().lat()+","+ this.getPosition().lng();
	        $('#latitude').val(this.getPosition().lat());
	        $('#longitude').val(this.getPosition().lng());

	        //alert('xd 1');
	      });
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });

      //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
		function toggleBounce() {
		  if (marker.getAnimation() !== null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }

  }

  function setMapLocation(geolocationArr){
      map.setCenter({lat: parseFloat(geolocationArr[0]), lng: parseFloat(geolocationArr[1])});
      marker.setPosition({lat: parseFloat(geolocationArr[0]), lng: parseFloat(geolocationArr[1])});
      $('#latitude').val(marker.getPosition().lat());
	  $('#longitude').val(marker.getPosition().lng());
  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'Error: The Geolocation service failed.' :
                          'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
  }
  
  $('#exampleFormControlTextarea1').on('keydown', (ev)=>{
      $('#descriptionCharacters').text(500 - ev.target.value.length + ' Caracteres restantes');
  });
  
  $('#toggle-horarios').on('change', (ev)=>{
     if(ev.target.checked)
     {
         $(ev.target).parent().parent().find('.row.opening-day').not('.multiple').css('display', 'none');
         $(ev.target).parent().parent().find('.row.opening-day.multiple').css('display', 'block');
     }
     else
     {
         $(ev.target).parent().parent().find('.row.opening-day').not('.multiple').css('display', 'block');
         $(ev.target).parent().parent().find('.row.opening-day.multiple').css('display', 'none');
     }
  })
  
    $('[name="keywords"]').selectize({
        persist: false,
        createOnBlur: true,
        showAddOptionOnCreate: false,
        create: true,
        plugins: ['remove_button'],
        onType: function(value){
            if(value.includes(','))
            {
                value = value.replace(',', '')
                this.addOption({
                        text:value,
                        value: value
                    });
                this.addItem(value)
                $('.selectize-input input').val('');
            }
        }
    })
    // container = $('[name="keywords"]').data("chosen").container
    // $(container).find('.chosen-drop').css('display', 'none');
    // container.bind("keypress", function(ev){
    //     if(ev.keyCode == 44)
    //     {
    //         var keywordsArr = [];
    //         keyword = ev.target.value.replace(',', '');
    //         keywordsArr = $('[name="keywords"]').val();
    //         keywordsArr.push(keyword);
    //         $('[name="keywords"]').append('<option>'+keyword+'</option>').val(keywordsArr).trigger('chosen:updated');
    //     }
    // });
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
						initMap();
					}
			})
		})
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0kphWL4y--yzEgat2x8bksm_sRmwf7NM&libraries=places&callback=initServices"></script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="scripts/dropzone.js"></script>

</body>
</html>