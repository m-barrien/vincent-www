<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
<style>@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900,900i");@import url("https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");:root{--blue:#3490dc;--indigo:#6574cd;--purple:#9561e2;--pink:#f66D9b;--red:#c80000;--orange:#f6993f;--yellow:#ffed4a;--green:#139a00;--teal:#4dc0b5;--cyan:#6cb2eb;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#00368a;--secondary:#ff8000;--success:#139a00;--info:#6cb2eb;--warning:#ffed4a;--danger:#c80000;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:900px;--breakpoint-lg:1100px;--breakpoint-xl:1500px;--font-family-sans-serif:"Montserrat",sans-serif;--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,*::before,*::after{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav{display:block}body{margin:0;font-family:"Montserrat",sans-serif;font-size:.8rem;font-weight:400;line-height:1.6;color:#212529;text-align:left;background-color:#fff}h1,h2{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}a{color:#00368a;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h2{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2rem}h2{font-size:1.6rem}.img-fluid{max-width:100%;height:auto}.floating-menu{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.floating-menu{max-width:576px}}@media (min-width:576px){.floating-menu{max-width:576px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-md-3,.col-md-9{position:relative;width:100%;padding-right:15px;padding-left:15px}.site-cover .cover-slide .hidden-desc button{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:.8rem;line-height:1.6;border-radius:.25rem}img{page-break-inside:avoid}p,h2{orphans:3;widows:3}h2{page-break-after:avoid}body{min-width:1100px!important}.floating-menu{min-width:1100px!important}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-sizing:content-box;box-sizing:content-box}.swiper-wrapper{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.swiper-slide{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;height:100%;position:relative}@media (min-width:900px) and (max-width:1499.98px){.oferta-wide-pricetag{font-size:2.8vw;line-height:1.5}}@media (min-width:576px) and (max-width:1099.98px){.oferta-wide-pricetag{font-size:3.5vw;line-height:1.5}}@media (max-width:575.98px){.oferta-wide-pricetag{font-size:9vw;padding-left:5vw;font-weight:700;letter-spacing:-2px}}.oferta-wide-pricetag:before{content:"$";color:inherit;font-weight:inherit;position:absolute}@media (min-width:900px) and (max-width:1499.98px){.oferta-wide-pricetag:before{font-size:1.6vw;margin-left:-1.04vw;margin-top:.8vw}}@media (min-width:576px) and (max-width:1099.98px){.oferta-wide-pricetag:before{font-size:2vw;margin-left:-1.3vw;margin-top:1vw}}@media (max-width:575.98px){.oferta-wide-pricetag:before{font-size:5.14vw;margin-left:-5.3vw;margin-top:3vw}}.oferta-wide-pricetag:after{display:none;content:"(Precio con IVA incluido)";color:inherit;position:absolute}@media (min-width:900px) and (max-width:1499.98px){.oferta-wide-pricetag:after{font-size:.8vw;margin-left:-10.72vw;margin-top:3.2vw}}@media (min-width:576px) and (max-width:1099.98px){.oferta-wide-pricetag:after{font-size:1vw;margin-left:-13.4vw;margin-top:4vw}}@media (max-width:575.98px){.oferta-wide-pricetag:after{font-size:2.57vw;margin-left:-30.4vw;margin-top:11vw}}.oferta-wide-footer{display:block;width:100%}.oferta-wide-footer .proud-to-be{height:auto;margin:0 auto}@media (min-width:900px) and (max-width:1499.98px){.oferta-wide-footer .proud-to-be{width:4vw}}@media (min-width:576px) and (max-width:1099.98px){.oferta-wide-footer .proud-to-be{width:5vw}}@media (max-width:575.98px){.oferta-wide-footer .proud-to-be{width:20vw;padding-top:16vw;padding-bottom:5px}}.visita-tecnica{position:relative;height:0;margin-left:auto;overflow:visible}@media (min-width:900px) and (max-width:1499.98px){.visita-tecnica{top:-8.9vw;margin-right:-3vw;width:12vw}}@media (min-width:576px) and (max-width:1099.98px){.visita-tecnica{top:-13.5vw;margin-right:-3vw;width:15vw}}@media (max-width:575.98px){.visita-tecnica{top:-30vw;width:30vw;margin-right:0}}.oferta-price-mov-container{display:block;width:100%;padding:0 0 0 17vw}.oferta-mov-header{width:100%}.superoferta-wrapper{height:0;overflow:visible;position:relative;width:100%;z-index:5}@media (min-width:900px) and (max-width:1499.98px){.superoferta-wrapper{width:37%}.superoferta-wrapper img{margin-left:16vw}}@media (min-width:576px) and (max-width:1099.98px){.superoferta-wrapper{width:37%}.superoferta-wrapper img{margin-left:20vw}}@media (max-width:575.98px){.superoferta-wrapper{width:27%}.superoferta-wrapper img{margin-left:50vw}}.instalacion-red-tag{background-color:red;color:#fff;font-weight:600;white-space:nowrap;text-transform:uppercase;display:inline;line-height:0}@media (min-width:900px) and (max-width:1499.98px){.instalacion-red-tag{font-size:.8vw;padding:.24vw}}@media (min-width:576px) and (max-width:1099.98px){.instalacion-red-tag{font-size:1vw;padding:.3vw}}@media (max-width:575.98px){.instalacion-red-tag{font-size:3vw;padding:1vw}}header{z-index:1032;left:0;right:0;top:0;width:100%;max-width:none;margin:0 auto}@media (min-width:900px) and (max-width:1499.98px){header{padding:20px 40px;position:absolute}}@media (max-width:899.98px){header{padding:0;position:relative}}@media (min-width:900px) and (max-width:1499.98px){header.desk{display:block}}@media (max-width:899.98px){header.desk{display:none}}@media (min-width:900px) and (max-width:1499.98px){header.mov{display:none}}@media (max-width:899.98px){header.mov{display:block}}header .flex-container .logo{max-width:19vw!important}header .flex-container .logo img{width:100%;height:auto}nav li{list-style:none!important}nav ul.menu{margin-bottom:0}nav ul.menu>li.menu-item{display:inline;padding-bottom:30px}@media (min-width:576px) and (max-width:1099.98px){nav ul.menu>li.menu-item{padding-right:4vw}}nav a{font-size:1.1vw;color:#fff;text-transform:uppercase;text-decoration:none;margin:0 .4vw;font-weight:700}.floating-menu-container{width:100%;height:80vh;z-index:9998;position:absolute}.floating-menu{padding-top:15px;display:none;overflow:hidden;background-color:#fff;color:#222;z-index:1031}.floating-menu ul{padding-left:0;display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.top-bar-padding{display:block;position:relative;height:64px;width:100%}.top-bar{position:fixed;top:0;height:64px;width:100%;background-color:#fff;-webkit-box-shadow:3px 5.196px 12px 0 rgba(0,0,0,.07);-moz-box-shadow:3px 5.196px 12px 0 rgba(0,0,0,.07);box-shadow:3px 5.196px 12px 0 rgba(0,0,0,.07);border-color:transparent}.top-bar .logo{position:absolute;left:0;top:0;height:64px;width:65%;background-position:left center;background-repeat:no-repeat;background-size:contain}.top-bar .hamburguer{position:absolute;top:0;right:0;height:64px;width:64px;background-color:#fff}#hamburguer-icon{width:30px;height:22.5px;position:relative;margin-right:auto;margin-left:auto;margin-top:20.75px;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}#hamburguer-icon span{display:block;position:absolute;height:2.5px;width:100%;background:#222;border-radius:2.5px;opacity:1;left:0;-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);transform:rotate(0deg)}#hamburguer-icon span:nth-child(1){top:0}#hamburguer-icon span:nth-child(2){top:9px}#hamburguer-icon span:nth-child(3){top:18px}.menu-mov-container{background-color:black;margin-left:-250px;height:100vh;min-width:250px;z-index:1030;position:fixed;left:0;top:0;color:#fff!important;width:250px}.menu-mov-container a{color:inherit!important;font-weight:700;font-size:16px}.menu-mov-container ul{padding:10px;position:relative;list-style:none}.menu-mov-container ul:before{content:"MENU";top:0;left:0;font-size:16px}.menu-mov-container ul li{font-size:18px;line-height:26px;padding:10px 5px 10px 5px;font-weight:400;border-style:solid;border-color:rgba(255,255,255,.2);border-width:0 0 1px 0}.menu-mov-container ul li:first-child{border-width:1px 0 1px 0}.menu-mov-container ul li:before{color:transparent;content:none;position:absolute;left:0}</style>

  </head>
  <body> 
    <?php if( $_SERVER['REQUEST_URI'] == "/" || is_404()): ?>
    <header class="desk">
    <?php else: ?>
    <header class="desk" style="background-image: linear-gradient(to bottom, #0000007d 0%, #0000 100%);">
    <?php endif; ?>
      <div class="flex-container space-between">
        <div class="logo" onclick="window.location='/'">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
          if( $_SERVER['REQUEST_URI'] == "/" || is_404()){
            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="" href="/">';
          } 
          else{
            echo '<img src="' . get_site_icon_url() . '" style="height:81.7px;width:auto;" alt="" href="/">';
          }
          ?>
          
        </div>
        <?php wp_nav_menu( array( '
          theme_location' => 'header-menu',          
          'menu'      => 'menu-top',
          'container'      => 'nav',
          'menu_id'      => '',
          'reverse'      => FALSE,
          'menu_class'     => 'menu' ) ); 
          ?>

          <!-- 
          <?php wp_nav_menu( array( '
          theme_location' => 'header-menu',          
          'container'      => 'div',
          'container_class'      => 'secondary-nav',
          'menu_id'      => '',
          'menu'      => 'menu-secondary',
          'reverse'      => FALSE,
          'menu_class'     => 'menu' ) ); 
          ?> 
          -->
      </div>

    </header> 
    <header class="mov">
      <div class="top-bar-padding">
      </div>
      <div class="top-bar">
        <div class="logo" onclick="window.location='/'" style="background-image: url('<?php echo get_template_directory_uri() ?>/image/snippets/logo-mov.png')">
          
        </div>

        <div class="hamburguer">
          <div id="hamburguer-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>          
        </div>
      </div>
      <?php wp_nav_menu( array( '
      theme_location' => 'header-menu',          
      'container'      => 'div',
      'container_class'      => 'menu-mov-container',
      'menu_id'      => '',
      'menu'      => 'menu-mobile',
      'reverse'      => FALSE,
      'menu_class'     => 'menu' ) ); 
      ?>

    </header> 
    <div class="floating-menu-container">
      <div class="floating-menu">
        <div class="row">
          <div class="col-md-9">
            <ul class="primary"></ul>
            
          </div>
          <div class="col-md-3">
            <ul class="side"></ul>
            
          </div>
        </div>
          
        
      </div>
    </div>