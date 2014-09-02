<?php
/** 
 * Renders main dynamic sidebar (widget) in the layout area below the global nav / main header
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
 * --- 21 August 2014 = Ready.
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_header_below = ezbsModl::get( basename(__FILE__, '.php') ); 

if (  WP_ezMethods::ez_true($arr_header_below['active']) ){

  foreach ( $arr_header_below['ds'] as $str_key => $arr_value){

    if ( WP_ezMethods::ez_ias($arr_header_below['ds'][$str_key]['index'], $arr_header_below['ds'][$str_key]['active']) ) {
  
      echo '<div class="' . sanitize_text_field($arr_header_below['ds'][$str_key]['markup']['class']) . ' wp-ezbs-header-above' . '">';
	    WP_ezMethods::ez_ds($arr_header_below['ds'][$str_key]['index'], $arr_header_below['ds'][$str_key]['active']);
	  echo '</div>';
    }
  }
}