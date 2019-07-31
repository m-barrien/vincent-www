<section class="oferta">
	
	<div class="col-sm-12 col-md-10 offset-md-1">
		<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-5">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="py-2">
							<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-7 oferta-body">
					<h2 class=""><?php the_title() ;?> <small>Instalación incluida</small></h2>
					
					<?php the_content() ;?>
				</div>
					
		</div>

	</div> <!-- /.row -->

</section>
