<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/ofertas.jpg')">
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="text-wrapper">
				<h1>Kit solares hogar</h1>
			</div>
			
		</div>
	</div>
</div>
<div class="container kit-group">
	
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
							<a class="gray-container" href="#">
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
		</div>	
	</section>

<?php 
   endforeach; 
   ?>
</div>

<?php get_footer(); ?>
