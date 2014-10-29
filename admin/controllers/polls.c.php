<?php
        
   namespace ArticleRatings\Admin\Polls;

   class Polls
   {
         public static function Add()
         {
            /*
               $profileData = array();
               $profileData['id'] = (string)time() . (string)rand( 10, 99 );
               $profileData['type'] = filter_input(INPUT_POST, 'type');
               $profileData['autor'] = filter_input(INPUT_POST, 'autor');
               $profileData['media'] = filter_input(INPUT_POST, 'media');
               $profileData['picture'] = filter_input(INPUT_POST, 'picture');
               $profileData['logo'] = filter_input(INPUT_POST, 'logo');
               $profileData['site'] = filter_input(INPUT_POST, 'site');
               $profileData['created'] = (string)time();
               if(\ArticleRatings\Database\Profiles\Tables::Add($profileData))
               {
                     return 'Профилът беше успешно добавен!';
               }
             */
         }
         public static function View(){
            //return \ArticleRatings\Database\Profiles\Tables::View();
         }
   }
   
   // Load additional header elements view
   // require_once( AR_PLUGIN_DIR . '/admin/views/header.v.php');

   // Load top menu view
   require_once( AR_PLUGIN_DIR . '/admin/controllers/polls-menu.c.php' );
    
   // Load polls main view
   //require_once( AR_PLUGIN_DIR . '/admin/views/polls/polls.v.php');
   
           
   // Load page bottom view
   // require_once( AR_PLUGIN_DIR . '/admin/views/bottom.v.php');
   
   // Load proper profile controller
   if( filter_input(INPUT_GET, 'option') )
   {
      // Load profile controller depending of what sub-page is selected
      require_once( AR_PLUGIN_DIR . '/admin/controllers/polls-' . filter_input(INPUT_GET, 'option') . '.c.php' );      
   }
   else {
      // Load default profile controller
      require_once( AR_PLUGIN_DIR . '/admin/controllers/polls-list.c.php' );
   }