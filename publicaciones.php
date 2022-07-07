<!doctype html>
 
<html><!-- InstanceBegin template="/Templates/plantillaSite.dwt" codeOutsideHTMLIsLocked="false" -->  <head>  <meta charset="utf-8">
<title>Olmedo Alvarez C.A.</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!---- site styles ---->
<link rel="stylesheet" href="oa_fx/css_site.css" data-title="estilos_slider&page">
<link rel="stylesheet" href="fonts.css" data-title="icomoon">

<style>
@import url('https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;700&family=Kanit:wght@100;200;300;500;700&family=Playfair+Display:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,300;1,400;1,600;1,700&family=Roboto:wght@100;300;700&family=Rubik:wght@300;400;500;700&display=swap');

/*
font-family: 'Arimo', sans-serif;
font-family: 'Kanit', sans-serif;
font-family: 'Playfair Display', serif;
font-family: 'Roboto', sans-serif;
font-family: 'Rubik', sans-serif;
font-family: 'Titillium Web', sans-serif;
*/

body,html{padding:0;margin:0;width:100%;height:100%;
   font-family: 'Roboto', sans-serif;z-index:0;background:#F0EFF4;}
			
#IrArriba{position:fixed;bottom:30px;right:30px;cursor:pointer;} 
#IrArriba span[class*="icon-"]{
	display:block;font-size:30px;opacity:0.5;
	border:3px solid #18284E;font-weight:600;
	background:rgba(255,255,255,0.7);
	border-radius:8px;padding:5px 10px;color:#18284E;
} 
#IrArriba span:hover{opacity:0.8;}

</style>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<!-- InstanceBeginEditable name="head-edit" -->

<!------ PARA INGRESAR STYLE AND SCRIPT IN HEAD ------>

<!-- InstanceEndEditable -->

</head> <body>

<div id="IrArriba"> <a onclick="javascript:subir();"><span class="icon-angle-double-up"></span></a> </div>

<!-----------------------
  SECTION UP MENU FLOAT
------------------------->
<style>
.menu-float{width:100%;margin:0 auto;position:fixed;top:-100px;
  background:rgba(18,63,84,.96);z-index:5;padding:15px 0;box-shadow:0 2px 8px black; animation:up 0s;}
      @keyframes top 		{0%{top:-100px;} 100%{top:0;} }
      @keyframes up 		{0%{top:0;} 100%{top:-100px;} }

.floatthmenu{width:90%;margin:0 auto;}
.float-a, .float-b, baby{display:inline-block;  vertical-align:middle;}
.float-a img{height:40px;}
.float-b{float:right;padding-top:5px;}
.float-b a{text-decoration:none;padding:0 6px;}
.float-b a span[class*='icon-']{color:white;font-size:16px;}
baby{color:white;margin-left:8px;font-size:28px;border-left:2px solid white;}
baby span[class*='icon-']{margin-left:9px;cursor:pointer;}
</style>

<article class="menu-float">
<section class="floatthmenu">
<a href="/" class="float-a"><img src="oa_data/logowh.svg" alt=""></a>

<div class="float-b">

<a href="shop.php"><span class="icon-cart"></span></a>
<a href="login.php"><span class="icon-user-circle"></span></a>
<baby>
<span class="icon-menu1"></span></baby>
</div>
</section></article>

<!--------------------
SECTION WHATSAPP FORM
-------------------->

<!----- boton flotante whats ---->
<section class="whts_but openwhts" >
<span class="icon-whatsapp"></span>
Pedidos WhatsApp
</section>
<!----- form whats ---->
<article class="whts_form">
<section class="formwt">
<p>Personalicemos tu atención.</p>
<input placeholder="Nombres Completos" class="name">
<input placeholder="Ciudad" class="city">
<textarea placeholder="Ingresa tu consulta hasta 300 caracteres" class="text" rows="8" name="message" onkeyup="countChars(this);" style="white-space:pre-wrap;" >
</textarea>
<div style="text-align:right;font-size:12px;color:#4F4F4F;font-weight:600;" id="charNum">Escribe tu mensaje para activar el botón de enviar.</div>

<br>
<siv id="subwtme">Iniciar chat por Whatsapp</siv>
<siv class="clwhtme"> Cancelar </siv>
<br><br>
<div style="color:#5F5E5E;font-size:12px;font-weight:bold;">¡No olvides! Pulsar enviar en la aplicación de WhatsApp.</div>
</section>
</article>

