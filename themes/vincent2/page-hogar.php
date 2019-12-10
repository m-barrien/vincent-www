<?php /* Template Name: Soluciones Hogar */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/residencial.jpg')">
</div>


<div class="container">
	<h2 class="site-title"> <?php the_title(); ?></h2>
</div>

<!-- Banner a beneficios hogar -->
<div class="container-fluid">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-1.jpg">
		<img class="favicon lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/favicon.png">
		<div class="half-banner-body right">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-1.jpg">
			</div>			
			<div class="w-100">
				<h1>
					Independiente,<br> inteligente, <br>conveniente
				</h1>
				<p>
					Las soluciones fotovoltaicas Vincent Solar, permiten ser más independiente del aumento de los costos de electricidad. Proporcionando suministro de energía sostenible y renovable.
				</p>
			</div>
		</div>
	</section>
</div>
<!-- Banner a beneficios hogar -->

<!-- Banner a soluciones hogar -->
<div class="container-fluid">
	<section class="half-banner tall bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-2.jpg">
		<img class="favicon right lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/favicon.png">
		<div class="half-banner-body">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-hogar-2.jpg">
			</div>
			<div class="w-100">
				<h1>
					La mejor solución para su hogar
				</h1>
				<p>
					Las soluciones solares de la <strong>Vincent Solar</strong> se distinguen por sus componentes del más alto estándar a nivel internacional, instalado y ejecutado para lograr el máximo beneficio con la mejor relación precio-calidad.
				</p>
				<div class="img-wrapper">
					<img class="kit-img lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/equipamiento_hogar.png">
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Banner a soluciones hogar -->


<!-- como funciona ongrid -->
<div class="container v-padding-top">
	<h1 class="pb-4">¿Como funciona el sistema <span class="orange">ON GRID?</span></h1>
</div>
<div class="container-fluid">
	<section class="full-width-diagram bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/paneles-faded.jpg">
		<div class="img-wrapper">
			<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/covers/diagrama_hogar_on.png">
		</div>
	</section>
</div>
<!-- como funciona ongrid -->

<!-- como funciona offgrid -->
<div class="container v-padding-top">
	<h1 class="pb-4">¿Como funciona el sistema <span class="orange">OFF GRID?</span></h1>
</div>
<div class="container-fluid v-padding-bottom" >
	<section class="full-width-diagram bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/paneles-faded.jpg">
		<div class="img-wrapper">
			<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/covers/diagrama_hogar_off.png">
		</div>
	</section>
</div>
<!-- como funciona offgrid -->



<div class="gallery-container">
	<h1>Galería de proyecto <strong>hogar</strong></h1>
	<div id="lightgallery" class="w-100">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'desc',
			        'posts_per_page' => '8',
			        'post_status'    => 'inherit',
			        'category_name'=>'hogar',
			         );

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
				$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="thumbnail" ); 
					?>
				<a class="gallery-img-wrapper" href="<?php echo $image[0]; ?>">
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
