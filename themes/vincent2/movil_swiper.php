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



//tramo de custom fields
<?php 
						$nombre_paneles_value = get_post_meta( get_the_ID(), 'nombre_paneles', true );
						$nombre_inversor_value = get_post_meta( get_the_ID(), 'nombre_inversor', true );
						$nombre_baterias_value = get_post_meta( get_the_ID(), 'nombre_baterias', true );
						$nombre_estanque_value = get_post_meta( get_the_ID(), 'nombre_estanque', true );
						if (! empty( $nombre_paneles_value ) || ! empty( $nombre_inversor_value || ! empty( $nombre_baterias_value )  || ! empty( $nombre_estanque_value ) )) 
						{
					?>
					<h3 class="my-3">Productos</h3>
					<div class="productos">
						<?php
							// Check if the custom field has a value.
							if ( ! empty( $nombre_paneles_value ) ) {
							    ?>
								<div class="pill">
									<a href="/categoria/paneles-solares">
										<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/paneles.png">
										<p> <?php echo $nombre_paneles_value; ?> </p>
									</a>
								</div>
							    <?php
							}
						 ?>						

						<?php
							// Check if the custom field has a value.
							if ( ! empty( $nombre_inversor_value ) ) {
							    ?>
								<div class="pill">
									<a href="/categoria/inversores">
										<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/inversor.png">
										<p> <?php echo $nombre_inversor_value; ?> </p>
									</a>
								</div>
							    <?php
							}
						 ?>	
						<?php
							// Check if the custom field has a value.
							if ( ! empty( $nombre_baterias_value ) ) {
							    ?>
								<div class="pill">
									<a href="/categoria/baterias">
										<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/baterias.png">
										<p> <?php echo $nombre_baterias_value; ?> </p>
									</a>
								</div>
							    <?php
							}
						 ?>							 	
						<?php
							// Check if the custom field has a value.
							if ( ! empty( $nombre_estanque_value ) ) {
							    ?>
								<div class="pill">
									<a href="/categoria/colectores-solares">
										<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/estanque.png">
										<p> <?php echo $nombre_estanque_value; ?> </p>
									</a>
								</div>
							    <?php
							}
						 ?>								
					</div>
					<?php } ?>