<section class="banner banner--page">
  <div class="banner-image">
    <?php
      $image = get_field('results_hero_image');
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
        <div class="banner-subtitle">
          <h4><?php the_field('results_hero_title'); ?></h4>
          <p class="banner-text"><?php the_field('results_hero_subtitle'); ?></p>
        </div>
        <a class="btn btn--banner js-play-video" href="#">Play Video <i><svg class="icon icon-play"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-play"></use></svg></i></a>
        <div class="wistia-btn">
          <script src="//fast.wistia.com/embed/medias/<?php the_field('results_hero_video'); ?>.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_<?php the_field('results_hero_video'); ?> popover=true popoverAnimateThumbnail=true popoverContent=link videoFoam=true" style="display:inline"><span class="wistia_embed wistia_async_oyhpqaeb2g popover=true popoverAnimateThumbnail=true" style="display:inline-block;height:84px;width:150px">&nbsp;</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="results-block">
  <div class="results-block-container container">
    <div class="results-block-inner">
      <div class="results-block-columns">
        <div class="results-block-column-primary">
          <h3 class="results-block-title"><?php the_field('results_section1_title'); ?></h3>
          <div class="results-block-content ">
            <?php the_field('results_section1_content'); ?>
          </div>
        </div>
        <div class="results-block-column-secondary">
          <div class="results-block-image">
            <?php
              $image = get_field('results_section1_image1');
              $size = 'thumb-xsmall';
              $thumb = $image['sizes'][ $size ];
            ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
          </div>
          <div class="results-block-image">
            <img src="<?php echo $image_url; ?>" />
            <?php
              $image = get_field('results_section1_image2');
              $size = 'thumb-xsmall';
              $thumb = $image['sizes'][ $size ];
            ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="results-block results-block--white results-block--center">
  <div class="results-block-container container">
    <div class="results-block-inner">
      <div class="results-block-main">
        <h3 class="results-block-title">Q: <?php the_field('results_section2_question'); ?></h3>
        <h4 class="results-block-subtitle">A: <?php the_field('results_section2_answer'); ?></h4>
        <div class="results-block-content ">
          <?php the_field('results_section2_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="results-block results-block--center results-block--small">
  <div class="results-block-container container">
    <div class="results-block-inner">
      <div class="results-block-main">
        <h3 class="results-block-title"><?php the_field('results_section3_title'); ?></h3>
        <div class="results-block-content ">
          <?php the_field('results_section3_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="results-carousel">
  <div class="container">
    <div class="carousel js-carousel">
      <?php if( have_rows('results_carousel') ): ?>
        <?php while( have_rows('results_carousel') ): the_row();
          // vars
          $image = get_sub_field('image');
          $content = get_sub_field('content');
          $title = get_sub_field('title');

          $size = 'thumb-carousel';
          $thumb = $image['sizes'][ $size ];
        ?>

          <div class="panel">
            <div class="panel-inner">
              <div class="results-carousel-content">
                <h3 class="results-carousel-title"><?php echo $title; ?></h3>
                <p class="results-carousel-subtitle"><?php echo $content;?></p>
              </div>
              <div class="results-carousel-image">
                <?php if( $image ): ?>
                  <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="carousel-nav carousel-nav--results">
      <div class="carousel-arrow carousel-prev js-carousel-prev"></div>
      <div class="carousel-arrow carousel-next js-carousel-next"></div>
    </div>
  </div>
</section>
<section class="contact-block">
  <div class="contact-block-container container">
    <div class="contact-block-inner">
      <div class="contact-block-columns">
        <div class="contact-block-columns-left">
          <h2 class="contact-block-title"><?php the_field('results_contact_title'); ?></h2>
          <div class="contact-block-content">
            <?php the_field('results_contact_content'); ?>
          </div>
          <div class="contact-block-form">
            <?php gravity_form('Schedule Tour', false, false, false, '', false); ?>
          </div>
        </div>
        <div class="contact-block-columns-right">
          <div class="contact-block-image">
            <?php
              $image = get_field('results_contact_image');
              $size = 'thumb-small';
              $thumb = $image['sizes'][ $size ];

              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/home-contact.png" />
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
