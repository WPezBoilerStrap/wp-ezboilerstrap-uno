<?php
/** 
 * This is where The Magic happens. Management and contol of all your Layout Objects is centralized right here. Right now!
 *
 * Long description TODO (@link http://)
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
 * --- n/a 
 */

 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

/*
 * In this case* the ezbsLayoutObjects() is instantuated using defaults values. Those proterties can then be manipulated with the appropriate set method(). 
 *
 * Note: You can also pass an array arguements (arr_args) for: 'columns_css_classes', 'layout_objects', as well as 'dynamic_sidebar'.
 */

if ( !class_exists('ezbsLayoutObjectsManagement') ) {
	class ezbsLayoutObjectsManagement extends Class_WP_ezClasses_Master_Singleton {
	
		protected $_obj_ezbs_layout_objects;
	
		protected function __construct(){	
			parent::__construct(); 
		}
		
		public function ezc_init(){    
			$this->ezbs_loms_init();		
		}
		
		protected function ezbs_loms_init(){
		 
			/*
			 * It seems unlikely we'd be using the child's Options in the Parent LOMS but it doesn't hurt to try
			 */
			$str_ezbc_options = 'ezbsOptions' . ezbsGlobals::$str_child_slug_camel_case;
			$obj_ezbs_options = $str_ezbc_options::ezc_get_instance();
			 
			$this->_obj_ezbs_layout_objects = ezbsLayoutObjects::ezc_get_instance();

			$this->_obj_ezbs_layout_objects->columns_css_classes_set( $obj_ezbs_options->property_get('_arr_columns_css_classes') );
			$this->_obj_ezbs_layout_objects->layout_objects_set( $obj_ezbs_options->property_get('_arr_layout_objects') );
			$this->_obj_ezbs_layout_objects->dynamic_sidebar_set( $obj_ezbs_options->property_get('_arr_register_sidebar_args') );
			
			//$this->_obj_ezbs_layout_objects->dynamic_sidebar_set( );

		//	$obj_ezc_theme_methods = wpezThemeClassesMethods::ezc_get_instance();
		//	$obj_ezc_theme_methods->set_str_add_body_class('EXAMPLE-this-is-my-filtered-in-class');
			
			if ( is_404() ){
				$this->ezbs_loms_is_404();
				
				$xyz = 	array(
							'footer_above'	=> array(
													'active'	=> false,
													'folder'	=> 'footer/',																																										
													'tp'		=> 'footer-above-three-ds',
												),
							);
				$this->_obj_ezbs_layout_objects->layout_objects_set($xyz);
			}
		}
		
		
		protected function ezbs_loms_is_404(){
			$this->_obj_ezbs_layout_objects->columns_css_classes_set(array(
																		'left'		=> false, 
																		'center'	=> 'span9', 
																		'right'		=> 'span3'
																		)
																	);
		}
	}
}

$obj_lay_obj_man_sys = ezbsLayoutObjectsManagement::ezc_get_instance();

?>