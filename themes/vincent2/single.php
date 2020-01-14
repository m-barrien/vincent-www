<?php /* Template Name: Soluciones Hogar */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary small" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/noticias.png')">
</div>
<div class="blog-container-width">
	<h2 class="site-title mb-0"><?php the_title(); ?></h2>
</div>
<div class="blog-container">
	<section>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );


			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vincent' ),
				) );
			}

			// End of the loop.
		endwhile;
		?>
		
	</section>
</div>
<div class="container-fluid">
	<section class="nav-links">
		<div class="previous"><?php previous_post_link('%link'); ?> </div>
		<div class="next"><?php next_post_link('%link'); ?> </div>	
	</section>	
</div>

<?php get_footer(); ?>
