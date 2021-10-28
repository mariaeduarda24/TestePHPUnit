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

		if($array->maior()=='100')
		$this->ok++;
		$this->total++;
		

		print_r( $array);
					
	}
	public function TestProduto(){

		$array = new Numeros();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(3);


		
		if($array->produto()=='18')
		$this->ok++;
		$this->total++;
					
	}
	public function TestContar(){

		$array = new Numeros();
		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		$array->inserir(3);


		
		if($array->contar(3)=='2')
		$this->ok++;
		$this->total++;
					
	}
	public function TestRemover(){

		$array = new Numeros();

		$array->inserir(1);
		$array->inserir(2);
		$array->inserir(3);
		

		$num = 2;
		$resposta = $array->remover($num);

		if ( $resposta == "true" ){
			$this->ok ++;						
			$this->total ++;}

			//print_r( $array);
			
	}


	
}

$testsuite = new NumerosTest();

$testsuite->setUp();

// naturalmente, mudem o nome do metodo
$testsuite->TestMaior();
$testsuite->TestProduto();
$testsuite->TestContar();
$testsuite->TestRemover();
$testsuite->summary();

?>