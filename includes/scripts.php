<?php
function scripts_styles() {
    $ver = '1.04';
    $static_version = '1.01';

    // Loads our main stylesheet.
    wp_enqueue_style( 'nextweb-style', get_stylesheet_uri(), array(), $ver );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Squada+One&display=swap', array(), $static_version );
    wp_enqueue_style( 'animateCSS', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), $static_version );
    wp_enqueue_style( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css.map', array(), $static_version );
    // wp_enqueue_style( 'slick-slider-2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map', array(), $static_version );

    wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'jQuery_validate', get_template_directory_uri() . '/js/jquery.validate.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'viewportcheker', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js', array( 'jquery' ), $ver, true );
    
    wp_enqueue_script( 'slickSlider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), $ver, true );

    // wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/css/hamburgers.min.css', array(), $ver );
    // wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array( 'jquery' ), $static_version, true );
    // wp_localize_script( 'custom', 'variables', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'scripts_styles' );
