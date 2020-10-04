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
      <ul class="subheader__breadcrumbs breadcrumbs">
          <?php the_breadcrumb() ?>
      </ul>
    </div>
  </div>

  <div class="page-content__container container">
      <?php
      global $more;
      while(have_posts()) : the_post();
          $more = 1;
          the_content();
      endwhile;
      ?>
  </div>
</main>

<?php get_footer();?>
