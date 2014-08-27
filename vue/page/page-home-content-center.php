<?php
/** 
 * Render the primary content for page-home.php
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
 * --- 21 August 2014 - Ready
 */
?>

<?php

$obj_ezbs_layout_objects = ezbsLayoutObjects::ezc_get_instance();
$str_source_layout_object = basename(__FILE__, '.php');			

$arr_page_home_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_page_home_content_center['active']) || $arr_page_home_content_center['active'] !== false ){
  
  echo '<div class="' . sanitize_text_field($arr_page_home_content_center['css']['class']) . ' wp-ezbs-column-center' . '">';

		WP_ezMethods::ez_gtp( $arr_page_home_content_center['tp']['title_above']['slug'], $arr_page_home_content_center['tp']['title_above']['name'], $arr_page_home_content_center['tp']['title_above']['active'] );
		
		echo '<h1>' . get_the_title() . '</h1>';

		WP_ezMethods::ez_gtp( $arr_page_home_content_center['tp']['title_below']['slug'], $arr_page_home_content_center['tp']['title_below']['name'], $arr_page_home_content_center['tp']['title_below']['active'] );

		WP_ezMethods::ez_gtp( $arr_page_home_content_center['tp']['content_above']['slug'], $arr_page_home_content_center['tp']['content_above']['name'], $arr_page_home_content_center['tp']['content_above']['active'] );

		echo get_the_content();

		WP_ezMethods::ez_gtp( $arr_page_home_content_center['tp']['content_below']['slug'], $arr_page_home_content_center['tp']['content_below']['name'], $arr_page_home_content_center['tp']['content_below']['active'] );

  echo '</div>  <!-- / .span# -->';

}