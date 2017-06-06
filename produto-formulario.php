<?php //Inclusão de arquivos PHP em outro arquivo PHP
include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("logica-usuario.php");

verificaUsuario();
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";

$categorias = listaCategorias($conexao);
?>
	<h1>Formulário de Produtos</h1>
	<!--tag para formulário -->
	<form action="adiciona-produto.php" method="post">
	<!-- tag de tabela -->
		<table class="table">
			<?php
				include("produto-formulario-base.php");
			?>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
				<td><input class="btn btn-danger" type="reset" value="Limpar"></td>
			</tr>
			<!--comentario-->
		</table>
	</form>
<?php include("rodape.php"); ?>	