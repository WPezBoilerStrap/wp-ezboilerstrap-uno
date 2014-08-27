<?php
/** 
 * Inner template part of for page-home
 *
 * Note: Don't want a dedicated page-home.php but don't want to delete it (yet) either? This page can be bypassed using the ezClasses Theme Setup bypass_page_home_template() method.
 *
 * PHP version 5.3
 *
 * LICENSE: MIT 
 *
 * @package WPezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 19 August 2014 - Ready
 */
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php

$arr_page_home_parent = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_page_home_parent['active']) || $arr_page_home_parent['active'] !== false ){
?>
	<div class="<?php  echo sanitize_text_field($arr_page_home_parent['markup']['wrap_class']) ?>">
		<div class="container">
			<div class="row content">

				<?php
				
				WP_ezMethods::ez_gtp( $arr_page_home_parent['tp']['aside_left']['slug'], $arr_page_home_parent['tp']['aside_left']['name'], $arr_page_home_parent['tp']['aside_left']['active'] );

				// TODO - make this a modl
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				
					WP_ezMethods::ez_gtp( $arr_page_home_parent['tp']['main']['slug'], $arr_page_home_parent['tp']['main']['name'], $arr_page_home_parent['tp']['main']['active'] );
			
				endwhile; endif; 
				
				WP_ezMethods::ez_gtp( $arr_page_home_parent['tp']['aside_right']['slug'], $arr_page_home_parent['tp']['aside_right']['name'], $arr_page_home_parent['tp']['aside_right']['active'] );

				?>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.jumbotron -->
<?
}