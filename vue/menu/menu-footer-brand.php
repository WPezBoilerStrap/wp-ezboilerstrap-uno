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

if ( isset($arr_menu_footer_brand['active']) || $arr_menu_footer_brand['active'] !== false ){	
?>

<span id="wp-ezbs-header-menu-global-class-brand" class="wp-ezbs-menu-class-brand wp-ezbs-header-menu-global-class-brand">

	<span class="brand">Menu Footer Brand</span>

</span>	

<?php
}