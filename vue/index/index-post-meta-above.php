<?php
/** 
 * Post meta above the content
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

$arr_index_post_meta_above = ezbsModl::get( basename(__FILE__, '.php') );

if ( WPezHelpers::ez_true($arr_index_post_meta_above['active']) ){

global $post;
  
  echo '<div class="' . sanitize_text_field($arr_index_post_meta_above['markup']['wrap_class']) . ' wp-ezbs-index-meta  wp-ezbs-index-meta-above' . '">';
  
echo '<p class="meta wp-ezbs-meta-above">';
echo '<h1>TODO - Meta Above</h1>';
printf( __( '<span class="sep">Published: </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'bootstrap' ),
	esc_url( get_permalink() ),
	esc_attr( get_the_time() ),
	esc_attr( get_the_date( 'c' ) ),
	esc_html( get_the_date() ),
	esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
	esc_attr( sprintf( __( 'View all posts by %s', 'bootstrap' ), get_the_author() ) ),
	esc_html( get_the_author() )
);
echo '</p> <!-- /.class -->';

  echo '</div>';

}