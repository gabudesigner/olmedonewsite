<?php

//DATOS DE CONECTIVIDAD
$userbase="olmedoal_useradminoaca"; //USUARIO CON PRIVILEGIOS ADMINISTRATIVOS MYSQL
$pass_user="admin3590/go.kooz"; 		//CONTRASEÑA DEL USUARIO
$database="olmedoal_databaseoaca";	//BASE DE DATOS A CUAL NOS CONECTAREMOS

//CONEXIÓN A DATABASE
$cnxstar = mysqli_connect('localhost', $userbase, $pass_user, $database) or die ("¡Algo ha salido mal! Fracaso la seleccion de la  base de datos ".mysqli_connect_error());

//insertamos código para pasar info con caracteres especiales UTF-8 
//mysqli_query("SET NAMES 'utf8'");
mysqli_set_charset($cnxstar, 'utf8');

date_default_timezone_set("America/Guayaquil"); 
//determinamos zona horaria -- http://php.net/manual/es/timezones.php
//echo date("Y-m-d H:i:s"); //mostramos tiempo tal cual+hora según zona horaria.
?>