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
                                 'type' => "ongrid",
                             ], $atts, $tag);

// Things that you want to do. 
if($wporg_atts['type'] == "ongrid"){
  $offgrid_icons="";
}
else{
  $offgrid_icons= do_shortcode('[svgicons]').'
  <div class="region-data-li-wrapper">
    <div class="region-data-li">
      <div class="region-data-title money">
        <i class="fas fa-plug"></i>
        Compatible con
      </div>
      <div class="region-data-value appliances">
        <div class="appliance-tab-wrapper">
          <div class="appliance-tab" data-needs="1">
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
          <div class="appliance-tab" data-needs="1">
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
        <div class="appliance-tab-wrapper" >
          <div class="appliance-tab" data-needs="1.5">
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
          <div class="appliance-tab" data-needs="2">
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
          <div class="appliance-tab" data-needs="2">
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
          <div class="appliance-tab" data-needs="3">
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
        <div class="appliance-tab-wrapper">
          <div class="appliance-tab" data-needs="3">
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
      </div>
    </div>
  </div>
  ';
}
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
          <div id="data-kwp" class="region-data-value kwp" data-kwp="' . esc_html__($wporg_atts['kwp']) . '">
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
      '. $offgrid_icons .'
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


function svgiconsshortcode($atts = [], $content = null, $tag = '') { 
$message = '
<svg width="0" height="0" style="display:none;" class="hidden">
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 47" id="aireacondicionado">
    <path d="M66.482 2.022H5.585a4.917 4.917 0 0 0-4.91 4.911v18.662a4.917 4.917 0 0 0 4.91 4.911h60.897a4.917 4.917 0 0 0 4.91-4.91V6.932a4.917 4.917 0 0 0-4.91-4.91zM5.585 3.987h60.897a2.95 2.95 0 0 1 2.946 2.946v13.751H2.64V6.934a2.95 2.95 0 0 1 2.946-2.947zm26.52 24.555H11.478v-1.964H60.59v1.964H39.962zm34.377 0h-3.929v-3.929H9.514v3.929H5.585a2.95 2.95 0 0 1-2.946-2.947V22.65h66.789v2.946a2.95 2.95 0 0 1-2.946 2.947z"
      stroke-width=".982"></path>
    <path stroke-width=".982" d="M5.585 14.791h7.858v1.964H5.585zm9.822 0h1.964v1.964h-1.964zm-.982 19.644h-1.964c0 .782-.297 1.128-.746 1.652-.543.633-1.219 1.421-1.219 2.93 0 1.51.676 2.298 1.22 2.931.448.525.745.87.745 1.653s-.297 1.13-.747 1.653c-.542.634-1.218 1.422-1.218 2.932h1.965c0-.783.296-1.13.746-1.653.542-.634 1.218-1.423 1.218-2.932s-.675-2.297-1.218-2.93c-.45-.524-.746-.871-.746-1.654 0-.783.296-1.128.745-1.652.543-.633 1.219-1.421 1.219-2.93zm11.786 0h-1.964c0 .782-.297 1.128-.745 1.652-.544.633-1.22 1.421-1.22 2.93 0 1.51.676 2.298 1.22 2.931.448.525.745.87.745 1.653s-.297 1.13-.746 1.653c-.543.634-1.218 1.422-1.218 2.932h1.964c0-.783.297-1.13.747-1.653.542-.634 1.217-1.423 1.217-2.932s-.674-2.297-1.217-2.93c-.45-.524-.747-.871-.747-1.654 0-.783.297-1.128.746-1.652.543-.633 1.218-1.421 1.218-2.93zm11.787 0h-1.965c0 .782-.296 1.128-.745 1.652-.543.633-1.219 1.421-1.219 2.93 0 1.51.676 2.298 1.219 2.931.449.525.745.87.745 1.653s-.296 1.13-.746 1.653c-.542.634-1.218 1.422-1.218 2.932h1.964c0-.783.297-1.13.747-1.653.542-.634 1.218-1.423 1.218-2.932s-.675-2.297-1.218-2.93c-.45-.524-.747-.871-.747-1.654 0-.783.297-1.128.746-1.652.543-.633 1.219-1.421 1.219-2.93zm11.786 0H47.82c0 .782-.297 1.128-.746 1.652-.543.633-1.218 1.421-1.218 2.93 0 1.51.675 2.298 1.218 2.931.45.525.746.87.746 1.653s-.297 1.13-.747 1.653c-.542.634-1.217 1.422-1.217 2.932h1.964c0-.783.297-1.13.746-1.653.543-.634 1.218-1.423 1.218-2.932s-.674-2.297-1.218-2.93c-.45-.524-.746-.871-.746-1.654 0-.783.297-1.128.745-1.652.544-.633 1.22-1.421 1.22-2.93zm11.786 0h-1.964c0 .782-.296 1.128-.745 1.652-.543.633-1.22 1.421-1.22 2.93 0 1.51.677 2.298 1.22 2.931.449.525.745.87.745 1.653s-.296 1.13-.746 1.653c-.542.634-1.218 1.422-1.218 2.932h1.964c0-.783.297-1.13.747-1.653.542-.634 1.218-1.423 1.218-2.932s-.675-2.297-1.218-2.93c-.45-.524-.747-.871-.747-1.654 0-.783.297-1.128.746-1.652.543-.633 1.219-1.421 1.219-2.93z"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62" id="aspiradora">
    <path d="M55 54v-4h-2V11c0-6.065-4.935-11-11-11S31 4.935 31 11v18c0 .551-.449 1-1 1h-6.689A26.448 26.448 0 0 0 18 29.077V26H9v3H7c-3.86 0-7 3.14-7 7v13c0 2.757 2.243 5 5 5h5.589c1.19 2.928 4.061 5 7.411 5 3.35 0 6.221-2.072 7.411-5H34c2.757 0 5-2.243 5-5 0-5.211-2.183-9.895-5.812-13.419C35.416 34.704 37 32.536 37 30V11c0-2.757 2.243-5 5-5s5 2.243 5 5v39h-2v4h-7v8h24v-8zM11 28h5v1h-5zm7 29c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zm16-5h-8.069c.041-.328.069-.661.069-1 0-4.411-3.589-8-8-8s-8 3.589-8 8c0 .339.028.672.069 1H5c-1.654 0-3-1.346-3-3V36c0-2.757 2.243-5 5-5h9c11.776 0 21 7.907 21 18 0 1.654-1.346 3-3 3zm8-48c-3.86 0-7 3.14-7 7v19c0 2.097-1.627 3.803-3.683 3.968A22.648 22.648 0 0 0 28.273 32H30c1.654 0 3-1.346 3-3V11c0-4.962 4.038-9 9-9s9 4.038 9 9v39h-2V11c0-3.86-3.14-7-7-7zm5 48h6v2h-6zm13 8H40v-4h20z"></path>
    <path d="M34 60h2v2h-2zm-4 0h2v2h-2zm-4 0h2v2h-2zM4 34h2v2H4zm0 4h2v2H4zm14 9c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 47" id="bomba">
    <path d="M59 37H48v-2h5a1 1 0 0 0 1-1v-3h3a1 1 0 0 0 1-1V18a1 1 0 0 0-1-1h-3v-3a1 1 0 0 0-1-1H43v-2h4a1 1 0 0 0 1-1V6a1 1 0 0 0-.553-.895l-2-1A1 1 0 0 0 45 4h-2V1a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v3h-2a1 1 0 0 0-.447.105l-2 1A1 1 0 0 0 30 6v4a1 1 0 0 0 1 1h4v2h-7a1 1 0 0 0-.8.4l-3 4a1 1 0 0 0-.2.6v2h-4v-9h2V9H12v2h2v5h-3a1 1 0 0 0-.707.293l-2 2A1 1 0 0 0 8 19v2H2v10h2v-4h4v2a1 1 0 0 0 .293.707l2 2A1 1 0 0 0 11 32h3v5H1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1zm-13 0h-2v-2h2zm-10 0v-2h6v2zm-16 0v-9h4v2a1 1 0 0 0 .2.6l3 4a1 1 0 0 0 .8.4h2v2zm12-2h2v2h-2zm24-16v10h-2V19zM37 2h4v2h-4zm-5 4.618L33.236 6h11.528L46 6.618V9H32zM37 11h4v2h-4zm-11 7.333L28.5 15H52v18H28.5L26 29.667zM24 22v4h-4v-4zm-8-11h2v5h-2zM4 25v-2h4v2zm6 3.586v-9.172L11.414 18H18v12h-6.586zM16 32h2v5h-2zm42 13H2v-6h56z"></path>
    <path d="M30 17h18v2H30zm0 4h18v2H30zm0 4h18v2H30zm0 4h18v2H30zM6 41h4v2H6zm7 0h2v2h-2zm39 0h2v2h-2zM14 20h2v2h-2z"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 44.98" id="computador">
    <path d="M61.25 0H45.37c-1.52 0-2.75 1.24-2.75 2.75v39.48c0 1.51 1.24 2.75 2.75 2.75h15.88c1.52 0 2.75-1.24 2.75-2.75V2.75C64 1.24 62.77 0 61.25 0zm1.25 42.23c0 .69-.56 1.25-1.25 1.25H45.37c-.7 0-1.25-.55-1.25-1.25v-2.39H62.5zm0-3.9H44.12V13.16H62.5zM44.51 11.66V7.35h17.6v4.31zM62.5 5.85H44.12v-3.1c0-.7.55-1.25 1.25-1.25h15.88c.69 0 1.25.56 1.25 1.25zM38.45 9.02H2.46C1.1 9.02 0 10.12 0 11.47v.41c0 1.38.01 6.81 0 25.16 0 1.35 1.1 2.45 2.45 2.45h12.5l-1.53 3.99h-1.79a.749.749 0 1 0 0 1.5h17.64c.42 0 .75-.34.75-.75 0-.42-.33-.75-.75-.75h-1.78l-1.53-3.99h12.49c1.35 0 2.45-1.1 2.45-2.45 0-.25 0-3.9.01-25.57 0-1.35-1.1-2.45-2.46-2.45zM15.03 43.48l1.53-3.99h7.79l1.53 3.99zm24.37-6.44c0 .53-.42.95-.95.95h-36a.95.95 0 0 1-.95-.95v-4.18h37.9v4.18zm.01-5.68H1.5V11.47c0-.53.43-.95.96-.95h35.99c.53 0 .96.42.96.95z"></path>
    <path d="M53.31 22.01c-1.92 0-3.48 1.56-3.48 3.48s1.56 3.48 3.48 3.48 3.48-1.56 3.48-3.48-1.56-3.48-3.48-3.48zm0 5.46c-1.09 0-1.98-.89-1.98-1.98 0-1.09.89-1.98 1.98-1.98 1.09 0 1.98.89 1.98 1.98 0 1.09-.89 1.98-1.98 1.98zm5.63-13.026h-1.288a.75.75 0 0 0 0 1.5h1.288a.75.75 0 0 0 0-1.5z"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70.373 90" id="lavadora">
    <path d="M68.874 0H1.5A1.5 1.5 0 0 0 0 1.5v83.006a1.5 1.5 0 0 0 1.5 1.5h3.572V90h3v-3.994h54.229V90h3v-3.994h3.572a1.5 1.5 0 0 0 1.5-1.5V1.5A1.5 1.5 0 0 0 68.874 0zm-1.5 3v16.728H3V3zM3 83.006V22.728h64.373v60.278z"></path>
    <path d="M35.187 28.867c-13.233 0-24 10.767-24 24s10.767 24 24 24 24-10.767 24-24-10.767-24-24-24zm0 45c-11.58 0-21-9.421-21-21s9.42-21 21-21 21 9.421 21 21-9.42 21-21 21z"></path>
    <path d="M35.187 34.987c-9.859 0-17.879 8.021-17.879 17.88 0 9.858 8.021 17.879 17.879 17.879s17.88-8.02 17.88-17.879c0-9.859-8.021-17.88-17.88-17.88zm0 32.759c-8.205 0-14.879-6.675-14.879-14.879 0-8.205 6.675-14.88 14.879-14.88s14.879 6.675 14.879 14.88c.001 8.204-6.674 14.879-14.879 14.879zM7.399 8.525h3v5.677h-3zm7.165 0h3v5.677h-3zm7.165 0h3v5.677h-3zm27.67 1.339h12.076v3H49.399z"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 80" id="luz">
    <path d="M25 0C12.288 0 0 9.873 0 23.844c0 8.931 3.412 14.458 6.688 19.094C9.963 47.573 13 51.278 13 57v12c0 2.846 2.352 5 5 5h2v1c0 2.753 2.247 5 5 5s5-2.247 5-5v-1h2c2.648 0 5-2.154 5-5V57c0-5.722 3.037-9.427 6.313-14.062C46.587 38.302 50 32.775 50 23.844 50 9.874 37.712 0 25 0zm0 2c11.678 0 23 9.05 23 21.844 0 8.432-3.088 13.375-6.313 17.937-3.054 4.323-6.32 8.337-6.656 14.219H14.97c-.336-5.882-3.602-9.896-6.656-14.219C5.088 37.22 2 32.276 2 23.844 2 11.05 13.322 2 25 2zm-2.125 5.125C13.929 8.169 7 15.784 7 25c0 1.84.268 3.609.781 5.281.156.508.774.843 1.282.688.507-.156.811-.774.656-1.282A15.892 15.892 0 0 1 9 25c0-8.214 6.17-14.978 14.125-15.906.524-.041.978-.54.938-1.063-.136-.813-.555-.946-1.188-.906zM15 58h20v6H15zm0 8h20v3c0 1.75-1.427 3-3 3H18c-1.573 0-3-1.25-3-3zm7 8h6v1c0 1.68-1.32 3-3 3s-3-1.32-3-3z"
      overflow="visible" color="#000"></path>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 56.2" id="refrigerador">
    <g opacity=".99">
      <path d="M28.1 53.5H5.9c-.5 0-1-.1-1.6-.2-2.6-.7-4.3-3.1-4.3-5.7V5.9C0 2.7 2.6 0 5.9 0h22.2C31.3 0 34 2.6 34 5.9v41.8c0 2.6-1.8 5-4.3 5.7-.6.1-1.1.1-1.6.1zM5.9 2C3.8 2 2 3.7 2 5.9v41.8c0 1.7 1.2 3.3 2.8 3.7.4.1.7.1 1.1.1h22.2c.3 0 .7 0 1.1-.1 1.6-.5 2.8-2 2.8-3.7V5.9C32 3.8 30.3 2 28.1 2z"></path>
      <path d="M1 17.8h32v2H1zm26.7-5.1c-.6 0-1-.4-1-1V6.4c0-.6.4-1 1-1s1 .4 1 1v5.3c0 .5-.5 1-1 1zm0 17.7c-.6 0-1-.4-1-1v-5.3c0-.6.4-1 1-1s1 .4 1 1v5.3c0 .6-.5 1-1 1zM6.3 56.2H4.5c-.6 0-1-.4-1-1v-2.8c0-.3.1-.6.4-.8.2-.2.6-.3.9-.2.4.1.8.1 1.1.1h.4c.6 0 1 .4 1 1v2.7c0 .6-.4 1-1 1zm23.1 0h-1.8c-.6 0-1-.4-1-1v-2.7c0-.6.4-1 1-1h.4c.3 0 .7 0 1.1-.1.3-.1.6 0 .9.2.2.2.4.5.4.8v2.8c0 .6-.4 1-1 1z"></path>
    </g>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.205 46.3" id="tv">
    <path d="M57.1 0h-54C1.4 0 0 1.4 0 3.1v33.8C0 38.6 1.4 40 3.1 40h23.1v2.6c-4.8.3-12.6.7-12.6 2.3v1.4h32.9v-1.4c0-1.5-7.7-1.9-12.6-2.3V40h23.2c1.7 0 3.1-1.4 3.1-3.1V3.1c.1-1.7-1.3-3.1-3.1-3.1zm.5 36.9c0 .3-.2.5-.5.5h-54c-.3 0-.5-.2-.5-.5V3.1c0-.3.2-.5.5-.5h54c.3 0 .5.2.5.5z"></path>
  </symbol>
   <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88.67 75.98" id="secador_pelo">
    <path d="M22.29 0C10 .03 0 10.04 0 22.35c0 7.67 3.99 14.85 10.46 18.93l-.01 18.24c0 2.07 1.91 3.9 4.09 3.9h6.6c-.54 5.94-4.61 9.83-10.47 9.83v2.73c7.36 0 12.63-5.1 13.21-12.56h6.55c2.06 0 3.68-1.71 3.69-3.9V41.34c2.61-1.61 4.88-3.77 6.62-6.31l36.47-11.65V0zm52.19 21.39L39.32 32.62l.01.04c-.24.1-.46.27-.61.51-1.69 2.55-3.98 4.7-6.64 6.22-.54.31-.79.94-.65 1.51h-.04v18.62c-.01.57-.34 1.17-.96 1.17H14.54c-.66 0-1.37-.6-1.37-1.17l.02-18.62h-.05c.18-.59-.07-1.25-.62-1.57-6.04-3.5-9.79-10.01-9.79-16.98 0-10.8 8.77-19.59 19.56-19.62h52.19z"></path>
    <path d="M22.86 35.26c-7.328 0-13.29-5.962-13.29-13.291 0-7.328 5.961-13.29 13.29-13.29 7.329 0 13.29 5.962 13.29 13.29-.001 7.329-5.961 13.291-13.29 13.291zm0-23.852c-5.823 0-10.561 4.738-10.561 10.561 0 5.824 4.738 10.562 10.561 10.562 5.824 0 10.562-4.738 10.562-10.562-.001-5.822-4.738-10.561-10.562-10.561zm64.446-5.244h-5.729a1.364 1.364 0 0 1 0-2.728h5.729a1.364 1.364 0 0 1 0 2.728zm0 6.876h-5.729a1.364 1.364 0 0 1 0-2.728h5.729a1.364 1.364 0 1 1 0 2.728zm0 6.875h-5.729a1.364 1.364 0 1 1 0-2.728h5.729a1.364 1.364 0 1 1 0 2.728z"></path>
  </symbol> 
</svg>
';
return $message;
} 
add_shortcode('svgicons', 'svgiconsshortcode'); 

// oferta Pre Get Posts

function oferta_pre_get_posts( $query )
{
    // validate
    if( is_admin() )
    {
        return $query;
    }


    if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'oferta' )
    {
        $query->set('orderby', 'meta_value');
        $query->set('meta_key', 'price');
        $query->set('order', 'ASC');
    }

    // always return
    return $query;

}

add_action('pre_get_posts', 'oferta_pre_get_posts');