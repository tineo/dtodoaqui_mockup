<?php include("php/session.php") ?>

<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui</title>

<?php include("builder/head.html"); ?>
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
</head>

<body class="transparent-header">
<!-- Wrapper -->
<div id="wrapper">

<!-- Cabecera
================================================== -->
<?php include("builder/header.php"); ?>


<!-- Banner
================================================== -->
<?php include("banner.php"); ?>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				<strong class="headline-with-separator">Categorías más visitadas</strong>
			</h3>
		</div>

		<div class="col-md-12">
			<div data-slick='{"slidesToShow": 6, "slidesToScroll": 6, "autoplay": true}' class="simple-slick-carousel dots-nav">

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Hamburger"></i>
						<h4>Fast Food</h4>
						<span class="category-box-counter">12</span>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Hotel "></i>
						<h4>Hoteles</h4>
						<span class="category-box-counter">32</span>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Shopping-Bag"></i>
						<h4>Tiendas</h4>
						<span class="category-box-counter">11</span>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Cocktail"></i>
						<h4>Diversión</h4>
						<span class="category-box-counter">15</span>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Electric-Guitar"></i>
						<h4>Eventos</h4>
						<span class="category-box-counter">21</span>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Dumbbell"></i>
						<h4>Gym</h4>
						<span class="category-box-counter">28</span>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="category-small-box" style="width: 100%;">
						<i class="im im-icon-Dumbbell"></i>
						<h4>Gym 2</h4>
						<span class="category-box-counter">28</span>
					</a>
				</div>
				<!-- Listing Item / End -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->




<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">Establecimientos más visitados</strong>
				</h3>
			</div>

			<div class="row" style="margin:0;">
				<div class="col-md-12">
					<!-- Filters -->
					<div id="filters">
						<ul class="option-set margin-bottom-30">
							<li><a href="#filter" class="selected" data-filter="*">Todos</a></li>
							<li><a href="#filter" data-filter=".first-filter">Restaurantes</a></li>
							<li><a href="#filter" data-filter=".second-filter">Clínicas</a></li>
							<li><a href="#filter" data-filter=".third-filter">Hoteles</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="row" style="margin:0;">
				<!-- Projects -->
				<div class="projects isotope-wrapper">
					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item first-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-01.jpg" alt="">

								<div class="listing-badge now-open">Abierto ahora</div>

								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="3.5"></div>
									<h3>Tom's Restaurant</h3>
									<span>Av. Aramburú 342 - Surquillo</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item second-filter first-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-02.jpg" alt="">
								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="5.0"></div>
									<h3>Sticky Band</h3>
									<span>Av. Larco 2853 - Miraflores</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

                    <!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item first-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-01.jpg" alt="">

								<div class="listing-badge now-open">Abierto ahora</div>

								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="3.5"></div>
									<h3>Tom's Restaurant</h3>
									<span>Av. Aramburú 342 - Surquillo</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item second-filter first-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-02.jpg" alt="">
								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="5.0"></div>
									<h3>Sticky Band</h3>
									<span>Av. Larco 2853 - Miraflores</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item third-filter first-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-03.jpg" alt="">
								<div class="listing-item-details">
									<ul>
										<li>desde $100 por noche</li>
									</ul>
								</div>
								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="2.0"></div>
									<h3>Hotel Govendor</h3>
									<span>Av. Navarrete 325 - San Isidro</span>
								</div>
								<span class="like-icon"></span>
							</div>

						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item third-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-04.jpg" alt="">

								<div class="listing-badge now-open">Abierto ahora</div>

								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="5.0"></div>
									<h3>Burger House</h3>
									<span>Av. La Marina 2321 - San Miguel</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item second-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-05.jpg" alt="">
								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="3.5"></div>
									<h3>Good Hope</h3>
									<span>Av. Diagonal 245 - Miraflores</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="col-lg-4 col-md-6 isotope-item first-filter">
						<a href="listings-single-page.html" class="listing-item-container compact">
							<div class="listing-item">
								<img src="images/listing-item-06.jpg" alt="">

								<div class="listing-badge now-closed">Cerrado ahora</div>

								<div class="listing-item-content">
									<div class="numerical-rating" data-rating="4.5"></div>
									<h3>Juan Valdéz</h3>
									<span>C.C. Salaverry - Jesús María</span>
								</div>
								<span class="like-icon"></span>
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fullwidth Section / End -->

<section class="fullwidth padding-top-75 padding-bottom-30" data-background-color="#fff">
	<!-- Info Section -->
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered headline-extra-spacing">
					<strong class="headline-with-separator">Lo que dicen nuestros usuarios</strong>
					<span class="margin-top-25" style="font-size: 18px; line-height: 26px;">Recopilamos más de 300 opiniones de nuestros <span style="color:#e2005a; display: inline;">500 +</span> usuarios, para que pueda tener una opinión honesta de cómo es realmente una experiencia en nuestro sitio web</span>
				</h3>
			</div>
		</div>

	</div>
	<!-- Info Section / End -->

	<!-- Categories Carousel -->
	<div class="fullwidth-carousel-container margin-top-20 no-dots">
		<div data-slick='{"autoplay": true}' class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution user generated content.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-01.jpg" alt="">
					<h4>Jennie Smith <span>Coffee Shop Owner</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-02.jpg" alt="">
					<h4>Tom Baker <span>Clothing Store Owner</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view.</div>
				</div>
				<div class="testimonial-author">
					<img src="images/happy-client-03.jpg" alt="">
					<h4>Jack Paden <span>Restaurant Owner</span></h4>
				</div>
			</div>

		</div>
	</div>
	<!-- Categories Carousel / End -->

</section>



<!-- Info Section -->
<section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="headline centered headline-extra-spacing">
				<strong class="headline-with-separator">¿Cómo funciona?</strong>
			</h3>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-File-Edit"></i>
				<h3>Paso 1</h3>
				<p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin.</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Mail-withAtSign"></i>
				<h3>Paso 2</h3>
				<p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra purus.</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2">
				<i class="im im-icon-Checked-User"></i>
				<h3>Paso 3</h3>
				<p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat consectetur.</p>
			</div>
		</div>
	</div>

</div>
</section>
<!-- Info Section / End -->

<!-- Footer
================================================== -->
<?php include("builder/footer.php"); ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<?php include("builder/js_footer.php"); ?>

<!--AUTOCOMPLETAR aqui-->
<script src="scripts/palabcomplete.js" charset="utf-8"></script>
<!--FIN-->

<script type="text/javascript">
	$(function(){
	  $('#logoIndex').addClass('mostrarLogo');
	});
</script>

<?php include("user_location.php"); ?>

<script src="scripts/top_establecimientos.js"></script>

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
</body>
</html>