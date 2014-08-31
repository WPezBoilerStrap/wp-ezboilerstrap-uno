<?php
/** 
 * Breadcrumb navigation
 *
 * TODO - Long Description @link http://)
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
 * --- 30 August 2014 = Ready.
 *
 * ------------------------------------------------------------------------------------------------------
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_breadcrumbs = ezbsModl::get( basename(__FILE__, '.php') ); 

if (  isset($arr_breadcrumbs['active']) && $arr_breadcrumbs['active'] === true ){
  
  echo '<div class="container">';
    echo '<div class="row">';
	  echo '<div class="' . sanitize_text_field($arr_breadcrumbs['markup']['class']) . ' wp-ezbs-breadcrumbs' . '">';
	    echo '<nav>';
		  echo $arr_breadcrumbs['markup']['control'];
	    echo '</nav>';
	  echo '</div>';
	echo '</div><!--/.row -->';
  echo '</div><!--/.container -->';
}