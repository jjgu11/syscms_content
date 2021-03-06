
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="views/images/icono.jpg">

	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/fonts.css">
	<link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">

	<script src="views/js/jquery-2.2.0.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.fancybox.js"></script>
	<script src="views/js/animatescroll.js"></script>
	<script src="views/js/jquery.scrollUp.js"></script>

</head>

<body>

	<div class="container-fluid">

		<!--=====================================
		CABEZOTE
		======================================-->
		
		<?php include_once("modules/cabezera.php"); ?>
		
		<!--====  Fin de CABEZOTE  ====-->


		<!--=====================================
		SLIDE
		======================================-->
		<?php include_once("modules/slider.php") ?>

		<!--====  Fin de SLIDE  ====-->



		<!--=====================================
		TOP
		======================================-->
		<?php include_once("modules/topseccion.php") ?>


		<!--====  Fin de TOP  ====-->


		<!--=====================================
		GALERIA
		======================================-->
		<?php include_once("modules/galeria.php") ?>

		<!--====  Fin de GALERIA  ====-->


		<!--=====================================
		ARTÍCULOS
		======================================-->

		<?php include_once("modules/articulos.php") ?>

		<!--====  Fin de ARTÍCULOS  ====-->


		<!--=====================================
		VIDEOS
		======================================-->
		<?php include_once("modules/videos.php") ?>
	


		<!--====  Fin de VIDEOS  ====-->

		<!--=====================================
			CONTÁCTENOS         
		======================================-->

		<?php include_once("modules/contactenos.php") ?>

		<!--====  Fin de CONTÁCTENOS ====-->



		<!--=====================================
			ARTÍCULO MODAL         
		======================================-->
		<?php include_once("modules/articuloModal.php") ?>

    	<!--====  Fin de ARTICULO MODAL ====-->
		
	</div>




<script src="views/js/script.js"></script>

</body>
</html>


