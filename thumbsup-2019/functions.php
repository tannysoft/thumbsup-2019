<?php
/**
 * seed functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package plant
 */


/* Doc - https://seedthemes.com/documentation/plant/ */

$GLOBALS['s_layout'] 					= 'full-width';
$GLOBALS['s_header_mobile'] 			= 'fixed';
$GLOBALS['s_header_desktop'] 			= 'standard';
$GLOBALS['s_menu'] 						= 'dropdown';
$GLOBALS['s_menu_icon'] 				= 'small';
$GLOBALS['s_blog_layout'] 				= 'rightbar';
$GLOBALS['s_blog_layout_single'] 	= 'rightbar';
$GLOBALS['s_blog_columns'] 			= '1';
$GLOBALS['s_blog_show_profile']		= '0';
$GLOBALS['s_shop_layout'] 				= 'leftbar';
$GLOBALS['s_shop_pagebuilder'] 		= '0';
$GLOBALS['s_fontawesome'] 				= 'disable';
$GLOBALS['s_wp_comments'] 				= 'disable';




if ( ! function_exists( 'seed_setup' ) ) {
	function seed_setup() {
		load_theme_textdomain( 'plant', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo', array(
			'width'       => 200,
			'height'      => 100,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 370, 277, TRUE );
		register_nav_menus( array(
			'primary' => esc_html__( 'Main Menu', 'plant' ),
			'mobile' => esc_html__( 'Mobile Menu', 'plant' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
	}
}
add_action( 'after_setup_theme', 'seed_setup' );
function seed_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seed_content_width', 840 );
}
add_action( 'after_setup_theme', 'seed_content_width', 0 );

function seed_theme_updater() {
	require( get_template_directory() . '/vendor/seedthemes/updater/theme-updater.php' );
}
add_action( 'after_setup_theme', 'seed_theme_updater' );

/**
 * Register widget area.
 */
function seed_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'plant' ),
		'id'            => 'rightbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'plant' ),
		'id'            => 'leftbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'plant' ),
		'id'            => 'shopbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Home Banner', 'plant' ),
		'id'            => 'home_banner',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Banner', 'plant' ),
		'id'            => 'page_banner',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<!--',
		'after_title'   => '-->',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Top Right', 'plant' ),
		'id'            => 'top-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<!--',
		'after_title'   => '-->',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Headbar', 'plant' ),
		'id'            => 'headbar',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="head-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<!--',
		'after_title'   => '-->',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footbar', 'plant' ),
		'id'            => 'footbar',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'seed_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function seed_scripts() {
	/* CSS */
	wp_enqueue_style( 'seed-bootstrap4', get_template_directory_uri() . '/css/bootstrap4.min.css' );
	wp_enqueue_style( 'seed-min', get_template_directory_uri() . '/css/style.min.css' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'seed-main', get_template_directory_uri() . '/js/main.min.js', array(), '2017-1', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'seed_scripts' );

/**
 * Registers an editor stylesheet for the theme.
 */
function seed_add_editor_styles() {
	add_editor_style( get_template_directory_uri() . '/css/wp-editor-style.css' );
}
add_action( 'admin_init', 'seed_add_editor_styles' );


/**
 * WooCommerce
 */
function seed_woo_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'seed_woo_setup' );

/* Custom Breadcrumb delimiter */
add_filter( 'woocommerce_breadcrumb_defaults', 'seed_change_breadcrumb_delimiter' );
function seed_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = '<i class="si-angle-right"></i>';
	return $defaults;
}

/* Custom Loading */
add_filter('woocommerce_ajax_loader_url', 'woo_custom_cart_loader');
function woo_custom_cart_loader() {
	return __(get_template_directory_uri().'/img/loading.gif', 'woocommerce');
}

