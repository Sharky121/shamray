<?php
  remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
  remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
  remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
  remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
  remove_action('wp_head','wp_generator');  // скрыть версию wordpress


  show_admin_bar(false);

  register_nav_menus(array(
      'header_menu' => 'Меню в шапке',
      'aside_menu' => 'aside-production',
      'opportunities-menu' => 'opportunities-menu',
  ));

  function true_include_myscript() {
      wp_enqueue_script( 'myscript',  get_template_directory_uri() . '/js/script.js', array('jquery'), '3.0', true );
  }

  add_action( 'init', 'true_jquery_register' );

  function true_jquery_register() {
    if ( !is_admin() ) {
      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
      wp_enqueue_script( 'jquery' );
    }
  }

  add_action( 'wp_enqueue_scripts', 'true_include_myscript' );

  function owl_script() {
    wp_enqueue_script( 'owlscript',  get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '3.0', true );
  }

  add_action( 'init', 'owl_script' );


function lightcase() {
  wp_enqueue_script( 'lightcasescript',  get_template_directory_uri() . '/js/lightcase.js', array('jquery'), '3.0', true );
}

add_action( 'init', 'lightcase' );

function jquery_ui() {
  wp_enqueue_script( 'jqueryui',  get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '3.0', true );
}

add_action( 'init', 'jquery_ui' );

  /*
   * "Хлебные крошки" для WordPress
   * автор: Dimox
   * версия: 2019.03.03
   * лицензия: MIT
  */
  function dimox_breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home']     = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author']   = 'Статьи автора %s'; // текст для страницы автора
    $text['404']      = 'Ошибка 404'; // текст для страницы 404
    $text['page']     = 'Страница %s'; // текст 'Страница N'
    $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before    = '<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after     = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep            = ''; // разделитель между "крошками"
    $before         = '<li class="breadcrumbs__item">'; // тег перед текущей "крошкой"
    $after          = '</li>'; // тег после текущей "крошки"

    $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url       = home_url('/');
    $link           = '<li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item">%2$s</a>';
    $link          .= '<meta itemprop="position" content="%3$s" />';
    $link          .= '</li>';
    $parent_id      = ( $post ) ? $post->post_parent : '';
    $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

    if ( is_home() || is_front_page() ) {

      if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

    } else {

      $position = 0;

      echo $wrap_before;

      if ( $show_home_link ) {
        $position += 1;
        echo $home_link;
      }

      if ( is_category() ) {
        $parents = get_ancestors( get_query_var('cat'), 'category' );
        foreach ( array_reverse( $parents ) as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          $cat = get_query_var('cat');
          echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_current ) {
            if ( $position >= 1 ) echo $sep;
            echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
          } elseif ( $show_last_sep ) echo $sep;
        }

      } elseif ( is_search() ) {
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          if ( $show_home_link ) echo $sep;
          echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_current ) {
            if ( $position >= 1 ) echo $sep;
            echo $before . sprintf( $text['search'], get_search_query() ) . $after;
          } elseif ( $show_last_sep ) echo $sep;
        }

      } elseif ( is_year() ) {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . get_the_time('Y') . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;

      } elseif ( is_month() ) {
        if ( $show_home_link ) echo $sep;
        $position += 1;
        echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
        if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
        elseif ( $show_last_sep ) echo $sep;

      } elseif ( is_day() ) {
        if ( $show_home_link ) echo $sep;
        $position += 1;
        echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
        $position += 1;
        echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
        if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
        elseif ( $show_last_sep ) echo $sep;

      } elseif ( is_single() && ! is_attachment() ) {
        if ( get_post_type() != 'post' ) {
          $position += 1;
          $post_type = get_post_type_object( get_post_type() );
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        } else {
          $cat = get_the_category(); $catID = $cat[0]->cat_ID;
          $parents = get_ancestors( $catID, 'category' );
          $parents = array_reverse( $parents );
          $parents[] = $catID;
          foreach ( $parents as $cat ) {
            $position += 1;
            if ( $position > 1 ) echo $sep;
            echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
          }
          if ( get_query_var( 'cpage' ) ) {
            $position += 1;
            echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
            echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
          } else {
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;
          }
        }

      } elseif ( is_post_type_archive() ) {
        $post_type = get_post_type_object( get_post_type() );
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_home_link && $show_current ) echo $sep;
          if ( $show_current ) echo $before . $post_type->label . $after;
          elseif ( $show_home_link && $show_last_sep ) echo $sep;
        }

      } elseif ( is_attachment() ) {
        $parent = get_post( $parent_id );
        $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        $position += 1;
        echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;

      } elseif ( is_page() && ! $parent_id ) {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . get_the_title() . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;

      } elseif ( is_page() && $parent_id ) {
        $parents = get_post_ancestors( get_the_ID() );
        foreach ( array_reverse( $parents ) as $pageID ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
        }
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;

      } elseif ( is_tag() ) {
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          $tagID = get_query_var( 'tag_id' );
          echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_home_link && $show_current ) echo $sep;
          if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
          elseif ( $show_home_link && $show_last_sep ) echo $sep;
        }

      } elseif ( is_author() ) {
        $author = get_userdata( get_query_var( 'author' ) );
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_home_link && $show_current ) echo $sep;
          if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
          elseif ( $show_home_link && $show_last_sep ) echo $sep;
        }

      } elseif ( is_404() ) {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $text['404'] . $after;
        elseif ( $show_last_sep ) echo $sep;

      } elseif ( has_post_format() && ! is_singular() ) {
        if ( $show_home_link && $show_current ) echo $sep;
        echo get_post_format_string( get_post_format() );
      }

      echo $wrap_after;

    }
  } // end of dimox_breadcrumbs()

  // Отключаем стандартные стили WooCommerce
  add_action( 'wp_enqueue_scripts', function(){
    wp_deregister_style( 'woocommerce-general' );
    wp_deregister_style( 'woocommerce-layout' );
  });

add_theme_support( 'post-thumbnails' );
