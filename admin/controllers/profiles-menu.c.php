<?php

	namespace ArticleRatings\Admin;

   class ProfileMenu
   {
      
      public function __contruct()
      {

      }
      
      public static function getURL($string){
         return "?page=article-ratings&tab=profiles&option=" . $string;
      }
      
      public static function isCurrent($option)
      {
         if( filter_input(INPUT_GET, 'option') == $option || ( !filter_input(INPUT_GET, 'option') && $option == 'list' ) )
         {
            return "add-new-h2-selected";
         }
      }
      
   }
   
   //$profileMenu = new \ArticleRatings\Admin\ProfileMenu();
   
   require_once( AR_PLUGIN_DIR . '/admin/views/profiles/profiles-menu.v.php' );