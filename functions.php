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
	
	  private $_version;
	  private $_url;
	  private $_path;
	  private $_path_parent;
	  private $_basename;
	  private $_file;
	
		protected function __construct(){
	
			parent::__construct();
		}
		
		public function ez__construct(){
			$this->wp_ezboilerstrap_init();
		}
		
		protected function wp_ezboilerstrap_init(){
		
		  $this->setup();
		
			// Note: If you want to use a child theme of this parent be sure its priority for after_setup_theme is sooner than this (25).
		  add_action('after_setup_theme', array($this, 'ezbs_uno_setup'), 25);
		
		}
		
		protected function setup(){
		
		  $this->_version = '0.5.0';
		  $this->_url = plugin_dir_url( __FILE__ );
		  $this->_path = plugin_dir_path( __FILE__ );
		  $this->_path_parent = dirname($this->_path);
		  $this->_basename = plugin_basename( __FILE__ );
		  $this->_file = __FILE__ ;		
		
		}
		
		public function ezbs_uno_setup(){

			/**
			 * If There's a child theme and) the child has not included it then lets use the parent ezbsGlobals. 
			 */
			if ( ! class_exists('ezbsGlobals') ){
				include_once('setup/class-wp-ezboilerstrap-globals.php');
			}
			
			/**
			 * If There's a child theme and) the child has not included it then lets use the ezbsModl. 
			 */		
		    if ( ! class_exists('ezbsModl') ){
			  include_once('modl/ezbsModl.php');
			}
			
			$str_setup = ezbsGlobals::$str_setup_dir;
			
			/**
			 * Class_WP_ezBoilerStrap_Add_Theme_Support
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_ats_working . '/' . 'class-wp-ezboilerstrap-add-theme-support', ezbsGlobals::$str_ats_name, ezbsGlobals::$bool_ats);			

			/**
			 * Class_WP_ezBoilerStrap_Register_Sidebar
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_rs_working . '/' . 'class-wp-ezboilerstrap-register-sidebar', ezbsGlobals::$str_rs_name, ezbsGlobals::$bool_rs);
			
			/**
			 * Class_WP_ezBoilerStrap_Register_Nav_Menus
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_rnm_working . '/' . 'class-wp-ezboilerstrap-register-nav-menus', ezbsGlobals::$str_rnm_name, ezbsGlobals::$bool_rnm);			

			/**
			 * Class_WP_ezBoilerStrap_Add_Image_Size
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_ais_working . '/' . 'class-wp-ezboilerstrap-add-image-size', ezbsGlobals::$str_ais_name, ezbsGlobals::$bool_ais);			
	
			/**
			 * Class_WP_ezBoilerStrap_WP_Register Enqueue - register and enqueue scripts and styles
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_re_working . '/' . 'class-wp-ezboilerstrap-wp-register-enqueue', ezbsGlobals::$str_re_name, ezbsGlobals::$bool_re);			

			/**
			 * Class_WP_ezBoilerStrap_Other - not any of the above
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_dr_working . '/' . 'class-wp-ezboilerstrap-document-ready', ezbsGlobals::$str_dr_name, ezbsGlobals::$bool_dr);	
			
			/**
			 * Class_WP_ezBoilerStrap_Other - not any of the above
			 */
			WPezHelpers::ez_gtp( $str_setup . '/' . ezbsGlobals::$str_oth_working . '/' . 'class-wp-ezboilerstrap-other', ezbsGlobals::$str_oth_name, ezbsGlobals::$bool_oth);			

			
			load_theme_textdomain('wp_ezbs_uno', get_template_directory() . '/languages');
			if ( ! isset($content_width) ) {
				$content_width = 1000;
			}
					
		} // close: hook: after_theme_setup > function: ezbs_parent_instantiate()

	} // close class
} // close if class
$obj_new_wp_ezboilerstrap = WP_ezBoilerStrap_Uno::ez_new();