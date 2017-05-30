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
	//criamos um parametro via sessão para não passar parametro para a URL
	$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade";
	header("Location: index.php");
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
	//iniciamos novamente a sessão para poder retornar uma mensagem ao usuario via parametro de sessão
	session_start();
}

?>