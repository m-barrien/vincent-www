<div class="oferta-short" onclick="window.location='<?php echo get_permalink() ; ?>'">
	<div class="oferta-short-title">
		<span>
			<?php echo get_post_meta($post->ID, 'short-title')[0] ; ?>
		</span>
	</div>	
	<div class="oferta-price-tag">
		<span>
			<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
		</span>
	</div>
	
</div>