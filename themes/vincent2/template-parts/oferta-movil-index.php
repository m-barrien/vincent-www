<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}

?>
<a href="<?php the_permalink(); ?>" class="oferta-index-single-row">
	<div class="oferta-index-banner-image">
		<img class=" img-fluid"  src="https://via.placeholder.com/300x75">
	</div>
	<div class="oferta-index-title">
		<?php the_title(); ?>
		<br>
		<span>
			<?php echo get_post_meta($post->ID, 'short-title')[0] ; ?>
		</span>
	</div>
	<div class="oferta-index-category-kit-img">
		<div class="left-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/100euro.png">
			<div class="italian-flag"></div>
		</div>
		<div class="center-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
		</div>
		<div class="right-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/5anos.png">
		</div>
		
	</div>
	<div class="oferta-index-description-container">
		<div class="oferta-index-price-header">
					<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
					<br>
					+IVA
		</div>
		<div class="oferta-index-bullets">
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
				</div>
				Todo Incluido
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
				</div>
				Llave en mano
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
				</div>
				Visita técnica gratuita
			</div>
		</div>
	</div>
	<div class="oferta-index-banner-image">
		<img class=" img-fluid"  src="https://via.placeholder.com/300x100">
	</div>	
	<div class="oferta-index-contacto">
		Contacto
	</div>
</a>

