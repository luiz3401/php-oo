<?php

require_once "Carro.php";
require_once "Carro14.php";
require_once "Carro10.php";
require_once "Carro14Turbo.php";


$carro1 = new Carro14("preto");
$carro2 = new Carro10();
$carro3 = new Carro14turbo();




$carro1->ligaDesliga();

$carro1->acelerar(60);
var_dump($carro1);
$carro2->acelerar(70);
var_dump($carro2);
$carro3->acelerar(90);
var_dump($carro3);



echo Carro::MODELO. "\n\n";

$carro1->informarVersao();
$carro2->informarVersao();
$carro3->informarVersao();




?>
