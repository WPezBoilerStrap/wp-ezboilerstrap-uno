<?php
/** 
 * The very bottom row before the page ends. 
 *
 * Long description TODO (@link http://)
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
 * --- 21 August 2014 = Ready.
 */

 
$arr_footer_bottom = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_footer_bottom['active']) ){

  echo '<div class="' . sanitize_text_field($arr_footer_bottom['markup']['container_class']) . '">';
    echo '<p class="' . sanitize_text_field($arr_footer_bottom['markup']['left_class']) . '">' . sanitize_text_field($arr_footer_bottom['markup']['left_text']). '</p>';
    echo '<p class="' . sanitize_text_field($arr_footer_bottom['markup']['right_class']) . '"><a href="#">' . sanitize_text_field($arr_footer_bottom['markup']['right_text']) . '</a></p>';
  echo '</div>';
}