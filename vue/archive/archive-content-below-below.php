<?php
/** 
 * Archive Content Below Below
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

$arr_archive_content_below_below = ezbsModl::get( basename(__FILE__, '.php') );

if ( WP_ezMethods::ez_true($arr_archive_content_below_below['active']) ){

  echo '<p>- - TODO: archive / ' . basename(__FILE__, '.php') . ' - - </p>';

}