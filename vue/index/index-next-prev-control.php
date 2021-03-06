<?php
/** 
 * Displays the "paging" control for the index
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

$arr_index_next_prev_control = ezbsModl::get( basename(__FILE__, '.php') );

if ( WPezHelpers::ez_true($arr_index_next_prev_control, 'active') ){

  if ( ! empty($arr_index_next_prev_control['markup']['control']) && is_string($arr_index_next_prev_control['markup']['control']) ){
 
    echo '<div class="' . esc_attr($arr_index_next_prev_control['markup']['class']) . ' wp-ezbs-next-prev' . '">';
      echo '<nav>';
        echo $arr_index_next_prev_control['markup']['control'];
	  echo '</nav>';
    echo '</div>';
	
    echo '<div class="clearfix"></div>';
  }
}