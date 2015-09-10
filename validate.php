<?php
	session_start();

	$usuario = $_POST['user'];
	$pw = $_POST['pass'];

	include 'server.php';

	$query = mysql_query("SELECT * FROM USER WHERE User = '$usuario' AND Password = '$pw'");
	$result =  mysql_num_rows( $query );

	if( $result == 1 ){
		$_SESSION['user'] = $usuario;
		header("Location: main.php");		
		exit();
	}elseif( !$result ) {
		session_destroy();
		header("Location: login.php");
		exit();
	}
?>
