<?php
/*
* @package WordPress
* @subpackage WPezBoilerStrap
* @since WP ezBoilerStrap 0.5.0
*
* --------------------------------------------
* -- index-post-meta-above.php
* --------------------------------------------
*
* - CHANGE LOG ---
*
* -- 4 Mar 2013 = Ready
*
*
* - TODO ----
* - How this is done needs to re refactored. 
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

global $post;

echo '<span id="wp-ezbs-index-post-meta-above">';
echo '<p class="meta wp-ezbs-meta-above">TODO index-post-meta-above --- ';
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
echo '</span> <!-- / #wp-ezbs-index-post-meta-above -->';

?>

