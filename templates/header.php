
<header class="banner" role="banner" data-spy="affix" data-offset-top="100">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".pg-nav-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      
  
    
    

    



    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-2 col-sm-3 col-md-4">
          <nav class="secondary-navigation" role="navigation" aria-label="Secondary Navigation">
      <div class="menu-top-menu-container">
        <ul id="menu-top-menu" class="menu">
          <li><a href="">FAQ</a></li>
          <li><a href="">T &amp; C</a></li>
          <li> <?php if ( is_user_logged_in() ) : ?>
            <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('My Account','woothemes'); ?></a>
              <?php else : ?>
            <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login / Register','woothemes'); ?></a>
              <?php endif; ?>
            </li>
        </ul>
      </div>
    </nav>
        </div>
        <div class="col-xs-8 col-sm-6 col-md-4 text-center">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><span class="sr-only"><?php bloginfo('name'); ?></span></a>
        </div>
        <div class="col-xs-2 col-sm-3 col-md-4">
          <div class="cart-toggle"><i class="fa fa-shopping-cart"></i></div>
          <ul class="site-header-cart menu">
      <li class="cart-summary">
        <a class="cart-contents" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'storefront' ); ?>">
        <i class="fa fa-shopping-cart"></i><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) );?></span>
      </a>
      </a>
    
          </li>
      
    </ul>
        </div>
      </div>
    </div>
    
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
                wp_nav_menu( array(
        'menu'              => 'primary_navigation',
        'theme_location'    => 'primary_navigation',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse pg-nav-collapse',
        'menu_class'        => 'nav navbar-nav sf-menu',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new Roots\Sage\Nav\BootstrapWalker(),)
        );
      endif;
      ?>
    </nav>
  
  
</header>
