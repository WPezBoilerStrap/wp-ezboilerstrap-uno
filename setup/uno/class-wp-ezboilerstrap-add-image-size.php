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
	  
	  
	    'w100' => array(						// note: the key can be whatever you want. it's not used as a setting / parm / args. it's just a key. 
		  'active'			=> true,			// on / off switch for this key's args
		  'name'			=> 'w100',			// name, as used for add_image_size() and (filter) image_size_names_choose
		  'width'			=> 100,				// width (int)
		  'height'			=> false,			// height (int)
		  'crop'			=> true,			// crop
		  'ratio'			=> 'square',		// see Class_WP_ezClasses_Theme_Add_Image_Size_1 for details
		  'orientation'		=> 'land', 			// else 'port' - ratios are defined as 'land'. 'port' will more or less rotate the ratio 90 degrees clockwise
		  'offset'			=> 0,				// use: - / + . offset only applies when width is used as the baseline (off which the height is calculated)
		  'names_choose'	=> array(
		    'active'	=> true,				// add this via the (filter) image_size_names_choose
			'select'	=> 'Ratio: Square'		// what's the displayed select sting.
			),
		  'picturefill'		=> array(			// Not required for Class_WP_ezClasses_Theme_Add_Image_Size_1 but very useful for Class_WP_ezClasses_Templates_Picturefill_js
		    'active'	=> true,				// active? 
		    'bp'		=> 'w',					// what's the bp (breakpoint). for more details see Class_WP_ezClasses_Templates_Picturefill_js
			),
		),	  
	  
	  
	    'w600' => array(
		  'active'			=> true,
		  'name'			=> 'w600',
		  'width'			=> 600,
		  'height'			=> false,
		  'crop'			=> true,
		  'ratio'			=> 'widescreen',		
		  'orientation'		=> 'land', 		
		  'offset'			=> 0,			
		  'names_choose'	=> array(
		    'active'	=> true,
			'select'	=> 'Ratio: Widescreen'
			),
		  'picturefill'		=> array(
		    'active'	=> true,
		    'bp'		=> 600,			
			),
		),	  
	  
	    'w750' => array(
		  'active'			=> true,
		  'name'			=> 'w750',
		  'width'			=> 750,
		  'height'			=> false,
		  'crop'			=> true,
		  'ratio'			=> 'widescreen',		
		  'orientation'		=> 'land', 
		  'offset'			=> 0,
		  'names_choose'	=> array(
		    'active'	=> true,
			'select'	=> 'Ratio: Widescreen'
			),
		  'picturefill'		=> array(
		    'active'	=> true,
		    'bp'		=> 768,			
			),
		),
		
	    'w970' => array(
		  'active'			=> true,
		  'name'			=> 'w970',
		  'width'			=>  970,
		  'height'			=> false,
		  'crop'			=> true,
		  'ratio'			=> 'widescreen',		
		  'orientation'		=> 'land', 		
		  'offset'			=> 0,			
		  'names_choose'	=> array(
		    'active'	=> true,
			'select'	=> 'Ratio: Widescreen'
			),
		  'picturefill'		=> array(
		    'active'	=> true,
		    'bp'		=> 992,			
			),
		),
		
	    'w1170o' => array(
		  'active'			=> true,
		  'name'			=> 'w1170o',				// o = offset
		  'width'			=>  1170,
		  'height'			=> false,
		  'crop'			=> true,
		  'ratio'			=> 'widescreen',		
		  'orientation'		=> 'land', 
		  'offset'			=> -3/12,
		  'names_choose'	=> array(
		    'active'	=> true,
			'select'	=> 'Ratio: Widescreen'
			),
		  'picturefill'		=> array(		
		    'active'	=> true,
		    'bp'		=> 1200,			
			),
		),		
		
	    'w1170' => array(
		  'active'			=> true,
		  'name'			=> 'w1170',
		  'width'			=>  1170,
		  'height'			=> false,
		  'crop'			=> true,
		  'ratio'			=> 'widescreen',		
		  'orientation'		=> 'land', 
		  'offset'			=> 0,
		  'names_choose'	=> array(
		    'active'	=> true,
			'select'	=> 'Ratio: Widescreen'
			),
		  'picturefill'		=> array(		
		    'active'	=> true,
		    'bp'		=> 1200,			
			),
		),
		
		'w1920' => array(
		  'active'			=> true,
		  'name'			=> 'w1920',
		  'width'			=> 1920,
		  'height'			=> false,
		  'crop'			=> true,
		  'ratio'			=> 'widescreen',
		  'orientation'		=> 'land', 				
		  'offset'			=> 0,					
		  'names_choose'	=> array(
		    'active'	=> true,
			'select'	=> 'Ratio: Widescreen'
			),
		  'picturefill'		=> array(
		    'active'	=> true,
		    'bp'		=> 'w',			
			),
		),
				
      );
	  
	  /**
	   * Which of the above should be used for the set_post_thumbnail_size()?
	   * 
	   * Note 1: This 'name' => array() will be used for set_post_thumbnail_size(), and will NOT (also) be used for the add_image_size() part of the process.
	   *
	   * The post_thumbnail is now more commonly known as the featured image. That is, it does not have to be a thumbnail in size. 
	   *
	   * Ref: http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
	   */
	  $arr_return['w1170o']['post_thumbnail'] = true;
	  
	  return $arr_return;
	}
	
	/**
	 * time to make the magic happen with a little help from our friend Class_WP_ezClasses_Theme_Add_Image_Size_1
	 */
    public function ezbs_add_image_size(){
  
      $obj_ezc_add_image_size = Class_WP_ezClasses_Theme_Add_Image_Size_1::ezc_get_instance();
	  
	  // $obj_ezc_add_image_size->set_remove_width_height(false);
	  
	  // $obj_ezc_add_image_size->set_jpeg_quality(80);	
	   
	  $arr_args['arr_args'] = $this->ezbs_add_image_size_args();
	  
	  // ais = add image size
	  $obj_ezc_add_image_size->ez_ais($arr_args);
	  
	  //$obj_ezc_add_image_size->set_image_size_names_choose_defaults(false);
	  
	  // isnc = image_size_names_choose (with is a stock WP filter) 
	  $obj_ezc_add_image_size->ez_isnc($arr_args);	  
	  
    } 
  }
}

$obj_setup_ezbs_add_image_size = new Class_WP_ezBoilerStrap_Add_Image_Size;