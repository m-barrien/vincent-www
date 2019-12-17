<?php 
get_header(); 
?>
<div class="ofertas-index-container"><!-- ofertas celu -->
	<div class="ofertas-index-header-line"></div>
	<div class="ofertas-index-header">
	</div>
	<?php
	wp_reset_postdata();
    wp_reset_query();
    $args= array(
	'post_type' => array('oferta'),
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'meta_key'		=> 'price',
	'orderby'		=> 'meta_value',
	'order'			=> 'ASC'
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
							get_template_part( 'template-parts/oferta-movil-index', 'single' ); 

						}
						$i +=1; 
						?>
					<div class="ofertas-index-header-line my-4"></div>
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
	      	<a href="/soluciones-hogar" class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/1.jpg" >
		      	<h1 class="shrink-cover">
		      		¿Quiere ahorrar con energ&iacute;a solar?
		      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      	</h1>
	      		<div class="hidden-desc">
		      		<p>Ahorro inmediato sobre su cuenta de luz. Es una inversión para Ud. y su familia. Cuidamos el medio ambiente.</p>
		      		<button >Descubra nuestras soluciones</button>
	      			
	      		</div>
	      	</a>
	      </div>
	      <div class="swiper-slide">
	      	<a href="/soluciones-empresa" class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/2.jpg">
		      	<h1 class="shrink-cover">
		      		¿Quiere maximizar la productividad de su empresa?
		      	</h1>
	      		<div class="hidden-desc">
		      		<p>
		      			Juntos encontraremos la solución más adecuada para el consumo de energía de su negocio.
		      		</p>
		      		<button>Pida nuestro consejo</button>
	      			
	      		</div>
	      	</a>
	      </div>
	      <div class="swiper-slide">
	      	<a href="mailto:info@vincentsolar.com" class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/3.jpg">
		      	<h1 class="shrink-cover">
		      		¿Quiere aprovechar al máximo su sistema solar?
		      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      	</h1>
		      	<div  class="hidden-desc">
			      	<p>Ofrecemos kits diseñados a la medida en soluciones fotovoltaicas y térmicas para su abastecimiento de electricidad y gas.</p>
		      		<button>Contactactanos</button>
		      		
		      	</div>
	      	</a>
	      </div>
	    </div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>				
	</div>	

</div>

<!-- ofertas wide -->
<div class="ofertas-wide">
	<div class="swiper-container swiper-ofertas">
		<div class="swiper-wrapper">
		<?php
		wp_reset_postdata();
	    wp_reset_query();
	    $args= array(
		'post_type' => array('oferta'),
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'meta_key'		=> 'price',
		'orderby'		=> 'meta_value',
		'order'			=> 'ASC'
		);

		$loop = new WP_Query( $args );
		?>	
	    <?php
	    	$i=0;
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = null;
					?>

				<div class="swiper-slide">
					<?php get_template_part( 'template-parts/oferta-wide', 'single' ); ?>
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

<!-- Banner a seccion de hogar -->
<div class="container-fluid">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-inicio-1.jpg">
		<img class="favicon lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/favicon.png">
		<div class="half-banner-body right">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-inicio-1.jpg">
			</div>						
			<div class="w-100">
				<h1>
					La energía solar es fácil con Vincent Solar.
				</h1>
				<p>
					Con más de 30 años en el rubro a nivel internacional, somos expertos en soluciones residenciales y empresariales.
				</p>
				<a class="orange-with-arrow" href="/soluciones-hogar">Más sobre energía solar</a>
			</div>
		</div>
	</section>
</div>
<!-- Banner a seccion de hogar -->

<div class="container-fluid">
	<section id="how-we-work">
		<div class="col-sm-12 py-3">
			<h1 class="section-header">Cómo trabajamos...</h1>
			<p class="highlight">Estamos comprometidos con entregar la mejor solución para sus necesidades.</p>
			
		</div>
		<div class="col-sm-12">
			<section class="cloud-container">
				<div class="swiper-container swiper-how-we-work">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy bubble-img" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/inspeccion.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="step-container">
										<span class="bar-number">Paso 1</span>
									</div>
									<h1>Inspección &amp; Oferta</h1>
									<p class="highlight">Revisamos los detalles de la factibilidad ofreciendo asesoria para su instalación. Explicamos los detalles y el tipo de soluciones que vamos a implementar considerando la necesidad del cliente.</p>
								</div>
							</div>	
						</div>

						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy bubble-img" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/instalacion.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="step-container">
										<span class="bar-number">Paso 2</span>
									</div>
									<h1>Instalación</h1>
									<p class="highlight">Instalamos con el más alto estándar de certificación a nivel nacional e internacional. Nuestros clientes siempre recomiendan nuestro servicio por su eficiencia.</p>
								</div>
							</div>	
						</div>
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy bubble-img" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/activacion.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="step-container">
										<span class="bar-number">Paso 3</span>
									</div>
									<h1>¡Hecho!</h1>
									<p class="highlight">
										Disfruta de la energía más limpia del mundo.
										<span style="color: transparent;">
											Disfruta de la energía más limpia del mundo.
											Disfruta de la energía más limpia del mundo.
										</span>
									</p>
								</div>
							</div>	
						</div>
						<div class="swiper-slide">
							<div class="how-we-work-slide">
								<div class="img-container">
									<div class="img-wrapper">
										<img class="swiper-lazy bubble-img" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAQAAAD8IX00AAAADklEQVR42mNkAANGFAoAAD8ABLZPixAAAAAASUVORK5CYII=" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/despues.jpg">
										<div class="swiper-lazy-preloader"></div>
									</div>
								</div>
								<div class="text-container">
									<div class="step-container">
										<span class="bar-number">Paso 4</span>
									</div>
									<h1>Soporte &amp; posventa</h1>
									<p class="highlight">Nuestra garant&iacute;a  <i>World-Class</i> es de 5 años sobre la instalación, lider en el mercado, ofrecemos asesoría y soporte a todos nuestros clientes.</p>
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


