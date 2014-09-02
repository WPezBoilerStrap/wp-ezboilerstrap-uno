<?php
/** 
 * Displays the "title" / "header" for search results
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
 * --- 31 August 2014 - Ready
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_search_title = ezbsModl::get( basename(__FILE__, '.php') );

if ( WP_ezMethods::ez_true($arr_search_title['active']) ){

  // title
  echo '<' . sanitize_text_field($arr_search_title['markup']['title_tag']) . ' class="' . sanitize_text_field($arr_search_title['markup']['title_class']) .  '">';
  
    echo sanitize_text_field($arr_search_title['markup']['title']);
  
  echo '</' . sanitize_text_field($arr_search_title['markup']['title_tag']) . '>';
  
  // query
  echo '<' . sanitize_text_field($arr_search_title['markup']['query_tag']) . ' class="' . sanitize_text_field($arr_search_title['markup']['query_class']) . '">';
  
    echo sanitize_text_field($arr_search_title['markup']['get_search_query']);
	
  echo '</' . sanitize_text_field($arr_search_title['markup']['query_tag']) . '>';
  
}