<?php
/** 
 * Main (wrapper) for the Global menu
 *
 * Long description TODO (@link http://)
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
 
/**
 * == Change Log == 
 *
 * --- 31 August 2014 = Ready.
 */

$arr_menu_global = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_menu_global['active']) ){	

	echo '<div class="' . sanitize_text_field($arr_menu_global['markup']['wrap_class']) . '">';
	  echo '<div class="' . sanitize_text_field($arr_menu_global['markup']['class_container']) . '">';
		echo '<div class="' . sanitize_text_field($arr_menu_global['markup']['navbar_class']) . '">';
		
		  if ( WPezHelpers::ez_array_pass($arr_menu_global['menu_args'])  && WPezHelpers::ez_true($arr_menu_global['menu_args']['active']) ){ 
		  
		    $str_wp_nav_menu = wp_nav_menu( $arr_menu_global['menu_args'] );
			
			if ( ! empty ($str_wp_nav_menu) ){
		      ?>
			  <button type="button" class="<?php echo sanitize_text_field($arr_menu_global['markup']['button_class']) ?>" data-toggle="<?php echo sanitize_text_field($arr_menu_global['markup']['button_data_toggle']) ?>" data-target="<?php echo sanitize_text_field($arr_menu_global['markup']['data_target']) ?>">
			    <span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			<?php
			}
			WPezHelpers::ez_gtp( $arr_menu_global['tp']['menu_global_brand']['slug'], $arr_menu_global['tp']['menu_global_brand']['name'], $arr_menu_global['tp']['menu_global_brand']['active'] );
		  }
		
		echo '</div>';// <!-- / .navbar navbar-inverse navbar-relative-top -->
		  
		  if ( WPezHelpers::ez_array_pass($arr_menu_global['menu_args'])  && WPezHelpers::ez_true($arr_menu_global['menu_args']['active']) ){ 
		    if ( ! empty ($str_wp_nav_menu) ){
			  echo $str_wp_nav_menu;
			}
		  }

	echo '</div>'; // <!-- / class_container -->
  echo '</div>'; // <!-- / class_wrap -->
}