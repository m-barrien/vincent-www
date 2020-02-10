<?php 
$tax_term = get_the_terms( get_the_ID() ,'tipo-kit');
$oferta_category ="Instalaci&oacute;n Residencial";
if ($tax_term) {
	$oferta_category = $tax_term[0]->name;
}

?>
<section class="oferta-single-row  pt-2">
	<div class="oferta-category-kit-img">
		<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/taxonomy/tipo-kit/<?php echo $tax_term[0]->slug; ?>/kit-group-image.png">
	</div>
	<div class="oferta-description-container">
		<?php echo do_shortcode( '[ofertas_feats]' ); ?>
		<br>
		<div class="instalacion-red-tag">Instalaci&oacute;n incluida, llave en mano</div>
		<div class="oferta-wide-pricetag">
			<?php echo get_post_meta($post->ID, 'price-tag')[0] ; ?>
		</div>
		<a href="mailto:info@vincentsolar.com" class="d-block w-100">
			<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/image/pills/boton_contacto.jpg">
		</a>
	</div>
	<div class="oferta-full-description-container">
		<?php the_content() ;?>
		<script type="text/javascript">
			async function goto(hash,data) {
				$('#data-region-name').text(data["nombre_region"]);
				$('#data-kwh').text(Number((kwp * data["kwh"]).toFixed(0)).toLocaleString());
				var money =kwp * data["kwh"] * 120;
				$('#data-saving').text(Number(money));
			}
		</script>		
		<script type="text/javascript">
		var x, i, j, selElmnt, a, b, c;
		var kwh=0;
		/* Look for any elements with the class "custom-region-select": */
		x = document.getElementsByClassName("custom-region-select");
		for (i = 0; i < x.length; i++) {
		  selElmnt = x[i].getElementsByTagName("select")[0];
		  /* For each element, create a new DIV that will act as the selected item: */
		  a = document.createElement("DIV");
		  a.setAttribute("class", "select-selected");
		  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
		  x[i].appendChild(a);
		  /* For each element, create a new DIV that will contain the option list: */
		  b = document.createElement("DIV");
		  b.setAttribute("class", "select-items select-hide");
		  for (j = 1; j < selElmnt.length; j++) {
		    /* For each option in the original select element,
		    create a new DIV that will act as an option item: */
		    c = document.createElement("DIV");
		    c.innerHTML = selElmnt.options[j].innerHTML;
		    c.addEventListener("click", function(e) {
		        /* When an item is clicked, update the original select box,
		        and the selected item: */
		        var y, i, k, s, h;
		        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
		        h = this.parentNode.previousSibling;
		        for (i = 0; i < s.length; i++) {
		          if (s.options[i].innerHTML == this.innerHTML) {
		            s.selectedIndex = i;

		            kwh=s.value
					/* ACTUALIZAR VALORES DE LA TABLA */
					goto("",{"kwh":kwh, "nombre_region":""});

					/* // ACTUALIZAR VALORES DE LA TABLA */
		            h.innerHTML = this.innerHTML;
		            y = this.parentNode.getElementsByClassName("same-as-selected");
		            for (k = 0; k < y.length; k++) {
		              y[k].removeAttribute("class");
		            }
		            this.setAttribute("class", "same-as-selected");
		            break;
		          }
		        }
		        h.click();
		    });
		    b.appendChild(c);
		  }

		  x[i].appendChild(b);
		  a.addEventListener("click", function(e) {
		    /* When the select box is clicked, close any other select boxes,
		    and open/close the current select box: */
		    e.stopPropagation();
		    closeAllSelect(this);
		    this.nextSibling.classList.toggle("select-hide");
		    this.classList.toggle("select-arrow-active");
		  });
		}

		function closeAllSelect(elmnt) {
		  /* A function that will close all select boxes in the document,
		  except the current select box: */
		  var x, y, i, arrNo = [];
		  x = document.getElementsByClassName("select-items");
		  y = document.getElementsByClassName("select-selected");
		  for (i = 0; i < y.length; i++) {
		    if (elmnt == y[i]) {
		      arrNo.push(i)
		    } else {
		      y[i].classList.remove("select-arrow-active");
		    }
		  }
		  for (i = 0; i < x.length; i++) {
		    if (arrNo.indexOf(i)) {
		      x[i].classList.add("select-hide");
		    }
		  }
		}

		/* If the user clicks anywhere outside the select box,
		then close all select boxes: */
		document.addEventListener("click", closeAllSelect); 

		</script>		
	</div>
</section>

