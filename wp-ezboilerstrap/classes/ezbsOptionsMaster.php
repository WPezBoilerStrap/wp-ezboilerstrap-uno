<?php
/** 
 * Define your own boilerplate of Options to be used across all / most of your themes. Site specifics are defined in the ezbsOptions class.
 *
 * For example, a hot method you fancy gets added to the ezClasses Cleanup Admin class. You add it to your OptionsBoilerplate and then simply update the OptionsBoilerplate on all your themes/sites (as opposed to updating each site's Options one by one).
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
 * --- 15 August 2013 = Ready.
 */
 
 
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}

/*
 * Provided you've done some WP theme dev, most of this should look fairly obvious. 
 * None the less, there is some commenting when it seems appropriate.
 */


if (!class_exists('ezbsOptionsMaster')) {
	class ezbsOptionsMaster extends Class_WP_ezClasses_Master_Singleton{

		protected $_arr_columns_css_classes;
		protected $_arr_layout_objects;		
		protected $_arr_setup_simple_methods_before;
		protected $_arr_setup_simple_methods_after;
		
		protected $_arr_set_post_thumbnail_size;
		protected $_arr_add_image_size;
		protected $_arr_register_nav_menus;
		protected $_arr_wp_enqueue_web_fonts;
		protected $_arr_wp_enqueue_scripts_and_styles;
		
		protected $_arr_ui_controls_blog_paging_controls;
		protected $_arr_ui_controls_breadcrumbs;
		protected $_arr_ui_controls_blog_sort;

		protected $_arr_register_sidebar_base_args;
		protected $_arr_register_sidebar_args;
		protected $_arr_404_message_defaults;
		protected $_arr_404_searchform;
		protected $_arr_searchform_defaults;
		
		protected $_arr_cleanup_theme;
		protected $_arr_cleanup_admin;
		

	
		protected function __construct(){	
			parent::__construct(); 
		}
		
		
		public function ezc_init(){    
		
			$this->ezbs_options_init();
		
		}
		
		protected function ezbs_options_init(){
		
			/**
			 * Setting 'left', 'center' and/or 'right' to (a bool of) false (.e.g., 'left' => false) will cause a section not to be displayed, 
			 * else (if using Bootstrap) then 'span#';
			 */
			
			$this->_arr_columns_css_classes = array(
												'left'		=> 'span3', 
												'center'	=> 'span6', 
												'right'		=> 'span3'
											);
											
																									
			/**
			 * Defines your base / default set of template parts for your theme. These are the key to Layout Objects Management.
			 *
			 * 'tp' = template part. You need not add the .php. That much we can assume. Also, there are some cases (e.g., menus) where the tp actually names a transient.
			 * This might strike you are a bit wonky, but those transients are just HTML so they still represent a layout object. 
			 *
			 * Note: The array key is used to define two properties (for each key) in ezbsLayoutObjects:
			 *
			 * -- $_bool_{key}_active
			 * -- $_str_{key}_tp_folder
			 * -- $_str_{key}_tp. 
			 *
			 * They correspond to the values on right. These two properties are the key to Layout Objects Management. 
			 */
			 
			$this->_arr_layout_objects = array(	
											'aside_left_wrap'							=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',
																								'tp'		=> 'ezbs-aside-left-wrap',
																							),
											'aside_left' 								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																				
																								'tp'		=> 'ezbs-aside-left-three-ds',
																							),
											'aside_right_wrap'							=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																				
																								'tp'		=> 'ezbs-aside-right-wrap',
																							),
											'aside_right' 								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																				
																								'tp'		=> 'ezbs-aside-right-three-ds',
																							),																			
											'breadcrumbs'								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																				
																								'tp'		=> 'ezbs-breadcrumbs',
																							),
											'header_wrap' 								=> array(
																								'active'	=> true,
																								'folder'	=> 'header',	
																								'tp'		=> 'header-wrap',
																							),
											'header_above'								=> array(
																								'active'	=> true,
																								'folder'	=> 'header',
																								'tp'		=> 'header-above',
																							),
											'menu_global' 								=> array(
																								'active'	=> true,
																								'folder'	=> 'menus',																				
																								'tp'		=> 'menu-global',
																							),																																																	
											'menu_global_class_brand'					=> array(
																								'active'	=> true,
																								'folder'	=> 'menus',																					
																								'tp'		=> 'menu-global-class-brand',
																							),
											'menu_global_transient'						=> array(
																								'active'	=> true,
																								'folder'	=> '',								// fyi - folders don't get used for transients																																								
																								'tp'		=> 'ezbs_transient_menu_global',	// note the underscores
																							),
											'header_main_wrap'							=> array(
																								'active'	=> true,
																								'folder'	=> 'header',																																										
																								'tp'		=> 'header-main-wrap',
																							),
											'header_main'								=> array(
																								'active'	=> true,
																								'folder'	=> 'header',																																										
																								'tp'		=> 'header-main',
																							),
											'menu_main' 								=> array(
																								'active'	=> true,
																								'folder'	=> 'menus',																																										
																								'tp'		=> 'menu-main',
																							),			
											'menu_main_class_brand'						=> array(
																								'active'	=> true,
																								'folder'	=> 'menus',																																										
																								'tp'		=> 'menu-main-class-brand',
																							),
											'menu_main_transient'						=> array(
																								'active'	=> true,
																								'folder'	=> '',																																										
																								'tp'		=> 'ezbs_transient_menu_main',		// note the under scores
																							),																				
											'header_below'								=> array(
																								'active'	=> true,
																								'folder'	=> 'header',																																										
																								'tp'		=> 'header-below',
																							),
											'index_archive_content_above_above'			=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-archive-content-above-above',
																							),																				
											'content_above'								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																																										
																								'tp'		=> 'ezbs-content-above',
																							),
											'index_archive_content_above_below'			=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-archive-content-above-below',
																							),																				
											'index_content_center' 						=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-content-center',
																							),
											'index_content_center_while_have_posts'		=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-content-center-while-have-posts',
																							),
											'index_sort_controls' 						=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-content-center-sort-controls',
																							),
											'index_paging_controls'						=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-content-center-paging-controls',
																							),
											'single_paging_controls'					=> array(
																								'active'	=> true,
																								'folder'	=> 'single',																																										
																								'tp'		=> 'single-content-center-paging-controls',
																							),
											'title_above'								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																																										
																								'tp'		=> 'ezbs-title-above',
																							),
											'title_below' 								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																																										
																								'tp'		=> 'ezbs-title-below',
																							),																	
											'page_content_center_wrap'					=> array(
																								'active'	=> true,
																								'folder'	=> 'page',																																									
																								'tp'		=> 'page-content-center-wrap',
																							),
											'page_content_center'						=> array(
																								'active'	=> true,
																								'folder'	=> 'page',																																										
																								'tp'		=> 'page-content-center',
																							),
											'single_content_center'						=> array(
																								'active'	=> true,
																								'folder'	=> 'single',																																										
																								'tp'		=> 'single-content-center',
																							),
											'index_archive_content_below_above'			=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-archive-content-below-above',
																							),																							
											'content_below'								=> array(
																								'active'	=> true,
																								'folder'	=> 'shared',																																										
																								'tp'		=> 'ezbs-content-below',
																							),
											'index_archive_content_below_below'			=> array(
																								'active'	=> true,
																								'folder'	=> 'index',																																										
																								'tp'		=> 'index-archive-content-below-below',
																							),																	
											'footer_wrap'								=> array(
																								'active'	=> true,
																								'folder'	=> 'footer',																																										
																								'tp'		=> 'footer-wrap',
																							),
											'footer_above'								=> array(
																								'active'	=> true,
																								'folder'	=> 'footer',																																										
																								'tp'		=> 'footer-above-three-ds',
																							),
											'menu_footer'								=> array(
																								'active'	=> true,
																								'folder'	=> 'menus',																																										
																								'tp'		=> 'menu-footer',
																							),
											'menu_footer_class_brand' 					=> array(
																								'active'	=> true,
																								'folder'	=> 'menus',																																										
																								'tp'		=> 'menu-footer-class-brand',
																							),
											'menu_footer_transient'						=> array(
																								'active'	=> true,
																								'folder'	=> '',																																										
																								'tp'		=> 'ezbs_transient_menu_footer',		// note the underscores
																							),																				
											'footer_main'								=> array(
																								'active'	=> true,
																								'folder'	=> 'footer',																																										
																								'tp'		=> 'footer-main',
																							),
											'footer_below'								=> array(
																								'active'	=> true,
																								'folder'	=> 'footer',																																										
																								'tp'		=> 'footer-below',
																							),
											'footer_bottom' 							=> array(
																								'active'	=> true,
																								'folder'	=> 'footer',																																										
																								'tp'		=> 'footer-bottom',
																							),																							
										);
																	
														
			/*									
			* The actual thumbnail size is in many cases irrelevant since all the other image sizes (defined via add_image_size) are also readily available. 
			* The "thumbnail" isn't quite as special as it used to be.
			*
			* Note: If set_post_thumbnail_size_do() is passed an array with more than one key it will use the first key / entry. You can use the active flag to manage this.
			*/
			$this->_arr_set_post_thumbnail_size = array(
													'w160_h120' => array(
																		'active'	=> true,
																		'width' 	=> '160',
																		'height'	=> '120',
																		'crop'		=> false,
																	),
																	
													'w320_h240' => array(
																		'active'	=> true,
																		'width' 	=> '320',
																		'height'	=> '240',
																		'crop'		=> false,
																	),
													);
													
			/* 
			* http://codex.wordpress.org/Function_Reference/add_image_size
			*
			* FYI #1 - http://www.studiograsshopper.ch/web-development/wordpress-featured-images-add_image_size-resizing-and-cropping-demo/
			*
			* FYI #2 - http://wordpress.org/support/topic/how-set-default-image-size
			*
			* FYI #3 - If one dimension is set to '9999' ("infinity") then WP will resize to comply with the other (fixed) dimension 
			*/
			
			
			
	// TODO -> http://www.studiograsshopper.ch/code-snippets/wordpress-list-all-image-sizes-in-media-uploader/

			$this->_arr_add_image_size = array (
											'w50_h50' => array(
																'active'	=> true,
																'width'		=> '50',
																'height'	=> '50',
																'crop'		=> true,
															),
											'w250_h100' => array(
																'active'	=> true,
																'width'		=> '250',
																'height'	=> '100',
																'crop'		=> true,
															),
											'w250_h250' => array(
																'active'	=> true,
																'width'		=> '250',
																'height'	=> '250',
																'crop'		=> true,
															),
											);
											
			/**
			 * Define your menus
			 *
			 * More info: http://codex.wordpress.org/Function_Reference/wp_nav_menu
			 *
			 * *Important*
			 *
			 * 1) 'container_id' must match the data-target as defined in the Bootstrap button for a particular nav.
			 *
			 * 2) NOTE: Transients are currently a TODO. The menus *are* stored in transients but those are over-written with each page request. To be 
			 * 			on the safe side, leave 'transient_active'	=> false. At least for now. Thanks. 
			 */
			
			$this->_arr_nav_menus = array(	
										'menu_global'	=> array(
																'active'			=> true,
																'transient_active'	=> false,
																'transient_name'	=> 'ezbs_transient_menu_global',
																'transient_time'	=> 60*60*24*7,
																
																'description'		=> 'Global Menu',  // key => description is used for register_nav_menus()
																'theme_location'	=> 'menu_global',
																'menu'				=> 'menu_global',
																'container_class'	=> 'nav-collapse',
																'container_id'		=> 'wp-ezbs-menu-global-wnm',
																'menu_class'		=> 'nav',
																'echo' 				=> false,
																'fallback_cb'		=> false,
																'menu_id'			=> 'wp-ezbs-header-menu-global',
																'walker' 			=> new Class_WP_ezClasses_Menu_Walker_One()
															),
															
										'menu_main'		=> array(
																'active'			=> true,
																'transient_active'	=> false,
																'transient_name'	=> 'ezbs_transient_menu_main',
																'transient_time'	=> 60*60*24*7,

																'description'		=> 'Main Menu',	  // key => description is used for register_nav_menus()															
																'theme_location'	=> 'menu_main',
																'menu'				=> 'menu_main',
																'container_class'	=> 'nav-collapse',
																'container_id'		=> 'wp-ezbs-menu-main-wnm',
																'menu_class'		=> 'nav',
																'echo'				=> false,
																'fallback_cb'		=> false,
																'menu_id'			=> 'wpbs-header-menu-main',
																'walker' 			=> new  Class_WP_ezClasses_Menu_Walker_One()																	
															),
															
										'menu_footer'	=> array(
																'active' 			=> true,
																'transient_active'	=> false,
																'transient_name'	=> 'ezbs_transient_menu_footer',	
																'transient_time'	=> 60*60*24*7,

																'description'		=> 'Footer Menu',   // key => description is used for register_nav_menus()															
																'theme_location'	=> 'menu_footer',
																'menu'				=> 'menu_footer',
																'container_class'	=> 'nav-collapse',
																'container_id'		=> 'wp-ezbs-menu-footer-wnm',
																'menu_class'		=> 'nav',
																'echo'				=> false,
																'fallback_cb'		=> false,
																'menu_id'			=> 'wp-ezbs-footer-menu-footer',
																'walker' 			=> new Class_WP_ezClasses_Menu_Walker_One()																			
															),
									);
											
			/*
			 * -- FONTS ---------------------------------------------------------------------------------------------------------------------
			 *
			 * IMPORTANT: type => 'style' and type => 'script' are combined into a single array so that it's easier to setup and manage combinations
			 * that include both types. 
			 *
			 * ** FYI **
			 * (@link) http://designshack.net/articles/css/10-great-google-font-combinations-you-can-copy/   <<< See also the comments
			 * (@link) http://designshack.net/articles/typography/10-more-great-google-font-combinations-you-can-copy/
			 *
			 * Type => 'style' - e.g. Google Web Fonts - http://www.google.com/webfonts
			 *
			 * Type => 'script' - e.g., Adobe Web Fonts - http://html.adobe.com/edge/webfonts/
			 */
		

			$this->_arr_wp_enqueue_web_fonts = array ( 
			
							'font_lobster'					=> array(
																	'active'			=> true,
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> 'ezbsOptions',
																	
																	'action'			=> array(
																	                          'front' => true,
																							  'admin' => false,
																							  'login' => false,
																							  ),

																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),
																	'type'				=> 'style',
																	'handle'			=> 'font_google_lobster',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Lobster',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',	// media is required for type: style
																	'in_footer'			=>	NULL,	// in_footer is required for type: script - both are listed for consistency / convenience
																),
																	
							'font_cabin'					=> array(
																	'active'			=> true,
																	'conditional_tags'	=> array(
																								'tags' => array(
																												'is_admin' => false,
																											),
																							),									
																	'type'				=> 'style',
																	'host'				=> 'google',
																	'note'				=> 'TODO font-family:',
																	'source'			=> 'ezbsOptions',
																	'handle'			=> 'font_google_cabin',
																	'src'				=> 'http://fonts.googleapis.com/css?family=Cabin',
																	'deps'				=> false,
																	'ver'				=> 'v1',
																	'media'				=> 'all',
																	'in_footer'			=>	NULL,
																),
													);

			/*
			 * Enqueue scripts and stylesheets
			 *
			 * Note: In terms of what's happeing under the hood (so to speak) there's no real difference between the fonts (above) and these scripts and stylesheets. 
			 * They're separated for convenience and maintainability. 
			 */
			$this->_arr_wp_enqueue_scripts_and_styles = array(
															'jquery_cdn'			=> array(	
																							'active'			=> true,
																							'conditional_tags'	=> array(
																														'tags' => array(
																																		'is_admin' => false,
																																	),
																													),
																							'type'				=> 'script',
																							'note'				=> "be sure to: wp_deregister_script('jquery')",
																							'handle'			=> 'jquery',
																							'src'				=> 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',
																							'deps'				=> false,
																							'ver'				=> 'google_1.x.x',
																						//	'media'				=> NULL,	
																							'in_footer'			=> true,
																						),

															'bootstrap_css'			=> array(	
																							'active'			=> true,
																							'conditional_tags'	=> array(
																														'tags' => array(
																																		'is_admin' => false,
																																	),
																													),
																							'type'				=> 'style',
																							'handle'			=> 'bootstrap_css',
																							'src'				=> 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css',
																							'deps'				=> false,
																							'ver'				=> 'netdna_2.3.0',
																							'media'				=> 'all',
																						//	'in_footer'			=> NULL,
																						),
														
															'bootstrap_js'			 => array(	
																							'active'			=> true,
																							'conditional_tags'	=> array(
																														'tags' => array(
																																		'is_admin' => false,
																																	),
																													),
																							'type'				=> 'script',
																							'handle'			=> 'bootstrap_js',
																							'src'				=> 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js',
																							'deps'				=> array('jquery'),
																							'ver'				=> 'netdna_2.3.0',
																						//	'media'				=> NULL,
																							'in_footer'			=> true,
																						),
														
															'bootstrap_font_awesome' =>	array(	
																							'active'			=> true,
																							'conditional_tags'	=> array(
																														'tags' => array(
																																		'is_admin' => false,
																																	),
																													),
																							'type'				=> 'style',
																							'handle' 			=> 'bootstrap_font_awesome',
																							'src' 				=> 'http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css',
																							'deps' 				=> false,
																							'ver' 				=> 'netdna_3.0.2',
																							'media' 			=> 'all',
																						//	'in_footer'			=> NULL,
																						),																																											
											
														);
