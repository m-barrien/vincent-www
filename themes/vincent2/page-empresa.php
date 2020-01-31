<?php /* Template Name: Soluciones Empresa */ ?>
 
<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/comercial.jpg')">
	<video id="videoPlayer" autoplay loop muted  preload="auto"> 
	 	<source src="/video/coverempresa" type="video/mp4" media="all and (min-width: 900px)">
	</video>	
</div>


<div class="container">
	<h2 class="site-title"> <?php the_title(); ?></h2>
</div>


<!-- Banner a beneficios empresa -->
<div class="container-fluid">
	<section class="half-banner mt-0" style="background-image:url('<?php echo get_template_directory_uri() ?>/image/covers/2.jpg');">
		<img class="watermark" src="<?php echo get_template_directory_uri() ?>/image/snippets/watermark.png">
		<div class="half-banner-body right">
			<div class="mov-img">
				<img class=" img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/covers/2.jpg">
			</div>			
			<div class="w-100">
				<h1>
					Beneficios de trabajar con Vincent Solar
				</h1>
				<ul>
					<li>Ahorro inmediato en el gasto de energía.</li>
					<li>Inversión que dura en el tiempo.</li>
					<li>Cuida el medioambiente, Marketing ecológico para su empresa.</li>
					<li>Experiencia a lo largo del pa&iacute;s con empresas muy importantes y con m&aacute;s de 7MW sobre techo en Chile.</li>
				</ul>
			</div>
		</div>
	</section>
</div>
<!-- Banner a beneficios empresa -->
<div id="open-gallery-empresa" class="banner-link">
	<img class="img-fluid lazy desk" data-src="<?php echo get_template_directory_uri() ?>/image/banners/empresa.jpg">	
	<img class="img-fluid lazy mov" data-src="<?php echo get_template_directory_uri() ?>/image/banners/empresa.jpg">	
</div>
<!-- Banner a soluciones empresa -->
<div class="container-fluid vp-t vp-b">
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
					Las soluciones de <strong>Vincent Solar</strong> se distinguen por sus componentes del más alto estándar a nivel internacional, instalado y ejecutado para lograr el máximo beneficio con la <strong>mejor relación precio-calidad</strong>.
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
<div class="container vp-t">
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
	<h1>Proyectos <span style="font-weight: 700;">Vincent</span> en el pa&iacute;s</h1>
	<div id="gallery_empresa" class="lightgallery">
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


