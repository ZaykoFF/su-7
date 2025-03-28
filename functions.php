<?php
/**
 * SU-7 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SU-7
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function su_7_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on SU-7, use a find and replace
		* to change 'su-7' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'su-7', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'su-7' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'su_7_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'su_7_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function su_7_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'su_7_content_width', 640 );
}
add_action( 'after_setup_theme', 'su_7_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function su_7_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'su-7' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'su-7' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'su_7_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function su_7_scripts() {
	wp_enqueue_style( 'su-7-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'su-7-style', 'rtl', 'replace' );

	wp_enqueue_script( 'su-7-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'su_7_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * JS scripts
 */
add_action( 'wp_enqueue_scripts', 'register_scripts' );
function register_scripts(){
  wp_enqueue_script( 'roomLable', get_template_directory_uri() . '/js/roomLable.js', array(), false, true);
  wp_enqueue_script( 'callBackForm', get_template_directory_uri() . '/js/callBackForm.js', array(), false, true);
  wp_enqueue_script( 'formSend', get_template_directory_uri() . '/js/formSend.js', array(), false, true);
  wp_enqueue_script( 'phoneValidation', get_template_directory_uri() . '/js/script.js', array(), false, true);
  wp_enqueue_script( 'slick_add', get_template_directory_uri() . '/js/slick_add.js', array(), false, true);
  wp_enqueue_script( 'switchSection', get_template_directory_uri() . '/js/switchSection.js', array(), false, true);
  wp_enqueue_script( 'roomListFilter', get_template_directory_uri() . '/js/roomListfilter.js', array(), false, true);
  wp_enqueue_script( 'readMore', get_template_directory_uri() . '/js/readmore.js', array(), false, true);
  wp_enqueue_script( 'readMore settings', get_template_directory_uri() . '/js/readmore_settings.js', array(), false, true);
  wp_enqueue_script( 'mobileMenu', get_template_directory_uri() . '/js/mobileMenu.js', array(), false, true);
  wp_enqueue_script( 'lightBox', get_template_directory_uri() . '/js/lightbox.js', array(), false, true);
  wp_enqueue_script( 'videoButton', get_template_directory_uri() . '/js/videoButton.js', array(), false, true);
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.3.min.js', array(), false, false);
  wp_enqueue_style('style', get_template_directory_uri() . '/css/slick.css');
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), false, false);
}

/**
* Register menus
*/
register_nav_menus( array(
    'footer_kristall' => __('Footer Kristall', 'su-7'),
    'footer_borovaya' => __('Footer Borovaya', 'su-7'),
    'footer_kommunar' => __('Footer Kommunar', 'su-7'),
	'footer_dinastia' => __('Footer Dinastia', 'su-7'),
	'footer_bit' => __('Footer Bit', 'su-7'),
    'footer_prityashenie' => __('Footer Prityashenie', 'su-7'),
    'footer_projects' => __('Footer Progects', 'su-7'),
    'footer_information' => __('Footer Information', 'su-7'),
));

/**
* Register feeds
*/
function AddRSS(){
  add_feed('domclick-kristall', 'ProceedDomclickRSSKristall');
  add_feed('domclick-borovaya', 'ProceedDomclickRSSBorovaya');
  add_feed('domclick-prityashenie', 'ProceedDomclickRSSprityashenie');
  add_feed('domclick-kommunar', 'ProceedDomclickRSSkommunar');
  add_feed('yandex-kristall', 'ProceedYandexRSSKristall');
  add_feed('yandex-borovaya', 'ProceedYandexRSSBorovaya');
}

function ProceedDomclickRSSKristall() {
  get_template_part('rss-domclick-kristall');
}
function ProceedDomclickRSSBorovaya() {
  get_template_part('rss-domclick-borovaya');
}
function ProceedDomclickRSSprityashenie() {
  get_template_part('rss-domclick-prityashenie');
}
function ProceedDomclickRSSkommunar() {
  get_template_part('rss-domclick-kommunar');
}
function ProceedYandexRSSKristall() {
  get_template_part('rss-yandex-kristall');
}
function ProceedYandexRSSBorovaya() {
  get_template_part('rss-yandex-borovaya');
}

add_action('init', 'AddRSS');