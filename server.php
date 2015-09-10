<?php
	$connect = @mysql_connect("localhost","root","mark 3") or die("No se encontro el servidor por ". mysql_error() );
	$db = @mysql_select_db( "CR", $connect ) or die("Error " . mysql_error() );
?>