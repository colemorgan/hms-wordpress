<header class="header">
  <div class="header-container container">
    <div class="header-inner">
      <a class="brand header-logo" href="<?= esc_url(home_url('/')); ?>">
        <i>
          <svg class="icon icon-logo">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-logo"></use>
          </svg>
        </i>
      </a>
      <button class="nav-trigger js-nav-trigger">
        <span class="lines"></span>
      </button>
      <nav class="header-nav js-header-nav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
