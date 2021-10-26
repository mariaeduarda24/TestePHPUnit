<?php

class Numeros
{
	public function __construct(){				
	}
	
	/*
	Insere numeros em um vetor
	
	Numeros vazia : []
	inserir( 3 ); -> [ 3 ]
	inserir( 1 ); -> [ 3, 1 ]
	inserir( 2 ); -> [ 3, 1, 2 ]
	*/	
	public function inserir( $numero ){				
	}
	
	/*
	Procura e número solicitado no vetor e o remove do vetor se o achar	
	
	Retorna:
	- true se encontrou e removeu com sucesso
	- false se não encontro o número
	*/
	public function remover( $numero ) {
				
		return ;
	}
	
	/*
		Retorna o menor número da lista
	*/
	public function menor(){
		
		return $menor;		
	}
	
	/*
		Retorna o maior número da lista
	*/	
	public function maior(){
		
		return $maior;	
	}
	
	/*
		Conta quantas vezes um número apareceu na lista
	*/	
	public function contar( $numero ){
		
		return $quantidade_encontrada;	
	}
		
	/* 
		Retorna a soma dos numeros armazenados na lista
	*/
	public function soma(){
		return $soma;		
	}
	
	/*
		Retorna o produto dos numeros armazenados na lista
	
	*/	
	public function produto(){
		return $produto;
	}
		
	/* 
		Retorna a quantidade de numeros armazenados
	*/
	public function quantidade(){
		
	}
	
}


?>
