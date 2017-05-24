<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php include("logica-usuario.php");?>
<?php
verificaUsuario();
//Função para inserir produtos no banco

//Pega os valores do formulário que vem na URL ("name")
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
	$usado = "true";
}else{
	$usado = "false";
}


if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){?>
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