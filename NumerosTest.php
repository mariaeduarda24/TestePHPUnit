<?php 

require_once("Numeros.php");

class NumerosTest{
	
	private $total;
	private $ok;
	
	public function setUp(){
		
		$this->total = 0;
		$this->ok = 0;

	}
	
	public function summary(){
		
		echo "<br/>Summary: " . $this->ok . "/" . $this->total . " tests passed";
						
	}
	

	public function TestOque(){
						
		/* 
		if ( $maiorMenor->getMaior()->getNome() == "Geladeira" ){
			$this->ok ++;								
		} else {
			
		}
		$this->total ++;
		*/
							
	}
	
}

$testsuite = new NumerosTest();

$testsuite->setUp();

// naturalmente, mudem o nome do metodo
$testsuite->TestOque();

$testsuite->summary();

?>