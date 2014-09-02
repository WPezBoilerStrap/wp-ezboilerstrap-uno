<?php
/** 
 * A custom layout for the 404 page. 
 *
 * Note: Don't want a dedicated page-home.php but don't want to delete it (yet) either? This page can be bypassed using the ezClasses Theme Setup bypass_page_home_template() method.
 *
 * PHP version 5.3
 *
 * LICENSE: MIT 
 *
 * @package WPezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 19 August 2014 - Ready
 */
?>

<?php

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

get_header(); 

$arr_404 = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_404['active']) ){

  WP_ezMethods::ez_gtp( $arr_404['tp']['404_parent']['slug'], $arr_404['tp']['404_parent']['name'], $arr_404['tp']['404_parent']['active'] );
}

get_footer();