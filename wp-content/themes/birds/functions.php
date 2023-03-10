<?php

/**
 * box functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package box
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function birds_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on box, use a find and replace
		* to change 'birds' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('birds', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'birds'),
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
			'birds_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'birds_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function birds_content_width()
{
	$GLOBALS['content_width'] = apply_filters('birds_content_width', 640);
}
add_action('after_setup_theme', 'birds_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function birds_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'birds'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'birds'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'birds_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function birds_scripts()
{
	wp_enqueue_style('birds-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('birds-style', 'rtl', 'replace');

	wp_enqueue_script('birds-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'birds_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}



function max_title_length($title)
{
	$max = 60;
	if (strlen($title) > $max) {
		return substr($title, 0, $max) . " &hellip;";
	} else {
		return $title;
	}
}


// ?????????????? ????????????
function true_breadcrumbs(){
 
	// ?????????? ?????????????? ????????????????
	$page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
	$separator = ' / '; 
 
	if( is_home() ){
 
			echo '<a href="' . site_url() . '">??????????????</a>' . $separator . '<a href="http://herbalife/blog/">????????</a>'. $separator . $page_num . '-?? ????????????????';
		
 
	} else { // ???? ??????????????
 
		echo '<a href="' . site_url() . '">??????????????</a>' . $separator . '<a href="http://herbalife/blog/">????????</a>'. $separator;
 
 
		if( is_single() ){ // ????????????
 
			echo the_title();
 
		} elseif ( is_page() ){ // ???????????????? WordPress 
 

			global $post;
			// ???????? ?? ?????????????? ???????????????? ???????????????????? ????????????????????????
			if ( $post->post_parent ) {
			 
				$parent_id  = $post->post_parent;
				$breadcrumbs = array(); 
			 
				while ( $parent_id ) {
					$page = get_page( $parent_id );
					$breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
					$parent_id = $page->post_parent;
				}
			 
				echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;
			 
			}





			the_title();
 
		} elseif ( is_category() ) {
 
			single_cat_title();
 
		} elseif( is_tag() ) {
 
			single_tag_title();
 
		} elseif ( is_day() ) { // ???????????? (???? ????????)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
			echo get_the_time('d');
 
		} elseif ( is_month() ) { // ???????????? (???? ??????????????)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo get_the_time('F');
 
		} elseif ( is_year() ) { // ???????????? (???? ??????????)
 
			echo get_the_time( 'Y' );
 
		} elseif ( is_author() ) { // ???????????? ???? ??????????????
 
			global $author;
			$userdata = get_userdata( $author );
			echo '??????????????????????(??) ' . $userdata->display_name;
 
		} elseif ( is_404() ) { // ???????? ???????????????? ???? ????????????????????
 
			echo '???????????? 404';
 
		}
 
		if ( $page_num > 1 ) { // ?????????? ?????????????? ????????????????
			echo ' (' . $page_num . '-?? ????????????????)';
		}
 
	}
 
}


function emptytextarea() {  
	wp_register_script( 'empty-textarea', get_template_directory_uri() . '/empty-textarea.js',  array(), '1' );  

	wp_enqueue_script( 'empty-textarea' );
}  
add_action( 'wp_enqueue_scripts', 'emptytextarea' ); 