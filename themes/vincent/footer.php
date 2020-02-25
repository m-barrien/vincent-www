<!-- Modal contacto -->
<!--
<script src="https://www.google.com/recaptcha/api.js?render=6LecWrQUAAAAAE83dQ6F_0YUAhDb-LpgPijunvQL"></script>
<script>
grecaptcha.ready(function () {
    grecaptcha.execute('6LecWrQUAAAAAE83dQ6F_0YUAhDb-LpgPijunvQL', { action: 'contact' }).then(function (token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
    });
});
</script>
-->
<?php if(isset($_GET['status'])) : ?>
<div class="modal fade" id="modalGracias" tabindex="-1" role="dialog" aria-labelledby="modalGraciasLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    	<div class="modal-header">
			<img class="lazy" style="width: 10%; height:auto;" data-src="<?php site_icon_url(); ?>" alt="Vincent Solar">
    		
	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<span aria-hidden="true">&times;</span>
	        </button>
    	</div>
		<div class="modal-contacto-body">
			<div class="banner-img"
				 style="background-image: url('<?php echo get_template_directory_uri() ?>/image/snippets/solar-pact.jpg');"
				 alt="Venta de paneles solares kit placas solares kit"
        	>
        	</div>
        	<div class="text-container" style="padding: 20px">
        		
        	<?php if($_GET['status'] == "ok") :?>
				<h1>Gracias!</h1>    	
				<h4>Uno de nuestros técnicos especialistas se contactará con Ud a la brevedad.</h4>
        	<?php elseif($_GET['status'] == "fail") :?>
				<h1>Oops!</h1>    	
				<h4>Hubo un problema al enviar su formulario, favor intentar denuevo.</h4>
			<?php endif; ?>
        	</div>
		</div>
    </div>
  </div>
</div><!-- Modal gracias -->
<?php endif; ?>

<div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-labelledby="modalContactoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    	<div class="modal-header">
			<img class="lazy" style="width: 10%; height:auto;" data-src="<?php site_icon_url(); ?>" alt="Vincent Solar">
    		
	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<span aria-hidden="true">&times;</span>
	        </button>
    	</div>
		<div class="modal-contacto-body">
			<div class="banner-img"
				 style="background-image: url('<?php echo get_template_directory_uri() ?>/image/snippets/solar-pact.jpg');"
				 alt="Venta de paneles solares kit placas solares kit"
        	>
        	</div>
			<form method="POST" action="/consulta">
			  <div class="form-group">
			    <label for="exampleInputCorreo1">Correo</label>
			    <input name="cmail" type="email" class="form-control form-control-lg" id="exampleInputCorreo1" aria-describedby="emailHelp" placeholder="Ingresar Correo">
			    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo con terceros.</small>
			  </div>
				<div class="form-group">
				<label for="consultaTextbox">Consulta</label>
					<textarea name="cmessage" class="form-control form-control-lg" id="consultaTextbox" rows="3"></textarea>
				</div>
				<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
			  <button type="submit" class="btn btn-primary">Enviar</button>
			</form>        	
		</div>
    </div>
  </div>
</div><!-- Modal contacto -->

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
			<a href="mailto:info@vincentsolar.com?subject=Consulta&body=Quiero%20informaci&oacute;n%20sobre:">
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

</footer>


<div class="bottom-dock">
	<div class="dock-button desk">
		<div id="collapseContacto" class="collapse">
			<a href="tel:+56322948569">
				<i class="fas fa-phone"></i>
				(32) 294 8569
			</a>
			<a href="mailto:info@vincentsolar.com?subject=Consulta&body=Quiero%20informaci&oacute;n%20sobre:">
				<i class="fas fa-envelope"></i>
				info@vincentsolar.com
			</a>
		</div>
		<a href="mailto:info@vincentsolar.com?subject=Consulta&body=Quiero%20informaci&oacute;n%20sobre:">
			<i class="fas fa-hand-pointer"></i>
			Contacto
		</a>
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/it_line.png">
	</div>
	<div class="dock-button mov" style="margin-bottom: 5px;">
		<div id="collapseContacto" class="collapse">
			<a href="mailto:info@vincentsolar.com?subject=Consulta&body=Quiero%20informaci&oacute;n%20sobre:">
				<i class="fas fa-envelope"></i>
			</a>
			<a href="tel:+56322948569">
				<i class="fas fa-phone"></i>
			</a>
		</div>
		<a href="mailto:info@vincentsolar.com?subject=Consulta&body=Quiero%20informaci&oacute;n%20sobre:">
			<i class="fas fa-envelope"></i> Contacto
		</a>
	</div>

	<div class="dock-button mov">
		<a href="tel:+56322948569">
			<i class="fas fa-phone"></i>
			Llamar
		</a>
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/it_line.png">
	</div>
</div>

  </body>
</html>