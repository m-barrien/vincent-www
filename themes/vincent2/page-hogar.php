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
					Independiente<br> Inteligente <br>Conveniente
				</h1>
				<p>
					Invierta de forma inteligente con las soluciones de Vincent Solar, ahorre inmediatamente en su cuenta de energ&iacute;a eléctrica.
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
	<h1 class="text-center py-4">
		La Solución.
	</h1>
</div>
<!-- /Banner a soluciones hogar -->



<!-- Mundo ONGRID -->
<div class="container-fluid">
	<div class="row banner-mundo-offgrid bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/condominio-casas.png">
		<div class="sma-header">
			<h1 class="">
				Mundo <span class="orange">ONGRID</span> by <img class="vincent-title-img-inline" src="<?php echo get_template_directory_uri() ?>/image/snippets/logo-mov.png"> 
			</h1>
			<h2>
				Ahorro inmediato de energ&iacute;a.
			</h2>
		</div>
		<div class="inverter-gallery">
			<img src="https://via.placeholder.com/300" class="">
		</div>

	</div>
	<!-- como funciona ongrid -->
	<div class="container vp-t ">
		<div id="ongrid"></div>
		<h1  class="pb-4">¿Como funciona el sistema <span class="orange">ON GRID</span> residencial?</h1>
	</div>
	<div class="container-fluid">
		<section class="full-width-diagram bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/paneles-faded.jpg">
			<div class="img-wrapper">
				<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/covers/diagrama_hogar_on.png">
			</div>
		</section>
	</div>
	<!-- como funciona ongrid -->
	<!--	
	<div class="text-with-image">
	    <div class="text-part">
	      <h2>
	        <span class="mdi mdi-truck-fast-outline"></span>
	        Instalaci&oacute;n sencilla y r&aacute;pida
	      </h2>
	      <p>
	        La solución solar <span class="orange">ONGRID</span> de <img class="vincent-title-img-inline sm" src="<?php echo get_template_directory_uri() ?>/image/snippets/logo-mov.png"> es rápida y eficiente con nuestro equipo de técnicos certificados.
	      </p>
	    </div>
	    <div class="img-part">
	      <img class="img-fluid" src="<?php echo get_template_directory_uri() ; ?>/image/snippets/mundoongrid/quickinstall.png">
	    </div>
	</div>
	<div class="text-with-image">
	    <div class="text-part flip">
	      <h2>
	        <span class="mdi mdi-lan"></span>
	        Todos los equipos consumidores de su hogar interconectados en un sistema integral
	      </h2>
	      <p>
	        Su soluci&oacute;n solar no solo le ser&aacute; &uacute;til para ahorrar en el consumo de su televisor, o refrigerador, o luces. Sino que su soluci&oacute;n solar ongrid <strong>reduce el consumo de todos los aparatos conectados a su red</strong>. Significando un ahorro completo en su cuenta de luz.
	        
	      </p>
	    </div>
	    <div class="img-part flip">
	      <img class="img-fluid" src="<?php echo get_template_directory_uri() ; ?>/image/snippets/mundoongrid/homeappliances.png">
	    </div>
	</div>
	<div class="text-with-image">
	    <div class="text-part">
	      <h2>
	        <span class="mdi mdi-shield-sun-outline"></span>
	        Protección contra las subidas de los precios de la energía
	      </h2>
	      <p>
	      	Cada vez que usted es notificado en un alza del valor en su cuenta de luz. Usted estar&aacute; <strong>ahorrando cada vez m&aacute;s por cada kiloWatthora</strong> generado por su sistema solar. Esto significa que mientras m&aacute;s alzas, m&aacute;s r&aacute;pido recuperar&aacute; su inversi&oacute;n solar.
	        
	      </p>
	    </div>
	    <div class="img-part">
	      <img class="img-fluid" src="<?php echo get_template_directory_uri() ; ?>/image/snippets/mundoongrid/savings.png">
	    </div>
	</div>
	<div class="text-with-image">
	    <div class="text-part flip">
	      <h2>
	        <span class="mdi mdi-power-settings"></span>
	        Completamente autom&aacute;tico y aut&oacute;nomo
	      </h2>
	      <p>
	      	Una vez conectado puede olvidarse de su sistema solar. El cual esta diseñado para estar protegido ante irregularidades y fallas en la red electrica, con desconexi&oacute;n y <strong>reconexi&oacute;n autom&aacute;tica</strong> para proteger su inversi&oacute;n. Adem&aacute;s de que todas nuestras soluciones ofrecen <strong>monitoreo online</strong> desde su celular o computadora.
	        
	      </p>
	    </div>
	    <div class="img-part flip">
	      <img class="img-fluid" src="<?php echo get_template_directory_uri() ; ?>/image/snippets/mundoongrid/selfrepair.png">
	    </div>
	</div>
	-->