<!-- Banner a calidad productos -->
<div class="container-fluid">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-inicio-2.jpg">
		<img class="favicon right lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/favicon.png">
		<div class="half-banner-body">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-inicio-2.jpg">
			</div>								
			<div class="w-100">
				<h1>
					La mejor solución para tu necesidad
				</h1>
				<p>
					Vincent Solar es sinónimo de calidad en todos los productos, trabajando con prestigiosas marcas y equipamiento que hacen posible nuestra garantía <i>World-Class</i> por 5 años sobre su instalación.
				</p>
				<a class="orange-with-arrow" href="/soluciones-hogar">Conozca más sobre nuestros equipos </a>
			</div>
		</div>
	</section>
</div>
<!-- Banner a calidad productos -->
<div class="gallery-container in-main-page">
	<h1>Algunos <strong>proyectos</strong> realizados</h1>
	<h2 class="pt-2">Residenciales</h2>
	<div class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'desc',
			        'posts_per_page' => '-1',
			        'post_status'    => 'inherit',
			        'category_name'=>'hogar',
			         );

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
				$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="thumbnail" ); 
					?>
				<a class="gallery-img-wrapper" href="<?php echo $image[0]; ?>" data-sub-html="<h4><?php the_title(); ?></h4>">
					<img class="d-none lazy" data-src="<?php echo $image_thumb[0]; ?>">
					<div class="gallery-image bg-lazy" data-src="<?php echo $image_thumb[0]; ?>" hd-src="<?php echo $image[0]; ?>">
						
					</div>
					<p class="gallery-title">
						<?php echo mb_strimwidth(get_the_title(), 0, 33, '...');?>
					</p>
				</a>

				<?php
			endwhile;				    
			?>			
	</div>
	<h2 class="pt-2">Empresas</h2>
	<div class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'desc',
			        'posts_per_page' => '-1',
			        'post_status'    => 'inherit',
			        'category_name'=>'empresas',
			         );

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
				$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="thumbnail" ); 
					?>
				<a class="gallery-img-wrapper" href="<?php echo $image[0]; ?>"  data-sub-html="<h4><?php the_title(); ?></h4>">
					<img class="d-none lazy" data-src="<?php echo $image_thumb[0]; ?>">
					<div class="gallery-image bg-lazy" data-src="<?php echo $image_thumb[0]; ?>" hd-src="<?php echo $image[0]; ?>">
						
					</div>
					<p class="gallery-title">
						<?php echo mb_strimwidth(get_the_title(), 0, 33, '...');?>
					</p>
				</a>

				<?php
			endwhile;				    
			?>			
	</div>	
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

<!-- SECCION VIDEOS -->
<!--
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
-->
<!-- //SECCION VIDEOS -->


<!-- SECCION PRODUCTOS -->
<?php get_template_part( 'template-parts/galeria-productos', 'single' ); ?>
<!-- /SECCION PRODUCTOS -->


<!-- SECCION MAPA -->
<div class="container map-container">
	<section>
		<h1 class="section-header">Niveles de radiación en el mundo</h1>
	</section>
	<section>
		<div class="col">
			<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mapa_mundo.jpg">
		</div>
	</section>
	<section class="v-padding-top">
		<h1 class="section-header">Niveles de radiación en am&eacute;rica latina</h1>
	</section>
	<section class="">
		<div class="image-wrapper">
			<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mapa_sudamerica.jpg">
		</div>
		<div class="image-wrapper">
			<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mapa_chile.jpg">
		</div>
	</section>
</div>
<!-- /SECCION MAPA -->

<!-- SECCION NOTICIAS -->

<div class="w-100">	
	<div id="noticias-full-container" class="container">
		<section class="noticias">
			<div class="ultimas-titulo">
				<h1>Últimas noticias</h1>
				<p>Manténgase al día con las noticias de Vincent Solar</p>
			</div>
			<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
			 
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
			 	
				get_template_part( 'template-parts/content-short', get_post_format() );
			 
				endwhile;
				wp_reset_postdata();
				wp_reset_query();
			?>

		</section>
	</div>
</div>
<!-- /SECCION NOTICIAS -->
<?php get_footer(); ?>