<!--------------------
END SECTION WHATSAPP FORM
-------------------->

<!-- InstanceBeginEditable name="body-upper" -->

<!------ PARA INGRESAR INFO OUTSITE ------>

<!-- InstanceEndEditable -->


<!------- menu lateral ----------------->
<div class="lateraldown" style="width:100%;height:100%;margin:0 auto;position:fixed;z-index:8;background:rgb(0,0,0,.6);opacity:0;"></div>
<pagesection class="sitelateral">
<section class="menu_lateral">
<span class="icon-cancel" style="cursor:pointer;"></span>
<a href="login.php" style="background:#FAE1C6;color:#6E6549">
<span class="icon-user-outline" style="color:#6E6549;font-size:24px;position:absolute;margin-top:-18px;"></span>
 <strong>Mi Cuenta</strong></a>
<a href="/">inicio</a>
<a href="ofertas.html">ofertas</a>
<a href="productos.php">productos</a>

<a href="shop.php" style="background:#048BA8;color:whitesmoke">
<span class="icon-shopping-cart2" style="color:whitesmoke;font-size:24px;position:absolute;margin-top:-18px;"></span>
tienda online</a>
	
<a href="publicaciones.php">publicaciones</a>
<a href="contacto.html">contacto</a>
<a href="nuestras-politicas.html">politicas</a>
</section></pagesection>



<!------- upsite general ----------------->

<pagesection class="allsite"> 

<!-- InstanceBeginEditable name="bannerupsite" -->

<!------ EDICION BANNER DEL SITIO ------>

<style>
.banner_site{
  /*efecto para crear fondo inclinado*/
		background:url("oa_data/01PRD2022/oacaslider.jpg")no-repeat center; /*modificar acorde contenido*/
		background-size: cover;
		
  -webkit-clip-path: polygon(0 0, 100%  0, 100% 100%, 0 90%);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 90% );
		height:60% !important; max-height:350px;/*tamaño banner*/
  background-color:#18318F;
		}
</style>
<section class="banner_site">
<!---- img banner site ----->
</section>

<!-- InstanceEndEditable -->



<section style="position:absolute;top:0;width:100%;">

<section class="bannerupper">
<div id="susbs">¡Suscríbete y gana descuentos!</div>
<div class="iconesocial">
<a href="https://www.facebook.com/Olmedoalvarezec/" target="_blank"><span class="icon-facebook"></span></a>
<a href="https://www.instagram.com/olmedoalvarezec/" target="_blank"><span class="icon-instagram"></span></a>
<a><span class="icon-whatsapp openwhts"></span></a>
<a href="contacto.html"><span class="icon-mail"></span></a>
<a href="shop.php"><span class="icon-cart"></span></a>
<a href="login.php" style="color:#607480;text-decoration:none;" class="title"> <strong>&nbsp;&nbsp;|&nbsp;&nbsp;</strong> <span class="icon-user-circle"></span>
			<span class="sptitle">Iniciar Sesión</span></a>
</div>
</section>


<section class="menunav">
    <div class="navisat">
				<a href="/"><img src="oa_data/logowh.svg" alt=""></a>
    <nav>
				<be>
				<a href="productos.php">PRODUCTOS</a>
				|  <a href="ofertas.html">OFERTAS</a>
				|  <a href="publicaciones.php">PUBLICACIONES</a>
				|  <a href="contacto.html">CONTACTO</a>
				</be>
				<dd><span class="icon-menu1"></span></dd>
				</nav>   </div>

<!-- InstanceBeginEditable name="upper-data" -->

<!------ PARA INGRESAR INFO INTO PAGE CENTRAL ------>

<article class="upperdata" >

¡TODO PARA TU NEGOCIO!

</article>
<div id="nnone"></div>

<!-- InstanceEndEditable -->
  </section>  </section>  
</pagesection>


<!------- centralsite general ----------------->

<article class="page_datasection">

<section class="int_datasection">


<!-- InstanceBeginEditable name="site-central" -->

<!------ PARA INGRESAR INFO INTO PAGE CENTRAL ------>

<style>
.slidnov{
					padding:4px;background:white;display:inline-block;
					vertical-align:top;border:1px solid #D0DADC;
					margin:4px 2px;text-decoration:none;
					transition: all 250ms ease-out;	
					font-family: 'Titillium Web', sans-serif;
					opacity:.6;	
					box-shadow:0 0 8px 0 #C1C4BF;
	}
