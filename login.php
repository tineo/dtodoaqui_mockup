<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>D'TodoAqui | Acceder</title>
<?php include("builder/head.html"); ?>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Cabecera
================================================== -->
<?php include("builder/header.php"); ?>


<!-- Titlebar
================================================== -->
<div id="titlebar" style="background: url(images/back_int.jpg); background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Login</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Login</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">
		<!-- Content
		================================================== -->
		<div class="col-lg-8 col-md-8 padding-right-30">

			<h3 class="margin-top-0 margin-bottom-30">Datos de acceso</h3>

			<div class="row">
				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>Correo electrónico</label>
						<input type="text" value="">
						<i class="im im-icon-Mail"></i>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-with-icon medium-icons">
						<label>Contraseña</label>
						<input type="password" value="">
						<i class="im im-icon-Password-2shopping"></i>
					</div>
				</div>
			</div>

			<input type="submit" class="button border fw margin-top-10" name="register" value="Acceder" />
			<div>
				<a href="recuperar.php">Recuperar contraseña</a>
			</div>
		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-0 margin-bottom-60">
			<h3 class="margin-top-0 margin-bottom-30">Accede con:</h3>
			<ul class="social-icons rounded">
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
			</ul>
		</div>
	</div>
	<div style="height: 80px;"></div>
</div>
<!-- Container / End -->



<!-- Footer
================================================== -->
<?php include("builder/footer.php"); ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<?php include("builder/js_footer.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
	  $('#logoInt').addClass('mostrarLogo');
	});
</script>

</body>
</html>