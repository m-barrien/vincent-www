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
    <header>
        <a href="/" class="site-logo">
            <div class="logo">
              <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
              echo '<img class="img-fluid" src="' . esc_url( $custom_logo_url ) . '" alt="" href="/">';
              ?>
              
            </div>
        </a>

          <?php wp_nav_menu( array( '
            theme_location' => 'header-menu',          
            'container'      => '',
            'menu_id'      => '',
            'reverse'      => FALSE,
            'menu_class'     => 'menu d-none d-xs-none d-sm-none d-md-block' ) ); 
            ?>
          <?php wp_nav_menu( array( '
            theme_location' => 'header-menu',          
            'container'      => '',
            'menu_id'      => 'collapseMenu',
            'menu_class'     => 'menu collapse ' ) ); 
            ?>
    </header> 