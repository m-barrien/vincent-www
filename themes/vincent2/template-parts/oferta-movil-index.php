<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}

?>
<a href="<?php the_permalink(); ?>" class="oferta-index-single-row">

	<div class="oferta-index-banner-image">
		<img class=" img-fluid"  src="https://via.placeholder.com/300x75">
	</div>
	<div class="oferta-index-title-svg"><!-- SVG CONTAINER -->
		<svg xmlns="http://www.w3.org/2000/svg" width="1440" viewBox="0 0 1440 750">
		  <metadata>
		    <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
		       <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
		          <rdf:Description rdf:about=""/>
		       </rdf:RDF>
		    </x:xmpmeta>                                                                                                  
		                             
		  </metadata>
		  <defs>
		    <style>
		      .cls-1, .cls-2, .cls-4 {
		        font-size: 26.102px;
		      }

		      .cls-1 {
		        fill: #fff;
		      }

		      .cls-1, .cls-2, .cls-3, .cls-4 {
		        font-family: Montserrat;
		        font-style: italic;
		      }

		      .cls-1, .cls-2, .cls-3, .cls-5 {
		        font-weight: 500;
		      }

		      .cls-2 {
		      }

		      .cls-3 {
		        font-size: 31.455px;
		      }

		  
		      .cls-4 {
		        font-weight: 700;
		      }
		    </style>
		  </defs>
		  <text id="_" data-name="$" class="cls-1" transform="translate(146.964 358.476) scale(5.03 5.031)">$</text>
		  <text id="Solución_solar_Off_Grid_con_Batería" data-name="Solución solar  Off Grid con Batería" class="cls-2" transform="translate(109.239 174.683) scale(4.715 4.716)">
		  	Solución solar <tspan x="0" dy="31.323"><?php the_title(); ?></tspan>
		  </text>
		  <text id="_2KW" data-name="2KW" class="cls-4" transform="translate(115.487 527.854) scale(9.709 9.71)">
		  	<?php echo get_post_meta($post->ID, 'short-title')[0] ; ?>
		  </text>
		  <text id="_160_Litros_agua_caliente." data-name="160 Litros agua caliente." class="cls-4" transform="translate(103.042 628.797) scale(4.149 4.15)">160 Litros <tspan class="cls-5">agua caliente.</tspan></text>
		</svg>
	</div><!-- SVG CONTAINER -->

	<div class="oferta-index-category-kit-img">
		<div class="left-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/100euro.png">
			<div class="italian-flag">
				<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/it_flag.png">
			</div>
		</div>
		<div class="center-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
		</div>
		<div class="right-img">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/5anos.png">
		</div>
		
	</div>
	<div class="oferta-index-description-container">
		<div class="oferta-index-price-header">
					<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
					<br>
					+IVA
		</div>
		<div class="oferta-index-bullets">
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
				</div>
				Todo Incluido
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
				</div>
				Llave en mano
			</div>
			<div class="bullet">
				<div class="bullet-image">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/snippets/checkmark.png">
				</div>
				Visita técnica gratuita
			</div>
		</div>
	</div>
	<div class="oferta-index-banner-image">
		<img class=" img-fluid"  src="https://via.placeholder.com/300x100">
	</div>	
	<div class="oferta-index-contacto">
		Contacto
	</div>
</a>

