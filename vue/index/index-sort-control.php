<?php
/** 
 * Displays the sort control for a posts list
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

$arr_index_sort_control = ezbsModl::get( basename(__FILE__, '.php') );

if ( WP_ezMethods::ez_true($arr_index_sort_control['active']) ){

  if ( ! empty($arr_index_sort_control['markup']['control']) && is_string($arr_index_sort_control['markup']['control']) ){
 
    echo '<div class="' . sanitize_text_field($arr_index_sort_control['markup']['class']) . '">';
	  echo '<nav>';
        echo $arr_index_sort_control['markup']['control'];
	  echo '</nav>';
    echo '</div>';
    echo '<div class="clearfix"></div>';
  }
}