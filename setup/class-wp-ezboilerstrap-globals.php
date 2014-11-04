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
 * @package WPezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license TODO
 */

// No WP? Die! Now!!
if ( ! defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if (! class_exists('Class_WP_ezBoilerStrap_Globals')) {
  class Class_WP_ezBoilerStrap_Globals extends Class_WP_ezClasses_Master_Singleton {
	
    // ezbsGlobals::$str_theme_version				- Currently, usage is TBD
    static public $str_theme_version			= '0.5.0';	
	
	// ezbsGlobals::$str_child_slug_hyphen			- Set this in your child theme's Global
	static public $str_child_slug_hyphen		= '';
	
	// ezbsGlobals::$str_child_slug_underscore		- Set this in your child theme's Global
	static public $str_child_slug_underscore	= '';
	
	// ezbsGlobals::$str_child_slug_camel_case		- Set this in your child theme's Global
	static public $str_child_slug_camel_case	= ''; 
	
	// ezbsGlobals::$str_setup_dir - main folder for the setup stuff
	static public $str_setup_dir				= 'setup';
	
	// ezbsGlobals::$str_working - child of the setup that's the current working folder
	
	static public $str_working					= 'uno';
	
	// functions.php > add_theme_support
	static public $str_ats_working				= 'uno';
	static public $str_ats_name					= '';
	static public $bool_ats						= true;	
	
	// functions.php > register_sidebar
	static public $str_rs_working				= 'uno';
	static public $str_rs_name					= '';
	static public $bool_rs						= true;		

    // functions.php > register_nav_menus
	static public $str_rnm_working				= 'uno';
	static public $str_rnm_name					= '';
	static public $bool_rnm						= true;	
	
    // functions.php > add_image_size
	static public $str_ais_working				= 'uno';
	static public $str_ais_name					= '';
	static public $bool_ais						= true;	

    // functions.php > register and enqueue scripts and styles
	static public $str_re_working				= 'uno';
	static public $str_re_name					= '';
	static public $bool_re						= true;	
	
    // functions.php > document ready 
	static public $str_dr_working				= 'uno';
	static public $str_dr_name					= '';
	static public $bool_dr						= true;	

    // functions.php > other (as in none of the above)
	static public $str_oth_working				= 'uno';
	static public $str_oth_name					= '';
	static public $bool_oth						= true;	

	

	
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

class_alias('Class_WP_ezBoilerStrap_Globals', 'ezbsGlobals');
