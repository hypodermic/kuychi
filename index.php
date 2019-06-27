<?php include 'includes/header.php';?>
	
	<!--><div id="content"></-->
	
		
		<?php 
		if(isset($_GET['inicio'])){
			include 'includes/inicio.php';
		} else if(isset($_GET['noticias'])){
			include 'includes/noticias.php';
		} else if(isset($_GET['contacto'])){
			include 'includes/contacto.php';
		} else {
			include 'includes/productos.php';
		}
		?>
	<!--></div></-->
<?php include 'includes/footer.php';?>	