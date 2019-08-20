<div class="noticia-container" >
	<a class="noticia-card" href="<?php the_permalink(); ?>">
		<div class="noticia-body-wrapper">
			<div class="text-container">
				<h2><?php the_title() ;?></h2>
			</div>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="image-container">
					<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>"/>
				</div>
			<?php endif; ?>
			
		</div>
	</a>
</div>	
