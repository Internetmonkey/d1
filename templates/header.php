
<header class="banner" role="banner">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".pg-nav-collapse" aria-expanded="false">
        <span class="">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <div class="container">
    
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    
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
  
  </div>
</header>
