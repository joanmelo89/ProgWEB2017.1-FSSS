<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php

//Função para inserir produtos no banco
function insereProduto($conexao, $nome, $preco){
	$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
	return mysqli_query($conexao, $query);
	
}
//Pega os valores do formulário que vem na URL ("name")
$nome = $_GET["nome"];
$preco = $_GET["preco"];



if(insereProduto($conexao, $nome, $preco)){?>
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