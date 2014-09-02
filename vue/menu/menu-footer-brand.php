<?php
/*
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
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

$arr_menu_footer_brand = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_menu_footer_brand['active']) ){	

  echo '<span id="' . sanitize_text_field($arr_menu_footer_brand['markup']['wrap_id']) . '" class="' . sanitize_text_field($arr_menu_footer_brand['markup']['wrap_class']) . ' wp-ezbs-menu-class-brand wp-ezbs-menu-class-brand-global' . '">';

	echo '<span class="' . sanitize_text_field($arr_menu_footer_brand['markup']['title_class']) . '">' . sanitize_text_field($arr_menu_footer_brand['markup']['title']) . '</span>';
	
  echo '</span>';	
}