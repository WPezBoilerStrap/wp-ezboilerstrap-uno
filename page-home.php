<?php
/** 
 * A custom layout for the home page. 
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

$arr_page_home = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_page_home, 'active') ){

 WPezHelpers::ez_gtp( $arr_page_home['tp']['home_parent']['slug'], $arr_page_home['tp']['home_parent']['name'], $arr_page_home['tp']['home_parent']['active'] );
}
get_footer();