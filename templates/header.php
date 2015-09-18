
<header class="banner" role="banner" data-spy="affix">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".pg-nav-collapse" aria-expanded="false">
        <span class="">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    
    <a class="brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><span class="sr-only"><?php bloginfo('name'); ?></span></a>

    <nav class="secondary-navigation" role="navigation" aria-label="Secondary Navigation">
      <div class="menu-top-menu-container">
        <ul id="menu-top-menu" class="menu">
          <li><a href="">FAQ</a></li>
          <li><a href="">T &amp; C</a></li>
          <li><a href="">My Account</a></li>
          <li><a href="">Store</a></li>
        </ul>
      </div>
    </nav>

<ul class="site-header-cart menu">
      <li class="">
        <a class="cart-contents" href="http://dev-bc.pantheon.io/cart/" title="View your shopping cart">
        <i class="fa fa-shopping-cart"></i> $0.00 <span class="count">0 items</span>
      </a>
    
          </li>
      <li>
        <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content">

<ul class="cart_list product_list_widget ">

  
    <li class="empty">No products in the cart.</li>

  
</ul><!-- end product list -->


</div></div>      </li>
    </ul>
    
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
