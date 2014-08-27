<?php
/**
 * TODO.
 *
 * TODO
 *
 * @package WP ezBoilerStrap
 * @since 0.5.0
 * @author Mark Simchock
 * @license TODO
 */
 
/*
 * == Change Log == 
 *
 */

 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}
?>

<?php

if ( ! class_exists('ezbsModl_ezBoilerStrap_Uno_1')) {
	class ezbsModl_ezBoilerStrap_Uno_1 extends Class_WP_ezClasses_Master_Singleton{
	

		protected function __construct() {
			parent::__construct();
		} 
		
		public function ezc_init(){
		
		
		}
				  
		  /**
		   *
		   */
		  protected function m_menu_global(){
		    
			return array(
			
			  'active' => true,
			  
			  'tp' => array(

			    'menu_global_brand' => array(
				  'slug' => 'vue/menu/menu-global-brand',
				  'name' => '',
				  'active' => true
			      ),				
			    ),
				
			  'css' => array(
			    'class_navbar' => 'navbar navbar-inverse navbar-relative-top',
				'class_navbar_inner' => 'navbar-inner',
			    ),
				
			  'menu_args' => self::m_menu_global_menu_args(),
			);
		  }

		  /**
		   *
		   */		  
		  protected function m_menu_global_menu_args(){
		  
		    return array(
			  'active' => true,
			  'description' => 'Global Menu',  // key => description is used for register_nav_menus()
			  'theme_location' => 'menu_global',
			  'menu' => 'menu_global',
			  'container_class' => 'nav-collapse',
			  'container_id' => 'wp-ezbs-menu-global-wnm',
			  'menu_class' => 'nav',
			  'echo' => false,
			  'fallback_cb' => false,
			  'menu_id' => 'wp-ezbs-header-menu-global',
			  'walker' => new Class_WP_ezClasses_Menu_Walker_One()
			  );  
		  }
		  
		  /**
		   *
		   */
		  protected function m_menu_global_brand(){
			  
		    return array(
			
			  'active' => true,
			);
		  }
		  
		  /**
		   *
		   */
		   protected function m_menu_main(){
		  
            return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'menu_main_brand' => array(
				  'slug' => 'vue/menu/menu-main-brand',
				  'name' => '',
				  'active' => true
			      ),				
			    ),
				
			  'css' => array(
			    'class_navbar' => 'navbar navbar-inverse navbar-relative-top',
				'class_navbar_inner' => 'navbar-inner',
			    ),
				
			  'menu_args' => self::m_menu_main_menu_args(),
			);
		  }
		  
		  /**
		   *
		   */
		  protected function m_menu_main_menu_args(){
		  
		    return array(
			    'active' => true,
				'description' => 'Main Menu',  // key => description is used for register_nav_menus()
				'theme_location' => 'menu_main',
				'menu' => 'menu_main',
				'container_class' => 'nav-collapse',
				'container_id' => 'wp-ezbs-menu-main-wnm',
				'menu_class' => 'nav',
				'echo' => false,
				'fallback_cb' => false,
				'menu_id' => 'wp-ezbs-header-menu-main',
				'walker' => new Class_WP_ezClasses_Menu_Walker_One()
			  );  
		  }
		  
		  /**
		   *
		   */
		  protected function m_menu_main_brand(){
		  
		    return array(
			
			  'active' => true,
			);
		  }
		  
		  /**
		   *
		   */
		  protected function m_menu_footer(){
		
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'menu_footer_brand' => array(
				  'slug' => 'vue/menu/menu-footer-brand',
				  'name' => '',
				  'active' => true
			      ),				
			    ),
				
			  'css' => array(
			    'class_navbar' => 'navbar navbar-inverse navbar-relative-top',
				'class_navbar_inner' => 'navbar-inner',
			    ),
				
			  'menu_args' => self::m_menu_footer_menu_args(),
			);
		  }
		  
		  
		  /**
		   *
		   */
		  protected function m_menu_footer_menu_args(){
		  
		    return array(
			    'active' => true,
				'description' => 'Footer Menu',  // key => description is used for register_nav_menus()
				'theme_location' => 'menu_footer',
				'menu' => 'menu_footer',
				'container_class' => 'nav-collapse',
				'container_id' => 'wp-ezbs-menu-main-wnm',
				'menu_class' => 'nav',
				'echo' => false,
				'fallback_cb' => false,
				'menu_id' => 'wp-ezbs-footer-menu',
				'walker' => new Class_WP_ezClasses_Menu_Walker_One()
			  );  
		  }
		  
		  
		  /**
		   *
		   */
		  protected function m_menu_footer_brand(){
			
		    return array(
			
			  'active' => true,
			);
		  }
		  
		  /**
		   *
		   */
		  protected function m_breadcrumbs(){
		  
		    $obj_ezc_themeui_breadcrumbs = Class_WP_ezClasses_ThemeUI_Breadcrumbs_1::ezc_get_instance();
			
			/**
			 * note: if we don't pass in the m_breadcrumbs_args() then that class has defaults. as a matter
			 * of fact these are those defaults simply as a reference / working model.
			 */
			$arr_ret = $obj_ezc_themeui_breadcrumbs->breadcrumbs(self::m_breadcrumbs_args()); 
			
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return']
			    ),
			);
		  }
		  
		  		  /**
		   *
		   */
		  protected function m_breadcrumbs_args(){
		  
		    return array(
			  'home' 				=> '<span class="icon-home"></span>',   // FYI - text / string (e.g., 'Home') is also allowed for breadcrumbs-home
			  'before'				=> '<li class="active">',
			  'after'				=> '</li>',
			  'separator_class'		=> 'icon-chevron-right',
			  'category_label'		=> 'Category: ', // FYI - you can add a span here with a Font Awesome separator if you want to get fancy
			  'search_label'		=> 'Search Term: ',
			  'tag_label'			=> 'Tag: ',
			  'author_label'		=> 'Author: ',
			  '404_label'			=> '404 Error ',
			  'page_open'			=> ' (',
			  'page_label'			=> 'Page ',
			  'page_close'			=> ') ',
			);
		  }
		  
		  /**
		   *
		   */
		  protected function m_header(){

		    return array(
			  'active' => true,
			  'tp' => array(
			  
			    'head' => array(
				  'slug' => 'vue/header/head',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'header_parent' => array(
				  'slug' => 'vue/header/header-parent',
				  'name' => '',
				  'active' => true
			      ),				  
			    ),
			  );
		  }
		  


		  /**
		   *
		   */
		  protected function m_head(){			  
		    
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			    'before_head_tag_close' => array(
				  'slug' => 'vue/header/head-before-head-tag-close',
				  'name' => '',
				  'active' => true
				  ),
				),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_header_parent(){			  
		    
			return array(
			  'active' => true,
			  'tp' => array(
			    'header_above' => array(
				  'slug' => 'vue/header/header-above',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'menu_global' => array(
				  'slug' => 'vue/menu/menu-global',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'main_wrap' => array(
				  'slug' => 'vue/header/header-main-wrap',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'menu_main' => array(
				  'slug' => 'vue/menu/menu-main',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'header_below' => array(
				  'slug' => 'vue/header/header-below',
				  'name' => '',
				  'active' => true
				  ),
				  
				),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_header_above(){
			  
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'header-above-one',
				  'css' => array(
				    'class' => 'header-above-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'header-above-two',
				  'css' => array(
				    'class' => 'header-above-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'header-above-three',
				  'css' => array(
				    'class' => 'header-above-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'header-above-four',
				  'css' => array(
				    'class' => 'header-above-ds-four',
					),
				  ),				  
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_header_main_wrap(){
		    
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'logo' => array(
				  'slug' => 'vue/header/header-main-logo',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'main' => array(
				  'slug' => 'vue/header/header-main',
				  'name' => '',
				  'active' => true
			      ),				  
			    ),
		      );
		  }
		  
		  /**
		   *
		   */
		  protected function m_header_main(){
			   
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'header-main-one',
				  'css' => array(
				    'class' => 'header-main-ds-one',
					),
				  ),
				),
			  );
	      }
		  
		  /**
		   *
		   */
		  protected function m_header_main_logo(){
			  
		    return array(
			
			  'active' => true,
			  
			  'css' => array(
			    'class-left' => 'some bootstrap class here',
				'class-right' => 'some other bootstrap class here',
				),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_header_below(){ 
		    
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'header-below-one',
				  'css' => array(
				    'class' => 'header-below-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'header-below-two',
				  'css' => array(
				    'class' => 'header-below-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'header-below-three',
				  'css' => array(
				    'class' => 'header-below-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'header-below-four',
				  'css' => array(
				    'class' => 'header-below-ds-four',
					),
				  ),				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_footer(){
		    
			return array(
			
			  'active' => true,
			  'tp' => array(
			    'footer_parent' => array(
				  'slug' => 'vue/footer/footer-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
	      }
		  

		  /**
		   *
		   */
		  protected function m_footer_parent(){
		  
		    return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'footer_above' => array(
				  'slug' => 'vue/footer/footer-above',
				  'name' => '',
				  'active' => true
				  ),
				  
				'menu_footer' => array(
				  'slug' => 'vue/menu/menu-footer',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'footer_main' => array(
				  'slug' => 'vue/footer/footer-main',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'footer_below' => array(
				  'slug' => 'vue/footer/footer-below',
				  'name' => '',
				  'active' => true
				  ),
				  
			    'footer_bottom' => array(
				  'slug' => 'vue/footer/footer-bottom',
				  'name' => '',
				  'active' => true
				  ),
				  
				),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_footer_above(){
		  
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'footer-above-one',
				  'css' => array(
				    'class' => 'footer-above-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'footer-above-two',
				  'css' => array(
				    'class' => 'footer-above-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'footer-above-three',
				  'css' => array(
				    'class' => 'footer-above-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'footer-above-four',
				  'css' => array(
				    'class' => 'footer-above-ds-four',
					),
				  ),				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_footer_main(){

		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'footer-main-one',
				  'css' => array(
				    'class' => 'footer-main-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'footer-main-two',
				  'css' => array(
				    'class' => 'footer-main-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'footer-main-three',
				  'css' => array(
				    'class' => 'footer-main-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'footer-main-four',
				  'css' => array(
				    'class' => 'footer-main-ds-four',
					),
				  ),				  
			    ),
			  );
		   }
		   
		   
		  /**
		   *
		   */
		  protected function m_footer_below(){
		  
		    return array(
			
			  'active' => true,
			  
			  'ds' => array(
			    'one' => array(
				  'active' => true,
				  'index' => 'footer-below-one',
				  'css' => array(
				    'class' => 'footer-below-ds-one',
					),
				  ),
				  
			    'two' => array(
				  'active' => true,
				  'index' => 'footer-below-two',
				  'css' => array(
				    'class' => 'footer-below-ds-two',
					),
				  ),

			    'three' => array(
				  'active' => true,
				  'index' => 'footer-below-three',
				  'css' => array(
				    'class' => 'footer-below-ds-three',
					),
				  ),

			    'four' => array(
				  'active' => true,
				  'index' => 'footer-below-four',
				  'css' => array(
				    'class' => 'footer-below-ds-four',
					),
				  ),				  
			    ),
			  );
		  }
		  
		  /**
		   * = = = = = Start: Index = = = = =
		   */
			 
		  /**
		   *
		   */
		  protected function m_index(){
			 
			return array(
			
			  'active' => true,
			  'tp' => array(
			  
			    'index_parent' => array(
				  'slug' => 'vue/index/index-parent',
				  'name' => '',
				  'active' => true
			      ),
				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_index_parent(){

			return array(
			
			  'active' => true,
			  'tp' => array(
			  
			    'breadcrumbs' => array(
				  'slug' => 'vue/shared/breadcrumbs',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above_above' => array(
				  'slug' => 'vue/archive/archive-content-above-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above_below' => array(
				  'slug' => 'vue/archive/archive-content-above-below',
				  'name' => '',
				  'active' => true
			      ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    'main' => array(
				  'slug' => 'vue/index/index-content-center',
				  'name' => '',
				  'active' => true
			      ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    ),
			  );
		  }
			  

		  /**
		   *
		   */
		  protected function m_index_content_center(){
		  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bs3 class here'
				
			  ),
			  
			  'tp' => array(
			  
			    'archive_header' => array(
				  'slug' => 'vue/archive/archive-header',
				  'name' => '',
				  'active' => true				  
				  ),
			  
			    'next_prev' => array(
				  'slug' => 'vue/index/index-next-prev-control',
				  'name' => '',
				  'active' => true				  
				  ),
				  
			    'sort' => array(
				  'slug' => 'vue/index/index-sort-control',
				  'name' => '',
				  'active' => true				  
				  ),
			  
			    'have_posts' => array(
				  'slug' => 'vue/index/index-content-center-have-posts',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_below_above' => array(
				  'slug' => 'vue/archive/archive-content-below-above',
				  'name' => '',
				  'active' => true
			      ),				  
				  
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_below_below' => array(
				  'slug' => 'vue/archive/archive-content-below-below',
				  'name' => '',
				  'active' => true
			      ),				  
			  ),
			);
		  }
		  
		  /**
		   *
		   */
		  protected function m_index_next_prev_control(){
		  
		    $obj_ezc_themeui_next_prev = Class_WP_ezClasses_ThemeUI_Next_Prev_Control_1::ezc_get_instance();
			
			// note: we could pass in cusotmization args but we'll stick with the class' defaults. at least for now. 
			$arr_ret = $obj_ezc_themeui_next_prev->next_prev( self::m_index_next_prev_control_args() ); 

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return']
			    ),
			);
		  }
		  
		  		  /**
		   *
		   */
		  protected function m_index_next_prev_control_args(){
		  
		    return array(
			  'ul_class' 			=> 'ezbs-pager',
			  'li_class_next'		=> 'ezbs-next',
			  'li_class_prev'		=> 'ezbs-previous',
			  'next'				=> 'Next ',
			  'next_class'			=> 'icon-chevron-right',  
			  'newer'				=> ' Newer',
			  'newer_class'			=> 'meta-nav ' . 'icon-chevron-right',
			  'previous'			=> 'Prev',
			  'previous_class'		=> 'icon-chevron-left',
			  'older'				=> 'Older ',
			  'older_class'			=> 'meta-nav ' . 'icon-chevron-left',
			);
		  }
		  
		  
		  
		  /**
		   *
		   */
		  protected function m_index_sort_control(){
		  
		    $obj_ezc_themeui_sort = Class_WP_ezClasses_ThemeUI_Sort_Control_1::ezc_get_instance();
			
			// 
			$arr_ret = $obj_ezc_themeui_sort->sort(self::m_index_sort_control_args()); 

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return'],
			    ),
			);
		  }

		  /**
		   *
		   */
		  protected function m_index_sort_control_args(){
		  
		    $arr_defaults_labels = array(
			 
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
			
			$arr_defaults = array(
			
			  'status'				=> true, 
			  'label_order'			=> array('post_date', 'title', 'author_name','comment_count','rand'), // display order left to right. 
			  'labels' 				=> '', // $arr_defaults_labels will go here
			  'blank_class'			=> 'icon-sign-blank opacity-zero',  // TODO 
			  'ul_class'				=> 'nav nav-tabs',  // FYI - you might also wish to try Bootstrap nav-pills
			  'li_class'				=> 'menu-item',
			  'sort_up_class'			=> 'icon-chevron-up', 		//
			  'sort_down_class'		=> 'icon-chevron-down',	// Theses are here and not in the UX section because that's how wpezClasses does it. 
			  'sort_random_class'		=> 'icon-repeat',		//
			);
			
			$arr_defaults['labels'] = $arr_defaults_labels;
						 
			return $arr_defaults;
		 }

		  /**
		   *
		   */
		  protected function m_index_content_center_have_posts(){	
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some BS3 class',
				'headline_class' => 'some BS3 class',
				'row_wrap_class' => 'some BS3 class',
				'row_left_class' => 'some BS3 class',
				'row_right_class' => 'some BS3 class',
			    'post_id' => 'TODO',
			    'post_class' => 'TODO',
				'permalink' => 'TODO',
				'title' => 'TODO',
			    ),
			
			  'tp' => array(
			  
			    'meta_above' => array(
				  'slug' => 'vue/index/index-post-meta-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'meta_below' => array(
				  'slug' => 'vue/index/index-post-meta-below',
				  'name' => '',
				  'active' => true
			      ),				    
			    ),
			  );
		  }
			  
		  /**
		   * = = = = = End: Index = = = = =
		   */
		   
		  /**
		   * = = = = = Start: Single = = = = =
		   */
		   
		   /**
		    *
			*/
		   protected function m_single(){
		   
		     return array(
			 
			   'active' => true,
			   
			   'tp' => array(
			    
			     'single_parent' => array(
				   'slug' => 'vue/single/single-parent',
				   'name' => '',
				   'active' => true
			       ),
			    )
			  );
		   }
		   
		   /**
		    *
			*/
		   protected function m_single_parent(){
		   
		     return array(
			 
			   'active' => true,
			   
			  'tp' => array(
			    
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			      ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    'main' => array(
				  'slug' => 'vue/single/single-content-center-wrap',
				  'name' => '',
				  'active' => true
			     ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			      ),
				
			    ),			     
			 );
		  }
		  
		  /**
		   *
		   */
		  protected function m_single_content_center_wrap(){
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here',
				),

			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/single/single-content-center',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }	

		  /**
		   *
		   */
		  protected function m_single_content_center(){
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here',
				'title_headline_class' => 'h1-class',
			  
			  ),

			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			    ),				
				
			    'single_next_prev' => array(
				  'slug' => 'vue/single/single-next-prev-control',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }

		  /**
		   *
		   */
		  protected function m_single_next_prev_control(){
		  
		    $obj_ezc_themeui_next_prev = Class_WP_ezClasses_ThemeUI_Next_Prev_Control_1::ezc_get_instance();
			
			// We'll use the same defaults defined above
			$arr_ret = $obj_ezc_themeui_next_prev->next_prev_single(self::m_index_next_prev_control_args()); 

			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'class' => 'TODO some bootstrap class here',
			    'control' => $arr_ret['str_to_return'],
			    ),
			);
		  } 
		  
		  
		  /**
		   * = = = = = End: Single = = = = =
		   */		   
		   
		   
		  /**
		   * = = = = = Start: Archive = = = = =
		   */
		   
		  protected function m_archive_header(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'wrap_class' => 'some BS3 class here wp-ezbs-archive-header',
				'headline_class' => 'headline class',
				'description_class' => 'archive-meta',
			    'title' => single_tag_title( '', false ),
				'description_active' => true,
				'description' => tag_description(),
			    ),
			  
			  );

            if ( is_archive() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }
		  
		  /**
		   *
		   */
		  protected function m_archive_content_above_above(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }	

		  /**
		   *
		   */
		  protected function m_archive_content_above_below(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }			  
		  
		  /**
		   *
		   */
		  protected function m_archive_content_below_above(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }	

		  /**
		   *
		   */
		  protected function m_archive_content_below_below(){

		    $arr_args = array(
			
			  'active' => false,
			  
			  'markup' => array(
			    'todo' => 'TODO'
			    ),
			  
			  );

            if ( is_archive() ){
			
			   $arr_args['active'] = true;
			   
			   // TODO
			   // is_tag()
			   // is_author			
			} 
			
			return $arr_args;
		  }			  


		  /**
		   * = = = = = End: Archive = = = = =
		   */

		   
			 
		  /**
		   * = = = = = Start: Page = = = = =
		   */
			 
		  /**
		   *
		   */
		  protected function m_page(){		 
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'page_parent' => array(
				  'slug' => 'vue/page/page-parent',
				  'name' => '',
				  'active' => true
			      ),
				  
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_page_parent(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'breadcrumbs' => array(
				  'slug' => 'vue/shared/breadcrumbs',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/page/page-content-center-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    ),
			  );
		   }
		   
		  /**
		   *
		   */
		  protected function m_page_content_center_wrap(){
			  
			return array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'wrap_class' => 'some bootstrap class here',
			  
			  ),

			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/page/page-content-center',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }
		  
		  /**
		   *
		   */
		  protected function m_page_center_content(){
			
			return array(
			
			  'active' => true,
			  'markup' => array(
			    'headline_class' => 'some class here',
				'content_class' => 'some class here',
			    ),
				
			  'tp' => array(
			  
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			      ),
				),
			  );
		   }
			 			  
			/**
			 * = = = = = End: Page = = = = =
			 */

			/**
			 * = = = = = Start: Page - Home = = = = =
			 */
			 
		  /**
		   *
		   */
		  protected function m_page_home(){	
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'home_parent' => array(
				  'slug' => 'vue/page/page-home-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_page_home_parent(){			  
			
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'markup' => array(
			    'wrap_class' => 'jumbotron masthead',
			  ),
			  
			  'tp' => array(
			  
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/page/page-home-content-center',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			  ),
			);
		  }
			
		  /**
		   *
		   */
		  protected function m_page_home_content_center(){				
			
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			    ),
				
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			    ),				
				
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			  
			  'css' => array(
			    'class' => 'TODO',
				),
			);
		  }
			
			/**
			 * = = = = = End: Page - Home = = = = =
			 */
			 
			/**
			 * = = = = = Start: Search = = = = =
			 */
			 
		  /**
		   *
		   */
		  protected function m_search(){	
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'search_parent' => array(
				  'slug' => 'vue/search/search-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }
		  
		  
		  /**
		   *
		   */
		  protected function m_search_parent(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'breadcrumbs' => array(
				  'slug' => 'vue/shared/breadcrumbs',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'content_above' => array(
				  'slug' => 'vue/shared/content-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/search/search-content-center',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    ),
			  );
		   }
		   
		   
		   /**
		    *
			*/
		   protected function m_search_content_center(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'searchform_custom' => true,
			  
			  'markup' => array(
			    'search_wrap_class' => 'some BS class here',
			    'wrap_class' => 'some BS class here',
			    ),
			  
			  'tp' => array(

			    'searchform_custom' => array(
				  'slug' => 'vue/search/searchform-custom',
				  'name' => '',
				  'active' => true
			      ),
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'search_title' => array(
				  'slug' => 'vue/search/search-title',
				  'name' => '',
				  'active' => true
			      ),
				  
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			      ),

			    'next_prev' => array(
				  'slug' => 'vue/index/index-next-prev-control',
				  'name' => '',
				  'active' => true				  
				  ),
				  
			    'sort' => array(
				  'slug' => 'vue/index/index-sort-control',
				  'name' => '',
				  'active' => true				  
				  ),
				  
			    'have_posts' => array(
				  'slug' => 'vue/index/index-content-center-have-posts',
				  'name' => '',
				  'active' => true
			      ),
				  				  
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }
		  
		  protected function m_search_title(){
		  
		    $arr_args = array(
			
			  'active' => true,
			  
			  'markup' => array(
			    'title' => '',
				'title_headline_class' => 'some class here',
				'query_headline_class' => 'some other class here',
				'get_search_query' => get_search_query(),
			  ),
			);
			
			if ( have_posts() ){
			
			  $arr_args['markup']['title'] = 'Search results for: ';
			} else {
			
			  $arr_args['markup']['title'] = 'No matches found for: ';
			}
				
			return $arr_args;
		  }

			 
			/**
			 * = = = = = End: Search = = = = =
			 */
			 
			 
			/**
			 * = = = = = Start: Shared = = = = =
			 */
		  /**
		   *
		   */
		  protected function m_title_above(){	
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'title-above',
				  'css' => array(
				    'class' => 'title-above-ds-one',
					),
				  ),				
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_title_below(){	
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			    'one' => array(
				  'active' => true,
				  'index' => 'title-below',
				  'css' => array(
				    'class' => 'title-below-ds-one',
					),
				  ),				
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_content_above(){
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'content-above',
				  'css' => array(
				    'class' => 'content-above-ds-one',
					),
				  ),				
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_content_below(){
		  
			return array(
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'content-below',
				  'css' => array(
				    'class' => 'content-below-ds-one',
					),
				  ),				
			    ),
			  );
          }			  

		  /**
		   *
		   */
		  protected function m_aside_left_wrap(){
		  
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'main' => array(
				  'slug' => 'vue/shared/aside-left-ds',
				  'name' => '',
				  'active' => true
			      ),
                ),
				
			  'css' => array(
			    'class' => 'some bootstrap class here'
			    ),
			  );
		  }
		  
		  /**
		   *
		   */
		  protected function m_aside_left_ds(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			    'one' => array(
				  'active' => true,
				  'index' => 'aside-left-one',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-one',
					),
				  ),
			    'two' => array(
				  'active' => true,
				  'index' => 'aside-left-two',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-two',
					),
				  ),
			    'three' => array(
				  'active' => true,
				  'index' => 'aside-left-three',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-three',
					),
				  ),
			    'four' => array(
				  'active' => true,
				  'index' => 'aside-left-four',
				  'markup' => array(
				    'wrap_class' => 'aside-left-ds-four',
					),
				  ),				  
			    ),
			  );
		   }
		   
		  /**
		   *
		   */
		  protected function m_aside_right_wrap(){		  
			  
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    'main' => array(
				  'slug' => 'vue/shared/aside-right-ds',
				  'name' => '',
				  'active' => true
			      ),
                ),
				
			  'css' => array(
			    'class' => 'some bootstrap class here'
			    ),
			  );
	      }

		  /**
		   *
		   */
		  protected function m_aside_right_ds(){
		  
			return array(
			
			  'active' => true,
			  
			  'ds' => array(
			  
			    'one' => array(
				  'active' => true,
				  'index' => 'aside-right-one',
				  'css' => array(
				    'class' => 'aside-right-ds-one',
					),
				  ),
			    'two' => array(
				  'active' => true,
				  'index' => 'aside-right-two',
				  'css' => array(
				    'class' => 'aside-right-ds-two',
					),
				  ),
			    'three' => array(
				  'active' => true,
				  'index' => 'aside-right-three',
				  'css' => array(
				    'class' => 'aside-right-ds-three',
					),
				  ),
			    'four' => array(
				  'active' => true,
				  'css' => array(
				    'class' => 'aside-right-ds-four',
					),
				  ),
				  
				  ),				  
			    ),
              );
		   }
 
			/**
			 * = = = = = End: Shared = = = = =
			 */
			 
			/**
			 * = = = = = Start: 404 = = = = =
			 */
			 
		  /**
		   *
		   */
		  protected function m_404(){
			 
			return array(
			
			  'active' => true,
			  
			  'tp' => array(
			  
			    '404_parent' => array(
				  'slug' => 'vue/404/404-parent',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }

		  /**
		   *
		   */
		  protected function m_404_parent(){
		  
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'markup' => array(
			    'wrap_class' => 'jumbotron subhead clearfix',			  
			    ),
				
			  'tp' => array(
			  
			    'aside_left' => array(
				  'slug' => 'vue/shared/aside-left-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/404/404-content-center-wrap',
				  'name' => '',
				  'active' => true
			    ),
				
			    'aside_right' => array(
				  'slug' => 'vue/shared/aside-right-wrap',
				  'name' => '',
				  'active' => true
			    ),
			  ),
			);
		  }

			
		  /**
		   *
		   */
		  protected function m_404_content_center_wrap(){
		  
			return array(
			
			  'active' => true, 
			  
			  'content' => 'TODO',
			  
			  'tp' => array(
			  
			    'title_above' => array(
				  'slug' => 'vue/shared/title-above',
				  'name' => '',
				  'active' => true
			    ),
				
			    'title_below' => array(
				  'slug' => 'vue/shared/title-below',
				  'name' => '',
				  'active' => true
			    ),
				
			    'main' => array(
				  'slug' => 'vue/404/404-content-center',
				  'name' => '',
				  'active' => true
			    ),
							
			    'content_below' => array(
				  'slug' => 'vue/shared/content-below',
				  'name' => '',
				  'active' => true
			    ),
			  ),
				'css' => array(
				  'class' => 'TODO',
				
				),
			  );
		  }
			  
		  /**
		   *
		   */
		  protected function m_404_content_center(){
			return array(
			
			  'active' => true,
			  
			  'content' => 'TODO',
			  
			  'headline' => '404_content_center: Headline',
			  'lead' => '404_content_center: Lead',
			    
			  'css' => array(
			    'class' => 'well',
				),
				
			  'searchform_custom' => true,					
			  'tp' => array(
			  
			    'searchform_custom' => array(
				  'slug' => 'vue/search/searchform-custom',
				  'name' => '',
				  'active' => true
			      ),
			    ),
			  );
		  }

			/**
			 * = = = = = End: 404 = = = = =
			 */
			 
			/**
			 * = = = = = Start: Search = = = = =
			 */
		  /**
		   *
		   */
		  protected function m_searchform_custom(){			 
			
			return array(
			  
			  'active' => true,
			  'markup' => array(
			    'form_id' => 'searchform',
				'action' => home_url( '/' ),
				'label_bool' => true,
				'label_class' => 'screen-reader-text',
				'label_value' => 'TODO searchform_custom: label_value',
                'empty_input_class' => 'empty-input-class',
				'empty_input_id' => 'empty-id',
				'empty_input_placeholder' => 'empty placeholder',
                'input_class' => 'input-class',
                'input_id' => 'input_id',
                'input_value' => get_search_query(),
                'button_class' => 'button-class',
				'button_id' => 'button-id',
				'button_value' => 'button-value',
			    ),
			);
		  }
			 
			/**
			 * = = = = = End: Search = = = = =
			 */
							
	} // end class
}

?>