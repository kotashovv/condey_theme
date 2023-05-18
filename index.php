<?php
/*
Template Name: Главная страница
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo get_bloginfo('name') . ' / ' . get_the_title(); ?></title>
</head>

<body>
<div class="wrapper">
      <!-- header start -->
      <header class="header">
        <div class="header__row header__top">
          <div class="container">
            <div class="header__wrap">
              <nav class="header__nav">
              <?php
                wp_nav_menu( [
                  'menu'            => 'nav-menu',
                  'container'       => 'ul',
                  'menu_class'      => 'nav-list',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                ] );
              ?>
              </nav>
              <div class="header__email">
                <a href="mailto:info@kandeich.ru">info@kandeich.ru</a>
              </div>
              <div class="header__search">
                <form class="search-form" action="">
                  <input placeholder="Поиск по сайту" type="text" />
                  <button class="search-btn">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/search-btn.svg" alt="" />
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="header__row header__middle">
          <div class="container">
            <div class="header__wrap">
              <div class="header__title">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/Logo.svg" alt="" />
                </a>
                <p>
                  Проектирование, поставка, монтаж, обслуживание вентиляционного
                  и климатического оборудования
                </p>
              </div>
              <div class="header__socials">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/whatsap.svg" alt="" />
                </a>
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/telegram.svg" alt="" />
                </a>
              </div>
              <div class="header__tel">
                <a href="tel:+74955404091">+7 (495) 540-40-91</a>
                <span> с 9:00 до 18:00 ПН-ПТ </span>
              </div>
              <div class="header__action">
                <button data-popup=".popup1" class="main-btn transparent-btn">
                  Заказать звонок
                </button>
              </div>
              <div class="mobile__action">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/email-black.svg" alt="" />
                </a>
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/phone-black.png" alt="" />
                </a>
                <button class="search-btn">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/search-btn.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="header__row header__bottom">
          <div class="container">
            <div class="header__wrap">
              <div class="header__type">
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/condey.svg" alt="" />
                  Кондиционирование</a
                >
                <a href="#">
                  <img class="rotate" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/air.svg" alt="" />
                  Вентиляция</a
                >
              </div>
              <nav class="header__nav">
                <?php
                  wp_nav_menu( [
                    'menu'            => 'nav-menu',
                    'container'       => 'ul',
                    'menu_class'      => 'nav-list',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                  ] );
                ?>
              </nav>
            </div>
            <div class="mobile__nav">
              <div class="mobile__action">
                <button data-popup=".popup1" class="main-btn transparent-btn">
                  Заказать звонок
                </button>
              </div>
              <div class="header__socials">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/whatsap.svg" alt="" />
                </a>
                <a href="#">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/telegram.svg" alt="" />
                </a>
              </div>
              <div class="mobile__btn">
                <button class="burger-btn">
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="header__mobile">
          <div class="header__mobile-nav">
            <div class="header__mobile-types">
              <a href="#">Кондиционирование</a>
              <a href="#">Вентиляция</a>
            </div>
            <nav>
            <?php
                wp_nav_menu( [
                  'menu'            => 'nav-menu',
                  'container'       => 'ul',
                  'menu_class'      => 'nav-list',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                ] );
              ?>
            </nav>
          </div>
          <div class="header__mobile-info">
            <div class="info">
              <a class="tel" href="+74955404091">+7 (495) 540-40-91</a>
            </div>
            <div class="info">
              <a class="email-ico" href="mailto:info@kandeich.ru">
                info@kandeich.ru
              </a>
              <span class="map-ico">
                109382, г. Москва, вн.тер.г. мун. округ Люблино, ул Люблинская,
                д. 60 к. 2, помещ. С069
              </span>
              <div class="work-info">
                <p>Работаем в Москве и Московской области</p>
                <span> с 9.00 до 19.00 ПН-ПТ </span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- header finish -->

      <main class="main">
        <!-- главный баннер -->
        <section class="hero">
          <div class="hero__slider swiper">
            <div class="swiper-navigation hero-navigation">
              <button class="hero-prev swiper-button-prev">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/Vector.svg" alt="" />
              </button>
              <button class="hero-next swiper-button-next">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/Vector.svg" alt="" />
              </button>
            </div>
            <div class="swiper-pagination hero-pagination"></div>
            <div class="hero__wrapper-slider swiper-wrapper">
              <article
                style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-back.png)"
                class="hero__slide swiper-slide"
              >
                <div class="container">
                  <div class="hero__slide-text">
                    <div class="text">
                      <h2>
                        Если Вы ищете лучшее предложение по монтажу системы
                        вентиляции в Москве, то Вы его нашли!
                      </h2>
                    </div>
                    <div class="action">
                      <button class="main-btn transparent-btn">
                        Оставить заявку
                      </button>
                    </div>
                  </div>
                </div>
                <div class="hero__slide-img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-img.png" alt="" />
                </div>
              </article>
              <article
                style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-back.png)"
                class="hero__slide swiper-slide"
              >
                <div class="container">
                  <div class="hero__slide-text">
                    <div class="text">
                      <h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Saepe, veniam.
                      </h2>
                    </div>
                    <div class="action">
                      <button class="main-btn transparent-btn">
                        Оставить заявку
                      </button>
                    </div>
                  </div>
                </div>
                <div class="hero__slide-img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-img.png" alt="" />
                </div>
              </article>
              <article
                style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-back.png)"
                class="hero__slide swiper-slide"
              >
                <div class="container">
                  <div class="hero__slide-text">
                    <div class="text">
                      <h2>Lorem ipsum dolor sit amet.</h2>
                    </div>
                    <div class="action">
                      <button class="main-btn transparent-btn">
                        Оставить заявку
                      </button>
                    </div>
                  </div>
                </div>
                <div class="hero__slide-img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-img.png" alt="" />
                </div>
              </article>
              <article
                style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-back.png)"
                class="hero__slide swiper-slide"
              >
                <div class="container">
                  <div class="hero__slide-text">
                    <div class="text">
                      <h2>
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Recusandae animi aut pariatur voluptatibus velit
                        laborum!
                      </h2>
                    </div>
                    <div class="action">
                      <button class="main-btn transparent-btn">
                        Оставить заявку
                      </button>
                    </div>
                  </div>
                </div>
                <div class="hero__slide-img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/hero-img.png" alt="" />
                </div>
              </article>
            </div>
          </div>
        </section>
        <!-- главный баннер -->

        <!-- блок преимущества -->
        <section class="edge">
          <div class="container">
            <div class="edge__body">
              <article class="edge__item">
                <p>
                  17
                  <span> лет </span>
                </p>
                <span> опыта работы в отрасли </span>
              </article>
              <article class="edge__item">
                <p>212</p>
                <span> сданных объектов </span>
              </article>
              <article class="edge__item">
                <p>
                  26200
                  <span> м<sup>2</sup> </span>
                </p>
                <span> смонтированных воздуховодов </span>
              </article>
            </div>
          </div>
        </section>
        <!-- блок преимущества -->

        <!-- блок о нас -->
        <section class="about">
          <div class="container">
            <div data-da=".for-about-title, 920, 1" class="section-title">
              <h2>Монтажная компания «Кандеич»</h2>
            </div>
            <div class="about__body">
              <div class="about__text">
                <div class="for-about-title"></div>
                <div class="text">
                  <p>
                    Компания Кандеич, это высококвалифицированный и
                    клиентоориентированный сервис. Наша философия в том, чтобы
                    клиенты Кандеича миновали все те проблемы с которыми
                    ассоциируется российская стройка и ремонт.
                  </p>
                  <div class="quote">
                    <p>Наш девиз:</p>
                    <span
                      >Понятно, экономически доступно, быстро и предельно
                      качественно.</span
                    >
                  </div>
                  <p>
                    За все время существования сервиса у нас не было ни одной
                    даже околоконфликтной ситуации. Не будет ее и у вас.
                  </p>
                </div>
              </div>
              <div class="about__video">
                <div class="video">
                  <a data-fancybox="video" href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/sample-5s.mp4">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/video.png" alt="" />
                  </a>
                  <span class="video-title">
                    Реализуем объекты любой сложности и в любом состоянии. Даже
                    когда кажется, что все уже потеряно.
                  </span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- блок о нас -->

        <!-- сертификаты -->
        <section class="certification">
          <div class="container big-container">
            <div class="certification__title alt-title">
              <h3>Наши сертификаты</h3>
            </div>
            <div class="certification__wrap">
              <div class="cert-nav navigation">
                <button class="prev-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
                <button class="next-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
              </div>
              <div class="certification__slider swiper">
                <div class="swiper-pagination cert-pagination"></div>
                <div class="certification__slider-wrapper swiper-wrapper">
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer1.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer1.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer2.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer2.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer3.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer3.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer4.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer4.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer5.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer5.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer6.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer6.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer7.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer7.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer8.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer8.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer9.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer9.png" alt="" />
                  </a>
                  <a
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer10.png"
                    data-fancybox="certification"
                    class="certification__slider-slide swiper-slide"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cer10.png" alt="" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- сертификаты -->

        <!-- тип продукции 1 -->
        <section class="prods prods__items-one-wrap">
          <div class="container">
            <div class="prods__title section-title">
              <h3 class="title">Типы вентиляции</h3>
            </div>
            <div class="prods__items swiper prods__items-one">
              <div class="prods__item-wrapper swiper-wrapper">
                <a
                  style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/item-img.png)"
                  href="#"
                  class="prods__item swiper-slide"
                >
                  <span class="prods__num">01</span>
                  <h4 class="prods__item-name">Канальное кондиционирование</h4>
                  <p class="prods__item-desc">
                    Внутренний блок располагается в запотолочном пространстве.
                    Подача происходит через фронтальную, по отношению к полу,
                    решетку.
                  </p>
                </a>
                <a
                  href="#"
                  style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/item2.png)"
                  class="prods__item swiper-slide"
                >
                  <span class="prods__num">02</span>
                  <h4 class="prods__item-name">Кондиционеры настенного типа</h4>
                  <p class="prods__item-desc">
                    Внутренний блок располагается в запотолочном пространстве.
                    Подача происходит через фронтальную, по отношению к полу,
                    решетку.
                  </p>
                </a>
                <a
                  href="#"
                  style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/item3.png)"
                  class="prods__item swiper-slide"
                >
                  <span class="prods__num">03</span>
                  <h4 class="prods__item-name">Кассетные кондиционеры</h4>
                  <p class="prods__item-desc">
                    Внутренний блок располагается в запотолочном пространстве.
                    Подача происходит через фронтальную, по отношению к полу,
                    решетку.
                  </p>
                </a>
              </div>
            </div>
            <div class="section-nav">
              <button class="prods-prev btn-prev">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
              </button>
              <div class="prods__pag pagination"></div>
              <button class="prods-next btn-next">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
              </button>
            </div>
          </div>
        </section>
        <!-- тип продукции 1 -->

        <!-- тип продукции 2 -->
        <section class="prods prods__items-two-wrap">
          <div class="container">
            <div class="prods__title section-title">
              <h3 class="title">Приточная вентиляция</h3>
            </div>
            <div class="prods__items swiper prods__items-two">
              <div class="prods__wrapper swiper-wrapper">
                <a
                  href="#"
                  style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/item4.png)"
                  class="prods__item swiper-slide"
                >
                  <span class="prods__num">01</span>
                  <h4 class="prods__item-name">Приточная вентиляция</h4>
                  <p class="prods__item-desc">
                    Внутренний блок располагается в запотолочном пространстве.
                    Подача происходит через фронтальную, по отношению к полу,
                    решетку.
                  </p>
                </a>
                <a
                  href="#"
                  style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/item5.png)"
                  class="prods__item swiper-slide"
                >
                  <span class="prods__num">02</span>
                  <h4 class="prods__item-name">Приточно-вытяжная вентиляция</h4>
                  <p class="prods__item-desc">
                    Внутренний блок располагается в запотолочном пространстве.
                    Подача происходит через фронтальную, по отношению к полу,
                    решетку.
                  </p>
                </a>
                <a
                  href="#"
                  style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/item6.png)"
                  class="prods__item swiper-slide"
                >
                  <span class="prods__num">03</span>
                  <h4 class="prods__item-name">Система увлажнения воздуха</h4>
                  <p class="prods__item-desc">
                    Внутренний блок располагается в запотолочном пространстве.
                    Подача происходит через фронтальную, по отношению к полу,
                    решетку.
                  </p>
                </a>
              </div>
            </div>
            <div class="section-nav">
              <button class="prods-prev btn-prev">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
              </button>
              <div class="prods__pag pagination"></div>
              <button class="prods-next btn-next">
                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
              </button>
            </div>
          </div>
        </section>
        <!-- тип продукции 2 -->

        <!-- секция - почему выбирают нас - старт -->
        <section class="why">
          <div class="container">
            <div class="why__title">
              <h2 class="title">Почему выбирают нас</h2>
            </div>
            <div class="why__items">
              <article class="why__item">
                <div class="img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/w1.png" alt="" />
                </div>
                <div class="text">
                  <h4>Особый подход к проектированию</h4>
                  <p>
                    Только штатные специалисты-практики. Интеграция системы в
                    любой эксклюзивный интерьер. Бесплатные схемы и гарантия,
                    что спроектированная система будет не менее современной и
                    качественной в сравнении с любым другим проектом в РФ.
                  </p>
                </div>
              </article>
              <article class="why__item">
                <div class="img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/w2.png" alt="" />
                </div>
                <div class="text">
                  <h4>Только отечественные эксперты</h4>
                  <p>
                    В монтажных бригадах состоят только граждане РФ, являющиеся
                    экспертами в своей области. Мы одновременно держим высокий
                    уровень зарплат и низкий уровень стоимости для клиента,
                    предоставляя лучшее предложение по соотношению
                    цена/качество.
                  </p>
                </div>
              </article>
              <article class="why__item">
                <div class="img">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/w3.png" alt="" />
                </div>
                <div class="text">
                  <h4>Доступный язык менеджеров</h4>
                  <p>
                    Полная и объективная картина по рынку оборудования. Никаких
                    агитаций. Не стандартные, эффективные и гарантировано
                    надежные решения при ограниченном бюджете. Поддержка 24/7.
                  </p>
                </div>
              </article>
            </div>
          </div>
        </section>
        <!-- секция - почему выбирают нас - конец -->

        <!-- форма обратной связи старт -->

        <section class="feedback">
          <div class="container">
            <div class="feedback__title">
              <h2 class="title">
                Получите коммерческое предложение в день обращения
              </h2>
            </div>
            <div class="feedback__body">
              <div class="feedback__list">
                <ul>
                  <li>Ответим на любые вопросы</li>
                  <li>Подберем решение под Ваши потребности</li>
                  <li>Проконсультируем по вопросам эксплуатации и сервиса</li>
                  <li>Подготовим эскиз проекта</li>
                  <li>Рассчитаем стоимость</li>
                </ul>
              </div>
              <div class="feedback__form">
                <form>
                  <label class="form-input">
                    <span> Телефон </span>
                    <input placeholder="Введите номер телефона" type="tel" />
                  </label>
                  <label class="form-input">
                    <span> Комментарий </span>
                    <input placeholder="Опишите Ваш запрос" type="text" />
                  </label>
                  <div class="checks">
                    <label>
                      <input type="checkbox" />
                      <span></span>
                      <p>Проектирование</p>
                    </label>
                    <label>
                      <input type="checkbox" />
                      <span></span>
                      <p>Обслуживание</p>
                    </label>
                    <label>
                      <input type="checkbox" />
                      <span></span>
                      <p>Монтаж</p>
                    </label>
                  </div>
                  <label class="file-add">
                    <p>Прикрепить файлы</p>
                    <input type="file" />
                  </label>
                  <div class="button">
                    <button class="main-btn">Оставить заявку</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

        <!-- форма обратной связи конец -->

        <!-- причины блок начало -->
        <section class="reson">
          <div class="reson__img">
            <img class="vertical" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/reson.png" alt="" />
          </div>
          <div class="container">
            <div class="reson__body">
              <div class="reson__text">
                <div class="reson__title">
                  <h2 class="title">Причины, по которым нам доверяют</h2>
                </div>
                <div class="reson__list">
                  <ul>
                    <li>
                      <h4>Экспертность</h4>
                      <p>
                        Команда высококвалифицированных профессионалов, с опытом
                        свыше 10 лет, позволяет формировать наиболее
                        конкурентные предложения и высокий уровень надежности
                        смонтированных систем.
                      </p>
                    </li>
                    <li>
                      <h4>Клиентоориентированность</h4>
                      <p>
                        Ни одной околоконфликтной ситуации с заказчиками. Ни
                        одной низкой оценки от тех. надзора. Гарантированный
                        положительный отзыв о сервисе со стороны клиента.
                      </p>
                    </li>
                    <li>
                      <h4>Технологичность</h4>
                      <p>
                        Предусматриваем все возможные проблемы в монтаже, на
                        стадии проектирования и подготовки. Не стандартный
                        подход к выполнению задач любой сложности, основанный на
                        предостаточном опыте.
                      </p>
                    </li>
                    <li>
                      <h4>Гибкость</h4>
                      <p>
                        Подбор решения под Ваш бюджет, без потери качества.
                        Лучшие ценовые предложения от любого из поставщиков. Не
                        сдвигаемая смета после заключения договора.
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="quote">
                  <span>
                    Понятно, экономически доступно, быстро и предельно
                    качественно
                  </span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- причины блок начало -->

        <!-- блок гарантии старт -->

        <section class="guarante">
          <div class="num">
            <span> 3 года </span>
          </div>
          <div class="container">
            <div class="guarante__text">
              <div class="guarante__title">
                <h2 class="title">Гарантии</h2>
              </div>
              <div class="text">
                <p>
                  Гарантийный срок на выполненные работы по монтажу систем
                  вентиляции и кондиционирования, устанавливается на 3 года от
                  даты подписания сторонами акта сдачи-приемки выполненных работ
                  или акта сдачи-приемки в эксплуатацию системы вентиляции.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- блок гарантии конец-->

        <!-- отзывы старт -->
        <section class="review">
          <div class="container big-container">
            <div class="review__title section-title alt-title">
              <h2 class="title">Отзывы</h2>
            </div>
            <div class="review__wrap">
              <div
                class="swiper-pagination review-pagination standart-pagination"
              ></div>
              <div class="review__slider swiper">
                <div class="review__slider-wrapper swiper-wrapper">
                  <a
                    data-fancybox="review"
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/sample-5s.mp4"
                    class="review__slider-slide swiper-slide"
                    href="#"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/v1.png" alt="" />
                  </a>
                  <a
                    data-fancybox="review"
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/sample-5s.mp4"
                    class="review__slider-slide swiper-slide"
                    href="#"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/v1.png" alt="" />
                  </a>
                  <a
                    data-fancybox="review"
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/sample-5s.mp4"
                    class="review__slider-slide swiper-slide"
                    href="#"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/v1.png" alt="" />
                  </a>
                  <a
                    data-fancybox="review"
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/sample-5s.mp4"
                    class="review__slider-slide swiper-slide"
                    href="#"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/v1.png" alt="" />
                  </a>
                  <a
                    data-fancybox="review"
                    href="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/sample-5s.mp4"
                    class="review__slider-slide swiper-slide"
                    href="#"
                  >
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/v1.png" alt="" />
                  </a>
                </div>
              </div>
              <div class="review-nav standart-nav-slider">
                <button class="prev-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
                <button class="next-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
        </section>
        <!-- отзывы конец -->

        <!-- наши работы старт -->

        <section class="works">
          <div class="container big-container">
            <div class="works__title section-title">
              <h2 class="title alt-title">Наши работы</h2>
            </div>
            <div class="works__wrap">
              <div class="works-nav standart-nav-slider">
                <button class="prev-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
                <button class="next-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
              </div>
              <div
                class="swiper-pagination works-pagination standart-pagination"
              ></div>
              <div class="works__slider swiper">
                <div class="works__slider-wrapper swiper-wrapper">
                  <a
                    style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/wo1.png)"
                    class="works__slider-slide swiper-slide"
                    href="#"
                  >
                    <div class="name">
                      <span> ЖК ВТБ Арена Парк </span>
                    </div>
                  </a>
                  <a
                    style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/wo2.png)"
                    class="works__slider-slide swiper-slide"
                    href="#"
                  >
                    <div class="name">
                      <span> ЖК Зиларт </span>
                    </div>
                  </a>
                  <a
                    style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/wo3.png)"
                    class="works__slider-slide swiper-slide"
                    href="#"
                  >
                    <div class="name">
                      <span> Королев </span>
                    </div>
                  </a>
                  <a
                    style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/wo2.png)"
                    class="works__slider-slide swiper-slide"
                    href="#"
                  >
                    <div class="name">
                      <span> Королев </span>
                    </div>
                  </a>
                  <a
                    style="background-image: url(<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/wo1.png)"
                    class="works__slider-slide swiper-slide"
                    href="#"
                  >
                    <div class="name">
                      <span> Королев </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- наши работы конец -->

        <!-- блок партнеты старт -->
        <section class="partners">
          <div class="container big-container">
            <div class="partners__title section-title alt-title">
              <h2 class="title">Партнёры</h2>
            </div>
            <div class="partners__wrap">
              <div class="part-nav standart-nav-slider">
                <button class="prev-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
                <button class="next-slide">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/vector-black.svg" alt="" />
                </button>
              </div>
              <div
                class="swiper-pagination part-pagination standart-pagination"
              ></div>
              <div class="partners__slider swiper">
                <div class="partners__slider-wrapper swiper-wrapper">
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p1.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p2.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p3.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p4.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p5.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p6.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p7.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p8.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p9.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p10.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p11.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p12.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p13.png" alt="" />
                  </article>
                  <article class="partners__slider-slide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/p14.png" alt="" />
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- блок партнеты старт -->

        <!-- как мы работаем старт -->

        <section class="how">
          <div class="container">
            <div class="how__title section-title">
              <h2 class="title">Как мы работаем</h2>
            </div>
            <div class="how__items">
              <article class="how__item">
                <div class="num"></div>
                <div class="text">
                  <h4>Постановка задачи</h4>
                  <p>
                    Исходя из Вашей потребности, устанавливаем задачу.
                    Консультируем для понимания, между какими системами возможен
                    выбор, для принятия заказчиком самостоятельного решения в
                    пользу необходимой конфигурации.
                  </p>
                </div>
              </article>
              <article class="how__item">
                <div class="num"></div>
                <div class="text">
                  <h4>Техническое задание</h4>
                  <p>
                    При возможности осматриваем объект и составляем подробное
                    техническое задание для проектирования. Бесплатно
                    проектируем и согласовываем проект с заказчиком или
                    дизайнером для идеальной интеграции.
                  </p>
                </div>
              </article>
              <article class="how__item">
                <div class="num"></div>
                <div class="text">
                  <h4>Согласование стоимости</h4>
                  <p>
                    Осмечиваем проект, и при необходимости подгоняем стоимость
                    под конкретный бюджет, не теряя при этом в качестве.
                  </p>
                </div>
              </article>
              <article class="how__item">
                <div class="num"></div>
                <div class="text">
                  <h4>Оформление договора</h4>
                  <p>
                    Составляем и согласовываем договор с удобной для Вас формой
                    налогообложения: упрощенной или с НДС. Перед подписанием
                    повторно осматриваем объект, уже с командой инженеров, после
                    чего заключаем договор.
                  </p>
                </div>
              </article>
              <article class="how__item">
                <div class="num"></div>
                <div class="text">
                  <h4>Поставка материалов</h4>
                  <p>
                    Закупаем расходные материалы и оборудование. Совершаем
                    поставку на объект. При отложенном монтаже можем бесплатно
                    хранить их на нашем складе.
                  </p>
                </div>
              </article>
              <article class="how__item">
                <div class="num"></div>
                <div class="text">
                  <h4>Выполнение работы</h4>
                  <p>
                    Реализуем первый этап монтажа при черновом ремонте. При
                    переходе объекта в стадию чистовой отделки реализуем второй.
                    Вводим систему в эксплуатацию и подписываем закрывающие
                    документы.
                  </p>
                </div>
              </article>
            </div>
          </div>
        </section>

        <!-- как мы работаем старт -->

        <!-- частый вопросы - старт -->
        <section class="faq">
          <div class="container">
            <div class="faq__title section-title">
              <h2 class="title">Вы спрашиваете - мы отвечаем</h2>
            </div>
            <div class="faq__items">
              <article class="faq__item">
                <button class="accord-btn">
                  На сколько нужно опустить потолок?
                </button>
                <div class="text">
                  <p>
                    Оборудование распологается за потолком в тех помещении,
                    гардеробе или сан узле. В зависимости от модели и мощности
                    оборудования опуск потолка варьируется от 200 до 400мм
                    <br />
                    <br />
                    Опуск потолка в жилых зонах зависит от размера воздуховодов
                    и выбора решеток и составляет 150-250мм
                    <br />
                    <br />
                    Есть возможность не нарушать опуск потолка расположив
                    решетки в стенах технических помещений смежных с жилыми.
                  </p>
                </div>
              </article>
              <article class="faq__item">
                <button class="accord-btn">
                  Будет ли слышно как работает система?
                </button>
                <div class="text">
                  <p>
                    При правильном проектировании системы вентиляции и
                    кондиционирования систему будет не слышно.
                  </p>
                </div>
              </article>
              <article class="faq__item">
                <button class="accord-btn">
                  Сколько примерно будет стоить система под ключ?
                </button>
                <div class="text">
                  <p>
                    Рассчитать систему без проектирования невозможно, поэтому мы
                    сначала делаем бесплатную схему с расчетами для каждого
                    объекта и согласовываем ее с заказчиком или дизайнером,
                    после этого приступаем к расчету, с помощью компьютера, для
                    избежания перерасходов и получения самой конкурентной
                    стоимости.
                  </p>
                </div>
              </article>
              <article class="faq__item">
                <button class="accord-btn">
                  Какой период обслуживания системы?
                </button>
                <div class="text">
                  <p>
                    "Проводить ТО систем вентиляции и кондиционирования
                    рекомендуется 2 раза в год: перед запуском системы в
                    весенний период, для работы на охлаждение и в осеннее время
                    года, когда планируется использовать прибор на обогрев.
                    Чистка фильтра зависит от времени использования систем
                    кондиционирования и вентиляции. Варьируется от 2 до 6
                    месяцев. Преимущества ТО:
                    <br /><br />
                    Обеспечивается эффективная работа оборудования.
                    <br /><br />
                    Предупреждение аварийных ситуаций.
                    <br /><br />
                    Предотвращение появления в блоках системы болезнетворных
                    микробов, плесени, грибковых образований и пыльных клещей.
                    <br /><br />
                    Сокращение эксплуатационных расходов.
                    <br /><br />
                    Соблюдение гарантийных обязательств."
                  </p>
                </div>
              </article>
              <article class="faq__item">
                <button class="accord-btn">
                  Можно ли регулировать количество воздуха по помещениям?
                </button>
                <div class="text">
                  <p>
                    "В стандартных системах вентиляции воздух подается в
                    одинаковом объеме во все помещения. Регулировать можно
                    только мощность всей системы, из-за чего повышаются
                    эксплуатационные расходы. Так как потребность в вентиляции в
                    каждом помещении индивидуальна и зависит от присутствия в
                    нем людей, то намного удобнее управлять количеством
                    подаваемого воздуха в определенное помещение или зону. Это
                    возможно с применением VAV-системы (англ. Variable Air
                    Volume) — системы вентиляции с переменным расходом воздуха,
                    которая является энергосберегающей системой вентиляции,
                    позволяющей сэкономить энергию без снижения уровня комфорта.
                    <br />
                    <br />
                    Вы можете плавно менять подачу воздуха в каждой зоне и
                    полностью отключать вентиляцию там, где нет людей. Например
                    в ночное время не подавать воздух в гостиную."
                  </p>
                </div>
              </article>
            </div>
          </div>
        </section>
        <!-- частый вопросы - старт -->
        <div class="breaker">
          <div class="container">
            <div class="breaker__wrap">
              <div class="text">
                <p>Не нашли ответ на свой вопрос? Спросите у менеджера!</p>
              </div>
              <div class="action">
                <button class="main-btn transparent-btn">
                  оставить заявку
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="footer">
        <div class="container">
          <div class="footer__top">
            <div class="footer__col">
              <div class="col">
                <div class="footer__title">
                  <a class="footer__logo" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/footer-logo.svg" alt="" />
                  </a>
                  <p>
                    Проектирование, поставка, монтаж, обслуживание
                    вентиляционного и климатического оборудования
                  </p>
                </div>
                <div class="footer__pays">
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/p1.svg" alt="" />
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/p2.svg" alt="" />
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/p3.svg" alt="" />
                  <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/p4.svg" alt="" />
                </div>
              </div>
              <div class="col">
                <div class="footer__type">
                  <a href="#"
                    ><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/condey.svg" alt="" />
                    Кондиционирование</a
                  >
                  <a href="#"
                    ><img
                      class="rotate"
                      src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/air.svg"
                      alt=""
                    />
                    Вентиляция</a
                  >
                </div>
                <nav class="footer__nav">
                  <?php
                    wp_nav_menu( [
                      'menu'            => 'nav-menu',
                      'container'       => 'ul',
                      'menu_class'      => '',
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                    ] );
                  ?>
                </nav>
              </div>
            </div>
            <div class="footer__col">
              <div class="socials">
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/footer-what.svg" alt=""
                /></a>
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/footer-tele.svg" alt=""
                /></a>
              </div>
              <div class="phone">
                <a href="tel:+74955404091">+7 (495) 540-40-91</a>
              </div>
              <div class="info">
                <a class="mail-ico" href="mailto:info@kandeich.ru"
                  >info@kandeich.ru</a
                >
                <span class="map-ico">
                  109382, г. Москва, вн.тер.г. мун. округ Люблино, ул
                  Люблинская, д. 60 к. 2, помещ. С069
                </span>
                <div class="work-ico">
                  <p>Работаем в Москве и Московской области</p>
                  <span> с 9:00 до 18:00 ПН-ПТ </span>
                </div>
              </div>
              <div class="action">
                <button data-popup=".popup1">Заказать звонок</button>
              </div>
            </div>
          </div>
          <div class="footer__bot">
            <span class="copy">© 2023 Кандеич | Все права защищены</span>
            <a href="#" class="conf">Политика конфиденциальности</a>
            <a href="#" class="conf">Пользовательское соглашение</a>
            <a
              target="_blank"
              href="https://digital.int-net-partner.ru/"
              class="dev"
              >Разработка и продвижение Int-Net-Partner</a
            >
          </div>
        </div>
      </footer>
      <div class="popup">
        <div class="popup__body">
          <div class="popup__item popup1">
            <div class="popup-notice">
              <div class="title">
                <span> Ваша заявка отправлена </span>
              </div>
              <div class="text">
                <span> Наш менеджер свяжется с Вами в ближайшее время </span>
              </div>
            </div>
            <button class="close-popup"></button>
            <div class="title">
              <span> Заказать звонок </span>
            </div>
            <div class="form">
              <form>
                <label>
                  <input placeholder="Введите номер телефона" type="tel" />
                  <span>Телефон</span>
                </label>
                <div class="action">
                  <button class="main-btn">Заказать звонок</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<?php wp_footer(); ?>

</html>