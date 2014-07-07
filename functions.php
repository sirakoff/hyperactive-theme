<?php
/**
 * hype functions and definitions
 *
 * @package hype
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'hype_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hype_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hype, use a find and replace
	 * to change 'hype' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hype', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hype' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'audio', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hype_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // hype_setup
add_action( 'after_setup_theme', 'hype_setup' );



/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hype_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'hype' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title block-title"><span>',
		'after_title'   => '</span></h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'hype' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title block-title"><span>',
		'after_title'   => '</span></h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'hype' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title block-title"><span>',
		'after_title'   => '</span></h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'hype' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title block-title"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'hype_widgets_init' );

/* Hype Search Form */
function hype_search_form( $form ) {
    $form = '<form role="search form" method="get" id="searchform" class="searchform clearfix" action="' . home_url( '/' ) . '" >
    <div class="clearfix form-group"><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <span class="icon"></span>
    <input type="text" placeholder="Type and hit enter" class="form-control" value="' . get_search_query() . '" name="s" id="s" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'hype_search_form' );

/**
 * Enqueue scripts and styles.
 */
function hype_scripts() {
	wp_enqueue_style( 'hype-style', get_stylesheet_uri() );

	wp_enqueue_style( 'hype-icons', get_template_directory_uri() . '/css/font-awesome.css' );
	
	wp_enqueue_style( 'boostrap-css', get_template_directory_uri().'/css/bootstrap.css' );

	wp_enqueue_style( 'swipebox-css', get_template_directory_uri().'/css/swipebox.css' );

	wp_enqueue_style( 'mediaelement-css', get_template_directory_uri().'/css/mediaelement/mediaelementplayer.css' );
	
	wp_enqueue_style( 'hype-nprogress', get_template_directory_uri() . '/css/nprogress.css' );

	wp_enqueue_style( 'hype-shadow-css', get_template_directory_uri() . '/css/jquery.shadow.css' );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'hype-shadow', get_template_directory_uri() . '/js/jquery.shadow.js', array(), '20140517', true );

	wp_enqueue_script( 'hype-enquire', get_template_directory_uri() . '/js/enquire.min.js', array(), '20140517', true );

	wp_enqueue_script( 'hype-resmenu', get_template_directory_uri() . '/js/jquery.resmenu.min.js', array(), '20140517', true );

	wp_enqueue_script('hype-vintage-js',get_template_directory_uri().'/js/jquery.vintage.js', array(), '20140518',true );
	
	wp_enqueue_script('hype-vintage-js',get_template_directory_uri().'/js/vintage.presets.js', array(), '20140518',true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.js',array(),'20140517',true );

	wp_enqueue_script('hype-timeago-js',get_template_directory_uri().'/js/jquery.timeago.js', array(), '20140518',true );

	wp_enqueue_script( 'hype-headhesive', get_template_directory_uri() . '/js/headhesive.js', array(), '20140517', true );

	wp_enqueue_script( 'hype-nprogress', get_template_directory_uri() . '/js/nprogress.js', array(), '20140517', true );

	wp_enqueue_script( 'hype-helpers', get_template_directory_uri() . '/js/helpers.js', array(), '20140517', true );

	wp_enqueue_script( 'hype-grid-mason', get_template_directory_uri() . '/js/jquery.masonry.min.js', array(), '20140517', true );
	
	wp_enqueue_script( 'hype-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hype-swipebox', get_template_directory_uri() . '/js/jquery.swipebox.js', array(), '20140527', true );

	wp_enqueue_script( 'hype-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hype_scripts' );
add_action( 'wp_enqueue_scripts', 'my_deregister_styles' );

function my_new_contactmethods( $contactmethods ) {
// Add Twitter
$contactmethods['twitter'] = 'Twitter';
//add Facebook
$contactmethods['facebook'] = 'Facebook';
//Add instagram
$contactmethods['instagram']= 'Instagram';

 
return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);


function my_deregister_styles() {
    wp_deregister_style( 'mediaelement' );
    wp_deregister_style( 'wp-mediaelement' );
}

add_theme_support( 'post-thumbnails' ); 

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
