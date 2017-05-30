<?php 
//Inclusão de arquivos PHP em outro arquivo PHP
include("cabecalho.php"); 
include("logica-usuario.php");
?>
<?php if(isset($_GET["logout"]) && $_GET["logout"] == true) {?>
	<p class="alert-success">Deslogado com sucesso!</p>
	<?php }?>
<?php if(isset($_GET["login"]) && $_GET["login"] == true) {?>
	<p class="alert-success">Logado com sucesso!</p>
	<?php }?>
<?php if(isset($_GET["login"]) && $_GET["login"] == 0) {?>
	<p class="alert-danger">Usuário e senha inválidos!</p>
	<?php }?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true) {?>
	<p class="alert-danger">Você não tem acesso a essa funcionalidade porque você não está logado!</p>
	<?php }?>

		<h1>Bem-vindo</h1>
		<?php if(usuarioEstaLogado()) {?>
				<p class="alert-success">Você está logado como <?php echo usuarioLogado();?>. <a class="btn btn-danger" href="logout.php">Deslogar</a></p>
				<?php }else{?>
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
		<?php }?>
<?php include("rodape.php"); ?>	