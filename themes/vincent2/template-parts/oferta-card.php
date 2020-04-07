<?php 
$oferta_category ="Instalaci&oacute;n Residencial";
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
$parent_name= $tax_term[1]->name;
}						
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>

<div class="oferta-card-scene" onclick="window.location='<?php the_permalink(); ?>'">
  <div class="oferta-card">
    <div class="oferta-card__face oferta-card__face--front">
		<div class="kit-verticals-col" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-vertical-image.jpg');"	 >
			<!-- style="background-image: url('<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-vertical-image.jpg');" -->
			<a href="<?php the_permalink(); ?>" class="gray-container">
				<div class="kit-verticals-text-body">
					<div class="little-title">Kit <br> Fotovoltaico <br> Hogar </div>
					<div class="kw">
						<?php echo $short_title; ?>
					</div>
				</div>
			</a>
			
		</div>	
    </div>
    <div class="oferta-card__face oferta-card__face--back" style="background-color:white; background-image:url('<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-bg-mov.jpg');">
<div class="oferta-index-single-row" >
	<div class="oferta-mov-header">
		<h2 class="titulo-oferta">Kit Solar <?php the_title(); ?>
		</h2>
	</div>
	<div class="superoferta-wrapper-vertical">
		<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/superoferta.png">
	</div>
	<div class="oferta-index-category-kit-img">
		<div class="center-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.m.png">
		</div>
		
	</div>
	<div class="oferta-index-description-container">
		<div class="oferta-price-mov-container">
			<div class="instalacion-red-tag vertical">Instalaci&oacute;n incluida, llave en mano</div>
			<div class="oferta-vertical-pricetag">
				<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
			</div>
		</div>
		<div class="oferta-index-bullets vertical">
			<div class="bullet">
				<div class="bullet-image vertical">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				Paneles Solares TrinaSolar o Vincent Solar
			</div>
			<div class="bullet">
				<div class="bullet-image vertical">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				Inversores de <?php echo $short_title;  ?>
			</div>
			<div class="bullet">
				<div class="bullet-image vertical">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				5 años de garant&iacute;a sobre instalaci&oacute;n
			</div>
			<div class="bullet">
				<div class="bullet-image vertical">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/check.svg">
				</div>
				10 años de garant&iacute;a sobre producto
			</div>
		</div>	
	</div>
	<div class="oferta-wide-footer">
		<div class="proud-to-be">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/proud-to-be.png">
		</div>

		<div class="visita-tecnica vertical">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/visitatecnica.png">
		</div>		
	</div>	
</div>
    </div>
  </div>
</div>