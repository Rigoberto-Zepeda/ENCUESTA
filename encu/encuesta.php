<?php 
include_once 'include/survey.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--<meta  http-equiv="refresh" content="10">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="maine.css">
	<title>Encuesta</title>
</head>
<body>	<form action="" method="POST">
		<section>
	<h4>Bienvenido <?php echo $user->getNombre();?></h4>

</section>
		
	

		<?php
					$survey= new Survey();
	$showResults=false; 
		
			# code...
		
			if (isset($_POST['politico'])) {
				$showResults=true;
			$survey->setOptionSelected($_POST['politico']);
			$survey->vote();
			}

if ($showResults) {
$politicos=$survey->showResults();
echo '<h6>' . $survey->getTotalVotes().' '. 'Votos Totales<h6>';

foreach ($politicos as $politico) {
		$porcentaje = $survey->getPorcentajeVotos($politico['votos']);
		include 'vistas/vistaResultado.php';
}



}else{
include 'vistas/vistaVotacion.php';

}

?>
	
		
		<div>
		<div id="menu">
			<ul>
					<li><a href="index.php">Proximo Votante	</a></li>
					<li class="cerrar-sesion" >
						<a href="include/logoat.php">Cerrar Session</a>
					</li>
</ul>
		</div>

	</div>	
	</form>



</body>
</html>