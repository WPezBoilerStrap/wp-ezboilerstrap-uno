<?php

/**
 * if you want to break this down further, you might consider using the other/ folder for those pieces
 */

if (! class_exists('Class_WP_ezBoilerStrap_Other') ) {
  class Class_WP_ezBoilerStrap_Other{
  
    protected $_arr_init;
  
    public function __construct($arr_args = ''){
	
	  $arr_init_defaults = $this->init_defaults();
	  
	  $this->_arr_init = WPezHelpers::ez_array_merge(array($arr_init_defaults, $arr_args));
	
	  add_filter('show_admin_bar', array($this, 'show_admin_bar'));
	
	 // add_action('TODO', array($this, 'ezbs_other_1'));
	}
	
	
	/**
	 * Ideally, "switches" will be consolidated here. 
	 */
	protected function init_defaults(){
	
	  $arr_defaults = array(
	  
	    'show_admin_bar'	=> false
	  
	  );
	
	  return $arr_defaults;
	}
	
	
	
	public function show_admin_bar(){
	
	  if ( isset($this->_arr_init['show_admin_bar'] ) ){
	  
	    return $this->_arr_init['show_admin_bar'];
	  } else {
	    return true;
	  }
	
	}
	
  }
}

$obj_setup_ezbs_other = new Class_WP_ezBoilerStrap_Other;