<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

?>

<?php include("cabecalho.php"); ?>
<p class="alert-success">Produto <?php echo $nome ?>, <?php echo $preco ?> 
adicionado com sucesso!</p>
<?php include("rodape.php"); ?>	