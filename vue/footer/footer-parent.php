<?php
/** 
 * Wraps all the various footer layout objects
 *
 * Long description TODO (@link http://)
 *
 * PHP version 5.3
 *
 * LICENSE: TODO 
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license TODO
 */
 
/*
 * == Change Log == 
 *
 * --- 31 August 2014 = Ready.
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_footer_parent = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_footer_parent, 'active') ){	
	
  echo '<footer>';

  WPezHelpers::ez_gtp( $arr_footer_parent['tp']['footer_above']['slug'], $arr_footer_parent['tp']['footer_above']['name'], $arr_footer_parent['tp']['footer_above']['active'] );
	
  WPezHelpers::ez_gtp( $arr_footer_parent['tp']['menu_footer']['slug'], $arr_footer_parent['tp']['menu_footer']['name'], $arr_footer_parent['tp']['menu_footer']['active'] );
	
  WPezHelpers::ez_gtp( $arr_footer_parent['tp']['footer_main']['slug'], $arr_footer_parent['tp']['footer_main']['name'], $arr_footer_parent['tp']['footer_main']['active'] );

  WPezHelpers::ez_gtp( $arr_footer_parent['tp']['footer_below']['slug'], $arr_footer_parent['tp']['footer_below']['name'], $arr_footer_parent['tp']['footer_below']['active'] );
			
  WPezHelpers::ez_gtp( $arr_footer_parent['tp']['footer_bottom']['slug'], $arr_footer_parent['tp']['footer_bottom']['name'], $arr_footer_parent['tp']['footer_bottom']['active'] );
		
  echo '</footer>';
}