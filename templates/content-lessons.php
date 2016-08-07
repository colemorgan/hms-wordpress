<section class="banner banner--lessons">
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
  <div class="banner-content">
    <div class="banner-title-wrap">
      <div class="container">
        <h1 class="banner-title"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="banner-content-container container">
      <div class="banner-content-inner">
        <a data-sumome-listbuilder-id="<?php the_field('lessons_section1_popup'); ?>" class="btn btn--lessons js-schedule-tour">Schedule My Tour</a>
      </div>
    </div>
  </div>
</section>
<section class="lessons-block">
  <div class="lessons-block-container container">
    <div class="lessons-block-inner">
      <h3 class="lessons-block-title"><?php the_field('lessons_section1_title'); ?></h3>
      <div class="lessons-block-columns">
        <div class="lessons-block-column">
          <div class="lessons-block-content ">
            <?php the_field('lessons_section1_content'); ?>
          </div>
        </div>
        <div class="lessons-block-column">
          <div class="lessons-block-image">
            <?php
              $image = get_field('lessons_section1_image');
              $size = 'thumb-large';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonial testimonial--wide">
  <div class="testimonial-container container">
    <div class="testimonial-border">
      <div class="blockquote blockquote--lessons blockquote--gray">
        <div class="testimonial-columns">
          <div class="testimonial-column testimonial-column-left">
            <div class="testimonial-thumb">
              <?php
                $image = get_field('lessons_section2_image');
                $size = 'thumb-quote';
                $thumb = $image['sizes'][ $size ];
              ?>
              <?php if( !empty($thumb) ) : ?>
                <img src="<?php echo $thumb; ?>" />
              <?php endif ?>
            </div>
          </div>
          <div class="testimonial-column testimonial-column-right">
            <p><?php the_field('lessons_section2_quote'); ?></p>
            <cite>-<?php the_field('lessons_section2_cite'); ?></cite>
            <a class="read-more" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Testimonials' ) ) ); ?>">Read More Testimonials <i><svg class="icon icon-arrow icon-arrow--red"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-arrow--right"></use></svg></i></a>
          </div>
      </div>
    </div>
  </div>
</section>
<section class="lessons-block lessons-block--reverse">
  <div class="lessons-block-container container">
    <div class="lessons-block-inner">
      <h3 class="lessons-block-title"><?php the_field('lessons_section3_title'); ?></h3>
      <div class="lessons-block-columns">
        <div class="lessons-block-column">
          <div class="lessons-block-content ">
            <?php the_field('lessons_section3_content'); ?>
          </div>
        </div>
        <div class="lessons-block-column">
          <div class="lessons-block-image">
            <?php
              $image = get_field('lessons_section3_image');
              $size = 'thumb-large';
              $thumb = $image['sizes'][ $size ];
            ?>
            <?php if( !empty($thumb) ) : ?>
              <img src="<?php echo $thumb; ?>" />
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-guaranteed-results">
  <div class="section-guaranteed-results-container container">
    <div class="section-guaranteed-results-content">
      <h3 class="section-guaranteed-results-title">Guaranteed Results</h3>
      <div class="section-guaranteed-results-content">
        <p>If your child doesn’t perform to the level we guarantee after 30 days, we’ll refund their tuition in full. This is our commitment to investing in your child from the moment they begin.</p>
        <a class="section-guaranteed-results-btn btn btn--white" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Guaranteed Results' ) ) ); ?>">Read More <i><svg class="icon icon-arrow icon-arrow--right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/icons/sprite/sprite.svg#icon-arrow--right"></use></svg></i></a>
      </div>
    </div>
  </div>
</section>
<section class="lessons-block lessons-block--alt">
  <div class="lessons-block-container container">
    <div class="lessons-block-inner">
      <div class="lessons-block-header">
        <h3 class="lessons-block-title"><?php the_field('lessons_section4_title'); ?></h3>
        <p class="lessons-block-subtitle"><?php the_field('lessons_section4_subtitle'); ?></p>
      </div>
      <div class="lessons-list-columns">
        <div class="lessons-list-columns-row">
          <?php if( have_rows('lessons_section4_content_blocks') ): ?>
            <?php while( have_rows('lessons_section4_content_blocks') ): the_row();
              // vars
              $content = get_sub_field('content');
              $title = get_sub_field('title');
              ?>

              <div class="lessons-list-block">
                <div class="lessons-block-content lessons-list-block-content">
                  <h4 class="lessons-list-block-title"><?php echo $title; ?></h4>
                  <?php echo $content;?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-block">
  <div class="contact-block-container container">
    <div class="contact-block-inner">
      <div class="contact-block-columns">
        <div class="contact-block-columns-left">
          <h2 class="contact-block-title"><?php the_field('lessons_contact_title'); ?></h2>
          <div class="contact-block-content">
            <?php the_field('lessons_contact_content'); ?>
          </div>
          <div class="contact-block-form">
            <?php gravity_form('Schedule Tour', false, false, false, '', false); ?>
          </div>
        </div>
        <div class="contact-block-columns-right">
          <div class="contact-block-image">
            <?php
              $image = get_field('lessons_contact_image');
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