<div class="footer-ofertas-container vp-t vp-b">
	<div class="container">
		<h1>Nuestros kits en <span class="orange">OFERTA</span></h1>
		<h3>Elija el sistema fotovoltaico m&aacute;s adeucado para su empresa.</h3>
	</div>
  <div class="swiper-container ofertas-empresa-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/20kw-f.jpg);"></div>
      		</div>
      </div>			
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/20kw-b.jpg);"></div>
      		</div>
      </div>
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/30kw-f.jpg);"></div>
      		</div>
      </div>
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/30kw-b.jpg);"></div>
      		</div>
      </div>
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/50kw-f.jpg);"></div>
      		</div>
      </div>
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/50kw-b.jpg);"></div>
      		</div>
      </div>
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/100kw-f.jpg);"></div>
      		</div>
      </div>
      <div class="swiper-slide empresa-slide">
      		<div class="img-wrapper-empresa">
      			<div class="empresa-slide" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/pills/100kw-b.jpg);"></div>
      		</div>
      </div>
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Add Arrows -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
	<div class="container vp-b">
		<section class="kit-verticals-row d-none-mov">
					<div class="kit-verticals-col">
						<a class="gray-container"  href="#slide1">
							<img class="kit-verticals-img" src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-20kw.jpg">
							<div class="kit-verticals-text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									20 <span>kw</span>
								</div>
							</div>
						</a>
						
					</div>	
					<div class="kit-verticals-col">
						<a class="gray-container"  href="#slide2">
							<img class="kit-verticals-img" src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-30kw.jpg">
							<div class="kit-verticals-text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									30 <span>kw</span>
								</div>
							</div>
						</a>
						
					</div>	
					<div class="kit-verticals-col">
						<a class="gray-container"  href="#slide3">
							<img class="kit-verticals-img" src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-50kw.jpg">
							<div class="kit-verticals-text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									50 <span>kw</span>
								</div>
							</div>
						</a>
						
					</div>	
					<div class="kit-verticals-col">
						<a class="gray-container"  href="#slide4">
							<img class="kit-verticals-img" src="<?php echo get_template_directory_uri() ?>/image/soluciones/vertical-100kw.jpg">
							<div class="kit-verticals-text-body">
								<div class="little-title">Soluciones Empresa</div>
								<div class="kw">
									100 <span>kw</span>
								</div>
							</div>
						</a>
						
					</div>						    	
		</section>
		<section class="vp-t">
		<div class="swiper-container footer-ofertas-swiper ">
			<div class="swiper-wrapper">
			  <div class="swiper-slide" data-hash="slide1">
			  	<div class="descripcion-oferta">
			  		<div class="title">Soluci&oacute;n empresa <span>20kw</span></div>
			  		<ul>
			  			<li>Para consumos sobre <strong>300.000 Pesos</strong></li>
			  			<li>Solución ideal para <strong>camaras de refrigeración, Negocios de comida rápida, botillerías, escuelas, etc.</strong></li>
			  			<li>Ahorre, produzca energ&iacute;a limpia y recupere rapidamente su inversi&oacute;n.</li>
			  			<li>Cubra al menos el 60% de sus necesidades energéticas actuales.</li>
			  			<li>Mejorará la imagen de su empresa, ayudará al medio ambiente y aumentará su plusvalía.</li>
			  		</ul>
			  	</div>
			  </div>
			  <div class="swiper-slide" data-hash="slide2">
			  	<div class="descripcion-oferta">
			  		<div class="title">Soluci&oacute;n empresa <span>30kw</span></div>
			  		<ul>
			  			<li>Para consumos sobre <strong>500.000 Pesos</strong></li>
			  			<li>Solución ideal para <strong>supermercados, restaurantes, botillerías, carnicer&iacute;as, Panaderías, etc.</strong></li>
			  			<li>Ahorre, produzca energ&iacute;a limpia y recupere rapidamente su inversi&oacute;n.</li>
			  			<li>Cubra al menos el 60% de sus necesidades energéticas actuales.</li>
			  			<li>Mejorará la imagen de su empresa, ayudará al medio ambiente y aumentará su plusvalía.</li>
			  		</ul>
			  	</div>
			  </div>
			  <div class="swiper-slide" data-hash="slide3">
			  	<div class="descripcion-oferta">
			  		<div class="title">Soluci&oacute;n empresa <span>50kw</span></div>
			  		<ul>
			  			<li>Para consumos sobre <strong>1.000.000 Pesos</strong></li>
			  			<li>Solución ideal para <strong>f&aacute;bricas de alimentos, plantas de manufactura a gran escala, laboratorios, etc.</strong></li>
			  			<li>Ahorre, produzca energ&iacute;a limpia y recupere rapidamente su inversi&oacute;n.</li>
			  			<li>Cubra al menos el 60% de sus necesidades energéticas actuales.</li>
			  			<li>Mejorará la imagen de su empresa, ayudará al medio ambiente y aumentará su plusvalía.</li>
			  		</ul>
			  	</div>
			  </div>
			  <div class="swiper-slide" data-hash="slide4">
			  	<div class="descripcion-oferta">
			  		<div class="title">Soluci&oacute;n empresa <span>100kw</span></div>
			  		<ul>
			  			<li>Para consumos sobre <strong>3.000.000 Pesos</strong></li>
			  			<li>Solución ideal para <strong>grandes plantas de manufactura, climatizaci&oacute;n a gran escala, plantas de distribuci&oacute;n el&eacute;ctrica, etc.</strong></li>
			  			<li>Ahorre, produzca energ&iacute;a limpia y recupere rapidamente su inversi&oacute;n.</li>
			  			<li>Cubra al menos el 60% de sus necesidades energéticas actuales.</li>
			  			<li>Mejorará la imagen de su empresa, ayudará al medio ambiente y aumentará su plusvalía.</li>
			  		</ul>
			  	</div>
			  </div>
			</div>
		</div>			
		</section>
	</div>
	
</div>

<?php get_footer(); ?>
