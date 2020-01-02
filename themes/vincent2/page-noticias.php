<?php /* Template Name: Noticias */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary small" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/noticias.jpg')">
</div>
<div class="container">
	<h2 class="site-title"> <?php the_title(); ?></h2>
</div>
<div class="w-100 gray-bg">	
	<div id="noticias-full-container" class="container">
		<section class="noticias">
			<?php $the_query = new WP_Query( 'posts_per_page=30' ); ?>
			 
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
			 	
				get_template_part( 'template-parts/content-short', get_post_format() );
			 
				endwhile;
				wp_reset_postdata();
				wp_reset_query();
			?>

		</section>
	</div>
</div>
<?php get_footer(); ?>
