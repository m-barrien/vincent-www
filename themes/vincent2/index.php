<?php 
get_header(); 
?>
<div class="ofertas-index-container"><!-- ofertas celu -->
	<div class="ofertas-index-header-line"></div>
	<div class="ofertas-index-header">
		<div class="col">
			OFERTAS
			
		</div>
	</div>
	<?php
	wp_reset_postdata();
    wp_reset_query();
    $args= array(
	'post_type' => array('oferta'),
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'meta_key'		=> 'featured',
	'orderby'		=> 'meta_value',
	'order'			=> 'DESC'
	);

	$loop = new WP_Query( $args );
	?>	
    <?php
    	$i=0;
		while ( $loop->have_posts() ) : $loop->the_post();
			$image = null;
				?>

					<?php
						if ($i==0) {
							get_template_part( 'template-parts/oferta-movil-index', 'single' ); 
						}
						else{
							get_template_part( 'template-parts/oferta-movil-index-lazy', 'single' ); 

						}
						$i +=1; 
						?>
					
				<?php

		endwhile;
		wp_reset_postdata();
        wp_reset_query();
	?>

</div> <!-- ofertas celu -->

<!-- VIDEO -->
<!-- 
<div class="w-100 video-container">
	<iframe class="lazy" src="" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" class="resizelistener" id="iframe39000" data-src="https://player.vimeo.com/video/356704763?&amp;autoplay=1&amp;muted=1&amp;loop=1?autoplay=0&amp;background=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=iframe39000&amp;api=1"></iframe>
	<div class="fullvideo-cover"></div>
</div>	
-->

<!-- SECCION 3 PAGINAS COVER DDE TGREEN -->
<div class="site-cover" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/covers/1.jpg');">

	<div class="swiper-container swiper-cover">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide">
	      	<div class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/1.jpg" >
		      	<h1 class="shrink-cover">
		      		¿Quiere ahorrar con energ&iacute;a solar?
		      	</h1>
	      		<div class="hidden-desc">
		      		<p>Dele a su hogar la capacidad de usar energía solar para las necesidades energéticas de su familia. Estudiaremos con usted la solución más adecuada.</p>
		      		<a href="/soluciones-hogar">Descubra nuestras soluciones</a>
	      			
	      		</div>
	      	</div>
	      </div>
	      <div class="swiper-slide">
	      	<div class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/2.jpg">
		      	<h1 class="shrink-cover">
		      		¿Grandes sistemas fotovoltaicos para la empresa?
		      	</h1>
	      		<div class="hidden-desc">
		      		<p>
		      			Dele a su empresa independencia energética y ahorre grandes cantidades de dinero. Juntos encontraremos la solución más adecuada para el consumo de energía de su negocio.
		      		</p>
		      		<a href="/soluciones-empresa">Pida nuestro consejo</a>
	      			
	      		</div>
	      	</div>
	      </div>
	      <div class="swiper-slide">
	      	<div class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/3.jpg">
		      	<h1 class="shrink-cover">
		      		¿Quiere aprovechar al m&aacute;ximo su sistema fotovoltaico?
		      	</h1>
		      	<div class="hidden-desc">
			      	<p>También estamos después! Con el servicio "1 año junto a usted", un grupo de técnicos supervisará la producción y el rendimiento económico de su sistema fotovoltaico. Nuestro deseo es permanecer a su lado incluso después de la instalación.</p>
		      		<a href="">Descubre más</a>
		      		
		      	</div>
	      	</div>
	      </div>
	    </div>
	</div>	

</div>


<!-- ofertas wide -->
<div class="container ofertas-wide-container-header">
	<section>
		<div class="col">
			<h3>Oferta</h3>
		</div>
	</section>
