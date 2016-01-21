<?php
/**
 * Table Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Table_Theme
 */

//Placeholder text!

$lorem = "Hello, little man. I will destroy you! You are the last hope of the universe. It's a T. It goes 'tuh'. Then we'll go with that data file! We're also Santa Claus!";

$lorem_long = "WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Hey, what kinda party is this? There's no booze and only one hooker. Stop! Don't shoot fire stick in space canoe! Cause explosive decompression! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!
Moving along… No! Don't jump! We're also Santa Claus! I'm just glad my fat, ugly mama isn't alive to see this day. Soothe us with sweet lies.
Ah, the 'Breakfast Club' soundtrack! I can't wait til I'm old enough to feel ways about stuff! It's okay, Bender. I like cooking too. Yep, I remember. They came in last at the Olympics, then retired to promote alcoholic beverages!";

$lorem_short = "Can I use the gun? Bender, hurry! This fuel's expensive!";


$sections = [
    'splash',
    ];

//Theme setup

if ( ! function_exists( 'table_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function table_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Table Theme, use a find and replace
	 * to change 'table-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'table-theme', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails', array( 'post', 'sermon' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'table-theme' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'table_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // table_theme_setup
add_action( 'after_setup_theme', 'table_theme_setup' );

/*
 * 
 * Creates custom post types: Page Sections, Sermons and Events.
 * Defines upload/creation options and labels. * 
 * 
 */
function create_post_type() {
    
    $section_labels = array(
    'name'          => __( 'Page Sections' ),
    'singular_name' => __( 'Page Section' ),
    'add_new_item'  => __( 'Add new Page Section' )
  );
    
  $section_args = array(
    'labels'        => $section_labels,
    'public'        => true,
    'has_archive'   => false,
    'rewrite'       => array('slug' => 'sections'),
    'menu_position' => 9,
    'menu_icon'     => 'dashicons-editor-alignleft',
    'supports'      => [ 'title', 'editor']
  );
  
  register_post_type( 'section', $section_args );
    
    $sermon_labels = array(
    'name'          => __( 'Sermons' ),
    'singular_name' => __( 'Sermon' ),
    'add_new_item'  => __( 'Upload New Sermon' )
  );
    
  $sermon_args = array(
    'labels'        => $sermon_labels,
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug' => 'sermons'),
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-megaphone',
    'supports'      => [ 'title', 'editor', 'thumbnail', ]
  );

  register_post_type( 'sermon', $sermon_args );
    
  set_post_format( 'sermon' , 'audio' );

  
  $event_labels = array(
    'name'          => __( 'Events' ),
    'singular_name' => __( 'Event' ),
    'add_new_item'  => __( 'Add New Event' )
  );
  
  $event_args = array(
    'labels'        => $event_labels,
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array('slug' => 'events'),
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-location-alt',
    'supports'      => [ 'title', 'editor', 'thumbnail', ]
  );
  
    register_post_type( 'event', $event_args );
}
add_action( 'init', 'create_post_type' );

// do we need to register taxonomies?
//register_taxonomy( 'sermon', $object_type, $args );
//register_taxonomy_for_object_type( 'sermon', 'sermon' );
//register_taxonomy( 'events', $object_type, $args );

// Hiding "posts" functionality since we're using custom post types only.

function remove_menus(){
  
  remove_menu_page( 'edit.php' );                   //Posts  
  remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function table_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'table_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'table_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function table_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'table-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'table_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function table_theme_scripts() {
        wp_enqueue_style( 'bootstrap_css',  get_template_directory_uri() . '/bootstrap.min.css');
        
	wp_enqueue_style( 'table-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'table-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'table-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'table_theme_scripts' );

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
