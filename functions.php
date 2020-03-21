<?php
// enquee scripts and styles
include('includes/scripts.php');
include('includes/disable_comments.php');

// create post types and taxonomies if needed
include('includes/post_types.php');

function mycustomfunc_remove_css_section( $wp_customize ) {
    $wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'mycustomfunc_remove_css_section', 15 );


// add post thumbnails with sizes
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'category_image', 324, 403, false );
	add_image_size( 'news_image', 431, 260, false );
	add_image_size( 'product_image', 322, 275, true );
}

// custom function for returning excerpt from post
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

// get image url from attachment id
function get_correct_image_link_thumb($thumb_id='', $size='large'){

    if ($thumb_id != '') {
        $imagepermalink = wp_get_attachment_image_src($thumb_id, $size, true);
    } else {
        $imagepermalink[0] =  get_stylesheet_directory_uri() . '/images/cover.jpg';
    }
    return $imagepermalink[0];
}

// disable admin bar if needed
show_admin_bar(false);

// get url by page template
function page_url_get(){
    $page_var = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-allstories.php'
    ));
    return get_permalink($page_var[0]->ID);
}

// Create ACF options page
if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Temos nustatymai' );
}

// Create wordpress menu locations
function register_theme_menus() {
    register_nav_menus(array(
        'pagrindinis-menu' => __( 'Pagrindinis meniu' ),
        'apatinis-menu' => __( 'Apatinis meniu' ),
    ));
}
add_action( 'init', 'register_theme_menus' );

// ajax function
/*
add_action('wp_ajax_filter_data',        'filter_data');
add_action('wp_ajax_nopriv_filter_data', 'filter_data');
function filter_data(){

    die();
}
*/
