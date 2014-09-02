<?php
/** 
 * Renders main dynamic sidebar (widget) in the layout area above the footer
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

$arr_footer_above = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_footer_above['active']) ){

  foreach ( $arr_footer_above['ds'] as $str_key => $arr_value){

    if ( WP_ezMethods::ez_ias( $arr_footer_above['ds'][$str_key]['index'], $arr_footer_above['ds'][$str_key]['active']) ) {
  
      echo '<div class="' . sanitize_text_field($arr_footer_above['ds'][$str_key]['markup']['class']) . ' wp-ezbs-header-above' . '">';
	    WP_ezMethods::ez_ds($arr_footer_above['ds'][$str_key]['index'], $arr_footer_above['ds'][$str_key]['active'] );
	  echo '</div>';
    }
  }
}