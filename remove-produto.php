<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php include("logica-usuario.php");?>
<?php
//pega a id
$id = $_POST['id'];
//chama a função de delete de produtos
removeProduto($conexao, $id);
//criamos uma sessão com parametro para retornar uma mensagem ao usuario
$_SESSION["success"] = "Produto removido com sucesso!";
header("Location: produto-lista.php");
die();
?>





<?php include("rodape.php");?>