<?php
/** 
 * For Above the title
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

$arr_title_above = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_title_above['active']) ){
  /**
   * In Admin > Appearance > Widgets, has a widget been placed in the defined dynamic sidebar && is the bool status === true
   */
  if ( is_active_sidebar($arr_title_above['ds']['one']['index']) && $arr_title_above['ds']['one']['active'] !== false ) {
  
    echo '<div class="' . $arr_title_above['ds']['one']['markup']['class'] . ' wp-ezbs-title-above' . '">';
	  dynamic_sidebar($arr_title_above['ds']['one']['index']);
	echo '</div>';
  }
}