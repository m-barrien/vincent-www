<section class="oferta">
	
	<div class="col-sm-12 col-md-10 offset-md-1">
		<h2 class="px-2"><?php the_title() ;?> <small>Instalación incluida</small></h2>
		<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-5">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="py-2">
							<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-7 oferta-body">
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
					<?php the_content() ;?>
				</div>
					
		</div>

	</div> <!-- /.row -->

</section>
