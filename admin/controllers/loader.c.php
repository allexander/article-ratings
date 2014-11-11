<?php

namespace ArticleRatings\Admin;

/*
class Admin
{
    public function __construct()
    {
        $this->includeAdminFiles();
        $this->buildAdminPage();
    }

    public function includeAdminFiles()
    {
        add_action( 'admin_enqueue_scripts', array($this, 'includeAdminCssFiles') );
        add_action( 'admin_enqueue_scripts', array($this, 'includeAdminJsFiles') );
    }
     
    public function includeAdminCssFiles()
    {
        wp_register_style('ar_style', AR_PLUGIN_FILES_URL . '/admin/assets/css/ar-style.css', false, '0.0.1');  
        wp_enqueue_style('ar_style');
    }   
    
    public function includeAdminJsFiles()
    {
        wp_register_script('ar_javascript', AR_PLUGIN_FILES_URL . '/admin/assets/js/ar-functions.js', false, '0.0.1');  
        wp_enqueue_script('ar_javascript');
    }   
    
    public function buildAdminPage()
    {        
        add_action( 'admin_menu', array($this, 'adminMenu') );        
    }
    
    public function adminMenu()
    {
        add_options_page( 'Article ratings', 'Article ratings', 'manage_options', 'article-ratings', array($this, 'adminBody') );
    }
    
    public function adminBody()
    {
        if ( !current_user_can( 'manage_options' ) )
        {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        
        // Load head controller
        require_once( AR_PLUGIN_DIR . '/admin/controllers/header.c.php');
        
        // Load controller
        if( gettype ( filter_input(INPUT_GET, 'tab') ) == 'NULL' )
        {
            require_once( AR_PLUGIN_DIR . '/admin/controllers/home.c.php');
        }
        else
        {
            require_once( AR_PLUGIN_DIR . '/admin/controllers/' . filter_input(INPUT_GET, 'tab') . '.c.php');
        }
        
        // Load bottom controller
        require_once( AR_PLUGIN_DIR . '/admin/controllers/bottom.c.php');
        
    }
	 
}
*/

// Load classes
require_once( AR_PLUGIN_DIR . '/classes/Paths.php');
require_once( AR_PLUGIN_DIR . '/classes/Database.php');
require_once( AR_PLUGIN_DIR . '/classes/Users.php');
require_once( AR_PLUGIN_DIR . '/classes/Polls.php');

function includeAdminCssFiles()
{
    wp_register_style('ar_style', AR_PLUGIN_FILES_URL . '/admin/assets/css/ar-style.css', false, '0.0.1');  
    wp_enqueue_style('ar_style');
}   

function includeAdminJsFiles()
{
    wp_register_script('ar_javascript', AR_PLUGIN_FILES_URL . '/admin/assets/js/ar-functions.js', false, '0.0.1');  
    wp_enqueue_script('ar_javascript');
}

function adminBody()
{
    if ( !current_user_can( 'manage_options' ) )
    {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    // Load head controller
    require_once( AR_PLUGIN_DIR . '/admin/controllers/header.c.php');

    // Load controller
    if( gettype ( filter_input(INPUT_GET, 'tab') ) == 'NULL' )
    {
        require_once( AR_PLUGIN_DIR . '/admin/controllers/home.c.php');
    }
    else
    {
        require_once( AR_PLUGIN_DIR . '/admin/controllers/' . filter_input(INPUT_GET, 'tab') . '.c.php');
    }

    // Load bottom controller
    require_once( AR_PLUGIN_DIR . '/admin/controllers/bottom.c.php');

}

function adminMenu()
{
    add_options_page( 'Article ratings', 'Article ratings', 'manage_options', 'article-ratings', 'ArticleRatings\Admin\adminBody' );
}

add_action('admin_menu', 'ArticleRatings\Admin\adminMenu');
add_action('admin_enqueue_scripts', 'ArticleRatings\Admin\includeAdminCssFiles');
add_action('admin_enqueue_scripts', 'ArticleRatings\Admin\includeAdminJsFiles');

