<div class="ddd-home-content__wrapper">
  <div class="ddd-home-content">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
      <h1 class="ddd-home-content__title uppercase">Desk Dog Development</h1>
      <nav id="site-navigation" class="navbar-nav menu--home">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'desk-dog-development' ); ?></button>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ) );
        ?>
      </nav><!-- #site-navigation -->
    </div> <!-- /.container -->
  </div>
</div>
