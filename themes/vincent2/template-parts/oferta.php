<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}

?>
<section class="oferta-single-row">
	<div class="oferta-category-kit-img">
		<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
	</div>
	<div class="oferta-description-container">
		<div class="oferta-consultar-button">
			<div class="consultar-button-wrapper">
				<a class="consultar-button" href="/">Consultar</a>
				
			</div>
		</div>
		<div class="oferta-price-header">
			<div class="">
				<span class="price-tag">
					<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
				</span>
				<span class="price-facilidades">Facilidades de pago </span>
			</div>
		</div>
		<?php the_content() ;?>
	</div>
	<div class="oferta-gallery-container">
		<h3>Proyectos instalados</h3>
		<div class="oferta-gallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'rand',
			        'posts_per_page' => '6',
			        'post_status'    => 'inherit',
			        'category_name'=>'hogar',
			         );

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
				$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="medium" ); 
					?>
					<div class="oferta-gallery-img">
						<a href="<?php echo $image[0]; ?>"
							style="background-image: url('<?php echo $image_thumb[0]; ?>');"
								>
							
						</a>
					</div>
											
					<?php

			endwhile;				    
			?>			
		</div>
	</div>
</section>

