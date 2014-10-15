<?php
/** 
 * Example of a main header with a logo
 *
 * You're probebly going to want to do your own
 *
 * PHP version 5.3
 *
 * LICENSE: TODO 
 *
 * @package WordPress
 * @subpackage WPezBoilerStrap
 * @since 0.5.0
 * @license TODO
 */

/**
 * == Change Log == 
 *
 * --- 20 August 2014 = Ready.
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_header_main_logo = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_header_main_logo['active']) ){

echo '<div class="' . sanitize_text_field($arr_header_main_logo['markup']['left_class']) . '">';
  echo '<a class="' . sanitize_text_field($arr_header_main_logo['markup']['link_class_left']) . '" href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">';
   echo '<img class="' . sanitize_text_field($arr_header_main_logo['markup']['img_class']) . '"src="' . get_template_directory_uri() . '/setup/assets/img/wp-ezboilerstrap-logo.png" alt="' . get_bloginfo( 'name', 'display' ) . ' - ' . get_bloginfo( 'description', 'display' ) . '">';
  echo '</a>';
echo '</div>';

echo '<div class="' . sanitize_text_field($arr_header_main_logo['markup']['right_class']) . '">';
  echo '<a class="' . sanitize_text_field($arr_header_main_logo['markup']['link_class_right']) . '" href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">';
    echo '<h2>' . get_bloginfo( 'name', 'display' ) . '</h2>';
    echo '<h5>' . get_bloginfo( 'description', 'display' ) . '</h5>';
  echo '</a>';
echo '</div>';

}