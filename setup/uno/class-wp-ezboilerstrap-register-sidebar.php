<?php

if (! class_exists('Class_WP_ezBoilerStrap_Register_Sidebar') ) {
  class Class_WP_ezBoilerStrap_Register_Sidebar{
  
    public function __construct(){
	  add_action('widgets_init', array($this, 'ezbs_register_sizebar') );
	}
  
    public function ezbs_register_sidebar_base(){
	
	  return array (
        'active'			=> true,  	// ezBS do not use this, but you certainly could
	    'description'   	=> 'WP ezBoilerStrap Default Description',
		'before_widget'		=> '<div id="WP-EZC-WIDGET-ID" class="wp-ezbs-widget WP-EZC-WIDGET-CLASS">', 
		'after_widget'		=> '</div>',
		'before_title'		=> '<div class="wp-ezbs-widget-title">',
		'after_title'		=> '</div>',
		);
	}
	
	public function ezbs_register_sizebar_args(){
	  $arr_return = array(
	    // header above							
	'header_above_one'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-above-one',
									'name'			=> 'Header Above Left',
									'id_css'		=> 'header-above-left-ds',
									'description'	=> 'Above the header, far left.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'header_above_two'	=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-above-two',
									'name'			=> 'Header Above Inner Left',
									'id_css'		=> 'header-above-center-left-ds',
									'description'	=> 'Above the header, inner left.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'header_above_thee'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-above-three',
									'name'			=> 'Header Above Inner Right',
									'id_css'		=> 'header-above-center-ds',
									'description'	=> 'Above the header, inner right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),									
								
	'header_above_four'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-above-four',
									'name'			=> 'Header Above Right',
									'id_css'		=> 'header-above-center-right-ds',
									'description'	=> 'Above the header, far right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),

	/**
	 * header main
	 */
	'header_main_one'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-main-one',
									'name'			=> 'Header Main',
									'id_css'		=> 'header-main-one-ds',
									'description'	=> 'Same row as the logo',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),	
	/**
	 * header below
	 */

	'header_below_one'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-below-one',
									'name'			=> 'Header Below Left',
									'id_css'		=> 'header-below-left-ds',
									'description'	=> 'Below the header, far left.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'header_below_two'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-below-two',
									'name'			=> 'Header Below Inner Left',
									'id_css'		=> 'header-below-center-left-ds',
									'description'	=> 'Below the header, inner left.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'header_below_three'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-below-three',
									'name'			=> 'Header Below Inner Right',
									'id_css'		=> 'header-below-center-ds',
									'description'	=> 'Below the header, inner right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),									
								
	'header_below_four'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'header-below-four',
									'name'			=> 'Header Below Right',
									'id_css'		=> 'header-below-center-right-ds',
									'description'	=> 'Below the header, far right.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
	/**
	 * footer above
	 */
	 
	'footer_above_one'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-above-one',
									'name'			=> 'Footer Above Left',
									'id_css'		=> 'footer-above-left-ds',
									'description'	=> 'Above the footer, far left',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'footer_above_two'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-above-two',
									'name'			=> 'Footer Above Inner Left',
									'id_css'		=> 'footer-above-center-left-ds',
									'description'	=> 'Above the footer, inner left',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'footer_above_three'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-above-three',
									'name'			=> 'Footer Above Inner Right',
									'id_css'		=> 'footer-above-center-ds',
									'description'	=> 'Above the footer, inner right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),									
								
	'footer_above_four'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-above-four',
									'name'			=> 'Footer Above Right',
									'id_css'		=> 'footer-above-center-right-ds',
									'description'	=> 'Above the footer, far right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),	
								
	/**
	 * footer	
	 */
	 
	'footer_one'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-one',
									'name'			=> 'Footer Left',
									'id_css'		=> 'footer-left-ds',
									'description'	=> 'Footer far left.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),

	'footer_two'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-two',
									'name'			=> 'Footer Inner Left',
									'id_css'		=> 'footer-center-left-ds',
									'description'	=> 'Footer inner left',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),

	'footer_three'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-three',
									'name'			=> 'Footer Inner Right',
									'id_css'		=> 'footer-center-ds',
									'description'	=> 'Footer inner right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),
								
	'footer_four'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-fur',
									'name'			=> 'Footer Right',
									'id_css'		=> 'footer-center-right-ds',
									'description'	=> 'Footer far right.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),	
																				
     // footer below			
	'footer_below_one'			=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-below-one',
									'name'			=> 'Footer Below Left',
									'id_css'		=> 'footer-below-left-ds',
									'description'	=> 'Below the Footer, far left',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),		
								
	'footer_below_two'	=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-below-two',
									'name'			=> 'Footer Below Inner Left',
									'id_css'		=> 'footer-below-center-left-ds',
									'description'	=> 'Below the Footer, inner left',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),	

	'footer_below_three'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-below-three',
									'name'			=> 'Footer Below Inner Right',
									'id_css'		=> 'footer-below-center-ds',
									'description'	=> 'Below the footer, inner right',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),																					

	'footer_below_four'		=> array( 
									'active'		=> true,
									'id_ds_unique'	=> 'footer-below-four',
									'name'			=> 'Footer Below Right',
									'id_css'		=> 'footer-below-center-right-ds',
									'description'	=> 'Below the footer, far right.',
									'class'			=> 'span4',
									'class_widget'	=> 'widget-class',
								),	
								
	/**
	 *
	 */ 
	'aside_left_one'		=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-left-one', 
									'name'			=> 'Aside Left Top',
									'id_css'		=> 'aside-left-middle-above-ds', 
									'description'	=> 'Left sidebar top',	
									'class'			=> 'aside-left-middle-above-ds',
									'class_widget'	=> 'widget-class',	
								),
								
	'aside_left_two'			=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-left-two', 
									'name'			=> 'Aside Left Down One',
									'id_css'		=> 'aside-left-middle-ds', 
									'description'	=> 'Left sidebar one down from the top',	
									'class'			=> 'aside-left-middle-ds',
									'class_widget'	=> 'widget-class',	
								),

	'aside_left_three'	=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-left-three', 
									'name'			=> 'Aside Left Middle Below',
									'id_css'		=> 'aside-left--middle-below-ds', 
									'description'	=> 'Left sidebar one up from the bottom',	
									'class'			=> 'aside-left-middle-below-ds',
									'class_widget'	=> 'widget-class',	
								),																				
								
	'aside_left_four'		=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-left-four', 
									'name'			=> 'Aside Left Bottom',
									'id_css'		=> 'aside-left-below-ds', 
									'description'	=> 'Left sidebar bottom',	
									'class'			=> 'aside-left-below-ds',
									'class_widget'	=> 'widget-class',
								),
								
	/**
	 *
	 */ 
	'aside_right_one'		=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-right-one', 
									'name'			=> 'Aside Right Top',
									'id_css'		=> 'aside-right-middle-above-ds', 
									'description'	=> 'Right sidebar top',	
									'class'			=> 'aside-right-middle-above-ds',
									'class_widget'	=> 'widget-class',	
								),
								
	'aside_right_two'			=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-right-two', 
									'name'			=> 'Aside Right Down One',
									'id_css'		=> 'aside-right-middle-ds', 
									'description'	=> 'Right sidebar one down from the top',	
									'class'			=> 'aside-right-middle-ds',
									'class_widget'	=> 'widget-class',	
								),

	'aside_right_three'	=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-right-three', 
									'name'			=> 'Aside Right Middle Below',
									'id_css'		=> 'aside-right--middle-below-ds', 
									'description'	=> 'Right sidebar one up from the bottom',	
									'class'			=> 'aside-right-middle-below-ds',
									'class_widget'	=> 'widget-class',	
								),																				
								
	'aside_right_four'		=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'aside-right-four', 
									'name'			=> 'Aside Right Bottom',
									'id_css'		=> 'aside-right-below-ds', 
									'description'	=> 'Right sidebar bottom',	
									'class'			=> 'aside-right-below-ds',
									'class_widget'	=> 'widget-class',
								),								
																	
	// content			
	'content_above'			=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'content-above',
									'name'			=> 'Content Above',
									'id_css'		=> 'content-above-ds',
									'description'	=> 'Below the header but above the main content and sidebars. Runs the full width.',
									'class' 		=> 'span12',
									'class_widget'	=> 'widget-class',
								),	
				
	'title_above'			=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'title-above',
									'name'			=> 'Title Above',
									'id_css'		=> 'title-above-ds',
									'description'	=> 'Between the asides and above the Title.',
									'class' 		=> 'span6',
									'class_widget'	=> 'widget-class',
								),	

	'title_below'			=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'title-below',
									'name'			=> 'Title Below',
									'id_css'		=> 'title-below-ds',
									'description'	=> 'Between the asides and below the Title.',
									'class'			=> 'span6',
									'class_widget'	=> 'widget-class',
								),			

	'content_below'			=> array(
									'active'		=> true,
									'id_ds_unique'	=> 'content-below',
									'name'			=> 'Content Below',
									'id_css'		=> 'content-below-ds',
									'description'	=> 'Between the asides and below the Content.',
									'class'			=> 'span6',
									'class_widget'	=> 'widget-class',
									),
																																										
  );
  
    return $arr_return;
  }


    public function ezbs_register_sizebar(){
  
      $obj_ezc_register_sizebar = Class_WP_ezClasses_Theme_Register_Sidebar_1::ezc_get_instance();
  
      $arr_args = array(
        'base'	 	 => $this->ezbs_register_sidebar_base(),
        'arr_args' => $this->ezbs_register_sizebar_args()
        );

        $obj_ezc_register_sizebar->ez_rs($arr_args);
    } 
  }
}
$obj_setup_register_sidebar = new Class_WP_ezBoilerStrap_Register_Sidebar;