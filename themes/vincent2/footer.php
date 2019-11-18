<div class="container-fluid">
	<section id="contacto-footer" >
		<div class="col-sm-12 col-md-12">
			<h1>Contactanos</h1>
			<p class="highlight text-center"></p>
		</div>
		<div class="container">
			<div class="row">
				<form class="col">
				  <div class="form-row">
				    <div class="form-group offset-md-1 col-md-5">
				      <label for="inputName4">Nombre Completo*</label>
				      <input type="text" class="form-control" id="inputName4" >
				      <label for="inputEmail4">Correo*</label>
				      <input type="email" class="form-control" id="inputEmail4" >
				      <label for="inputTelefono">Teléfono*</label>
				      <input type="text" class="form-control" id="inputTelefono">
				    </div>
				    <div class="form-group col-md-5">
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="inputConsulta">Consulta</label>
					      <textarea name="consulta" type="text" class="form-control" id="inputConsulta"  style="min-height: 223px;"></textarea>
					    </div>
					  </div>				    
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="col-md-10 offset-md-1">
				  		<button type="submit" class="btn">Enviar mensaje</button>
				  	</div>
				  </div>
				</form>				
			</div>			
		</div>
	</section>
</div>
<footer>
	<section class="footer-cgreen-logo">
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/logo_cgreen.png">
	</section>
	<section class="footer-address">
		<address>
			<i class="fas fa-map-marker-alt"></i>
			<div class="address-text">
				Los Conquistadores 1925
				<br>
				<span>Santiago, Chile</span>
			</div>
		</address>
		<address>
			<i class="fas fa-map-marker-alt"></i>
			<div class="address-text">
				Av. Industrial 1198
				<br>
				<span>El Belloto, Chile</span>
			</div>
		</address>
		<address>
			<i class="fas fa-map-marker-alt"></i>
			<div class="address-text">
				Florianopolis
				<br>
				<span>Brasil</span>
			</div>
		</address>
		<address>
			<a href="tel:+56322948569">
				<i class="fas fa-phone"></i>
				+56 32 2948 569
			</a>
		</address>
		<address>
			<i class="fas fa-globe"></i>
			www.vincentsolar.com
			<br>
			<a href="mailto:info@vincentsolar.com">
				<i class="fas fa-envelope"></i>
				info@vincentsolar.com
			</a>
		</address>
	</section>
	<section>
		<div class="partners-container">
			<h3>Nuestros Partners</h3>
			<div class="row">
					<?php
					wp_reset_query();
					$args = array(
					        'post_type' => 'attachment',
					        'post_mime_type' => 'image',
					        'orderby' => 'post_date',
					        'order' => 'desc',
					        'posts_per_page' => '-1',
					        'post_status'    => 'inherit',
					        'category_name'=>'partners',
					         );

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();
						$image = wp_get_attachment_image_src( get_the_ID(), $size="full" ); 
							?>
							<div class="icon">
								<img class="img-fluid lazy" src="" data-src="<?php echo $image[0]; ?>">
							</div>								
							<?php

					endwhile;
					?>				
			</div>
		</div>
	</section>
	<section>
		<h3 style="width: 100%; text-align: center; padding-top: 100px;">2019 Vincent Solar | Todos los derechos reservados</h3>
	</section>

<?php
	if ($_SESSION['show_modal']) {
		?>
      <div class="modal fade" id="modalOferta" tabindex="-1" role="dialog" aria-labelledby="modalOfertaTitle" aria-hidden="false">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-body" style="padding:0;">
              <button type="button" class="close popup-close-button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="false">&times;</span>
              </button>
              <a href="/ofertas">
              	<img class="img-fluid" src="https://via.placeholder.com/1280x500">
              </a>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
	    var width = $(window).width();  
	    if(width > 849){
      		$('#modalOferta').modal('show');
	    }      	
      </script>
		<?php
	}
?>
</footer>
  </body>
</html>