/* Custom Thai Province Order */
if (get_locale() == 'th') {
	add_filter( 'woocommerce_states', 'seed_woocommerce_states' );
}
function seed_woocommerce_states( $states ) {
	$states['TH'] = array(
		'TH-81' => 'กระบี่',
		'TH-10' => 'กรุงเทพมหานคร',
		'TH-71' => 'กาญจนบุรี',
		'TH-46' => 'กาฬสินธุ์',
		'TH-62' => 'กำแพงเพชร',
		'TH-40' => 'ขอนแก่น',
		'TH-22' => 'จันทบุรี',
		'TH-24' => 'ฉะเชิงเทรา',
		'TH-20' => 'ชลบุรี',
		'TH-18' => 'ชัยนาท',
		'TH-36' => 'ชัยภูมิ',
		'TH-86' => 'ชุมพร',
		'TH-57' => 'เชียงราย',
		'TH-50' => 'เชียงใหม่',
		'TH-92' => 'ตรัง',
		'TH-23' => 'ตราด',
		'TH-63' => 'ตาก',
		'TH-26' => 'นครนายก',
		'TH-73' => 'นครปฐม',
		'TH-48' => 'นครพนม',
		'TH-30' => 'นครราชสีมา',
		'TH-80' => 'นครศรีธรรมราช',
		'TH-60' => 'นครสวรรค์',
		'TH-12' => 'นนทบุรี',
		'TH-96' => 'นราธิวาส',
		'TH-55' => 'น่าน',
		'TH-38' => 'บึงกาฬ',
		'TH-31' => 'บุรีรัมย์',
		'TH-13' => 'ปทุมธานี',
		'TH-77' => 'ประจวบคีรีขันธ์',
		'TH-25' => 'ปราจีนบุรี',
		'TH-94' => 'ปัตตานี',
		'TH-14' => 'พระนครศรีอยุธยา',
		'TH-56' => 'พะเยา',
		'TH-82' => 'พังงา',
		'TH-93' => 'พัทลุง',
		'TH-66' => 'พิจิตร',
		'TH-65' => 'พิษณุโลก',
		'TH-76' => 'เพชรบุรี',
		'TH-67' => 'เพชรบูรณ์',
		'TH-54' => 'แพร่',
		'TH-83' => 'ภูเก็ต',
		'TH-44' => 'มหาสารคาม',
		'TH-49' => 'มุกดาหาร',
		'TH-58' => 'แม่ฮ่องสอน',
		'TH-35' => 'ยโสธร',
		'TH-95' => 'ยะลา',
		'TH-45' => 'ร้อยเอ็ด',
		'TH-85' => 'ระนอง',
		'TH-21' => 'ระยอง',
		'TH-70' => 'ราชบุรี',
		'TH-16' => 'ลพบุรี',
		'TH-52' => 'ลำปาง',
		'TH-51' => 'ลำพูน',
		'TH-42' => 'เลย',
		'TH-33' => 'ศรีสะเกษ',
		'TH-47' => 'สกลนคร',
		'TH-90' => 'สงขลา',
		'TH-91' => 'สตูล',
		'TH-11' => 'สมุทรปราการ',
		'TH-75' => 'สมุทรสงคราม',
		'TH-74' => 'สมุทรสาคร',
		'TH-27' => 'สระแก้ว',
		'TH-19' => 'สระบุรี',
		'TH-17' => 'สิงห์บุรี',
		'TH-64' => 'สุโขทัย',
		'TH-72' => 'สุพรรณบุรี',
		'TH-84' => 'สุราษฎร์ธานี',
		'TH-32' => 'สุรินทร์',
		'TH-43' => 'หนองคาย',
		'TH-39' => 'หนองบัวลำภู',
		'TH-15' => 'อ่างทอง',
		'TH-37' => 'อำนาจเจริญ',
		'TH-41' => 'อุดรธานี',
		'TH-53' => 'อุตรดิตถ์',
		'TH-61' => 'อุทัยธานี',
		'TH-34' => 'อุบลราชธานี'
	);
	return $states;
}

/* Facebook Login */
add_action('woocommerce_login_form_end', 'add_fbl_form'); 
// add_action('woocommerce_register_form_end', 'add_fbl_form'); 
function add_fbl_form(){
	do_action( 'facebook_login_button' );
};

/**
 * Admin CSS
 */
function seed_admin_style() {
	wp_enqueue_style('seed-admin-style', get_template_directory_uri() . '/css/wp-admin.css');
}
add_action('admin_enqueue_scripts', 'seed_admin_style');


/**
 * Remove references to SiteOrigin Premium
 */
add_filter( 'siteorigin_premium_upgrade_teaser', '__return_false' );


/**
 * Remove "Category: ", "Tag: ", "Taxonomy: " from archive title
 */
add_filter( 'get_the_archive_title', 'seed_get_the_archive_title');
function seed_get_the_archive_title($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false ) ;
	}
	return $title;
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) { require get_template_directory() . '/inc/jetpack.php'; }

/**
 * Smart Slider 3 Pro
 */
function plant_smartslider3_skip_license_modal() {
	return true;
}
add_filter('smartslider3_skip_license_modal', 'plant_smartslider3_skip_license_modal');

/**
 * TGMPA
 */
require_once get_template_directory() . '/vendor/TGMPA/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'plant_register_required_plugins' );

function plant_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'Smart Slider 3 Pro',
			'slug'               => 'nextend-smart-slider3-pro',
			'source'             => get_template_directory() . '/vendor/nextend/smartslider-3.3.11.zip',
			'required'           => false,
			'version'            => '3.3.11',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
		array(
			'name'               => 'Kirki',
			'slug'               => 'kirki',
			'source'             => get_template_directory() . '/vendor/kirki/kirki.3.0.34.1.zip',
			'required'           => true,
			'version'            => '3.0.34.1',
			'force_activation'   => true,
			'force_deactivation' => false,
			'external_url'       => '',
			'is_callable'        => '',
		),
	);
	$config = array(
		'id'           => 'plant',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'parent_slug'  => 'themes.php',            
		'capability'   => 'edit_theme_options',   
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => true,                   
		'message'      => '',                      
	);
	tgmpa( $plugins, $config );
}
if( class_exists('Kirki') ) { include_once( dirname( __FILE__ ) . '/inc/kirki.php' );}