.slidnov div{color:#5B5F59;font-size:9pt;font-weight:600;
			line-height:1.3em;padding:10px;text-align:left;
			border-left:1px solid #CCCECA;}


.slidnov:hover{transform:translateY(-3%); color:#474A45;
					opacity:1;transition: all 250ms ease-in;}


.container-all{
  width:100%;height:100%;top:0;left:0;
  position:fixed;background:rgba(0,0,0,.7);z-index:100;
  
  visibility:hidden; opacity: 0; transition: all 600ms;
}

.cont-pop{width:90%;height:90%;background:white;
  top:-80%; left:-80%; 
  position:relative;
  display:flex;max-width:930px;max-height:609px;
  border-radius:0 10px 10px 0;
  visibility: hidden;
  transform: rotate(90deg) translate(-150%, 230%);
  transition: all 600ms;
}

/**** target de css para efecto *****/
.container-target{opacity:1; visibility:visible;}
.cont-target{visibility: visible;
top:50%; left:50%;
transform: rotate(0deg) translate(-50%, -50%);}
/***********************/

.img{width:70%;height:100%;}
.img img{width:100%;height:100%; object-fit:contain;}

.cont-text{width:30%;padding:30px;overflow-y:auto;font-size:14px;line-height:1.7em; }
.cont-text::-webkit-scrollbar {display: none;}
div.icon-times{
    padding:8px;position:absolute;border-radius:100px;
    background:#98520B;color:#FBFADA;cursor:pointer;
    font-size:24px;right:-15px;top:-15px;z-index:5;}
    
#day{font-weight:400;font-size:12px;border-bottom:1px solid #C1C1C1;
  padding-bottom:10px;color:#A3A3A3;
  font-family: 'Rubik', sans-serif;text-transform:uppercase;
  }
#separador{padding:15px 0;border-bottom:1px solid #C1C1C1;}

.botonoved{color:#006D8F;font-weight:600;font-size:14px;border:1px solid #006D8F;padding:8px;text-align: center;margin:10px 0;cursor:pointer;}
.botonoved:hover{background:#B1481B;color:white;border:none;}
.botonoved span[class*='icon-']{padding-right:5px;}

@media screen and (max-width:700px){
.cont-pop{display:block;border-radius:0px;height:auto;width:355px;}
.img{height:355px;width:355px;} 
.img img{display:block;}
.cont-text{height:auto;width:80%;margin:0 auto;padding:15px 0;}
#day,#infodata,#separador{display:none;}

}

#socialesnovd a{text-decoration:none;}

.card-image{
    background:#011014 center center no-repeat;
    background-size:contain;
    filter: blur(3px); /* blur the lowres image */
    }

.card-image > img {
  display: block;
  width: 100%;
  opacity: 0; /* visually hide the img element */
}
.is-loaded {
  filter: none; /* remove the blur on fullres image */
  transition: filter 2s;
}

#myProgress {
  position: absolute;
  width: 100%;
  height: 3px;
		background-color:#DFDFDF;
}

#myBar {
  position: relative;
  width: 1%;
  height: 100%;
  background-color: #EBE533;
}
</style>

<div class="container-all" id="modal">
<div id="myProgress"> <div id="myBar"></div> </div>

<div class="cont-pop">
<div class="icon-times"></div>
<div class="img card-image" id="cardimage">
<img src="#" id="imgsrc" alt="">
</div>
<div class="cont-text">
<p id="day"></p>
<p id="infodata"> </p>
<p id="separador"></p>
<p id="socialesnovd"></p>
</div> 
</div>
</div>

<!-------- //*********// -------->

<article style="padding-top:60px;text-align:center;">
<p style="color:#EF8F2E;padding-bottom:15px;border-bottom:1px solid #EF8F2E;text-align:left;"><strong>Nuestras Publicaciones online.</strong>
Da click en la imagen para visualizarla.
</p>


<!-------- COMANDOS PARA PUBLICAR IMAGES CON MYSQL ------->

<?php
include_once "oa_fx/mysql_conect.php";

$result = mysqli_query(	$cnxstar, "SELECT * FROM data_slidernoved ORDER BY id DESC");

while($row = mysqli_fetch_array($result)){
	$arregloId[] = $row['id']; /* id de tabla para paginacion*/
	$date[]=$row['date_img'];
	$title[] = $row['titulo_img'];
	$descrip[]=$row['info_img']; 
	$social[]=$row['scl_img']; 
	$imagennoved[]=$row['image']; 
}

