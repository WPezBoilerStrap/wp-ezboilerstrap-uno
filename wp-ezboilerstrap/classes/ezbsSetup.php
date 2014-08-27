<?php
/**
 * The mundane under the hood stuff such as enqueue_scripts and similar type things. Often uses what is defined in the ezbsOptions file.
 *
 * This class supports developers and facilitate their ability to develop a boilerplate foundation that remains flexible and extendable.  
 *
 * @package WP ezBoilerStrap
 * @since 0.5.0
 * @author Mark Simchock
 * @license TODO
 */
 
/*
 * == Change Log == 
 *
 */
 
 
/*
 * Typically, a developer has a boilerplate set up that they use from theme to theme. This class aims to simplify that, (one) by rolling it all together 
 * into a single managable go-to unit, as well as (two) make that unit flexible and intelligent by taking advantage of OOP's inheritence and such. That
 * is you can extends this as required and not have to start from scratch repeatedly. 
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if (!class_exists('ezbsSetup')) {
	class ezbsSetup extends Class_WP_ezClasses_Master_Singleton{
	
		protected $_obj_ezc_presets_cleanup_theme;
		protected $_obj_ezc_cleanup_theme;
		protected $_obj_ezc_presets_cleanup_admin;
		protected $_obj_ezc_cleanup_admin;

		protected $_obj_ezc_theme_register_sidebar;
		protected $_obj_ezc_presets_register_sidebar;
		protected $_arr_register_sidebar_base;
		protected $_arr_register_sidebar;
		
		protected $_obj_ezc_theme_register_nav_menus;
		protected $_obj_ezc_presets_register_nav_menus;
		protected $_arr_nav_menus;
		
		protected $_obj_ezc_theme_images;
		protected $_obj_ezc_presets_images;	
		protected $_arr_set_post_thumbnail_size;
		protected $_arr_add_image_size;
		
		protected $_obj_ezc_theme_wp_enqueue;
		protected $_obj_ezc_presets_fonts;
		protected $_obj_ezc_presets_wp_enqueue;
		protected $_obj_ezc_presets_bootstrap;
		protected $_arr_wp_enqueue_web_fonts;		
		protected $_arr_wp_enqueue_scripts_and_styles;
		
		protected $_obj_ezc_theme_wp_deregister;
		protected $_obj_ezc_presets_wp_deregister;
		protected $_arr_wp_deregister_scripts_and_styles;
		
		//TOO why isn't the UI sort tabs (for example) in the Setup too?

		

		protected function __construct() {
			parent::__construct();
		} 
		
		public function ezc_init($obj_ezbs_options = NULL){
			$this->ezbs_setup_init($obj_ezbs_options);
		}
		
		
		protected function ezbs_setup_init($obj_ezbs_options = NULL){
		
			if ( !is_object($obj_ezbs_options)){
				return false;
			}
				
			// Cleanup Admin - TODO as a plugin?

	//		$this->_obj_ezc_presets_cleanup_admin = wpezPresetsClassesAdminCleanup::ezc_get_instance();
	//		$arr_presets_cleanup_admin = $this->_obj_ezc_presets_cleanup_admin->presets_admin_cleanup_combinations('combo1');
	//		$arr_presets_cleanup_admin = $this->_obj_ezc_presets_cleanup_admin->presets_admin_cleanup($arr_presets_cleanup_admin);
	
	//		$this->_obj_ezc_cleanup_admin = wpezAdminClassesCleanup::ezc_get_instance();	
	//		$this->_obj_ezc_cleanup_admin->cleanup_do($arr_presets_cleanup_admin);
			
			
			// Cleanup Theme - TODO as a plugin?

	//		$this->_obj_ezc_presets_cleanup_theme = wpezPresetsClassesThemeCleanup::ezc_get_instance();
	//		$arr_presets_cleanup_theme = $this->_obj_ezc_presets_cleanup_theme->presets_theme_cleanup_combinations('combo2');
	//		$arr_presets_cleanup_theme = $this->_obj_ezc_presets_cleanup_theme->presets_theme_cleanup($arr_presets_cleanup_theme);
	
	//		$this->_obj_ezc_cleanup_theme = wpezThemeClassesCleanup::ezc_get_instance();	
	//		$this->_obj_ezc_cleanup_theme->cleanup_do($arr_presets_cleanup_theme);
			
						
			/*
			 * -- Register Sidebars (aka widget areas) -------------------------------
			 */
			 
			 // Instance(s)
	//		$this->_obj_ezc_theme_register_sidebar = wpezThemeClassesRegisterSidebar::ezc_get_instance();
	//		$this->_obj_ezc_presets_register_sidebar = wpezPresetsClassesRegisterSidebar::ezc_get_instance();
			
			// Options (else Presets)
	//		$this->_arr_register_sidebar_base = $obj_ezbs_options->property_get('_arr_register_sidebar_base_args');
				// $this->_arr_register_sidebar_base = $this->_obj_ezc_presets_register->presets_register_sidebar_base();
	//		$this->_arr_register_sidebar = $obj_ezbs_options->property_get('_arr_register_sidebar_args');
				// presets for this?

	//		$this->register_sidebar(array('active' => true, 'validate' => true, 'active_true' => true));

						
			/*
			 * -- Menus / Navs -------------------------------------------
			 */
			 
			 // Instance(s)
	//		$this->_obj_ezc_theme_register_nav_menus = wpezThemeClassesRegisterNavMenus::ezc_get_instance();
	//		$this->_obj_ezc_presets_register_nav_menus = wpezPresetsClassesRegisterNavMenus::ezc_get_instance();
			
			// Options (else Presets)
	//		$this->_arr_nav_menus = $obj_ezbs_options->property_get('_arr_nav_menus');	
				// $this->_arr_nav_menus = $this->_obj_ezc_presets_register->presets_register_nav_menus());
				
			// Make the magic happen
	//		$this->register_nav_menus(array('active' => true, 'validate' => true, 'active_true' => true));

				
			/*
			 * -- Images -------------------------------------------------
			 */
			 
			// Instance(s)
	//		$this->_obj_ezc_theme_images = wpezThemeClassesImages::ezc_get_instance();
			// $this->_obj_ezc_presets_images = wpezPresetsClassesImages::ezc_get_instance();
			
			// Options (else Presets)
	//		$this->_arr_set_post_thumbnail_size = $obj_ezbs_options->property_get('_arr_set_post_thumbnail_size');
				// $this->_arr_set_post_thumbnail_size = $this->_obj_ezc_presets_images->presets_set_post_thumbnail_size();
	//		$this->_arr_add_image_size = $obj_ezbs_options->property_get('_arr_add_image_size');			
				// $this->_arr_add_image_size = $this->_obj_ezc_presets_images->presets_add_image_size());
				
			// Make the magic happen
	//		$this->set_post_thumbnail_size(array('active' => true, 'validate' => true, 'active_true' => true));
	//		$this->add_image_size(array('active' => true, 'validate' => true, 'sctive_true' => true));			

			
			/*
			 * Enqueue: Fonts, Scripts & Styles
			 */
			// Instance(s)
	//		$this->_obj_ezc_theme_wp_enqueue = wpezThemeClassesWPEnqueue::ezc_get_instance();
			
			/*
			 * We don't need these right now
			$this->_obj_ezc_presets_fonts = wpezPresetsClassesFonts::ezc_get_instance();
			$this->_obj_ezc_presets_wp_enqueue = wpezPresetsClassesWPEnqueue::ezc_get_instance();
			$this->_obj_ezc_presets_bootstrap = wpezPresetsClassesBootstrap::ezc_get_instance();
			*/

			// Options (else Presets)
	//		$this->_arr_wp_enqueue_web_fonts = $obj_ezbs_options->property_get('_arr_wp_enqueue_web_fonts');
				// $this->_arr_wp_enqueue_web_fonts = $this->_obj_ezc_presets_fonts->presets_wp_enqueue_web_fonts();
	//		$this->_arr_wp_enqueue_scripts_and_styles = $obj_ezbs_options->property_get('_arr_wp_enqueue_scripts_and_styles');
				// TODO - scripts & styles from presets

			// Make the Magic Happen
	//		$this->wp_enqueue_web_fonts(array('active' => true, 'validate' => true, 'active_true' => true)); 
	//		$this->wp_enqueue_scripts_and_styles(array('active' => true, 'validate' => true, 'active_true' => true)); 

			
			/*
			 * -- Deregister Scripts & Styles -------------------------------------------
			 */
			 
			 // Instance(s)
	//		$this->_obj_ezc_theme_deregister = wpezThemeClassesWPDeregister::ezc_get_instance();
	//		$this->_obj_ezc_presets_deregister = wpezPresetsClassesWPDeregister::ezc_get_instance();
			
			// Options (else Presets)
				// $this->_arr_wp_deregister_scripts_and_styles = $obj_ezbs_options->property_get('? TODO ? ');	
	//		$this->_arr_wp_deregister_scripts_and_styles = $this->_obj_ezc_presets_deregister->wp_deregister();
				
			// Make the magic happen
	//		$this->wp_deregister_scripts_and_styles(array('active' => true, 'validate' => true, 'active_true' => true));
			
		} // close init
		
		/**
		* 
		*/ 
		protected function register_sidebar($arr_args = NULL){
		
			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_register_sidebar_base = $this->_arr_register_sidebar_base;
				$arr_register_sidebar = $this->_arr_register_sidebar;

			
				// validate - optional
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){
					$bool_return = false;
					$arr_validate_response_merge = array();
					
					$arr_validate_response = $this->_obj_ezc_theme_register_sidebar->register_sidebar_base_validate($arr_register_sidebar_base);
					if ( $arr_validate_response['status'] !== true){
						$arr_validate_response_merge[] = $arr_validate_response;
						$bool_return = true;
					} else {
						$arr_register_sidebar_base = $arr_validate_response['arr_args'];
					}
					
					
					$arr_validate_response = $this->_obj_ezc_theme_register_sidebar->register_sidebar_validate($arr_register_sidebar);
					if ( $arr_validate_response['status'] !== true){
						$arr_validate_response_merge[] = $arr_validate_response;
						$bool_return = true;
					} else {
						$arr_register_sidebar = $arr_validate_response['arr_args'];
					}
					
					if  ( $bool_return === true ) {
						return $arr_validate_response_merge;
					}	
				}
							
				// active_true - optional
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
				
					$arr_active_true_response = $this->_obj_ezc_theme_register_sidebar->register_sidebar_active_true ($arr_register_sidebar);
					
					if ( $arr_active_true_response['status'] === false){
						return $arr_active_true_response;
					}
					$arr_register_sidebar = $arr_active_true_response['arr_args'];
				}
				
				/*
				 * At this point we should be good to go.
				 */ 
				 
				// set - if you're going to _do then you have to _set

				$this->_obj_ezc_theme_register_sidebar->register_sidebar_base_set($arr_register_sidebar_base);
				$this->_obj_ezc_theme_register_sidebar->register_sidebar_set($arr_register_sidebar);

				// do
				$this->_obj_ezc_theme_register_sidebar->add_action_register_sidebar_do();
				
				return true;
			}
		}
	
		/**
		* 
		*
		*/ 
		protected function set_post_thumbnail_size($arr_args = NULL){
		
			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_set_post_thumbnail_size = $this->_arr_set_post_thumbnail_size;

				// validate - optional
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){

					$arr_validate_return = $this->_obj_ezc_theme_images->set_post_thumbnail_size_validate($arr_set_post_thumbnail_size);
					if ( $arr_validate_return['status'] !== true){
						return $arr_validate_return;
					}
					$arr_set_post_thumbnail_size = $arr_validate_return['arr_args'];
				}
							
				// active_true - optional
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
					$arr_ret = $this->_obj_ezc_theme_images->set_post_thumbnail_size_active_true($arr_set_post_thumbnail_size);
					if ( $arr_ret['status'] === false){
						return $arr_ret;
					}
					$arr_set_post_thumbnail_size = $arr_ret['arr_args'];
				}
				
				/*
				 * At this point we should be good to go.
				 */ 
				 
				// set - if you're going to _do then you have to _set
				$this->_obj_ezc_theme_images->set_post_thumbnail_size_set($arr_set_post_thumbnail_size);

				// do
				$this->_obj_ezc_theme_images->add_action_set_post_thumbnail_size_do();
				
				return true;
			}
		}
		
		/**
		* 
		*/ 
		protected function add_image_size( $arr_args = NULL ){
		
			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_add_image_size = $this->_arr_add_image_size;

				// validate - optional
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){

					$arr_ret = $this->_obj_ezc_theme_images->add_image_size_validate($arr_add_image_size);
					if ( $arr_ret['status'] !== true){
						return false;
					}
					$arr_add_image_size = $arr_ret['arr_args'];
				}

				
				// active_true - optional
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
					$arr_ret = $this->_obj_ezc_theme_images->add_image_size_active_true($arr_add_image_size);
					if ($arr_ret['status'] !== true) {
						return false;
					} 
					$arr_add_image_size = $arr_ret['arr_args'];
				}
				
				/*
				 * At this point we should be good to go.
				 */ 			
				
				// set - if you're going to _do then you have to _set
				$this->_obj_ezc_theme_images->add_image_size_set($arr_add_image_size);
				
				// do
				$this->_obj_ezc_theme_images->add_action_add_image_size_do();
				return true;
			}
		}	
		
		/**
		 * 
		 */	
		protected function register_nav_menus( $arr_args = NULL ){
		
			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_nav_menus = $this->_arr_nav_menus;
				
				// validate - optional
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){

					$arr_ret = $this->_obj_ezc_theme_register_nav_menus->nav_menus_validate($arr_nav_menus);

					if ( $arr_ret['status'] !== true){
					print_r( $arr_ret );	
						return $arr_ret;
					}
					$arr_nav_menus = $arr_ret['arr_args'];
				}
								
				// active_true
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
					$arr_ret = $this->_obj_ezc_theme_register_nav_menus->nav_menus_active_true($arr_nav_menus);
					if ($arr_ret['status'] !== true) {
						return false;
					} 
					$arr_nav_menus = $arr_ret['arr_args'];
				}
					
				// set
				$this->_obj_ezc_theme_register_nav_menus->nav_menus_set($arr_nav_menus);
				
				// do
				
				// first tell WP to register some nav menus
				$this->_obj_ezc_theme_register_nav_menus->add_action_register_nav_menus_do();
				
				// check for changes to the menus and if necessary flush the transients
				$this->_obj_ezc_theme_register_nav_menus->add_action_wp_update_nav_menu_action();
				
				// do the wp_nav_menus
				$this->_obj_ezc_theme_register_nav_menus->add_action_wp_nav_menus_do();
				
				return true;
			}
		}
		
		
		/**
		 * 
		 */			
		protected function wp_enqueue_web_fonts( $arr_args = NULL ){

			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_wp_enqueue_web_fonts = $this->_arr_wp_enqueue_web_fonts;

				// validate
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){
					$arr_validate_response = $this->_obj_ezc_theme_wp_enqueue->wp_enqueue_web_fonts_validate($arr_wp_enqueue_web_fonts);

					if ( $arr_validate_response['status'] === false){
						return $arr_validate_response;
					}
					$arr_wp_enqueue_web_fonts = $arr_validate_response['arr_args'];
				}
								
				// active_true
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
					$arr_active_true_return = $this->_obj_ezc_theme_wp_enqueue->wp_enqueue_web_fonts_active_true($arr_wp_enqueue_web_fonts);
					if ($arr_active_true_return['status'] !== true) {
						return $arr_active_true_return;
					} 
					$arr_wp_enqueue_web_fonts = $arr_active_true_return['arr_args'];
				}
				
				// set
				$this->_obj_ezc_theme_wp_enqueue->wp_enqueue_web_fonts_set($arr_wp_enqueue_web_fonts);
				
				// do
				$this->_obj_ezc_theme_wp_enqueue->add_action_wp_enqueue_web_fonts_do();
				return true;
			}
		}
		

		/**
		 * 
		 */	

		protected function wp_enqueue_scripts_and_styles( $arr_args = NULL ){
		
			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_wp_enqueue_scripts_and_styles = $this->_arr_wp_enqueue_scripts_and_styles;

				// validate
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){
					$arr_validate_return = $this->_obj_ezc_theme_wp_enqueue->wp_enqueue_scripts_and_styles_validate($arr_wp_enqueue_scripts_and_styles);
					if ( $arr_validate_return['status'] === false){
						return $arr_validate_return;
					}
					$arr_wp_enqueue_scripts_and_styles = $arr_validate_return['arr_args'];
				}
				
				// active_true
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
					$arr_ret = $this->_obj_ezc_theme_wp_enqueue->wp_enqueue_scripts_and_styles_active_true($arr_wp_enqueue_scripts_and_styles);
					if ($arr_ret['status'] !== true) {
						return false;
					} 
					$arr_wp_enqueue_scripts_and_styles = $arr_ret['arr_args'];
				}
				
				// set
				$this->_obj_ezc_theme_wp_enqueue->wp_enqueue_scripts_and_styles_set($arr_wp_enqueue_scripts_and_styles);
				
				// do
				$this->_obj_ezc_theme_wp_enqueue->add_action_wp_enqueue_scripts_and_styles_do() ;
				return true;
			}
		}
		
		protected function wp_deregister_scripts_and_styles( $arr_args = NULL ){
		
			if ( isset($arr_args['active']) && $arr_args['active'] === true ){

				$arr_wp_deregister_scripts_and_styles = $this->_arr_wp_deregister_scripts_and_styles;
				
				// validate - optional
				if ( isset($arr_args['validate']) && $arr_args['validate'] === true ){

					$arr_validate_result = $this->_obj_ezc_theme_deregister->wp_deregister_scripts_and_styles_validate($arr_wp_deregister_scripts_and_styles);

					if ( $arr_validate_result['status'] !== true ){
						return $arr_validate_result;
					}
					$arr_wp_deregister_scripts_and_styles = $arr_validate_result['arr_args'];
				}
				
				// active_true
				if ( isset($arr_args['active_true']) && $arr_args['active_true'] === true ){
					$arr_active_true_result = $this->_obj_ezc_theme_deregister->wp_deregister_scripts_and_styles_active_true($arr_wp_deregister_scripts_and_styles);
					if ( $arr_active_true_result['status'] !== true ) {
						return false;
					} 
					$arr_wp_deregister_scripts_and_styles = $arr_active_true_result['arr_args'];
				}

				// set
				$this->_obj_ezc_theme_deregister->wp_deregister_scripts_and_styles_set($arr_wp_deregister_scripts_and_styles);
				
				// do
				$this->_obj_ezc_theme_deregister->add_action_wp_deregister_scripts_and_styles_do();
				
				return true;
			}
		}
					
	} // end class
}

?>