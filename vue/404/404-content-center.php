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
 * -- 19 August 2013 - Ready!
 */

?>
404-content-center.php
<?php

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_404_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_404_content_center['active']) || $arr_404_content_center['active'] !== false ){

	echo '<h1>' . sanitize_text_field( $arr_404_content_center['headline'] ) .  '</h1>';
	echo '<p class="lead">' . sanitize_text_field( $arr_404_content_center['lead'] ) . '</p>';

	echo '<div class="' . sanitize_text_field($arr_404_content_center['css']['class'])  . ' wp-ezbs-content-center wp-ezbs-404-content-center">';
	  
	/**
     * TODO - clean up ezClass Theme Search class
	 * $obj_ezc_theme_search = wpezThemeClassesSearch::ezc_get_instance();
	 * $arr_get_search_form_ez = $obj_ezc_theme_search->get_search_form_ez( $obj_ezbs_options->property_get('_arr_searchform_404') );
	 */
	if ( isset($arr_404_content_center['searchform_custom']) && $arr_404_content_center['searchform_custom'] === true ){

	  WP_ezMethods::ez_gtp( $arr_404_content_center['tp']['searchform_custom']['slug'], $arr_404_content_center['tp']['searchform_custom']['name'], $arr_404_content_center['tp']['searchform_custom']['active'] );

	}else{

	  get_search_form();
	}
	
	echo '</div><!--/.well -->';
}
