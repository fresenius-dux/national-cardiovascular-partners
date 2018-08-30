<?php
/*!
 *
 * @package fmcna-com-child
 */

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/fresenius-dux/fmcna-com-child',
	__FILE__,
	'fmcna-com-child'
);

function child_styles() {
	$parent_style = 'fmcna-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}

add_action( 'wp_enqueue_scripts', 'child_styles' );

function partner_widgets_init() {

    register_sidebar( array(
        'name' => 'Partner Subnav',
        'id' => 'partner-subnav',
        'before_widget' => '<div class="partner-nav-bar ">',
        'after_widget'  => '</div>',
        'before_title'  => '<span style="display: none;">',
        'after_title'   => '</span>',
        'menu_class'    => 'nav navbar-nav',
        'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
    ) );
    register_sidebar( array(
        'name' => 'Partner Mobile Subnav',
        'id' => 'partner-mobile-subnav',
        'before_widget' => '<div class="partner-nav-bar nav-bar-mobile">',
        'after_widget' => '</div>',
        'before_title' => '<span style="display: none;">',
        'after_title' => '</span>',
        'menu_class'  => 'nav navbar-nav',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    ) );
    register_sidebar( array(
        'name' => 'Partner Footer Nav',
        'id' => 'ncp-footer-nav',
        'before_widget' => '<div class="footer-column">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="footer-column-title">',
    		'after_title'   => '</h3>',
    		'description'		=> 'Second footer widget area'
    ) );
}
add_action( 'widgets_init', 'partner_widgets_init' );


if ( ! function_exists( 'child_setup' ) ) {

  function child_setup() {
		// child theme menu location
    register_nav_menus( array(
      'partner-menu' => 'Partner Menu',
    ) );
		// unregister parent theme menu locations
		unregister_nav_menu('nano');
		unregister_nav_menu('primary');
  }
}

add_action( 'after_setup_theme', 'child_setup', 11 );

add_filter( 'wp_nav_menu_objects', 'network_primary_nav', 100, 2 );
function network_primary_nav( $menu_items, $args )
{
  global $blog_id;
  $menu_name = 'primary';
  if ( ( $blog_id > 1 ) && $menu_name == $args->theme_location )
  {
    // to parent blog
    switch_to_blog(1);
    $locations = get_nav_menu_locations();
    // get primary nav of parent blog
    if ( isset( $locations[ $menu_name ] ) )
    {
      $menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
      $menu_items = wp_get_nav_menu_items( $menu->term_id);
    }
    // to child blog
    restore_current_blog();
  }
  return $menu_items;
}

register_nav_menus( array(
  'partner-menu' => 'Partner Menu',
) );


add_action( 'after_setup_theme','remove_cptui_register_my_cpts', 100 );

function remove_cptui_register_my_cpts() {
    remove_action( 'init', 'cptui_register_my_cpts');
}

/**
 *  Register Custom Navigation Walker
 *
 *  THIS FILE WAS EDITED BY WUNDERMAN. REVIEW BEFORE REPLACING.
 *
 *  Reason for edit: Top level of navigation could not be navigated to prior to edit.
 *  We made the walker retrain the top level anchor's href
 *  as well as commented out the data-toggle = dropdown as it was preventing the click event.
 */
require_once get_stylesheet_directory() . '/inc/wp-bootstrap-navwalker-modified-wunderman.php';
