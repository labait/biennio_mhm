<?php
/**
 * understrap enqueue scripts
 *
 * @package understrap
 */

function understrap_scripts() {

    /* codyhouse style and scripts */
    wp_enqueue_script( 'codyhouse-menu-scripts', get_template_directory_uri() . '/js/codyhouse_menu.js', array(), '0.3.8', true );
    wp_enqueue_style( 'codyhouse-menu-styles', get_stylesheet_directory_uri() . '/css/codyhouse_menu.css', array(), '0.3.8');

    //wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.3.8');
    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), '0.3.8');
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.3.8', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    /* codyhouse style and scripts */
    wp_enqueue_script( 'codyhouse-menu-scripts', get_template_directory_uri() . '/js/codyhouse_menu.js', array(), '0.3.8', true );
    wp_enqueue_style( 'codyhouse-menu-styles', get_stylesheet_directory_uri() . '/css/codyhouse_menu.css', array(), '0.3.8');

}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


// Removing the fuc!?$% emoji´s
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
