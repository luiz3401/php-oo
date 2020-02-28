<?php

class Carro
{

	const MODELO = "MOBI";	

	private $cor;
	protected $potencia = 1.0;
	private $ligado = false;
	private $velocidade = 0;

	public function __construct($cor = "branco")
	{
		$this->cor = $cor;
	}

	public function acelerar($quantidade)
	{
		$this->velocidade = $quantidade * $this->potencia;
	}

	public function freiar()	
	{
		$this->velocidade = 0;
	}

	public function ligaDesliga()
	{
		$this->ligado = !$this->ligado;	
	}
}
?>
