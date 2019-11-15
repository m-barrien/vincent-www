<?php /* Template Name: Soluciones Hogar */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/residencial.jpg')">
	<div class="blog-container-width">
		<div class="row">
			<div class="col">
				<div class="text-wrapper">
					<h2><a href="/">HOME</a>&nbsp; / &nbsp; <?php the_title(); ?></h2>
					<h1><?php the_title(); ?></h1>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="blog-container">
	<section>
		<div class="col">
			<h3>Vincent Solar diseña soluciones para hogares privados para que sean independientes de la energía</h3>
			<p>
				Aquellos que eligen instalar un sistema fotovoltaico para su hogar, eligen una forma de inversión rentable y sostenible y toman una decisión que mejora su calidad de vida y la de las personas cercanas a ellos, produciendo energía limpia y reduciendo las emisiones dañinas de CO2 por el medio ambiente.
			</p>
			<p>
				Nuestros consultores técnicos evaluarán con usted las necesidades energéticas de su familia y sus necesidades a fin de proponerle la solución fotovoltaica más adecuada para que sea lo más independiente posible de la energía. Las energías renovables no son el futuro, sino el presente, por lo que equipar su hogar con un sistema inteligente de adquisición de energía no es solo un movimiento correcto, sino el movimiento correcto para hacer hoy.
			</p>
			<h2>Elija el sistema fotovoltaico más adecuado para su familia.</h2>
			<p>
				¿No estás seguro de qué elegir? Seleccione "instalaciones personalizadas" y complete el formulario en la parte inferior de la página, evaluaremos juntos la solución más adecuada para usted.
			</p>
			
		</div>
		
	</section>
</div>
<?php 
$query = new WP_Query(array(
    'post_type' => 'oferta',
    'post_status' => 'publish',
	'posts_per_page' => -1,
	'meta_key'		=> 'featured',
	'orderby'		=> 'meta_value',
	'order'			=> 'DESC'    
));
$i=0;
?>
<div class="blog-container wide">
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
					<a class="gray-container" href="<?php echo get_permalink() ; ?>">
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
<?php get_footer(); ?>
