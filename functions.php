<?php
/**
 * oTema functions and definitions.
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Tema_Desenvolvido
 */


if ( ! function_exists( 'tema_setup' ) ) :

function tema_setup() {

	load_theme_textdomain( 'afgc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'             => esc_html__( 'Primary','afgc' ),
	) );


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'gallery',
		'image',
		'video',
		'quote',
		'link',
	) );
}
/* final */
endif;
add_action( 'after_setup_theme', 'tema_setup' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/template-parts/customizer.php';

/*  */
function post_remove ()      //creating functions post_remove for removing menu item
{ 
   //remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call

/*  */
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );

/* limite caracteres posts */
function custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
	return '...';
}
 
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * content width in pixels, based on the theme's design and stylesheet.
 */
function tema_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_content_width', 640 );
}
add_action( 'after_setup_theme', 'tema_content_width', 0 );

/**
 * widget area.
 */
function tema_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'afgc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tema_widgets_init' );

add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

/**
 * Enqueue scripts and styles.
 */
function tema_scripts() {

	$url_template   = get_template_directory_uri();
	$url_stylesheet = get_stylesheet_uri();

	//css	
	wp_enqueue_style( 'wp-bootstrap',       get_template_directory_uri()."/css/bootstrap.min.css" );
	wp_enqueue_style( 'wp-modaal',          get_template_directory_uri()."/css/modaal.css" );
	wp_enqueue_style( 'wp-layout',          get_stylesheet_uri() );

	//footer
	//wp_enqueue_script( 'wp-jquery',       "{$url_template}/js/jquery-1.9.1.min.js",                                          array(), '1.9.1',  true );
	wp_enqueue_script( 'wp-bootstrap',    "{$url_template}/js/bootstrap.min.js",                                             array(), false,    true );
	wp_enqueue_script( 'wp-plugin-js',    "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js",   array(), false,    true );
	//wp_enqueue_script( 'wp-script',       "{$url_template}/js/app.js",                                                       array(), true,     true );
	wp_enqueue_script( 'wp-modaal',       "{$url_template}/js/modaal.js",                                                    array(), false,    true );
	wp_enqueue_script( 'wp-mh',           "{$url_template}/js/jquery.matchHeight.js",                                        array(), false,    true );
	wp_enqueue_script( 'wp-mg',           "//code.jquery.com/jquery-migrate-1.2.1.min.js",                                   array(), false,    true );
	wp_enqueue_script( 'wp-wow',          "{$url_template}/js/wow.min.js",                                                   array(), false,    true );
	wp_enqueue_script( 'wp-wow2',         "{$url_template}/js/wow.init.js",                                                  array(), false,    true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tema_scripts' );



/* FAVICON */
function favicon() {
	$url_template = get_template_directory_uri();

print "<!-- favicon -->
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{$url_template}/favicon/apple-touch-icon-57x57.png\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{$url_template}favicon/apple-touch-icon-60x60.png\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{$url_template}/favicon/apple-touch-icon-72x72.png\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{$url_template}/favicon/apple-touch-icon-76x76.png\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{$url_template}/favicon/apple-touch-icon-114x114.png\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{$url_template}/favicon/apple-touch-icon-120x120.png\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{$url_template}/favicon/apple-touch-icon-144x144.png\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{$url_template}/favicon/apple-touch-icon-152x152.png\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{$url_template}/favicon/apple-touch-icon-180x180.png\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/favicon-32x32.png\" sizes=\"32x32\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/android-chrome-192x192.png\" sizes=\"192x192\">
<link rel=\"icon\" type=\"image/png\" href=\"{$url_template}/favicon/favicon-16x16.png\" sizes=\"16x16\">
<link rel=\"manifest\" href=\"{$url_template}/favicon/manifest.json\">
<link rel=\"mask-icon\" href=\"{$url_template}/favicon/safari-pinned-tab.svg\" color=\"#32d6c8\">
<link rel=\"shortcut icon\" href=\"{$url_template}/favicon/favicon.ico\">
<meta name=\"msapplication-TileColor\" content=\"#003556\">
<meta name=\"msapplication-TileImage\" content=\"{$url_template}/favicon/mstile-144x144.png\">
<meta name=\"msapplication-config\" content=\"{$url_template}/favicon/browserconfig.xml\">
<meta name=\"theme-color\" content=\"#32d6c8\">
";
}

/*
    STYLE LOGIN
*/

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
}
add_action('login_head', 'custom_login_css');

/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return '« Voltar para Página Inicial';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/*
 * Add filter to query archives by year
 */
function newmarket_getarchives_filter($where, $args) {
    if(isset($args['year'])) {
        $where .= ' AND YEAR(post_date) = ' . intval($args['year']);
    }

    return $where;
}

add_filter('getarchives_where', 'newmarket_getarchives_filter', 10, 2);