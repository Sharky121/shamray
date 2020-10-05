<?php
/*
Template Name: page
Template post type: post, page
*/
?>

<?php get_header(); ?>

<main class="page-content">
  <div class="page-content__subheader subheader">
    <div class="container subheader__container">
      <h1 class="subheader__page-title page-title"><?php the_title(); ?></h1>
      <?php if (function_exists( 'dimox_breadcrumbs' )) dimox_breadcrumbs(); ?>
    </div>
  </div>

  <div class="page-content__container container">
    <div class="page-content__main">
      <?php
      while( have_posts()) : the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </div>
</main>

<?php get_footer();?>
