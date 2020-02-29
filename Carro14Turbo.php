<?php

class Carro14Turbo extends Carro14
{
	const MODELO = "MOBI Turbo";

	//sobreescrita
	public function acelerar($quantidade)
	{
		$this->velocidade = $quantidade * $this->potencia * 1.2;
	}
}
?>
