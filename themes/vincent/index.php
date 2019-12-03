<?php 
get_header(); 
?>
<!--
<div class="w-100 video-container">
	<div class="video-overlay fade-in">
		<h1>Where the sun is ... <br>Vincent Solar&reg;</h1>
	</div>
	<video poster="/videocover.png" id="bgvid" playsinline autoplay muted loop>
		<source src="/videocover.mp4" type="video/mp4">

	</video>	
</div>
-->
<div class="container-fluid">
    <div class="row cover-swiper"><!-- cover -->
               <?php
               $args = array(
                       'post_type' => 'attachment',
                       'post_mime_type' => 'image',
                       'orderby' => 'post_date',
                       'order' => 'asc',
                       'posts_per_page' => '3000',
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
                                               <a href="<?php echo wp_get_attachment_caption(get_the_ID()); ?>">
                                               		<?php if ($i == 0): ?>
                                                       <img class="img-fluid" src="<?php echo $image[0]; ?>">
                                               		<?php else: ?>
                                                       <img class="img-fluid swiper-lazy" data-src="<?php echo $image[0]; ?>">
                                               			
                                               		<?php endif ?>
                                               </a>
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
		      				<img style="max-width: none" class="img-fluid w-100" alt="kit solar chile paneles solares para casas" src="<?php echo the_post_thumbnail_url(); ?>">
		      			<?php else: ?>
		      				<img style="max-width: none" class="img-fluid w-100 lazy" alt="kit solar chile paneles solares para casas" data-src="<?php echo the_post_thumbnail_url(); ?>">
		      				
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
	<section class="cover-swiper"><!-- ofertas -->
		
		<div class="swiper-container oferta-swiper d-none d-xs-none d-sm-none d-md-block">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide">
		      	<a href="/ofertas#15kw">
		      		<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-1.jpg">
		      	</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="/ofertas#2kw160l">
		      		<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-2.jpg">
		      	</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="/ofertas#3kw">
		      		<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-3.jpg">
		      	</a>
		      </div>
		      <div class="swiper-slide" id="soluciones">
		      	<a href="/ofertas#3kw160l">
		      		<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-4.jpg">
		      	</a>
		      </div>
		      <div class="swiper-slide" id="soluciones">
		      	<a href="/ofertas#3kwoff">
		      		<img class="img-fluid swiper-lazy" data-src="<?php echo get_template_directory_uri() ?>/image/banner_ofertas/oferta-5.jpg">
		      	</a>
		      </div>
		    </div>
		</div>

	</section> <!-- ofertas -->
</div>

<div class="container">
	<!--
	<section class="main-buttons-group-mov">
		<div class="pill">
			<a href="/categoria/paneles-solares">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/paneles.png">
				<p>Paneles <br> Solares</p>
			</a>
		</div>
		<div class="pill">
			<a href="/categoria/inversores">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/inversor.png">
				<p>Inversores <br> Solares</p>
			</a>
		</div>
		<div class="pill">
			<a href="/ofertas">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/kits.png"	>
				<p>Kits <br> Solares</p>
			</a>
		</div>
	</section>
	-->
	<section class="main-buttons-group">
		<div class="columna">
			<a class="card grow" href="/soluciones-hogar">
				<h2 class="dowrap">Energía solar <br> Hogar</h2>
				<div class="">
					<div class="w-100">
						<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonhogar.jpg">
					</div>
				</div>
			</a>
		</div>
		<div class="columna">
			<a class="card grow" href="/soluciones-empresa">
				<h2 class="dowrap">Energía solar <br> Empresas</h2>
				<div class="">
					<div class="w-100">
						<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonempresa.jpg">
					</div>
				</div>			
			</a>
		</div>
		<div class="columna">
			<a class="card grow" href="/productos">
				<h2>Productos</h2>
				<div class="">
					<div class="w-100">
						<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonproductos.jpg">
					</div>
				</div>				
			</a>
		</div>
		<div class="columna">
			<a class="card grow" href="/servicios">
				<h2>Servicio Técnico</h2>
				<div class="">
					<div class="w-100">
						<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonserviciotec.jpg">
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
							<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonproyectos-hogar.jpg">
						</a>
						<a class="d-block w-100" href="/soluciones-empresa#gallery-head">
							<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonproyectos-empresas.jpg">
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
						<img class="img-fluid lazy" data-src="<?php echo get_template_directory_uri() ?>/image/snippets/botonmanutencion.jpg">
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
			        	<?php the_post_thumbnail('thumbnail'); ?>
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

<?php get_footer(); ?>
