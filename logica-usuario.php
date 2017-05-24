<?php 
//verifica se existe o cookie
function usuarioEstaLogado(){
	return isset($_COOKIE["usuario_logado"]);
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
	return $_COOKIE["usuario_logado"];
}
//cria o cookie após o login do usuario
function logaUsuario($email){
	setcookie("usuario_logado", $email, time() + 60);
}

?>