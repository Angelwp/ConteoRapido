<?php
	session_start();
	include "server.php";
	if( !isset( $_SESSION["user"] ) ){
		session_destroy();
		header("Location: login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>main</title>
	</head>
	<body>
		<p>Hello world!!!</p><br><br>
		<?php
			if( isset( $_SESSION["user"] ) ){
				echo "<a href='logout.php'><button>Salir</button></a>";
			}
		?>
	</body>
</html>
