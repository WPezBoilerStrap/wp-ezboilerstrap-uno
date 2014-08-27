<?php
/** WP ezBoilerStrap Uno "demonstration" theme using the WP ezClasses library / framework, as well as the WPezModlVueCtrlr architecture. 
 *
 * An OOP + MVC-esque modular approach to WordPress theme development (@link http://)
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
 * --- 
 */

/*
 * Note: "global" properties inherited from wpezClassesMasterParent
 *
 * $_bool_ezc_log 					turns the log (wpezToolsClassesLog() on and off (protected, default: true)
 * $_bool_ezc_validate				turns off _validation methods (protected, default: true)
 * $_bool_ezc_apply_filters			if you want to use the filters then set this to true (protected, default: false)
 */
 



if ( !class_exists('WP_ezBoilerStrap_Uno') ){
	class WP_ezBoilerStrap_Uno extends Class_WP_ezClasses_Master_Singleton{
	
		protected function __construct(){
			parent::__construct();
		}
		
		
		public function ezc_init(){
			$this->wp_ezboilerstrap_init();
		}
		
		protected function wp_ezboilerstrap_init(){
		
			// Note: If you want to use a child theme of this parent be sure its priority for after_setup_theme is sooner than this (25).
			add_action('after_setup_theme', array($this, 'ezbs_uno_setup'), 25);
			
			add_action('after_setup_theme', array($this, 'ezbs_theme_setup_general'), 30);
		}
		

		/**
		* ===============================================================================
		* -- START: *DO NOT REMOVE* -- *DO NOT EDIT* ------------------------------------
		* ===============================================================================
		*/
		public function ezbs_uno_setup(){
		
			/**
			 * If There's a child theme and) the child has not included it then lets use the parent ezbsGlobals. 
			 */
			if ( ! class_exists('ezbsGlobals') ){
				include_once('/setup/class-wp-ezboilerstrap-globals.php');
			}
			
			/**
			 * If There's a child theme and) the child has not included it then lets use the ezbsModl. 
			 */		
		    if ( ! class_exists('ezbsModl') ){
			  include_once('modl/ezbsModl.php');
			}
			
			/**
			 * Class_WP_ezBoilerStrap_Register_Sidebar
			 */
			$str_setup = ezbsGlobals::$str_setup_dir;
			WP_ezMethods::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_working . '/' . 'class-wp-ezboilerstrap-register-sidebar', ezbsGlobals::$str_gtp_name, ezbsGlobals::$bool_gtp);
		
				
			/*
			 * *Important* - The ezbsGlobals class is the only class you cannot append the child slug to.
			 *
			 * It's where we get the child slug, etc. Therefore, we cannot use what we don't yet have. After that you can stay organized by appending child CamelCase in appropriate places. 
			 */
			 
			 // If the child has not included it then lets use the parent Globals. 
			if ( !class_exists('ezbsGlobals') ){
				include_once('setup/ezbsGlobals.php');
			}
			$obj_ezbs_globals = ezbsGlobals::ezc_get_instance();
			
			/*
			 * Perhaps the developer has his/her own  LayoutObjectsclasses in the child? (Yes, you can do that, if you want.)
			 *
			 * -- If not, then include_once those of this parent. 
			 *
			 * -- FYI: In case you didn't already know, WP loads the child theme before it loads the parent. 
			 */
			if ( class_exists('ezbsLayoutObjects' . ezbsGlobals::$str_child_slug_camel_case) ) {
			
				// FYI - you can do a new (instantiation) with a string, but you cant do: $var = new 'str'.CONSTANT.'str'. PHP doesnt like that
				$str_temp_for_new = 'ezbsLayoutObjects' . ezbsGlobals::$str_child_slug_camel_case;
				$obj_ezbs_layout_objects = $str_temp_for_new::ezc_get_instance();
			}
			else {
				if ( !class_exists('ezbsLayoutObjects') ){
					include_once('wp-ezboilerstrap/classes/ezbsLayoutObjects.php');
				}
				$obj_ezbs_layout_objects = ezbsLayoutObjects::ezc_get_instance();
			}
			/*
			 * To avoid the child / parent test each time we need the Layout Objects object, we stash it in a property of the  ezbsGlobals class
			 */
	//	$obj_ezbs_globals->ezbs_global_layout_objects_set($obj_ezbs_layout_objects);

			
			/*
			 * ezbsOptionsMaster
			 *
			 * If there's not an OptionsMaster in play from the child, then load the parent's
			 *
			 */
			if ( !class_exists('ezbsOptionsMaster' . ezbsGlobals::$str_options_master_camel) ) {
				include_once('wp-ezboilerstrap/classes/ezbsOptionsMaster.php');
			}
			

			/*
			 * ezbsOptions
			 */
			 
			// have we already loaded the child Options (that inherits from the OptionsMaster)
			if ( !class_exists('ezbsOptions' . ezbsGlobals::$str_child_slug_camel_case) ) {
				$str_ezbs_options = WP_ezMethods::home_path() . ezbsGlobals::$str_path_from_wp_to_theme . '/wp-ezboilerstrap/classes/ezbsOptions' . ezbsGlobals::$str_child_slug_camel_case. '.php';
				include_once($str_ezbs_options);
			}
			$str_temp_for_new = 'ezbsOptions' . ezbsGlobals::$str_child_slug_camel_case;
			$obj_ezbs_options = $str_temp_for_new::ezc_get_instance();
			
			
			/*
			 * ezbsSetup
			 */
			if ( class_exists('ezbsSetup' . ezbsGlobals::$str_child_slug_camel_case) ) {
				$str_temp_for_new = 'ezbsSetup' . ezbsGlobals::$str_child_slug_camel_case;
				$obj_ezbs_setup = $str_temp_for_new::ezc_get_instance($obj_ezbs_options);
			}
			else {
				if ( !class_exists('ezbsSetup') ){
					include_once('wp-ezboilerstrap/classes/ezbsSetup.php');
				}
				$obj_ezbs_setup = ezbsSetup::ezc_get_instance($obj_ezbs_options);
			}
			/*
			 * Setup is a one shot deal so we do *not* need to stash a copy in the ezbsSetup object (in the ezbsGlobals class)
			 */
			
			
			/** 
			* --------------------------------------------------------------------------------------
			* So far, so good. Right? 
			* --------------------------------------------------------------------------------------
			*/
			
			load_theme_textdomain('wp_ezboilerstrap-two', get_template_directory() . '/languages');
			if ( ! isset($content_width) ) {
				$content_width = 1000;
			}
					
		} // close: hook: after_theme_setup > function: ezbs_parent_instantiate()


		/* 
		* -------------------------------------------------------------------------------
		* -- Woot! Woot! The fountation is in place. Now we're ready!! Can you dig it? --
		* -------------------------------------------------------------------------------
		*
		* ===============================================================================
		* -- /END: *DO NOT REMOVE* -- *DO NOT EDIT* --- Add your customizations below --
		* ===============================================================================
		*/
						
			
		
		/**
		* TODO - ezClasses this. make it presets or something. 
		*/		
		public function ezbs_theme_setup_general() {
		
			if ( function_exists( 'add_theme_support' ) ) {
				add_theme_support( 'automatic-feed-links' );
				add_theme_support( 'post-thumbnails'); 
				
				/* TODO
				
				http://codex.wordpress.org/Function_Reference/add_theme_support
				
				add_theme_support( 'custom-background', $defaults); 
				add_theme_support( 'custom-header', $defaults); 
				*/
			}
		}

	} // close class
} // close if class

