<?php 
//Inclusão de arquivos PHP em outro arquivo PHP
include("cabecalho.php"); 
include("logica-usuario.php");
?>

<?php 
//verificamos se a sessão com parametro success existe e retornamos uma mensagem ao usuario
if(isset($_SESSION["success"])) {?>
	<p class="alert-success"><?php echo $_SESSION["success"];?></p>
	<?php 
		unset($_SESSION["success"]);
	}?>


<?php 
//verificamos se a sessão com parametro danger existe e retornamos uma mensagem ao usuario
if(isset($_SESSION["danger"])) {?>
	<p class="alert-danger"><?php echo $_SESSION["danger"];?></p>
	<?php 
		unset($_SESSION["danger"]);
	}?>

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