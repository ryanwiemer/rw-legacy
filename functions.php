<?php
/**
  * Functions
  */

////////////////////////
//Clean up Wordpress////
////////////////////////

//Remove WP junk in the head
function remove_wp_version() {
return '';
}
add_filter ('the_generator', 'remove_wp_version');
remove_action ('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_shortlink_wp_head');
remove_action ('wp_head', 'rel_canonical');
remove_action ('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//Clean up Wordpress Menus
 function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
		'current_page_item' // active
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		'current_page_item' => 'active'
	);
	$text = str_replace(array_keys($replace), $replace, $text);
		return $text;
	}
add_filter ('wp_nav_menu','current_to_active');
function strip_empty_classes($menu) {
    $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//Add class to pagination buttons
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');
function posts_link_attributes_next() {
  return 'class="btn-pagination btn-pagination--next"';
}
function posts_link_attributes_prev() {
  return 'class="btn-pagination btn-pagination--prev"';
}

////////////////////////
//Edits to Image Output/
////////////////////////

//Remove Image Dimensions
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
// Removes attached image sizes as well
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
  		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  		return $html;
}

//Remove Attachement Dimensions
add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
add_shortcode( 'caption', 'fixed_img_caption_shortcode' );
function fixed_img_caption_shortcode($attr, $content = null) {
  if ( ! isset( $attr['caption'] ) ) {
     if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
     $content = $matches[1];
     $attr['caption'] = trim( $matches[2] );
     }
  }
  $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
     if ( $output != '' )
     return $output;
  extract( shortcode_atts(array(
  'id'      => '',
  'align'   => 'alignnone',
  'width'   => '',
  'caption' => ''
  ), $attr));
  if ( 1 > (int) $width || empty($caption) )
  return $content;
  if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
  return '<p ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
  . do_shortcode( $content ) . '<span class="wp-caption-text">' . $caption . '</span></p>';
}

//Featured Image Support
add_theme_support( 'post-thumbnails');

//95% jpeg Quality
add_filter( 'jpeg_quality', create_function( '', 'return 95;' ) );

///////////////////////////
//Theme Specific Functions/
///////////////////////////

//Register Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Change Youtube Embed to work with the responsive rw theme
function alx_embed_html( $html ) {
  return '<div class="video">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack

add_filter('next_posts_link_attributes','add_link_css_class_older');
 add_filter('previous_posts_link_attributes','add_link_css_class_newer');
 function add_link_css_class_older() {
 return 'class="btn btn--post older"';
 }
 function add_link_css_class_newer() {
 return 'class="btn btn--post newer"';
 }

//Remove Additional PictureFill Script From Plugin
function mytheme_dequeue_scripts() {
 wp_dequeue_script('picturefill');
}
add_action('wp_enqueue_scripts', 'mytheme_dequeue_scripts');


/* Register template redirect action callback */
add_action('template_redirect', 'meks_remove_wp_archives');

/* Remove archives */
function meks_remove_wp_archives(){
 //If we are on category or tag or date or author archive
 if( is_category() || is_tag() || is_date() || is_author() ) {
   global $wp_query;
   $wp_query->set_404(); //set to 404 not found page
 }
}

// Remove All Yoast HTML Comments
// https://gist.github.com/paulcollett/4c81c4f6eb85334ba076
if (defined('WPSEO_VERSION')){
  add_action('get_header',function (){ ob_start(function ($o){
  return preg_replace('/\n?<.*?yoast.*?>/mi','',$o); }); });
  add_action('wp_head',function (){ ob_end_flush(); }, 999);
}

////////////////////////
//CSS & JS Scripts//////
////////////////////////

//Enqueue scripts and styles.
function rw_scripts() {
  wp_enqueue_style( 'rw-style',  get_stylesheet_directory_uri() . '/dist/css/style.min.css');
  wp_enqueue_script( 'rw-pace',  get_template_directory_uri() . '/dist/js/pace.min.js');
}

add_action( 'wp_enqueue_scripts', 'rw_scripts');
