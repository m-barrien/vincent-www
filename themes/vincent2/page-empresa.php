<?php /* Template Name: Soluciones Empresa */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/comercial.jpg')">
</div>


<div class="container">
	<h2 class="site-title"> <?php the_title(); ?></h2>
</div>


<!-- Banner a beneficios empresa -->
<div class="container-fluid">
	<section class="half-banner bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/2.jpg">
		<img class="watermark lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/watermark.png">
		<div class="half-banner-body right">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/2.jpg">
			</div>			
			<div class="w-100">
				<h1>
					Beneficios de la energía fotovoltaica para tu empresa
				</h1>
				<ul>
					<li>Ahorro inmediato en el gasto de energía.</li>
					<li>Inversión que dura en el tiempo.</li>
					<li>Cuida el medioambiente, Marketing ecológico para su empresa.</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<!-- Banner a beneficios empresa -->

<!-- Banner a soluciones empresa -->
<div class="container-fluid">
	<section class="half-banner tall bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-empresa-2.jpg">
		<img class="watermark right lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/watermark.png">
		<div class="half-banner-body">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/seccion-empresa-2.jpg">
			</div>
			<div class="w-100">
				<h1>
					La mejor solución
				</h1>
				<p>
					Las soluciones solares de <strong>Vincent Solar</strong> se distinguen por sus componentes del más alto estándar a nivel internacional, instalado y ejecutado para lograr el máximo beneficio con la <strong>mejor relación precio-calidad</strong>.
				</p>
				<div class="img-wrapper">
					<img class="kit-img lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/equipamiento_empresa.png">
				</div>				
			</div>
		</div>
	</section>
</div>
<!-- Banner a soluciones empresa -->

<!-- como funciona ongrid -->
<div class="container">
	<h1>¿Como funciona el sistema <span class="orange">ON GRID</span> en una empresa?</h1>
</div>
<div class="container-fluid">
	<section class="full-width-diagram bg-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/paneles-faded.jpg">
		<div class="img-wrapper">
			<img class="img-fluid lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo get_template_directory_uri() ?>/image/covers/diagrama_empresas.png">
		</div>
	</section>
</div>
<!-- como funciona ongrid -->

<div class="gallery-container">
	<h1>Proyectos <strong>Vincent</strong> en el pa&iacute;s</h1>
	<div id="" class="lightgallery">
			<?php
			$args = array(
			        'post_type' => 'attachment',
			        'post_mime_type' => 'image',
			        'orderby' => 'post_date',
			        'order' => 'desc',
			        'posts_per_page' => '-1',
			        'post_status'    => 'inherit',
			        'category_name'=>'empresas',
			         );

			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
				$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="thumbnail" ); 
					?>
				<a class="gallery-img-wrapper" href="<?php echo $image[0]; ?>" data-sub-html="<h4><?php the_title(); ?></h4>">
					<img class="d-none lazy" data-src="<?php echo $image_thumb[0]; ?>">
					<div class="gallery-image bg-lazy" data-src="<?php echo $image_thumb[0]; ?>" hd-src="<?php echo $image[0]; ?>">
						
					</div>
					<p class="gallery-title">
						<?php the_title(); ?>
					</p>
				</a>

				<?php
			endwhile;				    
			?>			
	</div>
</div>


<div class="footer-ofertas-container v-padding">
	<div class="container">
		<h1>Nuestros kits en <span class="orange">OFERTA</span></h1>
	</div>
	<div class="container">
		<section>
			<div class="kit-group-body" >
				<div class="row">
					<div class="kit-col-container">
						<a class="gray-container"  href="#slide1">
							<img src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-20kw.jpg">
							<div class="text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									20kw
								</div>
							</div>
						</a>
						
					</div>	
					<div class="kit-col-container">
						<a class="gray-container"  href="#slide2">
							<img src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-30kw.jpg">
							<div class="text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									30kw
								</div>
							</div>
						</a>
						
					</div>	
					<div class="kit-col-container">
						<a class="gray-container"  href="#slide3">
							<img src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-50kw.jpg">
							<div class="text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									50kw
								</div>
							</div>
						</a>
						
					</div>	
					<div class="kit-col-container">
						<a class="gray-container"  href="#slide4">
							<img src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-100kw.jpg">
							<div class="text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									100kw
								</div>
							</div>
						</a>
						
					</div>						    	
				</div>

			</div>				
		</section>
		<section>
		<div class="swiper-container footer-ofertas-swiper">
			<div class="swiper-wrapper">
			  <div class="swiper-slide" data-hash="slide1">
			  	<div class="descripcion-oferta">
			  		<h2>20kw</h2>
			  		<p>Oferta buenisima</p>
			  		<ul>
			  			<li>Para consumos desde XXXXXkWh</li>
			  			<li>Industrias de alimentos</li>
			  			<li>Cámaras de refrigeración</li>
			  		</ul>
			  	</div>
			  </div>
			  <div class="swiper-slide" data-hash="slide2">
			  	<div class="descripcion-oferta">
			  		<h2>20kw</h2>
			  		<p>Oferta buenisima</p>
			  		<ul>
			  			<li>Para consumos desde XXXXXkWh</li>
			  			<li>Industrias de alimentos</li>
			  			<li>Cámaras de refrigeración</li>
			  		</ul>
			  	</div>
			  </div>
			  <div class="swiper-slide" data-hash="slide3">
			  	<div class="descripcion-oferta">
			  		<h2>20kw</h2>
			  		<p>Oferta buenisima</p>
			  		<ul>
			  			<li>Para consumos desde XXXXXkWh</li>
			  			<li>Industrias de alimentos</li>
			  			<li>Cámaras de refrigeración</li>
			  		</ul>
			  	</div>
			  </div>
			  <div class="swiper-slide" data-hash="slide4">
			  	<div class="descripcion-oferta">
			  		<h2>20kw</h2>
			  		<p>Oferta buenisima</p>
			  		<ul>
			  			<li>Para consumos desde XXXXXkWh</li>
			  			<li>Industrias de alimentos</li>
			  			<li>Cámaras de refrigeración</li>
			  		</ul>
			  	</div>
			  </div>
			</div>
		</div>			
		</section>
	</div>
	
</div>

<?php get_footer(); ?>
