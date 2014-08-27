<?php
/** 
 * Wraps the layout objects / template parts that make up the main header layout area
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

/**
 * == Change Log == 
 *
 * --- 20 August 2014 = Ready.
 */
 
 
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php
$arr_header_main_wrap = ezbsModl::get( basename(__FILE__, '.php') ); 	

if ( isset($arr_header_main_wrap['active']) && $arr_header_main_wrap['active'] === true ) { 	
?>
<div class="container">
  <div class="row">
				
			<?php 
			
			WP_ezMethods::ez_gtp( $arr_header_main_wrap['tp']['logo']['slug'], $arr_header_main_wrap['tp']['logo']['name'], $arr_header_main_wrap['tp']['logo']['active'] );
			
			WP_ezMethods::ez_gtp( $arr_header_main_wrap['tp']['main']['slug'], $arr_header_main_wrap['tp']['main']['name'], $arr_header_main_wrap['tp']['main']['active'] );

			?> 
			
  </div><!-- /.row -->
</div><!-- /.containter-->

<?php
}