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
			<tr><!-- tag de linha -->
				<td>Nome:</td><!-- coluna -->
				<td><input class="form-control" type="text" name="nome" value="<?php echo $produto['nome'];?>"><!-- tag de campo de texto --></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco" value="<?php echo $produto['preco'];?>"></td>
			</tr>
			<tr>
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"><?php echo $produto['descricao'];?></textarea></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
				<select name="categoria_id" class="form-control">
				<?php foreach($categorias as $categoria):
					$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
					$selecao = $essaEhACategoria ? "selected='selected'" : "";
					?>
						<option value="<?php echo $categoria['id'] ?>" <?php echo $selecao;?>>
							<?php echo $categoria['nome'];?>
						</option>
					
				<?php endforeach?>
				</select>

				</td>
			</tr>
			<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true" <?php echo $usado;?>> Usado</td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
				
			</tr>
			<!--comentario-->
		</table>
	</form>
<?php include("rodape.php"); ?>	