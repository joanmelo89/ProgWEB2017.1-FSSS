<?php
include("logica-usuario.php");
logout();
//criamos uma sessão com parametro para retornar uma mensagem ao usuario e removemos o parametro via URL
$_SESSION["success"] = "Usuário deslogado com sucesso!";
header("Location: index.php");
die();


?>