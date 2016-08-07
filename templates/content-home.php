<section class="banner banner--home">
  <div class="banner-image">
    <?php
      $image = get_field('home_hero_image');
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
        <h4 class="banner-subtitle"><?php the_field('home_hero_subtitle'); ?></h4>
        <h1 class="banner-title">
          <q class="banner-quote"><?php the_field('home_hero_title'); ?></q>
        </h1>
      </div>
    </div>
  </div>
  <div class="scroll-indicator">
    <div class="container">
      <i><svg class="icon icon-arrow icon-arrow-down"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-arrow-down"></use></svg></i>
    </div>
  </div>
</section>

<section class="home-carousel">

  <div class="container">
    <div class="carousel js-carousel">
      <?php if( have_rows('carousel_item') ): ?>
        <?php while( have_rows('carousel_item') ): the_row();
          // vars
          $image = get_sub_field('image');
          $content = get_sub_field('content');
          $title = get_sub_field('title');

          $size = 'thumb-carousel';
          $thumb = $image['sizes'][ $size ];
          ?>

          <div class="panel">
            <div class="panel-inner">
              <div class="home-carousel-content">
                <h3 class="home-carousel-title"><?php echo $title; ?></h3>
                <p class="home-carousel-subtitle"><?php echo $content;?></p>
              </div>
              <div class="home-carousel-image">
                <?php if( $image ): ?>
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="carousel-nav">
      <div class="carousel-arrow carousel-prev js-carousel-prev"></div>
      <div class="carousel-arrow carousel-next js-carousel-next"></div>
    </div>
  </div>
