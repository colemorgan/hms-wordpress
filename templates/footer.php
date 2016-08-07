<footer class="footer">
  <div class="footer-container container">
    <div class="footer-top">
      <div class="footer-top-left">
        <div class="footer-menu-left">
          <?php
            if (has_nav_menu('footer_left')) :
              wp_nav_menu(['theme_location' => 'footer_left', 'menu_class' => 'footer-menu', 'container' => '']);
            endif;
          ?>
        </div>
        <div class="footer-menu-right">
          <?php
            if (has_nav_menu('footer_right')) :
              wp_nav_menu(['theme_location' => 'footer_right', 'menu_class' => 'footer-menu', 'container' => '']);
            endif;
          ?>
        </div>
      </div>
      <div class="footer-top-right">
        <div class="footer-btn">
          <a class="btn home-contact-form-btn" href="#">Schedule My Tour</a>
        </div>
        <p class="footer-call-us">Call us today 888-555-5555</p>
        <div class="footer-address">
          Harmony Music School<br />
          231 E New Haven Ave<br />
          Melbourne, FL 32901<br />
          <a class="footer-address-link" href="#">View on Map</a>
        </div>
        <ul class="footer-social">
          <li class="footer-social-item">
            <a class="footer-social-link" href="#">
              <i>
                <svg class="icon icon-social">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-facebook"></use>
                </svg>
              </i>
            </a>
          </li>
          <li class="footer-social-item">
            <a class="footer-social-link" href="#">
              <i>
                <svg class="icon icon-social">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-instagram"></use>
                </svg>
              </i>
            </a>
          </li>
          <li class="footer-social-item">
            <a class="footer-social-link" href="#">
              <i>
                <svg class="icon icon-social">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-twitter"></use>
                </svg>
              </i>
            </a>
          </li>
          <li class="footer-social-item">
            <a class="footer-social-link" href="#">
              <i>
                <svg class="icon icon-social">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-youtube"></use>
                </svg>
              </i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-copyright">
      <p>&copy; 2016 Harmony Music School. All Rights Reserved.</p>
    </div>
  </div>
</footer>
