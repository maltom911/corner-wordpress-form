<?php

function wpb_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() .'/css/font-awesome.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() .'/css/custom.css');

}

add_action('wp_enqueue_scripts', 'wpb_theme_styles');


function wpb_theme_js() {
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('main_js', get_template_directory_uri() .'/js/main.js', '', '', false);  
}

add_action('wp_enqueue_scripts', 'wpb_theme_js');

/*Function removing 32px important on html*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
/* Images path */
if( !defined('THEME_IMG_PATH')){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img' );
}


/****************************************** REJESTRUJ CUSTOM POST ***********************************************************************************************************************************************************/
// TYP PRODUKTÓW
function register_product_type_post() {
    $labels = array(
     'name'                  => _x( 'Typy produktów', '', 'fresh' ),
     'singular_name'         => _x( 'Typy produktów', '', 'fresh' ),
     'menu_name'             => _x( 'Typy produktów', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Typy produktów', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowe', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowe', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'product_type' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'product_type', $args );
}

add_action( 'init', 'register_product_type_post' );

// KONTAKT

function register_contact_post() {
    $labels = array(
     'name'                  => _x( 'Kontakt dane', '', 'fresh' ),
     'singular_name'         => _x( 'Kontakt dane', '', 'fresh' ),
     'menu_name'             => _x( 'Kontakt dane', '', 'fresh' ),
     'name_admin_bar'        => _x( 'Kontakt dane', '', 'fresh' ),
     'add_new'               => __( 'Dodaj nowe', 'fresh' ),
     'add_new_item'          => __( 'Dodaj nowe', 'fresh' ),
     'new_item'              => __( 'Nowa', 'fresh' ),
     'edit_item'             => __( 'Edytuj', 'fresh' ),
     'view_item'             => __( 'Zobacz', 'fresh' ),
     'all_items'             => __( 'Wszystkie', 'fresh' ),
     'search_items'          => __( 'Wyszukaj', 'fresh' ),
     'parent_item_colon'     => __( 'Nadrzędne:', 'fresh' ),
     'not_found'             => __( 'Nie znaleziono.', 'fresh' ),
     'not_found_in_trash'    => __( 'Nie znaleziono w koszu.', 'fresh' ),
     'featured_image'        => _x( 'Zdjęcie', '', 'fresh' ),
     'set_featured_image'    => _x( 'Ustaw zdjęcie', '', 'fresh' ),
     'remove_featured_image' => _x( 'Usuń zdjęcie', '', 'fresh' ),
     'use_featured_image'    => _x( 'Użyj jako okładkę', '', 'fresh' ),
     'archives'              => _x( 'Archiwa', '', 'fresh' ),
     'insert_into_item'      => _x( 'Dodaj do', '', 'fresh' ),
     'uploaded_to_this_item' => _x( 'Załadowano do wpisu', '', 'fresh' ),
     'filter_items_list'     => _x( 'Filtruj', '', 'fresh' ),
     'items_list_navigation' => _x( 'Nawigacja listy', '', 'fresh' ),
     'items_list'            => _x( 'Lista', '', 'fresh' ),
 );

    $args = array(
     'labels'             => $labels,
     'public'             => true,
     'publicly_queryable' => true,
     'show_ui'            => true,
     'show_in_menu'       => true,
     'query_var'          => true,
     'rewrite'            => array( 'slug' => 'contact' ),
     'capability_type'    => 'post',
     'has_archive'        => true,
     'hierarchical'       => false,
     'menu_position'      => null,
     'supports'           => array( 'title', 'editor' ),
     'menu_icon'			 => 'dashicons-screenoptions'
 );

    register_post_type( 'contact', $args );
}

add_action( 'init', 'register_contact_post' );






