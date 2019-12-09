<?php /* Template Name: Soluciones Empresa */ ?>
 
<?php get_header(); ?>
<div id="solutions" class="container">
	<section>
		<h1>Soluciones Fotovoltaicas para Empresas</h1>
		<div class="col-sm-12 col-md-12 py-2">
			<img class="img-fluid d-none d-xs-none d-sm-none d-md-block" src="<?php echo get_template_directory_uri() ?>/image/soluciones/empresa-fv-banner.png">
			<img class="img-fluid d-md-none mx-auto" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-fv-banner-mob.png">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-5 offset-md-1">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-fv-2.png">
			<p>Conexión del sistema fotovoltaico 1 fase</p>
		</div> 
		<div class="col-xs-12 col-sm-12 col-md-5">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-fv-3.png">
			<p>Conexión del sistema fotovoltaico 3 fases</p>
		</div> 


		<?php
		$args = array(
		        'post_type' => 'attachment',
		        'post_mime_type' => 'image',
		        'orderby' => 'post_date',
		        'order' => 'desc',
		        'posts_per_page' => '3000',
		        'post_status'    => 'inherit',
		        'category_name'=>'empresas',
		         );

		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			$image = wp_get_attachment_image_src( get_the_ID(), $size="large" ); 
			$image_thumb = wp_get_attachment_image_src( get_the_ID(), $size="medium" ); 
				?>
				<script type="text/javascript">
					photo_arr.push( { "full":"<?php echo $image[0]; ?>", "thumb" :"<?php echo $image_thumb[0]; ?>" });
				</script>
				<?php
		endwhile;				    
		?>				
	</section>
	<section>
		<h1>Soluciones Térmicas</h1>
		<div class="col-sm-12 col-md-12 py-2">
			<img class="img-fluid d-none d-xs-none d-sm-none d-md-block" src="<?php echo get_template_directory_uri() ?>/image/soluciones/empresa-term-banner.png">
			<img class="img-fluid d-block d-md-none mx-auto" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-term-banner-mob.png">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-term-1.png">
			<p>Sistema de circulación forzada, calefacción + agua caliente</p>
		</div> 
		<div class="col-xs-12 col-sm-12 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-term-2.png">	
			<p>Sistema de circulación forzada, calefacción + agua caliente + piscina</p>
		</div> 
		<div class="col-xs-12 col-sm-12 col-md-4">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/soluciones/hogar-term-3.png">
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 shortcut-galeria">
			<div id="gallery-head"></div>
			<h2>
				Galería Soluciones Empresariales
			</h2>
			<a href="#gallery">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/banners/banner-empresas.jpg">
			</a>
		</div>
	</section>
	<section  class="no-gutters" style="padding-bottom: 0 !important;">
		<div id="collage-gallery" class="col no-gutters"></div>
	</section>
	<section>
		<div class="fadetowhite"></div>
	</section>

</div>

<script type="text/javascript">
if(photo_arr.length >0 ){
  var chunk = Math.floor( photo_arr.length / 4 );
  var bundles = chunkArray(photo_arr,chunk);
  for (var i = bundles.length - 1; i >= 0; i--) {
    for (var j = bundles[i].length - 1; j >= 0; j--) {
      var size=Math.floor(Math.random() * 3) + 1;  
      $("#collage-gallery").append(
        "<a class=\"bg-lazy gallery-grid-img s"+size+"\" href=\"" +bundles[i][j]["full"]+ "\" data-src=\""+ bundles[i][j]["thumb"] +"\" ><img class=\"d-none lazy\" data-src=\""+ bundles[i][j]["thumb"] +"\"> </a>"
        );
    }
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery-all.min.js" integrity="sha256-w14QFJrxOYkUnF0hb8pVFCSgYcsF0hMIKrqGb8A7J8A=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/css/lightgallery.min.css" integrity="sha256-8rfHbJr+ju3Oc099jFJMR1xAPu8CTPHU8uP5J3X/VAY=" crossorigin="anonymous">
<script type="text/javascript">
	$("#collage-gallery").lightGallery(); 
</script>
<?php get_footer(); ?>
