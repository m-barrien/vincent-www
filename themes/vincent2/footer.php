<div class="container-fluid">
	<section id="contacto-footer" class="bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/form-min.png">
		<div class="col-sm-12 col-md-12">
			<h1>Contacto</h1>
			<p class="highlight text-center">Contáctenos y reserve una visita gratuita y sin compromiso</p>
		</div>
		<div class="container">
			<div class="row">
				<form class="col">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputName4">Nombre</label>
				      <input type="text" class="form-control" id="inputName4" placeholder="Nombre">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCiudad">Ciudad</label>
				      <input type="text" class="form-control" id="inputCiudad">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputRegion">Region</label>
				      <select id="inputRegion" name="region" class="form-control">
							<option value="" disabled> Seleccionar Region </option>
							<option>I de Tarapacá</option>
							<option>II de Antofagasta</option>
							<option>III de Atacama</option>
							<option>IV de Coquimbo</option>
							<option>V de Valparaíso</option>
							<option>Metropolitana de Santiago</option>
							<option>VI del Libertador General Bernardo O’Higgins</option>
							<option>VII del Maule</option>
							<option>VIII de Concepción</option>
							<option>IX de la Araucanía</option>
							<option>X de Los Lagos</option>
							<option>XI de Aysén del General Carlos Ibañez del Campo</option>
							<option>XII de Magallanes y de la Antártica Chilena</option>
							<option>XIV de Los Ríos</option>
							<option>XV de Arica y Parinacota</option>
							<option>XVI del Ñuble</option>
				      </select>
				    </div>
				  </div>
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="inputConsulta">Consulta</label>
					      <textarea name="consulta" type="text" class="form-control" id="inputConsulta" placeholder="Consulta o comentario" rows="3" style="height: auto;"></textarea>
					    </div>
					  </div>				    
				  <button type="submit" class="btn">Enviar la Solicitud</button>
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
								<img class="img-fluid lazy" data-src="<?php echo $image[0]; ?>">
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
</footer>
  </body>
</html>