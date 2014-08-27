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

$arr_index_parent = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_index_parent['active']) &&  $arr_index_parent['active'] === true ){

  WP_ezMethods::ez_gtp( $arr_index_parent['tp']['breadcrumbs']['slug'], $arr_index_parent['tp']['breadcrumbs']['name'], $arr_index_parent['tp']['breadcrumbs']['active'] );
  
  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WP_ezMethods::ez_gtp( $arr_index_parent['tp']['content_above_above']['slug'], $arr_index_parent['tp']['content_above_above']['name'], $arr_index_parent['tp']['content_above_above']['active'] );

  /**
   * This is the standard content_above
   */
  WP_ezMethods::ez_gtp( $arr_index_parent['tp']['content_above']['slug'], $arr_index_parent['tp']['content_above']['name'], $arr_index_parent['tp']['content_above']['active'] );
  
  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WP_ezMethods::ez_gtp( $arr_index_parent['tp']['content_above_below']['slug'], $arr_index_parent['tp']['content_above_below']['name'], $arr_index_parent['tp']['content_above_below']['active'] );

?>

  <div class="container clearfix">
    <div class="row content">

<?php 

    WP_ezMethods::ez_gtp( $arr_index_parent['tp']['aside_left']['slug'], $arr_index_parent['tp']['aside_left']['name'], $arr_index_parent['tp']['aside_left']['active'] );

    WP_ezMethods::ez_gtp( $arr_index_parent['tp']['main']['slug'], $arr_index_parent['tp']['main']['name'], $arr_index_parent['tp']['main']['active'] );

    WP_ezMethods::ez_gtp( $arr_index_parent['tp']['aside_right']['slug'], $arr_index_parent['tp']['aside_right']['name'], $arr_index_parent['tp']['aside_right']['active'] );

?>
			
    </div> <!-- / .row .content -->
  </div> <!-- / .container -->
	
<?php 
}