<?php /* Template Name: Soluciones Hogar */ ?>
 
<?php get_header(); ?>

<!-- video -->
<div class="site-cover-secondary sm-block" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/residencial.jpg')">
	<video id="videoPlayer" autoplay loop muted  preload="auto"> 
	 	<source src="/video/coverhogar" type="video/mp4" media="all and (min-width: 900px)">
	</video>
</div>
<!-- /video -->


<div class="blog-container-width vp-t">
	<h1 class="site-title"> <?php the_title(); ?></h1>
</div>

<!-- Banner a beneficios hogar 
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

 Banner a soluciones hogar -->
<div class="blog-container vp-b">
	<p class="text-justify">Quienes eligen instalar paneles fotovoltaicos en su hogar eligen una forma de inversión rentable y sostenible; toma una decisión que mejora la calidad de vida y la de las personas cercanas a él, produciendo energía limpia y reduciendo las emisiones de CO2, perjudiciales para el medio ambiente.</p>
	<h2>
		Energ&iacute;a fotovoltaica en tu hogar
	</h2>
	<p>
		Junto con usted, evaluamos sus necesidades energéticas y sus necesidades, para proponer el sistema fotovoltaico más adecuado y de mayor tamaño para el hogar y capaz de hacerlo lo más independiente posible en términos de energía.
	</p>
	<p>
		Las energías renovables no son el futuro, sino el presente: equipar su hogar con un sistema inteligente de recuperación de energía no es solo un movimiento correcto, sino el movimiento correcto en el momento correcto.	
	</p>
	<h2>
		Elija el sistema fotovoltaico adecuado para su hogar
		
	</h2>
	<p>
		¿No está seguro de cuántos y qué paneles fotovoltaicos instalar en su hogar? <span class="orange">Descubra la mejor opci&oacute;n para sus necesidades.</span>
	</p>


</div>
<!-- /Banner a soluciones hogar -->
<?php 
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
$query = new WP_Query($args);
$i=0;
?>
<div class="container-fluid">
	<section class="kits-container">
		<?php 
			while ($query->have_posts()) {
			    $query->the_post();
			    $post_id = get_the_ID();
			    $tax_term = get_the_terms( $post_id ,'tipo-kit');
			    $oferta_category ="Instalaci&oacute;n Residencial";
			    if ($tax_term) {
			    	$oferta_category = $tax_term[0]->name;
			    }
			    get_template_part( 'template-parts/oferta-card', 'single' );
			}
			wp_reset_query();
		?>
	</section>
</div>



<?php get_footer(); ?>
