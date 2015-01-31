
<?php $avisar = $_GET['subsection']; ?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Organization">
  <head>
    <meta charset="utf-8">
    <title>JAC Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/compass/assets/css/normalize.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/theme/supersized.shutter.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/fonts.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/compass/assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAjsQXw5gakLn5CqMl41A2ENbilTmKZRIU&sensor=false"></script>
		<script type="text/javascript">

      $(document).ready(function(){
        <?php 
          if ($avisar==""){
            ?>

            $('html, body').animate({
              scrollTop: $("#container").offset().top
            }, 1000);

            <?php
          } else if($avisar=="modelos"){

            ?>

            $('html, body').animate({
                scrollTop: $('#modelos').offset().top
              }, 1000);

            <?php

          } else if($avisar=="consecionarios"){

            ?>

                      $('html, body').animate({
                        scrollTop: $('#consecionarios').offset().top
                      }, 1000);

            <?php

          }
        ?>
      	var markers = [];
      	var mapOptions = {
          center: new google.maps.LatLng(-12.1283168, -76.9766639),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("mapa"),
            mapOptions);

        		//creamos nuestro marcador
                var marcador = new google.maps.Marker({
                position: new google.maps.LatLng(-12.1283168, -76.9766639),
                map: map,
                title: 'Agencia Surco',
                animation: 'DROP'
                });
               markers.push(marcador);

               var marcador1 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.101894544551907, -77.01898004973754),
                map: map,
                title: 'Agencia Surquillo',
                animation: 'DROP'
                });
               markers.push(marcador1);

               var marcador2 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.078361623477296, -77.0885109589691),
                map: map,
                title: 'Agencia San Miguel',
                animation: 'DROP'
                });
               markers.push(marcador2);
               

               var marcador3 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.0639278, -76.99514599999998),
                map: map,
                title: 'Agencia Ate',
                animation: 'DROP'
                });
               markers.push(marcador3);

               var marcador4 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.005786947126776, -77.0593270852417),
                map: map,
                title: 'Agencia Independencia',
                animation: 'DROP'
                });
               markers.push(marcador4);
               

               var marcador5 = new google.maps.Marker({
                position: new google.maps.LatLng(-7.1455365, -78.51587870000003),
                map: map,
                title: 'Agencia Cajamarca',
                animation: 'DROP'
                });
               markers.push(marcador5);

               var marcador6 = new google.maps.Marker({
                position: new google.maps.LatLng(-7.833702199999999, -79.15874180000003),
                map: map,
                title: 'Agencia Piura',
                animation: 'DROP'
                });
               markers.push(marcador6);
               
               var marcador7 = new google.maps.Marker({
                position: new google.maps.LatLng(-6.776597400000001, -79.84429779999999),
                map: map,
                title: 'Agencia Chiclayo',
                animation: 'DROP'
                });
               markers.push(marcador7);
               
               var marcador8 = new google.maps.Marker({
                position: new google.maps.LatLng(-6.776597400000001, -79.84429779999999),
                map: map,
                title: 'Agencia Trujillo',
                animation: 'DROP'
                });
               markers.push(marcador8);
               
               var marcador9 = new google.maps.Marker({
                position: new google.maps.LatLng(-9.5261138, -77.5280055),
                map: map,
                title: 'Agencia Huaraz',
                animation: 'DROP'
                });
               markers.push(marcador9);
               
               var marcador10 = new google.maps.Marker({
                position: new google.maps.LatLng(-9.075839, -78.59924000000001),
                map: map,
                title: 'Agencia Chimbote',
                animation: 'DROP'
                });
               markers.push(marcador10);
               
               var marcador11 = new google.maps.Marker({
                position: new google.maps.LatLng(-9.936915599999999, -76.24538749999999),
                map: map,
                title: 'Agencia Huánuco',
                animation: 'DROP'
                });
               markers.push(marcador11);
               
               var marcador12 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.0554822, -75.22141239999996),
                map: map,
                title: 'Agencia Huancayo',
                animation: 'DROP'
                });
               markers.push(marcador12);
               
               var marcador13 = new google.maps.Marker({
                position: new google.maps.LatLng(-13.53195, -71.96746259999998),
                map: map,
                title: 'Agencia Cuzco',
                animation: 'DROP'
                });
               markers.push(marcador13);
               
               var marcador14 = new google.maps.Marker({
                position: new google.maps.LatLng(-16.4250937, -71.55644319999999),
                map: map,
                title: 'Agencia Arequipa',
                animation: 'DROP'
                });
               markers.push(marcador14);
               
               var marcador15 = new google.maps.Marker({
                position: new google.maps.LatLng(-6.4959644, -76.3678587),
                map: map,
                title: 'Agencia Tarapoto',
                animation: 'DROP'
                });
               markers.push(marcador15);
               
               var marcador16 = new google.maps.Marker({
                position: new google.maps.LatLng(-8.395541099999999, -74.59372280000002),
                map: map,
                title: 'Agencia Pucallpa',
                animation: 'DROP'
                });
               markers.push(marcador16);
               
               var marcador17 = new google.maps.Marker({
                position: new google.maps.LatLng(-18.0063537, -70.2465459),
                map: map,
                title: 'Agencia Tacna',
                animation: 'DROP'
                });
               markers.push(marcador17);
               
               var marcador18 = new google.maps.Marker({
                position: new google.maps.LatLng(-13.4347432, -76.1346102),
                map: map,
                title: 'Agencia Chincha',
                animation: 'DROP'
                });
               markers.push(marcador18);
               
               var marcador19 = new google.maps.Marker({
                position: new google.maps.LatLng(-15.4996879, -70.12965299999996),
                map: map,
                title: 'Agencia Puno',
                animation: 'DROP'
                });
               markers.push(marcador19);
               
               var marcador20 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.1000627, -77.01954109999997),
                map: map,
                title: 'Agencia San Isidro',
                animation: 'DROP'
                });
               markers.push(marcador20);
               
               var marcador21 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.0715437, -76.9818823),
                map: map,
                title: 'Agencia Ate',
                animation: 'DROP'
                });
               markers.push(marcador21);
               
               var marcador22 = new google.maps.Marker({
                position: new google.maps.LatLng(-12.0715437, -76.9818823),
                map: map,
                title: 'Carrocería y pintura',
                animation: 'DROP'
                });
               markers.push(marcador22);





               
                //ahora creamos nuestra ventana de información
                 var ventana = new google.maps.InfoWindow({
                 content: ""
                 });

                 google.maps.event.addListener(marcador, 'click', function() {
                 map.setCenter(marcador.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Cristóbal de Peralta Norte 1000, Santiago de Surco</p><p><strong>Teléfono:</strong> 713-5004</p></div>");
                 ventana.open(map, marcador);
                 });

                 google.maps.event.addListener(marcador1, 'click', function() {
                 map.setCenter(marcador1.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. República de Panamá s/n esq. con Aramburú, Surquillo</p><p><strong>Teléfono:</strong> 226-6616 / 713-5045</p></div>");
                 ventana.open(map, marcador1);
                 });

                 google.maps.event.addListener(marcador2, 'click', function() {
                 map.setCenter(marcador2.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. la Marina s/n (ex-feria del hogar) Mall Perú Tottus Sodimac, San Miguel</p><p><strong>Teléfono:</strong> 578-5080</p></div>");
                 ventana.open(map, marcador2);
                 });

                 google.maps.event.addListener(marcador3, 'click', function() {
                 map.setCenter(marcador3.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Nicolás Ayllón 2648, Ate</p><p><strong>Teléfono:</strong> 713-5325</p></div>");
                 ventana.open(map, marcador3);
                 });

                 google.maps.event.addListener(marcador4, 'click', function() {
                 map.setCenter(marcador4.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	C.C. Lima Plaza Norte Exhibición Expomotor Sótano, Independencia</p><p><strong>Teléfono:</strong> 533-5162</p></div>");
                 ventana.open(map, marcador4);
                 });

                 google.maps.event.addListener(marcador5, 'click', function() {
                 map.setCenter(marcador5.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Evitamiento Norte Cdra. 3 s/n</p><p><strong>Teléfono:</strong> (076) 343863</p></div>");
                 ventana.open(map, marcador5);
                 });

                 google.maps.event.addListener(marcador6, 'click', function() {
                 map.setCenter(marcador6.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Panamericana Norte Lote 2 Zona Industrial II</p><p><strong>Teléfono:</strong> (073) 603411</p></div>");
                 ventana.open(map, marcador6);
                 });

                 google.maps.event.addListener(marcador7, 'click', function() {
                 map.setCenter(marcador7.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. José Leonardo Ortiz 450 Urb. Los Parques</p><p><strong>Teléfono:</strong> (073) 325352</p></div>");
                 ventana.open(map, marcador7);
                 });

                 google.maps.event.addListener(marcador8, 'click', function() {
                 map.setCenter(marcador8.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Húsares de Junín 750</p><p><strong>Teléfono:</strong> (044) 607777</p></div>");
                 ventana.open(map, marcador8);
                 });

                 google.maps.event.addListener(marcador9, 'click', function() {
                 map.setCenter(marcador9.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Prolg. A. Raimondi 243</p><p><strong>Teléfono:</strong> (043) 422326</p></div>");
                 ventana.open(map, marcador9);
                 });

                 google.maps.event.addListener(marcador10, 'click', function() {
                 map.setCenter(marcador10.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Francisco Bolognesi 763</p><p><strong>Teléfono:</strong> (043) 326385</p></div>");
                 ventana.open(map, marcador10);
                 });

                 google.maps.event.addListener(marcador11, 'click', function() {
                 map.setCenter(marcador11.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Jr. Dos de Mayo Nº 627</p><p><strong>Teléfono:</strong> (062) 512866</p></div>");
                 ventana.open(map, marcador11);
                 });

                 google.maps.event.addListener(marcador12, 'click', function() {
                 map.setCenter(marcador12.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Jose Carlos Mariátegui 674, El Tambo</p><p><strong>Teléfono:</strong> (064) 247455</p></div>");
                 ventana.open(map, marcador12);
                 });

                 google.maps.event.addListener(marcador13, 'click', function() {
                 map.setCenter(marcador13.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Parque Industrial Wanchaw, Mz A, Lote 7</p><p><strong>Teléfono:</strong> (084) 233203</p></div>");
                 ventana.open(map, marcador13);
                 });

                 google.maps.event.addListener(marcador14, 'click', function() {
                 map.setCenter(marcador14.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Calle Alfonso Ugarte, cuadra 5, S/N</p><p><strong>Teléfono:</strong> 9892-31982 / 9587-98388</p></div>");
                 ventana.open(map, marcador14);
                 });

                 google.maps.event.addListener(marcador15, 'click', function() {
                 map.setCenter(marcador15.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Jiménez Pimentel 891</p><p><strong>Teléfono:</strong> (042) 523420</p></div>");
                 ventana.open(map, marcador15);
                 });

                 google.maps.event.addListener(marcador16, 'click', function() {
                 map.setCenter(marcador16.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Centenario 524</p><p><strong>Teléfono:</strong> (061) 593825</p></div>");
                 ventana.open(map, marcador16);
                 });

                 google.maps.event.addListener(marcador17, 'click', function() {
                 map.setCenter(marcador17.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Leguía 510, Tacna</p><p><strong>Teléfono:</strong> (052) 242415</p></div>");
                 ventana.open(map, marcador17);
                 });

                 google.maps.event.addListener(marcador18, 'click', function() {
                 map.setCenter(marcador18.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Carretera Panamericana 707. Chincha. Ica / Jr. Ayabaca 1180, CC Tienda 3L, Plaza Vea, Ica</p><p><strong>Teléfono:</strong> (056) 264697</p></div>");
                 ventana.open(map, marcador18);
                 });

                 google.maps.event.addListener(marcador19, 'click', function() {
                 map.setCenter(marcador19.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Jr.José Domingo Choquehuanca Mz. 'A' Lte. N°02, Juliaca</p><p><strong>Teléfono:</strong> (051) 325767</p></div>");
                 ventana.open(map, marcador19);
                 });

                 google.maps.event.addListener(marcador20, 'click', function() {
                 map.setCenter(marcador20.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. República de Panamá 3675, San Isidro</p><p><strong>Teléfono:</strong> 713-5000 Fax 422-7124</p></div>");
                 ventana.open(map, marcador20);
                 });

                 google.maps.event.addListener(marcador21, 'click', function() {
                 map.setCenter(marcador21.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Separadora Industrial 1291, Ate</p><p><strong>Teléfono:</strong> 713-5000 Fax 434-3800</p></div>");
                 ventana.open(map, marcador21);
                 });

                 google.maps.event.addListener(marcador22, 'click', function() {
                 map.setCenter(marcador22.getPosition());
                 ventana.setContent("<div class='ivi'><img class='infor_' src='<?php bloginfo('template_directory'); ?>/images/foton.png' alt='' /><p><strong>Dirección:</strong>	Av. Separadora Industrial 1291, Ate</p><p><strong>Teléfono:</strong> 713-5000 Fax 713-5038</p></div>");
                 ventana.open(map, marcador22);
                 });







                 //funcion que jala los clicks

                 $('#ventalima li a').click(function(event){
                 	event.preventDefault();
                 	$('#ventalima li a').removeClass('active');
                 	$(this).addClass('active');
                 	var marcando = $(this).attr('rel');
                 	var raiz = 'marcador';
                 	google.maps.event.trigger(markers[marcando], 'click');
                 });

                 $('#ventaprov li a').click(function(event){
                 	event.preventDefault();
                 	$('#ventaprov li a').removeClass('active');
                 	$(this).addClass('active');
                 	var marcando = $(this).attr('rel');
                 	var raiz = 'marcador';
                 	google.maps.event.trigger(markers[marcando], 'click');
                 });

                 $('#servlima li a').click(function(event){
                 	event.preventDefault();
                 	$('#servlima li a').removeClass('active');
                 	$(this).addClass('active');
                 	var marcando = $(this).attr('rel');
                 	var raiz = 'marcador';
                 	google.maps.event.trigger(markers[marcando], 'click');
                 });

                 $('#servprov li a').click(function(event){
                 	event.preventDefault();
                 	$('#servprov li a').removeClass('active');
                 	$(this).addClass('active');
                 	var marcando = $(this).attr('rel');
                 	var raiz = 'marcador';
                 	google.maps.event.trigger(markers[marcando], 'click');
                 });

      });
		</script>

	  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
	</head>
	<body class="indexada">



	<div id="container">
		
		<div id="header" class="secciones">
			<h1><a href="<?php bloginfo('url'); ?>">JAC MOTORS</a></h1>

			<div class="navegante">
			<ul class="social">
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="" /></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="" /></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="" /></a></li>
			</ul>
			<!--<ul class="main_nav" id="first">
				<li><a href="#">Empresa</a></li>
				<li><a href="#">Modelos</a></li>
				<li><a href="#">Consecionarios y locales</a></li>
				<li><a href="#">Servicio al cliente</a></li>
			</ul>-->
            <?php wp_nav_menu( array( 'theme_location' => 'primary',   'items_wrap'      => '<ul class="main_nav" id="first">%3$s</ul>' ) ); ?> 
			<a href="#contact_" class="cotizar" id="cotiza"><img src="<?php bloginfo('template_directory'); ?>/images/calc.png" alt="" />Cotizar</a>
			</div>
		</div>