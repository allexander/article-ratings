<?php

namespace ArticleRatings\Admin;

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

// Plugin files url
define('AR_PLUGIN_FILES_URL', WP_PLUGIN_URL.'/'.basename(AR_PLUGIN_DIR));
// Plugin current url 
define('AR_PLUGIN_PAGE_URL', Plugin_Page_URL());
define('AR_PLUGIN_ADMIN_OPTIONS_URL', explode("?", AR_PLUGIN_PAGE_URL)[0]);
//$wpdb = new wpdb;

//echo $wpdb->prefix;

require_once( 'controllers/loader.c.php' );