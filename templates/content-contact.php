<section class="banner banner--page banner--contact">
  <div class="banner-image">
    <?php
      $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'banner' );

      if( !empty($image) ) {
        $image_url = $image[0];
        $image_retina = wr2x_get_retina_from_url($image_url);
      }
    ?>
    <div class="banner-image-bg" style="background-image: url('<?php
      if($image_retina){
        echo $image_retina;
      } else {
        echo $image_url;
      } ?>');"></div>
  </div>
  <div class="banner-box">
    <div class="container">
      <div class="banner-box-inner">
        <div class="banner-box-headline">Harmony Music School</div>
        <p><?php the_field('date_time'); ?></p>
        <p><?php the_field('phone'); ?></p>
        <p><?php the_field('address'); ?><br /><a href="<?php the_field('google_maps_link'); ?>">View on Map</a></p>
        <ul class="footer-social banner-box-social">
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
  </div>
</section>
<section class="contact-main">
  <div class="contact-main-container container">
    <div class="contact-main-inner">
      <div class="contact-main-columns">
        <div class="contact-main-row">
          <div class="contact-main-column-left">
            <div class="contact-main-content ">
              <h3 class="contact-main-title"><?php the_field('contact_headline'); ?></h3>
              <?php the_field('contact_content_text'); ?>
            </div>
          </div>
          <div class="contact-main-column-right">
            <div class="contact-main-form">
              <?php gravity_form('Contact Form', false, false, false, '', false); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-main-images">
        <div class="contact-main-images-inner">
          <?php if( have_rows('conact_images') ):
            $i = 0;
            while( have_rows('conact_images') ): the_row();
              // vars
              $image = get_sub_field('image');

              $size = 'grid-small';
              $thumb = $image['sizes'][ $size ];
              ?>

              <div class="contact-main-image">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
              </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>