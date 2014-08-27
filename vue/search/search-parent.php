<?php
/** 
 * Inner template part of for search
 *
 * TODO
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
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php

$arr_search_parent = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_search_parent['active']) || $arr_search_parent['active'] !== false ){

  WP_ezMethods::ez_gtp( $arr_search_parent['tp']['breadcrumbs']['slug'], $arr_search_parent['tp']['breadcrumbs']['name'], $arr_search_parent['tp']['breadcrumbs']['active'] );
  
  WP_ezMethods::ez_gtp( $arr_search_parent['tp']['content_above']['slug'], $arr_search_parent['tp']['content_above']['name'], $arr_search_parent['tp']['content_above']['active'] );

  ?>
  
  <div class="container">
    <div class="row content">
	
	<?php
	
	WP_ezMethods::ez_gtp( $arr_search_parent['tp']['aside_left']['slug'], $arr_search_parent['tp']['aside_left']['name'], $arr_search_parent['tp']['aside_left']['active'] );

	WP_ezMethods::ez_gtp( $arr_search_parent['tp']['main']['slug'], $arr_search_parent['tp']['main']['name'], $arr_search_parent['tp']['main']['active'] );

	WP_ezMethods::ez_gtp( $arr_search_parent['tp']['aside_right']['slug'], $arr_search_parent['tp']['aside_right']['name'], $arr_search_parent['tp']['aside_right']['active'] );

	?>
	</div> <!-- / .row .content -->
  </div> <!-- / .container -->
<?php 

}