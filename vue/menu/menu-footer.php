<?php
/** 
 * Main (wrapper) for the Footer menu
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
 
/*
 * == Change Log == 
 *
 * --- 31 August 2014 = Ready.
 */
?>

<?php
$arr_menu_footer = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( WPezHelpers::ez_true($arr_menu_footer['active']) ){	

	echo '<div class="' . sanitize_text_field($arr_menu_footer['markup']['wrap_class']) . '">';
		echo '<div class="' . sanitize_text_field($arr_menu_footer['markup']['navbar_class']) . '">';
		  echo 	'<div class="' . sanitize_text_field($arr_menu_footer['markup']['navbar_inner_class']) . '">';
				  			
				WPezHelpers::ez_gtp( $arr_menu_footer['tp']['menu_footer_brand']['slug'], $arr_menu_footer['tp']['menu_footer_brand']['name'], $arr_menu_footer['tp']['menu_footer_brand']['active'] );

                if ( WPezHelpers::ez_array_pass($arr_menu_footer['menu_args'])  && WPezHelpers::ez_true($arr_menu_footer['menu_args']['active']) ){
				
				  $str_wp_nav_menu = wp_nav_menu( $arr_menu_footer['menu_args'] );
				 
				   if ( ! empty ($str_wp_nav_menu) ){
				  ?>
				     <button type="button" class="<?php echo sanitize_text_field($arr_menu_footer['markup']['button_class']) ?>" data-toggle="<?php echo sanitize_text_field($arr_menu_footer['markup']['button_data_toggle']) ?>" data-target="<?php echo sanitize_text_field($arr_menu_footer['markup']['data_target']) ?>">
					   <span class="sr-only">Toggle navigation</span>
				       <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
				     </button>
				<?php
				  echo $str_wp_nav_menu;
				  }
				}
				?>
					
			</div> <!-- / .navbar-inner -->
		</div> <!-- / .navbar navbar-inverse navbar-relative-top -->
	</div> <!-- / .container -->
<?php
}