</div>
<div class="container-fluid">
	<section class="">
		<div class="col-md-12">
			<div class="swiper-container swiper-ofertas">
				<div class="swiper-wrapper">
				<?php
				wp_reset_postdata();
			    wp_reset_query();
			    $args= array(
				'post_type' => array('oferta'),
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'meta_key'		=> 'featured',
				'orderby'		=> 'meta_value',
				'order'			=> 'DESC'
				);

				$loop = new WP_Query( $args );
				?>	
			    <?php
			    	$i=0;
					while ( $loop->have_posts() ) : $loop->the_post();
						$image = null;
							?>

						<div class="swiper-slide">
							<div class="single-oferta-container">
								<h2><span>1.5 KW</span> solución fotovoltaica ongrid</h2>
								<div class="row">
									<div class="col-fotos">asdf</div>
									<div class="col-precio">
										<div class="oferta-index-bullets">
											<div class="bullet">
												<div class="bullet-image">
													<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
												</div>
												Instalación incluida
											</div>
											<div class="bullet">
												<div class="bullet-image">
													<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
												</div>
												5 Años de garantía
											</div>
											<div class="bullet">
												<div class="bullet-image">
													<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
												</div>
												Tramitación SEC
											</div>
											<div class="bullet">
												<div class="bullet-image">
													<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
												</div>
												Productos Europeos
											</div>
										</div>	
										<div class="oferta-wide-pricetag">
											2.300.000
										</div>									
									</div>
								</div>
							</div>
						</div>
								
							<?php

					endwhile;
					wp_reset_postdata();
			        wp_reset_query();
				?>

				</div>

				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>				
			</div>
		</div>
	</section>
</div>


<!-- porque elegirnos -->
<!--
<div class="container-fluid">
	<section id="porque-elegirnos" class="flex-container space-between bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/fade-paneles.png">
		<div class="col-md-5">
			<h1>¿Por qu&eacute; elegirnos?</h1>
			<p class="highlight">Queremos estar a su lado incluso después de instalar el sistema fotovoltaico y durante el tiempo que desee. Su objetivo de independencia energética es nuestro.</p>
		</div>
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/h-shake.png">
							<h3>Transparencia y Confianza</h3>
							<p>Nos encanta ser sinceros y directos en la comunicación y siempre decimos las cosas como son. La confianza en las relaciones es fundamental para nosotros.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/h-shake.png">
							<h3>Tenemos un sueño</h3>
							<p>Creemos que hacerse independiente de la energía es un derecho y una opción libre para todos.</p>					
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/h-shake.png">
							<h3>No tendr&aacute;s preocupaciones</h3>
							<p>Nuestra dedicación a la satisfacción del cliente no tiene comparación. Esta es la filosofía que nos ha guiado todos los días durante treinta años. No tendrás que preocuparte por nada.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/h-shake.png">
							<h3>Tambi&eacute;n estamos despu&eacute;s</h3>
							<p>Con nuestro servicio de posventa dedicado tendrá el respaldo necesario para garnatizar que su planta solar funcione a la perfección.</p>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>	
-->

<div class="container-fluid">
	<section id="how-we-work">
		<div class="col-sm-12">
			<h1>Cómo trabajamos...</h1>
			<p class="highlight">Estamos constantemente proyectados hacia el mañana.<br> Trabajamos todos los días pensando en su futuro, tal como lo hace con las personas que ama.</p>
		</div>
		<div class="col-sm-12">
			<section class="cloud-container bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/cloud-bg.png">
				<div class="swiper-container swiper-how-we-work">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/inspeccion.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="bar-container">
										<div class="bar"></div>
										<span class="bar-number">1</span>
									</div>
									<h1>Inspección</h1>
									<p class="highlight">Llevamos a cabo una inspección técnica cuidadosa de su hogar o su empresa, con el fin de extraer elementos de evaluación y juicio.</p>
								</div>
							</div>	
						</div>
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/contrato.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="bar-container">
										<div class="bar"></div>
										<span class="bar-number">2</span>
									</div>
									<h1>Acuerdo</h1>
									<p class="highlight">Juntos elegimos la mejor solución para su propiedad y nos encargamos de todos los trámites necesarios para iniciar el procedimiento.</p>
								</div>
							</div>	
						</div>
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/instalacion.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="bar-container">
										<div class="bar"></div>
										<span class="bar-number">3</span>
									</div>
									<h1>Instalación</h1>
									<p class="highlight">Diseñamos e instalamos el sistema de producción de energía limpia que es adecuado para usted, para ello está nuestro equipo de instaladores especializados.</p>
								</div>
							</div>	
						</div>
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/activacion.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="bar-container">
										<div class="bar"></div>
										<span class="bar-number">4</span>
									</div>
									<h1>Activación</h1>
									<p class="highlight">Nos aseguramos de que la conexión al suministro de electricidad sea correcta para poder contar la producción de su energía.</p>
								</div>
							</div>	
						</div>
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/despues.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="bar-container">
										<div class="bar"></div>
										<span class="bar-number">5</span>
									</div>
									<h1>También estamos después!</h1>
									<p class="highlight">Con nuestra garantía de 5 años está cubierto ante cualquier falla en el funcionamiento de su sistema solar.</p>
								</div>
							</div>	
						</div>

					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</section>
		</div>
	</section>
