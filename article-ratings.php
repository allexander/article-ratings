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


define('ARTICLERATINGS_VERSION', '0.0.1');
define('AR_MIN_WP_VERSION', '3.1');
// Plugin directory
define('AR_PLUGIN_DIR', dirname(__FILE__)); 

if( is_admin() )
{
    require_once( AR_PLUGIN_DIR . '/admin/loader.php' );
}