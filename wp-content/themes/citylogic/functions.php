<?php
/**
 * CityLogic functions and definitions
 *
 * @package CityLogic
 */
define( 'CITYLOGIC_THEME_VERSION' , '1.0.08' );
define( 'CITYLOGIC_UPDATE_URL' , 'https://updates.outtheboxthemes.com' );

global $solidify_breakpoint, $mobile_menu_breakpoint;

// Setting this to true can be used to test how the Premium theme will look for someone that had the free version intalled beforehand
set_theme_mod( 'otb_citylogic_dot_org', true );

if ( ! function_exists( 'citylogic_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function citylogic_theme_setup() {
	
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 640; /* pixels */
	}
	
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic' );
	add_editor_style( $font_url );
	
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,400,300' );
	add_editor_style( $font_url );
	
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lora:400italic' );
	add_editor_style( $font_url );
	
	add_editor_style('editor-style.css');
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CityLogic, use a find and replace
	 * to change 'citylogic' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'citylogic', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'citylogic' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	/*
	 * Setup Custom Logo Support for theme
	* Supported from WordPress version 4.5 onwards
	* More Info: https://make.wordpress.org/core/2016/03/10/custom-logo/
	*/
	if ( function_exists( 'has_custom_logo' ) ) {
		add_theme_support( 'custom-logo' );
	}
	
	// The custom header is used if no slider is enabled
	add_theme_support( 'custom-header', array(
        'default-image' => get_template_directory_uri() . '/library/images/headers/default.jpg',
		'width'         => 1500,
		'height'        => 744,
		'flex-width'    => true,
		'flex-height'   => true,
		'header-text'   => false,
		'video' 		=> false,
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'citylogic_custom_background_args', array(
		'default-image' => '',
	) ) );
    
    add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	
	if ( get_theme_mod( 'citylogic-woocommerce-product-image-zoom', true ) ) {	
		add_theme_support( 'wc-product-gallery-zoom' );
	}	
	
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );	
}
endif; // citylogic_theme_setup
add_action( 'after_setup_theme', 'citylogic_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function citylogic_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'citylogic' ),
		'id'            => 'sidebar-1',
		'description'   => 'This sidebar will appear on the Blog or any page that uses either the Default or Left Primary Sidebar template.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );
	
	register_sidebar(array(
		'name' => __( 'Footer', 'citylogic' ),
		'id' => 'footer',
        'description'   => '',
        'before_widget' => '<div class="widget">',
    	'after_widget' => '</div><div class="divider"></div>' 
	));
	
	register_sidebar(array(
		'name' => __( 'Footer Bottom Bar - Right', 'citylogic' ),
		'id' => 'footer-bottom-bar-right',
        'description'   => '',
        'before_widget' => '<div class="widget">',
    	'after_widget' => '</div>' 
	));
}
add_action( 'widgets_init', 'citylogic_widgets_init' );

function citylogic_set_variables() {
	global $solidify_breakpoint, $mobile_menu_breakpoint;
	
	if ( wp_is_mobile() ) {
		$mobile_menu_breakpoint = 10000000;
		$solidify_breakpoint = 10000000;
	} else {
		$mobile_menu_breakpoint = 960;
		$solidify_breakpoint = 960;
	}
}
add_action('init', 'citylogic_set_variables', 10);

/**
 * Enqueue scripts and styles.
 */
