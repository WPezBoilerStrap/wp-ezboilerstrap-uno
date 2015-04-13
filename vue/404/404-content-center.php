<?php
/** 
 * Child layout object of 404-content-center-wrap.php
 *
 * "Includes": Theme ezClasses Search: get_search_form_ez (@link http://)
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

$arr_404_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_404_content_center, 'active') ){

	echo '<' . esc_attr( $arr_404_content_center['markup']['title_tag'] ) . ' class="' . esc_attr( $arr_404_content_center['markup']['title_class'] ). '">' . esc_attr( $arr_404_content_center['markup']['title'] ) .  '</' . esc_attr( $arr_404_content_center['markup']['title_tag'] ) . '>';
	echo '<p class="' . esc_attr( $arr_404_content_center['markup']['lead_class'] ) . '">' . esc_attr( $arr_404_content_center['markup']['lead'] ) . '</p>';

	echo '<div class="' . esc_attr($arr_404_content_center['markup']['inner_wrap_class'])  . ' wp-ezbs-content-center wp-ezbs-404-content-center">';
	  
	/**
     * TODO - clean up ezClass Theme Search class
	 * $obj_ezc_theme_search = wpezThemeClassesSearch::ez_new();
	 * $arr_get_search_form_ez = $obj_ezc_theme_search->get_search_form_ez( $obj_ezbs_options->property_get('_arr_searchform_404') );
	 */
	if ( WPezHelpers::ez_true($arr_404_content_center, 'searchform_custom') ){

	  WPezHelpers::ez_gtp( $arr_404_content_center['tp']['searchform_custom']['slug'], $arr_404_content_center['tp']['searchform_custom']['name'], $arr_404_content_center['tp']['searchform_custom']['active'] );

	} else {

	  get_search_form();
	}
	
	echo '</div>';
}