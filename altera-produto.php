<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php

//Função para inserir produtos no banco

//Pega os valores do formulário que vem na URL ("name")
$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
	$usado = "true";
}else{
	$usado = "false";
}


if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){?>
	<p class="text-success">Produto <?php echo $nome;?> , <?php echo $preco;?> alterado com sucesso!</p>
	
<?php } else{ 
//Mensagem de error do SQL
$msg = mysqli_error($conexao);
?>
<p class="text-danger">O produto <?php $nome ?> não foi alterado: <?php echo $msg;?></p>
<?php	
}

?>
<?php include("rodape.php");?>