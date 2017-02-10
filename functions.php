<?php
/**
 * tcaster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tcaster
 */

if ( ! function_exists( 'tcaster_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tcaster_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tcaster, use a find and replace
	 * to change 'tcaster' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tcaster', get_template_directory() . '/languages' );

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

	add_image_size( 'imagen-post', 1280, 500, true );
	add_image_size( 'imagen-post-secundarios', 500, 500, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'principal' => esc_html__( 'principal', 'tcaster' ),
		
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
	add_theme_support( 'custom-background', apply_filters( 'tcaster_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Adicionar el soporte al tema para el logo
	add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 100,
	'flex-height' => false,
	'flex-width'  => false,
	'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'tcaster_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tcaster_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tcaster_content_width', 640 );
}
add_action( 'after_setup_theme', 'tcaster_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tcaster_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tcaster' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tcaster' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tcaster_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function tcaster_scripts() {
	wp_enqueue_style( 'tcaster-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Quicksand:400,700', false );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false, 'all' );
	wp_enqueue_script( 'tcaster-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tcaster_scripts' );




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


// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');


function enlaces_redes_sociales($wp_customize){

	$wp_customize->add_section('enlaces_redes_sociales', array(
        'title'    => __('Enlaces Redes Sociales', 'tcaster'),
        'description' => 'Diferentes enlaces a redes sociales',
        'priority' => 30,
    ));

 	// WP THEME CUSTOMIZER: COLORS
	$redes = array();
	$redes[] = array(
	    'slug'=>'twitter', 
	    'default' => '',
	    'description' => 'No incluyas el http://twitter.com/ ',
	    'label' => ('Usuario de Twitter'),
	    'type' => 'text',
	   );
	$redes[] = array(
	    'slug'=>'facebook', 
	    'default' => '',
	    'description' => 'No incluyas el http://facebook.com/ ',
	    'label' => ('Enlace de Facebook')
	);
	$redes[] = array(
	    'slug'=>'instragram', 
	    'default' => '',
	    'description' => 'No incluyas el http://instagram.com/ ',
	    'label' => ('Enlace de Instagram')
	);
	$redes[] = array(
	    'slug'=>'rss', 
	    'default' => '',
	    'description' => 'Incluye la direcci&oacute;n completa de tu feed',
	    'label' => ('Enlace de Feed')
	);

foreach( $redes as $red ) {
    // SETTINGS
	
    $wp_customize->add_setting(
        $red['slug'], array(
            'default' => $red['default'],
            'capability' => 
            'edit_theme_options',
            'sanitize_callback' => 'cs_sanitize_clean',
        )
    );

    // CONTROLS
    $wp_customize->add_control(
            $red['slug'], 
            array('label' => $red['label'], 
            'section' => 'enlaces_redes_sociales',
            'settings' => $red['slug'],
            'description' => $red['description']
            
            )
        
    );
}

}

add_action( 'customize_register', 'enlaces_redes_sociales' );


