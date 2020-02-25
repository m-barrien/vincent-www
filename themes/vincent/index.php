<?php 
get_header(); 
?>
<div class="container-fluid">
    <div class="row cover-swiper"><!-- cover -->
               <?php
               $args = array(
                       'post_type' => 'attachment',
                       'post_mime_type' => 'image',
                       'orderby' => 'post_date',
                       'order' => 'asc',
                       'posts_per_page' => '10',
                       'post_status'    => 'inherit',
                       'category_name'=>'cover-grande',
                        );

               $loop = new WP_Query( $args );
               $i=0;
               ?>              
               <div class="swiper-container desk-swiper d-none d-xs-none d-sm-none d-md-block">
                   <div class="swiper-wrapper">

                           <?php
                                       while ( $loop->have_posts() ) : $loop->the_post();
                                               $image = wp_get_attachment_image_src( get_the_ID(), $size="full" ); 
                                                       ?>

                                             <div class="swiper-slide">
                                               		<?php if ($i == 0): ?>
                                               		<a href="<?php echo wp_get_attachment_caption(get_the_ID()); ?>"
                                               			style="background-image: url('<?php echo $image[0]; ?>');"
                                               			>
                                                       <div class="bg-gray" alt="kit solar paneles solares" 
                                                       
                                                       >
                                                       	<h3> "Where sun is!"<sup>&nbsp;&trade;</sup></h3>
                                                       	<h1><?php the_title(); ?></h1>
                                                       </div>
                                               		</a>
                                               		<?php else: ?>
                                               		<a href="<?php echo wp_get_attachment_caption(get_the_ID()); ?>"
                                               			data-background="<?php echo $image[0]; ?>"
                                               			class="swiper-lazy"
                                               			>
                                                       <div alt="kit solar paneles solares" class="bg-gray " >
                                                       		<div class="swiper-lazy-preloader"></div>
                                               				<h3> "Where sun is!"<sup>&nbsp;&trade;</sup></h3>
                                               				<h1><?php the_title(); ?></h1>
                                                       	</div>
                                               		</a>
                                               		<?php endif ?>

                                             </div>
                                                       <?php
                                            $i = $i +1;

                                       endwhile;                                   
                               ?>                    
                   </div>
				    <div class="swiper-button-prev"></div>
				    <div class="swiper-button-next"></div>	
               </div>
    </div>
	<div class="row cover-swiper"><!-- cover -->
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
		$i=0;
		?>	
	    <?php
			while ( $loop->have_posts() ) : $loop->the_post();
				$image = null;
					?>
		      		<a class=" d-block d-md-none w-100" href="<?php echo get_post_permalink(); ?>">
		      			<?php if ($i == 0 ): ?>
		      				<img style="max-width: none" class="img-fluid w-100" alt="" src="<?php echo the_post_thumbnail_url(); ?>">
		      			<?php else: ?>
		      				<img style="max-width: none" class="img-fluid w-100 lazy" alt="" data-src="<?php echo the_post_thumbnail_url(); ?>">
		      				
		      			<?php endif ?>
		      		</a>
					<?php
					$i = $i+1;
			endwhile;
			wp_reset_postdata();
	        wp_reset_query();
		?>

	</div> <!-- cover -->
</div>

