<?php
//update_option( 'siteurl', 'http://192.168.1.100' );
//update_option( 'home', 'http://192.168.1.100' );
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');


function customtheme_add_woocommerce_support()
{
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

function script_add_defer_attribute($tag, $handle) {
  if ( 'jquery' !== $handle )
  return $tag;
  return str_replace( ' src', ' defer src', $tag );
}
add_filter('script_loader_tag', 'script_add_defer_attribute', 10, 2);



//remove dashicons
function my_deregister_styles()    { 
   //wp_deregister_style( 'amethyst-dashicons-style' ); 
   wp_deregister_style( 'dashicons' ); 
}
add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

//remove blocklib
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'vincentstylesheetid', '/css/app.css' ,array(), $ver=null); 

    if ( !is_admin() ) {
      wp_dequeue_style( 'wpsl-styles' );

      wp_deregister_script('jquery');
      wp_register_script( 'jquery', '/js/app.js',array(),$ver=null );
      wp_enqueue_script('jquery');
      wp_deregister_script('wp-block-library');
      remove_action('wp_head', 'print_emoji_detection_script', 7);
      remove_action('wp_print_styles', 'print_emoji_styles');
    }
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

// Remove WP Version From Styles  
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
  if ( strpos( $src, 'ver=' ) )
    $src = remove_query_arg( 'ver', $src );
  return $src;
}




function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function set_ofertas_cookie() {
    //Seccion php para fijar edad de cookie para mostrar pop up de publicidad
    $value ="some value";
    if (isset($_COOKIE['ofertas_cookie'])) {
      $_SESSION['show_modal'] = false;
    }
    else{
      setcookie("ofertas_cookie", $value, time()+200, '/');  /* expira en una hora */
      $_SESSION['show_modal'] = true;
    }
}
add_action( 'init', 'set_ofertas_cookie');



function custom_woocommerce_product_add_to_cart_text( $text ) {
 
    if( 'Read more' == $text ) {
        $text = __( 'Leer más', 'woocommerce' );
    }
 
    return $text;
     
}
add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_thumbnails', 6 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_show_product_thumbnails', 6 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_breadcrumb', 20 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


function woo_rename_tabs( $tabs ) {

  $tabs['description']['title'] = __( 'Ir a descripción' );   // Rename the description tab
  $tabs['related_products']['title'] = __( 'Productos Relacionados' );   // Rename the description tab
  return $tabs;

}
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );


function woo_reorder_tabs( $tabs ) {

  $tabs['reviews']['priority'] = 20;     // Reviews first
  $tabs['description']['priority'] = 10;      // Description second
  $tabs['additional_information']['priority'] = 15; // Additional information third

  return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );

add_editor_style( 'css/app.css' );



function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/**
* Enables a 'reverse' option for wp_nav_menu to reverse the order of menu
* items. Usage:
*
* wp_nav_menu(array('reverse' => TRUE, ...));
*/
function my_reverse_nav_menu($menu, $args) {
if (isset($args->reverse) && $args->reverse) {
return array_reverse($menu);
}
return $menu;
}
add_filter('wp_nav_menu_objects', 'my_reverse_nav_menu', 10, 2);

/**
 * Hide category product count in product archives
 */
add_filter( 'woocommerce_subcategory_count_html', '__return_false' );


// function that runs when shortcode is called
function kit_map_shortcode($atts = [], $content = null, $tag = '') { 
  $atts = array_change_key_case((array)$atts, CASE_LOWER);

  // override default attributes with user attributes
  $wporg_atts = shortcode_atts([
                                 'kwp' => 1,
                             ], $atts, $tag);

// Things that you want to do. 
$message = '
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
            ' . esc_html__($wporg_atts['kwp']) . 'kWp
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
    </div>
    </div>
</section>
<script type="text/javascript">
var kwp='. esc_html__($wporg_atts['kwp']) .';
</script>
<script type="text/javascript" src="/js/odometer.min.js"></script>
<link rel="stylesheet" id="vincentmap-css" href="/css/odometer-theme-default.css" type="text/css" media="all">
<script type="text/javascript">

  window.odometerOptions = {
    auto: true,
    selector: \'.my-numbers\', // Change the selector used to automatically find things to be animated
    format: \'\$(,ddd).dd\', // Change how digit groups are formatted, and how many digits are shown after the decimal point
    duration: 1000, // Change how long the javascript expects the CSS animation to take
    theme: \'minimal\', // Specify the theme (if you have more than one theme css file on the page)
    animation: \'count\' 
  };


</script>
';
// Output needs to be return
return $message;
} 
// register shortcode
add_shortcode('kit_map', 'kit_map_shortcode'); 



function diagrama_offgrid_shortcode($atts = [], $content = null, $tag = '') { 
$message = '
<h3>¿C&oacute;mo funciona una sistema OFFGRID?</h3>
<div class="container-fluid vp-b">
  <div class="full-width-diagram" data-src="'.get_template_directory_uri().'/image/covers/paneles-faded.jpg">
    <div class="img-wrapper wide">
      <img class="img-fluid lazy" src="'.get_template_directory_uri().'/image/snippets/empty.png" data-src="'.get_template_directory_uri().'/image/covers/diagrama_hogar_off.png">
    </div>
  </div>
</div>
';
return $message;
} 
add_shortcode('diagrama_offgrid', 'diagrama_offgrid_shortcode'); 

function diagrama_ongrid_shortcode($atts = [], $content = null, $tag = '') { 
$message = '
<h3>¿C&oacute;mo funciona una sistema ONGRID?</h3>
<div class="container-fluid vp-b">
  <div class="full-width-diagram" data-src="'.get_template_directory_uri().'/image/covers/paneles-faded.jpg">
    <div class="img-wrapper wide">
      <img class="img-fluid lazy" src="'.get_template_directory_uri().'/image/snippets/empty.png" data-src="'.get_template_directory_uri().'/image/covers/diagrama_hogar_on.png">
    </div>
  </div>
</div>
';
return $message;
} 
add_shortcode('diagrama_ongrid', 'diagrama_ongrid_shortcode'); 

function ofertas_feats_shortcode($atts = [], $content = null, $tag = '') { 
$message = '
<div class="oferta-feat">
  <div class="oferta-feat-wrapper">
    <i class="fas fa-shield-alt"></i>
    5 años de garant&iacute;a
  </div>
</div>
<div class="oferta-feat">
  <div class="oferta-feat-wrapper">
    <i class="fas fa-user-cog"></i>
    Mejor posventa
  </div>
</div>
';
return $message;
} 
add_shortcode('ofertas_feats', 'ofertas_feats_shortcode'); 