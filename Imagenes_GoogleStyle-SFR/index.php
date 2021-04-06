<!DOCTYPE html>
<html>
<head>
	<title>Galeria Google Imagenes</title>
	<?php require_once "dependencias.php"; ?>
	<?php 
		require_once "contenido.php";
		$datos=contenido();
	?>
</head>
<body style="background-color: gray;">
	<div class="container">
		<h1>Presentacion de Campeones</h1>
		<h2>ADCarrys de League of Legends</h2>
		<!--
		<ul class="gridder">
			<li class="gridder-list" data-griddercontent="#gridder-content-0">
				<img src="img/Aphelios.jpg">
			</li>
		</ul>
		<div id="gridder-content-0" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="img/Aphelios.jpg" class="img-responsive"/>
				</div>
				<div class="col-sm-6">
					<h2>Aphelios</h2>
					<p>Aphelios emerge de la sombra de la luz de la luna con sus armas listas y mata a los enemigos de su fe en un silencio melancólico. 
					Habla únicamente a través de la certeza de su puntería y del disparo de cada arma. Si bien su impulso proviene de un veneno que 
					lo enmudece, es guiado por su hermana Alune. Desde un santuario lejano, le envía un arsenal de armas de piedra lunar a sus manos. 
					Mientras la luna resplandezca en lo alto, Aphelios nunca estará solo.</p>
				</div>
			</div>
		</div>
		-->
		<ul class="gridder">
			<?php 
				for($i=0; $i < count($datos); $i++):
				$d=explode("||", $datos[$i]);
			?>
			<li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
				<img src="<?php echo $d[0] ?>">
			</li>
			<?php
				endfor;
			?>
		</ul>
		<?php
			for($i=0; $i < count($datos); $i++):
			$d=explode("||", $datos[$i]);
		?>
		<div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo $d[0] ?>" class="img-responsive"/>
				</div>
				<div class="col-sm-6">
					<h2><?php echo $d[1]; ?></h2>
					<p><?php echo $d[2]; ?></p>
				</div>
			</div>
		</div>
		<?php
			endfor;
		?>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$(".gridder").gridderExpander({
			scroll: true,
			scrollOffset: 60,
            scrollTo: "listitem", // panel or listitem
            animationSpeed: 100,
            animationEasing: "easeInOutExpo",
            showNav: true,
            nextText: "<i class=\"fa fa-arrow-right\"></i>",
            prevText: "<i class=\"fa fa-arrow-left\"></i>",
            closeText: "<i class=\"fa fa-times\"></i>",
            onStart: function () {
            	console.log("Gridder Inititialized");
            },
            onContent: function () {
                console.log("Gridder Content Loaded");
                $(".carousel").carousel();
            },
            onClosed: function () {
                console.log("Gridder Closed");
            }
        });
	});
</script>