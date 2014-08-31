<?php
/*
 * Stanndard WordPress index.php
 *
 * TODO - Long Description @link http://)
 *
 * PHP version 5.3
 *
 * LICENSE: MIT
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <@ChiefAlchemist1> for Alchemy United <@AlchemyUnited>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 30 August 2014 (0.5.0) = Ready.
 *
 * ------------------------------------------------------------------------------------------------------
 */
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

get_header();

$arr_index = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_index['active'])){

  WP_ezMethods::ez_gtp( $arr_index['tp']['index_parent']['slug'], $arr_index['tp']['index_parent']['name'], $arr_index['tp']['index_parent']['active'] );

}

get_footer(); 