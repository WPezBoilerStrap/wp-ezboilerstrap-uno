<?php

if (! class_exists('Class_WP_ezBoilerStrap_Add_Theme_Support') ) {
  class Class_WP_ezBoilerStrap_Add_Theme_Support{
  
    public function __construct(){
	
	  add_action('after_setup_theme', array($this, 'ezbs_add_theme_support'),40);
	}
	
	public function ezbs_add_theme_support_args(){
	
	  $arr_args = array(
	    
		 /**
		  * http://codex.wordpress.org/Post_Formats
		  */
		 'post-formats' => array(
		 
		   )
		   // http://codex.wordpress.org/Post_Thumbnails
		   
		   // http://codex.wordpress.org/Custom_Backgrounds
		   
		   // http://codex.wordpress.org/Custom_Headers
	  
	    );
	
	}
	
	/**
	 * http://codex.wordpress.org/Function_Reference/add_theme_support
	 */
	public function ezbs_add_theme_support(){
	
	  // add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	  
	  add_theme_support( 'post-thumbnails' );
	  
	  // add_theme_support( 'automatic-feed-links' );
	} 
  }
}

$obj_setup_ezbs_add_theme_support = new Class_WP_ezBoilerStrap_Add_Theme_Support;