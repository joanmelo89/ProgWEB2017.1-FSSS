<?php
include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST['usuario'], $_POST['senha']);

if($usuario == null){
	//criamos uma sessão com parametro para retornar uma mensagem ao usuario e removemos o parametro via URL
	$_SESSION["danger"] = "Usuário ou senha inválido";
	header("Location: index.php");
}else{
	//criamos uma sessão com parametro para retornar uma mensagem ao usuario e removemos o parametro via URL
	$_SESSION["success"] = "Usuário logado com sucesso!";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
die();
}
?>