<?php get_header(); ?>
		<div id="slider" class="secciones">
		<p id="prevo"><span class="fa fa-chevron-left"></span></p>
		<p id="nexto"><span class="fa fa-chevron-right"></span></p>
		<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pager=".ecycle-pager" data-cycle-timeout="6000" data-cycle-next="#nexto" data-cycle-prev="#prevo" data-cycle-auto-height="container" data-cycle-slides="> li">
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC B-CROSS</h2>
							<p>Cilindrada: 1,834 c.c.</p>
							<p>Aire acondicionado</p>
							<p>Tres filas de asientos para 7 ocupantes</p>
							<p>Neumáticos: 205/55R16</p>
							<p>Aros de aleación 16”</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/b-cross.png" alt="" />
						</div>
					</li>
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC A-0</h2>
							<p>Cilindrada: 999 c.c.</p>
							<p>Volante regulable en altura</p>
							<p>Asientos delanteros regulables en inclinación y profundidad</p>
							<p>Neumáticos: 165/65R14</p>
							<p>Aros de acero de 14”</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/a-0.png" alt="" />
						</div>
					</li>
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC A-CLASS S</h2>
							<p>Cilindrada: 1,332 c.c</p>
							<p>Aire acondicionado</p>
							<p>Luces de lectura de mapa</p>
							<p>Neumáticos: 175/65R14</p>
							<p>Aros de acero de 14”</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/aclass.png" alt="" />
						</div>
					</li>
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC A-CLASS HB</h2>
							<p>Cilindrada: 1,332 c.c</p>
							<p>Aire acondicionado</p>
							<p>Asiento posterior rebatible</p>
							<p>Neumáticos: 175/65R14</p>
							<p>Aros de acero de 14”</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/hb.png" alt="" />
						</div>
					</li>
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC SPAZIO</h2>
							<p>Cilindrada: 1,499 c.c</p>
							<p>Aire acondicionado</p>
							<p>Asiento del conductor regulable</p>
							<p>Neumáticos: 205/55R16</p>
							<p>Aros de aleación 16”</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/spazio.png" alt="" />
						</div>
					</li>
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC S5</h2>
							<p>Cilindrada: 1,997 c.c.</p>
							<p>Aire acondicionado</p>
							<p>Alzaluna del piloto con sistema one touch</p>
							<p>Neumáticos: 225/60 R17</p>
							<p>Espejos retrovisores rebatibles electrónicamente</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/s5.png" alt="" />
						</div>
					</li>
					<li>
						<div class="auto_movil">
						<div class="in_slide">
							<h2>JAC SUNRAY</h2>
							<p>Cilindrada: 2,771 c.c.</p>
							<p>Aire acondicionado</p>
							<p>lzalunas eléctricos delanteros (2)</p>
							<p>Neumáticos: 185/80 R15 (4 neumáticos posteriores)</p>
							<p>Aros de acero de 15” (4 neumáticos posteriores)</p>
							<span class="spin_it"></span>
						</div>
							
							<img src="<?php bloginfo('template_directory'); ?>/images/sunray.png" alt="" />
						</div>
					</li>
				</ul>

			<div class="social_slide">
				<!--<p>Compartenos en:</p>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook_s.png" alt="" /></a>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_s.png" alt="" /></a>-->

			</div>	
		</div>
		<div id="modelos" class="secciones">
			<div class="true">
				<h2>MODELOS <span>A continuación presentamos nuestra colección de modelos en venta. Todos con la calidad que nos caracteriza y el respaldo de DERCO.</span></h2>
				<ul class="productos">

          <?php
                    // The Query
                    $the_query = new WP_Query('category_name=autos');
                              while ( $the_query->have_posts() ) : $the_query->the_post();           
            ?>  
        
          

          <li>
            <?php the_post_thumbnail('news-thumbnail_jac'); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink() ?>" class="enlista">Características</a>
          </li>
          
        
         <?php
        wp_reset_postdata();
        //comments_template();
        

  endwhile; ?>

					
				</ul>
			</div>
		</div>

		<div id="consecionarios" class="secciones">
			<div class="true">
				<h2>RED JAC <span>Mantente alerta y siempre listo, conociendo nuestra red de concesionarios y talleres.</span></h2>


				<ul class="pestanas">
					<li class="active" id="uno" rel="venta">Ventas</li>
					<li id="dos" rel="servicio">Servicio Técnico</li>
				</ul>

				<div id="venta" class="locales">
					<p class="opciones_">
						<strong id="limaventa" rel="ventalima" class="active">Lima</strong>
						<strong id="interiorventa" rel="ventaprov">Provincias</strong>
					</p>
					<div class="separa_ven">
						<ul class="lugares" id="ventalima">
							<li><a href="#" rel="0" class="active">Surco</a></li>
							<li><a href="#" rel="1">Surquillo</a></li>
							<li><a href="#" rel="3">Ate</a></li>
							<li><a href="#" rel="2">San Miguel</a></li>
							<li><a href="#" rel="4">Independencia</a></li>
						</ul>
						<ul class="lugares" id="ventaprov">
							<li><a href="#" rel="5">Cajamarca</a></li>
							<li><a href="#" rel="6">Piura</a></li>
							<li><a href="#" rel="7">Chiclayo</a></li>
							<li><a href="#" rel="8">Trujillo</a></li>
							<li><a href="#" rel="9">Huaraz</a></li>
							<li><a href="#" rel="10" class="active">Chimbote</a></li>
							<li><a href="#" rel="11">Huánuco</a></li>
							<li><a href="#" rel="12">Huancayo</a></li>
							<li><a href="#" rel="13">Cuzco</a></li>
							<li><a href="#" rel="14">Arequipa</a></li>
							<li><a href="#" rel="15">Tarapoto</a></li>
							<li><a href="#" rel="16">Pucallpa</a></li>
							<li><a href="#" rel="17">Tacna</a></li>
							<li><a href="#" rel="18">Chincha</a></li>
							<li><a href="#" rel="19">Puno</a></li>
						</ul>
					</div>
				</div>
				<div id="servicio" class="locales">
					<p class="opciones_">
						<strong id="limaserv" rel="servlima" class="active">Lima</strong>
						<strong id="interiorserv" rel="servprov">Provincias</strong>
					</p>
					<div class="separa_ven">
						<ul class="lugares" id="servlima">
							<li><a href="#" rel="20" class="active">San Isidro</a></li>
							<li><a href="#" rel="21">Ate</a></li>
							<li><a href="#" rel="22">Centro de carrocería y pintura</a></li>
						</ul>
						<ul class="lugares" id="servprov">
							<li><a href="#" rel="5">Cajamarca</a></li>
							<li><a href="#" rel="6">Piura</a></li>
							<li><a href="#" rel="7">Chiclayo</a></li>
							<li><a href="#" rel="8">Trujillo</a></li>
							<li><a href="#" rel="9">Huaraz</a></li>
							<li><a href="#" rel="10" class="active">Chimbote</a></li>
							<li><a href="#" rel="11">Huánuco</a></li>
							<li><a href="#" rel="12">Huancayo</a></li>
							<li><a href="#" rel="13">Cuzco</a></li>
							<li><a href="#" rel="14">Arequipa</a></li>
							<li><a href="#" rel="15">Tarapoto</a></li>
							<li><a href="#" rel="16">Pucallpa</a></li>
							<li><a href="#" rel="17">Tacna</a></li>
							<li><a href="#" rel="18">Chincha</a></li>
							<li><a href="#" rel="19">Puno</a></li>
						</ul>
					</div>
				</div>
			</div>

		<div id="mapa">
			<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.8013509013786!2d-77.02015349999998!3d-12.125740199999978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8031488b9f1%3A0x67ff6d656385c1ed!2sAlfredo+Benavides+AV!5e0!3m2!1ses!2s!4v1399051778757" width="1000" height="650" frameborder="0" style="border:0"></iframe>-->
		</div>

		</div>
		<?php get_footer(); ?>
