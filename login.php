<?php
include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST['usuario'], $_POST['senha']);

if($usuario == null){
	header("Location: index.php?login=0");
}else{
	logaUsuario($usuario["email"]);
	header("Location: index.php?login=1");
}
die();

?>