<?php include("cabecalho.php");?>
<?php 
//importou o srcipt que conecta que tem os parâmetros de conexão do banco de dados
include("conecta.php");?>
<?php
//criação da função de listagem de produtos
function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

$produtos = listaProdutos($conexao);
?>
<table class="table table-striped table-bordered">
<?php
//criação do FOR melhorado (foreach) par fazer impressão dos dados do banco
foreach($produtos as $produto):
?>
<tr>
<td><?php echo $produto['nome'];?></td>
<td><?php echo "R$ ".$produto['preco'];?></td>
</tr>
<?php
endforeach
?>
</table>
<?php include("rodape.php");?>