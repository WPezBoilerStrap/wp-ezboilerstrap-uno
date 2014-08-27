<?php
/** 
 * Renders main dynamic sidebar (widget) in the layout area main footer
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
 * --- 20 August 2014 = Ready.
 */
?>

<?php
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_footer_main = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_footer_main['active']) && $arr_footer_main['active'] === true ){

  foreach ( $arr_footer_main['ds'] as $str_key => $arr_value){
  
    if ( WP_ezMethods::ez_ias( $arr_footer_main['ds'][$str_key]['index'], $arr_footer_main['ds'][$str_key]['active']) ) {
  
      echo '<div class="' . sanitize_text_field($arr_footer_main['ds'][$str_key]['css']['class']) . ' wp-ezbs-header-above' . '">';
	    WP_ezMethods::ez_ds($arr_footer_main['ds'][$str_key]['index'], $arr_footer_main['ds'][$str_key]['active'] );
	  echo '</div>';
    }
  }
}