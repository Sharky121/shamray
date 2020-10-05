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
      <?php
      while( have_posts()) : the_post();
        the_content();
      endwhile;
      ?>

      <section class="page-content__category-child category-child">
        <ul class="category-child__list">
          <?php
          $post_id = get_the_ID();

          if ($post_id === 85) {
            $cat = 'cat=3';
          }

          $query = new WP_Query($cat);
          if( $query->have_posts() ){
            while( $query->have_posts() ){
              $query->the_post();
              ?>
              <li class="category-child__item">
                <a class="category-child__link" href="<?php the_permalink(); ?>">
                  <div class="category-child__img"><?php the_post_thumbnail('large'); ?></div>
                  <p class="category-child__title"><?php the_title(); ?></p>
                </a>
              </li>
              <?php
            }
            wp_reset_postdata(); // сбрасываем переменную $post
          }
          ?>
        </ul>
      </section>
    </div>
    <aside class="page-content__additional-menu additional-menu">
      <ul class="additional-menu__list">
        <li class="additional-menu__item">
          <a class="additional-menu__link" href="">Экраны на батарею</a>
        </li>
        <li class="additional-menu__item additional-menu__item--active">
          <a class="additional-menu__link" href="">Защита для кондиционеров</a>
        </li>
        <li class="additional-menu__item">
          <a class="additional-menu__link" href="">Вентиляционные короба</a>
        </li>
        <li class="additional-menu__item">
          <a class="additional-menu__link" href="">Вентиляционные решетки</a>
        </li>
        <li class="additional-menu__item">
          <a class="additional-menu__link" href="">Жалюзийные решетки</a>
        </li>
        <li class="additional-menu__item">
          <a class="additional-menu__link" href="">Напольные решётки из латуни и нержавейки</a>
        </li>
        <li class="additional-menu__item">
          <a class="additional-menu__link" href="">Люки</a>
        </li>
      </ul>
    </aside>
  </div>
</main>
<?php get_footer();?>

