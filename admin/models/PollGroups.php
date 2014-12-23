<?php

namespace ArticleRatings;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PollGroups
 *
 * @author Alexander
 */
class PollGroups {
    
    public static function createGroup($postData) {
        
        global $wpdb;
        
        $return['success'] = false;
        $return['errors'] = null;
        $return['savedFields'] = null;
        $return['debug'] = false;
        
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
            
            // Insert in table 'wp1_ar_poll_groups'
            $recordArray = array(
                'name' => $postData['name'],
                'description' => $postData['description']
            );
            $wpdb->insert( 'wp1_ar_poll_groups', $recordArray );
            if( !$wpdb->insert_id ) {
                $return['errors']['insertInPollGroupsTable'] = true;
            }
            //$return['debug'] = $wpdb->last_query;
            
            // Insert in table 'wp1_ar_poll_groups_sections'
            /*
            $recordArray = array(
                'poll_group_id' => '',
                'relative_id' => '',
                'name' => ''
            );
            $wpdb->insert( 'wp1_ar_poll_groups_sections', $recordArray );
            if( !$wpdb->insert_id ) {
                $return['errors']['insertInPollGroupsSectionsTable'] = true;
            } */
            
        }
        
        /*
         *  Checks if success
         */
        if( $return['errors'] == null ) {
            $return['success'] = true;
        }
        
        /*
         *  Returns debuggin information
         */
        //$return['debug'] = null; //$wpdb->get_results( "SELECT id, name FROM wp1_ar_poll_groups" );
        
        return $return;
    }
    
}
