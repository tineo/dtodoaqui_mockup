<!--Hacer pedido-->
<div class="tienda">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-7">
			<div class="titTienda">Nuestros productos</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-5">
			<div class="btnIrTienda"><a href="tienda_completa.php">Ir a la tienda</a></div>
		</div>
	</div>
	
	<div class="row">
		<div class="colTienda sinPadding">
			<div class="ProdImg">
				<a class="popup-with-zoom-anim" href="#popupDetProd"><img src="images/productos/prod01.jpg" class="img-responsive"></a>
			</div>
			<div class="ProdNom"><a class="popup-with-zoom-anim" href="#popupDetProd">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div class="MsgOk" align="center">
				<a href="javascript:void(0);" class="button" onclick="_gaq.push(['_trackEvent', 'MsgOk']);">Añadir <i class="fa fa-shopping-cart"></i></a>
			</div>
		</div>
		<div class="colTienda sinPadding">
			<div class="ProdImg"><img src="images/productos/prod02.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
		<div class="colTienda sinPadding">
			<div class="ProdImg"><img src="images/productos/prod03.jpg" class="img-responsive"></div>
			<div class="ProdNom"><a href="#">Título del producto</a></div>
			<div align="center" style="padding: 8px 0;">
				<div class="number-input">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
				  <input class="quantity" min="0" name="quantity" value="1" type="number">
				  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
			<div class="PrecioProd">S/ 20.00</div>
			<div align="center"><a href="#" class="button">Añadir <i class="fa fa-shopping-cart"></i></a></div>
		</div>
	</div>


	<!--Modal detalle del producto-->
	<div id="popupDetProd" class="zoom-anim-dialog mfp-hide PopupDetProd">
	 	<header><h3>Titulo del producto</h3></header>
	 	<div class="contenido">
	 		<div class="row">
	 			<div class="col-md-4">
	 				<img src="images/productos/prod01.jpg" class="img-responsive">
	 			</div>
	 			<div class="col-md-8">
	 				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum quis nibh eu eleifend. Suspendisse potenti. Nullam tempus, magna at gravida mollis, lectus sapien ornare nunc, pulvinar finibus massa lorem in lectus. Mauris porta sed elit et maximus. Donec nec sollicitudin arcu. Nam sit amet rutrum turpis, vel lacinia nibh.
	 			</div>
	 		</div>
			<div style="clear: both; height: 10px;"></div>
	 	</div>
	</div>
	<!--fin Modal detalle del producto-->


	<!--Alerta de Ok-->
	<script>
	  document.querySelector('.MsgOk').onclick = function(){
	    swal("Producto añadido", "Se agrego el producto correctamente.", "success");
	  };
	</script>

	
</div>
<!--fin hacer pedido-->