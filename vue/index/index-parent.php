<?php
/**
 * The first proper vue for index-centric content
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

$arr_index_parent = ezbsModl::get( basename(__FILE__, '.php') );

if ( WPezHelpers::ez_true($arr_index_parent, 'active') ){

  WPezHelpers::ez_gtp( $arr_index_parent['tp']['breadcrumbs']['slug'], $arr_index_parent['tp']['breadcrumbs']['name'], $arr_index_parent['tp']['breadcrumbs']['active'] );
  
  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WPezHelpers::ez_gtp( $arr_index_parent['tp']['content_above_above']['slug'], $arr_index_parent['tp']['content_above_above']['name'], $arr_index_parent['tp']['content_above_above']['active'] );

  /**
   * This is the standard content_above
   */
  WPezHelpers::ez_gtp( $arr_index_parent['tp']['content_above']['slug'], $arr_index_parent['tp']['content_above']['name'], $arr_index_parent['tp']['content_above']['active'] );
  
  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WPezHelpers::ez_gtp( $arr_index_parent['tp']['content_above_below']['slug'], $arr_index_parent['tp']['content_above_below']['name'], $arr_index_parent['tp']['content_above_below']['active'] );


  echo '<div class="' . esc_attr($arr_index_parent['markup']['container_class']) . '">';
    echo '<div class="' . esc_attr($arr_index_parent['markup']['row_class']) . '">';

    WPezHelpers::ez_gtp( $arr_index_parent['tp']['aside_left']['slug'], $arr_index_parent['tp']['aside_left']['name'], $arr_index_parent['tp']['aside_left']['active'] );

    WPezHelpers::ez_gtp( $arr_index_parent['tp']['main']['slug'], $arr_index_parent['tp']['main']['name'], $arr_index_parent['tp']['main']['active'] );

    WPezHelpers::ez_gtp( $arr_index_parent['tp']['aside_right']['slug'], $arr_index_parent['tp']['aside_right']['name'], $arr_index_parent['tp']['aside_right']['active'] );
			
    echo '</div>';
  echo '</div>';
}