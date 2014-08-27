<?php
/** 
 * Standard required WP footer.php
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
 * --- 
 */
?>


<?php

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_footer = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_footer['active']) && $arr_footer['active'] === true ){	

  WP_ezMethods::ez_gtp( $arr_footer['tp']['footer_parent']['slug'], $arr_footer['tp']['footer_parent']['name'], $arr_footer['tp']['footer_parent']['active'] );

  // And now for the tradition wp_footer where WP does its necessary footer magic
  wp_footer(); 

  echo '</body>';
echo '</html> <!-- closin em up boss -->';
}