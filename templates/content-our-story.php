<section class="banner banner--story">
  <div class="banner-image">
    <?php
      $image = get_field('story_hero_image');
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
          <h4><?php the_field('story_hero_title'); ?></h4>
          <p class="banner-text"><?php the_field('story_hero_subtitle'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="story-block story-block--first">
  <div class="container">
    <div class="story-panel">
      <div class="story-panel-inner">
        <div class="story-block-content">
          <h3 class="story-block-title"><?php the_field('story_section1_title'); ?></h3>
          <div class="story-block-text">
            <?php the_field('story_section1_content'); ?>
          </div>
        </div>
        <div class="story-block-images">
          <?php
            $image = get_field('story_section1_image1');
            $size = 'thumb-xsmall';
            $thumb = $image['sizes'][ $size ];
          ?>
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
          <?php
            $image = get_field('story_section1_image2');
            $size = 'thumb-xsmall';
            $thumb = $image['sizes'][ $size ];
          ?>
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="story-block story-block--white story-block--second">
  <div class="container">
    <div class="story-block-inner">
      <div class="story-block-row story-block-image-top">
        <?php
          $image = get_field('story_section2_image1');
          $size = 'thumb-medium';
          $thumb = $image['sizes'][ $size ];
        ?>
        <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
      </div>
      <div class="story-panel">
        <div class="story-panel-inner">
          <div class="story-block-content">
            <h3 class="story-block-title"><?php the_field('story_section2_title'); ?></h3>
            <div class="story-block-text">
              <?php the_field('story_section2_content'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="story-block-image-bottomright">
        <?php
          $image = get_field('story_section2_image2');
          $size = 'thumb-medium';
          $thumb = $image['sizes'][ $size ];
        ?>
        <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
      </div>
      <div class="story-block-images story-block-images-bottomleft">
          <?php
            $image = get_field('story_section2_image3');
            $size = 'thumb-xsmall';
            $thumb = $image['sizes'][ $size ];
          ?>
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
          <?php
            $image = get_field('story_section2_image4');
            $size = 'thumb-xsmall';
            $thumb = $image['sizes'][ $size ];
          ?>
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
      </div>
    </div>
  </div>
</section>

<section class="story-block story-block--third">
  <div class="container">
    <div class="story-panel">
      <div class="story-panel-inner">
        <div class="story-block-content">
          <h3 class="story-block-title"><?php the_field('story_section3_title'); ?></h3>
          <div class="story-block-text">
            <?php the_field('story_section3_content'); ?>
          </div>
        </div>
        <div class="story-block-images">
          <?php
            $image = get_field('story_section3_image');
            $size = 'thumb-xsmall';
            $thumb = $image['sizes'][ $size ];
          ?>
          <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="story-block story-block--white story-block--fourth story-block--center">
  <div class="story-block-container container">
    <div class="story-block-inner">
      <div class="story-block-main">
        <h2 class="story-block-title"><?php the_field('story_section4_title'); ?></h2>
        <?php the_field('story_section4_content'); ?>
      </div>
    </div>
  </div>
</section>

<section class="contact-block">
  <div class="contact-block-container container">
    <div class="contact-block-inner">
      <div class="contact-block-columns">
        <div class="contact-block-columns-left">
          <h2 class="contact-block-title"><?php the_field('story_contact_title'); ?></h2>
          <div class="contact-block-content">
            <?php the_field('story_contact_content'); ?>
          </div>
          <div class="contact-block-form">
            <?php gravity_form('Schedule Tour', false, false, false, '', false); ?>
          </div>
        </div>
        <div class="contact-block-columns-right">
          <div class="contact-block-image">
            <?php
              $image = get_field('story_contact_image');
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
