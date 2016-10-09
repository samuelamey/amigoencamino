<?php
if(isset($_GET['email'])) {

$email_to = "admin@amigoencamino.com, amy@amigoencamino.com"; 
$email_subject = "amigoencamino information contact";

if(!isset($_GET['name']) ||
!isset($_GET['numero']) ||
!isset($_GET['email']) ||
!isset($_GET['comments'])) {

echo "<b>Error, the form has not been send. </b>";
echo "<b>Please, return to the last page<br/>";
die();
}

$email_message = "Contact information details:\n\n";
$email_message .= "Name: " . $_GET['name'] . "\n";
$email_message .= "Phone: " . $_GET['numero'] . "\n";
$email_message .= "Email: " . $_GET['email'] . "\n";
$email_message .= "Comments and reservations: " . $_GET['comments'] . "\n\n";

$email_from = 'administrador <admin@amigoencamino.com>';

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Contact us</title>
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
			<a href="../contactenos.html"><img src="../img/img/spainflag.png" width="30px" alt="Español"></a>Español
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
							<li><a href="http://www.amigoencamino.com/index_en.html">Home</a></li>
							<li><a href="http://www.amigoencamino.com/arteygaleria.html">Art and Gallery</a></li>
							<li><a href="http://www.amigoencamino.com/villecamilehostel.html">Ville Camille Hostel</a></li>
							<li><a href="http://www.amigoencamino.com/derechoshumanos.html">Human Rights</a></li>
							<li><a href="http://www.amigoencamino.com/radiobarva.html">Barva Radio</a></li>
							<li class="active"><a href="http://www.amigoencamino.com/contact_us.html">Contact us</a></li>
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
					</div>
			</div>
          <div class="col-sm-8 col-md-9">
			<div class="hidden-xs col-sm-12 col-md-12 col-lg-12 text-justify parrafo3">
			  <font>
				<center><font><h1>SWITCHING WITH COSTA RICA</h1></font></center>
				<p>When your desire is to descover a small but wonderful, cordial and hospitable country do not hesitate to write to </p>
				<p align="center" ><font color="white">www.amigoencamino.com</font></p>
				<p>Hosting lodge Ville Camille is a place for lovely living surrounded by virgin Nature and beautiful lanscapes. The lodge is situated some1500 m over the sea level, so, nevertheless the climate is tropical,  we have a mild temperature range: from +16-18 centigrades at nights  to +22-25 centigrades at daytime all over the year . There are two seasons in the country: a dry (dicember to june)  and a rainy (july to november) stations. Costa Rica locates near the equatorial line that`s why daylight and the darkness last almost the same period – 12 hours. The sunrise is at 5:17 and the sunset is at 17:49.</p>
				<p>You will count on a clean room with all comodities,  free Internet, Wi-Fi, Skype, Cable TV, lavandery, room cleaning and access to the kitchen. First breakfast is free too.</p>
				<p>We speak Spain, Portugese, English and Russian. You may use the library in all theese languages.</p>
				<p>Your stay may result as adventurous or quietly pacifiс -  as you wish. We recieve small groups, families with children, lonely persons. No age restriction at all.</p>		
				<p>You are invited to design your vacations: schedule, places to see, adventures to experiment, excursions, etc.</p>
				<p>Program your visits to all kinds of sightseeing, adventures available in the country.</p>
				<p>If your wish is to stay here for a reasonably long time – 30 days or longer – comment on your possible interest of touristic interchange (if costarricans may pay you a reciprocal visit).We are offering you an economic option of touring, besides, you will administrate your money by yourself, will have the free will to make your own shoppings.</p>
				<p>The price is  according to the points of interest negotiated  to your satisfaction. Come and enjoy our beautiful peaceful country. Let it under your skin! We are sure you will leave a piece of your heart here...</p>
				<p>Thanks to your preference chosing us, have a good friend on your way. San Jose de la Montana waits for you!</p>
				<br>
			   </font>
			</div>

				<div class="hidden-sm hidden-md hidden-lg text-justify parrafo3">
			  	<font>
				<center data-toggle="collapse" data-target="#int"><font><h1>SWITCHING WITH COSTA RICA <h5 class="glyphicon glyphicon-menu-down"></h5></h1></font></center>
				<div id="int" class="collapse">
					<p>When your desire is to descover a small but wonderful, cordial and hospitable country do not hesitate to write to </p>
					<p align="center" ><font color="white">www.amigoencamino.com</font></p>
					<p>Hosting lodge Ville Camille is a place for lovely living surrounded by virgin Nature and beautiful lanscapes. The lodge is situated some1500 m over the sea level, so, nevertheless the climate is tropical,  we have a mild temperature range: from +16-18 centigrades at nights  to +22-25 centigrades at daytime all over the year . There are two seasons in the country: a dry (dicember to june)  and a rainy (july to november) stations. Costa Rica locates near the equatorial line that`s why daylight and the darkness last almost the same period – 12 hours. The sunrise is at 5:17 and the sunset is at 17:49.</p>
					<p>You will count on a clean room with all comodities,  free Internet, Wi-Fi, Skype, Cable TV, lavandery, room cleaning and access to the kitchen. First breakfast is free too.</p>
					<p>We speak Spain, Portugese, English and Russian. You may use the library in all theese languages.</p>
					<p>Your stay may result as adventurous or quietly pacifiс -  as you wish. We recieve small groups, families with children, lonely persons. No age restriction at all.</p>		
					<p>You are invited to design your vacations: schedule, places to see, adventures to experiment, excursions, etc.</p>
					<p>Program your visits to all kinds of sightseeing, adventures available in the country.</p>
					<p>If your wish is to stay here for a reasonably long time – 30 days or longer – comment on your possible interest of touristic interchange (if costarricans may pay you a reciprocal visit).We are offering you an economic option of touring, besides, you will administrate your money by yourself, will have the free will to make your own shoppings.</p>
					<p>The price is  according to the points of interest negotiated  to your satisfaction. Come and enjoy our beautiful peaceful country. Let it under your skin! We are sure you will leave a piece of your heart here...</p>
					<p>Thanks to your preference chosing us, have a good friend on your way. San Jose de la Montana waits for you!</p>
					<br>
				</div>
			   </font>
			</div>

			<div><p class="espacio">.  </p></div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 parrafo3"><!--Formulario-->
			<!--<div>-->
				<center><font><h1>Thanks, we are going to contact you as soon as possible. </h1></font></center>
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
				Design by Samuel Amey	
			</div>
			<div align="center" class="col-sm-4">
				Copyright ® 2016	
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