/*
* == REFACTORED COMPLETE (Above the line) =====================================================================================================
*/
	
			/**
			 * Kinda sorta like a having a language file. Except, these options are not about language per se, but about customizing the UX (labels) for the particular client / theme. 
			 *
			 * That is, just because the language is correct does not means the experience is. 
			 */										
			$this->_arr_ui_controls_blog_paging_controls = array(	
																'next'							=> 'Next',
																'next_class'					=> 'icon-chevron-right',  
																'newer'							=> ' Newer',
																'newer_class'					=> 'icon-chevron-right',
																'previous'						=> 'Prev',
																'previous_class'				=> 'icon-chevron-left',
																'older'							=> 'Older ',
																'older_class'					=> 'icon-chevron-left',
															);
										
			$this->_arr_ui_controls_breadcrumbs = array(
														'breadcrumbs_inner_wrap_class'	=> 'span12',
														'breadcrumbs_home' 				=> '<span class="icon-home"></span>',   // FYI - text / string (e.g., 'Home') is also allowed for breadcrumbs-home
														'breadcrumbs_separator_class'	=> 'icon-chevron-right',
														'breadcrumbs_category_label'	=> 'Category: ', // FYI - you can add a span here with a Font Awesome separator if you want to get fancy
														'breadcrumbs_search_label'		=> 'Search Term: ',
														'breadcrumbs_tag_label'			=> 'Tag: ',
														'breadcrumbs_author_label'		=> 'Author: ',
														'breadcrumbs_404_label'			=> '404 Error ',
														'breadcrumbs_page_open'			=> ' (',
														'breadcrumbs_page_label'		=> 'Page ',
														'breadcrumbs_page_close'		=> ') ',
													);
	
			$this->_arr_ui_controls_blog_sort_labels = array(	
															'label_post_date'					=> 'Date',	// format: label- . value from label_order array
															'label_post_date_hover_title'		=> 'Sort on Date', // format: label- . value from label_order array . -hover-title
															'label_title'						=> 'Title',
															'label_title_hover_title'			=> 'Sort on Title',
															'label_author_name'					=> 'Author',
															'label_author_name_hover_title' 	=> 'Sort on Author',
															'label_comment_count'				=> 'Popular',
															'label_comment_count_hover_title'	=> 'Sort on Comment Count',
															'label_rand'						=> 'Random',
															'label_rand_hover_title'			=> 'Surprize me',
														);
			/**
			 * 'label_order' will define which sort tabs are displayed and in what order. 
			 * Remove anything unwanted (but it's recomended you leave the corresponding 'labels' just in case you change your mind. 
			 */
			$this->_arr_ui_controls_blog_sort = array (	
													'active'				=> true, 
													'label_order'			=> array('post_date', 'title', 'author_name','comment_count','rand'), // display order left to right. In your child method you can remove any you don't want to display
													'labels' 				=> $this->_arr_ui_controls_blog_sort_labels,
													'blank_class'			=> 'icon-sign-blank opacity-zero',  // TODO 
													'ul_class'				=> 'nav nav-tabs',  // FYI - you might also wish to try Bootstrap nav-pills
													'li_class'				=> 'menu-item',
													'sort_up_class'			=> 'icon-chevron-up',
													'sort_down_class'		=> 'icon-chevron-down', 
													'sort_random_class'		=> 'icon-repeat',
												);
												
			/* 
			* Register Sidebar and Dynamic Sidebar
			*
			*  FYI http://codex.wordpress.org/Function_Reference/register_sidebar		
			*
			* - What you don't define in the defaults must be defined in the individual arr_register_sidebar_args list below.
			* - That said, you can define defaults here and override them in the _arr_register_sidebar_args on a widget by widget basis.
			*
			* - IMPORTANT - The case sensitve slugs WP-EZC-WIDGET-ID and WP-EZC-WIDGET-CLASS will be preg_replace() with the 'id_css' and 'class' specified.
			*/												
			$this->_arr_register_sidebar_base_args = array (
															'active'			=> true,  	// ezBS do not use this, but you certainly could
															'description'   	=> 'WP ezBoilerStrap Default Description',
															'before_widget'		=> '<div id="WP-EZC-WIDGET-ID-%1$s" class="wp-ezbs-widget WP-EZC-WIDGET-CLASS">', 
															'after_widget'		=> '</div>',
															'before_title'		=> '<div class="wp-ezbs-widget-title">',
															'after_title'		=> '</div>',	
															);
			/*
			 * Important: The 'id_ds_unique' (ds = dynamic sidebar) must be unique, lowercase, with no spaces. 
			 * 
			 * (@link http://codex.wordpress.org/Function_Reference/register_sidebar)	
			 *
			 * 'id_ds_unique' is used as the identifier for WP to take the widgets in a given dynamic sidebar and render them on the website. That is, this list defines the dynamic
			 * sidebars on the Admin > Appearance > Widgets page. It's up to the theme to display them. To managing ds displaying see method: ezbcLayoutObjects > dynamic_sidebar_defaults()
			 *
			 * The id_css is used as part of the css id. It can have spaces (if you want to add more than one class).
			 *
			 * Typically 'id_ds' and 'id_css' will be the same, but you are not forced to do so. 
			 */	
			 
			$this->_arr_register_sidebar_args = array( 
													'aside_left_above'		=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-left-above', 
																					'name'			=> 'Aside Left Above',
																					'id_css'		=> 'aside-left-above-ds', 
																					'description'	=> 'Left sidebar above',	
																					'class'			=> 'aside-left-above-ds',
																					'class_widget'	=> 'widget-class',																					
																				),

													'aside_left_middle_above'	=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-left-middle-above', 
																					'name'			=> 'Aside Left Middle Above',
																					'id_css'		=> 'aside-left-middle-above-ds', 
																					'description'	=> 'Left sidebar middle above',	
																					'class'			=> 'aside-left-middle-above-ds',
																					'class_widget'	=> 'widget-class',	
																				),
																				
													'aside_left_middle'			=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-left-middle', 
																					'name'			=> 'Aside Left Middle',
																					'id_css'		=> 'aside-left-middle-ds', 
																					'description'	=> 'Left sidebar middle',	
																					'class'			=> 'aside-left-middle-ds',
																					'class_widget'	=> 'widget-class',	
																				),

													'aside_left_middle_below'	=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-left-middle-below', 
																					'name'			=> 'Aside Left Middle Below',
																					'id_css'		=> 'aside-left--middle-below-ds', 
																					'description'	=> 'Left sidebar middle below',	
																					'class'			=> 'aside-left-middle-below-ds',
																					'class_widget'	=> 'widget-class',	
																				),																				
																				
													'aside_left_below'		=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-left-below', 
																					'name'			=> 'Aside Left Below',
																					'id_css'		=> 'aside-left-below-ds', 
																					'description'	=> 'Left sidebar below',	
																					'class'			=> 'aside-left-below-ds',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													'aside_right_above'		=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-right-above', 
																					'name'			=> 'Aside Right Above',
																					'id_css'		=> 'aside-right-above-ds', 
																					'description'	=> 'Right sidebar above',	
																					'class'			=> 'aside-right-above-ds',
																					'class_widget'	=> 'widget-class',
																				),	

													'aside_right_middle_above'	=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-right-middle-above', 
																					'name'			=> 'Aside Right Middle Above',
																					'id_css'		=> 'aside-right-middle-above-ds', 
																					'description'	=> 'Right sidebar middle above',	
																					'class'			=> 'aside-right-middle-above-ds',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'aside_right_middle'	=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-right-middle', 
																					'name'			=> 'Aside Right Middle',
																					'id_css'		=> 'aside-right-middle-ds', 
																					'description'	=> 'Right sidebar middle',	
																					'class'			=> 'aside-right-middle-ds',
																					'class_widget'	=> 'widget-class',
																				),	

													'aside_right_middle_below'	=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-right-middle-below', 
																					'name'			=> 'Aside Right Middle Below',
																					'id_css'		=> 'aside-right-middle-below-ds', 
																					'description'	=> 'Right sidebar middle below',	
																					'class'			=> 'aside-right-middle-below-ds',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'aside_right_below'		=> array(
																					'active'		=> true,
																					'id_ds_unique'	=> 'aside-right-below', 
																					'name'			=> 'Aside Right Below',
																					'id_css'		=> 'aside-right-below-ds', 
																					'description'	=> 'Right sidebar below',	
																					'class'			=> 'aside-right-below-ds',
																					'class_widget'	=> 'widget-class',
																				),
																				
													// header above							
													'header_above_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-above-left',
																					'name'			=> 'Header Above Left',
																					'id_css'		=> 'header-above-left-ds',
																					'description'	=> 'Above the Header, Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'header_above_center_left'	=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-above-center-left',
																					'name'			=> 'Header Above Center Left',
																					'id_css'		=> 'header-above-center-left-ds',
																					'description'	=> 'Above the Header, Center Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'header_above_center'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-above-center',
																					'name'			=> 'Header Above Center',
																					'id_css'		=> 'header-above-center-ds',
																					'description'	=> 'Above the Header, Center.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),									
																				
													'header_above_center_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-above-center-right',
																					'name'			=> 'Header Above Center Right',
																					'id_css'		=> 'header-above-center-right-ds',
																					'description'	=> 'Above the Header, Center Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													'header_above_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'Header-above-right',
																					'name'			=> 'Header Above Right',
																					'id_css'		=> 'header-above-right-ds',
																					'description'	=> 'Above the Header, Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													// header main
													'header_main' 			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-main',
																					'name'			=> 'Header',
																					'id_css'		=> 'header-main-ds',																					
																					'description'	=> 'The Header.',
																					'class'			=> 'span5',
																					'class_widget'	=> 'widget-class',
																				),	

													// header below							
													'header_below_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-below-left',
																					'name'			=> 'Header Below Left',
																					'id_css'		=> 'header-below-left-ds',
																					'description'	=> 'below the Header, Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'header_below_center_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-below-center-left',
																					'name'			=> 'Header Below Center Left',
																					'id_css'		=> 'header-below-center-left-ds',
																					'description'	=> 'below the Header, Center Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'header_below_center'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-below-center',
																					'name'			=> 'Header Below Center',
																					'id_css'		=> 'header-below-center-ds',
																					'description'	=> 'below the Header, Center.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),									
																				
													'header_below_center_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'header-below-center-right',
																					'name'			=> 'Header Below Center Right',
																					'id_css'		=> 'header-below-center-right-ds',
																					'description'	=> 'below the Header, Center Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													'header_below_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'Header-below-right',
																					'name'			=> 'Header Below Right',
																					'id_css'		=> 'header-below-right-ds',
																					'description'	=> 'below the Header, Right.',
																					'class'			=> 'span4',
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
													// footer above							
													'footer_above_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-above-left',
																					'name'			=> 'Footer Above Left',
																					'id_css'		=> 'footer-above-left-ds',
																					'description'	=> 'Above the Footer, Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'footer_above_center_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-above-center-left',
																					'name'			=> 'Footer Above Center Left',
																					'id_css'		=> 'footer-above-center-left-ds',
																					'description'	=> 'Above the Footer, Center Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'footer_above_center'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-above-center',
																					'name'			=> 'Footer Above Center',
																					'id_css'		=> 'footer-above-center-ds',
																					'description'	=> 'Above the Footer, Center.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),									
																				
													'footer_above_center_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-above-center-right',
																					'name'			=> 'Footer Above Center Right',
																					'id_css'		=> 'footer-above-center-right-ds',
																					'description'	=> 'Above the Footer, Center Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													'footer_above_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-above-right',
																					'name'			=> 'Footer Above Right',
																					'id_css'		=> 'footer-above-right-ds',
																					'description'	=> 'Above the Footer, Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													// footer		
													'footer_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-left',
																					'name'			=> 'Footer Left',
																					'id_css'		=> 'footer-left-ds',
																					'description'	=> 'Footer Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),

													'footer_center_left'	=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-center-left',
																					'name'			=> 'Footer Center Left',
																					'id_css'		=> 'footer-center-left-ds',
																					'description'	=> 'Footer Center Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),

													'footer_center'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-center',
																					'name'			=> 'Footer Center',
																					'id_css'		=> 'footer-center-ds',
																					'description'	=> 'Footer Center.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													'footer_center_right'	=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-center-right',
																					'name'			=> 'Footer Center Right',
																					'id_css'		=> 'footer-center-right-ds',
																					'description'	=> 'Footer Center Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													'footer_right'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-right',
																					'name'			=> 'Footer Right',
																					'id_css'		=> 'footer-right-ds',
																					'description'	=> 'Footer Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
																				
													// footer below			
													'footer_below_left'			=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-below-left',
																					'name'			=> 'Footer Below Left',
																					'id_css'		=> 'footer-below-left-ds',
																					'description'	=> 'Below the Footer, Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),		
																				
													'footer_below_center_left'	=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-below-center-left',
																					'name'			=> 'Footer Below Center Left',
																					'id_css'		=> 'footer-below-center-left-ds',
																					'description'	=> 'Below the Footer, Center Left.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	

													'footer_below_center'		=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-below-center',
																					'name'			=> 'Footer Below Center',
																					'id_css'		=> 'footer-below-center-ds',
																					'description'	=> 'Below the Footer, Center.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),																					

													'footer_below_center_right'	=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-below-center-right',
																					'name'			=> 'Footer Below Center Right',
																					'id_css'		=> 'footer-below-center-right-ds',
																					'description'	=> 'Below the Footer, Center Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),	
																				
													'footer_below_right'		=> array( 
																					'active'		=> true,
																					'id_ds_unique'	=> 'footer-below-right',
																					'name'			=> 'Footer Below Right',
																					'id_css'		=> 'footer-below-right-ds',
																					'description'	=> 'Below the Footer, Right.',
																					'class'			=> 'span4',
																					'class_widget'	=> 'widget-class',
																				),
												);
								
			$this->_arr_404_message_defaults = array(	
												'404_headline'			=> 'Oops. This is embarrassing.',
												'404_headline_under' 	=> 'It seems we can&rsquo;t find what you&rsquo;re looking for.',
												);
			/**
			 * The searchform on the 404 page has its own config
			 */
			$this->_arr_searchform_404 = array(	
											'echo'							=> true,
											'search_form_label'				=> '',
											'search_form_placeholder'		=> 'Search',
											'search_form_input_class'		=> 'span4',
											'submit_button_value'			=> 'Go',
											'submit_button_class_string'	=> 'btn btn-medium'
											);

			/**
			 * For all other searchforms...
			 */											
			$this->_arr_searchform_defaults = array(	
												'echo'							=> true,
												'search_form_label'				=> '',
												'search_form_placeholder'		=> 'Search',
												'search_form_input_class'		=> 'span2',
												'submit_button_value'			=> 'Go',
												'submit_button_class_string'	=> 'btn btn-medium'
												);
																					
		} // close ezbs_options_init()

		
		
		public function property_get($property_name) {

			if ( isset($this->$property_name) ){
				return $this->$property_name;
			} else {
				return NULL;
			}
		}

	}
}

?>