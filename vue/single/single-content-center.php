<?php
/*
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
* --------------------------------------------
* -- single-content-center.php
* --------------------------------------------
*
* - CHANGE LOG ---
*
* -- 4 Mar 2013 = Ready
*
* --------------------------------------------
*/

if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}
?>

<?php

$arr_single_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_single_content_center['active']) || $arr_single_content_center['active'] !== false ){	

?>
  <div class="<?php echo sanitize_text_field($arr_single_content_center['markup']['wrap_class']) ?> .' wp-ezbs-column-center'?>">
  
  <?php
  
  WP_ezMethods::ez_gtp( $arr_single_content_center['tp']['title_above']['slug'], $arr_single_content_center['tp']['title_above']['name'], $arr_single_content_center['tp']['title_above']['active'] );

  ?>
  <h1 class="<?php echo sanitize_text_field($arr_single_content_center['markup']['title_headline_class']) ?>"><?php echo get_the_title(); ?></h1>
  <?php

  WP_ezMethods::ez_gtp( $arr_single_content_center['tp']['title_below']['slug'], $arr_single_content_center['tp']['title_below']['name'], $arr_single_content_center['tp']['title_below']['active'] );

  /**
   * FYI: echo get_the_content(); -  mucked with some shortcodes so we'll go with the_content()
   */
   the_content();
   
   echo '<h4>TODO - Meta + tags and categories</h4>';
   echo '<h4>TODO - Comments</h4>';

   WP_ezMethods::ez_gtp( $arr_single_content_center['tp']['single_next_prev']['slug'], $arr_single_content_center['tp']['single_next_prev']['name'], $arr_single_content_center['tp']['single_next_prev']['active'] );

   WP_ezMethods::ez_gtp( $arr_single_content_center['tp']['content_below']['slug'], $arr_single_content_center['tp']['content_below']['name'], $arr_single_content_center['tp']['content_below']['active'] );
?>
</div>
<?php
}