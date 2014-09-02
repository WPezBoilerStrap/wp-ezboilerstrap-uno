<?php
/** 
 * Standard "required" WordPress 404.php
 *
 * Top level WP ezBS file that "includes": WP get_header(), content_above, aside_left and aside_right layout objects, as well as template_part 404-content-center-wrap (@link http://)
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 */
 
/*
 * == Change Log ==
 *
 * -- 26 June 2013 - Ready!
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

get_header(); 

$arr_404_parent = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_404_parent['active']) ){

  echo '<div class="' . sanitize_text_field( $arr_404_parent['markup']['wrap_class'] ) . '">';
    echo '<div class="' . sanitize_text_field( $arr_404_parent['markup']['container_class'] ) . '">';
      echo '<div class="' . sanitize_text_field( $arr_404_parent['markup']['row_class'] ) . '">';
	
	    WP_ezMethods::ez_gtp( $arr_404_parent['tp']['aside_left']['slug'], $arr_404_parent['tp']['aside_left']['name'], $arr_404_parent['tp']['aside_left']['active'] );
		
		WP_ezMethods::ez_gtp( $arr_404_parent['tp']['main']['slug'], $arr_404_parent['tp']['main']['name'], $arr_404_parent['tp']['main']['active'] );
		
		WP_ezMethods::ez_gtp( $arr_404_parent['tp']['aside_right']['slug'], $arr_404_parent['tp']['aside_right']['name'], $arr_404_parent['tp']['aside_right']['active'] );
				
      echo '</div>';
    echo '</div>';
  echo '</div>';
}

get_footer();