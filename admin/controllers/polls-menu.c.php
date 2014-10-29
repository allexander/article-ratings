<?php

   namespace ArticleRatings\Admin;

   class PollsMenu
   {
      
      public function __contruct()
      {

      }
      
      public static function getURL($string){
         return "?page=article-ratings&tab=polls&option=" . $string;
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
   
   require_once( AR_PLUGIN_DIR . '/admin/views/polls/polls-menu.v.php' );