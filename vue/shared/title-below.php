<?php
/** 
 * For Below the title
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
 * --- 30 August 2014 - Ready
 */
?>

<?php
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_title_below = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_title_below['active']) ){

  foreach ( $arr_title_below['ds'] as $str_key => $arr_value){
	
    if ( WP_ezMethods::ez_ias( $arr_title_below['ds'][$str_key]['index'], $arr_title_below['ds'][$str_key]['active']) ) {
	
      echo '<section>';
        echo '<div class="' . anitize_text_field($arr_title_below['ds'][$str_key]['markup']['class']) . ' wp-ezbs-content-above' . '">';
	      dynamic_sidebar($arr_title_below['ds'][$str_key]['index']);
	    echo '</div>';
      echo '</section>';
    }
  }
}