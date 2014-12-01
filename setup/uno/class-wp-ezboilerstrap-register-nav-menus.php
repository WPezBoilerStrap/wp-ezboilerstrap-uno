<?php
if (! class_exists('Class_WP_ezBoilerStrap_Register_Nav_Menus') ) {
  class Class_WP_ezBoilerStrap_Register_Nav_Menus{
  
    public function __construct(){
	
	  add_action('init', array($this, 'ezbs_register_nav_menus') );
	}

    /**
	 * Note: If the "default" Modl changes then how we get the menu_args might also change. This might be a bit risky, cheeky if you will, but it 
	 * also proves the potential of the architecture. There are, after all, always going to be some "risks". 
	 */
	public function ezbs_register_nav_menus_args(){
  
      $arr_return = array();
	
	  $arr_tmp = ezbsModl::get('menu_global');
	  $arr_return['menu_global'] = $arr_tmp['menu_args'];
	
	  $arr_tmp = ezbsModl::get('menu_main');
	  $arr_return['menu_main'] =  $arr_tmp['menu_args'];
	
	  $arr_tmp = ezbsModl::get('menu_footer');
	  $arr_return['menu_footer'] =  $arr_tmp['menu_args'];
	  
	  return $arr_return;
	}
	
	public function ezbs_register_nav_menus(){
	
	  $obj_ezc_register_nav_menus = Class_WP_ezClasses_Theme_Register_Nav_Menus_1::ez_new();
	  
	  $arr_args['arr_args'] = $this->ezbs_register_nav_menus_args();
	  $obj_ezc_register_nav_menus->ez_rnm($arr_args);
	} 
  }
}

$obj_setup_register_nav_menus = new Class_WP_ezBoilerStrap_Register_Nav_Menus;