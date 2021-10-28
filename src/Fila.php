<?php

class fila
{	
	private $fila;

	public function __construct(){	
		$this->fila = array();			
	}
	
	/*
	Fila vazia : []
	inserir( 1 ); -> [ 1 ]
	inserir( 2 ); -> [ 1, 2 ]
	inserir( 3 ); -> [ 1, 2, 3 ]
	*/	
	public function inserir( $dado ){
		array_push($this->fila, $dado);				
	}
	
	/*
	Considerando a fila com [ 1, 2, 3 ], após as inserções acima:
	remover() -> [ 2 , 3 ] e retorna 1
	remover() -> [ 3 ] e retorna 2
	remover() -> [  ] e retorna 3
	*/
	public function remover() {
		$primeiroDado = array_shift($this->fila);
		return $primeiroDado;
	}
		
	
	// Retorna a quantidade de itens da fila
	public function total_de_itens(){
		$tamanho = count($this->fila);
		return $tamanho;
	}
	
};


?>
