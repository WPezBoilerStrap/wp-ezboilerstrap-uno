<?php
/** 
 * Global menu to the left
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

$arr_menu_global_brand = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_menu_global_brand['active']) || $arr_menu_global_brand['active'] !== false ){	
?>

<span id="wp-ezbs-header-menu-global-class-brand" class="wp-ezbs-menu-class-brand wp-ezbs-header-menu-global-class-brand">

	<span class="brand">Menu Global Brand</span>

</span>	

<?php
}