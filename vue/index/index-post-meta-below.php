<?php
/*
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
* --------------------------------------------
* -- index-post-meta-below.php
* --------------------------------------------
*
* - CHANGE LOG ---
*
* -- 31 July 2013 = Ready
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
echo "TODO - index-post-meta-below.php";
if (1==2){
$obj_ezc_taxonomies_methods = wpezTaxonomiesClassesMethods::ezc_get_instance();

echo '<div class="clearfix"></div>';
echo '<span id="wp-ezbs-index-post-meta-below">';
echo '<div class="row">';
echo '<p class="meta wp-ezbs-meta-above">';
echo '<span class="meta wp-ezbs-meta-above">';


$wp_ezbs_arr_cat_args = array(
	'echo'			=> true,	
	'label'			=> 'Categories:',
	'taxonomies'	=> array('category'),
	'args'			=> array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all'),
	'ul_id'			=> 'ezbs-tax-post-category-list',
	'ul_class'		=> 'ezbs-tax-post-category-list',
);

$obj_ezc_taxonomies_methods->object_terms_layout_v1( $wp_ezbs_arr_cat_args);

$wp_ezbs_arr_tag_args = array(
	'echo'			=> true,	
	'label' 		=> 'Tags:',
	'taxonomies'	=> array('post_tag'),
	'args'			=> array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all'),
	'ul_id'			=> 'ezbs-tax-post-tag-list',
	'ul_class'		=> 'ezbs-tax-post-tag-list',
);

$obj_ezc_taxonomies_methods->object_terms_layout_v1( $wp_ezbs_arr_tag_args);

echo "TODO - Style these lists";

echo '</span>';
echo '</p> <!-- /.meta -->';
echo '</div>';
echo '</span> <!-- / #wp-ezbs-index-gtp-inc-post-meta-below -->';
}
?>

