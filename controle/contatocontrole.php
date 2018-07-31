<?php
include_once '../modelo/contato.class.php';
include_once '../util/validacao.class.php';
include_once '../util/email.class.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];	
$telefone = $_POST['txttelefone'];
$assunto = $_POST['txtAssunto'];

if(!Validacao::testarNome($nome) ||
   !Validacao::testarEmail($email) ||
   !Validacao::testarTelefone($telefone)){
	
	header("location:../visao/erro.php");

}else{
	$c = new Contato($nome,$email,$telefone,$assunto);

	//Montando a mensagem que será enviada por email
	$mensagem = "Nome: $c->nome #### E-mail: $c->email #### Telefone: $c->telefone #### Assunto: $c->assunto  ";
	
	/*Instanciando objeto $e a partir da classe Email. Enviando a mensagem pelo construtor*/
	$e = new Email($mensagem);
	//Chamando o método que enviará o email
	$e->enviarEmail();
	
	header("location:../visao/resposta.php?nome=$c->nome&email=$c->email&telefone=$c->telefone&assunto=$c->assunto");
}//fecha else
?>
