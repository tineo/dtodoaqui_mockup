<header id="header-container">
	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->

				<div id="logoIndex">
					<div id="logo">
						<a href="index.php"><img src="images/dta_logo_blanco.png" data-sticky-logo="images/dta_logo_color.png" alt=""></a>
					</div>
				</div>


				<div id="logoHome" class="ocultar">
					<div id="logo">
						<a href="index.php"><img src="images/dta_logo_blanco.png" data-sticky-logo="images/dta_logo_color.png" alt=""></a>
					</div>
				</div>

				<div id="logoInt" class="ocultar">
					<div id="logo">
						<a href="index.php"><img src="images/dta_logo_color.png" data-sticky-logo="images/dta_logo_color.png" alt=""></a>
					</div>
				</div>


				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">

					<ul id="responsive">
						<!-- Buscador Movil -->
						<div class="visible-xs visible-sm buscadorMobile">
							<form action="resultado-busqueda.php" method="post" class="geolocator-form">
								<div class="ContenidoBuscador">
									<div class="main-search-input" style="margin-top: 0;">
										<div class="main-search-input-item">
										    <input id="palabcomplete2" type="text" name="search" placeholder="¿Qué estás buscando?" value="" required />
										</div>
										<div class="main-search-input-item location">
											<div>
												<input class="geolocator-input" name="location" type="text" placeholder="Ubicación" value="<?php echo $_SESSION["user_address"]??''; ?>" required>
												<a href="#" class="geolocator-btn" style="border: none; left: 88%; top: 45%"><i class="fa fa-map-marker"></i></a>
											</div>
										</div>

										<div class="main-search-input-item">
											<select id="cat" name="category" data-placeholder="Todas las categorías">
												<option>Todas las categorías</option>
												<option>Restaurantes</option>
												<option>Hoteles</option>
												<option>Spa</option>
												<option>Gimnasios</option>
												<option>Eventos</option>
											</select>
										</div>
										<button class="button">Buscar</button>
									</div>
								</div>
							</form>
						</div>
						<div class="visible-xs visible-sm" style="height: 330px;"></div>
						<li><a class="current" href="index.php">Inicio</a></li>
						<li class="hidden-xs hidden-sm">
							<a class="popup-with-zoom-anim" href="#popupRegistro">Regístrate</a></li>
						<li><a href="resultado-busqueda.php">Búsqueda</a></li>
						<!--
						<li class="activo"><a href="#popupLogin" class="button popup-with-zoom-anim">Iniciar Sesión</a></li>
						-->
						<li class="hidden-xs hidden-sm">
							<a class="popup-with-zoom-anim button color" href="#popupLogin" style="color: #fff;">Iniciar Sesión</a>
						</li>
						<li class="visible-xs visible-sm"><a href="condiciones-de-servicios.php">Condiciones de servicio</a></li>
						<li class="visible-xs visible-sm"><a href="politicas-de-privacidad.php">Políticas de privacidad</a></li>
						<li class="visible-xs visible-sm"><a href="https://api.whatsapp.com/send?phone=51994572335" target="blank_">Contacte con Soporte</a></li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Menu usuario-->
			<div class="right-side">
				<div class="header-widget">
					<div class="user-menu">
						<div class="user-name"><span><img src="images/avatar_yoel.jpg" alt=""></span>Hola Yoel</div>
						<ul>
							<li><a href="user_mis_datos.php"><i class="sl sl-icon-settings"></i> Mis Datos</a></li>
							<li><a href="user_mis_establecimientos.php"><i class="im im-icon-Location-2"></i> Mis Establecimientos</a></li>
							<li><a href="user_mis_favoritos.php"><i class="sl sl-icon-heart"></i> Mis Favoritos</a></li>
							<li><a href="user_mis_registros.php"><i class="fa fa-list-ul"></i> Mis Registros</a></li>
							<li><a href="user_add_establecimientos.php"><i class="sl sl-icon-plus"></i> Añadir Establecimiento</a></li>
							<li><a href="#"><i class="sl sl-icon-lock"></i> Cambiar de contraseña</a></li>
							<li><a href="#"><i class="sl sl-icon-power"></i> Salir</a></li>
						</ul>
					</div>
					<div class="enLinea">
						<a href="#" class="linkRedesHead"><i class="fa fa-facebook-square"></i></a>
					</div>
					<div class="enLinea">
						<a href="#" class="linkRedesHead"><i class="fa fa-instagram"></i></a>
					</div>
					<div class="enLinea">
						<a href="#" class="linkRedesHead"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>

			<!--Fin menu usuario -->

			<!--buscador-->
			<div id="Hbuscador" style="display: none;">
				<div class="row" style="clear: both;">
					<!-- Main Search Input -->
					<div class="col-fs-12">
						<form action="resultado-busqueda.php" method="post">
							<div class="input-with-icon">
								<i class="sl sl-icon-magnifier"></i>
								<input id="palabcomplete3" type="text" name="search" placeholder="¿Qué estás buscando?" value="" required />
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--fin buscador-->

		</div>
	</div>
	<!-- Header / End -->



