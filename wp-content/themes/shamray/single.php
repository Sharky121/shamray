<?php
/*
Template Name: single
Template post type: post,page
*/
?>

<?php get_header(); ?>
  <main class="page-content single-product">
    <div class="page-content__subheader subheader">
            <div class="container subheader__container">
                <h1 class="subheader__page-title page-title"><?php the_title(); ?></h1>
                <?php if (function_exists( 'dimox_breadcrumbs' )) dimox_breadcrumbs(); ?>
            </div>
        </div>
    <div class="page-content__container container">
          <div class="page-content__main">
            <div class="single-product__wrapper">
              <div class="single-product__photo"><?php the_post_thumbnail('large'); ?></div>
              <div class="single-product__excerpt">
                <h2 class="single-product__title"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
              </div>
            </div>
            <div class="single-product__description">
              <?php
                while( have_posts()) : the_post();
                  the_content();
                endwhile;
              ?>
            </div>
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
