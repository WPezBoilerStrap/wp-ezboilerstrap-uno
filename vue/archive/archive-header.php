<?php
/** 
 * Archive header
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

$arr_archive_header = ezbsModl::get( basename(__FILE__, '.php') );

if ( WPezHelpers::ez_true($arr_archive_header, 'active' ) ){

  echo '<section>';
    echo '<div class="' . esc_attr($arr_archive_header['markup']['wrap_class']) . '">';
	
      echo '<' . esc_attr($arr_archive_header['markup']['title_tag']) . ' class="' . esc_attr($arr_archive_header['markup']['title_class']) . ' wp-ezbs-archive-header' . '">';
	    echo esc_attr($arr_archive_header['markup']['title']);
	  echo '</' . esc_attr($arr_archive_header['markup']['title_tag']) .  '>';

      if ( WPezHelpers::ez_true($arr_archive_header, 'markup') && WPezHelpers::ez_true($arr_archive_header['markup'], 'description_active' ) ){
	
        echo '<div class="' . esc_attr($arr_archive_header['markup']['description_class']) . ' wp-ezbs-archive-description' . '">';
		  echo esc_attr($arr_archive_header['markup']['description']);
		echo '</div>';
      }
	  
    echo '</div>'; // close wrap
  echo '</section>';
}