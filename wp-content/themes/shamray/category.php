<?php
/*
Template Name: category
Template post type: page
*/
?>

<?php get_header(); ?>
  <main class="page-content category-page">
  <div class="page-content__subheader subheader">
    <div class="container subheader__container">
      <h1 class="subheader__page-title page-title"><?php the_title(); ?></h1>
      <?php if (function_exists( 'dimox_breadcrumbs' )) dimox_breadcrumbs(); ?>
    </div>
  </div>
  <div class="page-content__container container">
    <div class="page-content__main">
      <div>
        <?php
        while( have_posts()) : the_post();
          the_content();
        endwhile;
        ?>

      </div>
      <section class="page-content__category-child category-child">
        <ul class="category-child__list">
          <?php
          $post_id = get_the_ID();

          if ($post_id === 85) {
            $cat = 'cat=3';
          }

          if ($post_id === 88) {
            $cat = 'cat=4';
          }

          if ($post_id === 126) {
            $cat = 'cat=6';
          }

          $query = new WP_Query($cat);
          if ($query->have_posts()) {
            while( $query->have_posts() ){ $query->the_post(); ?>
              <li class="category-child__item">
                <a class="category-child__link" href="<?php the_permalink(); ?>">
                  <div class="category-child__img"><?php the_post_thumbnail('large'); ?></div>
                  <p class="category-child__title"><?php the_title(); ?></p>
                </a>
              </li>
            <?php } wp_reset_postdata();
          }
          ?>
        </ul>
      </section>
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

