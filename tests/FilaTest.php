<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FilaTest extends TestCase
{
	
	private $total;
	private $ok;
	
	public function setUp(){
		
		$this->total = 0;
		$this->ok = 0;

	}
	


	public function TestInserirItemAleatorio(){
		
		$array = new Fila();
		$array->inserir(1);
		$array->inserir(2);
		

	 
		if ( $array->total_de_itens() == "2" ){
			$this->ok ++;	
			}						
			$this->total ++;


			
							
	}

	
	
	public function TestRemoverItens(){

		$array = new Fila();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(4);
		$array->inserir(5);

		$itemRemovido = $array->remover();


		if ( $itemRemovido == "1" ){
			$this->ok ++;	
			}						
			$this->total ++;

			
	}



    public function TestTopo(){
		
		$array = new Fila();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);

		$itemDoTopo = $array->topo();

		 if ( $itemDoTopo == "1" ){
			$this->ok ++;	
			}						
			$this->total ++;
		
		print_r( $array );

	}
	
}

?>