<?php get_header(); ?>
  <main class="page-content index-page">
    <section class="index-page__slider index-slider">
      <div class="index-slider__background"></div>
      <div class="container index-slider__container">
        <h2 class="index-slider__title">Металлические изделия <br> из перфорированного листа</h2>

        <ul class="index-slider__list features__list">
          <li class="features__item">Изготовление по вашим размерам</li>
          <li class="features__item">Штучно или в крупных объемах</li>
          <li class="features__item">Минимальные сроки изготовления</li>
          <li class="features__item">Доставка транспортными компаниями</li>
        </ul>

        <a class="index-slider__btn btn" href="">Оставить заявку</a>
      </div>
    </section>

    <section class="index-page__section index-page__our-production our-production">
      <div class="container our-production__container">
        <div class="our-production__content">
          <h2 class="our-production__title">Наша продукция</h2>

          <p>В наличии — широкий ассортимент стандартных металлических изделий. Мы готовы изготовить любую декоративную решетку по вашим размерам. </p>
          <p>Максимальные размеры изделия — <b>2000 х 1000 мм</b>. При необходимости возможно изготовление более объемной решетки из нескольких составных частей.</p>
          <p>Изделия из перфорированной стали окрашиваем в любой цвет по выбору заказчика, располагаем возможностью печати на решетках цифровых изображений.</p>
        </div>
        <div class="our-production__carousel owl-carousel owl-theme">
          <div class="item">
            <img src="<?php bloginfo('template_directory')?>/img/slide_1.jpg" alt="">
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory')?>/img/slide_2.jpg" alt="">
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory')?>/img/slide_3.jpg" alt="">
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory')?>/img/slide_4.jpg" alt="">
          </div>
          <div class="item">
            <img src="<?php bloginfo('template_directory')?>/img/slide_5.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="index-page__section index-page__advantages advantages">
      <div class="container advantages__container">
        <h2 class="advantages__title">Наши преимущества</h2>

        <ul class="advantages__list">
          <li class="advantages__item">
            <img class="advantages__img" src="<?php bloginfo('template_directory')?>/img/quality.svg" width="60" height="60" alt="">
            <h3 class="advantages__subtitle">Высокое качество запатентованных изделий собственного производства</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="<?php bloginfo('template_directory')?>/img/sketch.svg" width="60" height="60" alt="">
            <h3 class="advantages__subtitle">Возможность изготовления по эскизам заказчика</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="<?php bloginfo('template_directory')?>/img/choices.svg" width="60" height="60" alt="">
            <h3 class="advantages__subtitle">Возможность выбора перфорации</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="<?php bloginfo('template_directory')?>/img/paint-swatch.svg" width="60" height="60" alt="">
            <h3 class="advantages__subtitle">Возможность выбора окраски по RAL</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="<?php bloginfo('template_directory')?>/img/delivery-truck.svg" width="60" height="60" alt="">
            <h3 class="advantages__subtitle">Доставка транспортными компаниями по всей России</h3>
          </li>
          <li class="advantages__item">
            <img class="advantages__img" src="<?php bloginfo('template_directory')?>/img/clock.svg" width="60" height="60" alt="">
            <h3 class="advantages__subtitle">Кратчайшие сроки изготовления</h3>
          </li>
        </ul>
      </div>
    </section>

    <section class="index-page__section index-page__about index-about">
      <div class="container index-about__container">
        <div class="index-about__img">
          <img src="<?php bloginfo('template_directory')?>/img/about.jpg" width="400" alt="">
        </div>
        <div class="index-about__content">
          <h2 class="index-about__title">О компании</h2>

          <p>Предприятие «ИП Шамрай Виктор Павлович» изготавливает металлические экраны на батарею отопления, декоративные вентиляционные решетки, коробы для кондиционеров и другие изделия из металла.
            Наша компания успешно работает в отрасли уже более пятнадцати лет, с 2000 года.</p>
          <p>Основное производство и главный офис компании расположены в городе Рязань.
            Компания “Шамрай” является лидером по производству решеток и экранов, где используется перфорация из металла.</p>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>

