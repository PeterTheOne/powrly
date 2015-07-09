<header class="banner" role="banner">
  <div class="container">
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <?php get_search_form(); ?>
    <div class="login">
      <a href="">login</a>
    </div>
  </div>
  <div class="brand" href="<?= esc_url(home_url('/')); ?>">
    <h1><?php bloginfo('name'); ?></h1>
    <span class="tagline"><?php bloginfo ('description'); ?></span>
  </div>
</header>

<div class="slider">
  „powerly gives you the power to make a change“
</div>

<button>
  learn more
</button>

<div class="metrics">
  <div class="left"></div>
  <div class="center"></div>
  <div class="right"></div>
</div>

<div class="submetrics">
  <div class="tags"></div>
  <div class="pitchidea"></div>
</div>

