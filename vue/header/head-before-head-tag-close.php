<?php
/** 
 * A GTP just prior to the </head>
 *
 * Example: Google Tag Manager snippet from would go here. 
 *
 * PHP version 5.3
 *
 * LICENSE: MIT 
 *
 * @package WPezBoilerStrap
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.0
 * @license MIT
 */
 
/*
 * == Change Log == 
 *
 * --- 30 August 2014 - Ready
 */
 
// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

echo '<!--[if lt IE 9]>';
echo   '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
echo   '<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>';
echo '<![endif]-->';