<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php

//Função para inserir produtos no banco

//Pega os valores do formulário que vem na URL ("name")
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];



if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){?>
	<p class="text-success">Produto <?php echo $nome;?> , <?php echo $preco;?> adicionado com sucesso!</p>
	
<?php } else{ 
//Mensagem de error do SQL
$msg = mysqli_error($conexao);
?>
<p class="text-danger">O produto <?php $nome ?> não foi adicionado: <?php echo $msg;?></p>
<?php	
}

?>
<?php include("rodape.php");?>