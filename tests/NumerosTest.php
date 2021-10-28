<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NumerosTest extends TestCase
{
    public function testInserirNumero()
    {
        $array = new Numeros();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);

		$this->assertEquals($array->quantidade(), 4);

    }

	public function TestMaior(){

		$array = new Numeros();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		$array->inserir(7);
		$array->inserir(10);
		$array->inserir(23);
		$array->inserir(100);

		$this->assertEquals($array->maior(), 100);
		
					
	}
}



?>