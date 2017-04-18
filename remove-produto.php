<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php
//pega a id
$id = $_POST['id'];
//chama a função de delete de produtos
removeProduto($conexao, $id);

header("Location: produto-lista.php");
die();
?>





<?php include("rodape.php");?>