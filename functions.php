<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    $siteVer =  '1.0';
    wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/assets/libs/swiper-bundle.min.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array('swiper-style'), $siteVer );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.js', array(), '1', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/scipts/app.js', array('swiper-js'), $siteVer , true );
}