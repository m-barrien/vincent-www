<div class="container-fluid">
	<section id="contacto-footer" >
		<div class="col-sm-12 col-md-12">
			<h1>Solicita una llamada</h1>
			<p class="highlight text-center">Contáctenos y reserve una visita gratuita sin compromiso</p>
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
	<?php wp_nav_menu( array( '
      theme_location' => '',          
      'menu'      => 'menu-footer',
      'container'      => '',
      'menu_id'      => '',
      'reverse'      => FALSE,
      'menu_class'     => 'menu' ) ); 
    ?>
	<section class="footer-down">
		<div class="text-container">
			<address>
	            &copy; copyright 2014-2019 Vincent Solar
	            <br><br>
	            Oficina Legal: Los Conquistadores 1925, Santiago, Chile.
	            <br>
	            Oficina Operativa y Distribución: Av. Industrial 1198, El Belloto, Chile.
	            <br>
	            Proximamente Florianopolis, Brasil.
	            <br>
	            <br>
	            Tel <strong><a class="" href="tel:+56322948569">(32)294-8569</a> </strong>
	            <br>
	            E-Mail <strong><a class="" href="mailto:info@vincentsolar.com">info@vincentsolar.com</a></strong>
            </address>
            <div class="social">
            	<div class="ft-label">Síguenos en las redes sociales</div>
            	<a href="#">
            		<i class="fab fa-instagram"></i>
            		Instagram
            	</a>
            	<a href="#">
            		<i class="fab fa-facebook-f"></i>
            		Facebook
            	</a>
            	<a href="#">
            		<i class="fab fa-linkedin-in"></i>
            		Linked In
            	</a>
            </div>
		</div>
		<div class="partners-container">
			<div class="ft-label">Somos socios de</div>
			<div class="row">
					<?php
					wp_reset_query();
					$args = array(
					        'post_type' => 'attachment',
					        'post_mime_type' => 'image',
					        'orderby' => 'post_date',
					        'order' => 'desc',
					        'posts_per_page' => '3',
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
		<div class="subscribe-container">
			<div class="subscribe-body">
			<div class="subscribe-wrapper">
			    <h1 class="shrink">Suscríbase a nuestro boletín</h1>
				<form>
				  <div class="form-group">
				    <input type="email" class="form-control" id="ingresarCorreo" aria-describedby="emailHelp" placeholder="Ingresar Correo">
				    <small id="emailHelp" class="form-text">Nunca compartiremos tu información personal.</small>
				  </div>
				  <button type="submit" class="btn btn-primary">Suscribirme</button>
				</form>
			</div>
			</div>
		</div>
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