<?php
/**
 * Shape functions and definitions
 *
 * @package ANutricional
 * @since ANutricional 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since ANutricional 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

/*-Excerpts-*/
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
    remove_filter( 'the_excerpt', 'wpautop' );
}

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id' => 'primary',
            'name' => __( 'Primary' ),
            'description' => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}


/*Widgets*/


/*Thumbnails
    */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-thumb', 300, 200, true);

if ( ! function_exists( 'shape_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Shape 1.0
 */
function shape_setup() {
 
    /**
     * Custom template tags for this theme.
     
    require( get_template_directory() . '/inc/template-tags.php' );*/
 
    /**
     * Custom functions that act independently of the theme templates
     
    require( get_template_directory() . '/inc/tweaks.php' );*/
 
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on Shape, use a find and replace
     * to change 'shape' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'shape', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );
 
    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'shape' ),
    ) );
}
endif; // shape_setup
add_action( 'after_setup_theme', 'shape_setup' );

/**
 * Enqueue scripts and styles
 */ 

function shape_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/menu.css');
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
 
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
 
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'shape_scripts' );

