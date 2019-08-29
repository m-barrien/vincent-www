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
		<?php the_content() ;?>
	</div>
</section>

