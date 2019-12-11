<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>
<a href="<?php the_permalink(); ?>" class="oferta-index-single-row" style="background-image:url('<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-bg-mov.jpg');">
	<div class="oferta-mov-header">
		<h3 class="super-oferta">Super oferta</h3>
		<h2 class="titulo-oferta">Kit Solar OnGrid
			<br>
			<span><?php echo $short_title; ?></span>
		</h2>
	</div>
	<div class="oferta-index-category-kit-img">
		<div class="center-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
		</div>
		
	</div>
	<div class="oferta-index-description-container">
		<div class="oferta-price-mov-container">
			<div class="valor-oferta">Valor Oferta</div>
			<div class="oferta-wide-pricetag">
				<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
			</div>
		</div>
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
				Certificacion SEC e Internacional
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				Instalacion Incluida
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				Producto llave en mano
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				5 años de garantia sobre instalacion
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				10 años de garantia sobre producto
			</div>
		</div>	
	</div>
	<div class="oferta-wide-footer">
		<div class="proud-to-be">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/proud-to-be.png">
		</div>
	</div>	
</a>

