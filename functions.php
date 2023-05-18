<?php

// подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
    $siteVer =  '1.0';
    wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/libs/swiper-bundle.min.css');
    wp_enqueue_style( 'envy-style', 'https://cdn.envybox.io/widget/cbk.css');
    wp_enqueue_style( 'fancy-css', get_template_directory_uri().'/assets/libs/fancy.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array('swiper-style' , 'fancy-css'), $siteVer );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.js', array(), '1', true );
    wp_enqueue_script( 'envy-js', 'https://cdn.envybox.io/widget/cbk.js?wcb_code=5e04613ad6d3b1214d48cfc63bdc25ef', array(), '1', true );
    wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/libs/fancybox.umd.js', array(), '1', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/scripts/app.js', array('swiper-js', 'fancybox-js'), $siteVer , true );
}

add_theme_support( 'menus' );