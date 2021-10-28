<?php

class Numeros

{
	private $numeros;

	public function __construct(){				
	$this->numeros = array();
	}
		
	/*
	Insere numeros em um vetor
	
	Numeros vazia : []
	inserir( 3 ); -> [ 3 ]
	inserir( 1 ); -> [ 3, 1 ]
	inserir( 2 ); -> [ 3, 1, 2 ]
	*/	
	public function inserir( $numero ){	
		array_push($this->numeros, $numero);				
	}				


	/*
		Retorna o maior número da lista
	*/	
	public function maior(){
		
		return max($this->numeros);	
			
	}
	
	/* 
		Retorna a quantidade de numeros armazenados
	*/
	public function quantidade(){
			return count($this->numeros);
	}
	
}


?>