<?php

if (! class_exists('Class_WP_ezBoilerStrap_Add_Image_Size') ) {
  class Class_WP_ezBoilerStrap_Add_Image_Size{
  
    public function __construct(){
  
      add_action('init', array($this, 'ezbs_add_image_size') );
    }

    /**
	 * Note: If the "default" Modl changes then how we get the menu_args might also change. This might be a bit risky, cheeky if you will, but it 
	 * also proves the potential of the architecture. There are, after all, always going to be some "risks". 
	 */
	public function ezbs_add_image_size_args(){
  
      $arr_return = array (
	  
	    'w50_h50' => array(
		  'active'	=> true,
		  'width'	=> 50,
		  'height'	=> 50,
		  'crop'	=> true,
		),
		
		'w250_h100' => array(
		  'active'	=> true,
		  'width'	=> 250,
		  'height'	=> 100,
		  'crop'	=> true,
		),
		
		'w350_h350' => array(
		  'active'	=> true,
		  'width'	=> 350,
		  'height'	=> 350,
		  'crop'	=> true,
		),
		
		'w600_h400' => array(
		  'active'	=> true,
		  'width'	=> 600,
		  'height'	=> 400,
		  'crop'	=> true,
		),		
      );
	  
	  /**
	   * Which of the above should be used for the set_post_thumbnail_size()?
	   */
	  $arr_return['w600_h400']['post_thumbnail'] = true;
	  
	  return $arr_return;
	}


    public function ezbs_add_image_size(){
  
      $obj_ezc_add_image_size = Class_WP_ezClasses_Theme_Add_Image_Size_1::ezc_get_instance();

	  $arr_args['arr_args'] = $this->ezbs_add_image_size_args();
	  $obj_ezc_add_image_size->ez_ais($arr_args);
    } 
  }
}

$obj_setup_ezbs_add_image_size = new Class_WP_ezBoilerStrap_Add_Image_Size;