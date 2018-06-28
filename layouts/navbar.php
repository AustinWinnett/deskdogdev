<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'desk-dog-development' ); ?></a>

<header id="masthead" class="site-header">

  <div class="container">
      <div class="navbar-logo ">
        <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php echo get_bloginfo('name'); ?>"> <span class="navbar-logo__title h1 uppercase">Desk Dog Development</span></a>
      </div>

      <nav id="site-navigation" class="navbar-nav menu--default">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'desk-dog-development' ); ?></button>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ) );
        ?>
      </nav><!-- #site-navigation -->
  </div> <!-- /.row -->
</header><!-- #masthead -->
