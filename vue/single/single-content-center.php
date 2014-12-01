<?php
/** 
 * Single (blog) post
 *
 * Note: Don't want a dedicated page-home.php but don't want to delete it (yet) either? This page can be bypassed using the ezClasses Theme Setup bypass_page_home_template() method.
 *
 * PHP version 5.3
 *
 * LICENSE: MIT 
 *
 * @package WPezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 31 August 2014 - Ready
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_single_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_single_content_center['active']) ){	

  echo '<div class="' . sanitize_text_field($arr_single_content_center['markup']['wrap_class']) . ' wp-ezbs-column-center' . '">';
  
    WPezHelpers::ez_gtp( $arr_single_content_center['tp']['title_above']['slug'], $arr_single_content_center['tp']['title_above']['name'], $arr_single_content_center['tp']['title_above']['active'] );

    echo '<' . sanitize_text_field($arr_single_content_center['markup']['title_tag']) . ' class="' . sanitize_text_field($arr_single_content_center['markup']['title_class']) . '">';
      echo get_the_title();
    echo '</' . sanitize_text_field($arr_single_content_center['markup']['title_tag']) . '>';

    WPezHelpers::ez_gtp( $arr_single_content_center['tp']['title_below']['slug'], $arr_single_content_center['tp']['title_below']['name'], $arr_single_content_center['tp']['title_below']['active'] );

    /**
     * FYI: echo get_the_content(); -  mucked with some shortcodes so we'll go with the_content()
     */
     the_content();
   
     echo '<h4>TODO - Meta + tags and categories</h4>';
     echo '<h4>TODO - Comments</h4>';

     WPezHelpers::ez_gtp( $arr_single_content_center['tp']['single_next_prev']['slug'], $arr_single_content_center['tp']['single_next_prev']['name'], $arr_single_content_center['tp']['single_next_prev']['active'] );

     WPezHelpers::ez_gtp( $arr_single_content_center['tp']['content_below']['slug'], $arr_single_content_center['tp']['content_below']['name'], $arr_single_content_center['tp']['content_below']['active'] );

    echo '</div>';
}