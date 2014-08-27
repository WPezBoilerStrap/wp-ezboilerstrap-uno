<?php
/** 
 * Wraps all the various header vues
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
 * --- 20 August 2014 = Ready.
 */
 
 
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_header_parent = ezbsModl::get( basename(__FILE__, '.php') ); 	

if ( isset($arr_header_parent['active']) && $arr_header_parent['active'] === true ) {
  
  WP_ezMethods::ez_gtp( $arr_header_parent['tp']['header_above']['slug'], $arr_header_parent['tp']['header_above']['name'], $arr_header_parent['tp']['header_above']['active'] );
		
  WP_ezMethods::ez_gtp( $arr_header_parent['tp']['menu_global']['slug'], $arr_header_parent['tp']['menu_global']['name'], $arr_header_parent['tp']['menu_global']['active'] );
  
  WP_ezMethods::ez_gtp( $arr_header_parent['tp']['main_wrap']['slug'], $arr_header_parent['tp']['main_wrap']['name'], $arr_header_parent['tp']['main_wrap']['active'] );

  WP_ezMethods::ez_gtp( $arr_header_parent['tp']['menu_main']['slug'], $arr_header_parent['tp']['menu_main']['name'], $arr_header_parent['tp']['menu_main']['active'] );

  WP_ezMethods::ez_gtp( $arr_header_parent['tp']['header_below']['slug'], $arr_header_parent['tp']['header_below']['name'], $arr_header_parent['tp']['header_below']['active'] );

}