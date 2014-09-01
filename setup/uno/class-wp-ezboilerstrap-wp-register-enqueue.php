<?php

if (! class_exists('Class_WP_ezBoilerStrap_WP_Register_Enqueue') ) {
  class Class_WP_ezBoilerStrap_WP_Register_Enqueue{
  
    public function __construct(){
	
	  add_action('init', array($this, 'ezbs_wp_register_enqueue'));

	}

    /**
	 *
	 */
	public function ezbs_wp_enqueue_args(){
  
      $arr_return = array (
	  
	    'font_lobster' => array(
			'active'			=> true,
			'host'				=> 'google',					// for internal use
			'note'				=> 'TODO font-family:',			// for internal use
			'conditional_tags'	=> array(),
			'type'				=> 'style',
			'handle'			=> 'font_google_lobster',
			'src'				=> '//fonts.googleapis.com/css?family=Lobster',
			'deps'				=> array(),
			'ver'				=> 'v1',
			'media'				=> 'all',	// media is required for type: style
		//	'in_footer'			=>	NULL,	// in_footer is required for type: script - both are listed for consistency / convenience
		),
		
	    'bootstrap_css' => array(
			'active'			=> true,
			'host'				=> 'maxcdn',					// for internal use
			'note'				=> 'TODO',						// for internal use
			'conditional_tags'	=> array(),
			'type'				=> 'style',
			'handle'			=> 'bootstrap_css',
			'src'				=> '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css',
			'deps'				=> array(),
			'ver'				=> 'maxcdn3.2.0',
			'media'				=> 'all',	// media is required for type: style
		//	'in_footer'			=>	NULL,	// in_footer is required for type: script - both are listed for consistency / convenience
		),
		
	    'jquery_cnd' => array(
			'active'			=> true,
			'host'				=> 'google',					// for internal use
			'note'				=> 'TODO',						// for internal use
			'conditional_tags'	=> array(),
			'type'				=> 'script',
			'handle'			=> 'jquery_cnd',
			'src'				=> '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
			'deps'				=> array(),
			'ver'				=> 'google_2.1.1',
		//	'media'				=> 'all',	// media is required for type: style
			'in_footer'			=>	true,	// in_footer is required for type: script - both are listed for consistency / convenience
		),
		
		'bootstrap_js' => array(	
			'active'			=> true,
			'host'				=> 'maxcdn',					// for internal use
			'note'				=> 'TODO',						// for internal use
			'conditional_tags'	=> array(), // example of only load on the 404: array('tags' => array('is_404' => true)),
			'type'				=> 'script',
			'handle'			=> 'bootstrap_js',
			'src'				=> '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',
			'deps'				=> array('jquery_cnd'),
			'ver'				=> 'maxcdn_3.2.0',
		//	'media'				=> NULL,
			'in_footer'			=> true,
		),
		
	    'font_awesome_css' => array(
			'active'			=> true,
			'host'				=> 'maxcdn',					// for internal use
			'note'				=> 'TODO',						// for internal use
			'conditional_tags'	=> array(),
			'type'				=> 'style',
			'handle'			=> 'fa_css',
			'src'				=> '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
			'deps'				=> array(),
			'ver'				=> 'maxcdn_4.2.0',
			'media'				=> 'all',	// media is required for type: style
		//	'in_footer'			=>	NULL,	// in_footer is required for type: script - both are listed for consistency / convenience
		),
		
		'wp_comment_reply' => array(	
			'active'			=> true,
			'host'				=> 'wp core',					// for internal use
			'note'				=> 'TODO',						// for internal use
			'conditional_tags'	=> array(
			  'tags' => array(
			    'is_singular'		=> true,
				'get_option'		=> 'thread_comments',
				'is_front_page'		=> false,
			    ),
			), // example of only load on the 404: array('tags' => array('is_404' => true)),
			'type'				=> 'script',
			'handle'			=> 'comment-reply',
			//'src'				=> '//na',
			'deps'				=> array(),
			'ver'				=> 'wp_3.9.x',
		//	'media'				=> NULL,
			'in_footer'			=> true,
		),

	  );
	  
	  return $arr_return;
	}
	
    public function ezbs_wp_register_enqueue(){
	
	  add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
	  
	 // add_action('login_enqueue_scripts', array($this, 'login_enqueue_scripts'));
	  
	 // add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts')); 
	}
  
    /**
     *
     */
    public function wp_enqueue_scripts(){
	
	  $obj_ezc_wp_enqueue = Class_WP_ezClasses_ezCore_WP_Enqueue::ezc_get_instance();
	  
	  $arr_args['arr_args'] = $this->ezbs_wp_enqueue_args();
	
      // register'em
      $obj_ezc_wp_enqueue->ez_rs($arr_args);
	
      // now enqueue'em
      $obj_ezc_wp_enqueue->wp_enqueue_do($this->ezbs_wp_enqueue_args());
    }
  
    /**
     * NOT IN USE - Placehold / example
     */
    public function login_enqueue_scripts(){
  
	  $obj_ezc_wp_enqueue = Class_WP_ezClasses_ezCore_WP_Enqueue::ezc_get_instance();
  
      $arr_args['arr_args'] = $this->ezbs_wp_enqueue_args();
  
       // register'em
      $obj_ezc_wp_enqueue->ez_rs($arr_args);
	
      // now enqueue'em
      $obj_ezc_wp_enqueue->wp_enqueue_do($this->ezbs_wp_enqueue_args());
    }
  
    /**
     * NOT IN USE - Placehold / example
     */
    public function admin_enqueue_scripts(){
    
	  $obj_ezc_wp_enqueue = Class_WP_ezClasses_ezCore_WP_Enqueue::ezc_get_instance();
  
      $arr_args['arr_args'] = $this->ezbs_wp_enqueue_args();
  
       // register'em
      $obj_ezc_wp_enqueue->ez_rs($arr_args);
	
      // now enqueue'em
      $obj_ezc_wp_enqueue->wp_enqueue_do($this->ezbs_wp_enqueue_args());
    }
  }
}
$obj_setup_ezbs_wp_register_enqueue = new Class_WP_ezBoilerStrap_WP_Register_Enqueue;