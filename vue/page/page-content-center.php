<?php
/** 
 * A page's primary content
 *
 * TODO
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
 * --- 4 August 2013 - Ready
 */
  
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_page_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_page_content_center['active']) || $arr_page_content_center['active'] !== false ){
?>
<header>
<h1 class="<?php echo sanitize_text_field($arr_page_content_center['markup']['headline_class']) . ' wp-ezbs-page-h1-class wp-ezbs-h1-class'?>"><?php the_title();?></h1>
</header>

<?php 

WP_ezMethods::ez_gtp( $arr_page_content_center['tp']['title_below']['slug'], $arr_page_content_center['tp']['title_below']['name'], $arr_page_content_center['tp']['title_below']['active'] );

echo '<span class="' . sanitize_text_field($arr_page_content_center['markup']['content_class']) . 'wp-ezbs-the-content wp-ezbs-the-content-page">';
/*
 * FYI: echo get_the_content(); -  mucked with some shortcodes so we'll go with the_content()
 */
the_content();

echo '</span> <!-- / #wp-ezbs-the-content --> ';

}