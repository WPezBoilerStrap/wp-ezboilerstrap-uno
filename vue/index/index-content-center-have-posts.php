<?php
/*
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
* --------------------------------------------
* -- index-content-center-while-have-posts.php
* --------------------------------------------
*
* - CHANGE LOG ---
*
* -- 1 August 2013 = Ready
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
$arr_index_content_center_have_posts = ezbsModl::get( basename(__FILE__, '.php') );

if ( isset($arr_index_content_center_have_posts['active']) &&  $arr_index_content_center_have_posts['active'] === true ){

?>
  <div class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['wrap_class']) ?>">
  
	<div id="post-<?php the_ID() ?>" <?php post_class() ?>">
	
		<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
		
			<h1 class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['headline_class']) ?>"><?php the_title();?></h1>
		</a>
		<?php
		
		  WP_ezMethods::ez_gtp( $arr_index_content_center_have_posts['tp']['meta_above']['slug'], $arr_index_content_center_have_posts['tp']['meta_above']['name'], $arr_index_content_center_have_posts['tp']['meta_above']['active'] )
		  
		  //get_template_part('index-post-meta-above', ezbsGlobals::$str_child_slug_hyphen);

		?>
		</p>
		
		<div class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['row_wrap_class']) ?>">
			<div class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['row_left_class']) ?>">
			  <?php // Checking for a post thumbnail
				if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail();?>
					</a>
				<?php } ?>	
			</div><!-- /.span2 -->
			<div class="<?php echo sanitize_text_field($arr_index_content_center_have_posts['markup']['row_right_class']) ?>">
				<?php echo get_the_excerpt();?>
			</div><!-- /.span6 -->
			
			<?php 
			
			WP_ezMethods::ez_gtp( $arr_index_content_center_have_posts['tp']['meta_below']['slug'], $arr_index_content_center_have_posts['tp']['meta_below']['name'], $arr_index_content_center_have_posts['tp']['meta_below']['active'] )

			?>
			
		</div><!-- /.row -->
	</div><!-- /.post_class -->
  </div><!-- / wrap -->
<?php
}