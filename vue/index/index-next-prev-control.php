<?php
/** 
 * Short description TODO
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
 * --- 22 August 2014 - Ready
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_index_next_prev_control = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_index_next_prev_control['active']) &&  $arr_index_next_prev_control['active'] === true ){

  if ( ! empty($arr_index_next_prev_control['markup']['control']) ){
 
    echo '<div class="' . sanitize_text_field($arr_index_next_prev_control['markup']['class']) . '">';
  
    echo $arr_index_next_prev_control['markup']['control'];
	
    echo '</div>';
    echo '<div class="clearfix"></div>';
  }
}