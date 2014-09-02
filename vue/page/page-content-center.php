<?php
/** 
 * A page's primary content
 *
 * TODO
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


$arr_page_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_page_content_center['active']) ){

  echo '<header>';
    echo '<' . sanitize_text_field($arr_page_content_center['markup']['title_tag']) . ' class="' . sanitize_text_field($arr_page_content_center['markup']['title_class']) . ' wp-ezbs-page-title-class wp-ezbs-title-class' . '">';
	
	  echo get_the_title()
	
	echo '</' . sanitize_text_field($arr_page_content_center['markup']['title_tag']) . '>'
  echo '</header>';

  WP_ezMethods::ez_gtp( $arr_page_content_center['tp']['title_below']['slug'], $arr_page_content_center['tp']['title_below']['name'], $arr_page_content_center['tp']['title_below']['active'] );

  echo '<span class="' . sanitize_text_field($arr_page_content_center['markup']['content_class']) . 'wp-ezbs-the-content wp-ezbs-page-the-content">';
  /**
   * FYI: echo get_the_content(); -  mucked with some shortcodes so we'll go with the_content()
   */
  the_content();

  echo '</span> <!-- / #wp-ezbs-the-content --> ';
}