<div class="container-fluid">
	<section class=""><!-- ofertas -->
		
		<div class="swiper-container oferta-swiper w-100 d-none d-xs-none d-sm-none d-md-block">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide">
				<a class="oferta-wide-container" href="/ofertas#2kw160l" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-2.jpg);">
					<div class="text-container">
						<div class="short-title">
							<div class="arrow"></div>
							<span style="display: inline-block;">2kw + 160L</span>
						</div>
						<div class="long-title">
							Kit solar ongrid <br> Soluci&oacute;n T&eacute;rmica
						</div>
						<div class="price">
							 
							<br>
							<span class="big">
								$3.000.000
							</span>

						</div>
						<ul>
							<li>Instalaci&oacute;n Incluida</li>
							<li>Llave en mano</li>
							<li>Tramitaciones por ley</li>
							<li>5 Años de garant&iacute;a</li>
						</ul>
					</div>
				</a>
		      </div>
		      <div class="swiper-slide">
				<a class="oferta-wide-container" href="/ofertas#3kw" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-3.jpg);">
					<div class="text-container">
						<div class="short-title">
							<div class="arrow"></div>
							<span style="display: inline-block;">3kw</span>
						</div>
						<div class="long-title">
							Kit solar ongrid
						</div>
						<div class="price">
							 
							<br>
							<span class="big">
								$3.000.000
							</span>

						</div>
						<ul>
							<li>Instalaci&oacute;n Incluida</li>
							<li>Llave en mano</li>
							<li>Tramitaciones por ley</li>
							<li>5 Años de garant&iacute;a</li>
						</ul>
					</div>
				</a>
		      </div>
		      <div class="swiper-slide" id="soluciones">
				<a class="oferta-wide-container" href="/ofertas#3kw160l" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-4.jpg);">
					<div class="text-container">
						<div class="short-title">
							<div class="arrow"></div>
							<span style="display: inline-block;">3kw + 160L</span>
						</div>
						<div class="long-title">
							Kit solar ongrid <br> Soluci&oacute;n T&eacute;rmica
						</div>
						<div class="price">
							 
							<br>
							<span class="big">
								$3.500.000
							</span>

						</div>
						<ul>
							<li>Instalaci&oacute;n Incluida</li>
							<li>Llave en mano</li>
							<li>Tramitaciones por ley</li>
							<li>5 Años de garant&iacute;a</li>
						</ul>
					</div>
				</a>
		      </div>
		      <div class="swiper-slide" id="soluciones">
				<a class="oferta-wide-container" href="/ofertas#3kwoff" style="background-image: url(<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-5.jpg);">
					<div class="text-container">
						<div class="short-title">
							<div class="arrow"></div>
							<span style="display: inline-block;">3kw</span>
						</div>
						<div class="long-title">
							Kit solar offgrid
						</div>
						<div class="price">
							 
							<br>
							<span class="big">
								$5.000.000
							</span>

						</div>
						<ul>
							<li>Instalaci&oacute;n Incluida</li>
							<li>Llave en mano</li>
							<li>5 Años de garant&iacute;a</li>
						</ul>
					</div>
				</a>
		      </div>
		    </div>
		</div>

	</section> <!-- ofertas -->
</div>
 <script>
var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function success(pos) {
  var crd = pos.coords;

  console.log('Your current position is:');
  console.log('Latitude : ' + crd.latitude);
  console.log('Longitude: ' + crd.longitude);
  console.log('More or less ' + crd.accuracy + ' meters.');
  setCookie("lat", crd.latitude, 2);
  setCookie("lon", crd.longitude, 2);
  setCookie("accuracy", crd.accuracy, 2);
};

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
  setCookie("lat", "-", 1);
  setCookie("lon", "-", 1);
  setCookie("accuracy", "-", 1);
};

navigator.geolocation.getCurrentPosition(success, error, options);
</script> 
<div id="demo"></div>
<div class="container">
	<section class="main-buttons-group">
		<div class="columna">
			<a class="card grow" href="/soluciones-hogar">
				<h2 class="dowrap">Energía solar <br> Hogar</h2>
				<div class="">
					<div class="w-100">
						<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonhogar.jpg">
					</div>
				</div>
			</a>
		</div>
		<div class="columna">
			<a class="card grow" href="/soluciones-empresa">
				<h2 class="dowrap">Energía solar <br> Empresas</h2>
				<div class="">
					<div class="w-100">
						<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonempresa.jpg">
					</div>
				</div>			
			</a>
		</div>
		<div class="columna">
			<a class="card grow" href="/productos">
				<h2>Productos</h2>
				<div class="">
					<div class="w-100">
						<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonproductos.jpg">
					</div>
				</div>				
			</a>
		</div>
		<div class="columna">
			<a class="card grow" href="/servicios">
				<h2>Servicio Técnico</h2>
				<div class="">
					<div class="w-100">
						<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonserviciotec.jpg">
					</div>
				</div>				
			</a>
		</div>
		<div class="columna">
			<div id="gallery-card" class="card grow" onclick="flip()">
				<div class="">
					<h2>Proyectos</h2>
					<div class="">
						<a class="d-block w-100" href="/soluciones-hogar#gallery-head">
							<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonproyectos-hogar.jpg">
						</a>
						<a class="d-block w-100" href="/soluciones-empresa#gallery-head">
							<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonproyectos-empresas.jpg">
						</a>
					</div>
				</div>

			</div>
		</div>
		<div class="columna">
			<a class="card grow" href="/noticias">
				<h2>Noticias</h2>
				<div class="">
					<div class="w-100">
						<img alt="" class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonmanutencion.jpg">
					</div>
				</div>				
			</a>
		</div>
	</section>
