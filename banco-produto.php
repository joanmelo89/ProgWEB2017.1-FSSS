<?php
//função que lista produtos
function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}
//função que insere produtos
function insereProduto($conexao, $nome, $preco){
	$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
	return mysqli_query($conexao, $query);
	
}
//função que deleta produtos
function removeProduto($conexao, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}





?>