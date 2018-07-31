<?php
class Contato{
	
	private $nome;
	private $email;
	private $telefone;
	private $assunto;

	public function __construct($nome,$email,$telefone,$assunto){
		$this->nome = $nome;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->assunto = $assunto;
	}
	
	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo=$valor;
	}//fecha método
}//fecha classe
?>