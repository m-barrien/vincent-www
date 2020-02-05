<!-- SECCION PRODUCTOS -->
<div class="container-fluid">
	<section class="products-swiper-container vp-t vp-b">
		<h1 class="section-header">
			Productos
		</h1>


		<div class="col-md-12">
			<div class="swiper-container products-swiper">
				<div class="swiper-wrapper">

				<?php
				$params = array('posts_per_page' => 15, 
					'post_type' => 'oferta',
					'orderby' => 'rand' 
				);
				$wc_query = new WP_Query($params);
				?>
				<?php if ($wc_query->have_posts()) : ?>
				<?php while ($wc_query->have_posts()) :
			                $wc_query->the_post(); ?>
				<?php 			                
				$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
				if ($tax_term) {
				$oferta_category = $tax_term[0]->name;
				$parent_name= $tax_term[1]->name;
				}	
				?>			              
					<div class="swiper-slide">
			        	<a class="product-slide" href="<?php the_permalink(); ?>">
				        	<img class="img-fluid swiper-lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png"  data-src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.m.png">
				            <h4 class="product-title">
				               Kit Solar <?php the_title(); ?> con Instalaci&oacute;
				           </h4>
			           </a>

					</div>
			    <?php endwhile; ?>	
			    <?php wp_reset_postdata(); ?>				
				<?php endif; ?>


				<?php
				$params = array('posts_per_page' => 15, 
					'post_type' => 'product',
					'product_cat'=>'paneles-solares,inversores,kits-solares,accesorios',
					'orderby' => 'rand' 
				);
				$wc_query = new WP_Query($params);
				?>
				<?php if ($wc_query->have_posts()) : ?>
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
				<?php wp_reset_postdata(); ?>
				

				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
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