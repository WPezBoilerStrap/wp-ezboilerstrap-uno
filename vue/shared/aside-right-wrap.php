<?php
/** 
 * Wrapper for the Aside Right
 *
 * Chances are this will remain constant, while the layout objects within it might change (@link http://)
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
 * --- 19 August 2014 = Ready.
 */ 
?>

<?php

$arr_aside_right_wrap = ezbsModl::get( basename(__FILE__, '.php') ); 

if( ! isset($arr_aside_right_wrap['active']) || $arr_aside_right_wrap['active'] !== false )  {  
?>
  <aside>
    <div class="<?php echo $arr_aside_right_wrap['css']['class'] .' wp-ezbs-aside-left'?>">
	<?php
	  WP_ezMethods::ez_gtp( $arr_aside_right_wrap['tp']['main']['slug'], $arr_aside_right_wrap['tp']['main']['name'], $arr_aside_right_wrap['tp']['main']['active'] );
	?>	
	</div><!-- /.span# -->
  </aside>
<?php
} 
?>