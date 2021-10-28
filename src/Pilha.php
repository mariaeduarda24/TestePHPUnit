<?php

class Pilha
{
	private $pilha;

	public function __construct(){				
		
			 $this->pilha = array();
	}
	/*
	Pilha vazia : []
	inserir( 1 ); -> [ 1 ]
	inserir( 2 ); -> [ 1, 2 ]
	inserir( 3 ); -> [ 1, 2, 3 ]
	*/
	public function inserir( $dado ){				
	
		array_push($this->pilha, $dado);
	}
	/*
	remover() -> [ 1, 2] e retorna 3
	remover() -> [ 1 ] e retorna 2
	remover() -> [  ] e retorna 1
	*/
	public function remover() {
				
		$removido = array_pop($this->pilha);
		return $removido;
		
		
	}	
	// Funciona como o remover() mas não remove o ultimo dado
	public function topo(){
		
		$ultimoDado = end($this->pilha);	
		return $ultimoDado;
	}
	
	public function total_de_itens(){
		
		$tamanho = count($this->pilha);
		return $tamanho;
	}


	
}

	
?>
