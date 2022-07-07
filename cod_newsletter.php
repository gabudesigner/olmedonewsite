<?php
require $_SERVER['DOCUMENT_ROOT'].'/oa_fx/mysql_conect.php'; //conectamos a la base de datos
/** 
https://paiza.io/projects/SejSD1qn0yrQ9gCeHcO0CQ
web para probar comandos php
**/

//determinamos zona horaria -- http://php.net/manual/es/timezones.php
//echo date("Y-m-d H:i:s"); //mostramos tiempo tal cual+hora según zona horaria.

$hotline = date("d.m.Y - H:i"); //solo numeros día mes y año

/*****Fin de Array ****/

	$name = $_POST['nombre'];  	$mail = $_POST['correo'];  		
	$dat_mmail = $_POST['correo'];
	/*
ENVIAMOS DATOS RECOPILADOS A LA BASE DATOS
- CONECTAMOS CON REQUIRE A LA BASE DATOS INCLUYEM CONFIGURACIÓN UTF8
- ENVIAMOS DATOS A BASE DE DATOS
*/
	
	$query = "INSERT INTO newsletters (date,usuario,correo) VALUES('$hotline','$name','$mail')";
	mysqli_query($cnxstar, $query) or die(mysqli_error());
?>
