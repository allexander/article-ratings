<?php

/*
 * DataBase tables
 */

global $wpdb;
$arPluginSettings['db']['pollGroups'] = $wpdb->prefix . 'ar_poll_groups';
$arPluginSettings['db']['pollGroupsSections'] = $wpdb->prefix . 'ar_poll_groups_sections';