</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Popup Iniciar Sesión -->
<div id="popupLogin" class="PopupDTA zoom-anim-dialog mfp-hide">
 	<header><h3>Iniciar Sesión</h3></header>
 	<div class="contenido">
 		<div style="margin-bottom:40px;">
			<div class="input-with-icon medium-icons">
				<label>Correo electrónico</label>
				<input type="text" value="">
				<i class="im im-icon-Mail"></i>
			</div>
			<div class="input-with-icon medium-icons">
				<label>Contraseña</label>
				<input type="password" value="">
				<i class="im im-icon-Password-2shopping"></i>
			</div>
			<input type="submit" class="button border fw margin-top-10" name="" value="Acceder" style="width: 100%;">
			<div style="text-align: center;">
				<a href="recuperar.php">Ovidé mi contraseña</a>
			</div>
			<br>
			<div style="text-align: center; font-weight: bold;">o</div>

			<a href="#" class="button fw margin-top-10" style="width: 100%; background: #1877f2; text-align: center;"><i class="fa fa-facebook-square"></i> Continuar con Facebook</a>

			<a href="#" class="button fw margin-top-10" style="width: 100%; background: #4285f4; text-align: center;"><i class="fa fa-google"></i> Continuar con Google</a>

		</div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>

<div id="popupReporte" class="PopupDTA zoom-anim-dialog mfp-hide">
 	<header><h3>Reportar este Sitio</h3></header>
 	<div class="contenido">
 		<div style="margin-bottom:40px;">
			<div class="input-with-icon medium-icons">
				<label>Por favor elija el motivo por el cual desea reportar a este lugar. Muchas gracias por su colaboracion.</label>
			</div>
			<br>
			<div class="main-search-input-item">
				<select data-placeholder="Todas las categorías" class="chosen-select" >
					<option>Este lugar no existe.</option>
					<option>Informacion falsa.</option>
					<option>Actitud peligrosa.</option>
					<option>Discriminacion.</option>
				</select>
			</div>
			<input type="submit" class="button border fw margin-top-10" name="" value="Reportar" style="width: 100%;">

		</div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>

<div id="popupRegistro" class="PopupDTA zoom-anim-dialog mfp-hide">
 	<header><h3>Regístrate</h3></header>
 	<div class="contenido">
 		<div style="margin-bottom:40px;">
			<div class="input-with-icon medium-icons">
				<input type="email" value="" placeholder="Correo electrónico">
				<i class="im im-icon-Mail"></i>
			</div>
			<div class="input-with-icon medium-icons">
				<input type="text" value="" placeholder="Nombres">
				<i class="im im-icon-Checked-User"></i>
			</div>
			<div class="input-with-icon medium-icons">
				<input type="text" value="" placeholder="Apellidos">
				<i class="im im-icon-Checked-User"></i>
			</div>
			<div class="input-with-icon medium-icons">
				<input type="password" value="" placeholder="Contraseña">
				<i class="im im-icon-Password-2shopping"></i>
			</div>
			<input type="submit" class="button border fw margin-top-10" name="" value="Registrarme" style="width: 100%;">
			<br>
			<div style="text-align: center; font-weight: bold;">o</div>

			<a href="#" class="button fw margin-top-10" style="width: 100%; background: #1877f2; text-align: center;"><i class="fa fa-facebook-square"></i> Continuar con Facebook</a>

			<a href="#" class="button fw margin-top-10" style="width: 100%; background: #4285f4; text-align: center;"><i class="fa fa-google"></i> Continuar con Google</a>

		</div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>

<div id="popupTitular" class="PopupDTA zoom-anim-dialog mfp-hide">
 	<header><h3>Solicitar Titularidad</h3></header>
 	<div class="contenido">
 		<div style="margin-bottom:40px;">
			<div class="input-with-icon medium-icons">
				<label>Por favor, brindenos su informacion de contacto, nuestra area de soporte se pondra en contacto con usted para validar el proceso.</label>
			</div>
			<br>
			<div class="input-with-icon medium-icons">
				<input type="email" value="" placeholder="Correo electrónico">
				<i class="im im-icon-Mail"></i>
			</div>
			<div class="input-with-icon medium-icons">
				<input type="text" value="" placeholder="Nombres">
				<i class="im im-icon-Checked-User"></i>
			</div>
			<div class="input-with-icon medium-icons">
				<input type="text" value="" placeholder="Apellidos">
				<i class="im im-icon-Checked-User"></i>
			</div>
			<input type="submit" class="button border fw margin-top-10" name="" value="Enviar Solicitud" style="width: 100%;">

		</div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>
<div id="popupFav" class="PopupDTA zoom-anim-dialog mfp-hide">
 	<header><h3>Favoritos</h3></header>
 	<div class="contenido">
 		<div style="margin-bottom:40px;">
			<div class="input-with-icon medium-icons">
				<label>Este lugar esta en tus favoritos ahora.</label>
			</div>
		</div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>
<div id="popupPass" class="PopupDTA zoom-anim-dialog mfp-hide">
 	<header><h3>Cambiar Contraseña</h3></header>
 	<div class="contenido">
 		<div style="margin-bottom:40px;">
			<div class="input-with-icon medium-icons">
				<label>Se ha enviado un enlace a su e-mail registrado indicando los pasos para cambiar su contraseña.</label>
			</div>
		</div>
		<div style="clear: both; height: 10px;"></div>
 	</div>
</div>