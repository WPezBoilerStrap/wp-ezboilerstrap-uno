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

if ( WP_ezMethods::ez_true($arr_content_below['active']) ){
  /**
   * In Admin > Appearance > Widgets, has a widget been placed in the defined dynamic sidebar && is the bool status === true
   */
  if ( is_active_sidebar($arr_content_below['ds']['one']['index']) && $arr_content_below['ds']['one']['active'] === true ) {
    echo '<section>';  
      echo '<div class="' . $arr_content_below['ds']['one']['markup']['class'] . ' wp-ezbs-content-below' . '">';
	    dynamic_sidebar($arr_content_below['ds']['one']['index']);
	  echo '</div>';
    echo '</section>';
  }
}