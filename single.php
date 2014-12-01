<?php
/** 
 * Standard "required" WordPress single.php
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
 * --- 24 August 2014 - Ready
 */
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php 

get_header();

$arr_single = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_single['active']) ){

  WPezHelpers::ez_gtp( $arr_single['tp']['single_parent']['slug'], $arr_single['tp']['single_parent']['name'], $arr_single['tp']['single_parent']['active'] );

}

get_footer();