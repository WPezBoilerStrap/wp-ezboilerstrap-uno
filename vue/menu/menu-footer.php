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
 * --- 21 August 2014 = Ready.
 */
?>

<?php
$arr_menu_footer = ezbsModl::get( basename(__FILE__, '.php') ); 

if ( isset($arr_menu_footer['active']) && $arr_menu_footer['active'] === true ){	

	echo '<div class="container">';
		echo '<div class="' . sanitize_text_field($arr_menu_footer['css']['class_navbar']) . '">';
		  echo 	'<div class="' . sanitize_text_field($arr_menu_footer['css']['class_navbar_inner']) . '">';
				  			
				WP_ezMethods::ez_gtp( $arr_menu_footer['tp']['menu_footer_brand']['slug'], $arr_menu_footer['tp']['menu_footer_brand']['name'], $arr_menu_footer['tp']['menu_footer_brand']['active'] );

                if ( WP_ezMethods::array_pass($arr_menu_footer['menu_args'])  && isset($arr_menu_footer['menu_args']['active']) && $arr_menu_footer['menu_args']['active'] === true ){
				?>
				  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="<?php echo sanitize_text_field($arr_menu_footer['menu_args']['container_id']) ?>">
				    <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				<?php
				  wp_nav_menu( $arr_menu_footer['menu_args'] );
				}
				?>
					
			</div> <!-- / .navbar-inner -->
		</div> <!-- / .navbar navbar-inverse navbar-relative-top -->
	</div> <!-- / .container -->
<?php
}