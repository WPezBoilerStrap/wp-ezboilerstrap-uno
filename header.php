<?php
/** 
 * Standard "required" WordPress header.php
 *
 * TODO - long desc
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * 
 */
 
/*
 * == Change Log ==
 *
 * --- 21 August 2014 - Ready
 */

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

$arr_header = ezbsModl::get( basename(__FILE__, '.php') ); 
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php

WPezHelpers::ez_gtp( $arr_header['tp']['head']['slug'], $arr_header['tp']['head']['name'], $arr_header['tp']['head']['active'] );

wp_head();

WPezHelpers::ez_gtp( $arr_header['tp']['before_head_tag_close']['slug'], $arr_header['tp']['before_head_tag_close']['name'], $arr_header['tp']['before_head_tag_close']['active'] );
?>
</head>
<?php
  $str_body_inline = '';
  if ( isset($arr_header['markup']['body_inline']) ){
    $str_body_inline = WPezHelpers::ez_pairs_to_string($arr_header['markup']['body_inline']);
  }
?>
<body <?php body_class(); echo ' ' . $str_body_inline; ?>>

<?php

WPezHelpers::ez_gtp( $arr_header['tp']['header_parent']['slug'], $arr_header['tp']['header_parent']['name'], $arr_header['tp']['header_parent']['active'] );