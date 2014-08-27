<?php
/** 
 * Example of a main header with a logo
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

$arr_header_main_logo = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_header_main_logo['active']) && $arr_header_main_logo['active'] === true ){
?>
<div class="<?php echo sanitize_text_field($arr_header_main_logo['css']['class_left'])?>">
  <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <img style="width:50px" src="<?php echo get_stylesheet_directory_uri() ?>/screenshot.png" alt="<?php echo get_bloginfo( 'name', 'display' ) . ' - ' . get_bloginfo( 'description', 'display' ) ?>">
  </a>
</div>	

<div class="<?php echo sanitize_text_field($arr_header_main_logo['css']['class_right'])?>">
  <h2><?php echo get_bloginfo( 'name', 'display' ); ?></h2>
  <h5><?php echo get_bloginfo( 'description', 'display' ); ?></h5>
</div>

<?php
}