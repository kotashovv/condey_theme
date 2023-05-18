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
                <a class="whatsapp-link" href="#">
                     <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.8947 0.0945015C13.0197 0.807781 6.99546 4.54606 3.33452 10.3726C-1.8561 18.6226 -0.885009 29.5281 5.67202 36.7125C9.30718 40.6914 13.8447 43.0719 19.2931 43.8453C20.3072 43.9914 23.6845 43.9828 24.7501 43.8453C29.7259 43.1578 34.1775 40.9492 37.5634 37.4945C38.6806 36.3601 38.9126 36.0937 39.6517 35.114C41.8517 32.1836 43.2869 28.6086 43.8455 24.707C43.9916 23.6929 43.9916 20.307 43.8455 19.2929C43.4759 16.689 42.797 14.4718 41.7228 12.2976C40.5712 9.9945 39.4025 8.3531 37.572 6.50544C34.1775 3.06794 29.9322 0.928093 25.0509 0.206219C23.9939 0.0515327 20.9431 -0.0172195 19.8947 0.0945015ZM25.3517 8.79138C33.0431 10.6218 37.4087 18.3906 34.9337 25.8328C34.2978 27.7578 33.2837 29.3648 31.7541 30.9031C29.8205 32.8453 27.7322 33.9797 25.008 34.5554C24.2603 34.7187 23.8306 34.7531 22.5158 34.7531C20.3416 34.7617 18.9837 34.4781 17.0673 33.6359C16.5947 33.4297 16.1478 33.2578 16.0705 33.2578C16.0017 33.2578 14.4376 33.6617 12.59 34.1515C10.7509 34.6328 9.22983 35.0281 9.22124 35.0195C9.20405 35.0109 9.61655 33.4812 10.1236 31.625L11.0517 28.239L10.6478 27.414C9.73687 25.5664 9.33296 23.8047 9.33296 21.6562C9.34155 17.9781 10.6392 14.8586 13.2345 12.289C15.2712 10.2695 17.8494 9.01481 20.84 8.55935C20.9861 8.54216 21.8541 8.53357 22.7736 8.55075C24.2001 8.57653 24.5869 8.61091 25.3517 8.79138Z" />
                    <path d="M21.5275 10.7594C17.3166 11.0602 13.4666 14.068 12.1174 18.1156C11.6877 19.4219 11.5674 20.1953 11.5674 21.6562C11.5674 23.882 11.9885 25.3687 13.2432 27.5516L13.4408 27.9125L12.908 29.8633C12.6158 30.9375 12.3838 31.8398 12.4096 31.857C12.4268 31.8742 13.3377 31.6508 14.4377 31.3672L16.44 30.8344L17.4799 31.3586C19.19 32.2094 20.6768 32.5703 22.5244 32.5703C27.1393 32.5703 31.3588 29.5281 32.8197 25.1281C33.258 23.7961 33.3697 23.1172 33.3697 21.6562C33.3697 20.6078 33.3268 20.1352 33.1807 19.4219C32.2439 15.0305 28.7893 11.6617 24.4064 10.8797C23.4697 10.7164 22.6018 10.682 21.5275 10.7594ZM18.9236 15.7523C19.1986 16.0617 20.3072 18.8031 20.2471 19.0352C20.2213 19.1383 19.9635 19.525 19.6799 19.9031C19.3963 20.2727 19.1643 20.6336 19.1643 20.7109C19.1643 20.8742 19.8518 21.8969 20.3846 22.5242C20.9604 23.2031 22.0518 24.0281 22.9713 24.5008C24.1314 25.0766 24.1916 25.0766 24.8533 24.2602C25.6783 23.2547 25.7557 23.1859 25.9791 23.2461C26.2369 23.3234 28.6947 24.475 28.9525 24.6383C29.1416 24.7586 29.1502 24.8102 29.1072 25.343C29.0814 25.6609 28.9955 26.082 28.9182 26.2797C28.7377 26.7266 28.0846 27.3281 27.4314 27.6461C26.976 27.8695 26.8643 27.8867 25.9103 27.8867C24.9564 27.8867 24.8189 27.8609 24.0627 27.5945C22.8166 27.1477 22.0432 26.7781 21.1064 26.1508C19.3018 24.9477 17.1619 22.5328 16.2854 20.7023C15.9072 19.9031 15.7869 19.3016 15.8299 18.3906C15.8729 17.5398 16.0877 16.9812 16.6549 16.2766C17.1189 15.7094 17.4283 15.5633 18.1588 15.5547C18.6658 15.5547 18.7689 15.5805 18.9236 15.7523Z" />
                    </svg>
                </a>
                <a class="telegram-link" href="#">
                  <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" />
                    <path d="M18.5021 25.6797L18.1673 30.5935C18.6463 30.5935 18.8537 30.3788 19.1025 30.121L21.3484 27.8814L26.002 31.4375C26.8555 31.9338 27.4568 31.6724 27.687 30.6182L30.7417 15.6829L30.7425 15.682C31.0132 14.3656 30.2862 13.8508 29.4547 14.1737L11.4997 21.3466C10.2743 21.8429 10.2929 22.5557 11.2914 22.8786L15.8818 24.3685L26.5443 17.4068C27.0461 17.0601 27.5023 17.2519 27.127 17.5987L18.5021 25.6797Z" fill="white"/>
                    </svg>
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
                      <a href="#callbackwidget" class="main-btn transparent-btn">
                        Оставить заявку
                      </a>
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
                      <a href="#callbackwidget" class="main-btn transparent-btn">
                        Оставить заявку
                      </a>
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
                      <a href="#callbackwidget" class="main-btn transparent-btn">
                        Оставить заявку
                      </a>
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
                      <a href="#callbackwidget" class="main-btn transparent-btn">
                        Оставить заявку
                      </a>
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
              <form action="<?php echo get_template_directory_uri() . '/form-handler.php' ?>" class="contact-form-name main-form" method="post" name="user-form-main">
                  <label class="form-input">
                    <span> Телефон </span>
                    <input required name="user-phone" placeholder="Введите номер телефона" type="tel" />
                  </label>
                  <label class="form-input">
                    <span> Комментарий </span>
                    <input name="quest" placeholder="Опишите Ваш запрос" type="text" />
                  </label>
                  <div class="checks">
                    <label>
                      <input name="need" value="Проектирование" type="checkbox" />
                      <span></span>
                      <p>Проектирование</p>
                    </label>
                    <label>
                      <input name="need" type="checkbox" />
                      <span></span>
                      <p>Обслуживание</p>
                    </label>
                    <label>
                      <input name="need" type="checkbox" />
                      <span></span>
                      <p>Монтаж</p>
                    </label>
                  </div>
                  <label class="file-add">
                    <p>Прикрепить файлы</p>
                    <input value="" name="user-files[]"  id="fileInput" type="file" multiple/>
                  </label>
                  <div class="filelist">
                  </div>
                  <div class="button">
                    <button type="submit" class="main-btn">Оставить заявку</button>
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
                <a href="#callbackwidget" class="main-btn transparent-btn">
                        Оставить заявку
                  </a>
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
      <div class="notice">
        
      </div>
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
              <form action="<?php get_template_directory_uri() . '/form-handler.php' ?>" method="post" name="formPopup" class="contact-form-name small-form">
                <label>
                  <input name="user-phone" placeholder="Введите номер телефона" type="tel" />
                  <span>Телефон</span>
                </label>
                <div class="action">
                  <button type="submit" class="main-btn">Заказать звонок</button>
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