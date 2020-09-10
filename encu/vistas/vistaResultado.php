<div class="opcion">
			<?php

		$widthBar= $porcentaje *5;
		$estilo="barra";

		if ($survey-> getOptionSelected()==$politico['opcion']) $estilo="seleccionado";
		

		echo $politico['opcion'];

		?>
		<div> <?php  echo $politico['votos'];?> Votos que Equivalens a un </div>
		<div class="<?php echo $estilo;?>" style="width: <?php echo $widthBar . 'px;'?>" ><?php  echo $porcentaje . '%'?></div>

</div>