<?php /* Template Name: Pagina quienes somos */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/noticias.png')">
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</section>
</div>

<?php get_footer(); ?>
