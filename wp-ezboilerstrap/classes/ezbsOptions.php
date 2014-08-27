<?php
/** 
 * Define your own theme options (for when you can't find presets you like)
 *
 * Provided you've done some WP theme dev, most of this should look pretty obvious. None the less, there is some commenting when it seems appropriate.
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
 * --- 3 August 2013 = Ready.
 */
 
 
if ( !defined('ABSPATH') ) {
	header('HTTP/1.0 403 Forbidden');
    die();
}


if (!class_exists('ezbsOptions')) {
	class ezbsOptions extends ezbsOptionsMaster{

	
		protected function __construct(){	
			parent::__construct(); 
		}
		
	}
}

?>