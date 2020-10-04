<?php
/*
Template Name: category
Template post type: page
*/
?>

<?php get_header(); ?>

<main class="page-content">
    <div class="page-content__subheader subheader">
        <div class="container subheader__container">
            <h1 class="subheader__page-title page-title"><?php the_title(); ?></h1>
            <ul class="subheader__breadcrumbs breadcrumbs">
              <?php if (function_exists( 'dimox_breadcrumbs' )) dimox_breadcrumbs(); ?>
            </ul>
        </div>
    </div>

    <div class="page-content__container container">
      <?php
      $params = array(
        'post_type' => 'post',
        'numberposts' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'suppress_filters' => true
      );

      $my_posts = get_posts($params);
      foreach($my_posts as $my_post) : // для каждого поста из массива
        echo '<a href="' . get_permalink($my_post) . '">' . $my_post->post_title . '</a>'; // выводим ссылку
      endforeach; // конец цикла
      ?>

    </div>
</main>


<?php get_footer();?>

