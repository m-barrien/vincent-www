<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/mesa-arquitecto.jpg')">
</div>
<div class="blog-container-width">
	<h2 class="site-title">Kit Solar <?php the_title(); ?></h2>
</div>
<div class="blog-container">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/oferta', 'single' );


			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vincent' ),
				) );
			}

			// End of the loop.
		endwhile;
		?>

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
