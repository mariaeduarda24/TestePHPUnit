<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FilaTest extends TestCase
{
	
	public function testInserirValores(): void {
		
		$array = new Fila();
		
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		
		$this->assertEquals($array->total_de_itens(),4);
							
	}

	
	
	public function testRemoverItens(): void {

		$array = new Fila();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		$array->inserir(5);

		$this->assertEquals($array->remover(),1);
		
	}


	
}

?>