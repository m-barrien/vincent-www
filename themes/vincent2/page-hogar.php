<?php /* Template Name: Soluciones Hogar */ ?>
 
<?php get_header(); ?>

<!-- video -->
<div class="site-cover-secondary sm-block" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/residencial.jpg')">
	<video id="videoPlayer" autoplay loop muted  preload="auto"> 
	 	<source src="/video/coverhogar" type="video/mp4" media="all and (min-width: 900px)">
	</video>
</div>
<!-- /video -->


<div class="container">
	<h2 class="site-title"> <?php the_title(); ?></h2>
</div>

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

<!-- Banner a soluciones hogar -->
<div class="container vp-t vp-b">
	<h1 class="text-center pt-4">
		La Solución
	</h1>
	<p class="text-center">Si buscas invertir en una soluci&oacute;n que te proporcione ahorro inmediato y que se mantenga en el tiempo, o si buscas obtener energ&iacute;a limpia y sustentable estas son las opciones para ti.</p>
</div>
<!-- /Banner a soluciones hogar -->


<div class="ofertas-cards-header d-none-mov vm-t">
	<h1 class="">
		Kit Solar Residencial
	</h1>
</div>
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
		?>
				<div class="kit-col-container" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-3kw.jpg')">
					<a class="white-container" href="<?php echo get_permalink() ; ?>">
						<div class="text-body">
							<div class="number">0<?php echo ++$i; ?></div>
							<div class="little-title"><?php echo $oferta_category; ?></div>
							<div class="kw"><?php echo get_post_meta($post_id, 'short-title')[0] ; ?></div>
						</div>
					</a>
				</div>
		<?php 
			}
			wp_reset_query();
		?>
	</section>
</div>


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


<?php get_footer(); ?>
