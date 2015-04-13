<?php
/** 
 * For below the content
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
 * --- 30 August 2014 (0.5.0) = Ready.
 *
 * ------------------------------------------------------------------------------------------------------
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_content_above = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_content_above, 'active') ){

  foreach ( $arr_content_above['ds'] as $str_key => $arr_value){
	
    if ( WPezHelpers::ez_ias( $arr_content_above['ds'][$str_key]['index'], $arr_content_above['ds'][$str_key]['active']) ) {
	
      echo '<section>';
        echo '<div class="' .esc_attr($arr_content_above['ds'][$str_key]['markup']['class']) . ' wp-ezbs-content-above' . '">';
	      dynamic_sidebar($arr_content_above['ds'][$str_key]['index']);
	    echo '</div>';
      echo '</section>';
    }
  }
}