</div>

<!-- SECCION MAPA -->
<!--

<div class="container-fluid" id="gmap" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/covers/mapa.jpg');">
	<div class="proyectos">
		<div class="text-wrapper">
			<h2 class="shrink">Vincent Solar instala <span>soluciones solares</span> en todo Chile</h2>
			<div class="flex-container space-between" style="align-items: start;">
				<div class="button-container">
					<button>
						1034
					</button>
					<p>Sistemas fotovoltaicos en 6 años</p>
				</div>
				<div class="button-container">
					<button>
						29k
					</button>
					<p>m<sup>2</sup> de paneles fotovoltaicos en Chile</p>
				</div>
				<div class="button-container">
					<button>
						2.8k
					</button>
					<p> t de CO<sub>2</sub> evitada con los sistemas fotovoltaicos Vincent Solar</p>
				</div>
			</div>
		</div>
	</div>
	<section id="gmap-iframe">
		<iframe class="lazy" data-src="https://www.google.com/maps/d/u/0/embed?mid=127rBG1dGQN7SgGPHxe0oXfoQiH35qhlI"></iframe>
		
	</section>
</div>
-->

<!-- SECCION AHORRO ECONOMICO -->
<!--
<div class="container-fluid">
<?php
$datetime1 = new DateTime('2014-01-01');
$datetime2 = new DateTime('now');
$interval = $datetime1->diff($datetime2);
$elapsed_secs = $interval->days*86400 + $interval->h*3600 + $interval->i*60;
$factor_generacion=200.0*1750.0*(1.0/(365*24*60*60*365*24*60*59.9));
$factor_co2=409*$factor_generacion;
$co2_per_sec = $factor_co2*((($elapsed_secs+1)*($elapsed_secs+1)) - $elapsed_secs*$elapsed_secs);
?>
	<section id="generacion" class="bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/co2-min.png">
		<div class="col-sm-12">
			<h1>Reducción de CO2</h1>
			<p class="highlight">Gracias a los sitemas fotovoltaicos instalados por nosotros.</p>
		</div>
		<div class="numbers d-none">
			<?php echo $elapsed_secs*$elapsed_secs*$factor_co2; ?> gr co2 <br>
			<?php echo $elapsed_secs*$elapsed_secs*$factor_generacion; ?> kwh
		</div>
		<div class="col-sm-12 counter-container">
		            <div class="super-digit-group">
		            	<div class="digit-group">
			                <div class=" schermo schermo10">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_0.png" data-o="0" alt="numero">
			                    </div>
			                </div>
			                <div class="schermo schermo11">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_0.png" data-o="0" alt="numero">
			                    </div>
			                </div>
			                <div class="schermo schermo12">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_0.png" data-o="0" alt="numero">
			                    </div>
			                </div>

		            	</div>
		                <div style="clear: both"></div>
		                <h2>kt</h2>
		            </div>
		            <div class="super-digit-group">
		            	<div class="digit-group">
			                <div class="schermo schermo7">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_3.png" data-o="3" alt="numero">
			                    </div>
			                </div>
			                <div class="schermo schermo8">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_0.png" data-o="0" alt="numero">
			                    </div>
			                </div>
			                <div class="schermo schermo9">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_0.png" data-o="0" alt="numero">
			                    </div>
			                </div>

		            	</div>
		                <div style="clear: both"></div>
		                <h2>t</h2>
		            </div>
		            <div class="super-digit-group">
		            	<div class="digit-group">

			                <div class="schermo schermo4">
			                    <div class="numero" style="top: 0px;">
			                        
			                    <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_4.png"></div>
			                </div>
			                <div class="schermo schermo5">
			                    <div class="numero" style="top: 0px;">
			                        
			                    <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_7.png"></div>
			                </div>
			                <div class="schermo schermo6">
			                    <div class="numero" style="top: 0px;">
			                        
			                    <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_8.png"></div>
			                </div>
		            	</div>
		                <div style="clear: both"></div>
		                <h2>kg</h2>
		            </div>
		            <div class="super-digit-group">
		            	<div class="digit-group">

			                <div class="schermo schermo1">
			                    <div class="numero">
			                        <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_5.png" data-o="5" alt="numero">
			                    </div>
			                </div>
			                <div class="schermo schermo2">
			                    <div class="numero" style="top: 0px;">
			                        
			                    <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_3.png"></div>
			                </div>
			                <div class="schermo schermo3">
			                    <div class="numero" style="top: 0px;">
			                        
			                    <img class="lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mc_0.png"></div>
			                </div>
		            	</div>
		                <div style="clear: both"></div>
		                <h2>g</h2>
		            </div>
		</div>
		<div class="col-sm-12">
			<img class="d-block mx-auto lazy" style="padding-top:20px;height:auto;max-width: 110px;" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/logo_cgreen.png">
		</div>		
	</section>
