<?php
wp_reset_postdata();
wp_reset_query();
$args= array(
'post_type' => array('oferta'),
'post_status' => 'publish',
'posts_per_page' => -1,
'meta_key'		=> 'featured',
'orderby'		=> 'meta_value',
'order'			=> 'DESC'
);

$loop = new WP_Query( $args );
?>	
<div class="swiper-container movil-swiper d-block d-md-none">
    <div class="swiper-wrapper">
	    <?php
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = null;
					?>
			    	<div class="swiper-slide">
			      		<a href="<?php echo get_post_permalink(); ?>">
			      		<img class="img-fluid swiper-lazy" src="<?php echo the_post_thumbnail_url(); ?>">
			      		</a>
			      	</div>
					<?php

			endwhile;
			wp_reset_postdata();
	        wp_reset_query();
		?>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>		    
</div>