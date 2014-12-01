<?php
/** 
 * Standard "required" WordPress page.php
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
 * --- 4 August 2013 - Ready
 */
 
// No WP? Die! Now!!
if ( ! defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

get_header();

$arr_page = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_page['active']) ){

  WPezHelpers::ez_gtp( $arr_page['tp']['page_parent']['slug'], $arr_page['tp']['page_parent']['name'], $arr_page['tp']['page_parent']['active'] );

}

get_footer(); 