function citylogic_theme_scripts() {
	global $solidify_breakpoint;
	
	wp_enqueue_style( 'citylogic-site-title-font-default', '//fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700,800', array(), CITYLOGIC_THEME_VERSION );
    wp_enqueue_style( 'citylogic-body-font-default', '//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic', array(), CITYLOGIC_THEME_VERSION );
    wp_enqueue_style( 'citylogic-blockquote-quote-font', '//fonts.googleapis.com/css?family=Lora:400italic', array(), CITYLOGIC_THEME_VERSION );
    wp_enqueue_style( 'citylogic-heading-font-default', '//fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800', array(), CITYLOGIC_THEME_VERSION );
	wp_enqueue_style( 'citylogic-header-left-aligned', get_template_directory_uri().'/library/css/header-left-aligned.css', array(), CITYLOGIC_THEME_VERSION );
    
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/library/fonts/font-awesome/css/font-awesome.css', array(), '4.7.0' );
	wp_enqueue_style( 'citylogic-style', get_stylesheet_uri(), array(), CITYLOGIC_THEME_VERSION );
	
	if ( citylogic_is_woocommerce_activated() ) {
    	wp_enqueue_style( 'citylogic-woocommerce-custom', get_template_directory_uri().'/library/css/woocommerce-custom.css', array(), CITYLOGIC_THEME_VERSION );
	}

	wp_enqueue_script( 'citylogic-navigation-js', get_template_directory_uri() . '/library/js/navigation.js', array(), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_script( 'caroufredsel-js', get_template_directory_uri() . '/library/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_script( 'citylogic-touchswipe-js', get_template_directory_uri() . '/library/js/jquery.touchSwipe.min.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_script( 'citylogic-color-js', get_template_directory_uri() . '/library/js/jquery.color.min.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_script( 'citylogic-fittext-js', get_template_directory_uri() . '/library/js/jquery.fittext.min.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_script( 'citylogic-fitbutton-js', get_template_directory_uri() . '/library/js/jquery.fitbutton.min.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_script( 'citylogic-custom-js', get_template_directory_uri() . '/library/js/custom.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	
    $citylogic_client_side_variables = array(
    	'site_url' => site_url(),
    	'page_on_front' => get_post( get_option( 'page_on_front' ) )->post_name,
    	'solidify_breakpoint' => $solidify_breakpoint
    );
    
    wp_localize_script( 'citylogic-custom-js', 'citylogic', $citylogic_client_side_variables );

	wp_enqueue_script( 'citylogic-skip-link-focus-fix-js', get_template_directory_uri() . '/library/js/skip-link-focus-fix.js', array(), CITYLOGIC_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'citylogic_theme_scripts' );

// Recommended plugins installer
require_once get_template_directory() . '/library/includes/class-tgm-plugin-activation.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/library/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/library/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/library/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/library/includes/jetpack.php';

// Helper library for the theme customizer.
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';

// Define options for the theme customizer.
require get_template_directory() . '/customizer/customizer-options.php';

// Output inline styles based on theme customizer selections.
require get_template_directory() . '/customizer/styles.php';

// Additional filters and actions based on theme customizer selections.
require get_template_directory() . '/customizer/mods.php';

// Include TRT Customize Pro library
require_once( get_template_directory() . '/trt-customize-pro/class-customize.php' );

/**
 * Premium Upgrade Page
 */
include get_template_directory() . '/upgrade/upgrade.php';

/**
 * Enqueue CityLogic custom customizer styling.
 */
function citylogic_load_customizer_script() {
	wp_enqueue_script( 'citylogic-customizer-custom-js', get_template_directory_uri() . '/customizer/customizer-library/js/customizer-custom.js', array('jquery'), CITYLOGIC_THEME_VERSION, true );
	wp_enqueue_style( 'citylogic-customizer', get_template_directory_uri() . '/customizer/customizer-library/css/customizer.css', array(), CITYLOGIC_THEME_VERSION );
}
add_action( 'customize_controls_enqueue_scripts', 'citylogic_load_customizer_script' );

if ( ! function_exists( 'citylogic_load_dynamic_css' ) ) :

	/**
	 * Add Dynamic CSS
	 */
	function citylogic_load_dynamic_css() {
		global $solidify_breakpoint, $mobile_menu_breakpoint;
		
		$citylogic_slider_has_min_width 	   = get_theme_mod( 'citylogic-slider-has-min-width', customizer_library_get_default( 'citylogic-slider-has-min-width' ) );
		$citylogic_slider_min_width 		   = floatVal( get_theme_mod( 'citylogic-slider-min-width', customizer_library_get_default( 'citylogic-slider-min-width' ) ) );
		$citylogic_header_image_has_min_width = get_theme_mod( 'citylogic-header-image-has-min-width', customizer_library_get_default( 'citylogic-header-image-has-min-width' ) );
		$citylogic_header_image_min_width 	   = floatVal( get_theme_mod( 'citylogic-header-image-min-width', customizer_library_get_default( 'citylogic-header-image-min-width' ) ) );
		
		require get_template_directory() . '/library/includes/dynamic-css.php';
	}
endif;
add_action( 'wp_head', 'citylogic_load_dynamic_css' );

// Function to check that it's not a single post or the category, tag or author page
if ( ! function_exists( 'citylogic_not_secondary_blog_page' ) ) :
	function citylogic_not_secondary_blog_page() {
		return ( !is_single() && !is_category() && !is_tag() && !is_author() );
	}
endif;

// Create function to check if WooCommerce exists.
if ( ! function_exists( 'citylogic_is_woocommerce_activated' ) ) :
	function citylogic_is_woocommerce_activated() {
	    if ( class_exists( 'woocommerce' ) ) {
	    	return true;
		} else {
			return false;
		}
	}
endif; // citylogic_is_woocommerce_activated

if ( citylogic_is_woocommerce_activated() ) {
    require get_template_directory() . '/library/includes/woocommerce-inc.php';
}

// Add CSS class to body by filter
function citylogic_add_body_class( $classes ) {
	if( wp_is_mobile() ) {
		$classes[] = 'mobile-device';
	}
		
	if ( get_theme_mod( 'citylogic-layout-woocommerce-shop-full-width', customizer_library_get_default( 'citylogic-layout-woocommerce-shop-full-width' ) ) ) {
		$classes[] = 'citylogic-shop-full-width';
	}
	
	if ( !get_theme_mod( 'citylogic-woocommerce-breadcrumbs', customizer_library_get_default( 'citylogic-woocommerce-breadcrumbs' ) ) ) {
		$classes[] = 'citylogic-shop-no-breadcrumbs';
	}
	
	if ( citylogic_is_woocommerce_activated() && is_woocommerce() ) {
		$is_woocommerce = true;
	} else {
		$is_woocommerce = false;
	}

	return $classes;
}
add_filter( 'body_class', 'citylogic_add_body_class' );

// Set the number or products per row
if (!function_exists('citylogic_loop_shop_columns')) {

	function citylogic_loop_shop_columns() {
		$is_front_page = is_front_page();
		
		if ( ($is_front_page && get_theme_mod( 'citylogic-layout-mode', customizer_library_get_default( 'citylogic-layout-mode' ) ) == 'citylogic-layout-mode-one-page') || get_theme_mod( 'citylogic-layout-woocommerce-shop-full-width', customizer_library_get_default( 'citylogic-layout-woocommerce-shop-full-width' ) ) || ! is_active_sidebar( 'shop-sidebar' ) ) {
			return 4;
		} else {
			return 3;
		}
	}

}
add_filter( 'loop_shop_columns', 'citylogic_loop_shop_columns' );

if (!function_exists('citylogic_woocommerce_product_thumbnails_columns')) {
	function citylogic_woocommerce_product_thumbnails_columns() {
		return 3;
	}
}
add_filter ( 'woocommerce_product_thumbnails_columns', 'citylogic_woocommerce_product_thumbnails_columns' );

// Set the blog excerpt length
function citylogic_excerpt_length( $length ) {
	return get_theme_mod( 'citylogic-blog-excerpt-length', customizer_library_get_default( 'citylogic-blog-excerpt-length' ) );
}
add_filter( 'excerpt_length', 'citylogic_excerpt_length', 999 );

// Set the blog excerpt read more text
function citylogic_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . wp_kses_post( get_theme_mod( 'citylogic-blog-read-more-text', customizer_library_get_default( 'citylogic-blog-read-more-text' ) ) ) . '</a>';
}
add_filter( 'excerpt_more', 'citylogic_excerpt_more' );

/**
 * Adjust is_home query if citylogic-slider-categories is set
 */
function citylogic_set_blog_queries( $query ) {
    
    $slider_categories = get_theme_mod( 'citylogic-slider-categories' );
    $slider_type = get_theme_mod( 'citylogic-slider-type', customizer_library_get_default( 'citylogic-slider-type' ) );
    
    if ( $slider_categories && $slider_type == 'citylogic-slider-default' ) {
    	
    	$is_front_page = ( $query->get('page_id') == get_option('page_on_front') || is_front_page() );
    	
    	if ( count($slider_categories) > 0) {
    		// do not alter the query on wp-admin pages and only alter it if it's the main query
    		if ( !is_admin() && !$is_front_page  && $query->get('id') != 'slider' || !is_admin() && $is_front_page && $query->get('id') != 'slider' ){
				$query->set( 'category__not_in', $slider_categories );
    		}
    	}
    }
	    
}
add_action( 'pre_get_posts', 'citylogic_set_blog_queries' );

function citylogic_filter_recent_posts_widget_parameters( $params ) {

	$slider_categories = get_theme_mod( 'citylogic-slider-categories' );
    $slider_type = get_theme_mod( 'citylogic-slider-type', customizer_library_get_default( 'citylogic-slider-type' ) );
	
	if ( $slider_categories && $slider_type == 'citylogic-slider-default' ) {
		if ( count($slider_categories) > 0) {
			// do not alter the query on wp-admin pages and only alter it if it's the main query
			$params['category__not_in'] = $slider_categories;
		}
	}
	
	return $params;
}
add_filter( 'widget_posts_args', 'citylogic_filter_recent_posts_widget_parameters' );

/**
 * Adjust the widget categories query if citylogic-slider-categories is set
 */
function citylogic_set_widget_categories_args($args){
	$slider_categories = get_theme_mod( 'citylogic-slider-categories' );
    $slider_type = get_theme_mod( 'citylogic-slider-type', customizer_library_get_default( 'citylogic-slider-type' ) );
	
	if ( $slider_categories && $slider_type == 'citylogic-slider-default' ) {
		if ( count($slider_categories) > 0) {
			$exclude = implode(',', $slider_categories);
			$args['exclude'] = $exclude;
		}
	}
	
	return $args;
}
add_filter( 'widget_categories_args', 'citylogic_set_widget_categories_args' );

function citylogic_set_widget_categories_dropdown_arg($args){
	$slider_categories = get_theme_mod( 'citylogic-slider-categories' );
    $slider_type = get_theme_mod( 'citylogic-slider-type', customizer_library_get_default( 'citylogic-slider-type' ) );
	
	if ( $slider_categories && $slider_type == 'citylogic-slider-default' ) {
		if ( count($slider_categories) > 0) {
			$exclude = implode(',', $slider_categories);
			$args['exclude'] = $exclude;
		}
	}
	
	return $args;
}
add_filter( 'widget_categories_dropdown_args', 'citylogic_set_widget_categories_dropdown_arg' );

function citylogic_add_menu_items( $items, $args ) {
	
    if ( $args->theme_location == 'primary' ) {

		if( get_theme_mod( 'citylogic-navigation-menu-search-button', customizer_library_get_default( 'citylogic-navigation-menu-search-button' ) ) ) :
			$items .= '<li class="search-button">';
	        $items .= '<a href="">Search<i class="fa fa-search search-btn"></i></a>';
	        $items .= '</li>';
		endif;

    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'citylogic_add_menu_items', 10, 2 );

function citylogic_allowed_tags() {
	global $allowedtags;
	$allowedtags["h1"] = array();
	$allowedtags["h2"] = array();
	$allowedtags["h3"] = array();
	$allowedtags["h4"] = array();
	$allowedtags["h5"] = array();
	$allowedtags["h6"] = array();
	$allowedtags["p"] = array();
	$allowedtags["br"] = array();
	$allowedtags["a"] = array(
		'href' => true,
		'class' => true,
	);
}
add_action('init', 'citylogic_allowed_tags', 10);

// Set the size of the Blog Featured Image
function citylogic_set_blog_featured_image_sizes() {
	add_image_size( 'citylogic_blog_img_side', 352, 230, true );
}

add_action('init', 'citylogic_set_blog_featured_image_sizes', 10);

function citylogic_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Page Builder by SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => false
		),
		array(
			'name'      => 'SiteOrigin Widgets Bundle',
			'slug'      => 'so-widgets-bundle',
			'required'  => false
		),
		array(
			'name'      => 'Black Studio TinyMCE Widget',
			'slug'      => 'black-studio-tinymce-widget',
			'required'  => false
		),
		array(
			'name'      => 'Recent Posts Widget Extended',
			'slug'      => 'recent-posts-widget-extended',
			'required'  => false
		),
		array(
			'name'      => 'SiteOrigin CSS',
			'slug'      => 'so-css',
			'required'  => false
		),
		array(
			'name'      => 'Meta Slider',
			'slug'      => 'ml-slider',
			'required'  => false
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false
		),
		array(
			'name'      => 'Photo Gallery by Supsystic',
			'slug'      => 'gallery-by-supsystic',
			'required'  => false
		),
		array(
			'name'      => 'Recent Posts Widget Extended',
			'slug'      => 'recent-posts-widget-extended',
			'required'  => false
		),
		array(
			'name'      => 'MailChimp for WordPress',
			'slug'      => 'mailchimp-for-wp',
			'required'  => false
		),
		array(
			'name'      => 'Instagram Slider Widget',
			'slug'      => 'instagram-slider-widget',
			'required'  => false
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false
		),
		array(
			'name'      => 'Anti-Spam',
			'slug'      => 'anti-spam',
			'required'  => false
		),
		array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
			'required'  => false
		)
	);

	$config = array(
		'id'           => 'citylogic',            // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => ''                       // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'citylogic_register_required_plugins' );
