<?php /* Template Name: Soluciones Empresa */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/comercial.jpg')">
</div>


<div class="container">
	<section>
		<h2 class="site-title"> <?php the_title(); ?></h2>
	</section>
</div>


<!-- Banner a beneficios empresa -->
<div class="container-fluid">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/2.jpg">
		<img class="favicon lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/favicon.png">
		<div class="half-banner-body right">
			<div class="w-100">
				<h1>
					Beneficios de la energía fotovoltaica para tu empresa
				</h1>
				<ul>
					<li>Ahorro inmediato en el gasto de energía.</li>
					<li>Inversión que dura en el tiempo.</li>
					<li>Marketing ecológico para su empresa.</li>
					<li>Cuida el medioambiente.</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<!-- Banner a beneficios empresa -->

<!-- Banner a soluciones empresa -->
<div class="container-fluid">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/equipamiento_inicio.png">
		<img class="favicon right lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/favicon.png">
		<div class="half-banner-body">
			<div class="w-100">
				<h1>
					La mejor solución para su empresa
				</h1>
				<p>
					Las soluciones solares de la <strong>Vincent Solar</strong> se distinguen por sus componentes del más alto estándar a nivel internacional, instalado y ejecutado para lograr el máximo beneficio con la mejor relación precio-calidad.
				</p>
			</div>
		</div>
	</section>
</div>
<!-- Banner a soluciones empresa -->

<!-- como funciona ongrid -->
<div class="container">
	<section>
		<h1>¿Como funciona el sistema <span>ON GRID</span> en tu empresa?</h1>
	</section>
</div>
<div class="container-fluid">
	<section class="full-width-diagram">
		<div class="img-wrapper">
			<img class="img-fluid lazy" data-src="https://via.placeholder.com/1000x500">
		</div>
	</section>
</div>
<!-- como funciona ongrid -->

<div class="gallery-container">
	<div class="w-100">
		<h1>Galería de proyecto <strong>empresas</strong></h1>
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'desc',
			        'posts_per_page' => '8',
			        'post_status'    => 'inherit',
			        'category_name'=>'empresas',
			         );

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
				$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="thumbnail" ); 
					?>
				<div class="gallery-img-wrapper">
					<div class="gallery-image bg-lazy" data-src="<?php echo $image_thumb[0]; ?>" hd-src="<?php echo $image[0]; ?>">
						
					</div>
					<p class="gallery-title">
						<?php the_title(); ?>
					</p>
				</div>

				<?php
			endwhile;				    
			?>			
	</div>
</div>

<?php get_footer(); ?>
