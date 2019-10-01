<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}

?>
<section class="oferta-index-single-row">
	<div class="oferta-index-category-kit-img">
		<img class="lazy img-fluid" data-src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
	</div>
	<div class="oferta-index-description-container">
		<div class="oferta-index-price-header">
			<div class="">
				<span class="price-tag">
					<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
				</span>
			</div>
		</div>
	</div>
</section>
