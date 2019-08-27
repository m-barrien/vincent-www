<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/residencial.jpg')">
	<div class="blog-container-width">
		<div class="row">
			<div class="col">
				<div class="text-wrapper">
					<h2><a href="/">HOME</a>&nbsp; / &nbsp; Ofertas</h2>
					<h1> <?php single_term_title(); ?> </h1>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
