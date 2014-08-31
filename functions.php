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
			
		 // add_action('after_setup_theme', array($this, 'ezbs_theme_setup_general'), 30);
		}
		
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
			

			$str_setup = ezbsGlobals::$str_setup_dir;
			
			/**
			 * Class_WP_ezBoilerStrap_WP_Register Enqueue - register and enqueue scripts and styles
			 */
			WP_ezMethods::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_ats_working . '/' . 'class-wp-ezboilerstrap-add-theme-support', ezbsGlobals::$str_ats_name, ezbsGlobals::$bool_ats);			

			/**
			 * Class_WP_ezBoilerStrap_Register_Sidebar
			 */
			WP_ezMethods::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_rs_working . '/' . 'class-wp-ezboilerstrap-register-sidebar', ezbsGlobals::$str_rs_name, ezbsGlobals::$bool_rs);
			
			/**
			 * Class_WP_ezBoilerStrap_Register_Nav_Menus
			 */
			WP_ezMethods::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_rnm_working . '/' . 'class-wp-ezboilerstrap-register-nav-menus', ezbsGlobals::$str_rnm_name, ezbsGlobals::$bool_rnm);			

			/**
			 * Class_WP_ezBoilerStrap_Add_Image_Size
			 */
			WP_ezMethods::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_ais_working . '/' . 'class-wp-ezboilerstrap-add-image-size', ezbsGlobals::$str_ais_name, ezbsGlobals::$bool_ais);			
	
			/**
			 * Class_WP_ezBoilerStrap_WP_Register Enqueue - register and enqueue scripts and styles
			 */
			WP_ezMethods::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_re_working . '/' . 'class-wp-ezboilerstrap-wp-register-enqueue', ezbsGlobals::$str_re_name, ezbsGlobals::$bool_re);			

			
			load_theme_textdomain('wp_ezboilerstrap_uno', get_template_directory() . '/languages');
			if ( ! isset($content_width) ) {
				$content_width = 1000;
			}
					
		} // close: hook: after_theme_setup > function: ezbs_parent_instantiate()


								
		
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