<?php 
//cria sessão
session_start();
//verifica se existe o cookie
function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}
//verifica se usuario está logado ou não
function verificaUsuario(){

if(!usuarioEstaLogado()){
	header("Location: index.php?falhaDeSeguranca=true");
	die();
	}
}
//mostra o usuario que está logado
function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}
//cria o cookie após o login do usuario
function logaUsuario($email){
	$_SESSION["usuario_logado"]= $email;
}

function logout(){
	session_destroy();
}

?>