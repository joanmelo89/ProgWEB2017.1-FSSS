<?php 
//Inclusão de arquivos PHP em outro arquivo PHP
include("cabecalho.php"); 
?>
		<h1>Bem-vindo</h1>
		<h2>Login</h2>
		
		<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Usuário</td>
				<td><input class="form-control" type="text" name="usuario"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
		</form>

<?php include("rodape.php"); ?>	