<?php

// подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
    $siteVer =  '1.0';
    wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/libs/swiper-bundle.min.css');
    wp_enqueue_style( 'fancy-css', get_template_directory_uri().'/assets/libs/fancy.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array('swiper-style' , 'fancy-css'), $siteVer );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.js', array(), '1', true );
    wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/libs/fancybox.umd.js', array(), '1', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/scripts/app.js', array('swiper-js', 'fancybox-js'), $siteVer , true );
}d

add_theme_support( 'menus' );