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
			</ul>
		</nav>
		<section class="central filters">
			<h2>Congresistas por Lima<span></span></h2>
			<nav class="right_elements">
				<div class="wrapper">
					<ul class="select">
						<li><p class="princ">Escoge Congresista</p></li>
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
				<header>
					<ul class="tabs">
						<li class="activo" rel="categoria1"><span class="fa fa-map-marker" id="tab1"></span> Lima</li>
						<li rel="categoria2"><span class="fa fa-map-marker" id="tab2"></span> Aledaño 1</li>
						<li rel="categoria3"><span class="fa fa-map-marker" id="tab3"></span> Aledaño 2</li>
						<li rel="categoria4"><span class="fa fa-map-marker" id="tab4"></span> Aledaño 3</li>
						<li>
							<div class="wrapper">
								<ul class="select">
									<li><p class="princ">Escoge otra ciudad</p></li>
									<li><p>Categoría 5</p></li>
									<li><p>Categoría 6</p></li>
									<li><p>Categoría 7</p></li>
									<li><p>Categoría 8</p></li>
									<li><p>Categoría 9</p></li>
								</ul>
								<span class="fa fa-caret-down launcher1" ></span>
							</div>
						</li>
					</ul>
				</header>
				<div class="true_central">
					<!--<article class="publicidad_up">
						
					</article>-->
					<div class="map_">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31214.62497624788!2d-77.0451853!3d-12.0553442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8db1e539667%3A0x4f45538aa07bda29!2zTGltYSwgUGVyw7o!5e0!3m2!1ses!2s!4v1422675432356" width="690" height="300" frameborder="0" style="border:0"></iframe>
					</div>
					<nav class="filtrar">
						<!--<p class="checkar"> Filters <span class="fa">&nbsp;</span></p>-->
						<input type="text" class="fa" placeholder="&#xf02c; Buscar" />
					</nav>
					<ul class="tabular_data" id="categoria1">
						<li>
							<p class="firstdata">
								<strong>a</strong>
								<span>Lima</span>
							</p>
							<div class="conten_data">
								<p class="personal">
									<a href="#" class="normal_">Carlos Bruce Montes de Oca</a> 
								</p>
								<p><strong class="direction">Congresista 1</strong></p>
							</div>
							<p class="simple"></p>
							<a href="" class="buto">Detalles</a>
						</li>
						<li>
							<p class="firstdata">
								<strong>b</strong>
								<span>Lima</span>
							</p>
							<div class="conten_data">
								<p class="personal">
									<a href="#" class="normal_">Carlos Bruce Montes de Oca</a> 
								</p>
								<p><strong class="direction">Congresista 2</strong></p>
							</div>
							<p class="simple"></p>
							<a href="" class="buto">Detalles</a>
						</li>
						<li>
							<p class="firstdata">
								<strong>c</strong>
								<span>Lima</span>
							</p>
							<div class="conten_data">
								<p class="personal">
									<a href="#" class="normal_">Carlos Bruce Montes de Oca</a> 
								</p>
								<p><strong class="direction">Congresista 3</strong></p>
							</div>
							<p class="simple"></p>
							<a href="" class="buto">Detalles</a>
						</li>
						<li>
							<p class="firstdata">
								<strong>d</strong>
								<span>Lima</span>
							</p>
							<div class="conten_data">
								<p class="personal">
									<a href="#" class="normal_">Carlos Bruce Montes de Oca</a> 
								</p>
								<p><strong class="direction">Congresista 4</strong></p>
							</div>
							<p class="simple"></p>
							<a href="" class="buto">Detalles</a>
						</li>
						
						
					</ul>
					
					<!--<ul class="paginacion">
						<li><a href="#">< Anterior</a></li>
						<li><a href="#" class="activo">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
						<li><a href="#">9</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">Siguiente ></a></li>
					</ul>-->
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
					<img src="assets/images/escudo.png" alt="" class="bruce" />
					<h4>Región Lima</h4>
					
				</article>
				<!--<article>
					<header><h3>Carlos Bruce Datos</h3></header>
					<ul class="links">
						<li><a href="http://www.congreso.gob.pe/congresista/2011/cbruce/cargos.asp"><span class="fa fa-chain"></span>Website</a></li>
						<li><a href="cbruce@congreso.gob.pe"><span class="fa fa-envelope"></span>Correo</a></li>
						<li><a href="#"><span class="fa fa-map-marker"></span>Jr. Junín 330, Oficina 203</a></li>
					</ul>
				</article>-->
				<article class="categoria1_">
					<header><h3>Problemática 1</h3></header>
					<ul class="links">
						<li><a href="#"><span class="fa fa-outdent"></span>Website</a></li>
						<li><a href="#" class="atrib">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
					</ul>
				</article>
				<article class="categoria2_">
					<header><h3>Problemática 2</h3></header>
					<ul class="links">
						<li><a href="#"><span class="fa fa-outdent"></span>Website</a></li>
						<li><a href="#" class="atrib">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
					</ul>
				</article>
				<article class="categoria3_">
					<header><h3>Problemática 3</h3></header>
					<ul class="links">
						<li><a href="#"><span class="fa fa-outdent"></span>Website</a></li>
						<li><a href="#" class="atrib">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
					</ul>
				</article>
				<article class="categoria4_">
					<header><h3>Problemática 4</h3></header>
					<ul class="links">
						<li><a href="#"><span class="fa fa-outdent"></span>Website</a></li>
						<li><a href="#" class="atrib">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
					</ul>
				</article>
				<article class="fold">
					<span class="fa fa-file folda"></span>
					<h4>Problemática puntual Lima</h4>
					<p>Informe</p>
					<a href="#" class="to_list">Descargar</a>
				</article>
				<!--<article class="publicidad">-->
					
				</article>
			</section>
		</div>
	</body>
</html>