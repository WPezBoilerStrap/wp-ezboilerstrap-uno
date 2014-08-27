<?php
/** 
 * Archive Content Above Below
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

$arr_archive_content_above_below = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_archive_content_above_below['active']) &&  $arr_archive_content_above_below['active'] === true ){

  echo '<p>- - TODO: archive / ' . basename(__FILE__, '.php') . ' - - </p>';

}