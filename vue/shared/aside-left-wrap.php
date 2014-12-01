<?php
/** 
 * Wrapper for the Aside Left
 *
 * Chances are this will remain constant, while the layout objects within it might change (@link http://)
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
 * --- 30 August 2014 (0.5.0) = Ready.
 *
 * ------------------------------------------------------------------------------------------------------
 */

$arr_aside_left_wrap = ezbsModl::get( basename(__FILE__, '.php') ); 

if( WPezHelpers::ez_true($arr_aside_left_wrap['active']) ){
  
  echo '<aside>';
    echo '<div class="' . sanitize_text_field($arr_aside_left_wrap['markup']['wrap_class']) . ' wp-ezbs-aside-left-wrap wp-ezbs-aside-wrap' . '">';

	  WPezHelpers::ez_gtp( $arr_aside_left_wrap['tp']['main']['slug'], $arr_aside_left_wrap['tp']['main']['name'], $arr_aside_left_wrap['tp']['main']['active'] );
	  
	echo '</div>';
  echo '</aside>';
} 