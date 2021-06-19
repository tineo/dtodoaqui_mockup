<div class="main-search-inner" style="padding:150px 0 50px 0;">
	<div class="container">
		<div>
			<div class="col-md-12">
				<div class="hidden-xs hidden-sm">
					<h2>
						Cerca de tí
						<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
						<span class="typed-words"></span>
					</h2>
				</div>
				<div class="visible-xs visible-sm">
					<h2>
						Todo en un solo lugar!
					</h2>
				</div>
				<h4>Encuentra las mejores atracciones, actividades y más</h4>
				<form action="resultado-busqueda.php" method="post" class="geolocator-form">
				    <div class="main-search-input">
						<div class="main-search-input-item ui-widget">
						    <input id="palabcompleteresp" type="text" name="search" placeholder="¿Qué estás buscando?" value="" required />
						</div>

						<div class="main-search-input-item location">
							<div>
								<input class="geolocator-input" name="location" type="text" placeholder="Ubicación" value="<?php echo $_SESSION["user_address"]??''; ?>" required/>
							</div>
							<a href="#" class="geolocator-btn"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="Todas las categorías" name="category" class="chosen-select" required>
								<option>Todas las categorías</option>
								<option>Restaurantes</option>
								<option>Hoteles</option>
								<option>Spa</option>
								<option>Gimnasios</option>
								<option>Eventos</option>
							</select>
						</div>
						<button type="submit" class="button">Buscar</button>
					</div>
				</form>
			</div>
		</div>
		<!-- Features Categories -->
		<div class="row">
			<div class="col-md-12">
				<h5 class="highlighted-categories-headline" style="text-align: center;">o ingresa a nuestras categorías destacadas:</h5>

				<div class="highlighted-categories" align="center">
					<!-- Box -->
					<a href="listings-list-with-sidebar.html" class="highlighted-category">
				    	<i class="im im-icon-Plates"></i>
				    	<h4>Restaurante</h4>
					</a>

					<!-- Box -->
					<a href="listings-list-full-width.html" class="highlighted-category">
				    	<i class="im im-icon-Dumbbell"></i>
				    	<h4>Gym</h4>
					</a>

					<!-- Box -->
					<a href="listings-half-screen-map-list.html" class="highlighted-category">
				    	<i class="im im-icon-Hamburger"></i>
				    	<h4>Fast food</h4>
					</a>

					<!-- Box -->
					<a href="listings-half-screen-map-list.html" class="highlighted-category">
				    	<i class="im im-icon-Hospital"></i>
				    	<h4>Clínicas</h4>
					</a>

					<!-- Box -->
					<a href="listings-half-screen-map-list.html" class="highlighted-category">
				    	<i class="im  im-icon-Beer"></i>
				    	<h4>Bares</h4>
					</a>
				</div>

			</div>
		</div>
		<!-- Featured Categories - End -->
		<!--Recomienda a un amigo-->
		<div class="row" style="margin-top: 25px;">
		    <form id="email-form" action="#" method="post">
    			<div class="col-md-3 col-sm-5 col-xs-12" style="color: #fff; background: #000; border-radius: 5px 0 0 5px; padding: 11px 0; text-align: center;">
    				<i class="im im-icon-Email" style="font-size: 18px;"></i>&nbsp;&nbsp;&nbsp;Invita a un amigo:
    			</div>
    			<div class="col-md-7 col-sm-4 col-xs-8" style="padding: 0;">
    			    <input type="text" placeholder="jperez@gmail.com, juan@mail.com, etc..." value="" pattern='^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-ZñÑ\-0-9]+\.)+[a-zA-ZñÑ]{2,}))$' required/>
    			</div>
    			<div class="col-md-2 col-sm-3 col-xs-4 btnEnviarBuscador" style="padding:0;">
        		    <input type="submit" style="width: 100%">
    			</div>
    		</form>
		</div>
		<!--Fin Recomienda a un amigo-->
	</div>
</div>
