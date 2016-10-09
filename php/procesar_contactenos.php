<?php
if(isset($_GET['email'])) {

$email_to = "admin@amigoencamino.com, amy@amigoencamino.com"; 
$email_subject = "Datos de contacto Web amigoencamino";

if(!isset($_GET['name']) ||
!isset($_GET['numero']) ||
!isset($_GET['email']) ||
!isset($_GET['comments'])) {

echo "<b>Error, el formulario no ha sido enviado. </b>";
echo "<b>Por favor, vuelva atras<br/>";
die();
}

$email_message = "Detalles del formulario de contacto web:\n\n";
$email_message .= "Nombre: " . $_GET['name'] . "\n";
$email_message .= "Telefono: " . $_GET['numero'] . "\n";
$email_message .= "Email: " . $_GET['email'] . "\n";
$email_message .= "Comentarios: " . $_GET['comments'] . "\n\n";

$email_from = 'administrador <admin@amigoencamino.com>';

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
	<title>Contáctenos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Amigo en Camino, amigoencamino, amigo, camino, costa, turismo">	
	<meta name="description" content="Amigo en Camino - Contáctenos (+506) 2266-0054">
	<meta name="author" content="Samuel Amey">
	<link href="../img/manigordos/icono.jpg" type="image/x-icon" rel="shortcut icon" />
	
	<!--other JavaScript-->
	<script type="text/javascript" src="js/validaContactenos.js"></script>	
	
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index2.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/darkbox.css" type="text/css">

  </head>

  <body>

    <div class="container">
    
    	<div align="right">
    		<a href="../contact_us.html"><img src="../img/img/usaflag.png" width="30px" alt="ENGLISH"></a>English
			<a href="../contact_ru.html"><img src="../img/img/russiaflag.png" width="30px" alt="русский"></a>Pусский
		</div>

		<div class="row">
        	<div class="col-xs-12"><img src="../img/inicio/letrasm.png" class="img-responsive" id="patito"/></div>
        </div>    

		<div class="row">
        <div class="col-sm-4 col-md-3">
					<div class="sidebar-nav col-sm-12">
					  <div class="navbar navbar-den col-sm-12 " role="navigation">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <span class="visible-xs navbar-brand">Menu</span>
						</div>
						<div class="navbar-collapse collapse sidebar-navbar-collapse">
						  <ul class="nav navbar-nav">
							<li><img class="imglogo" src="../img/manigordos/CONTACTOm.png" alt="LOGO" class="img-responsive" ></li>
							<li><a href="http://www.amigoencamino.com/index.html">Inicio</a></li>
							<li><a href="http://www.amigoencamino.com/arteygaleria.html">Arte y Galería</a></li>
							<li><a href="http://www.amigoencamino.com/posadavillacamilo.html">Posada Ville Camille</a></li>
							<li><a href="http://www.amigoencamino.com/derechoshumanos.html">Derechos Humanos</a></li>
							<li><a href="http://www.amigoencamino.com/radiobarva.html">Radio Barva</a></li>
							<li class="active"><a href="http://www.amigoencamino.com/contactenos.html">Contáctenos</a></li>
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
					</div>
			</div>
          <div class="col-sm-8 col-md-9">
			<div class="hidden-xs col-sm-12 col-md-12 col-lg-12 text-justify parrafo3">
			  <font>
				<center><font><h1>INTERCAMBIO EN COSTA RICA</h1></font></center>
				<p>Si deseas hacerlo o acercarte a un país hermoso, pequeño y caluroso humanamente, no dejes de escribirnos.</p>
				<p align="center" ><font color="white">www.amigoencamino.com</font></p>
				<p>Posada Ville Camille, es un lugar de encuentro, rodeado de naturaleza, con paisajes casi perfectos, un clima exquisito que oscila entre los 22 y 25 grados centígrados; la salida del sol se manifiesta a las 5:17 y la puesta del sol a las 17:49 horas, en verano su clima es con sol constante y en el invierno algún chubasco y tormentas.</p>
				<p>Si realmente deseas visitarnos por un tiempo, 30 días o más coméntanos sobre su interés, la idea es que una vez concluida su visita alguna persona costarricense pueda hacerlo de la misma manera en su país de origen.</p>
				<p>Contamos con su habitación, y todas las comodidades de internet, televisión, lavado de ropa y compartir en familia; visitas a patrimonios, paseos en un ambiente tranquilo, paz y si su interés es aprender español, dese esta oportunidad.</p>
				<p>No estamos interesados en que haga ninguna derogación económica, administre su dinero, haga sus compras de alimentación y llegamos a un arreglo por su permanencia en el país de manera económica y acorde a su bolsillo.</p>		
				<p>Costa Rica, país de aventura y sueños, terminara con nostalgia al saber que deja un pedacito de su corazón en nuestro terruño, atrévase a diseñar su viaje y pensar cómo podría recibir a un costarricense en su hogar, el tiempo corre y recuerde recibimos gente de 0 a 100 años, su edad es un asunto del destino.</p>
				<p>Hablamos inglés, portugués, ruso y castellano, entra en nuestro mundo de aventura y en nuestro nido de encuentro, deposita un poco tuyo para expandir deseos de amistad, solidaridad y caminar de la mano en la práctica de los Derechos Humanos.</p>
				<p>Gracias por preferirnos… tendrá un amigo en camino, San José de la Montaña te espera!!!</p>
				<br>
			   </font>
			</div>

				<div class="hidden-sm hidden-md hidden-lg text-justify parrafo3">
			  	<font>
				<center data-toggle="collapse" data-target="#int"><font><h1>INTERCAMBIO EN COSTA RICA <h5 class="glyphicon glyphicon-menu-down"></h5></h1></font></center>
				<div id="int" class="collapse">
					<p>Si deseas hacerlo o acercarte a un país hermoso, pequeño y caluroso humanamente, no dejes de escribirnos.</p>
					<p align="center" ><font color="white">www.amigoencamino.com</font></p>
					<p>Posada Ville Camille, es un lugar de encuentro, rodeado de naturaleza, con paisajes casi perfectos, un clima exquisito que oscila entre los 22 y 25 grados centígrados; la salida del sol se manifiesta a las 5:17 y la puesta del sol a las 17:49 horas, en verano su clima es con sol constante y en el invierno algún chubasco y tormentas.</p>
					<p>Si realmente deseas visitarnos por un tiempo, 30 días o más coméntanos sobre su interés, la idea es que una vez concluida su visita alguna persona costarricense pueda hacerlo de la misma manera en su país de origen.</p>
					<p>Contamos con su habitación, y todas las comodidades de internet, televisión, lavado de ropa y compartir en familia; visitas a patrimonios, paseos en un ambiente tranquilo, paz y si su interés es aprender español, dese esta oportunidad.</p>
					<p>No estamos interesados en que haga ninguna derogación económica, administre su dinero, haga sus compras de alimentación y llegamos a un arreglo por su permanencia en el país de manera económica y acorde a su bolsillo.</p>		
					<p>Costa Rica, país de aventura y sueños, terminara con nostalgia al saber que deja un pedacito de su corazón en nuestro terruño, atrévase a diseñar su viaje y pensar cómo podría recibir a un costarricense en su hogar, el tiempo corre y recuerde recibimos gente de 0 a 100 años, su edad es un asunto del destino.</p>
					<p>Hablamos inglés, portugués, ruso y castellano, entra en nuestro mundo de aventura y en nuestro nido de encuentro, deposita un poco tuyo para expandir deseos de amistad, solidaridad y caminar de la mano en la práctica de los Derechos Humanos.</p>
					<p>Gracias por preferirnos… tendrá un amigo en camino, San José de la Montaña te espera!!!</p>
					<br>
				</div>
			   </font>
			</div>

			<div><p class="espacio">.  </p></div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 parrafo3"><!--Formulario-->
			<!--<div>-->
				<center><font><h1>Gracias por contactarnos, en breve le responderemos</h1></font></center>
			</div><!--Formulario-->
			
			<div><p class="espacio">.  </p></div>
				<div> <!--Carrousel-->
					<div align="center" id="myCarousel" class="carousel slide col-xs-12 hidden-sm col-md-12 col-lg-12" data-ride="carousel">		
						<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active animated fadeInLeft">
									<img src="../img/contactenos/Cartin & Ernie 1993 ECC_m.jpg" class="carimg"
									data-darkbox="../img/contactenos/Cartin & Ernie 1993 ECC_m.jpg"
									data-darkbox-description="<b>Cartin & Ernie 1993</b> ">
								</div>
								<div class="item animated fadeInLeft">
									<img src="../img/contactenos/Caída Catarata, Ernie, 2011_2m.jpg" class="carimg"
									data-darkbox="../img/contactenos/Caída Catarata, Ernie, 2011_2m.jpg"
									data-darkbox-description="<b>Caída Catarata, Ernie, 2011</b> ">
								</div>
								<div class="item animated fadeInLeft">
									<img src="../img/contactenos/Corazón de León_3m.jpg" class="carimg"
									data-darkbox="../img/contactenos/Corazón de León_3m.jpg"
									data-darkbox-description="<b>Corazón de León</b> ">
								</div>
								<div class="item animated fadeInLeft">
									<img src="../img/contactenos/Ernie Deck_4m.jpg" class="carimg"
									data-darkbox="../img/contactenos/Ernie Deck_4m.jpg"
									data-darkbox-description="<b>Ernie Deck</b> ">
								</div>
								<div class="item animated fadeInLeft">
									<img src="../img/contactenos/Ernie piedras Catarata, 2011_5m.jpg" class="carimg"
									data-darkbox="../img/contactenos/Ernie piedras Catarata, 2011_5m.jpg"
									data-darkbox-description="<b>Ernie piedras Catarata, 2011</b> ">
								</div>
								<div class="item animated fadeInLeft">
									<img src="../img/contactenos/Iron Maiden airplane_6m.jpg" class="carimg"
									data-darkbox="../img/contactenos/Iron Maiden airplane_6m.jpg"
									data-darkbox-description="<b>Iron Maiden airplane</b> ">
								</div>								
								<div class="item animated fadeInLeft">
									<img src="../img/contactenos/1985 con Ignacio Carballo lectura texto en Tibasm.jpg" class="carimg"
									data-darkbox="../img/contactenos/1985 con Ignacio Carballo lectura texto en Tibasm.jpg"
									data-darkbox-description="<b>1985 con Ignacio Carballo lectura texto</b> ">
								</div>								
							</div>
							<!-- Left and right controls -->
										<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>	
						</div>

				</div><!--Carrousel-->				
		  </div>
		  
        </div>
		
				<br class="hidden-xs">
				<br class="hidden-xs">
				<br class="hidden-xs">
    </div><!-- /.container -->
	<div><p class="espacio">.  </p></div>
	<footer>
		<div class="col-sm-12 pie">
			<div align="center" class="col-sm-4">
				Diseñado por Samuel Amey	
			</div>
			<div align="center" class="col-sm-4">
				Derechos Reservados ® 2016	
			</div>
			<div align="center" class="col-sm-4">
				Ernie Camacho-Soto	
			</div>	
		</div> 
	</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/darkbox.js"></script>
  </body>
</html>

