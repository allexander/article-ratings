<?php
namespace ArticleRatings\Database\Profiles
{
	class Tables
	{
		public static function tableCheck()
		{
			//$b = 'existing';
         global $wpdb;
			$table = $wpdb->prefix . 'ar_profiles';
			if($wpdb->get_var("SHOW TABLES LIKE '$table'") != $table) {
				$qry="CREATE TABLE wp1_ar_profiles ( "
				   . "profile_id INT(15) NULL DEFAULT NULL, "
				   . "profile_autor VARCHAR(256) NULL DEFAULT NULL, "
				   . "profile_media VARCHAR(256) NULL DEFAULT NULL, "
				   . "profile_type VARCHAR(256) NULL DEFAULT NULL, "
				   . "profile_picture VARCHAR(256) NULL DEFAULT NULL, "
				   . "profile_logo VARCHAR(256) NULL DEFAULT NULL, "
				   . "profile_site VARCHAR(256) NULL DEFAULT NULL, "
				   . "profile_created TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP, "
				   . "PRIMARY KEY (profile_id, profile_autor, profile_media, profile_type, profile_created) "
				   . " ) ENGINE = MyISAM;";
			   $wpdb->query( $qry );
				//$b = 'created';
			}
		}

		public static function Add($data)
		{
			Tables::tableCheck();
         global $wpdb;
			$table = $wpdb->prefix . 'ar_profiles';
			$result = $wpdb->insert( 
				$table, 
				array( 
					'profile_id' => $data['id'], 
					'profile_autor' => stripslashes($data['autor']),
					'profile_media' => stripslashes($data['media']),
					'profile_type' => $data['type'],
					'profile_picture' => stripslashes($data['picture']),
					'profile_logo' => stripslashes($data['logo']),
					'profile_site' => stripslashes($data['site'])
				)
			);
			return $result;
		}
		
		public static function View()
		{
			
			Tables::tableCheck();
         global $wpdb;
			$table = $wpdb->prefix . 'ar_profiles';
			return $wpdb->get_results("SELECT * FROM $table");
			
		}
	
	}
}