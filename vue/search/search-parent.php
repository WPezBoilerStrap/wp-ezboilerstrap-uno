<?php
/** 
 * Inner template part of for search
 *
 * TODO
 *
 * PHP version 5.3
 *
 * LICENSE: MIT 
 *
 * @package WPezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 31 August 2014 - Ready
 */
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

$arr_search_parent = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_search_parent, 'active') ){

  WPezHelpers::ez_gtp( $arr_search_parent['tp']['breadcrumbs']['slug'], $arr_search_parent['tp']['breadcrumbs']['name'], $arr_search_parent['tp']['breadcrumbs']['active'] );
  
  WPezHelpers::ez_gtp( $arr_search_parent['tp']['content_above']['slug'], $arr_search_parent['tp']['content_above']['name'], $arr_search_parent['tp']['content_above']['active'] );

  echo '<div class="' . esc_attr($arr_search_parent['markup']['container']) . '">';
	echo '<div class="' . esc_attr($arr_search_parent['markup']['row']) . '">';  
	
	  WPezHelpers::ez_gtp( $arr_search_parent['tp']['aside_left']['slug'], $arr_search_parent['tp']['aside_left']['name'], $arr_search_parent['tp']['aside_left']['active'] );

	  WPezHelpers::ez_gtp( $arr_search_parent['tp']['main']['slug'], $arr_search_parent['tp']['main']['name'], $arr_search_parent['tp']['main']['active'] );

	  WPezHelpers::ez_gtp( $arr_search_parent['tp']['aside_right']['slug'], $arr_search_parent['tp']['aside_right']['name'], $arr_search_parent['tp']['aside_right']['active'] );

	echo '</div>';
  echo '</div>';
}