<?php

	namespace ArticleRatings\Admin;

   class MenuTabs
   {
      public function __contruct()
      {

      }

      public function adminURL()
      {
         return basename(filter_input(INPUT_SERVER, 'php_self')) . "?page=" . filter_input(INPUT_GET, 'page');
      }

      public function tabURL($name)
      {
         return $this->adminURL() . "&tab=" . $name;
      }

      public function isCurrent($tab)
      {
         if( filter_input(INPUT_GET, 'tab') == $tab || ( !filter_input(INPUT_GET, 'tab') && $tab == 'home' ) )
         {

            return "nav-tab-active";
         }
      }
   }
    
   $MenuTabs = new \ArticleRatings\Admin\MenuTabs();
    
   require_once( AR_PLUGIN_DIR . '/admin/views/menu.v.php');
   