<?php
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
if ($tax_term) {
$oferta_category = $tax_term[0]->name;
$parent_name= $tax_term[1]->name;
}						
$short_title=get_post_meta($post->ID, 'short-title')[0] ;
?>
<div class="kit-col-container">
	<a href="<?php the_permalink(); ?>" class="">
		<div class="img-wrapper">
			<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
		</div>
		<div class="oferta-text-body">
			<div class="short"><?php echo $short_title; ?></div>
			<div class="title">Kit Solar <?php the_title(); ?></div>
			<div class="price">$<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?></div>
			
		</div>
	</a>
	
</div>	