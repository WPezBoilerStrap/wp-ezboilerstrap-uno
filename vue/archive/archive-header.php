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
 * --- 22 August 2014 - Ready
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_archive_header = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_archive_header['active']) &&  $arr_archive_header['active'] === true ){

  echo '<div class="' . sanitize_text_field($arr_archive_header['markup']['wrap_class']) . '">';
    echo '<h2 class="' . sanitize_text_field($arr_archive_header['markup']['headline_class']) . '">' . sanitize_text_field($arr_archive_header['markup']['tag_title']) . '</h2>';

    if ( isset($arr_archive_header['markup']['description_active']) &&  $arr_archive_header['markup']['description_active'] === true ){
	
      echo '<div class="' . sanitize_text_field($arr_archive_header['markup']['description_class']) . '">' . sanitize_text_field($arr_archive_header['markup']['tag_description']) . '</div>';
    }
	
  echo '</div>'; // close wrap
}