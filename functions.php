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
	add_image_size( 'news_inner-page_image', 652, 500, false );
    add_image_size( 'about-us_image', 1364, 507, false );
    
	add_image_size( 'product_image', 322, 275, true );
	add_image_size( 'product_page_image', 250, 215, true );
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
function get_all_products_url(){
    $page_var = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-product_list.php'
    ));
    return get_permalink($page_var[0]->ID);
}

function get_all_news_url(){
    $page_var = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-news.php'
    ));
    return get_permalink($page_var[0]->ID);
}

// Create ACF options page
if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Header contacts' );
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

//Search product function
function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'products' )   
  {
    return locate_template('archive-search.php');  
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');


// Contacts form
add_action('wp_ajax_send_contact_form_message',        'send_contact_form_message');
add_action('wp_ajax_nopriv_send_contact_form_message', 'send_contact_form_message');
function send_contact_form_message(){
    $to = 'andrej@nextweb.lt';


    print_r($_POST);
    // die();


    

    $message ='
        Name: '.$_POST['name'].'<br />
        Subject: '.$_POST['subject'].'<br />
        Number: '.$_POST['number'].'<br />
        Email: '.$_POST['email'].'<br />
        Message: '.$_POST['massage'].'<br />
        ';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From:  - Metbela <andrej_polujanskij@icloud.com>',
        'Reply-To: '.$firstName.' '.$lastName.' <'.$email.'>'
    );

    $subject = 'Kontaktu forma';

    wp_mail($to, $subject, $message, $headers);
    die();
}