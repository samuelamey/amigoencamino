<?php
if(isset($_GET['email'])) {

$email_to = "admin@amigoencamino.com, amy@amigoencamino.com"; 
$email_subject = "Друг информация о пути контакта";

if(!isset($_GET['name']) ||
!isset($_GET['numero']) ||
!isset($_GET['email']) ||
!isset($_GET['comments'])) {

echo "<b>Ошибка, форма не была отправлена. </b>";
echo "<b>Пожалуйста, вернитесь на последнюю страницу<br/>";
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
<html lang="ru">
  <head>
	<title>Свяжитесь с нами</title>
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
			<a href="../contact_us.html"><img src="../img/img/usaflag.png" width="30px" alt="English"></a>English
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
							<li><a href="../index_ru.html">инициирование</a></li>
							<li><a href="../arteygaleria.html">Искусство и Галерея</a></li>
							<li><a href="../villecamile_ru.html">Посада Ville Camille</a></li>
							<li><a href="../derechoshumanos.html">Права человека</a></li>
							<li><a href="../radiobarva.html">Радио Barva</a></li>
							<li class="active"><a href="../contact_ru.html">Свяжитесь с нами</a></li>							
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
					</div>
			</div>
          <div class="col-sm-8 col-md-9">
			<div class="hidden-xs col-sm-12 col-md-12 col-lg-12 text-justify parrafo3">
			  <font>
				<center><font><h1>ОБМЕН С КОСТА-РИКОЙ</h1></font></center>
				<p>Когда захочетия тебе посетить  маленькую, зато чудесную, приветливую, доброжелательную страну, не раздумывай и пиши нам на </p>
				<p align="center" ><font color="white">www.amigoencamino.com</font></p>
				<p>Хосталь Вилья Камиль – очаровательное место, окруженное первозданной природой и с восхитительным ланшафтом. Дом расоложен на 1500 м над уровнем моря, так что, несмотря на тропический климат, температурные колебания круглый год слегка варьируются от +16-18 по ночам до +22-25 градусов. У нас всего два времени года: сухой сезон(с декабря по июнь) и влажный (с июля по по ноябрь). Коста Рика находится почти на экваторе и потому световая длительность  дня и ночи почти одинакова – по 12 часов. Восход солнца в 5:17, а заход в 17:49 (и к 18:00 уже темно). Бесплатный первый завтрак.</p>
				<p>Если у вас есть возможность и/или желание прожить тут в течении 30 и более дней – может быть  вам приглянется идея обсудить обмен турвизитами (принять на свою  жилплощадь костариканцев - на время вашего пребывания здесь или в другое, удобное для вас время).</p>
				<p>В хостеле вас ждет комната со всеми удобствами и бесплатными: уборкой, смены постельного белья, полотенцами, горячим душем, прачечной, Интернетом и Wi-Fi, пользование кухней и некоторые другие моменты –детали уточняйте во время контакта с хозяевами.</p>
				<p>Общение может быть на испанском, португальском, английском или русском. В доме имеется библиотека на всех этих языках. Если вам захочется научиться испанским фразам – пользуйтесь моментом!</p>		
				<p>Принимаются небольшие группы, семьм с детьми и без, а также одиночные туристы.</p>
				<p>Польностью отсутствует возрастное ограничение -  приглашаем всех от 0 до 100 лет.</p>
				<p>Ваше время провождение может стать как мирным и по-семейному спокойным, так и разительно активным и приключенческим.</p>
				<p>Вы можете принять наши предложения или сами спрограмируете интересные мероприятия и маршруты.</p>
				<p>Наш интерес – дать людям возможность путешествовать в экономной форме. Деньгами будете распоряжаться сами по своему усмотрению. Можете сами делать закупки (сами можете готовить при желании).</p>
				<p>Стоимость  постоя и деталей проживания  обсуждается  для полного удовлетворения в каждом конкретном контракте. случае.</p>
				<p>Рискните приехать и не пожалеете! Мы уверены, что влюбитеь в нашу страну и, уезжая, оставите кусочек своего сердца у нас.  Навсегда вам запомнится Друг в путешествии! </p>
				<br>
			   </font>
			</div>

				<div class="hidden-sm hidden-md hidden-lg text-justify parrafo3">
			  	<font>
				<center data-toggle="collapse" data-target="#int"><font><h1>ОБМЕН С КОСТА-РИКОЙ<h5 class="glyphicon glyphicon-menu-down"></h5></h1></font></center>
				<div id="int" class="collapse">
					<p>Когда захочетия тебе посетить  маленькую, зато чудесную, приветливую, доброжелательную страну, не раздумывай и пиши нам на </p>
					<p align="center" ><font color="white">www.amigoencamino.com</font></p>
					<p>Хосталь Вилья Камиль – очаровательное место, окруженное первозданной природой и с восхитительным ланшафтом. Дом расоложен на 1500 м над уровнем моря, так что, несмотря на тропический климат, температурные колебания круглый год слегка варьируются от +16-18 по ночам до +22-25 градусов. У нас всего два времени года: сухой сезон(с декабря по июнь) и влажный (с июля по по ноябрь). Коста Рика находится почти на экваторе и потому световая длительность  дня и ночи почти одинакова – по 12 часов. Восход солнца в 5:17, а заход в 17:49 (и к 18:00 уже темно). Бесплатный первый завтрак.</p>
					<p>Если у вас есть возможность и/или желание прожить тут в течении 30 и более дней – может быть  вам приглянется идея обсудить обмен турвизитами (принять на свою  жилплощадь костариканцев - на время вашего пребывания здесь или в другое, удобное для вас время).</p>
					<p>В хостеле вас ждет комната со всеми удобствами и бесплатными: уборкой, смены постельного белья, полотенцами, горячим душем, прачечной, Интернетом и Wi-Fi, пользование кухней и некоторые другие моменты –детали уточняйте во время контакта с хозяевами.</p>
					<p>Общение может быть на испанском, португальском, английском или русском. В доме имеется библиотека на всех этих языках. Если вам захочется научиться испанским фразам – пользуйтесь моментом!</p>		
					<p>Принимаются небольшие группы, семьм с детьми и без, а также одиночные туристы.</p>
					<p>Польностью отсутствует возрастное ограничение -  приглашаем всех от 0 до 100 лет.</p>
					<p>Ваше время провождение может стать как мирным и по-семейному спокойным, так и разительно активным и приключенческим.</p>
					<p>Вы можете принять наши предложения или сами спрограмируете интересные мероприятия и маршруты.</p>
					<p>Наш интерес – дать людям возможность путешествовать в экономной форме. Деньгами будете распоряжаться сами по своему усмотрению. Можете сами делать закупки (сами можете готовить при желании).</p>
					<p>Стоимость  постоя и деталей проживания  обсуждается  для полного удовлетворения в каждом конкретном контракте. случае.</p>
					<p>Рискните приехать и не пожалеете! Мы уверены, что влюбитеь в нашу страну и, уезжая, оставите кусочек своего сердца у нас.  Навсегда вам запомнится Друг в путешествии! </p>
					<br>
				</div>
			   </font>
			</div>

			<div><p class="espacio">.  </p></div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 parrafo3"><!--Formulario-->
			<!--<div>-->
				<center><font><h1>Спасибо, мы будем связываться с Вами как можно скорее.</h1></font></center>
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
				Дизайн Samuel Amey		
			</div>
			<div align="center" class="col-sm-4">
				Все права зарегистрированы ® 2016	
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

