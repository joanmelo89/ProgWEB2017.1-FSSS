<?php
include("conecta.php");
include("banco-usuario.php");


$usuario = buscaUsuario($conexao, $_POST['usuario'], $_POST['senha']);

?>