</div>
-->
<!-- FEAT PRODUCTS -->
<div class="feat-prod w-100">
	<img class="img-fluid lazy" src="" data-src="<?php echo get_template_directory_uri() ?>/image/covers/featured-product.jpg">
</div>
<!-- FEAT PRODUCTS -->

<!-- SECCION VIDEOS -->
<div class="container">
	<section>
		<div class="col-sm-12">
			<h1>Videos</h1>
		</div>
	</section>
</div>
<div class="container-fluid">
	<section id="coleccion-videos" class="" data-src="<?php echo get_template_directory_uri() ?>/image/covers/fade-paneles.png">
	<?php
	wp_reset_postdata();
    wp_reset_query();
    $args= array(
	'post_type' => array('video'),
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'order'			=> 'DESC'
	);

	$loop = new WP_Query( $args );
	?>	
		<div class="swiper-container swiper-videos">
		    <div class="swiper-wrapper">
	    <?php
	    	$i=0;
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = null;
					?>	
			      <div class="swiper-slide">
			      	<div class="container">
			      		<div class="row">
			      			<div class="col-md-6">
								<iframe class="youtube-iframe swiper-lazy" src="" data-src="https://www.youtube-nocookie.com/embed/<?php echo get_post_meta($post->ID, 'youtube_code')[0] ; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			      			</div>
			      			<div class="col-md-6">
			      				<h2>
			      					<?php the_title(); ?>
			      				</h2>
			      				<p>
			      					<?php the_excerpt(); ?>
			      				</p>
			      			</div>
			      		</div>
			      		
			      	</div>
			      </div>
					<?php

			endwhile;
			wp_reset_postdata();
	        wp_reset_query();
		?>

		    </div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>	
	</section>
</div>


<div class="w-100 gray-bg">	
	<div id="noticias-full-container" class="container">
		<section class="noticias">
			<div class="ultimas-titulo">
				<h4>Manténgase al día con las noticias de Vincent Solar</h4>
				<h1>Últimas noticias</h1>
			</div>
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
			 
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
			 	
				get_template_part( 'template-parts/content-short', get_post_format() );
			 
				endwhile;
				wp_reset_postdata();
				wp_reset_query();
			?>

		</section>
	</div>
</div>
<?php get_footer(); ?>
