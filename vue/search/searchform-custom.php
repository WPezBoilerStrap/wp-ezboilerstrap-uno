<?php 
/** 
 * Instead of WP's get_search_form_() 
 *
 * More info: (@link http://codex.wordpress.org/Function_Reference/get_search_form). Also use WP ezClassesThemeSearch's get_search_form_ez() method.
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
?>

<?php

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_searchform_custom = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_searchform_custom['active']) || $arr_searchform_custom['active'] !== false ){
  global $wp_query;

  $str_to_return = '';

  $str_to_return .= '<form role="search" method="get" id="' . sanitize_text_field($arr_searchform_custom['markup']['form_id']) . '" action="' . sanitize_text_field($arr_searchform_custom['markup']['action']) .'">';
  $str_to_return .= '<div>';
  
  if ( $arr_searchform_custom['markup']['label_bool'] === true ){
    $str_to_return .= '<label class="' . sanitize_text_field($arr_searchform_custom['markup']['label_class']) . '" for="s">' . sanitize_text_field($arr_searchform_custom['markup']['label_value']) . '</label>';

  }
  
  //  $search_query = get_search_query();
  
  if ( empty( $arr_searchform_custom['markup']['input_value']) ) {
    $str_to_return .= '<input class="'. sanitize_text_field($arr_searchform_custom['markup']['empty_input_class']) . '" type="text" value="" name="s" id="' . sanitize_text_field($arr_searchform_custom['markup']['empty_input_id']) . '" placeholder="' . sanitize_text_field($arr_searchform_custom['markup']['empty_input_placeholder']) .'"/>';	
  } else {
    $str_to_return .= '<input class="'. sanitize_text_field($arr_searchform_custom['markup']['input_class']) . '" type="text" name="s" id="' . sanitize_text_field($arr_searchform_custom['markup']['input_id']) . '" value="' . sanitize_text_field($arr_searchform_custom['markup']['input_value']).'"/>';			
  }
  
  $str_to_return .= '<button type="submit" id="' . sanitize_text_field($arr_searchform_custom['markup']['button_id']) . '" value="' . sanitize_text_field($arr_searchform_custom['markup']['button_value']) . '" class="' . sanitize_text_field($arr_searchform_custom['markup']['button_class']) . '"/>' . sanitize_text_field($arr_searchform_custom['markup']['button_value']) . '</button>';
  $str_to_return .= '</div>';
  $str_to_return .= '</form>';

  echo $str_to_return;
}	