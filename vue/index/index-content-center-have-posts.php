<?php
/** 
 * There are posts to display and this is where we're going to do it.
 *
 * TODO - Long Description @link http://)
 *
 * PHP version 5.3
 *
 * LICENSE: MIT
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <@ChiefAlchemist1> for Alchemy United <@AlchemyUnited>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 30 August 2014 (0.5.0) = Ready.
 *
 * ------------------------------------------------------------------------------------------------------
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

$arr_index_content_center_have_posts = ezbsModl::get( basename(__FILE__, '.php') );

if ( WPezHelpers::ez_true($arr_index_content_center_have_posts['active']) ){

  echo '<div class="' . sanitize_text_field($arr_index_content_center_have_posts['markup']['wrap_class']) . '">';
 ?> 
	<div id="post-<?php the_ID() ?>" <?php post_class() ?>">
	
		<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title();?>">
		
			<<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['title_tag']) ?> class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['title_class']) ?>"><?php echo get_the_title();?></<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['title_tag']) ?>>
		</a>
		<?php
		
		  WPezHelpers::ez_gtp( $arr_index_content_center_have_posts['tp']['meta_above']['slug'], $arr_index_content_center_have_posts['tp']['meta_above']['name'], $arr_index_content_center_have_posts['tp']['meta_above']['active'] )
		?>
		</p>
		<?php 
		// the thumbnail
		if ( has_post_thumbnail() ){ ?>
		  <div class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['img_wrap_class']) ?> wp-ezbs-post-thumbnail-wrap">
		  
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>">
			  <?php get_the_post_thumbnail($arr_index_content_center_have_posts['markup']['post_thumbnail_args']);?>
			</a>
		
		  </div>
		<?php
		}
		// the excerpt
		$str_the_excerpt = get_the_excerpt();
		
		if ( ! empty($str_the_excerpt) ){

		   echo '<div class="' . sanitize_text_field($arr_index_content_center_have_posts['markup']['excerpt_wrap_class']) . ' wp-ezbs-the-excerpt">';
		  
		    echo $str_the_excerpt;
				
		  echo '</div>';

		}
		
		WPezHelpers::ez_gtp( $arr_index_content_center_have_posts['tp']['meta_below']['slug'], $arr_index_content_center_have_posts['tp']['meta_below']['name'], $arr_index_content_center_have_posts['tp']['meta_below']['active'] );
	echo '</div>';
  echo '</div>';
}