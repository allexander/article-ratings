<?php
    
namespace ArticleRatings\Admin\Profiles
{
	
	require_once( AR_PLUGIN_DIR . '/admin/models/profiles.m.php' );
	
	class Profiles
	{
		public static function Add()
		{
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
		}
		public static function View(){
			return \ArticleRatings\Database\Profiles\Tables::View();
		}
	}
	
   // Load profiles menu controller
   require_once( AR_PLUGIN_DIR . '/admin/controllers/profiles-menu.c.php' );
   
   // Load add profile controller
   if( filter_input(INPUT_GET, 'option') )
   {
      require_once( AR_PLUGIN_DIR . '/admin/controllers/profiles-' . filter_input(INPUT_GET, 'option') . '.c.php' );      
   }
   else {
      require_once( AR_PLUGIN_DIR . '/admin/controllers/profiles-list.c.php' );
   }
	
}