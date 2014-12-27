<?php

namespace ArticleRatings;

class PollGroups {
    
    public static function listGroups( $from = 0, $to = 0) {
        
        global $wpdb;
        global $arPluginSettings;
        $return['errors'] = null;
        $return['debug'] = false;
        $return['listGroups'] = false;
        $return['listGroupsSections'] = false;
        
        $return['listGroups'] = $wpdb->get_results( 
            "SELECT * FROM " . $arPluginSettings['db']['pollGroups']
        );
        
        $return['listGroupsSections'] = $wpdb->get_results( 
            "SELECT * FROM " . $arPluginSettings['db']['pollGroupsSections']
        );
        
        return $return;
        
    }

    public static function showGroup($groupId) {
        
        global $wpdb;
        global $arPluginSettings;
        $return['errors'] = null;
        
        $return['group'] = $wpdb->get_results( 
            "SELECT * FROM " . $arPluginSettings['db']['pollGroups'] . " WHERE id=" . $groupId
        );
        
        $return['sections'] = $wpdb->get_results( 
            "SELECT * FROM " . $arPluginSettings['db']['pollGroupsSections'] . " WHERE poll_group_id=" . $groupId
        );
        
        return $return;
    }
    
    public static function editGroup($postData) {
        
        global $wpdb;
        global $arPluginSettings;
        $return['errors'] = null;
        $return['success'] = false;
        $return['debug'] = null;
        
        /*
         * Да изтрива разделите, които са били премахнати при редакцията. Да се добавят нови раздели също
         */
        
        /*
         * Update groups table
         */
        $wpdb->update(
            $arPluginSettings['db']['pollGroups'], 
            array( "name" => $postData['name'], "description" => $postData['description'] ), 
            array( "id" => $postData['group-id'] ), 
            array("%s", "%s"),
            array("%d")
        );
        
        /*
         * Update groups sections table
         */

        $wpdb->delete( $arPluginSettings['db']['pollGroupsSections'], array( 'poll_group_id' => $postData['group-id'] ) );
        
        $lastSectionId = null;

        for($i = 0; $i < count($postData['section']); $i++ ){                

            $wpdb->insert( $arPluginSettings['db']['pollGroupsSections'], array(
                'poll_group_id' => $postData['group-id'],
                'relative_id' => $i,
                'name' => $postData['section'][$i]
            ) );

            if( !$wpdb->insert_id ) {
                if( $lastSectionId ) {
                    $wpdb->delete( $arPluginSettings['db']['pollGroups'], array( 'id' => $postData['group-id'] ) );
                }
                $return['errors']['insertInPollGroupsSectionsTable'][$i] = true;
            }
            else {
                $lastSectionId = $wpdb->insert_id;
            }

        }
        
        return $return;
        
    }
    
    public static function deleteGroup($groupId) {
        
        global $wpdb;
        global $arPluginSettings;
        $return['errors'] = null;
        $return['debug'] = null;
        
        $wpdb->delete( $arPluginSettings['db']['pollGroups'], array( 'id' => $groupId ) );
        $wpdb->delete( $arPluginSettings['db']['pollGroupsSections'], array( 'poll_group_id' => $groupId ) );

        //$return['debug'][0] = $arPluginSettings['db']['pollGroups'];
        //$return['debug'][1] = $arPluginSettings['db']['pollGroupsSections'];
        
        return $return;
        
    }
        
    public static function createGroup($postData) {
        
        global $wpdb;
        global $arPluginSettings;
        $return['success'] = false;
        $return['errors'] = null;
        $return['savedFields'] = null;
        $return['debug'] = false;
        $return['pollGroupId'] = null;
        
        /* 
         * Variables description
         * 
         */
        
        /*
         *  Checks if name field is empty
         */
        if( trim($postData['name']) == '' ) {
            $return['errors']['emptyName'] = true;
        }
        
        /*
         *  Checks if has empty section fields
         */
        for( $i = 0; $i < count( $postData['section'] ); $i++ ) {
            if( !$postData['section'][$i] ) {
                $return['errors']['emptySection'][$i] = true;
            }
        }
        
        /*
         *  Stores form data
         */
        foreach( $postData as $field => $value ) {
            $return['savedFields'][$field] = $value;
        }
        
        /*
         *  Create records in DB
         */
        if( $return['errors'] == null ) {
            
            /*
             * Checks if can write in database
             * 
             */
            
            /*
             *  Insert in table $arPluginSettings['db']['pollGroups']
             */
            $wpdb->insert( $arPluginSettings['db']['pollGroups'], array(
                'name' => $postData['name'],
                'description' => $postData['description']
            ) );
            
            $return['pollGroupId'] = $wpdb->insert_id;
            
            if( !$wpdb->insert_id ) {
                $return['errors']['insertInPollGroupsTable'] = true;
            }
            
            /*
             *  Insert in table $arPluginSettings['db']['pollGroupsSections']
             */
            $lastSectionId = null;
            
            for($i = 0; $i < count($postData['section']); $i++ ){                
            
                $wpdb->insert( $arPluginSettings['db']['pollGroupsSections'], array(
                    'poll_group_id' => $return['pollGroupId'],
                    'relative_id' => $i,
                    'name' => $postData['section'][$i]
                ) );
                
                /*
                 * Checks if data is saved correctly in database
                 */
                
                $pollGroupSectionCreated = $wpdb->get_results( 
                    "SELECT * FROM " . $arPluginSettings['db']['pollGroupsSections'] . " WHERE poll_group_id=" . $return['pollGroupId']
                );
                if( !$pollGroupSectionCreated ) {
                    if( $lastSectionId ) {
                        $wpdb->delete( $arPluginSettings['db']['pollGroups'], array( 'id' => $groupId ) );
                        $wpdb->delete( $arPluginSettings['db']['pollGroupsSections'], array( 'poll_group_id' => $groupId ) );                    
                    }

                    $return['errors']['insertInPollGroupsSectionsTable'][$i] = true;
                }
                else {
                    $lastSectionId = $wpdb->insert_id;
                }
                
            }
            
        }
        
        /*
         *  Checks if success
         */
        if( $return['errors'] == null ) {
            $return['success'] = true;
        }
        
        return $return;
    }
    
}

/* ToDo:
 * При презареждане на страницата да не се обработва отново формата
 */
