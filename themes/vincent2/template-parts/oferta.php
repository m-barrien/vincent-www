<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}

?>
<section class="oferta-single-row  pt-2">
	<div class="oferta-category-kit-img">
		<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
	</div>
	<div class="oferta-description-container">
		<div class="instalacion-red-tag">Instalaci&oacute;n incluida, llave en mano</div>
		<div class="oferta-wide-pricetag">
			<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
		</div>
		<a href="mailto:info@vincentsolar.com" class="d-block w-100">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/boton_contacto.jpg">
		</a>
	</div>
	<div class="oferta-full-description-container">
		<?php the_content() ;?>
		<script type="text/javascript">
			function goto(hash) {
				alert(hash);
			}
		</script>		
	</div>
</section>

