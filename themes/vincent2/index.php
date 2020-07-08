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
							get_template_part( 'template-parts/oferta-movil-index-lazy', 'single' ); 

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
<script type="text/javascript">
//preload cover images	
if (window.matchMedia("(min-width: 900px)").matches) {
  var cover1=new Image();
  cover1.src='<?php echo get_template_directory_uri() ?>/image/covers/1.jpg';
  var cover2=new Image();
  cover2.src='<?php echo get_template_directory_uri() ?>/image/covers/2.jpg';
  var cover3=new Image();
  cover3.src='<?php echo get_template_directory_uri() ?>/image/covers/3.jpg';    
}

</script>
<div class="site-cover" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/covers/1.jpg');">

	<div class="swiper-container swiper-cover">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide">
	      	<a href="/soluciones-hogar" class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/1.jpg" >
		      	<h1 class="shrink-cover">
		      	</h1>
	      		<div class="hidden-desc">
		      		<button >Hogar</button>
	      			
	      		</div>
	      	</a>
	      </div>
	      <div class="swiper-slide">
	      	<a href="/soluciones-empresa" class="cover-slide" data-bg-im="<?php echo get_template_directory_uri() ?>/image/covers/1.jpg">
		      	<h1 class="shrink-cover">
		      	</h1>
	      		<div class="hidden-desc">
		      		<button>Empresas</button>
	      			
	      		</div>
	      	</a>
	      </div>
	    </div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>				
	</div>	

</div>

<!-- Seccion por que nosotros -->
<div class="container">
	<section id="porque-elegirnos" class="flex-container space-between">
		<div class="col-md-12">
			<h1>¿Por qu&eacute; elegirnos? <img class="vincent-title-img-inline" src="<?php echo get_template_directory_uri() ?>/image/snippets/logo-mov.png"></h1>
			<p> Vincent Solar es una empresa de origen italiano con m&aacute;s de 30 años de experiencia a nivel internacional. Pioneros en el sistema Netbilling en Chile, con m&aacute;s de 7.000kWp instalados a lo largo del pa&iacute;s y m&aacute;s de 100.000kWp instalados sobre techos en Europa. </p>
			
		</div>

	</section>
	<section class="international-blocks">
		<div class="international-block">
			<p>Italia</p>
			<!-- 2 py it y 2 en grecia -->
			<img class="img-fluid" src="https://via.placeholder.com/700x400">
		</div>

		<div class="international-block">
			<p>Grecia</p>
			<img class="img-fluid" src="https://via.placeholder.com/700x400">
		</div>
	</section>
</div>
<!-- //Seccion por que nosotros -->


<!-- Banner a averiagua cuale es la mejor solucion para tus encesidades energetics -->
<div class="container-fluid vp-t vp-b">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banners/ppp-huawei2.jpg">
		<img class="watermark lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/watermark.png">
		<div class="half-banner-body">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banners/seccion-hogar-2.jpg">
			</div>						
			<div class="half-banner-body-content">
				<h1>
					Averigua cual es la mejor soluci&oacute;n para tus necesidades energeticas. 				
				</h1>
				<p>
				Ofrecemos soluciones de eficiencia energ&eacute;tica con productos de alta gama, instalados con garant&iacute;a y certificaciones ante organismos locales e internacionales. 
				</p>
				<a class="orange-with-arrow" href="/soluciones-hogar">Ver más</a>
			</div>
		</div>
	</section>
</div>
<!-- Banner a averiagua cuale es la mejor solucion para tus encesidades energetics -->




<div class="gallery-container d-none">
	<div id="lightgallery_hogar" class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'rand',
			        'order' => 'desc',
			        'posts_per_page' => '10',
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
	<div id="lightgallery_empresa" class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'rand',
			        'order' => 'desc',
			        'posts_per_page' => '10',
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



<!-- SECCION MAPA -->
<div class="container map-container">
	<section class="vp-t">
		<h1 class="section-header">Niveles de radiación en el mundo</h1>
	</section>
	<section class="vp-b">
		<div class="col">
			<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/mapa_mundo.jpg">
		</div>
	</section>
	<section class="vb-t">
		<h1 class="section-header">Proyectos Vincent en Chile</h1>
		<p class="d-block w-100 highlight text-center">M&aacute;s de 7MW instalado sobre techo en el pa&iacute;s.</p>
	</section>
	<div class="indicador-mapa-wrapper">
		<img data-src="<?php echo get_template_directory_uri() ?>/image/snippets/indicador_mapa.png" class="lazy indicador-mapa">
	</div>
	<section class="vp-b">


		<div class="col-svg-mapa-grande" >
			<div class="svg-wrapper lazy-map" id="svgContainer" data-rendered="false">
				
			</div>
		</div>
		<script type="text/javascript">

			function goto(hash) {
				location.hash = "#" + hash;
			}


		</script>



		<div class="col-svg-mapa-region">
		  <div class="mapa-swiper swiper-container">
		    <div class="swiper-wrapper">
				<div class="swiper-slide"  data-hash="swiper_tarapaca_1_"> 
					<h3 class="text-center">Regi&oacute;n de Tarapac&aacute;</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_tarapaca.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_antofagasta_1_"> 
					<h3 class="text-center">Regi&oacute;n de Antofagasta</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_ANTOFAGASTA.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_atacama_1_"> 
					<h3 class="text-center">Regi&oacute;n de Atacama</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_ATACAMA.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_coquimbo_1_"> 
					<h3 class="text-center">Regi&oacute;n de Coquimbo</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_coquimbo.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_valparaiso_1_">
					<h3 class="text-center">Regi&oacute;n de Valparaiso</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_valparaiso2.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_santiago_1_"> 
					<h3 class="text-center">Regi&oacute;n de Santiago</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_SANTIAGO.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_ohiggins_1_"> 
					<h3 class="text-center">Regi&oacute;n de Libertador Bernardo O'Higgins</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_OHIGGINS.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_maule_1_"> 
					<h3 class="text-center">Regi&oacute;n de Maule</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_MAULE.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_bio_x5F_bio_1_"> 
					<h3 class="text-center">Regi&oacute;n de Biob&iacute;o</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_BIO_BIO.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_araucania_1_"> 
					<h3 class="text-center">Regi&oacute;n de Araucania</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_ARAUCANIA.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_los_x5F_rios_1_"> 
					<h3 class="text-center">Regi&oacute;n de Los Rios</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_los_rios.svg">
				</div>
				<div class="swiper-slide"  data-hash="swiper_los_x5F_lagos_1_"> 
					<h3 class="text-center">Regi&oacute;n de Los Lagos</h3>
					<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/svg/mapa_los_LAGOS.svg">
				</div>
		    </div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		  </div>
		</div>

	</section>	
</div>
<!-- /SECCION MAPA -->

<?php get_footer(); ?>
