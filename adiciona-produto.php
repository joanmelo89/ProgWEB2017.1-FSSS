<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
//pega os dados
?>

<?php include("cabecalho.php"); ?>
<p class="alert-success">Produto <?php echo $nome ?>, <?php echo $preco ?> 
adicionado com sucesso!</p>
<?php include("rodape.php"); ?>	