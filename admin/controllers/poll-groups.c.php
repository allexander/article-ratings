<?php
        
namespace ArticleRatings\Admin;

$listGroups = \ArticleRatings\PollGroups::listGroups();

// Load views
require_once( AR_PLUGIN_DIR . '/admin/views/polls/poll-groups.v.php');