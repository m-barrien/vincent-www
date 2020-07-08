<?php 
$oferta_category ="Instalaci&oacute;n Residencial";
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
$parent_name= $tax_term[1]->name;
}						
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>
<div class="kit-col-container" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-vertical-image.jpg');">
	<a class="white-container" href="<?php echo get_permalink() ; ?>">
		<div class="text-body">
			<div class="number">00</div>
			<div class="little-title">Sistemas Solares</div>
			<div class="kw"><?php echo $short_title; ?></div>
		</div>
	</a>
</div>
