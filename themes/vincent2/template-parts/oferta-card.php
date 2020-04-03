<?php 
$oferta_category ="Instalaci&oacute;n Residencial";
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
$parent_name= $tax_term[1]->name;
}						
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>

<div class="oferta-card-scene">
  <div class="oferta-card" data-fliplock="0">
    <div class="oferta-card__face oferta-card__face--front">
		<div class="kit-verticals-col" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-vertical-image.jpg');">
			<a href="<?php the_permalink(); ?>" class="gray-container">
				<div class="kit-verticals-text-body">
					<div class="little-title">Soluci&oacute;n Hogar</div>
					<div class="kw">
						<?php echo $short_title; ?>
					</div>
				</div>
			</a>
			
		</div>	
    </div>
    <div class="oferta-card__face oferta-card__face--back">
    </div>
  </div>
</div>