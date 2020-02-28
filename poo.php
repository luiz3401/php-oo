<?php

// encapsulamento
class Caneta
{
	//propriedades -> atributos -> adjetivos
	public $cor;
	private $tintaVazia = false;

	//construtor -> executado ao instaciar
	public function __construct ($cor = "amarelo")
	{
		$this->cor = $cor; 
	}

	//função - metodos -> verbos
	public function escrever($palavra)
	{
	echo "Você escreveu: ".$palavra."\n\n";
	$this->tintaVazia = true;
	}
}

//criar Instancia
$obj1 = new Caneta("branco");
$obj2 = new Caneta("roxo");

$obj1->cor = "preto";

$obj1->escrever("hello");

//passado como referencia
$obj3 = $obj1;

// clonando objeto
$obj4 = clone $obj1;
$obj3->cor = "vermelho";

var_dump($obj1);
var_dump($obj2);
var_dump($obj3);
var_dump($obj4);

echo "\n";

if($obj1 === $obj4)
{
	echo "verdade";

} else {

	echo "falso";
}

echo "\n\n";


?>

