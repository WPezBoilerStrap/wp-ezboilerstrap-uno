<?php
/** 
 * Aside Left layout object with five (5) predefined dynamic sidebar (widget) slots
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
 * --- 19 August 2014 = Ready.
 */
?>

<?php

$arr_aside_left_ds = ezbsModl::get( basename(__FILE__, '.php') ); 

if( WPezHelpers::ez_true($arr_aside_left_ds['active']) )  {  

  foreach ( $arr_aside_left_ds['ds'] as $str_key => $arr_value){
		
    if ( WPezHelpers::ez_ias( $arr_aside_left_ds['ds'][$str_key]['index'], $arr_aside_left_ds['ds'][$str_key]['active']) ) {
	
      echo '<div class="' . sanitize_text_field($arr_footer_below['ds'][$str_key]['markup']['class']) . ' wp-ezbs-header-above' . '">';
	    WPezHelpers::ez_ds($arr_aside_left_ds['ds'][$str_key]['index'], $arr_aside_left_ds['ds'][$str_key]['active'] );
	  echo '</div>';
    }		
  }
}
?>
