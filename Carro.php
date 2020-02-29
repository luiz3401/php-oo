<?php

 abstract class Carro
{

	const MODELO = "MOBI";	

	private $cor;
	static protected $potencia = 1.0;
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

	static public function informarVersao()
	{
		//self -> this
		//self -> apenas na mesma classe
		//static -> pega a herança		
		echo static::MODELO ." ". static::$potencia. "\n";	
	}
}
?>
