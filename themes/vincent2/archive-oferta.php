<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/ofertas.jpg')">
	<div class="blog-container-width">
		<div class="row">
			<div class="col">
				<div class="text-wrapper">
					<h2><a href="/">HOME</a>&nbsp; / &nbsp; Ofertas</h2>
					<h1>Ofertas</h1>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="container">
	
<?php $wcatTerms = get_terms('tipo-kit', array('hide_empty' => 0, 'parent' =>0)); 
   foreach($wcatTerms as $wcatTerm) : 
   ?>
	<section>
		<div class="kit-group">
			<div class="kit-group-header">
				<div class="kit-group-header-text">
	    			<h1 href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></h1>
						<?php echo term_description( $wcatTerm->term_id, 'tipo-kit' ); ?>
				</div>
				<div class="kit-group-header-icons">
					ICONOS
				</div>
				
			</div>			
			<div class="kit-group-body">
				<div class="kit-group-body-image">
					<img class="img-fluid" src="https://via.placeholder.com/500">
				</div>
				<div class="kit-group-body-ofertas">
					<?php if(have_posts()) : while(have_posts()) : the_post(); 
				   			$tax_id = get_the_terms($post,'tipo-kit')[0]->term_id;
							if ($tax_id == $wcatTerm->term_id) {
				   				get_template_part( 'template-parts/oferta-price-tag', 'single' ); 
							}
					?>
					<?php endwhile; endif; ?>      
				</div>
				<div class="kit-group-body-banner">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $wcatTerm->slug; ?>/kit-group-banner.jpg">
				</div>								
			</div>	
		</div>
	</section>

<?php 
   endforeach; 
   ?>
</div>

<?php get_footer(); ?>