$obj_new_wp_ezboilerstrap = WP_ezBoilerStrap_Uno::ezc_get_instance();





// TODO - Move this comments stuff somewhere
//
// Template for comments and pingbacks.
//
// To override this walker in a child theme without modifying the comments template
// simply create your own bootstrap_comment(), and that function will be used instead.
//
// Used as a callback by wp_list_comments() for displaying the comments.
//

if ( ! function_exists( 'wp_ezbs_functions_comments' ) ) {
	function wp_ezbs_functions_comments( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
		?>
		<li class="post pingback">
			<p><?php _e( 'Pingback:', 'bootstrap' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'bootstrap' ), ' ' ); ?></p>
		<?php
				break;
			default :
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">
				<footer>
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, 40 ); ?>
						<?php printf( __( '%s <span class="says">says:</span>', 'bootstrap' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
					</div><!-- .comment-author .vcard -->
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( 'Your comment is awaiting moderation.', 'bootstrap' ); ?></em>
						<br />
					<?php endif; ?>

					<div class="comment-meta commentmetadata">
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
						<?php
							/* translators: 1: date, 2: time */
							printf( __( '%1$s at %2$s', 'bootstrap' ), get_comment_date(), get_comment_time() ); ?>
						</time></a>
						<?php edit_comment_link( __( '(Edit)', 'bootstrap' ), ' ' );
						?>
					</div><!-- .comment-meta .commentmetadata -->
				</footer>

				<div class="comment-content"><?php comment_text(); ?></div>

				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->

		<?php
				break;
		endswitch;
	}
} // ends check for wp_ezbs_functions_comments()


?>