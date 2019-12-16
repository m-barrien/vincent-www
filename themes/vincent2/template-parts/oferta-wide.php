<?php 
$oferta_category ="Instalaci&oacute;n Residencial";
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
$parent_name= $tax_term[1]->name;
}						
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>
<div class="single-oferta-container-padding">
	<div class="single-oferta-container swiper-lazy" data-background="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-bg.jpg">
		<div class="row">
			<div class="col-fotos">
				<div class="row">
					<div class="superoferta-wrapper">
						<img class="img-fluid swiper-lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/superoferta.png">
					</div>				
					<div class="col-fotos-kit">
						<img class="img-fluid swiper-lazy kit-img" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">

					</div>
					<!--
					<div class="col-md-8" style="z-index: 0">
						<img class="img-fluid swiper-lazy " data-src="<?php the_post_thumbnail_url(); ?>"/>
					</div>
					-->
				</div>
			</div>
			<div class="col-precio">
				<h2 class="titulo-oferta">Kit Solar <?php echo $parent_name; ?>
					<br>
					<span><?php echo $short_title;  ?></span>
				</h2>
				<div class="oferta-index-bullets">
					<div class="bullet">
						<div class="bullet-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
						</div>
						Paneles Solares Sunergy o Canadian Solar
					</div>
					<div class="bullet">
						<div class="bullet-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
						</div>
						Inversores de <?php echo $short_title;  ?>
					</div>
					<div class="bullet">
						<div class="bullet-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
						</div>
						Certificaci&oacute;n SEC e Internacional
					</div>
					<div class="bullet">
						<div class="bullet-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
						</div>
						5 años de garant&iacute;a sobre instalacion
					</div>
					<div class="bullet">
						<div class="bullet-image">
							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
						</div>
						10 años de garant&iacute;a sobre producto
					</div>
				</div>	
				<div class="instalacion-red-tag">Instalaci&oacute;n incluida, llave en mano</div>
				<div class="oferta-wide-pricetag">
					<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
				</div>
			</div>
		</div>
		<div class="oferta-wide-footer">
			<div class="cgreen-logo">
				<img class="swiper-lazy img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/logo_cgreen.png">
			</div>
			<div class="proud-to-be">
				<img class="swiper-lazy img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/proud-to-be.png">
			</div>
			<div class="visita-tecnica">
				<img class="swiper-lazy img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/visitatecnica.png">
			</div>
		</div>
	</div>
</div>

