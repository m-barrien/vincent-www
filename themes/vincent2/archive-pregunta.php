<?php get_header(); ?>
<div class="site-cover-secondary" style="background-image:linear-gradient(to bottom, #00000080 0%, #00000000 25%,#00000000 75%, #00000080 100%),url('<?php echo get_template_directory_uri() ?>/image/covers/preguntas.jpg')">
	<div class="blog-container-width">
		<div class="row">
			<div class="col">
				<div class="text-wrapper">
					<h2><a href="/">HOME</a>&nbsp; / &nbsp; Preguntas frecuentes</h2>
					<h1>
						¿Preguntas?
						Los profesionales responden!
					</h1>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="blog-container">
	<section class="preguntas-container">
		<div class="col">
			<p>Hemos compilado para usted una lista de las preguntas más frecuentes formuladas por nuestros clientes. Esperamos que puedan ayudarlo.</p>
			<div class="accordion faq-accordion" id="accordionPreguntas">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="card">
						<div class="card-header" id="heading<?php echo the_ID(); ?>">
						<h2 class="m-0 boton-acordeon" >
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php echo the_ID(); ?>">
						  <i class="fas fa-arrow-right"></i> <?php the_title() ;?>
						</button>
						</h2>
						</div>

						<div id="collapse<?php echo the_ID(); ?>" class="collapse" aria-labelledby="heading<?php echo the_ID(); ?>" data-parent="#accordionPreguntas">
						<div class="card-body">
							<?php the_excerpt(); ?> 
						</div>
						</div>
						</div>						

					<?php endwhile; endif; ?>	

			</div>			
		</div>
		
	</section>
</div>
<?php get_footer(); ?>

