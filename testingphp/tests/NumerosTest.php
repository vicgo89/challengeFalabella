<?php
use PHPUnit\Framework\TestCase;
use App\Numeros\Numeros;
class NumeroTest extends TestCase {
	/**@test**/
	public function comprobar_la_impresion_de_numeros(){
		$numero = new Numeros;
		$string = $numero->imprimir();
		$this->assertEquals(1,$string);
	}
}