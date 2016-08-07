<?php
/**
 * Template Name: Music Lessons
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'lessons'); ?>
<?php endwhile; ?>
