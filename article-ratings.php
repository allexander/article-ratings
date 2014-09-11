<?php
namespace ArticleRatings;

/**
 * Plugin Name: Article ratings
 * Plugin URI: http://www.wsitesolutions.com/wp-article-ratings
 * Description: Add ratings to articles
 * Version: 0.1
 * Author: Alexander Kurtev
 * Author URI: http://www.wsitesolutions.com/
 * License: 
 */

function Plugin_Page_URL() {
   $pageURL = 'http';
	if ( filter_input(INPUT_SERVER, 'HTTPS') == "on" )
   {
		$pageURL .= "s";
   }
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80")
   {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
   }
   else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
   }
   return $pageURL;
}

define('ARTICLERATINGS_VERSION', '0.0.1');
define('AR_MIN_WP_VERSION', '3.1');
// Plugin directory
define('AR_PLUGIN_DIR', dirname(__FILE__)); 
// Plugin files url
define('AR_PLUGIN_FILES_URL', WP_PLUGIN_URL.'/'.basename(AR_PLUGIN_DIR));
// Plugin current url 
define('AR_PLUGIN_PAGE_URL', Plugin_Page_URL());
define('AR_PLUGIN_ADMIN_OPTIONS_URL', explode("?", AR_PLUGIN_PAGE_URL)[0]);
//$wpdb = new wpdb;

//echo $wpdb->prefix;

if( is_admin() )
{
   require_once( AR_PLUGIN_DIR . '/admin/controllers/admin.c.php' );
}