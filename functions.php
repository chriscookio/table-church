<?php
/**
 * Table Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Table_Theme
 * 
 *  TABLE OF CONTENTS
 * 
 * 1) Placeholder text   
 * 2) Theme Setup
 * 3) Custom Post Types
 * 4) Remove Menus (?)
 * 5) Setting content width (?)
 * 6) Widgets
 * 7) Scripts
 * 8) Custom menus
 * 
 */

//
//   1)   sPlaceholder and static text
//

$lorem = "Hello, little man. I will destroy you! You are the last hope of the universe. It's a T. It goes 'tuh'. Then we'll go with that data file! We're also Santa Claus!";

$lorem_long = "WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Hey, what kinda party is this? There's no booze and only one hooker. Stop! Don't shoot fire stick in space canoe! Cause explosive decompression! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!
Moving along… No! Don't jump! We're also Santa Claus! I'm just glad my fat, ugly mama isn't alive to see this day. Soothe us with sweet lies.
Ah, the 'Breakfast Club' soundtrack! I can't wait til I'm old enough to feel ways about stuff! It's okay, Bender. I like cooking too. Yep, I remember. They came in last at the Olympics, then retired to promote alcoholic beverages!";

$lorem_short = "Can I use the gun? Bender, hurry! This fuel's expensive!";

$beliefs =
        "
We are created as relational beings, made from love for love. The truest thing about us is that we are a beloved child of God.<br><br>
Jesus reveals God to us. When we want to know what God looks like – we look at Jesus. In Jesus we discover a God who is merciful, kind, other seeking, and most profoundly love.<br><br>
Jesus provides the story through which we make sense of our life and discover the dreams of God for humanity. In him we discover our purpose, significance and ultimate vision of the good life.<br><br>
Through the resurrection, God’s beautiful world of love, joy, peace, kindness, goodness and justice breaks into our world of brokenness. On the cross, the powers of death, loneliness, greed, and self-interest have their final say and they have been defeated-- their time is coming to an end.<br><br>
Becoming a follower of Jesus isn’t a contract we sign or believing all the right things, but instead it’s a leap faith that leads to obedience.<br><br>
As followers of Jesus we are called into a new community, which puts God on display to the world. Our life together through the power of the Spirit leads to the renewal and healing of our lives, our neighborhood and our world.<br><br>
In our life together, each of us are called to share our gifts in service to God and the world. We only fully discover our purpose in the world through community.<br><br>
We are never afraid to face the Bible and difficult questions with a critical eye. We are not a people of the book, but instead a people of an event – Christ life, death and resurrection.<br><br>
To follow the path of Jesus is countercultural. It’s a radical movement of limitless forgiveness, extreme hospitality, peacemaking, abundant generosity and sacrificial love.<br><br>
God doesn’t cause suffering, but redeems it. And calls us to join in the work of renewing and reconciling and redeeming all things. <br><br>
As a community of Jesus followers, we follow a Jesus who shared an open table with all who sought him. That’s why we welcome everyone to share their gifts.<br><br>
The future is open and full of possibilities. We must embrace the awesome role we are invited to play in seeing God’s dreams fulfilled.";

$sections = [
    'splash',
    ];


$front_who = 
        ' 
        <H1>Who we are</H1>
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <h3>LOVE THY NEIGHBORHOOD - Jesus</h3>
                <p>The Table exists to call people to become authentic and thoughtful followers of Jesus and join God in the renewal of all things.</p>
            </div>
        </div>
        ';

$front_values =
        '                        
    <H2>Values</H2>
        <div class="row">
            <ul class="col-md-8 col-md-offset-4">
                <li>Simple:  To provide simple environments for people to experience God’s grace and pursue justice.</li>
                <li>Hospitality: To exist for others, continually seeking to invite, share, welcome, and shape our community for those who have not yet become a part of it.</li>
                <li>Intention Development: To challenge followers of Jesus to fulfill their purpose by intentionally developing leaders and equipping disciples.</li>
                <li>Generosity: To freely give of the gifts God has entrusted us with. We believe that God calls us to be generous with our time, money and resources in service to God’s mission in the world.</li>
                <li>Strategic Service: To thoughtfully engage in acts of justice and mercy in our community, working to seek good for all. We do this most effectively through partnerships.</li>
            </ul>
        </div>
';

$front_beliefs =
        ' 
        <H2>Beliefs</H2>
        <div class="row">
            <div class="col-md-9 col-md-offset-3">
                ' . $beliefs . '  
            </div>
        ';

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
	add_theme_support( 'post-thumbnails', array( 'post', 'sermon', 'leader' ) );

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
 * Creates custom post types: Sermons and Leaders.
 * Defines upload/creation options and labels. 
 * 
 */
function create_post_type() {
    
    
//    SECTIONS - commented out for now / Phase 2.
    
    
//    $section_labels = array(
//    'name'          => __( 'Page Sections' ),
//    'singular_name' => __( 'Page Section' ),
//    'add_new_item'  => __( 'Add new Page Section' )
//  );
//    
//  $section_args = array(
//    'labels'        => $section_labels,
//    'public'        => true,
//    'has_archive'   => false,
//    'rewrite'       => array('slug' => 'sections'),
//    'menu_position' => 9,
//    'menu_icon'     => 'dashicons-editor-alignleft',
//    'supports'      => [ 'title', 'editor']
//  );
//  
//  register_post_type( 'section', $section_args );
    
  
//  SERMONS 
  
  
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
  
  
//    LEADERS
    
    
    $leader_labels = array(
    'name'          => __( 'Leaders' ),
    'singular_name' => __( 'Leader' ),
    'add_new_item'  => __( 'Add New Leader' )
    );
    
    $leader_args = array(
    'labels'        => $leader_labels,
    'public'        => true,
    'has_archive'   => false,
    'rewrite'       => array('slug' => 'leaders'),
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-flag',
    'supports'      => [ 'title', 'editor', 'thumbnail', ]
  );

  register_post_type( 'leader', $leader_args );
  
  set_post_format( 'leader' , 'audio' );

      
}
add_action( 'init', 'create_post_type' );

// TBD: do we need to register taxonomies?
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
        wp_enqueue_style( 'bootstrap_css',  get_template_directory_uri() . '/bootstrap.css');
        
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

/**
 * Register Custom Navigation Walker for Bootstrap 3
 */
require_once('wp_bootstrap_navwalker.php');

/**
 * Enqueue Dashicons style for frontend use when enqueuing your theme's style sheet
 */
function mytheme_scripts() {
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), 'dashicons' );
}
