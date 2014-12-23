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

// Load classes
require_once( AR_PLUGIN_DIR . '/classes/Paths.php');
require_once( AR_PLUGIN_DIR . '/classes/URLs.php');
require_once( AR_PLUGIN_DIR . '/classes/Database.php');
require_once( AR_PLUGIN_DIR . '/classes/Users.php');
require_once( AR_PLUGIN_DIR . '/classes/Polls.php');
require_once( AR_PLUGIN_DIR . '/admin/models/PollGroups.php');




function includeAdminAssetsScripts()
{
    wp_register_style('ar_style', AR_PLUGIN_FILES_URL . '/admin/assets/css/ar-style.css', false, '0.0.1');  
    wp_enqueue_style('ar_style');
    //wp_register_script('ar_javascript', AR_PLUGIN_FILES_URL . '/admin/assets/js/ar-functions.js', false, '0.0.1');  wp_enqueue_script('ar_javascript');
    wp_enqueue_script( 'ar_javascript', AR_PLUGIN_FILES_URL . '/admin/assets/js/ar-functions.js', array( 'jquery' ), '', true );

}

function adminBody()
{
    if ( !current_user_can( 'manage_options' ) )
    {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    // Load head controller
    require_once( AR_PLUGIN_DIR . '/admin/controllers/top.c.php');

    // Load controller
    if( gettype ( filter_input(INPUT_GET, 'module') ) == 'NULL' )
    {
        require_once( AR_PLUGIN_DIR . '/admin/controllers/home.c.php');
    }
    else
    {
        require_once( AR_PLUGIN_DIR . '/admin/controllers/' . filter_input(INPUT_GET, 'module') . '.c.php');
    }

    // Load bottom controller
    require_once( AR_PLUGIN_DIR . '/admin/controllers/bottom.c.php');

}

function adminMenu()
{
    add_options_page( 'Article ratings', 'Article ratings', 'manage_options', 'article-ratings', 'ArticleRatings\Admin\adminBody' );
    //add_menu_page( 'Article ratings', 'Article ratings', 'manage_options', 'article-ratings' );
}

add_action('admin_menu', 'ArticleRatings\Admin\adminMenu');
add_action('admin_enqueue_scripts', 'ArticleRatings\Admin\includeAdminAssetsScripts');