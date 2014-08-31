<?php
/** 
 * Wrapper for the primary partsof the index page
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

$arr_index_content_center = ezbsModl::get( basename(__FILE__, '.php') );

if ( WP_ezMethods::ez_true($arr_index_content_center['active']) ){

  echo '<div class="' . sanitize_text_field($arr_index_content_center['markup']['wrap_class']) . ' wp-ezbs-content-center' . '">';

  
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['archive_header']['slug'], $arr_index_content_center['tp']['archive_header']['name'], $arr_index_content_center['tp']['archive_header']['active'] );		
				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['next_prev']['slug'], $arr_index_content_center['tp']['next_prev']['name'], $arr_index_content_center['tp']['next_prev']['active'] );		
				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['sort']['slug'], $arr_index_content_center['tp']['sort']['name'], $arr_index_content_center['tp']['sort']['active'] );		
			
  if ( have_posts()) {
  
    while ( have_posts() ) : the_post(); 
	  
	  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['have_posts']['slug'], $arr_index_content_center['tp']['have_posts']['name'], $arr_index_content_center['tp']['have_posts']['active'] );
						
    endwhile;
  } else {
  
    //TODO??
  }
				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['next_prev']['slug'], $arr_index_content_center['tp']['next_prev']['name'], $arr_index_content_center['tp']['next_prev']['active'] );		

  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['content_below_above']['slug'], $arr_index_content_center['tp']['content_below_above']['name'], $arr_index_content_center['tp']['content_below_above']['active'] );

				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['content_below']['slug'], $arr_index_content_center['tp']['content_below']['name'], $arr_index_content_center['tp']['content_below']['active'] );
				
  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['content_below_below']['slug'], $arr_index_content_center['tp']['content_below_below']['name'], $arr_index_content_center['tp']['content_below_below']['active'] );
								
echo '</div>'; // close wrap
}
