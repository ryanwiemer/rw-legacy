<?php
/**
 * rw theme functions
 *
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

//Featured Image Support and removing some file sizes
add_theme_support( 'post-thumbnails');
function trickspanda_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'trickspanda_remove_default_image_sizes');

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

///////////////////////////
//Project Custom Post Type/
///////////////////////////

// Register Custom Post Type
function custom_post_type() {

  $labels = array(
    'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Projects', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Project:', 'text_domain' ),
    'all_items'           => __( 'All Projects', 'text_domain' ),
    'view_item'           => __( 'View Project', 'text_domain' ),
    'add_new_item'        => __( 'Add New Project', 'text_domain' ),
    'add_new'             => __( 'Add New Project', 'text_domain' ),
    'edit_item'           => __( 'Edit Project', 'text_domain' ),
    'update_item'         => __( 'Update Project', 'text_domain' ),
    'search_items'        => __( 'Search Project', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'project_post_type', 'text_domain' ),
    'description'         => __( 'Project Description', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor','thumbnail', 'revisions', ),
    'taxonomies'          => array( 'category' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'rewrite' => array('slug' => 'projects'),
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'projects', $args );
}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );



////////////////////////////////
//Limit Displayed Archive Posts/
////////////////////////////////

add_filter('pre_get_posts', 'limit_archive_posts');
function limit_archive_posts($query){
    if ($query->is_archive) {
        $query->set('posts_per_page', 6);
    }
    return $query;
}


////////////////////////
//CSS & JS Scripts//////
////////////////////////

//Enqueue scripts and styles.
function rw_scripts() {
  wp_enqueue_style( 'rw-style',  get_stylesheet_directory_uri() . '/assets/css/style.min.css');
  wp_enqueue_script( 'rw-modernizr',  get_template_directory_uri() . '/assets/js/modernizr.min.js');
  wp_enqueue_script( 'rw-jquery',  get_template_directory_uri() . '/assets/js/jquery.min.js', '', '', true);
  wp_enqueue_script( 'rw-global-script',  get_template_directory_uri() . '/assets/js/global.min.js', '', '', true);
}

function contact_scripts() {
  if( is_page('contact')) {
  wp_enqueue_script( 'rw-jquery-validate',  get_template_directory_uri() . '/assets/js/jquery.validate.min.js', '', '', true);
  wp_enqueue_script( 'rw-jquery-form',  get_template_directory_uri() . '/assets/js/jquery.form.min.js', '', '', true);
}}

add_action( 'wp_enqueue_scripts', 'rw_scripts');
add_action( 'wp_enqueue_scripts', 'contact_scripts');
