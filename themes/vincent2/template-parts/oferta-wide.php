<?php 
$oferta_category ="Instalaci&oacute;n Residencial";
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
}						
?>

<div class="single-oferta-container">
	<h2><span><?php echo get_post_meta($post->ID, 'short-title')[0] ; ?></span> solución solar</h2>
	<div class="row">
		<div class="col-fotos">
			<div class="row">
				<div class="col-fotos-kit">
					<img class="img-fluid swiper-lazy " data-src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
					<div class="kit-footer-icons">
						<img class="icon-sello swiper-lazy " data-src="<?php echo get_template_directory_uri() ?>/image/snippets/100euro.png">
						<img class="icon-sello swiper-lazy " data-src="<?php echo get_template_directory_uri() ?>/image/snippets/5anos.png">
					</div>

				</div>
				<div class="col-md-8" style="z-index: 0">
					<img class="img-fluid swiper-lazy " data-src="<?php the_post_thumbnail_url(); ?>"/>
				</div>
			</div>
		</div>
		<div class="col-precio">
			<div class="oferta-index-bullets">
				<div class="bullet">
					<div class="bullet-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
					</div>
					Instalación incluida
				</div>
				<div class="bullet">
					<div class="bullet-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
					</div>
					5 Años de garantía
				</div>
				<div class="bullet">
					<div class="bullet-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
					</div>
					Tramitación SEC
				</div>
				<div class="bullet">
					<div class="bullet-image">
						<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
					</div>
					Productos Europeos
				</div>
			</div>	
			<div class="oferta-wide-pricetag">
				<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
			</div>
			<div class="oferta-wide-contacto-container">
				<div class="oferta-wide-contacto-button">
					<div class="oferta-wide-contacto-text">
						Contacto
					</div>
					<div class="oferta-wide-contacto-bg">
						
					</div>
				</div>
			</div>									
		</div>
	</div>
</div>