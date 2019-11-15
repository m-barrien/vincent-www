<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/ofertas.jpg')">
</div>
<div class="container kit-group">
	<div class="row">
		<div class="col">
			<div class="text-wrapper">
				<h2 id="titulo-ofertas">
					Kit solares hogar
					<br>
					<span class="ongrid">ONGRID</span>
					<span>/</span>
					<span class="offgrid">OFFGRID</span>

				</h2>

			</div>
			
		</div>
	</div>
	
<?php $wcatTerms = get_terms('tipo-kit', array('hide_empty' => 0, 'parent' =>0, 'orderby'=>'count')); 
   foreach($wcatTerms as $wcatTerm) : 
   ?>
	<section>
		<div class="kit-group-header">
			<div class="kit-group-header-text <?php  echo $wcatTerm->slug ?>">
    			<h1 href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></h1>
					<?php echo term_description( $wcatTerm->term_id, 'tipo-kit' ); ?>
			</div>
			
		</div>			
		<div class="kit-group-body" >
			<div class="row">
				<?php $termchildren = get_term_children( $wcatTerm->term_id, 'tipo-kit' ); ?>
				<?php 
					foreach ( $termchildren as $child ) {
					    $term = get_term_by( 'id', $child, 'tipo-kit' );
					    ?>
						<div class="kit-col-container">
							<a class="gray-container" data-toggle="collapse" href="#<?php echo $term->slug ?>" role="button" aria-expanded="false" aria-controls="<?php echo $term->slug ?>">
								<img src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-3kw.jpg">
								<div class="text-body">
									<div class="little-title">Soluciones Hogar</div>
									<div class="kw">
										<?php echo substr( $term->name , 0, 4); ?>
									</div>
								</div>
							</a>
							
						</div>						    	
						<?php
					}						
				?>
			</div>

			<div class="row accordion" id="accordion<?php echo $wcatTerm->slug; ?>">
				<?php 
					foreach ( $termchildren as $child ) {
					    $term = get_term_by( 'id', $child, 'tipo-kit' );
					    ?>
					    <div id="<?php echo $term->slug ?>" class="col-md-12 collapse" aria-labelledby="headingOne" data-parent="#accordion<?php echo $wcatTerm->slug; ?>">
					      <div class="w-100">
							<?php if(have_posts()) : while(have_posts()) : the_post(); 
						   			$tax_id = get_the_terms($post,'tipo-kit')[0]->term_id;
									if ($tax_id == $term->term_id) {
						   				get_template_part( 'template-parts/oferta-wide', 'single' ); 
									}
								endwhile;
								endif;
							?>
					      </div>
					    </div>						    	
						<?php
					}						
				?>				

			</div>
		</div>	
	</section>

<?php 
   endforeach; 
   ?>
</div>

<?php get_footer(); ?>
