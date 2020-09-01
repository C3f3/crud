<?php
	$host ='localhost';
	$usuario = 'root';
	$clave = 'contraseña';
	$db = 'name_db';

    session_start();

	$conn = mysqli_connect($host,$usuario,$clave,$db);
	
?>