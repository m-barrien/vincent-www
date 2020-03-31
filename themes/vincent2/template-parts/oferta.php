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

		<!-- DELETE -->
		<?php echo do_shortcode('[svgicons]'); ?>
		<h3>¿Cuanto puedo generar en mi zona?</h3>
		<section style="padding-top:0;">
		  <div class="col-svg-mapa-grande">
		    <div id="svgContainer" class="svg-wrapper lazy-map" data-rendered="false"></div>
		    </div>
		    <div class="region-data-container">
		    <div class="region-data-block">
		      <div class="region-data-li-wrapper mov">
		        <div class="region-data-li">
		          <div class="region-data-title">
		            <i class="fas fa-map-marker-alt"></i>
		            Regi&oacute;n
		          </div>
		          <div class="region-data-value region">
		            <div class="custom-region-select">
		              <select>
		                <option value="0"> Seleccionar Regi&oacute;n:  </option>
		                <option value="2130"> Arica  </option>
		                <option value="2100"> Tarapacá  </option>
		                <option value="2070"> Antofagasta  </option>
		                <option value="2050"> Atacama  </option>
		                <option value="1900"> Coquimbo  </option>
		                <option value="1800"> Valparaíso  </option>
		                <option value="1770"> Metropolitana  </option>
		                <option value="1700"> Libertador General Bernardo OHiggins  </option>
		                <option value="1650"> Maule  </option>
		                <option value="1600"> Biobío  </option>
		                <option value="1450"> La Araucanía  </option>
		                <option value="1380"> Los Ríos  </option>
		                <option value="1290"> Los Lagos  </option>
		                <option value="1150"> Aysén  </option>
		                <option value="800" > Magallanes  </option>
		              </select>
		            </div>
		          </div>
		        </div>
		      </div>      
		      <div class="region-data-li-wrapper">
		        <div class="region-data-li">
		          <div class="region-data-title">
		            <i class="fab fa-cloudscale"></i>
		            Potencia de Soluci&oacute;n
		          </div>
		          <div id="data-kwp" class="region-data-value kwp">
		            3kWp
		          </div>
		        </div>
		      </div>
		      <div class="region-data-li-wrapper desk">
		        <div class="region-data-li">
		          <div class="region-data-title">
		            <i class="fas fa-map-marker-alt"></i>
		            Regi&oacute;n
		          </div>
		          <div id="data-region-name" class="region-data-value region">
		            <div style="color:white; background-color:red;display:block; border-radius:5px;padding-left:5px;">
		              <i class="far fa-hand-pointer"></i>
		              Seleccione su regi&oacute;n
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="region-data-li-wrapper">
		        <div class="region-data-li">
		          <div class="region-data-title">
		            <i class="fas fa-bolt"></i>
		            Generaci&oacute;n Anual kWh
		          </div>
		          <div id="data-kwh" class="region-data-value kwh">
		            --
		          </div>
		        </div>
		      </div>
			<div class="region-data-li-wrapper">
		        <div class="region-data-li">
		          <div class="region-data-title money">
		            <i class="fas fa-hand-holding-usd"></i>
		            Ahorro anual aproximado
		          </div>
		          <div class="region-data-value money ">
		            $<span class="odometer" id="data-saving">0</span>
		          </div>
		        </div>
	     	</div>		      
		      <div class="region-data-li-wrapper">
		        <div class="region-data-li">
		          <div class="region-data-title money">
		            <i class="fas fa-plug"></i>
		            Compatible con
		          </div>
		          <div class="region-data-value appliances">
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#computador"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		Celulares / Computadores
		          			</div>
		          		</div>
		          	</div>
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#luz"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		Luces
		          			</div>
		          		</div>
		          	</div>
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#tv"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		TV
		          			</div>
		          		</div>
		          	</div>
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab great">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#refrigerador"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		Refrigerador
		          			</div>
		          		</div>
		          	</div>
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab warn">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#lavadora"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		Lavadora
		          			</div>
		          		</div>
		          	</div>
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab bad">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#bomba"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		Bomba de agua
		          			</div>
		          		</div>
		          	</div>
		          	<div class="appliance-tab-wrapper">
		          		<div class="appliance-tab">
		          			<div class="appliance-icon-wrapper">
								<svg class="appliance-icon">
								<use xlink:href="#secador_pelo"></use>
								</svg>
		          			</div>
		          			<div class="appliance-name">
					    		Secador de pelo
		          			</div>
		          		</div>
		          	</div>
		          </div>
		        </div>
		      </div>
		    </div>
		    </div>
		</section>
		<script type="text/javascript">
		var kwp=3;
		</script>
		<script type="text/javascript" src="/js/odometer.min.js"></script>
		<link rel="stylesheet" id="vincentmap-css" href="/css/odometer-theme-default.css" type="text/css" media="all">
		<script type="text/javascript">

		  window.odometerOptions = {
		    auto: true,
		    selector: '.my-numbers', // Change the selector used to automatically find things to be animated
		    format: '\$(,ddd).dd', // Change how digit groups are formatted, and how many digits are shown after the decimal point
		    duration: 1000, // Change how long the javascript expects the CSS animation to take
		    theme: 'minimal', // Specify the theme (if you have more than one theme css file on the page)
		    animation: 'count' 
		  };
		</script>

		<!-- DELETE -->

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

