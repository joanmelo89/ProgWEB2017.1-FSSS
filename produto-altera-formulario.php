<?php //Inclusão de arquivos PHP em outro arquivo PHP
include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
$id = $_GET['id'];
$categorias = listaCategorias($conexao);
$produto = buscaProduto($conexao, $id);
$usado = $produto['usado'] ? "checked = 'checked'" : "";

?>
	<h1>Alterando Produtos</h1>
	<!--tag para formulário -->
	<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?php echo $produto['id'];?>">
	<!-- tag de tabela -->
		<table class="table">
			<?php
				include("produto-formulario-base.php");
			?>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
				
			</tr>
			<!--comentario-->
		</table>
	</form>
<?php include("rodape.php"); ?>	