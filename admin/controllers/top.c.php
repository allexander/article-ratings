<?php

namespace ArticleRatings\Admin;


function tabURL($name)
{
    $adminURL = basename(filter_input(INPUT_SERVER, 'php_self')) . "?page=" . filter_input(INPUT_GET, 'page');
    return $adminURL . "&module=" . $name;
}

function isCurrentTab($tab)
{
   if( filter_input(INPUT_GET, 'module') == $tab || ( !filter_input(INPUT_GET, 'module') && $tab == 'home' ) )
   {
      return "nav-tab-active";
   }
}

// Load top view
require_once( AR_PLUGIN_DIR . '/admin/views/components/top.v.php' );