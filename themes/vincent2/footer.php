<!-- SECCION PRODUCTOS -->
<?php
$match = array();
if( $_SERVER['REQUEST_URI'] == "/" || preg_match('/productos/', $_SERVER['REQUEST_URI'], $match) || is_404()){
}
else{
	get_template_part( 'template-parts/galeria-productos', 'single' );
}
?>

<?php
if( !preg_match('/noticias/', $_SERVER['REQUEST_URI'], $match)):
?>
<div class="w-100 gray-bg vp-t">	
	<div class="w-100" style="overflow: hidden;" onclick="window.location.href ='/noticias'">
		<h1 class="text-center">&Uacute;ltimas Noticias</h1>
	</div>
	<div id="noticias-full-container" class="container">
		<section class="noticias">
			<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
			 
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
			 	
				get_template_part( 'template-parts/content-short', get_post_format() );
			 
				endwhile;
				wp_reset_postdata();
				wp_reset_query();
			?>

		</section>
	</div>
</div>
<?php
endif;
?>
<!-- /SECCION PRODUCTOS -->
<div class="container-fluid vp-t">
	<section id="contacto-footer" >
		<div class="col-sm-12 col-md-12">
			<h1>Contactanos</h1>
			<p class="highlight text-center">Envianos tus consultas, uno de nuestros técnicos expertos lo contactar&aacute; por asesor&iacute;as.</p>
		</div>
		<div class="container">
			<div class="row">
				<form class="col">
				  <div class="form-row">
				    <div class="form-group offset-md-1 col-md-10">
				      <label for="inputEmail4">Correo*</label>
				      <input type="email" class="form-control" id="inputEmail4" >
				    </div>
				    <div class="form-group offset-md-1 col-md-10">
				      <label for="inputConsulta">Consulta</label>
				      <textarea name='Description' maxlength='32000' type="text" class="form-control" id="inputConsulta"  style=""></textarea>
				    </div>				    
				  </div>
				  <div class="form-row">
				  	<div class="col-md-10 offset-md-1">
				  		<button type="submit" class="btn">Enviar</button>
				  	</div>
				  </div>
				</form>				
			</div>			
		</div>
	</section>
</div>
<footer>
	<section>
		<div class="col">
			<h4 class="text-center" style="font-style: italic;">
				Todos nuestros clientes tienen el sello cGreen que representan...
			</h4>
			
		</div>
	</section>
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
			<h3>Han confiado en nosotros</h3>
			<div class="icon-row">
					<?php
					wp_reset_query();
					$args = array(
					        'post_type' => 'attachment',
					        'post_mime_type' => 'image',
					        'orderby' => 'post_date',
					        'order' => 'desc',
					        'posts_per_page' => '-1',
					        'post_status'    => 'inherit',
					        'category_name'=>'clientes',
					         );

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post();
						$image = wp_get_attachment_image_src( get_the_ID(), $size="full" ); 
							?>
							<div class="icon grow">
								<img class="img-fluid lazy" src="" data-src="<?php echo $image[0]; ?>">
							</div>								
							<?php

					endwhile;
					?>				
			</div>
		</div>
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
							<div class="icon grow">
								<img class="img-fluid lazy" src="" data-src="<?php echo $image[0]; ?>">
							</div>								
							<?php

					endwhile;
					?>				
			</div>
		</div>
	</section>
	<section>
		<h3 class="px-2" style="width: 100%; text-align: center; padding-top: 100px;">2020 Vincent Solar | Todos los derechos reservados</h3>
	</section>

</footer>
</div> <!-- master container -->
</div> <!-- master container wrapper -->


<?php
	if ($_SESSION['show_modal'] && false) {
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
<!-- boton contacto nuevo
<div class="fixed-button-container">
	<div class="fixed-button-wrapper desk">
		<div class="fixed-button-header">
			<div class="text-container">
				Contactanos
			</div>
			<div class="cross">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-100"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z" class=""></path></svg>
			</div>
		</div>
		<div class="fixed-button-body">
				<form class="col">
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputName4">Nombre Completo*</label>
				      <input type="text" class="form-control" id="inputName4" >
				      <label for="inputEmail4">Correo*</label>
				      <input type="email" class="form-control" id="inputEmail4" >
				      <label for="inputTelefono">Teléfono*</label>
				      <input type="text" class="form-control" id="inputTelefono">
				    </div>
				    <div class="form-group col-md-12">
					  <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="inputConsulta">Consulta</label>
					      <textarea name="consulta" type="text" class="form-control" id="inputConsulta"  style=""></textarea>
					    </div>
					  </div>				    
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="col-md-12">
				  		<button type="submit" class="btn">Enviar mensaje</button>
				  	</div>
				  </div>
				</form>	
		</div>
	</div>
	<div class="fixed-button-wrapper mov">
		<div class="fixed-button-header">
			<div class="text-container">
				<a href="mailto:info@vincentsolar.com">Contactanos</a>
			</div>
		</div>
	</div>
</div>
-->


<div class="bottom-dock">
	<div class="dock-button desk">
		<div id="collapseContacto" class="collapse">
			<a href="tel:+56322948569">
				<i class="fas fa-phone"></i>
				(32) 294 8569
			</a>
			<a href="mailto:info@vincentsolar.com?subject=Consulta">
				<i class="fas fa-envelope"></i>
				info@vincentsolar.com
			</a>
		</div>
		<a href="/contacto#linkFormulario">
			<i class="fas fa-hand-pointer"></i>
			Contactenos
		</a>
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/it_line.png">
	</div>
	<div class="dock-button mov">
		<div id="collapseContacto" class="collapse">
			<a href="tel:+56322948569">
				<i class="fas fa-phone"></i>
				Llamar
			</a>
			<a href="mailto:info@vincentsolar.com?subject=Consulta">
				<i class="fas fa-envelope"></i>
				Correo
			</a>
		</div>
		<a id="contactoExpander" data-toggle="collapse" href="#collapseContacto" role="button" aria-expanded="false" aria-controls="collapseContacto">
			<i class="fas fa-hand-pointer"></i>
			Contactenos
		</a>
		<img src="<?php echo get_template_directory_uri() ?>/image/snippets/it_line.png">
	</div>

</div>	
  </body>
</html>