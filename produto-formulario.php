<?php //Inclusão de arquivos PHP em outro arquivo PHP
include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario();

$categorias = listaCategorias($conexao);
?>
	<h1>Formulário de Produtos</h1>
	<!--tag para formulário -->
	<form action="adiciona-produto.php" method="post">
	<!-- tag de tabela -->
		<table class="table">
			<tr><!-- tag de linha -->
				<td>Nome:</td><!-- coluna -->
				<td><input class="form-control" type="text" name="nome"><!-- tag de campo de texto --></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco"></td>
			</tr>
			<tr>
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
				<select name="categoria_id" class="form-control">
				<?php foreach($categorias as $categoria):?>
					
						<option value="<?php echo $categoria['id'] ?>">
							<?php echo $categoria['nome'];?>
						</option>
					
				<?php endforeach?>
				</select>

				</td>
			</tr>
			<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true"> Usado</td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
				<td><input class="btn btn-danger" type="reset" value="Limpar"></td>
			</tr>
			<!--comentario-->
		</table>
	</form>
<?php include("rodape.php"); ?>	