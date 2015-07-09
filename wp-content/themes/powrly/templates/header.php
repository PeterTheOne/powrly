<header class="banner" role="banner">
  <div class="container">
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <form>
      <input class="search" type="text" placeholder="search" />
    </form>
    <div class="login">
      <a href="">login</a>
    </div>
  </div>
  <div class="brand" href="<?= esc_url(home_url('/')); ?>">
    <h1><?php bloginfo('name'); ?></h1>
    <span class="tagline"><?php bloginfo ('description'); ?></span>
  </div>
</header>
