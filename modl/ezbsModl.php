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

/*
 * IMPORTANT - TODO - Move the default modl classes into the framework
 */
// http://php.net/manual/en/function.require-once.php#115287

/* TODO - 
if ( ! class_exists('Class_WP_ezClasses_ThemeModl_ezBoilerStrap_Uno_1') ){
  require_once('/../modl/defaults/ezbsModl_ezBoilerStrap_Uno.php');
}
*/

if ( ! class_exists('ezbsModl')) {
  class ezbsModl extends Class_WP_ezClasses_ThemeModl_ezBoilerStrap_Uno_1{
  
  protected function __construct() {
    parent::__construct();
  } 
		
  public function ez__construct(){
  }
		
		/**
		 * = = = = = IMPORTANT = = = = =
		 * 
		 * This is also where you can alter any thing. Kinda like a traditional WP filter. Kinda. 
		 */ 
		protected static function modl_filter( $str_modl_2, $arr_args){
		
		  return $arr_args;
		}

		/**
		 *
		 */
		public static function get( $str_modl = '' ){
		
		  if ( empty($str_modl) || ! is_string($str_modl) ){
		    return false;
		  }
		  		  	  
		  $str_modl_2 = 'ezm_' . sanitize_key(str_replace('-', '_', $str_modl));
		  
		  if ( method_exists(get_class(), $str_modl_2 ) ){
		   
		     $arr_args = self::$str_modl_2();
		  
		    if ( WPezHelpers::ez_array_pass($arr_args) ){
			
			  return self::modl_filter( $str_modl_2, $arr_args);
			} else{
		      return false;
		    }
		  } else {
		  
		  	 die ( get_class(). $str_m_method);
			 return false;
		  }
		}
					
	} // end class
}

$ezbsModl = ezbsModl::ez_new();

?>