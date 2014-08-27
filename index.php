<?php
/*
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
* - CHANGE LOG ---
*
* -- 4 Mar 2013 = Ready
*
* --------------------------------------------
*/

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php 

get_header();

$arr_index = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_index['active']) &&  $arr_index['active'] === true ){

  WP_ezMethods::ez_gtp( $arr_index['tp']['index_parent']['slug'], $arr_index['tp']['index_parent']['name'], $arr_index['tp']['index_parent']['active'] );

}

get_footer(); 