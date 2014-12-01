<?php

/**
 * Reference
 *
 * - http://codex.wordpress.org/add_theme_support
 */

if (! class_exists('Class_WP_ezBoilerStrap_Add_Theme_Support') ) {
  class Class_WP_ezBoilerStrap_Add_Theme_Support{
  
    public function __construct(){
	
	  add_action('after_setup_theme', array($this, 'ezbs_add_theme_support'),40);
	}
	
	public function ezbs_add_theme_support_args(){
	
	  $arr_add_theme_support = array(
	  
	    /**
		 * http://codex.wordpress.org/add_theme_support#Post_Formats
		 *
		 * http://codex.wordpress.org/Post_Formats
		 */
		 
		'post_formats' => array(
		  'active'				=> false,
		  'feature'				=> 'post-formats',
		  'args_type'			=> 'active_bool',   // 'value_pairs', 'active_bool', 'none'
		  'args' => array(
		    'aside'		=> false,
			'gallery'	=> false,
			'link'		=> false,
			'image'		=> false,
			'quote'		=> false,
			'status'	=> false,
			'video'		=> false,
			'audio'		=> false,
			'chat'		=> false
			),
		  ),
		  
		/**
		 * http://codex.wordpress.org/add_theme_support#Post_Thumbnails
		 *
		 * -- "be aware that add_theme_support( 'post-formats' ) will override the formats as defined by the parent theme, not add to it."
		 * -- "This feature must be called before the init hook is fired. That means it needs to be placed directly into functions.php or within a function attached to the 'after_setup_theme' hook."
		 * -- "For custom post types, you can also add post thumbnails using the register_post_type function as well."
		 *
		 * http://codex.wordpress.org/Post_Thumbnails
		 */
		 
		'post_thumbnails' => array(
		  'active'				=> true,
		  'feature'				=> 'post-thumbnails',
		  'args_type'			=> 'active_bool',   // 'value_pairs', 'active_bool', 'none'			
		  'args' => array(
		    'post'			=> true,
			'page'			=> true,
			'custom_cpt_1'	=> false,
			'custom_cpt_2'	=> false,
			),
		  ),
		 
		/**
		 * http://codex.wordpress.org/add_theme_support#Custom_Background
		 *
		 * http://codex.wordpress.org/Custom_Backgrounds
		 */
		 
		'custom_background' => array(
		  'active'				=> false,
		  'feature'				=> 'custom-background',
		  'args_type'			=> 'value_pairs',   // 'value_pairs', 'active_bool', 'none'			
		  'args' => array(
		    'default-color'          => '',
			'default-image'          => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
			),
		  ),
		 
		/**
		 * http://codex.wordpress.org/add_theme_support#Custom_Header
		 *
		 * http://codex.wordpress.org/Custom_Headers
		 */
		 
		'custom_header' => array(
		  'active'				=> false,
		  'feature'				=> 'custom-header',
		  'args_type'			=> 'value_pairs',   // 'value_pairs', 'active_bool', 'none'			
		  'args' => array(
		    'default-image'          => '',
			'random-default'         => false,
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => false,
			'flex-width'             => false,
			'default-text-color'     => '',
			'header-text'            => true,
			'uploads'                => true,
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
			),
		  ),
		 
		/**
		 * http://codex.wordpress.org/add_theme_support#Feed_Links
		 *
		 * 
		 */
		 
		'feed_links' => array(
		  'active'		=> false,
		  'feature'		=> 'feed-links',
		  'args_type'	=> 'none',   // 'value_pairs', 'active_bool', 'none'
		  ),
		 
		/**
		 * http://codex.wordpress.org/add_theme_support#HTML5
		 *
		 * 
		 */

		'html_5' => array(
		  'active'				=> true,
		  'feature'				=> 'html5',
		  'args_type'			=> 'active_bool',   // 'value_pairs', 'active_bool', 'none'			
		  'args' => array(
		    'comment-list'	=> true,
			'comment-form'	=> true,
			'search-form'	=> true,
			'gallery'		=> true,
			'caption' 		=> true,
			),
		  ),
		 
		/**
		 * http://codex.wordpress.org/add_theme_support#Title_Tag
		 *
		 * 
		 */	
		 
		'title_tag' => array(
		  'active'		=> true,
		  'feature'		=> 'title-tag',
		  'args_type'	=> 'none',   // 'value_pairs', 'active_bool', 'none'

		  ),
		 
		/**
		 * http://aesopstoryengine.com/developers/
		 */
		 
		// TODO add define(‘AI_CORE_UNSTYLED’,true);
		
		'aesop'	=> array(
		  'active'				=> false,
		  'feature'				=> 'aesop-component-styles',
		  'args_type'			=> 'value_pairs',   // 'value_pairs', 'active_bool', 'none'			
		  'args' => array(
		    'parallax'		=> true,
			'image'			=> true,
			'quote'			=> true,
			'gallery'		=> true,
			'content'		=> true,
			'video'			=> true,
			'audio'			=> true,
			'collection'	=> true,
			'chapter'		=> true,
			'document'		=> true,
			'character'		=> true,
			'map'			=> true,
			'timeline'		=> true,
			),
		 ) 
	   );
	   
	   return $arr_add_theme_support;
	}
	
		
	/**
	 * http://codex.wordpress.org/Function_Reference/add_theme_support
	 */
	public function ezbs_add_theme_support(){
	
	  $arr_ats_args = $this->ezbs_add_theme_support_args();
	  
	  $obj_ezc_add_theme_support = Class_WP_ezClasses_Theme_Add_Theme_Support_1::ez_new();
	  
	  $obj_ezc_add_theme_support->ez_ats($arr_ats_args);
	

	} 
  }
}

$obj_setup_ezbs_add_theme_support = new Class_WP_ezBoilerStrap_Add_Theme_Support;