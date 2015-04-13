<?php
/** 
 * For Below the content
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

$arr_content_below = ezbsModl::get( basename(__FILE__, '.php') ); 

if( WPezHelpers::ez_true($arr_content_below,'active') )  {  

  foreach ( $arr_content_below['ds'] as $str_key => $arr_value){
	
    if ( WPezHelpers::ez_ias( $arr_content_below['ds'][$str_key]['index'], $arr_content_below['ds'][$str_key]['active']) ) {
	
      echo '<div class="' . esc_attr($arr_footer_below['ds'][$str_key]['markup']['class']) . ' wp-ezbs-content-below' . '">';
	  
	    WPezHelpers::ez_ds($arr_content_below['ds'][$str_key]['index'], $arr_content_below['ds'][$str_key]['active'] );
		
	  echo '</div>';
    }		
  }
}