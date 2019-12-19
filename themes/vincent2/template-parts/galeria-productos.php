<!-- SECCION PRODUCTOS -->
<div class="container-fluid">
	<section class="products-swiper-container">
		<h1 class="section-header">
			Productos
		</h1>

			<?php
			$params = array('posts_per_page' => 15, 
				'post_type' => 'product',
				'product_cat'=>'paneles-solares,inversores,kits-solares',
				'orderby' => 'rand' 
			);
			$wc_query = new WP_Query($params);
			?>
			<?php if ($wc_query->have_posts()) : ?>
		<div class="col-md-12">
			<div class="swiper-container products-swiper">
				<div class="swiper-wrapper">
				<?php while ($wc_query->have_posts()) :
			                $wc_query->the_post(); ?>
					<div class="swiper-slide">
			        	<a class="product-slide" href="<?php the_permalink(); ?>">
				        	<img class="img-fluid swiper-lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png"  data-src="<?php the_post_thumbnail_url('thumbnail'); ?>">
				            <h4 class="product-title">
				               <?php the_title(); ?>
				           </h4>
			           </a>

					</div>
			    <?php endwhile; ?>

				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<div class="w-100">
			<img class="lazy vincent-by-img desk" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png"  data-src="<?php echo get_template_directory_uri() ?>/image/snippets/vincent-by.png">
			<img class="lazy vincent-by-img mov" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png"  data-src="<?php echo get_template_directory_uri() ?>/image/snippets/vincent-by.mov.png">
		</div>
		<?php wp_reset_postdata(); ?>
		<?php else:  ?>
		<div>
			<?php _e( 'Sin Productos' ); ?>
		</div>
		<?php endif; ?>

		<ul>
		</ul>		
	</section>
</div>
<!-- /SECCION PRODUCTOS -->