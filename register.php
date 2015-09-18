<?php
	session_start();

 	$correo = $_POST['email'];
 	$contrasena = $_POST["pass"];
 	$contrasena2 = $_POST["pass2"];
 	$usuario = $_POST["user"];
 	$name = $_POST['name'];
	$lastname = $_POST['lastName'];
	$error = False;

 	if( $contrasena2 != $contrasena ){
 		$error = True;
 		echo '<script type="text/javascript"> alert("las contraseña no coinciden, vuelva a intentarlo.");</script>';
 	}

	include 'server.php';

 	$result = mysql_query("SELECT * FROM USER WHERE User = '$usuario'");
	$num = mysql_num_rows( $result );

 	if( $num == 1 ){
 		$error = True;
 		echo '<script type="text/javascript"> alert("El usuario que usted eligio ya esta siendo ocupado, elija otro por favor.");</script>';
 	}

	$result = mysql_query("SELECT * FROM USER WHERE Email = '$correo'");
	$num = mysql_num_rows( $result );

 	if( $num == 1 ){
 		$error = True;
 		echo '<script type="text/javascript"> alert("No se puede tener 2 usuarios con un mismo correo electronico increse otro por favor.");</script>';
 	}

 	if( !$error ){
 		$result = mysql_query("INSERT INTO USER ( Email, User, Password, Name, lastName )  VALUES ( '$correo', '$usuario', '$contrasena', '$name', '$lastname' )");
		$num = mysql_affected_rows();
		
		if( $num == 1 ){
			$_SESSION['user'] = $usuario;
			header("Location: main.php");
			exit(); 
		}
 	}elseif ( $error ) {
		session_destroy();
		header("Location: form.php");
	}
/*

 	header("Location: register.php?$var_Error");*/
?>