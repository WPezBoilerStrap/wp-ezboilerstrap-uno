<?php
/** 
 * Child layout object of 404.php
 *
 * "Includes": title_above, title_below and content_below layout objects, as well as template_part 404-content-center (@link http://)
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0 
 */
 
/*
 * == Change Log ==
 *
 * -- 31 August 2014 - Ready!
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_404_content_center_wrap = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_404_content_center_wrap['active']) ){

  echo '<div class="' . sanitize_text_field($arr_404_content_center_wrap['markup']['class']) . ' wp-ezbs-content-center-wrap">';

    WPezHelpers::ez_gtp( $arr_404_content_center_wrap['tp']['title_above']['slug'], $arr_404_content_center_wrap['tp']['title_above']['name'], $arr_404_content_center_wrap['tp']['title_above']['active'] );

	WPezHelpers::ez_gtp( $arr_404_content_center_wrap['tp']['main']['slug'], $arr_404_content_center_wrap['tp']['main']['name'], $arr_404_content_center_wrap['tp']['main']['active'] );
		
	WPezHelpers::ez_gtp( $arr_404_content_center_wrap['tp']['title_below']['slug'], $arr_404_content_center_wrap['tp']['title_below']['name'], $arr_404_content_center_wrap['tp']['title_below']['active'] );
	
	WPezHelpers::ez_gtp( $arr_404_content_center_wrap['tp']['content_below']['slug'], $arr_404_content_center_wrap['tp']['content_below']['name'], $arr_404_content_center_wrap['tp']['content_below']['active'] );

  echo '</div> <!-- / .span# -->';
}