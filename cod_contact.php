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

	$name = $_POST['nombre'];  	$mail = $_POST['email'];  	$ciudad = $_POST['ciudad'];  	$coment = $_POST['mensaje'];  	$telef = $_POST['telefono'];
	
	$dat_mmail = $_POST['email'];
	/*
ENVIAMOS DATOS RECOPILADOS A LA BASE DATOS
- CONECTAMOS CON REQUIRE A LA BASE DATOS INCLUYEM CONFIGURACIÓN UTF8
- ENVIAMOS DATOS A BASE DE DATOS
*/
	
	$query = "INSERT INTO data_contactos (date,usuario,correo,contacto,ciudad,consulta) VALUES('$hotline','$name','$mail','$telef','$ciudad','$coment')";
				mysqli_query($cnxstar, $query) or die(mysqli_error());
?>
<?
$destino = $_POST['email']; 
$headers = "FROM: Importadora Olmedo Alvarez<mercadeo@olmedoalvarez.com>\r\n" . "Reply-To: mercadeo@olmedoalvarez.com\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8";
$asunto = "Consulta enviada desde www.olmedoalvarez.com";
$mensaje = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml" xmlns="http://www.w3.org/1999/xhtml">
<head>
					<!--[if gte mso 15]>
					<xml>
					<o:OfficeDocumentSettings>
					<o:AllowPNG/>
					<o:PixelsPerInch>96</o:PixelsPerInch>
					</o:OfficeDocumentSettings>
					</xml>
					<![endif]-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>  <style type="text/css">

					/*////// RESET STYLES //////*/
					p{margin:1em 0;}
					a{word-wrap:break-word; text-decoration: none !important;}
					table{border-collapse:inherit; border:inherit;}
					table tr td{word-break:break-strict !important;}
					h1, h2, h3, h4, h5, h6{display:block; margin:0; padding:0;}
					img, a img{border:0; height:auto; outline:none; text-decoration:none;}
					body, #bodyTable, #bodyCell{height:100%; margin:0; padding:0; width:100%;}

					/*////// CLIENT-SPECIFIC STYLES //////*/
					#outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
					@-ms-viewport{width:device-width;} /* Force IE "snap mode" to render widths normally. */
					img{-ms-interpolation-mode:bicubic;} /* Force IE to smoothly render resized images. */
					table{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook Desktop. */
					.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Outlook.com to display emails at full width. */
					p, a, li, td, blockquote{mso-line-height-rule:exactly;} /* Force Outlook Desktop to render line heights as theyre originally set. */
					a[href^="tel"], a[href^="sms"]{color:inherit; cursor:default; text-decoration:none;} /* Force mobile devices to inherit declared link styles. */
					p, a, li, td, body, table, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
					.ExternalClass, .ExternalClass p, .ExternalClass td, .ExternalClass p, .ExternalClass span, .ExternalClass font{line-height:100%;} /* Force Outlook.com to display line heights normally. */
					a[x-apple-data-detectors]{color:inherit !important; text-decoration:none !important; font-size:inherit !important; font-family:inherit !important; font-weight:inherit !important; line-height:inherit !important;} /* Force iOS devices to heed link styles set in CSS. */

					/*////// EMAIL STYLES //////*/
					#bodyCell{padding-top:15px !important; padding-right:10px !important; padding-bottom:15px !important; padding-left:10px !important; mso-line-height-rule:exactly;}
					.emailContainer{max-width:630px; mso-line-height-rule:exactly;}

					@media screen and (min-width:768px){.emailContainer{width:630px !important;}}				
					@media only screen and (max-width:480px){

					#utilityLink{	border-bottom:1px solid #E5E5E5; display:block; font-size:13px !important; 	padding-top:15px; padding-bottom:15px;}
					#utilink{padding-top:15px;display:block; font-size:13px !important; }
					#mobileHide{display:none; visibility:hidden;} }

</style> </head> <body>

<div style="background-color:#F7F7F7;">
					<!--[if gte mso 9]>
					<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t" style="background-size:cover; background-position: top; background-repeat:no-repeat;">
					<v:fill type="tile" color="#CFCFCF"/>  </v:background>
					<![endif]-->

<table width="100%" height="100%" id="bodyTable" border="0" cellspacing="0" cellpadding="0"   style="color:#CFCFCF;">
<tbody><tr><td align="center" style="padding-top:40px; padding-right:10px; padding-bottom:10px; padding-left:10px;" valign="top" id="bodyCell">

					<!--[if gte mso 9]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" style="width:630px;" width="630">
					<tr> <td align="center" valign="top">
					<![endif]-->

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="max-width:630px;" width="100%" class="emailContainer" height="900">
			<tr>  <td align="center" valign="top" style="padding-top:10px; padding-bottom:10px; padding-left:0px; padding-right:0px;">

<br><br>

<!-- BEGIN BODY // -->

			<table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF; border-bottom:2px solid #E5E5E5; border-radius:4px;" width="100%">  <tbody><tr><td align="center" bgcolor="#266E9B">

			<table width="100%" style="margin:0 auto;">  <tr>
			<td style="color:#F9E244;font-size:24px;line-height:130%;" align="center" height="90">
					<img src="http://olmedoalvarez.com/2018mail/logo.png" alt="logo"/>  <br>
			</td></tr></table>

			</td></tr><tr><td valign="top" align="center">

			
			<table width="580" style="max-width:580px; width:100%;" cellpadding="30" cellspacing="0"><tbody><tr>
			<td style="padding-bottom:20px; padding-top:30px">
					<h1 style="color:#666;font-family: Helvetica, Arial, sans-serif;font-size:25px;font-style:normal;font-weight:bold;letter-spacing:normal;text-align:left;mso-line-height-rule:exactly;line-height:33px;">¡Hola '.$name.'!</h1>
			</td></tr><tr>
			<td style="font-size:14px;color:#036;font-family: Helvetica, Arial, sans-serif;text-align: justify;mso-line-height-rule:exactly;line-height:25px;" >
					<span style="color:#4E4C4C">
					Gracias por escoger a Olmedo Alvarez C.A. para <strong>surtir tu negocio o iniciar tu nuevo emprendimiento.</strong> Nos comprometemos a ofrecerte variedad de productos con calidad y siempre al mejor precio, pensando en beneficiar tu negocio.
					<br><br>
					<strong>Su consulta fue enviada con éxito </strong>y dentro de 1 horas, dentro de la jornada laboral, será revisada y respondida de forma oportuna, en caso de no recibir respuesta dentro de un plazo máximo de 24 horas laborable. Puede comunicarse con nosotros vía mail, escribiendo a la dirección mercadeo@olmedoalvarez.com. 
					<br><br>
					<strong>Adjuntamos una copia de su consulta como respaldo.</strong>
					<br><br>
					</span>

<table width="95%" align="center" border="1" cellpadding="4"  cellspacing="1" bordercolor="#DDDDDD" 
	style=" border-collapse:inherit; border-style:dashed; border-width:1px; 
    font-family: Verdana, Geneva, sans-serif; font-size:12px; color:#033">
  <tr>
    <td width="94" style="font-weight:700; font-size:14px;">Nombre:</td>
    <td width="399">'.$name.'</td>
  </tr>
      <tr>
    <td style="font-weight:700; font-size:14px;">Correo:</td>
    <td >'.$mail.'</td>
  </tr>
   <tr>
    <td style="font-weight:700; font-size:14px;">Contacto:</td>
    <td id="txcs">'.$telef.'</td>
  </tr>
  
   <tr>
    <td style="font-weight:700; font-size:14px;">Ciudad:</td>
    <td >'.$ciudad.'</td>
  </tr>
   <tr>
    <td height="233" valign="top" style="font-weight:700; font-size:14px;">Mensaje:</td>
    <td valign="top" >'.$coment.'</td>
  </tr> 
</table>
			
			
			
			</td></tr><tr>
			<td align="center" style="line-height:170%;border-top:#999 1px solid;vertical-align:top !important;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size:11px;color:#666;padding-top:10px;padding-bottom:10px;padding-left:15px;padding-right:15px;">
					<strong>Guayaquil · Clemente Ballén 1027 y Pío Montufar · PBX: </strong>(04) 2322590 <strong>ext. </strong>117 - 118 - 119 - 120
					<br> <a href="mailto:%20ventas@olmedoalvarez.com" class="lk" title="Dpto. Ventas" style="text-decoration:none;color:#999;display:block;">

					<span style="text-decoration:none;color:#999;border-bottom:1px solid #E5E5E5;display:block;padding:10px 0;">ventas@olmedoalvarez.com</span></a>
					<br>
					<strong>Cuenca · Av. 10 de Agosto 546 y Fco. Moscoso · Telefax: </strong>(07) 4078232 · 4078233
					<a href="mailto:cuenca@olmedoalvarez.com" class="lk" title="Dpto. Ventas" style="text-decoration:none;color:#999;display:block;">

					<span style="text-decoration:none;color:#999;border-bottom:1px solid #E5E5E5;display:block;padding:10px 0;">cuenca@olmedoalvarez.com</span></a>
					<br>
					<p style="font-family:Verdana, sans-serif;font-size:12px;color:#666;line-height:130%;margin:0 auto;" align="center"> <em>
					© Olmedo Alvarez C.A. · Todos los Derechos Reservados.</em> </p>  <br>

			</td></tr></tbody></table>
			</td></tr></tbody></table>

<!-- ENDING BODY // -->
			</td></tr><tr>
			<td align="justify" valign="top" style="padding-top:30px; padding-bottom:30px; padding-left:40px; padding-right:40px;mso-line-height-rule:exactly;">
				<center>
				<span style="font-family:Verdana, sans-serif; font-size: 12px; color: #666;line-height:22px;margin:0 auto;">
				<a href="https://www.facebook.com/Olmedoalvarezec" title="Hazte Fan" target="_new">
				<img src="http://olmedoalvarez.com/2018mail/scl_fac.png" width="26" height="25" border="0" alt="Olmedo Alvarez en Facebook" title="Olmedo Alvarez en Facebook" style="padding:5px;text-decoration: none;"></a>
						&nbsp;&nbsp;&nbsp;
				<a href="https://twitter.com/Olmedoalvarezec" title="Siguenos en Twitter" target="_new">
				<img src="http://olmedoalvarez.com/2018mail/scl_tw.png" width="26" height="25" border="0" longdesc="https://twitter.com/Olmedoalvarezec" alt="Olmedo Alvarez en Twitter" title="Olmedo Alvarez en Twitter" style="padding:5px; text-decoration: none;"></a>
						&nbsp;&nbsp;&nbsp;
				<a href="https://www.instagram.com/olmedoalvarezec/" title="Siguenos en Twitter" target="_new">
				<img src="http://olmedoalvarez.com/2018mail/scl_insta.png" width="26" height="25" border="0" longdesc="https://www.instagram.com/olmedoalvarezec/" alt="Olmedo Alvarez en Instagram" title="Olmedo Alvarez en Instagram" style="padding:5px;text-decoration: none;"></a>
				</span>

				
				<br><br><br><br>
				<span style="color: rgb(0,102,153); text-decoration: none;">
				<a id="utilityLink" style="color:rgb(0,102,153); text-decoration:none; font-size:10px;" href="mailto:emailing@olmedoalvarez.com?subject=Dar de baja" target="_blank">
				<span style="font-family:Verdana;color:rgb(0,102,153); text-decoration:none; font-size:10px;">Quiero dejar de recibir esto</span></a></span>
				</center>

				<br>
				<span style="font-family:Verdana;text-align:justify;color:#666666;font-size:10px;mso-line-height-rule:exactly;line-height:20px;">Añade nuestras direcciones de correo<a href="mailto:mercadeo@olmedoalvarez.com" style="font-family:Verdana;font-size:10px;color:#666;text-decoration:none;">
				<span style="font-family:Verdana;font-size:10px;color:#666;text-decoration:none;">mercadeo@olmedoalvarez.com</span></a> y
				<a href="mailto:emailing@olmedoalvarez.com" style="font-family:Verdana;font-size:10px;color:#666;text-decoration:none;">
				<span style="font-family:Verdana;font-size:10px;color:#666;text-decoration:none;">emailing@olmedoalvarez.com</span></a> a tu lista de contactos. También puedes marcar este correo como seguro.

				<br><br>
				• <strong>Este correo no es considerado SPAM,</strong> según la legislación sobre correo electrónico del Ecuador y su Reglamento publicado en el Registro Oficial 735 del 31 de Diciembre del 2002, Decreto No. 3496, Artículo 22, mientras incluya una forma de ser retirado de la lista de envíos. <strong>Si usted desea ser removido de nuestra lista de forma definitiva por favor haga clic en "Quiero dejar de recibir esto."</strong>
				</span>

		</td></tr></table>
		<!--[if gte mso 9]> 		</td>  </tr> </table>  <![endif]-->
</td></tr></tbody></table>  </div> </body> </html>';
	
	 mail($destino,$asunto,$mensaje,$headers);  ?>
     
<?	


require("class.phpmailer.php");
require("class.smtp.php");

// Data received from POST request

$emailnaAddr = "Dpto. Diseño y Mercadeo";
$emailAddr = "mercadeo@olmedoalvarez.com";
//$issue = stripcslashes($_POST['issue']);
//$comment = stripcslashes($_POST['message']);
//$subject = stripcslashes($_POST['subject']);   

$subj = "Contacto enviado desde www.olmedoalvarez.com";
$body = '<html>
  <body>
   <table width="45%" border="1" cellpadding="4"  cellspacing="1" bordercolor="#DDDDDD" style=" border-collapse:inherit; border-style:dashed; border-width:1px; font-family: Verdana, Geneva, sans-serif; font-size:12px; color:#033">
  <tr>
    <td width="94" style="font-weight:700; font-size:14px;">Nombre:</td>
    <td width="399">'.$name.'</td>
  </tr>
      <tr>
    <td style="font-weight:700; font-size:14px;">Correo:</td>
    <td >'.$dat_mmail.'</td>
  </tr>
   <tr>
    <td style="font-weight:700; font-size:14px;">Contacto:</td>
    <td id="txcs">'.$telef.'</td>
  </tr>
  
   <tr>
    <td style="font-weight:700; font-size:14px;">Ciudad:</td>
    <td >'.$ciudad.'</td>
  </tr>
   <tr>
    <td height="233" valign="top" style="font-weight:700; font-size:14px;">Consulta:</td>
    <td valign="top" >'.$coment.'</td>
  </tr> 
</table>
</body>
</html>';


// Send mail
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP

// SMTP Configuration
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->Host = "mail.olmedoalvarez.com"; // SMTP server
$mail->Username = "mercadeo@olmedoalvarez.com";
$mail->Password = "Mdat*8090+go.OACA";            
$mail->Port = 26; // optional if you don't want to use the default 

$mail->From = $dat_mmail;
$mail->FromName = $name;
$mail->Subject = $subj;
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->CharSet = 'UTF-8';
$mail->MsgHTML($body);

// Add as many as you want
$mail->AddAddress($emailAddr, $emailnaAddr);

// If you want to attach a file, relative path to it
//$mail->AddAttachment("images/phpmailer.gif");             // attachment

$response= NULL;
if(!$mail->Send()) {
    $response = "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script>window.location='gracias.html'</script>";
    $response = "Message sent!";
}
		mysqli_close($cnxstar); //CERRAMOS CONEXIÓN
?>