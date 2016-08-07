<section class="banner banner--page">
  <div class="banner-image">
    <?php
      $image = get_field('testimonials_hero_image');
      $size = 'banner';
      $banner = $image['sizes'][ $size ];
      $banner_retina = wr2x_get_retina_from_url($banner);
    ?>
    <div class="banner-image-bg" style="background-image: url('<?php
      if($banner_retina){
        echo $banner_retina;
      } else {
        echo $banner;
      } ?>');"></div>
  </div>
  <div class="banner-content">
    <div class="banner-content-container container">
      <div class="banner-content-inner">
        <h4 class="banner-subtitle">
          <q class="banner-quote"><?php the_field('testimonials_hero_content'); ?></q>
        </h4>
        <a class="btn btn--banner js-play-video" href="#">Play Video <i><svg class="icon icon-play"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-play"></use></svg></i></a>
        <div class="wistia-btn">
          <script src="//fast.wistia.com/embed/medias/6z1r1x2q3s.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><span class="wistia_embed wistia_async_6z1r1x2q3s popover=true popoverAnimateThumbnail=true" style="display:inline-block;height:84px;width:150px">&nbsp;</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonials-main">
  <div class="testimonials-main-container container">
    <div class="testimonials-main-inner">
      <h3 class="testimonials-main-title testimonials-title"><?php the_field('testimonials_section1_title'); ?></h3>
      <div class="testimonials-column">
        <?php if( have_rows('testimonials_section1_quotes') ):
          $i = 0;
          while( have_rows('testimonials_section1_quotes') ): the_row();
            // vars
            $quote = get_sub_field('quote');
            $cite = get_sub_field('cite');
            $image = get_sub_field('image');

            $size = 'thumb-carousel';
            $thumb = $image['sizes'][ $size ];
            ?>
            <?php $i++; ?>
            <?php if( $i == 3 ):?>
              </div><div class="testimonials-column">
            <?php endif; ?>

            <div class="testimonial-item blockquote-item">
              <div class="testimonial-image">
                <img src="<?php echo $thumb; ?>" />
              </div>
              <blockquote class="blockquote blockquote--testimonial blockquote--gray">
                <p><?php echo $quote;?></p>
                <cite>-<?php echo $cite;?></cite>
              </blockquote>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="testimonials-contact contact">
  <div class="contact-container container">
    <div class="contact-inner">
      <h3 class="testimonials-contact-title section-title section-title--red">Take a Tour</h3>
      <form class="form form--inline">
        <ul>
          <li>
            <label>First & Last Name</label>
            <input type="text" placeholder="First & Last Name">
          </li>
          <li>
            <label>Email</label>
            <input type="text" placeholder="Email">
          </li>
          <li>
            <label>Phone Number</label>
            <input type="text" placeholder="Phone Number">
          </li>
        </ul>
        <div class="form-footer">
          <a class="btn btn--submit" href="#">Submit </a>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="testimonials-secondary">
  <div class="testimonials-secondary-container container">
    <div class="testimonials-secondary-inner">
      <div class="testimonials-column">
        <div class="testimonials-image-grid image-grid">
          <div class="image-grid-item image-grid-item--small">
            <?php
              $image = get_field('testimonial_section2_image1');
              $size = 'grid-small';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
          <div class="image-grid-item image-grid-item--small">
            <?php
              $image = get_field('testimonial_section2_image2');
              $size = 'grid-small';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
          <div class="image-grid-item image-grid-item--large">
            <?php
              $image = get_field('testimonial_section2_image3');
              $size = 'grid-large';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
          <div class="image-grid-item image-grid-item--small">
            <?php
              $image = get_field('testimonial_section2_image4');
              $size = 'grid-small';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
          <div class="image-grid-item image-grid-item--small">
            <?php
              $image = get_field('testimonial_section2_image5');
              $size = 'grid-small';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
          <div class="image-grid-item image-grid-item--large">
            <?php
              $image = get_field('testimonial_section2_image6');
              $size = 'grid-large';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
        </div>
      </div>
      <div class="testimonials-column">
        <?php if( have_rows('testimonial_section2_quotes') ): ?>
          <?php while( have_rows('testimonial_section2_quotes') ): the_row();
            // vars
            $quote = get_sub_field('quote');
            $cite = get_sub_field('cite');
            ?>

            <div class="testimonial-item blockquote-item">
              <blockquote class="blockquote blockquote--testimonial blockquote--gray">
                <p><?php echo $quote; ?></p>
                <cite>-<?php echo $cite; ?></cite>
              </blockquote>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>