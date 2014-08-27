<?php
/** 
 * Does the bulk of what is unique to search.
 *
 * More info: (@link http://codex.wordpress.org/Function_Reference/get_search_form).
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
 * --- 23 August 2014 - Ready
 */
?>

<?php

$arr_search_content_center = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( ! isset($arr_search_content_center['active']) || $arr_search_content_center['active'] !== false ){	

	echo '<div class="' . sanitize_text_field($arr_search_content_center['markup']['search_wrap_class'])  . ' wp-ezbs-search-wrap-class">';
	  
	/**
     * TODO - clean up ezClass Theme Search class
	 * $obj_ezc_theme_search = wpezThemeClassesSearch::ezc_get_instance();
	 * $arr_get_search_form_ez = $obj_ezc_theme_search->get_search_form_ez( $obj_ezbs_options->property_get('_arr_searchform_404') );
	 */
	if ( isset($arr_search_content_center['searchform_custom']) && $arr_search_content_center['searchform_custom'] === true ){

	  WP_ezMethods::ez_gtp($arr_search_content_center['tp']['searchform_custom']['slug'], $arr_search_content_center['tp']['searchform_custom']['name'], $arr_search_content_center['tp']['searchform_custom']['active'] );

	}else{

	  get_search_form();
	}
	
	echo '</div><!--/.well -->';
	
	
?>
  <div class="<?php echo sanitize_text_field($arr_search_content_center['markup']['wrap_class']) ?> wp-ezbs-search-content-center">

  <?php
  
  WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['title_above']['slug'], $arr_search_content_center['tp']['title_above']['name'], $arr_search_content_center['tp']['title_above']['active'] );

  WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['search_title']['slug'], $arr_search_content_center['tp']['search_title']['name'], $arr_search_content_center['tp']['search_title']['active'] );
	
  WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['title_below']['slug'], $arr_search_content_center['tp']['title_below']['name'], $arr_search_content_center['tp']['title_below']['active'] );
		
  // search found sommething!	
  if ( have_posts() ){
  
    WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['next_prev']['slug'], $arr_search_content_center['tp']['next_prev']['name'], $arr_search_content_center['tp']['next_prev']['active'] );		
	
	WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['sort']['slug'], $arr_search_content_center['tp']['next_prev']['name'], $arr_search_content_center['tp']['next_prev']['active'] );		
				
	WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['have_posts']['slug'], $arr_search_content_center['tp']['have_posts']['name'], $arr_search_content_center['tp']['have_posts']['active'] );		

	WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['search_title']['slug'], $arr_search_content_center['tp']['search_title']['name'], $arr_search_content_center['tp']['search_title']['active'] );
	
	} else {
	
	 // TODO?
	}
	

	WP_ezMethods::ez_gtp( $arr_search_content_center['tp']['content_below']['slug'], $arr_search_content_center['tp']['content_below']['name'], $arr_search_content_center['tp']['content_below']['active'] );		

	?>

	</div> <!-- / .span# -->
<?php
}