</div>

<div class="container-fluid">
	<section>
		<h1><a href="/productos"> Productos </a></h1>
		<?php
		$params = array('posts_per_page' => 15, 
			'post_type' => 'product',
			'product_cat'=>'paneles-solares,inversores,kits-solares',
			'orderby' => 'rand' 
		);
		$wc_query = new WP_Query($params);
		?>
		<?php if ($wc_query->have_posts()) : ?>
		<div class="swiper-container products-swiper">
			<div class="swiper-wrapper">
			<?php while ($wc_query->have_posts()) :
		                $wc_query->the_post(); ?>
				<div class="swiper-slide">
		        	<a class="product-slide" href="<?php the_permalink(); ?>">
			        	<img class="img-fluid swiper-lazy" src="<?php echo get_template_directory_uri() ?>/image/snippets/empty.png" data-src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'thumbnail' ); ?>"/>
			            <h4>
			               <?php the_title(); ?>
			               
			           </h4>
		           </a>

				</div>
		    <?php endwhile; ?>

			</div>
		<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php else:  ?>
		<div>
			<?php _e( 'Sin Productos' ); ?>
		</div>
		<?php endif; ?>

		<ul>
		</ul>		
	</section>
</div>


<div class="container">
	<section> <!-- noticias -->
		<h1><a href="/noticias"> Noticias </a></h1>
		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
		 
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
		 
			get_template_part( 'template-parts/content-short', get_post_format() );
		 
			endwhile;
			wp_reset_postdata();
			wp_reset_query();
		?>
	</section> <!-- noticias -->
</div>
<div class="container-fluid">
	<section><!-- productos con sello -->
		<a class="d-block w-100" href="/soluciones-hogar#gallery-head">
			<h1>Soluciones Con Sello</h1>			
			<div class="w-100">
			        <img class="d-block img-fluid w-100 lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banners/consello.jpg">    
			</div>
		</a>
	</section><!-- productos con sello -->
</div>



<script type="text/javascript">	
if (window.matchMedia("(min-width: 900px)").matches) {
	var mySwiper = new Swiper ('.cover-swiper .swiper-container.desk-swiper', {
	    // Optional parameters
	    direction: 'horizontal',
	    autoplay: {
	      delay: 5000,
	    },
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },
	    lazy: true,
	    loop: true
	  });


	var mySwiper = new Swiper ('.oferta-swiper', {
	  // Optional parameters
	  direction: 'horizontal',
	  autoplay: {
	    delay: 8000,
	  },
	  navigation: {
	    nextEl: '.swiper-button-next',
	    prevEl: '.swiper-button-prev',
	  },
	  loop: true,
	  lazy: true,
	});
}

var swiper = new Swiper('.swiper-container.products-swiper', {
  slidesPerView: 5,
  spaceBetween: 50,
  autoplay: {
    delay: 5000,
  },
  loop: true,
  lazy: true,
  // init: false,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    1024: {
      slidesPerView: 5,
      spaceBetween: 40,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    }
  }
});

</script>	


<?php get_footer(); ?>
