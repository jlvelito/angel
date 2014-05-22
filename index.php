<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <title>Prueba App</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/fonts/font.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
		<script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>	
		<!-- Add fancyBox -->
		
		<script type="text/javascript" src="assets/js/funciones.js"></script>	
	</head>
	<body>
		<header class="inicial">
			<nav class="central">
				<ul>
					<li><a href="#"><span class="fa fa-home"></span> home</a></li>
					<li><a href="#"><span class="fa fa-navicon"></span> meer</a></li>
				</ul>
				<div class="inputs">
					<input type="text" class="fa" placeholder="&#xf041; Plaats of postcode" />
					<input type="text" class="fa" placeholder="&#xf00b; Winkel of categorie" />
					<input type="submit" class="fa" value="&#xf002;" />
				</div>
			</nav>
		</header>
		<nav class="central">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li>></li>
				<li><a href="#">Supermarkten</a></li>
				<li>></li>
				<li><a href="#">Albert Heijn</a></li>
			</ul>
		</nav>
		<section class="central filters">
			<h2>Albert Heijn <span></span></h2>
			<nav class="right_elements">
				<div class="wrapper">
					<ul class="select">
						<li><p class="princ">Mjin Account</p></li>
						<li><p>Opción 1</p></li>
						<li><p>Opción 2</p></li>
						<li><p>Opción 3</p></li>
						<li><p>Opción 4</p></li>
						<li><p>Opción 5</p></li>
						<li><p>Opción 6</p></li>
					</ul>
					<span class="fa fa-caret-down launcher1"></span>
				</div>
				<ul class="social">
					<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</nav>
		</section>
		<div class="central">
			<section class="contenidos">
				<header>
					<ul class="tabs">
						<li class="activo"><span class="fa fa-map-marker" id="tab1"></span> Op de kaart</li>
						<li><span class="fa fa-book" id="tab2"></span> Op alfabet</li>
						<li><span class="fa fa-money" id="tab3"></span> Koopzondag</li>
						<li><span class="fa fa-moon-o" id="tab4"></span> Koopavond</li>
						<li>
							<div class="wrapper">
								<ul class="select">
									<li><p class="princ">Amsterdam</p></li>
									<li><p>Milan</p></li>
									<li><p>Praga</p></li>
									<li><p>Dublín</p></li>
									<li><p>Roma</p></li>
									<li><p>Londres</p></li>
									<li><p>Liverpool</p></li>
								</ul>
								<span class="fa fa-caret-down launcher1" ></span>
							</div>
						</li>
					</ul>
				</header>
			</section>
			<section class="sidebar">
				<article class="present">
					<span class="fa fa-spotify logocent"></span>
					<h4>Openingstijden Albert heijn</h4>
					<p class="thin">Lorem Ipsum Dolor Sit Amet consectetuer adispicing Donec pellentesque.</p>
					<p class="thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis justo eu molestie facilisis. Integer quis libero ante. </p>
				</article>
				<article>
					<header><h3>Albert Heijn Links</h3></header>
					<ul class="links">
						<li><a href="#"><span class="fa fa-spotify"></span>Assortiment</a></li>
						<li><a href="#"><span class="fa fa-spotify"></span>Bostchappen Bestellen</a></li>
						<li><a href="#"><span class="fa fa-spotify"></span>Allerhande</a></li>
						<li><a href="#"><span class="fa fa-spotify"></span>Bonus Aanbiedingen</a></li>
						<li><a href="#"><span class="fa fa-spotify"></span>Bonukaart Aanvragen</a></li>
					</ul>
				</article>
			</section>
		</div>
	</body>
</html>