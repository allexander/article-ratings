<?php
namespace ArticleRatings\Classes;

/**
 * Description of Database
 *
 * @author Alexander
 */

class Database {
   
//private $wpdb;

    /*
    public static function buildUserTables()
    {
        // user id, user name, user type, user image, user created, user site
        $b = 'existing';
        global $wpdb;
        $table_name = $wpdb->prefix . 'ar_users';
        if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            $qry="CREATE TABLE wp1_ar_users ( "
                . "user_id INT(15) NULL DEFAULT NULL, "
                . "user_name VARCHAR(256) NULL DEFAULT NULL, "
                . "user_type VARCHAR(125) NULL DEFAULT NULL, "
                . "user_image VARCHAR(256) NULL DEFAULT NULL, "
                . "user_site VARCHAR(256) NULL DEFAULT NULL, "
                . "user_created TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP, "
                . "PRIMARY KEY (user_id, user_name, user_type, user_created) "
                . " ) ENGINE = MyISAM;";
            $wpdb->query( $qry );
            $b = 'created';
        }
        return $b;
    }

    public static function addProfile()
    {
        dbTables::buildTables();
    }*/
    
    public static function testFunction()
    {
        $a = 'working';
        return $a;
    }

}
