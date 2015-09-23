<?php
/**
 * Template Name: Narrow Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>
