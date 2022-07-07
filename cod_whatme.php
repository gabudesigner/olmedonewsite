<?php

//https://api.whatsapp.com/send?phone=593988881346&text=Enlace%3A%0Ahttps%3A%2F%2Ffb.me%2F4lDlcKUol%0A%0AVi+esto+en+Facebook...&fbclid=IwAR1pdy2IebSaIFmdkt80nzmoQ6HLZ1H-lZSvlhHvhbL8nvQa4C1TPN1Pnuo

//link a estudiar


/*
CODIGO CREADO POR GABUDESIGNER
FINALIDAD DE CREAR LINK DE WHATSAPP CON DATOS
CAPTURADOS POR FORMULARIO ONLINE
*/


require $_SERVER['DOCUMENT_ROOT'].'/oa_fx/mysql_conect.php'; 
$hotline = date("d.m.Y - H:i"); //solo numeros día mes y año

	$name = $_POST['nombre'];  	
	$ciudad = $_POST['ciudad'];  	
	$coment = $_POST['mensaje'];
	
	
		$query = "INSERT INTO data_advsocial (date,usuario,ciudad,consulta,publicidad) VALUES('$hotline','$name','$ciudad','$coment','Campaña website WhatsApp')";
				mysqli_query($cnxstar, $query) or die(mysqli_error());
				
/* 
CODIFICACIÓN HTML PARA URL SIN FALLAS

%3A -- :
%20 -- (ESPACIO)
%0A -- (SALTO DE LINEA)
%2A	-- *

*/
$response = "https://api.whatsapp.com/send?phone=593988581608&text=%2AMi consulta es%3A%2A%0A".$coment."%0A%0A%2AMis datos son%3A%2A%0ANombre%3A%20".$name."%0ACiudad%3A%20".$ciudad;
	echo $response;

?>