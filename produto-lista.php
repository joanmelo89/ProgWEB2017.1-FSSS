<?php include("cabecalho.php");?>
<?php include("banco-produto.php");?>
<?php 
//importou o srcipt que conecta que tem os parâmetros de conexão do banco de dados
include("conecta.php");?>
<?php
//criação da função de listagem de produtos


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
<td><a class="text-danger" href="remove-produto.php?id=<?php echo $produto['id'];?>">remover</a></td>
</tr>
<?php
endforeach
?>
</table>
<?php include("rodape.php");?>