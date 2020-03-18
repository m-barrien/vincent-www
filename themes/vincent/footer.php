<!-- Modal contacto -->
<script src="https://www.google.com/recaptcha/api.js?render=6LecWrQUAAAAAE83dQ6F_0YUAhDb-LpgPijunvQL"></script>
<script>
grecaptcha.ready(function () {
    grecaptcha.execute('6LecWrQUAAAAAE83dQ6F_0YUAhDb-LpgPijunvQL', { action: 'contact' }).then(function (token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
    });
});
</script>
<?php if(isset($_GET['status'])) : ?>
<div class="modal fade" id="modalGracias" tabindex="-1" role="dialog" aria-labelledby="modalGraciasLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalContactoTitle">
        	<img style="width: 33px;height: auto; display: inline-block;" src="<?php echo get_site_icon_url(); ?>">
        	Contacto
    	</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<div class="modal-gracias-body">
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
<script type="text/javascript">
	$( document ).ready(function() {
        $('#modalGracias').modal('show');
    });
 
</script>
<?php endif; ?>

<div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-labelledby="modalContactoTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalContactoTitle">
        	<img style="width: 33px;height: auto; display: inline-block;" src="<?php echo get_site_icon_url(); ?>">
        	Contacto
    	</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-contacto-body" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/snippets/solar-pact.jpg');">
		<form method="post" id="formContacto" action="/analytics/consulta">
			<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
		  <div class="form-group">
		    <label for="exampleFormControlInput1">E-mail*</label>
		    <input type="email" name="contacto_email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" required="">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Consulta</label>
		    <textarea class="form-control" name="contacto_query" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		</form>        
      </div>
      <div class="modal-footer">
      	<p class="text-center"><i>Uno de nuestros expertos se pondra en contacto con usted por asesor&iacute;a.</i></p>
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" form="formContacto" class="btn btn-primary"><strong>Enviar</strong></button>
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
			<a href="mailto:info@vincentsolar.com?subject=Contacto%20|%20Vincent%20Solar%20-%20Kit%20Solar%20Ongrid%20|%20Kit%20Solar%20Offgrid%20|%20Energía%20Solar%20|%20Panel%20Solar%20Fotovoltaico%20|%20Paneles%20Fotovoltaicos">
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
			<a href="mailto:info@vincentsolar.com?subject=Contacto%20|%20Vincent%20Solar%20-%20Kit%20Solar%20Ongrid%20|%20Kit%20Solar%20Offgrid%20|%20Energía%20Solar%20|%20Panel%20Solar%20Fotovoltaico%20|%20Paneles%20Fotovoltaicos">
				<i class="fas fa-envelope"></i>
				info@vincentsolar.com
			</a>
		</div>
		<a href="#modalContacto" data-toggle="modal" data-target="#modalContacto">
			<i class="fas fa-hand-pointer"></i>
			Contacto
		</a>
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/it_line.png">
	</div>
	<div class="dock-button mov" style="margin-bottom: 5px;">
		<div id="collapseContacto" class="collapse">
			<a href="mailto:info@vincentsolar.com?subject=Contacto%20|%20Vincent%20Solar%20-%20Kit%20Solar%20Ongrid%20|%20Kit%20Solar%20Offgrid%20|%20Energía%20Solar%20|%20Panel%20Solar%20Fotovoltaico%20|%20Paneles%20Fotovoltaicos">
				<i class="fas fa-envelope"></i>
				Correo
			</a>
			<a href="tel:+56322948569">
				<i class="fas fa-phone"></i>
				Llamar
			</a>
		</div>
		<!-- 
		<a data-toggle="collapse" href="#collapseContacto" role="button" aria-expanded="false" aria-controls="collapseContacto"> 
		-->
		<a href="mailto:info@vincentsolar.com?subject=Contacto%20|%20Vincent%20Solar%20-%20Kit%20Solar%20Ongrid%20|%20Kit%20Solar%20Offgrid%20|%20Energía%20Solar%20|%20Panel%20Solar%20Fotovoltaico%20|%20Paneles%20Fotovoltaicos">
			<i class="fas fa-envelope"></i> Consulta
		</a>
	</div>
	<div class="dock-button mov" style="margin-bottom: 5px;">
		<a href="tel:+56322948569">
			<i class="fas fa-phone"></i> Llamar
		</a>
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/it_line.png">
	</div>

</div>

  </body>
</html>
<a href=""></a>