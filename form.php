<?php
	session_start();
	include "server.php";
	if( isset( $_SESSION["user"] ) ){
		header("Location: main.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registrarse</title>
		<!--<style type="text/css">
			.errorUsuario, .errorPass, .errorCorreo {
				background: orange;
				border: solid 2px red;
			}
			 .msg { color: green; } 
		</style>-->
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="http://4.bp.blogspot.com/_ymlILn01FV4/TJtgk8wfKmI/AAAAAAAAABg/75GYDggDUHw/s1600/H.jpg">
	</head>
	<body>
		<h3>Crear Nuevo Usuario</h3>
		<form method="post" action="register.php" >
			<br><br>
			<label>Nombre(s): </label>
			<input type="text" maxlength="30" placeholder="Jose, Pedro, Gonsalo" name="name" autocomplete="off" required/><br><br>
			<label>Apellido(s): </label>
			<input type="text" maxlength="30" placeholder="Huguez, lopez Fimbres, Olmos Morales" name="lastName" autocomplete="off" required/><br><br>
			
			<!--<div class = "<?php echo $GLOBALS['errorCorreo']; ?>" > -->
			<div clas="">
				<label>Correo electronico:  </label>
				<input type="text" maxlength="30" placeholder="persona@email.com" name="email" autocomplete="off" required/>
				<!-- <span class = "msg"> <?php echo $GLOBALS['msgCorreo']; ?> </span> -->
				<br><br>
			</div>

			<!--<div class = "<?php echo $GLOBALS['errorUsuario']; ?>">-->
			<div class = "">
				<label>Usuario: </label>
				<input type="text" maxlength="30" placeholder="individuo15_h" name="user" autocomplete="off" required/>
				<!-- <span class="msg"><?php echo $GLOBALS['errorUsuario']; ?></span>-->
				<br><br>
			</div>
			
			 <!--<div class="<?php echo $GLOBALS['errorPass']; ?>"> -->
			 <div class="">
				<label>Contraseña: </label>
				<input type="password" maxlength="20" placeholder="Contraseña" name="pass" autocomplete="off" required /><br><br>
				<label>Confirmar Contraseña: </label>
				<input type="password" maxlength="20" placeholder="Contraseña otra vez" name="pass2" autocomplete="off" required />
				<!-- <span class="msg"><?php echo $GLOBALS['errorPass']; ?></span>-->
				<br><br>
			</div>
			
			<button type="subimit" class="btn" name="register" value="Registrarse">Registrarse</button>

		</form>
	</body>
</html>