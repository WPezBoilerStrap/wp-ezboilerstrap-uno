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
 * --- 3 Sept 2013 - Ready
 */

 
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_single_content_center_wrap = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_single_content_center_wrap, 'active') ){

  echo '<div class="' . esc_attr($arr_single_content_center_wrap['markup']['wrap_class']) . ' wp-ezbs-content-center-wrap wp-ezbs-single-content-center-wrap' . '">';

    WPezHelpers::ez_gtp( $arr_single_content_center_wrap['tp']['title_above']['slug'], $arr_single_content_center_wrap['tp']['title_above']['name'], $arr_single_content_center_wrap['tp']['title_above']['active'] );

	WPezHelpers::ez_gtp( $arr_single_content_center_wrap['tp']['main']['slug'], $arr_single_content_center_wrap['tp']['main']['name'], $arr_single_content_center_wrap['tp']['main']['active'] );
			
	WPezHelpers::ez_gtp( $arr_single_content_center_wrap['tp']['content_below']['slug'], $arr_single_content_center_wrap['tp']['content_below']['name'], $arr_single_content_center_wrap['tp']['content_below']['active'] );

  echo '</div>';

}