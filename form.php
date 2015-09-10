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
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="http://4.bp.blogspot.com/_ymlILn01FV4/TJtgk8wfKmI/AAAAAAAAABg/75GYDggDUHw/s1600/H.jpg">
	</head>
	<body>
		<form method="post" action="register.php">
			<br><br>
			<input type="text" maxlength="30" placeholder="Emal..." name="email" autocomplete="off" required/><br><br>
			
			<input type="text" maxlength="30" placeholder="Username..." name="user" autocomplete="off" required/><br><br>

			<input type="password" maxlength="20" placeholder="Password..." name="pass" autocomplete="off" required /><br><br>
			
			<input type="password" maxlength="20" placeholder="Password Again..." name="pass" autocomplete="off" required /><br><br>
			
			<input type="text" maxlength="30" placeholder="Name..." name="name" autocomplete="off" required/><br><br>

			<input type="text" maxlength="30" placeholder="LastName..." name="lastname" autocomplete="off" required/><br><br>

			<button type="subimit" class="btn btn-success" name="register" value="Registrarse">Subir</button>
		</form>
	</body>
</html>