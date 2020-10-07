<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
  <?php wp_head() ?>
</head>
<body>
<div class="sticky-footer-wrapper">
  <header class="main-header">
    <div class="main-header__contacts top-contacts">
      <div class="container">
        <ul class="top-contacts__list">
          <li class="top-contacts__item top-contacts-item top-contacts-item--phone">
            <a class="top-contacts-item__link" href="tel:+74912249338">+7 (4912) 24-93-38</a>
          </li>
          <li class="top-contacts__item top-contacts-item top-contacts-item--phone">
            <a class="top-contacts-item__link" href="tel:+7(910)611-00-50">+7 (910) 611-00-50</a>
          </li>
          <li class="top-contacts__item top-contacts-item top-contacts-item--phone">
            <a class="top-contacts-item__link" href="tel:+7(491)275-27-14"> +7 (491) 275-27-14</a>
          </li>
          <li class="top-contacts__item top-contacts-item top-contacts-item--mail">
            <a class="top-contacts-item__link" href="mailto:sales@shamr.ru">sales@shamr.ru</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-header__menu main-header-menu">
      <div class="main-header-menu__container container">
        <a class="main-header-menu__logo logo" href="/">
          <img class="logo__img" src="<?php bloginfo('template_directory')?>/img/logo.png" height="38" width="60" alt="logo">
        </a>
        <nav class="main-header-menu__nav main-nav main-nav--closed main-nav--nojs">
          <button class="main-nav__toggle" type="button">
            <span class="visually-hidden">Открыть меню</span>
          </button>
          <?php
            wp_nav_menu([
            'theme_location'  => 'header_menu',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'site-list',
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
        </nav>
      </div>
    </div>
  </header>


