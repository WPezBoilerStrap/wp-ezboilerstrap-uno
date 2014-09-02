<?php
/** 
 * Example of a main header without a logo. This is a TODO
 *
 * You're probebly going to want to do your own
 *
 * PHP version 5.3
 *
 * LICENSE: TODO 
 *
 * @package WordPress
 * @subpackage WPezBoilerStrap
 * @since 0.5.0
 * @license TODO
 */
 
/**
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

$arr_header_main_logo_no = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WP_ezMethods::ez_true($arr_header_main_logo_no['active']) ){

?>

<div class="<?php echo sanitize_text_field($arr_header_main_logo_no['css']['class_left'])?>">
	<a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		<h2><?php echo get_bloginfo( 'name', 'display' ); ?></h2>
		<h5><?php echo get_bloginfo( 'description', 'display' ); ?></h5>
	</a>
</div>	

<div class="<?php echo sanitize_text_field($arr_header_main_logo_no['css']['class_right'])?>">
</div>

<?php
}