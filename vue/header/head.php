<?php
/** 
 * The <head>...</head> stuff
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
 * --- 21 August 2014 - Ready
 */

 
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php
$arr_head = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_head['active']) && $arr_head['active'] === false ){
?>


  <head>

  <title><?php wp_title("",true); ?></title>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php 

  //TODO - make this part of ezCLasses
  if ( is_singular() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
  } 
  ?>
  
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-57-precomposed.png">

  <!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	
<?php 

wp_head(); 

WP_ezMethods::ez_gtp( $arr_head['tp']['before_head_tag_close']['slug'], $arr_head['tp']['before_head_tag-close']['name'], $arr_head['tp']['before_head-tag_close']['active'] );

?>	

</head>

<?php
}