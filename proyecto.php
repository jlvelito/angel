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
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=266813750109071&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div id="audiac">
			<audio id="quintet">
				<source src="assets/sounds/click.mp3"></source>
			</audio>
		</div>
		<header class="inicial">
			<nav class="central">
				<ul>
					<!--<li><a href="#"><span class="fa fa-home"></span> home</a></li>-->
					<li><a href="#"><span class="fa fa-navicon"></span> Menú</a></li>
				</ul>
				<div class="inputs">
					<!--<input type="text" class="fa" placeholder="&#xf041; Plaats of postcode" />-->
					<input type="text" class="fa" placeholder="&#xf00b; Busca Congresista" />
					<input type="submit" class="fa" value="&#xf002;" />
				</div>
			</nav>
		</header>
		<nav class="central">
			<ul class="breadcrumb">
				<li><a href="index.php">Inicio</a></li>
				<li>></li>
				<li><a href="lima.php">Lima</a></li>
				<li>></li>
				<li><a href="congresista.php">Carlos Bruce</a></li>
				<li>></li>
				<li><a href="congresista.php">Proyecto de ley 1</a></li>
			</ul>
		</nav>
		<section class="central filters">
			<h2>Proyecto de ley 1 <span></span></h2>
			<nav class="right_elements">
				<div class="wrapper">
					<ul class="select">
						<li><p class="princ">Otros proyectos</p></li>
						<li><p>Congresista Lima 2</p></li>
						<li><p>Congresista Lima 3</p></li>
						<li><p>Congresista Lima 4</p></li>
						<li><p>Congresista Lima 5</p></li>
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
			<div class="left_stuff">
			<section class="contenidos">
				
				<div class="true_central">
					<!--<article class="publicidad_up">
						
					</article>
					<div class="map_">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31214.62497624788!2d-77.0451853!3d-12.0553442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8db1e539667%3A0x4f45538aa07bda29!2zTGltYSwgUGVyw7o!5e0!3m2!1ses!2s!4v1422675432356" width="690" height="300" frameborder="0" style="border:0"></iframe>
					</div>-->
					<nav class="filtrar">
						<!--<p class="checkar"> Filters <span class="fa">&nbsp;</span></p>
						<input type="text" class="fa" placeholder="&#xf02c; Buscar" />-->
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum tincidunt venenatis. Aliquam hendrerit, sapien vel interdum bibendum, nulla elit porta orci, sed venenatis nisl ipsum at magna. Quisque luctus auctor ipsum vel scelerisque. Nam ex sapien, ornare vel augue eu, hendrerit lobortis lorem. Donec mollis diam tortor, quis pharetra quam semper ac. Etiam euismod urna euismod, venenatis odio a, condimentum eros. Vestibulum blandit, velit nec sollicitudin posuere, lorem neque suscipit velit, vitae consequat dui ante at nisl.</p>
						<p>Praesent vitae mauris sit amet dolor porttitor suscipit at eu nisl. Fusce aliquam enim id lectus rutrum ultrices. Maecenas ipsum justo, molestie non augue ac, fermentum auctor tellus. Maecenas mattis libero odio, eu convallis magna suscipit eget. Suspendisse ut nisi et est volutpat feugiat. Suspendisse nec leo vestibulum, mattis turpis nec, fringilla massa. Donec molestie mauris et turpis ultricies porttitor. Suspendisse potenti.</p>
						<p>Donec sit amet eleifend ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc euismod pretium tellus, mattis ultricies lorem placerat a. Donec ut ultricies metus. Vivamus vel risus a tortor pulvinar facilisis. Nam nec suscipit augue, eget tempus diam. Integer viverra orci viverra metus efficitur aliquet.</p>
					</nav>
					
				</div>
				<header>
					<ul class="tabs">
						
						<li rel="categoria1">
							<div class="wrapper">
								<ul class="select">
									<li><p class="princ">Califica esta ley</p></li>
									<li><p>1</p></li>
									<li><p>2</p></li>
									<li><p>3</p></li>
									<li><p>4</p></li>
									<li><p>5</p></li>
								</ul>
								<span class="fa fa-caret-down launcher1" ></span>
							</div>
						</li>
					</ul>
				</header>
				<div class="separator">
				<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="10" data-width="703" data-colorscheme="light"></div>
				</div>
			</section>
			<aside class="footer">
				<h3>Sobre este sitio</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec imperdiet nisl, vel ultricies odio. Phasellus sollicitudin convallis aliquam. Mauris a quam libero. Sed facilisis tincidunt pretium. Nam vel massa a nibh faucibus porttitor sed a tellus. Ut aliquam quam vel enim consequat, commodo venenatis purus molestie. Nunc vitae leo eget leo lacinia malesuada sed eget risus. Morbi lacinia sagittis magna vitae laoreet. Etiam eleifend condimentum ligula at lobortis.</p>
				<h3>¿Quiéres apoyar?</h3>
				<p class="to_do">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec imperdiet nisl, vel ultricies odio. Phasellus sollicitudin convallis aliquam. Mauris a quam libero. Sed facilisis tincidunt pretium.</p>
				<a href="#" class="to_act">Suscríbete</a>
			</aside>
			</div>
			<section class="sidebar">
				<article class="present">
					<!--<span class="fa fa-spotify logocent"></span>-->
					<img src="assets/images/bruce.png" alt="" class="bruce" />
					<h4>Carlos Bruce</h4>
					<p class="thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis justo eu molestie facilisis. Integer quis libero ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis justo eu molestie facilisis. Integer quis libero ante.  </p>
				</article>
				<article>
					<header><h3>Carlos Bruce Datos</h3></header>
					<ul class="links">
						<li><a href="http://www.congreso.gob.pe/congresista/2011/cbruce/cargos.asp"><span class="fa fa-chain"></span>Website</a></li>
						<li><a href="cbruce@congreso.gob.pe"><span class="fa fa-envelope"></span>Correo</a></li>
						<li><a href="#"><span class="fa fa-map-marker"></span>Jr. Junín 330, Oficina 203</a></li>
					</ul>
				</article>
				<article class="fold">
					<span class="fa fa-file folda"></span>
					<h4>Carlos Bruce Montes de Oca</h4>
					<p>Biografía</p>
					<a href="#" class="to_list">Descargar</a>
				</article>
				<!--<article class="publicidad">-->
					
				</article>
			</section>
		</div>
	</body>
</html>