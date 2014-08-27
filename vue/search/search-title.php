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
 * --- 22 August 2014 - Ready
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_search_title = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_search_title['active']) &&  $arr_search_title['active'] === true ){

  echo '<h3 class="' . sanitize_text_field($arr_search_title['markup']['title_headline_class']) .  '">';
  
  echo sanitize_text_field($arr_search_title['markup']['title']);
  
  echo '</h3>';

  echo '<h1 class="' . sanitize_text_field($arr_search_title['markup']['query_headline_class']) . '">';
  
  echo sanitize_text_field($arr_search_title['markup']['get_search_query']);
	
  echo '</h1>';
  
}