<?php
/**
 * Vars that are traditionally GLOBALS but now wrapped in a less vunerable class and are "read only". They are static to make them that much easier to "get". 
 *
 * Note: ezbsGlobals.php is the only WP ezBoilerStrap class that can NOT have a child suffix. It's where we get the child slug suffix so we can not use what we do not yet know. 
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WP ezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if (!class_exists('ezbsGlobals')) {

	class ezbsGlobals extends Class_WP_ezClasses_Master_Singleton {
	
		static public $str_theme_version			= '0.5.0';		// ezbsGlobals::$str_theme_version				- Currently, usage is TBD 
		static public $str_child_slug_hyphen		= '';			// ezbsGlobals::$str_child_slug_hyphen			- Set this in your child theme's Global
		static public $str_child_slug_underscore	= '';			// ezbsGlobals::$str_child_slug_underscore		- Set this in your child theme's Global
		static public $str_child_slug_camel_case	= '';			// ezbsGlobals::$str_child_slug_camel_case		- Set this in your child theme's Global 

		static public $str_step_child				= 'cohere';		// ezbsGlobals::$str_active_style				- This is the folder for any associated collateral (e.g., css. images)
																	//												- "Why?" Because now you can have multiple working step-child "styles" within the same (child) theme.					
		
		static public $str_options_master_camel		= '';			// ezbsGlobals::str_options_master				- Got a different OptionsMaster? What is it?

		// TODO - there might be an easier way. Find it. 
		static public $str_path_from_wp_to_theme	= 'wp-content/themes/wp-ezboilerstrap-uno';		
		
	
		/**
		 * Note: We're not using the construct other than to get "global" properties defined in the master parent
		 */
		protected function __construct(){
			parent::__construct(); 
		}
		
		public function ezc_init(){
			//$this->ezbs_globals_init();
		}
		
		public function ezbs_globals_init(){
	
		}	

	} //close class
} // close class_exists

?>