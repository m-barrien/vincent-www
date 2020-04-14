<?php /* Template Name: Soluciones Hogar */ ?>
 
<?php get_header(); ?>

<!-- Banner a beneficios hogar -->
<div class="container-fluid">
	<section class="half-banner h-auto mt-0" style="background-image:url('<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-1.jpg');">
		<div class="half-banner-body menu-top-padding right">
			<div class="mov-img">
				<img class=" img-fluid" src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-1.jpg">
			</div>			
			<div class="w-100">
				<h1>
					Independiente,<br> inteligente, <br>conveniente
				</h1>
				<p>
					Las soluciones fotovoltaicas Vincent Solar, permiten ser más independiente del aumento de los costos de electricidad. Proporcionando suministro de energía sostenible y renovable.
				</p>
				<a class="orange-with-arrow" href="#ongrid">¿Como funcionan los sistemas solares? </a>
			</div>
		</div>
	</section>
</div>

<div class="container">
	<h2 class="site-title"> <?php the_title(); ?></h2>
</div>
<!-- video -->
<div class="site-cover-secondary sm-block" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/residencial.jpg')">
	<video id="videoPlayer" autoplay loop muted  preload="auto"> 
	 	<source src="/video/coverhogar" type="video/mp4" media="all and (min-width: 900px)">
	</video>
</div>
<!-- /video -->

<!-- Banner a soluciones hogar -->
<div class="container-fluid vp-t vp-b">
	<section class="half-banner tall bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-2.jpg">
		<img class="watermark right lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/watermark.png">
		<div class="half-banner-body">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-2.jpg">
			</div>
			<div class="w-100">
				<h1>
					La mejor solución.
				</h1>
				<p>
					Las soluciones de <strong>Vincent Solar</strong> se distinguen por sus componentes del más alto estándar a nivel internacional, instalado y ejecutado para lograr el máximo beneficio con la mejor relación precio-calidad.
				</p>
				<div class="img-wrapper">
					<img class="kit-img lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/equipamiento_hogar.png">
				</div>
			</div>
		</div>
	</section>
</div>
<!-- /Banner a soluciones hogar -->

<!-- Banner a beneficios hogar -->
<div class="banner-link vp-t vp-b">
	<a href="/ofertas">
		<img class="img-fluid lazy desk" data-src="<?php echo get_template_directory_uri() ?>/image/banners/kits.jpg">	
		<img class="img-fluid lazy mov" data-src="<?php echo get_template_directory_uri() ?>/image/banners/kits.mov.jpg">	
	</a>
</div>

<!-- ofertas wide -->
<div class="ofertas-wide vp-b">
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
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>				
	</div>
</div>
<!-- /ofertas wide -->


<!-- como funciona ongrid -->
<div class="container vp-t ">
	<div id="ongrid"></div>
	<h1  class="pb-4">¿Como funciona el sistema <span class="orange">ON GRID</span> residencial?</h1>
</div>
<div class="container-fluid vp-b">
	<section class="full-width-diagram bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/paneles-faded.jpg">
		<div class="img-wrapper">
			<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/covers/diagrama_hogar_on.png">
		</div>
	</section>
</div>
<!-- como funciona ongrid -->

<!-- galeria ongrid -->
<div id="open-gallery-ongrid" class="banner-link  vp-t vp-b">
	<img class="img-fluid lazy desk" data-src="<?php echo get_template_directory_uri() ?>/image/banners/galeria_ongrid.jpg">	
	<img class="img-fluid lazy mov" data-src="<?php echo get_template_directory_uri() ?>/image/banners/galeria_ongrid.mov.jpg">	
</div>

<!-- /galeria ongrid -->


<!-- como funciona offgrid -->
<div class="container vp-t">
	<h1 class="pb-4">¿Como funciona el sistema <span class="orange">OFF GRID</span> residencial?</h1>
</div>
<div class="container-fluid vp-b" >
	<section class="full-width-diagram bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/paneles-faded.jpg">
		<div class="img-wrapper">
			<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/covers/diagrama_hogar_off.png">
		</div>
	</section>
</div>
<!-- como funciona offgrid -->
<!-- mundo offgrid -->
<div class="container-fluid">
	<?php echo do_shortcode( '[multiplus_feats]' ); ?>
</div>
<!-- /mundo offgrid -->

<div id="open-gallery-offgrid" class="banner-link">
	<img class="img-fluid lazy desk" data-src="<?php echo get_template_directory_uri() ?>/image/banners/galeria_offgrid.jpg">	
	<img class="img-fluid lazy mov" data-src="<?php echo get_template_directory_uri() ?>/image/banners/galeria_offgrid.mov.jpg">	
</div>

<div class="gallery-container d-none">
	<h1>Galería de proyectos <strong>OFF GRID</strong></h1>
	<div id="gallery_offgrid" class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'rand',
			        'order' => 'desc',
			        'posts_per_page' => '-1',
			        'post_status'    => 'inherit',
			        'category_name'=>'hogar-offgrid',
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

	<div id="gallery_ongrid" class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'rand',
			        'order' => 'desc',
			        'posts_per_page' => '-1',
			        'post_status'    => 'inherit',
			        'category_name'=>'hogar-ongrid',
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
</div>
<?php get_footer(); ?>
