<?php
/**
 * Layout Objects are traditional WordPress template parts. The difference from the typical implementation here is: granularity, modularitiy and flexibility.
 *
 * The ezbsLayoutObjects class establishes the architecture / foundation for the theme. This defines *what* can be manipulated. We'll discuss
 * the *when* and *how* of that "content" management system shortly Yes Virginia, WP now has a logic layer that is easy to implement and manage.
 *
 * If you're already thinking in OOP objects then the intention is to maintain that lexicon. That is, project agnostic objects. Modular. Reusable. 
 * Configurable. Share them. Sell them. Perhaps think of Layout Objects as WP plugins for front-end presentation. 
 *
 * When you're using a theme architecture based on the WP ezBoilerStrap ThemeWork and wpezClasses (and methods), over time your tool box should
 * fill with a collection of various Layout Objects that are unique (or not) to your projects. At that point you're able to focus on configuring and customizing, 
 * and less time redoing from scratch (or close to it) something you've done too many times before. True, there's always find the snippet, copy
 * and paste it from old project to new. That works, but it's not a sustainable architecture and/or development methodology. 
 *
 * In short...
 * -- Define your OptionsBoilerplate.
 * -- Define your Options. 
 * -- Reuse / cusomtize your Setup.
 * -- Frame out your theme's Layout Objects. 
 * -- Then manage those object from a single centralized spot (/wp-ezboilerstrap-loms/ezbs-layout-objects-management-system.php). 
 * 
 * It's that ez! :)
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if (!class_exists('ezbsLayoutObjects')){
	class ezbsLayoutObjects extends Class_WP_ezClasses_Master_Singleton{

		protected $_mix_column_left;
		protected $_mix_column_center;
		protected $_mix_column_right;
		
		/*
		* Layout objects _bools
		*/		
		protected $_bool_aside_left_wrap_active;
		protected $_bool_aside_left_active;
		protected $_bool_aside_right_wrap_active;
		protected $_bool_aside_right_active;
		protected $_bool_breadcrumbs_active;

		protected $_bool_header_wrap_active;
		protected $_bool_header_above_active;
		protected $_bool_menu_global_active;
		protected $_bool_menu_global_class_brand_active;
		protected $_bool_menu_global_transient_active;
		protected $_bool_header_main_wrap_active;
		protected $_bool_header_main_active;
		protected $_bool_menu_main_active;
		protected $_bool_menu_main_class_brand_active;
		protected $_bool_menu_main_transient_active;
		protected $_bool_header_below_active;

		protected $_bool_content_above_active;
		protected $_bool_index_content_center_active;
		protected $_bool_index_content_center_while_have_posts_active;
		protected $_bool_index_archive_paging_controls_above_active;
		protected $_bool_index_paging_controls_active;
		protected $_bool_single_paging_controls_active;
		protected $_bool_title_above_active;
		protected $_bool_title_below_active;
		protected $_bool_page_content_center_wrap_active;
		protected $_bool_page_content_center_active;
		protected $_bool_single_content_center_active;
		protected $_bool_index_archive_content_below_above_active; // todo ??
		protected $_bool_content_below_active;
		protected $_bool_index_archive_content_below_below_active; // todo??

		protected $_bool_footer_wrap_active;
		protected $_bool_footer_above_active;
		protected $_bool_menu_footer_active;
		protected $_bool_menu_footer_class_brand_active;
		protected $_bool_menu_footer_transient_active;
		protected $_bool_footer_main_active;
		protected $_bool_footer_below_active;
		protected $_bool_footer_bottom_active;
				
		/*
		* Template parts
		*/
		protected $_str_aside_left_wrap_tp;
		protected $_str_aside_left_wrap_tp_folder;
		protected $_str_aside_left_tp;
		protected $_str_aside_left_tp_folder;
		protected $_str_aside_right_wrap_tp;
		protected $_str_aside_right_wrap_tp_folder;
		protected $_str_aside_right_tp;
		protected $_str_aside_right_tp_folder;
		protected $_str_breadcrumbs_tp;
		protected $_str_breadcrumbs_tp_folder;
		
		protected $_str_header_wrap_tp;
		protected $_str_header_wrap_tp_folder;
		protected $_str_header_above_tp;
		protected $_str_header_above_tp_folder;
		protected $_str_menu_global_tp;
		protected $_str_menu_global_tp_folder;
		protected $_str_menu_global_class_brand_tp;
		protected $_str_menu_global_class_brand_tp_folder;
		protected $_str_menu_global_transient_tp;
		//protected $_str_menu_global_transient_tp_folder;
		protected $_str_header_main_wrap_tp;
		protected $_str_header_main_wrap_tp_folder;
		protected $_str_header_main_tp;
		protected $_str_header_main_tp_folder;
		protected $_str_menu_main_tp;
		protected $_str_menu_main_tp_folder;
		protected $_str_menu_main_class_brand_tp;
		protected $_str_menu_main_class_brand_tp_folder;
		protected $_str_menu_main_transient_tp;		
		//protected $_str_menu_main_transient_tp_folder;		
		protected $_str_header_below_tp;
		protected $_str_header_below_tp_folder;
		
		protected $_str_content_above_tp;
		protected $_str_content_above_tp_folder;
		protected $_str_index_content_center_tp;
		protected $_str_index_content_center_tp_folder;
		protected $_str_index_content_center_while_have_posts_tp;
		protected $_str_index_content_center_while_have_posts_tp_folder;
		protected $_str_index_sort_controls_tp;
		protected $_str_index_sort_controls_tp_folder;
		protected $_str_index_archive_paging_controls_above_tp;
		protected $_str_index_archive_paging_controls_above_tp_folder;
		protected $_str_index_paging_controls_tp;
		protected $_str_index_paging_controls_tp_folder;
		protected $_str_single_paging_controls_tp;
		protected $_str_single_paging_controls_tp_folder;
		protected $_str_title_above_tp;
		protected $_str_title_above_tp_folder;
		protected $_str_title_below_tp;
		protected $_str_title_below_tp_folder;
		protected $_str_page_content_center_wrap_tp;
		protected $_str_page_content_center_wrap_tp_folder;
		protected $_str_page_content_center_tp;
		protected $_str_page_content_center_tp_folder;
		protected $_str_single_content_center_tp;
		protected $_str_single_content_center_tp_folder;
		protected $_str_index_archive_content_below_above_tp;
		protected $_str_index_archive_content_below_above_tp_folder;
		protected $_str_content_below_tp;
		protected $_str_content_below_tp_folder;
		protected $_str_index_archive_content_below_below_tp;
		protected $_str_index_archive_content_below_below_tp_folder;
		
		protected $_str_footer_wrap_tp;
		protected $_str_footer_wrap_tp_folder;
		protected $_str_footer_above_tp;
		protected $_str_footer_above_tp_folder;
		protected $_str_menu_footer_tp;
		protected $_str_menu_footer_tp_folder;
		protected $_str_menu_footer_class_brand_tp;
		protected $_str_menu_footer_class_brand_tp_folder;
		protected $_str_menu_footer_transient_tp;
		//protected $_str_menu_footer_transient_tp_folder;
		protected $_str_footer_main_tp;
		protected $_str_footer_main_tp_folder;
		protected $_str_footer_below_tp;
		protected $_str_footer_below_tp_folder;
		protected $_str_footer_bottom_tp;
		protected $_str_footer_bottom_tp_folder;
		
		/*
		* Dynamic Sidebars Bools
		*/		
		protected $_bool_aside_left_above_ds_active;
		protected $_bool_aside_left_middle_above_ds_active;
		protected $_bool_aside_left_middle_ds_active;
		protected $_bool_aside_left_middle_below_ds_active;
		protected $_bool_aside_left_below_ds_active;
		
		protected $_bool_aside_right_above_ds_active;
		protected $_bool_aside_right_middle_above_ds_active;
		protected $_bool_aside_right_middle_ds_active;
		protected $_bool_aside_right_middle_below_ds_active;
		protected $_bool_aside_right_below_ds_active;

		protected $_bool_header_above_left_ds_active;
		protected $_bool_header_above_center_left_ds_active;
		protected $_bool_header_above_center_ds_active;
		protected $_bool_header_above_center_right_ds_active;		
		protected $_bool_header_above_right_ds_active;
		
		protected $_bool_header_below_left_ds_active;
		protected $_bool_header_below_center_left_ds_active;
		protected $_bool_header_below_center_ds_active;
		protected $_bool_header_below_center_right_ds_active;		
		protected $_bool_header_below_right_ds_active;
		
		protected $_bool_content_above_ds_active;
		protected $_bool_title_above_ds_active;
		protected $_bool_title_below_ds_active;
		protected $_bool_content_below_ds_active;
		
		protected $_bool_footer_above_left_ds_active;
		protected $_bool_footer_above_center_left_ds_active;
		protected $_bool_footer_above_center_ds_active;
		protected $_bool_footer_above_center_right_ds_active;		
		protected $_bool_footer_above_right_ds_active;
		
		protected $_bool_footer_left_ds_active;
		protected $_bool_footer_center_left_ds_active;
		protected $_bool_footer_center_ds_active;
		protected $_bool_footer_center_right_ds_active;
		protected $_bool_footer_right_ds_active;
		
		protected $_bool_footer_below_left_ds_active;
		protected $_bool_footer_below_center_left_ds_active;
		protected $_bool_footer_below_center_ds_active;
		protected $_bool_footer_below_center_right_ds_active;
		protected $_bool_footer_below_right_ds_active;
		
		/*
		* Dynamic Sidebars
		*/
		protected $_str_aside_left_above_ds;
		protected $_str_aside_left_middle_above_ds;
		protected $_str_aside_left_middle_ds;
		protected $_str_aside_left_middle_below_ds;
		protected $_str_aside_left_below_ds;
		
		protected $_str_aside_right_above_ds;
		protected $_str_aside_right_middle_above_ds;
		protected $_str_aside_right_middle_ds;
		protected $_str_aside_right_middle_below_ds;
		protected $_str_aside_right_below_ds;
		
		protected $_str_header_above_left_ds;
		protected $_str_header_above_center_left_ds;
		protected $_str_header_above_center_ds;
		protected $_str_header_above_center_right_ds;
		protected $_str_header_above_right_ds;
		
		protected $_str_header_below_left_ds;
		protected $_str_header_below_center_left_ds;
		protected $_str_header_below_center_ds;
		protected $_str_header_below_center_right_ds;
		protected $_str_header_below_right_ds;
		
		protected $_str_content_above_ds;
		protected $_str_title_above_ds;
		protected $_str_title_below_ds;
		protected $_str_content_below_ds;
		
		protected $_str_footer_above_left_ds;
		protected $_str_footer_above_center_left_ds;
		protected $_str_footer_above_center_ds;
		protected $_str_footer_above_center_right_ds;
		protected $_str_footer_above_right_ds;
		
		protected $_str_footer_left_ds;
		protected $_str_footer_center_left_ds;
		protected $_str_footer_center_ds;
		protected $_str_footer_center_right_ds;
		protected $_str_footer_right_ds;
		
		protected $_str_footer_below_left_ds;
		protected $_str_footer_below_center_left_ds;
		protected $_str_footer_below_center_ds;
		protected $_str_footer_below_center_right_ds;
		protected $_str_footer_below_right_ds;
		
		/*
		* Dynamic Sidebars Class
		*/
		protected $_str_aside_left_above_ds_class;
		protected $_str_aside_left_middle_above_ds_class;
		protected $_str_aside_left_middle_ds_class;
		protected $_str_aside_left_middle_below_ds_class;
		protected $_str_aside_left_below_ds_class;
		
		protected $_str_aside_right_above_ds_class;
		protected $_str_aside_right_middle_above_ds_class;
		protected $_str_aside_right_middle_ds_class;
		protected $_str_aside_right_middle_below_ds_class;
		protected $_str_aside_right_below_ds_class;
		
		protected $_str_header_above_left_ds_class;
		protected $_str_header_above_center_left_ds_class;
		protected $_str_header_above_center_ds_class;
		protected $_str_header_above_center_right_ds_class;
		protected $_str_header_above_right_ds_class;
		
		protected $_str_header_below_left_ds_class;
		protected $_str_header_below_center_left_ds_class;
		protected $_str_header_below_center_ds_class;
		protected $_str_header_below_center_right_ds_class;
		protected $_str_header_below_right_ds_class;

		protected $_str_content_above_ds_class;		
		protected $_str_title_above_ds_class;
		protected $_str_title_below_ds_class;
		protected $_str_content_below_ds_class;
		
		protected $_str_footer_above_left_ds_class;
		protected $_str_footer_above_center_left_ds_class;
		protected $_str_footer_above_center_ds_class;
		protected $_str_footer_above_center_right_ds_class;
		protected $_str_footer_above_right_ds_class;
		
		protected $_str_footer_left_ds_class;
		protected $_str_footer_center_left_ds_class;
		protected $_str_footer_center_ds_class;
		protected $_str_footer_center_right_ds_class;
		protected $_str_footer_right_ds_class;
		
		protected $_str_footer_below_left_ds_class;
		protected $_str_footer_below_center_left_ds_class;
		protected $_str_footer_below_center_ds_class;
		protected $_str_footer_below_center_right_ds_class;
		protected $_str_footer_below_right_ds_class;


		public function __construct() {
			parent::__construct();
		}
		
		public function ezc_init($arr_args = NULL){
		
			$this->ezbs_layout_objects_init($arr_args);
		}
		
		protected function ezbs_layout_objects_init($arr_args = NULL){
		
			// TODO validation??

			if ( !isset($arr_args) || !is_array($arr_args) || !isset($arr_args['columns_css_classes']) || !is_array($arr_args['columns_css_classes']) ){
				$arr_columns_css_classes = $this->columns_css_classes_defaults();
			} else {
				$arr_columns_css_classes = array_merge($this->columns_css_classes_defaults(), $arr_args['columns_css_classes']);
			}
			$this->columns_css_classes_set( $arr_columns_css_classes );
								
			if ( !isset($arr_args) || !is_array($arr_args) || !isset($arr_args['layout_objects']) || !is_array($arr_args['layout_objects']) ){
				$arr_layout_objects = $this->layout_objects_defaults();
			} else {
				$arr_layout_objects = array_merge($this->layout_objects_defaults(), $arr_args['layout_objects_defaults']);
			}
			$this->layout_objects_set( $arr_layout_objects );
			
			if ( !isset($arr_args) || !is_array($arr_args) || !isset($arr_args['dynamic_sidebar']) || !is_array($arr_args['dynamic_sidebar']) ){
				$arr_layout_objects = $this->dynamic_sidebar_defaults();
			} else {
				$arr_layout_objects = array_merge($this->dynamic_sidebar_defaults(), $arr_args['dynamic_sidebar_defaults']);
			}
			$this->dynamic_sidebar_set($arr_layout_objects);
			
		} // close init
		

					
		// -- ASIDE LEFT & ASIDE RIGHT  + BREADCRUMBS --------------------------------------------------------
		
		public function wp_ezbs_aside_left_wrap( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_aside_left_wrap_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_aside_left_wrap() -->';
				get_template_part($this->_str_aside_left_wrap_tp_folder . $this->_str_aside_left_wrap_tp, ezbsGlobals::$str_child_slug_hyphen);
			}
		}
		
		public function wp_ezbs_aside_left($str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_aside_left_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_aside_left() -->';
				get_template_part( $this->_str_aside_left_tp_folder . $this->_str_aside_left_tp, ezbsGlobals::$str_child_slug_hyphen);
			}
		}
		
		public function wp_ezbs_aside_right_wrap( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_aside_right_wrap_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_aside_right_wrap() -->';
				get_template_part( $this->_str_aside_right_wrap_tp_folder . $this->_str_aside_right_wrap_tp, ezbsGlobals::$str_child_slug_hyphen);
			}
		}
		
		public function wp_ezbs_aside_right($str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active ||  $this->_bool_aside_right_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_aside_right() -->';
				get_template_part( $this->_str_aside_right_tp_folder . $this->_str_aside_right_tp, ezbsGlobals::$str_child_slug_hyphen);
			}
		}
		
		public function wp_ezbs_breadcrumbs($str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_breadcrumbs_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_breadcrumbs() -->';
				get_template_part( $this->_str_breadcrumbs_tp_folder . $this->_str_breadcrumbs_tp, ezbsGlobals::$str_child_slug_hyphen);
			}
		}

		// -- HEADER --------------------------------------------------------------------------
		
		public function wp_ezbs_header_wrap( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_header_wrap_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_header_wrap() -->';
				get_template_part( $this->_str_header_wrap_tp_folder . $this->_str_header_wrap_tp, ezbsGlobals::$str_child_slug_hyphen);
			}
		}

			public function wp_ezbs_header_above( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_header_above_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_header_above() -->';
					get_template_part( $this->_str_header_above_tp_folder . $this->_str_header_above_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}
		
			public function wp_ezbs_menu_global( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_menu_global_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_global() -->';
					get_template_part( $this->_str_menu_global_tp_folder . $this->_str_menu_global_tp, ezbsGlobals::$str_child_slug_hyphen ); 
				}
			}
		
				public function wp_ezbs_menu_global_class_brand( $str_source_layout_object = NULL, $bool_active = false ) {
					if ( $bool_active || $this->_bool_menu_global_class_brand_active ) {
						echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_global_class_brand() -->';		
						get_template_part( $this->_str_menu_global_class_brand_tp_folder . $this->_str_menu_global_class_brand_tp, ezbsGlobals::$str_child_slug_hyphen );
					}
				}
				
				public function wp_ezbs_menu_global_transient( $str_source_layout_object = NULL, $bool_active = false ) {
					if ( $bool_active || $this->_bool_menu_global_transient_active ) {
						echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_global_transient() -->';		
						echo get_transient( $this->_str_menu_global_transient_tp );
					}
				}

			public function wp_ezbs_header_main_wrap( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_header_main_wrap_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_header_main_wrap() -->';
					get_template_part( $this->_str_header_main_wrap_tp_folder . $this->_str_header_main_wrap_tp , ezbsGlobals::$str_child_slug_hyphen );
				}
			}
			
			public function wp_ezbs_header_main( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_header_main_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_header_main() -->';
					get_template_part( $this->_str_header_main_tp_folder . $this->_str_header_main_tp , ezbsGlobals::$str_child_slug_hyphen );
				}
			}

			public function wp_ezbs_menu_main( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_menu_main_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_main() -->';
					get_template_part( $this->_str_menu_main_tp_folder . $this->_str_menu_main_tp, ezbsGlobals::$str_child_slug_hyphen ); 
				}
			}
			
				public function wp_ezbs_menu_main_class_brand( $str_source_layout_object = NULL, $bool_active = false ) {
					if ( $bool_active || $this->_bool_menu_main_class_brand_active ) {
						echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_main_class_brand() -->';		
						get_template_part( $this->_str_menu_main_class_brand_tp_folder . $this->_str_menu_main_class_brand_tp , ezbsGlobals::$str_child_slug_hyphen );
					}
				}

				public function wp_ezbs_menu_main_transient( $str_source_layout_object = NULL, $bool_active = false ) {
					if ( $bool_active || $this->_bool_menu_main_transient_active || true  ) {
						echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_main_transient() -->';		
						echo get_transient( $this->_str_menu_main_transient_tp );
					}
				}
				
			public function wp_ezbs_header_below( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_header_below_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_header_below() -->';
					get_template_part(  $this->_str_header_below_tp_folder . $this->_str_header_below_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}

		// -- END HEADER ----------------------------------------------------------------------------------

		// -- MAIN CONTENT AREA  ----------------------------------------------------------------------------------
		public function wp_ezbs_index_content_center( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_index_content_center_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_content_center() -->';
				get_template_part( $this->_str_index_content_center_tp_folder . $this->_str_index_content_center_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}

		public function wp_ezbs_index_content_center_while_have_posts( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_index_content_center_while_have_posts_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_content_center_while_have_posts() -->';
				get_template_part( $this->_str_index_content_center_while_have_posts_tp_folder . $this->_str_index_content_center_while_have_posts_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}

		public function wp_ezbs_index_archive_paging_controls_above( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_index_archive_paging_controls_above_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_archive_paging_controls_above() -->';
				get_template_part( $this->_str_index_archive_paging_controls_above_tp_folder . $this->_str_index_archive_paging_controls_above_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		public function wp_ezbs_content_above( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_content_above_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_content_above() -->';
				get_template_part( $this->_str_content_above_tp_folder . $this->_str_content_above_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		public function wp_ezbs_index_sort_controls( $str_source_layout_object = NULL, $bool_active = false) {
			if ( $bool_active || $this->_bool_index_sort_controls_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_sort_controls() -->';		
				get_template_part( $this->_str_index_sort_controls_tp_folder . $this->_str_index_sort_controls_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		public function wp_ezbs_index_paging_controls( $str_source_layout_object = NULL, $bool_active = false) {
			if ( $bool_active || $this->_bool_index_paging_controls_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_paging_controls() -->';		
				get_template_part( $this->_str_index_paging_controls_tp_folder . $this->_str_index_paging_controls_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		public function wp_ezbs_single_paging_controls( $str_source_layout_object = NULL, $bool_active = false) {
			if ( $bool_active || $this->_bool_single_paging_controls_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_single_paging_controls() -->';	
				get_template_part( $this->_str_single_paging_controls_tp_folder . $this->_str_single_paging_controls_tp, ezbsGlobals::$str_child_slug_hyphen );				
			}
		}
		
		public function wp_ezbs_title_above( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_title_above_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_title_above() -->';
				get_template_part( $this->_str_title_above_tp_folder . $this->_str_title_above_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}

		public function wp_ezbs_title_below( $str_source_layout_object = NULL, $bool_active = false ){
			if ( $bool_active || $this->_bool_title_below_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_title_below() -->';
				get_template_part( $this->_str_title_below_tp_folder . $this->_str_title_below_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		// only applies to WP post_type == page
		public function wp_ezbs_page_content_center_wrap( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_page_content_center_wrap_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_page_content_center_wrap() -->';
				get_template_part( $this->_str_page_content_center_wrap_tp_folder . $this->_str_page_content_center_wrap_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
			// only applies to WP post_type == page
			public function wp_ezbs_page_content_center( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_page_content_center_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_page_content_center() -->';
					get_template_part( $this->_str_page_content_center_tp_folder . $this->_str_page_content_center_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}
			
			// only applies to WP post_type == ppost
			public function wp_ezbs_single_content_center( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_single_content_center_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_single_content_center() -->';
					get_template_part( $this->_str_single_content_center_tp_folder . $this->_str_single_content_center_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}

		public function wp_ezbs_index_archive_content_below_above( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_index_archive_content_below_above_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_archive_content_below_above() -->';
				get_template_part( $this->_str_index_archive_content_below_above_tp_folder . $this->_str_index_archive_content_below_above_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		public function wp_ezbs_content_below( $str_source_layout_object = NULL, $bool_active = false ) {

			if ( $bool_active || $this->_bool_content_below_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_content_below() -->';
				get_template_part( $this->_str_content_below_tp_folder . $this->_str_content_below_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		public function wp_ezbs_index_archive_content_below_below( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_index_archive_content_below_below_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_index_archive_content_below_below() -->';
				get_template_part( $this->_str_index_archive_content_below_below_tp_folder . $this->_str_index_archive_content_below_below_tp, ezbsGlobals::$str_child_slug_hyphen );
			}
		}
		
		// -- END MAIN CONTENT AREA  ----------------------------------------------------------------------------------
	
		// -- FOOTER --------------------------------------------------------------------------
		
		public function wp_ezbs_footer_wrap( $str_source_layout_object = NULL, $bool_active = false ) {
			if ( $bool_active || $this->_bool_footer_wrap_active ) {
				echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_footer_wrap() -->';
				get_template_part( $this->_str_footer_wrap_tp_folder . $this->_str_footer_wrap_tp , ezbsGlobals::$str_child_slug_hyphen);
			}
		}

			public function wp_ezbs_footer_above( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_footer_above_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_footer_above() -->';
					get_template_part( $this->_str_footer_above_tp_folder . $this->_str_footer_above_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}
		
			public function wp_ezbs_menu_footer( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_menu_footer_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_footer() -->';
					get_template_part( $this->_str_menu_footer_tp_folder . $this->_str_menu_footer_tp, ezbsGlobals::$str_child_slug_hyphen ); 
				}
			}
		
				public function wp_ezbs_menu_footer_class_brand( $str_source_layout_object = NULL, $bool_active = false ) {
					if ( $bool_active || $this->_bool_menu_footer_class_brand_active ) {
						echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_footer_class_brand() -->';		
						get_template_part( $this->_str_menu_footer_class_brand_tp_folder . $this->_str_menu_footer_class_brand_tp, ezbsGlobals::$str_child_slug_hyphen );
					}
				}
				
				public function wp_ezbs_menu_footer_transient( $str_source_layout_object = NULL, $bool_active = false ) {
					if ( $bool_active || $this->_bool_menu_footer_transient_active ) {
						echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_menu_footer_transient() -->';		
						echo get_transient( $this->_str_menu_footer_transient_tp );
					}
				}
				
			public function wp_ezbs_footer_main( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_footer_main_active ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_footer_main() -->';
					get_template_part( $this->_str_footer_main_tp_folder . $this->_str_footer_main_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}
			
			public function wp_ezbs_footer_below( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_footer_below_active  ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_footer_below() -->';
					get_template_part( $this->_str_footer_below_tp_folder . $this->_str_footer_below_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}
			
			public function wp_ezbs_footer_bottom( $str_source_layout_object = NULL, $bool_active = false ) {
				if ( $bool_active || $this->_bool_footer_bottom_active  ) {
					echo '<!-- Class: ezbsLayoutOjbects :: Method: wp_ezbs_footer_bottom() -->';
					get_template_part( $this->_str_footer_bottom_tp_folder . $this->_str_footer_bottom_tp, ezbsGlobals::$str_child_slug_hyphen );
				}
			}
			
		// -- END FOOTER ----------------------------------------------------------------------------------

		/**
		 *
		 */
		public function columns_css_classes_set($arr_args = NULL){
		
			if ( !is_array($arr_args)){
				return array('status' => false, 'msg' => 'arr_args !is_array()', 'arr_args' => 'error');
			}

			foreach ( $arr_args as $str_key => $mix_value ){
				if ( !is_string($str_key) || (!is_string($mix_value) && !is_bool($mix_value)) ){
					continue;
				}
				$str_column = '_mix_column_' . trim($str_key);
				$this->$str_column = $mix_value;
			}
		}

		/**
		 *
		 */
		public function layout_objects_set($arr_args = NULL){
	
			if ( !is_array($arr_args)){
				return array('status' => false, 'msg' => 'arr_args !is_array()', 'arr_args' => 'error');
			}

			//TODO - Validation? 
			foreach ( $arr_args as $str_key => $arr_value ){
				if ( !is_string($str_key) || !is_array($arr_value) || !isset($arr_value['active']) || !isset($arr_value['tp']) || !isset($arr_value['folder']) ){
					continue;
				}
				$str_active = '_bool_' . trim($str_key) . '_active';
				$str_folder = '_str_' . trim($str_key) . '_tp_folder';
				$str_tp = '_str_' . trim($str_key) . '_tp';
				 	
				$this->$str_active = $arr_value['active'];
				$this->$str_folder = $arr_value['folder'];
				if ( !empty($arr_value['folder']) ){
					$this->$str_folder .= '/';
				}
				$this->$str_tp = $arr_value['tp'];

			}
			return array('status' => true, 'msg' => 'success', 'arr_args' => $arr_args);
		}
		
		/**
		 *
		 */
		public function dynamic_sidebar_set( $arr_args ){

			if ( !is_array($arr_args)){
				return array('status' => false, 'msg' => 'arr_args !is_array()', 'arr_args' => 'error');
			}

			//TODO - Validation? 
			foreach ( $arr_args as $str_key => $arr_value ){

				if ( !is_string($str_key) || !is_array($arr_value) || !isset($arr_value['active']) || !isset($arr_value['class']) || !isset($arr_value['id_ds_unique']) ){
					continue;
				}
				$str_active = '_bool_' . trim($str_key) . '_ds_active';
				$str_class = '_str_' . trim($str_key) . '_ds_class';
				$str_tp = '_str_' . trim($str_key) . '_ds';
				
				$this->$str_active = $arr_value['active'];
				$this->$str_class = $arr_value['class'];
				$this->$str_tp = $arr_value['id_ds_unique'];
			}
			
			return array('status' => true, 'msg' => 'success', 'arr_args' => $arr_args);
		}
		
		/**
		 *
		 */
		
		public function property_get($property_name) {

			if ( isset($this->$property_name) ){
				return $this->$property_name;
			} else {
				return NULL;
			}
		}
					
		
		protected function columns_css_classes_defaults(){
		
			$arr_defaults = array(
								'left'		=> false,
								'center'	=> 'span9', 
								'right'		=> 'span3',
							);
		// TODO - global filter bool? 
			$arr_defaults = apply_filters('filter_ezbs_layout_objects_columns_css_classes_defaults', $arr_defaults);
			return $arr_defaults;
		}
		
		protected function layout_objects_defaults(){
		
			$arr_defaults = array(	
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
																					'tp'		=> 'ezbs_transient_menu_global',	// note to _ and not -
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
																					'tp'		=> 'ezbs_transient_menu_main',		// note to _ and not -
																				),																				
								'header_below'								=> array(
																					'active'	=> true,
																					'folder'	=> 'shared',																																										
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
																					'tp'		=> 'ezbs_transient_menu_footer',		// note to _ and not -
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
						
			$arr_defaults = apply_filters('filter_ezbs_layout_objects_layout_objects_defaults', $arr_defaults);
			return $arr_defaults;
		}

		
		
		/*
		 * Think of these are the granular layout spots where widgets defined in the backend are assigned to appear on the front end.
		 * For example, you might have two different widgets for aside_right_above that you want to use under different conditions. 
		 * Rather than coding two different layout objects (which you can do, if you prefer), you can manipulate the values of id_ds_unique
		 */
		
		protected function dynamic_sidebar_defaults(){
		
			$arr_defaults = array(
								// aside left
								'aside_left_above' 	=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'aside-left-above',
															'class'			=> '',
														),								
								'aside_left' 		=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'aside-left',
															'class'			=> '',
														),			
								'aside_left_below' 	=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'aside-left-below',
															'class'			=> '',															
														),
								// aside right
								'aside_right_above' 	=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'aside-right-above',
															'class'			=> '',															
														),								
								'aside_right' 		=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'aside-right',
															'class'			=> '',															
														),			
								'aside_right_below' 	=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'aside-right-below',
															'class'			=> '',															
														),
								// header above												
								'header_above_left'			=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-above-left',
																'class'			=> '',															
															),
								'header_above_center_left' 	=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-above-center-left',
																'class'			=> '',
																
															),
								'header_above_center' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-above-center',
																'class'			=> '',		
															),														
								'header_above_center_right' => array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-above-center-right',
																'class'			=> '',
																
															),			
								'header_above_right' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-above-right',
																'class'			=> '',
															),
								// header						
								'header_main' 			=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'header-main',
															'class'			=> '',															
														),
														
								// header below above						
								'header_below_left'			=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-below-left',
																'class'			=> '',															
															),
								'header_below_center_left' 	=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-below-center-left',
																'class'			=> '',
																
															),
								'header_below_center' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-below-center',
																'class'			=> '',		
															),														
								'header_below_center_right' => array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-below-center-right',
																'class'			=> '',
																
															),			
								'header_below_right' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'header-below-right',
																'class'			=> '',
															),														
														
								// content
								
								'content_above' 		=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'content-above',
															'class'			=> '',															
														),								
														
								'title_above' 			=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'title-above',
															'class'			=> '',															
														),
														
								'title_below' 			=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'title-below',
															'class'			=> '',															
														),
														
								'content_below' 			=> array(
															'active'		=> true,
															'id_ds_unique'	=> 'content-below',
															'class'			=> '',															
														),
														
								// footer above						
								'footer_above_left'			=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-above-left',
																'class'			=> '',															
															),
								'footer_above_center_left' 	=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-above-center-left',
																'class'			=> '',
																
															),
								'footer_above_center' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-above-center',
																'class'			=> '',		
															),														
								'footer_above_center_right' => array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-above-center-right',
																'class'			=> '',
																
															),			
								'footer_above_right' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-above-right',
																'class'			=> '',
															),
								// footer						
								'footer_left'	 			=> array(	
																'active'		=> true,
																'id_ds_unique'	=> 'footer-left',
																'class'			=> '',
															),	
								'footer_center_left' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-center-left',
																'class'			=> '',
															),
								'footer_center' 			=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-center',
																'class'			=> '',
															),
								'footer_center_right' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-center-right',
																'class'			=> '',
															),			
								'footer_right' 				=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-right',
																'class'			=> '',
															),
														
								// footer below						
								'footer_below_left' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-below-left',
																'class'			=> '',
															),
								'footer_below_center_left' 	=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-below-center-left',
																'class'			=> '',
															),
								'footer_below_center' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-below-center',
																'class'			=> '',
															),														
								'footer_below_center_right' => array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-below-center-right',
																'class'			=> '',
															),			
								'footer_below_right' 		=> array(
																'active'		=> true,
																'id_ds_unique'	=> 'footer-below-right',
																'class'			=> '',
															),
			
							);
							
			$arr_defaults = apply_filters('filter_ezbs_layout_objects_dynamic_sidebar_defaults', $arr_defaults);
			return $arr_defaults;
		}
		
	} // -- close class --
} // -- close if class --

?>