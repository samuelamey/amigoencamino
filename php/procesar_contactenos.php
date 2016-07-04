<?php
if(isset($_GET['email'])) {

$email_to = "samuelamey@gmail.com"; /*--------------------Cambiar----------------*/
//$email_to = "depositobelmonte@gmail.com"; /*--------------------Cambiar----------------*/
$email_subject = "Datos de contacto Web Belmonte";

if(!isset($_GET['name']) ||
!isset($_GET['numero']) ||
!isset($_GET['email']) ||
!isset($_GET['comments'])) {

echo "<b>Error, el formulario no ha sido enviado. </b>";
echo "<b>Por favor, vuelva atrás<br/>";
die();
}

$email_message = "Detalles del formulario de contacto web:\n\n";
$email_message .= "Nombre: " . $_GET['name'] . "\n";
$email_message .= "Telefono: " . $_GET['numero'] . "\n";
$email_message .= "Email: " . $_GET['email'] . "\n";
$email_message .= "Comentarios: " . $_GET['comments'] . "\n\n";

$email_from = 'administrador <samuelamey@gmail.com>';
//$email_from = 'administrador <depositobelmonte@gmail.com>';

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>DEPOSITO BELMONTE Contactenos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Deposito Belmonte, depositobelmonte, maderas, almendro, pino, teca, formaleta">	
	<meta name="description" content="Deposito Belmonte - Todo en Maderas Contáctenos 2265-1672 - 2265-1673 - 2265-1674">
	<meta name="author" content="Samuel Amey">
	<link href="../images/logop.jpg" type="image/x-icon" rel="shortcut icon" />	
	<!-- Bootstrap -->		
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!--other JavaScript-->
	<script type="text/javascript" src="../js/validaContactenos.js"></script>
	<!-- Custom Theme files -->
	<link href="../css/contact.css" rel='stylesheet' type='text/css' />
	<link href="../css/animate.css" rel='stylesheet' type='text/css'>
	<link href="../css/style-basicm.css" rel='stylesheet' type='text/css' />
</head>
<body>

		<nav class="navbar navbar-inverse" id="barranavegacion" >
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="../index.html"><font color="white">DEPOSITO BELMONTE</font></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li><a href="../index.html"><font color="white">Inicio</font></a></li>
				<li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="white">Maderas</font><span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="../almendro.html">Almendro</a></li>
					<li class="divider"></li>
					<li><a href="../pinoimportado.html">Pino Importado</a></li>
					<li class="divider"></li>
					<li><a href="../teca.html">Teca</a></li>
					<li class="divider"></li>
					<li><a href="../semidurosyformaleta.html">Semiduros y Formaleta</a></li>
				  </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="../contactus_en.html"><span class="glyphicon"><img class="img-responsive" src="../images/USAFLAG.png" alt="usaFlag" width="15" height="10"></span><font color="white"> English</font></a></li>
				<li class="active"><a href="../contactenos.html"><font color="white">Cont&aacute;ctenos</font></a></li>
			  </ul>			  
			</div>
		  </div>
		</nav>
	
	<div class="animated rubberBand">
		<div class="page-header">
			<div class="container">
				<div class="text-center">
					<img src="../images/logo.png" class="img-responsive center-block" alt="Responsive image">
				</div>
			</div>
		</div>
	</div>
	
<div class="main">	
	<div class="container">
		 <div class="container-fluid bg-grey">
		  <h2 class="text-center">Cont&aacute;ctenos</h2>
		  <div class="row">
			<h6 class="text-center">Gracias por su preferencia, en breve un miembro de nuestro personal se pondr&aacute; en contacto con usted.</h6>
		  </div>
		</div>
	</div>
</div>
		<div class="col-xs-12 footer_bottom">
			<div class="pie_pagina">
				<h2 align="center" >AGROPECUARIA GASCA Y CABRERA K.A.O.S.A.</h2>
				<h6 align="center" >&copy; DEPOSITO BELMONTE - Todos los Derechos 2016 - Desarrollado por <a href="http://ticatico.net/"><font color="red">Ticatico.net</font></a></h6>
			</div>
		</div>
		<div>&nbsp;</div>
</body>
</html>




