<?php

require_once "Carro.php";
require_once "Carro14.php";

$carro1 = new Carro14("preto");
$carro2 = new Carro();



$carro1->ligaDesliga();

$carro1->acelerar(60);
var_dump($carro1);
$carro2->acelerar(70);
var_dump($carro2);

echo Carro::MODELO. "\n\n";


?>
