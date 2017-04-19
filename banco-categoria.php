<?php
//função que lista categorias
function listaCategorias($conexao){
	$categorias = array();
	$resultado = mysqli_query($conexao, "select * from categorias");
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}
	return $categorias;
}

?>