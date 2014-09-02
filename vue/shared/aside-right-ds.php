<?php
/** 
 * Aside Right layout object with five (5) predefined dynamic sidebar (widget) slots
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
 * --- 31 August 2014 = Ready.
 */
?>

<?php

$arr_aside_right_ds = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_aside_right_ds['active']) )  {  

  foreach ( $arr_aside_right_ds['ds'] as $str_key => $arr_value){
	
    if ( WP_ezMethods::ez_ias( $arr_aside_right_ds['ds'][$str_key]['index'], $arr_aside_right_ds['ds'][$str_key]['active']) ) {
	
      echo '<div class="' . sanitize_text_field($arr_footer_below['ds'][$str_key]['markup']['class']) . ' wp-ezbs-aside wp-ezbs-aside-right' . '">';
	    WP_ezMethods::ez_ds($arr_aside_right_ds['ds'][$str_key]['index'], $arr_aside_right_ds['ds'][$str_key]['active'] );
	  echo '</div>';
    }		
  }
}