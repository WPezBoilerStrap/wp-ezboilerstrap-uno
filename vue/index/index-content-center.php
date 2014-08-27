<?php
/**
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
* --------------------------------------------
* -- index-content-center.php
* --------------------------------------------
*
* - CHANGE LOG ---
*
* -- 4 Mar 2013 = Ready
*
* --------------------------------------------
*/

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php

$arr_index_content_center = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_index_content_center['active']) &&  $arr_index_content_center['active'] === true ){

?>

<div class="<?php echo sanitize_text_field($arr_index_content_center['markup']['wrap_class']) ?> wp-ezbs-content-center">

  <?php	
  
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['archive_header']['slug'], $arr_index_content_center['tp']['archive_header']['name'], $arr_index_content_center['tp']['archive_header']['active'] );		
				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['next_prev']['slug'], $arr_index_content_center['tp']['next_prev']['name'], $arr_index_content_center['tp']['next_prev']['active'] );		
				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['sort']['slug'], $arr_index_content_center['tp']['sort']['name'], $arr_index_content_center['tp']['sort']['active'] );		
			
  if ( have_posts()) {
  
    while ( have_posts() ) : the_post(); 
	  
	  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['have_posts']['slug'], $arr_index_content_center['tp']['have_posts']['name'], $arr_index_content_center['tp']['have_posts']['active'] );
						
    endwhile;
  } else {
  
    //TODO??
  }
				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['next_prev']['slug'], $arr_index_content_center['tp']['next_prev']['name'], $arr_index_content_center['tp']['next_prev']['active'] );		

  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['content_below_above']['slug'], $arr_index_content_center['tp']['content_below_above']['name'], $arr_index_content_center['tp']['content_below_above']['active'] );

				
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['content_below']['slug'], $arr_index_content_center['tp']['content_below']['name'], $arr_index_content_center['tp']['content_below']['active'] );
				
  /**
   * Mainly for Archive for in theory for an speciality use case
   */
  WP_ezMethods::ez_gtp( $arr_index_content_center['tp']['content_below_below']['slug'], $arr_index_content_center['tp']['content_below_below']['name'], $arr_index_content_center['tp']['content_below_below']['active'] );
								
echo '</div>'; // close wrap
}
