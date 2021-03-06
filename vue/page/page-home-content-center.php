<?php
/** 
 * Render the primary content for page-home.php
 *
 * TODO - Long Description @link http://)
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

/**
 * == Change Log == 
 *
 * --- 30 August 2014 (0.5.0) = Ready.
 *
 * ------------------------------------------------------------------------------------------------------
 */

$arr_page_home_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_page_home_content_center, 'active') ){
  
  echo '<div class="' . esc_attr($arr_page_home_content_center['markup']['wrap_class']) . ' wp-ezbs-content-center' . '">';
    
	WPezHelpers::ez_gtp( $arr_page_home_content_center['tp']['title_above']['slug'], $arr_page_home_content_center['tp']['title_above']['name'], $arr_page_home_content_center['tp']['title_above']['active'] );
	
	echo '<' . esc_attr($arr_page_home_content_center['markup']['title_tag']) . ' class="' . esc_attr($arr_page_home_content_center['markup']['title_class']) .' wp-ezbs-page-title wp-ezbs-page-home-title">' . get_the_title() . '</' . esc_attr($arr_page_home_content_center['markup']['title_tag']). '>';

	WPezHelpers::ez_gtp( $arr_page_home_content_center['tp']['title_below']['slug'], $arr_page_home_content_center['tp']['title_below']['name'], $arr_page_home_content_center['tp']['title_below']['active'] );

	WPezHelpers::ez_gtp( $arr_page_home_content_center['tp']['content_above']['slug'], $arr_page_home_content_center['tp']['content_above']['name'], $arr_page_home_content_center['tp']['content_above']['active'] );

	echo get_the_content();

	WPezHelpers::ez_gtp( $arr_page_home_content_center['tp']['content_below']['slug'], $arr_page_home_content_center['tp']['content_below']['name'], $arr_page_home_content_center['tp']['content_below']['active'] );

  echo '</div>  <!-- / .span# -->';
}