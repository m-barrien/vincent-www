<?php get_header(); ?>
<style type="text/css">
	@media screen and (max-width: 899px) {
	  .site-cover-secondary {
	    background-image:linear-gradient(to bottom, #00000000 0%, #00000000 25%,#00000000 75%, #00000000 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/ofertas.jpg')
	  }
	}	
	@media screen and (min-width: 900px) {
	  .site-cover-secondary {
	    background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/ofertas.jpg')
	  }
	}	
</style>
<div class="site-cover-secondary small" >
</div>

<div class="container">
	<h2 class="site-title"> Kit Solares Hogar</h2>
</div>
<div class="container kit-group">

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

	<div class="kit-group-header">
		<div class="kit-group-header-text <?php  echo $wcatTerm->slug ?>">
			<h1 href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></h1>
		</div>
		
	</div>			
	<section class="kit-verticals-row">
			<?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); 
		   			$tax_id = get_the_terms($post,'tipo-kit')[1]->term_id;
		   				get_template_part( 'template-parts/oferta-archive-single', 'single' ); 
				endwhile;
				endif;
				?>					    
			<div class="kit-verticals-col">
				<div class="gray-container">
					<img class="kit-verticals-img colored" src="<?php echo get_template_directory_uri() ?>/image/banners/vertical-termico1.jpg">
					<div class="kit-verticals-text-body" style="font-weight: bold;">
						Consulte por nuestros kits con agua caliente solar.
					</div>
				</div>
				
			</div>	
	</section>



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

	$wcatTerm = get_term_by('slug','offgrid', 'tipo-kit');
?>	

	<div class="kit-group-header">
		<div class="kit-group-header-text <?php  echo $wcatTerm->slug ?>">
			<h1 href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></h1>
		</div>
		
	</div>			
	<section class="kit-verticals-row">
					<?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); 
				   			$tax_id = get_the_terms($post,'tipo-kit')[0]->term_id;
				   				get_template_part( 'template-parts/oferta-archive-single', 'single' ); 
						endwhile;
						endif;
					?>					    
				    	
	</section>
</div>
<!-- galeria ongrid -->
<div id="open-gallery-ongrid" class="banner-link">
	<img class="img-fluid lazy desk" data-src="<?php echo get_template_directory_uri() ?>/image/banners/hogar.jpg">	
	<img class="img-fluid lazy mov" data-src="<?php echo get_template_directory_uri() ?>/image/banners/hogar.mov.jpg">	
</div>

<div class="gallery-container d-none">
	<h1>Galería de proyectos <strong>ON GRID</strong></h1>
	<div id="gallery_ongrid" class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'rand',
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
</div>
<!-- /galeria ongrid -->

<?php get_footer(); ?>
