<?php

if(!function_exists('designhub_setup')):
    function designhub_setup(){
        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        add_theme_support( 'menus' );
    }

endif;
add_action( 'after_setup_theme', 'designhub_setup' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce');

   add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_filter( 'woocommerce_show_page_title', '__return_false' );
}

function designhub_widgets_init() {
	
    
    if ( function_exists('register_sidebar') )
        register_sidebar(array(
            'name' => __('Sidebar', 'designhub'),
            'id'   => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'designhub' ),
            'before_widget' => '<aside class = "sidebar">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );

}
add_action( 'widgets_init', 'designhub_widgets_init' );

function register_my_menu() {
    register_nav_menu('primary-menu',__( 'Primary Menu' ));
    register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
}
add_action( 'init', 'register_my_menu' );

function designhub_scripts() {
    wp_enqueue_style('designhub_style', get_stylesheet_uri());

    wp_enqueue_script('designhub_script', get_template_directory_uri() . '/js/index.js');
}
add_action('wp_enqueue_scripts', 'designhub_scripts');

?>