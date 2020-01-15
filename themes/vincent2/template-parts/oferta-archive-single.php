<?php
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
$parent_name= $tax_term[1]->name;
}						
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>
<div class="kit-verticals-col">
	<a href="<?php the_permalink(); ?>" class="gray-container">
		<img class="kit-verticals-img" src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-20kw.jpg">
		<div class="kit-verticals-text-body">
			<div class="little-title">Soluci&oacute;n Hogar</div>
			<div class="kw">
				<?php echo $short_title; ?>
			</div>
		</div>
	</a>
	
</div>	

