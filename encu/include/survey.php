s<?php

include_once 'dbd.php';
class Survey extends DBD{
private $totalvotos;
private $opcionSelected;

public function setOptionSelected($option){

	$this->opcionSelected= $option;
}

public function getOptionSelected(){

	return $this->opcionSelected;
}


public function vote(){

$query = $this->connect()->prepare('UPDATE politicos SET votos = votos + 1 WHERE opcion = :opcion');
$query->execute(['opcion' => $this->opcionSelected]);
}

public function showResults(){

	return $this->connect()->query('SELECT * FROM politicos');

}

public function getTotalVotes(){
$query =$this->connect()->query('SELECT SUM(votos) AS Votos_Totales  FROM politicos');
$this->totalvotos=$query->fetch(PDO::FETCH_OBJ)->Votos_Totales;
return $this->totalvotos;

}

public function getPorcentajeVotos($votes){

	return round(($votes/$this->totalvotos)*100,0);
}

}

?>