<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
  </head>
  <body> 
    <div class="master-container-wrapper">
    <div class="master-container">
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