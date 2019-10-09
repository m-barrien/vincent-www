<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}
if (isset($i) && $i == 0) {
	$lazy_class="";
}
else {
	$lazy_class="lazy";
}
?>
<a href="<?php the_permalink(); ?>" class="oferta-index-single-row">
	<div class="oferta-index-banner-image">
		<img class="<?php echo $lazy_class; ?> img-fluid" src="" data-src="https://via.placeholder.com/300x100">
	</div>
	<div class="oferta-index-category-kit-img">
		<div class="left-img">
			<img class="<?php echo $lazy_class; ?>" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/100euro.png">
			<div class="italian-flag"></div>
		</div>
		<div class="center-img">
			<img class="<?php echo $lazy_class; ?>" data-src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
		</div>
		<div class="right-img">
			<img class="<?php echo $lazy_class; ?>" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/5anos.png">
		</div>
		
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
	<div class="oferta-index-banner-image">
		<img class="<?php echo $lazy_class; ?> img-fluid" src="" data-src="https://via.placeholder.com/300x100">
	</div>	
	<div class="oferta-index-contacto">
		Contacto
	</div>
</a>

