<?php
/*
Template Name: production
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

    </div>
    <aside class="page-content__additional-menu additional-menu">
      <?php
        wp_nav_menu([
        'theme_location'  => 'aside_menu',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'additional-menu__list',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
      ]);
      ?>
    </aside>
  </div>
</main>
<?php get_footer();?>