if(count($arregloId) == 0){
echo "<div class='shopping'> No hay datos que mostrar... </div>";
}else{
	for($x=0; $x<count($arregloId); $x++){
	
	echo'
	
    <div class="slidnov">
    <img src="oa_noved/thumb/'.$imagennoved[$x].'" alt="" data-src="'.$imagennoved[$x].'" data-info="'.$descrip[$x].'" data-reg="'.$date[$x].'" data-socl="'.$social[$x].'">
    </div>
	
	';  }
};
?>

</article>

<script>

$('.icon-times').click(function(){
var modal_img = document.getElementById('cardimage');
//modal_img.className = 'img card-image';
modal_img.classList.remove('is-loaded');
modal_img.removeAttribute('data_full');
modal_img.removeAttribute('style');
document.getElementById("imgsrc").src="#";
 
		$('.container-all').removeClass('container-target');
		$('.cont-pop').removeClass('cont-target');
 
 });

$('.slidnov img').click(function(){

		$('.container-all').addClass('container-target');
		$('.cont-pop').addClass('cont-target');

			var src800 = this.getAttribute('data-src');
			var info = this.getAttribute('data-info');
			var dayreg = this.getAttribute('data-reg');
			var sendt = this.getAttribute('data-socl');
			var newsrc = "oa_noved/noved/"+src800; 
		//document.getElementById("imgsrc").src=newsrc;
		document.getElementById("infodata").innerHTML = info;
		document.getElementById("day").innerHTML = dayreg;
		document.getElementById("socialesnovd").innerHTML = "<a href='mailto:newsletter@mercadeo.com?subject="+sendt+"'><section class='botonoved'><span class='icon-send'></span>Consulta por Email</section></a><a href='https://api.whatsapp.com/send?phone=593988581608&text="+sendt+"'><section class='botonoved'><span class='icon-whatsapp'></span>Cotiza por WhatsApp</section></a>";

var modal_img = document.getElementById('cardimage');
    modal_img.style.backgroundImage = 'url(oa_noved/thumb/'+src800+')';
    modal_img.setAttribute('data_full', newsrc);
    
        
        
$('#myProgress').fadeIn(100); //aparece el barProgress

setTimeout(lazyLoad, 450);  

function lazyLoad() {
  var card_images = document.querySelectorAll('.card-image');
    
  card_images.forEach(function(card_image) {
		var image_url = card_image.getAttribute('data_full');
		var content_image = card_image.querySelector('img');
		
		content_image.src = image_url;

//variables function bar progress
var elem = document.getElementById("myBar");   
var width = 0;
/************/


content_image.addEventListener('load', function() {

/** hacemos cargar el bar progress **/
setInterval( 
function(){ width++, elem.style.width = width + '%'; });
/************/
		
  card_image.style.backgroundImage = 'url(' + image_url + ')';
  card_image.className = 'card-image is-loaded img';
	
							
	});
	
/** lo ocultamos una vez finalizada la carga **/
content_image.onload = function(){	$('#myProgress').fadeOut(1000);	};
/************/

	});     }

});   

</script>

<!-- InstanceEndEditable -->

</section>

<!-- InstanceBeginEditable name="UPSITE CENTRAL" -->

<!------ PARA INGRESAR INFO INTO PAGE CENTRAL ------>

<!-- InstanceEndEditable -->

</article>

<style>
.suserror{ float:right;font-size:12px;
	font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; 	
	background:#3D0004;	color:antiquewhite; padding:7px;
	margin-left:-75px;position:absolute;margin-top:20px}

</style>

<section class="boletin">  <article>
<div class="flyr" id="suscmail">
<input type="text" class="susname" placeholder="Ingresa tu nombre aquí">
<input type="email" class="susemail" placeholder="Ingresa tu correo aquí">
<buttom id="sus" placeholder="SUSCRÍBETE">SUSCRÍBETE</buttom>
</div>

<br>
<div class="flyl">
<strong>Suscríbete a nuestros boletines</strong> y recibe ofertas, promociones y descuentos especiales.
</div>


<script>
////***** js form suscribe ******///
$("#sus").click(function(){

$(".suserror").remove();
$(".flyr input").removeClass("noneclass");

var usermail = $(".susname").val(), 
    emailnews = $(".susemail").val(),
    validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

				
	if(usermail == "") {
          $('.susname').focus().addClass("noneclass").after("<span class='suserror'>Requerido</span>");
          return false;
          }else if(emailnews == "" || !validacion_email.test(emailnews)){
		  $('.susemail').focus().addClass("noneclass").after("<span class='suserror'>Invalido</span>");
				return false;
          }else{

/**** enviamos datos a registro ***/
var infodata = 'nombre='+usermail+'&correo='+emailnews;
$.ajax({
	    		type: "POST", url: "cod_newsletter.php", data: datos,
	   success: function() {
					
          $('.flyl').html('<strong>¡Datos envíados!</strong> Revisa tu bandeja de correo y activar tu registro...');
					document.getElementById('suscmail').reset();
          setTimeout("$('.flyl').html('<strong>Suscríbete a nuestros boletines</strong> y recibe ofertas, promociones y descuentos especiales.');",1200);
        },
		error: function() {
					
					$('.flyl').html('<strong>¡Upss!</strong> Ha ocurrido un error, intenta más tarde...');	
					document.getElementById('suscmail').reset();
					setTimeout("$('.flyl').html('<strong>Suscríbete a nuestros boletines</strong> y recibe ofertas, promociones y descuentos especiales.');",1200);
				} }); 

				return false;
          
          }

});
</script>

</article> </section>



<!------------------- end of site --->

<footer>     <div class="fotxt">
<script type="text/javascript">
var today = new Date()
var year = today.getFullYear()
document.write(year)
</script> Todos los derechos Reservados. ® Olmedo Alvarez C.A.  <strong>•  GUAYAQUIL | ECUADOR  •  Código Postal: 090307  •  PBX: +593[04] 2322590</strong>

</div>

<div class="sclfooter">
<a href="https://facebook.com/Olmedoalvarezec/" target="_blank">
	<span class="icon-facebook"></span></a>

<a href="https://instagram.com/olmedoalvarezec/" target="_blank">
	<span class="icon-instagram"></span></a>

<a href="https://twitter.com/olmedoalvarezec" target="_blank">
	<span class="icon-twitter"></span></a>

<a href="https://youtube.com/c/Olmedoalvarezec" target="_blank">
	<span class="icon-youtube"></span></a>

</div>


<div class="footweb"> 
<div class="linkweb">
<a href="/" >Inicio</a>
<a href="productos.php" >Catálogos</a>
<a href="publicaciones.php" >Publicaciones</a>
<a href="nuestras-politicas.html" >Política de Privacidad</a>
<a href="https://webmail.olmedoalvarez.com/" target="_blank"> Webmail Empleados </a>

</div>

<div class="info_oa">
<strong>Somo Olmedo Alvarez C.A.</strong><br><br>
Desde 1959 iniciamos nuestra actividad comercial sirviendo al mercado ecuatoriano, nuestros años de experiencia nos avalan para ofrecer variedad, calidad y buenos precios en todos los productos que necesites para uso personal, para tu emprendimiento o para tu negocio actual.

</div>

<div class="placeoaca">  <p>
<strong style="font-size:14px;">Guayaquil</strong><br />
<strong>Clemente Ballén 1027 y Juan Pío Montúfar</strong><br />
<strong>Atención:</strong><br>
Lunes a Viernes | 9H00 - 17H30 <br />
Sábados | 9H00 - 13H00 <br />

<strong>Email: </strong><span onclick="javascript: info();" class="mail">info@olmedoalvarez.com</span>


<article class="icons_upside_down">

<a class="title" href="contacto.html"><span class="icon-mail"></span>
				<span class="sptitle">Contáctanos por Mail</span></a>

<a class="title openwhts"><span class="icon-whatsapp"></span>
				<span class="sptitle">Envíanos un WhatsApp</span></a>

<a style="border:none;" class="title" href="shop.php">
				<span class="icon-cart"></span>
				<span class="sptitle">¡Haz tus pedidos!</span></a>

</article>  </p>

<script type="text/javascript">
    function info(){window.location.href = "mailto:info@olmedoalvarez.com";}
    function cuenca(){window.location.href = "mailto:cuenca@olmedoalvarez.com";}
    function cuenca2(){window.location.href = "mailto:cuenca2@olmedoalvarez.com";}
</script>

</div></div>   </footer>  




<!--------------------

JAVASCRIPT WHATSAPP FORM

-------------------->

<script>

$('#subwtme').hide();/*ocultamos boton enviar what*/
$('.openwhts').click(function(){ 
        $('.whts_form').css("visibility", "visible"); });
$('.clwhtme').click(function(){ 
        $('.whts_form').css("visibility", "hidden");});
								
function countChars(obj){
    var maxLength = 300;
				var activesend = 15;
    var strLength = obj.value.length;

if(strLength > activesend){	$('#subwtme').show();
     document.getElementById("charNum").innerHTML = '<span style="color: red;">'+strLength+' / '+maxLength+' </span>';
     }else{	
    document.getElementById("charNum").innerHTML = '<span style="color: red;">'+strLength+' / '+maxLength+' </span>';
}

if(strLength > maxLength){
    document.getElementById("charNum").innerHTML = '<span style="color: red;">Reduce la cantidad de texto hasta 300 caracteres.</span>';
    $('#subwtme').hide(); } 																									
};

/**** send data whatsapp *****/


/*** COMANDOS PARA WHATSME ***/
$("#subwtme").click(function() {
	$(".whter").remove();
var nombre = $(".name").val(), ciudad = $(".city").val(),
		mensaje = $(".text").val();
			
			if (nombre == "") {
		    $(".name").focus().after("<span class='whter'>Requerido</span>");
						return false;
		}else if(ciudad == ""){
		    $(".city").focus().after("<span class='whter'>Requerido</span>");
						return false;
		
		}else if(mensaje == ""){
		    $(".text").focus().after("<span class='whter'>Requerido</span>");
		    return false;	
		}else{	
					
			var datos = 'nombre='+ nombre + '&ciudad=' + ciudad +	'&mensaje=' + mensaje;
			$.ajax({
	    		type: "POST", url: "cod_whatme.php", data: datos,
	    		success: function(data) {
					setTimeout(function(){location.href= data } , 900);  
	    		},
}); 
				
				return false;
		
		};
});
</script>

<!--------------------

SECTION JAVASCRIPT PAGE

-------------------->

<script>
$("#susbs").click(function(){ $("html, body").animate({
    scrollTop: $(".boletin").offset().top }, 600); 
}); /*scrollTO boletin*/


/*********** JS MENULATERAL ******************/
$(document).ready(main);
	
function main(){
var menufx = 0;/*variable menu cerrado*/
$('.lateraldown').hide();

$('.icon-menu1').click(function(){
if(menufx == 0){
 			$('.sitelateral').animate({'right':'0'},750);
				$('.lateraldown').animate({'opacity':'1'},900).show();
				menufx = 1; return false; }else{
				$('.sitelateral').animate({'right':'-350px'},750);
				$('.lateraldown').animate({'opacity':'0'},900);
				setTimeout(function(){$('.lateraldown').hide();},800);
				menufx = 0; return false;
				}
});

$('.lateraldown').click(function(){
 			$('.sitelateral').animate({'right':'-350px'},750);
				$('.lateraldown').animate({'opacity':'0'},900);
				setTimeout(function(){$('.lateraldown').hide();},800);
				menufx = 0; return false;
});

$('.icon-cancel').click(function(){
 			$('.sitelateral').animate({'right':'-350px'},750);
				$('.lateraldown').animate({'opacity':'0'},900);
				setTimeout(function(){$('.lateraldown').hide();},800);
				menufx = 0; return false;
});							}
/*********** JS MENULATERAL ******************/

/// ------- fx to scroll up site ------//

/// ------- fx to animate menu scroll ------//


$(document).ready(

//      $('.menu-float').animate({'top':'0'},300);

function subir(){
			$('#IrArriba').hide();
$(window).scroll(function(){ 
	if($(this).scrollTop() >= $(document).height() / 3 ){
			$('#IrArriba').fadeIn(200);
      $('.menu-float').css({top:'0px',animation:'top 0.3s'});
      }else{
      $('#IrArriba').fadeOut(200); 
      $('.menu-float').css({top:'-100px',animation:'up 0.8s',});
} });
$("#IrArriba a").click(function(){
			$('body, html').animate({scrollTop:0},800); return false;});
});
</script>

<!-- InstanceBeginEditable name="script-site" -->

<!------ PARA INGRESAR JAVASCRIPT ------>
<script async src="oa_fx/js/lazyload.js" type="text/javascript">
//async retarda carga del js para optimizar rendimiento
</script>
<!-- InstanceEndEditable -->
</body> <!-- InstanceEnd --></html>