</section>
<section class="home-tour">
  <div class="home-tour-image">
    <?php
      $image = get_field('home_section_image1');
      $image_url = $image['url'];
    ?>
    <div class="home-tour-image-bg" style="background-image: url('<?php echo $image_url; ?>');"></div>
  </div>
  <div class="home-tour-content">
    <div class="home-tour-content-container container">
      <div class="home-tour-content-inner">
        <div class="home-tour-top">
          <h3 class="home-tour-title"><?php the_field('home_section_title1'); ?></h3>
          <div class="home-tour-text">
            <?php the_field('home_section_content1'); ?>
            <a data-sumome-listbuilder-id="248f1a38-a7e4-4c1c-96bc-d1c8a97677da" class="btn">Take a Tour</a>
            <!-- <a class="btn" href="#"></a> -->
          </div>
        </div>
        <div class="home-tour-blockquote">
          <blockquote class="blockquote blockquote--tour">
            <p><?php the_field('home_section_quote1'); ?></p>
            <cite>-<?php the_field('home_section_citation1'); ?></cite>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-curriculum">
  <div class="home-curriculum-container container">
    <div class="home-curriculum-inner">
      <div class="home-curriculum-content">
        <div class="home-curriculum-content-left content">
          <h2 class="home-curriculum-title"><?php the_field('home_section_title2'); ?></h2>
          <?php the_field('home_section_content2'); ?>
        </div>
        <div class="home-curriculum-content-right">
          <ul class="home-curriculum-list">
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Guitar Lessons' ) ) ); ?>">Guitar</a></span>
            </li>
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Piano Lessons' ) ) ); ?>">Piano</a></span>
            </li>
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Voice & Singing Lessons' ) ) ); ?>">Voice & Singing</a></span>
            </li>
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Drum Lessons' ) ) ); ?>">Drums</a></span>
            </li>
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'String Lessons' ) ) ); ?>">Strings</a></span>
            </li>
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Bass Lessons' ) ) ); ?>">Bass</a></span>
            </li>
            <li class="home-curriculum-list-item">
              <span><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Woodwind Lessons' ) ) ); ?>">Woodwind</a></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-info">
  <div class="home-info-top">
    <div class="home-info-top-image">
      <?php
        $image = get_field('home_section_image3');
        $size = 'banner';
        $banner = $image['sizes'][ $size ];
        $banner_retina = wr2x_get_retina_from_url($banner);
      ?>
      <div class="home-info-top-image-bg" style="background-image: url('<?php
        if($banner_retina){
          echo $banner_retina;
        } else {
          echo $banner;
        } ?>');"></div>
    </div>
    <div class="home-info-top-content">
      <div class="home-info-top-content-container container">
        <div class="home-info-top-content-inner">
          <h5 class="home-info-top-title"><?php the_field('home_section_title3'); ?></h5>
          <a class="home-info-top-btn btn btn--alt btn--blue" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Guaranteed Results' ) ) ); ?>">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="home-info-bottom">
    <div class="home-info-bottom-container container">
      <div class="home-info-bottom-content">
        <div class="home-info-bottom-video">
          <div class="video-container">
            <iframe src="//fast.wistia.net/embed/iframe/<?php the_field('home_section_video3'); ?>" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="auto"></iframe>
            <script src="//fast.wistia.net/assets/external/E-v1.js" async></script>
          </div>
          <span class="home-info-bottom-video-caption"><em><?php the_field('home_section_video_caption3'); ?></em></span>
        </div>
        <div class="home-info-bottom-quote">
          <blockquote class="blockquote blockquote--gray">
            <p><?php the_field('home_section_quote3'); ?></p>
            <cite>-<?php the_field('home_section_citation3'); ?></cite>
          </blockquote>
          <a class="home-info-read-more" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Testimonials' ) ) ); ?>">Read More Testimonials <i><svg class="icon icon-arrow icon-arrow--right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-arrow--right"></use></svg></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-guarantee">
  <div class="home-guarantee-icon">
    <svg class="icon icon-levels">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-levels"></use>
    </svg>
  </div>
  <div class="home-guarantee-top">
    <div class="home-guarantee-top-container container">
      <div class="home-guarantee-top-content">
        <h2 class="home-guarantee-top-title"><?php the_field('home_section_title4'); ?></h2>
        <?php the_field('home_section_content4'); ?>
        <a class="home-guarantee-top-btn btn btn--alt" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Guaranteed Results' ) ) ); ?>">Read More</a>
      </div>
    </div>
  </div>
  <div class="home-guarantee-bottom">
    <div class="home-guarantee-bottom-img">
      <?php
        $image = get_field('home_section_image4');
        $size = 'banner';
        $banner = $image['sizes'][ $size ];

        if( !empty($image) ): ?>
          <img src="<?php echo $banner; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    </div>
  </div>
</section>
<section class="contact-block contact-block--home">
  <div class="contact-block-container container">
    <div class="contact-block-inner">
      <div class="contact-block-columns">
        <div class="contact-block-columns-left">
          <h2 class="contact-block-title"><?php the_field('home_section_title5'); ?></h2>
          <div class="contact-block-content">
            <?php the_field('home_section_content5'); ?>
          </div>
          <div class="contact-block-form">
            <?php gravity_form('Schedule Tour', false, false, false, '', true); ?>
          </div>
        </div>
        <div class="contact-block-columns-right">
          <div class="contact-block-image">
            <?php
              $image = get_field('home_section_image5');
              $size = 'thumb-small';
              $thumb = $image['sizes'][ $size ];

              if( !empty($image) ): ?>
                <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-footer">
  <div class="home-footer-container container">
    <div class="home-footer-inner">
      <h2 class="home-footer-title"><?php the_field('home_section_title6'); ?></h2>
      <div class="home-footer-columns">
        <div class="home-footer-columns-left">
          <div class="home-footer-image">
            <?php
              $image = get_field('home_section_image6');
              $size = 'thumb-small';
              $thumb = $image['sizes'][ $size ];

              if( !empty($image) ): ?>
                <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
          </div>
        </div>
        <div class="home-footer-columns-right content">
          <?php the_field('home_section_content6'); ?>
          <div class="rock-on">
            <p>Rock on,</p>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/home-sig.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
