<?php
/** 
 * Renders main dynamic sidebar (widget) in the layout area above the global nav / main header
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

$arr_header_above = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_header_above, 'active') ){

  foreach ( $arr_header_above['ds'] as $str_key => $arr_value){
    
	if ( WPezHelpers::ez_ias( $arr_header_above['ds'][$str_key]['index'], $arr_header_above['ds'][$str_key]['active']) ) {
	
	  echo '<div class="' . esc_attr($arr_header_above['ds'][$str_key]['markup']['class']) . ' wp-ezbs-header-above' . '">';
	    WPezHelpers::ez_ds($arr_header_above['ds'][$str_key]['index'], $arr_header_above['ds'][$str_key]['active'] );
	  echo '</div>';
    }
  }
}