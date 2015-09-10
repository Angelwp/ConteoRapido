<?php
	session_start();

	include 'server.php';
	
	$email = $_POST['email'];
	$user = $_POST['user']; 
	$password = $_POST['password'];
	$name = $_POST['name'];
	$lastname = $_POST['lastName'];

	$email

	$result = mysql_query("INSERT INTO USER ( Email, User, Password, Name, lastName )  VALUES ( '$email', '$user', '$password', '$name', '$lastname' )");
	$num = mysql_affected_rows();
	
	if( $num == 1 ){
		$_SESSION['user'] = $user;
		header("Location: main.php");
		exit(); 
	}elseif ( !$num ) {
		session_destroy();
		header("Location: register.php");
		echo "alert('no se pudo registrar al usuario')";
	}

?>