</div>
<!-- /Mundo ONGRID -->


<div class="ofertas-cards-header d-none-mov vm-t">
	<h1 class="">
		Kit Solar Residencial <span class="orange">ONGRID</span>
	</h1>
</div>
<div class="ofertas-wide-card-container  d-none-mov vp-b vm-b" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/banners/banner-ongrid.jpg');">
	<div class="ofertas-card-container">
		<?php
			wp_reset_postdata();
		    wp_reset_query();
		    $args= array(
			'post_type' => array('oferta'),
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'meta_key'		=> 'price',
			'orderby'		=> 'meta_value',
			'order'			=> 'ASC',
		    'tax_query' => array(
		        array(
		            'taxonomy' => 'tipo-kit',
		            'field'    => 'slug',
		            'terms'    => 'ongrid',
		        ),
		    ),	
			);

			$loop = new WP_Query( $args );

			$wcatTerm = get_term_by('slug','ongrid', 'tipo-kit');
		?>		
	    <?php
	    	$i=0;
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = null;
					?>

					<?php get_template_part( 'template-parts/oferta-card', 'single' ); ?>
						
					<?php

			endwhile;
			wp_reset_postdata();
	        wp_reset_query();
		?>
	</div>

</div>


<!-- galeria ongrid -->
<div id="open-gallery-ongrid" class="banner-link  vp-t vp-b">
	<img class="img-fluid lazy desk" data-src="<?php echo get_template_directory_uri() ?>/image/banners/galeria_ongrid.jpg">	
	<img class="img-fluid lazy mov" data-src="<?php echo get_template_directory_uri() ?>/image/banners/galeria_ongrid.mov.jpg">	
</div>

<!-- /galeria ongrid -->



<!-- mundo offgrid -->
<div class="container-fluid vp-t">
	<div class="row banner-mundo-offgrid bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banners/mundooffgrid.jpg">
		<div class="victron-header">
			<h1 class="">
				Mundo <span class="orange">OFFGRID</span> by <img class="victron-title-img" src="<?php echo get_template_directory_uri() ?>/image/logos/victron.png">
			</h1>
			<h2>
				Entra en el mundo de ser totalmente independiente.
			</h2>
		</div>
	</div>
	<?php echo do_shortcode( '[multiplus_feats]' ); ?>
</div>

<div class="ofertas-cards-header d-none-mov vm-t">
	<h1 class="">
		Mundo <span class="orange">OFFGRID</span> by <img class="victron-title-img" src="<?php echo get_template_directory_uri() ?>/image/logos/victron.png">
	</h1>
</div>
<div class="ofertas-wide-card-container d-none-mov vp-b vm-b" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/banners/banner-offgrid.jpg');">
	<div class="ofertas-card-container">
		<?php
			wp_reset_postdata();
		    wp_reset_query();
		    $args= array(
			'post_type' => array('oferta'),
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'meta_key'		=> 'price',
			'orderby'		=> 'meta_value',
			'order'			=> 'ASC',
		    'tax_query' => array(
		        array(
		            'taxonomy' => 'tipo-kit',
		            'field'    => 'slug',
		            'terms'    => 'offgrid',
		        ),
		    ),	
			);

			$loop = new WP_Query( $args );

			$wcatTerm = get_term_by('slug','ongrid', 'tipo-kit');
		?>		
	    <?php
	    	$i=0;
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = null;
					?>

					<?php get_template_part( 'template-parts/oferta-card', 'single' ); ?>
						
					<?php

			endwhile;
			wp_reset_postdata();
	        wp_reset_query();
		?>
	</div>

</div>
<!-- /mundo offgrid -->

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
