<?php
class Email{
	
	private $to;
	private $assunto2;
	private $mensagem;

	public function __construct($mensagem){
		$this->to="vbkmma@gmail.com";
		$this->assunto2="contato via site";
		$this->mensagem=$mensagem;
	}

	/* Método que envia o email através da função mail() */
	public function enviarEmail(){
		mail($this->to,$this->assunto2,$this->mensagem);	
	}//fecha método enviarEmail	

}//fecha class Email
?>
