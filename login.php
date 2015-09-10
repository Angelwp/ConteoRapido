<?php
	session_start();
	include "server.php";
	if( isset( $_SESSION["user"] ) ){
		header("Location: main.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Inicio Sescion</title>
		<meta charset="UTF-8">
		<style type="text/css">
			button > a:hover, button > a{
				text-decoration: none;
				color: black;
			}
		</style>
	</head>
	<body>
		<form method="POST" action="validate.php">
			<br><br>
			<div class="<?php  echo $msg; ?>"></div>
			<input type="text" maxlength="30" placeholder="Ingrese su Usuario" name="user" autocomplete="off" required /><br><br>

			<input type="password" maxlength="30" placeholder="Ingrese su Contraseña" name="pass" autocomplete="off" required /><br><br>

			<input type="submit" class="btn btn-success" name="login" value="Acceder">

			<button name="register"> <a href="form.php">Registrarse</a> </button>

		</form>
	</body>
</html>
