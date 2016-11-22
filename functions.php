<?php
/**
 * bigo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigo
 */

if ( ! function_exists( 'bigo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bigo_setup() {

	/*Adds Slug in body class (for example 'about') added class will be page-about*/
	function add_slug_body_class( $classes ) {
 		global $post;
 		if ( isset( $post ) ) {
 		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bigo, use a find and replace
	 * to change 'bigo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bigo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bigo' ),
		'social' => esc_html__( 'Social', 'bigo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bigo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bigo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bigo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bigo_content_width', 640 );
}
add_action( 'after_setup_theme', 'bigo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bigo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bigo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bigo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bigo_widgets_init' );

add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Work Item' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'portfolio'),
      'supports' => array('thumbnail','title')
    )
  );
}
// add_action( 'init', 'config_post_type' );

// function config_post_type(){
// 	remove_post_type_support( 'post', 'editor' );
// }

/**
* Create Logo Setting and Upload Control
*/
function your_theme_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('company_description');
// Add a control to upload the logo
$wp_customize->add_control( 'company_description',
array(
'label' => 'Company Description',
'section' => 'title_tagline',
'settings' => 'company_description',
'type' => 'textarea'
)  );
}
add_action('customize_register', 'your_theme_new_customizer_settings');


function remove_menus(){
	// remove_menu_page( 'index.php' );                  //Dashboard
	remove_menu_page( 'edit.php' );                   //Posts
	// remove_menu_page( 'upload.php' );                 //Media
	// remove_menu_page( 'edit.php?post_type=page' );    //Pages
	// remove_menu_page( 'edit-comments.php' );          //Comments
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings
	//
}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Enqueue scripts and styles.
 */
function bigo_scripts() {
	wp_enqueue_style( 'bigo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bigo-google-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,600,700' );

	wp_enqueue_script( 'bigo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), '20151215', true );

	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/ac71f154fc.js', array(), '20151215', true );

	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/bower_components/waypoints/lib/jquery.waypoints.js', array(), '20151215', true );

	wp_enqueue_script( 'bigo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'bigo-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );	
}
add_action( 'wp_enqueue_scripts', 'bigo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



// // 1. customize ACF path
// add_filter('acf/settings/path', 'my_acf_settings_path');
 
// function my_acf_settings_path( $path ) {
 
//     // update path
//     $path = get_stylesheet_directory() . '/plugins/advanced-custom-fields/';
    
//     // return
//     return $path;
    
// }
 

// // 2. customize ACF dir
// add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
// function my_acf_settings_dir( $dir ) {
 
//     // update path
//     $dir = get_stylesheet_directory_uri() . '/plugins/advanced-custom-fields/';
    
//     // return
//     return $dir;
    
// }
 

// // 3. Hide ACF field group menu item
// // add_filter('acf/settings/show_admin', '__return_false');


// // 4. Include ACF
// include_once( get_stylesheet_directory() . '/plugins/advanced-custom-fields/acf.php' );

require_once(get_stylesheet_directory() . '/plugins/advanced-custom-fields/custom-fields-data.php');
require get_template_directory() .'/plugins/acf-repeater/acf-repeater.php';