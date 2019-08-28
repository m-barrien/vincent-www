<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/banners/banner_mantenciones_lg.png')">
	<div class="blog-container-width">
		<div class="row">
			<div class="col">
				<div class="text-wrapper">
					<h2><a href="/">HOME</a>&nbsp; / &nbsp; Servicios</h2>
					<h1>Servicios</h1>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="blog-container">
	<section class="servicios-container">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="servicio-block">
				<div class="servicio-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="servicio-image">
							<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
						</div>
					<?php endif; ?>
					<div class="servicio-text">
						<h2><?php the_title() ;?></h2>
						<p><?php the_excerpt() ;?></p>
					</div>
					
				</div>
			</div>
		<?php endwhile; endif; ?>		
	</section>
</div>
<?php get_footer(); ?>
