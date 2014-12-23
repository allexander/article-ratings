<?php
        
namespace ArticleRatings\Admin;

//$formSubmitted = filter_input(INPUT_POST, 'save-new-poll-group') ? true : false;
$viewPollGroupModuleURL = \ArticleRatings\URLs::moduleURL('poll-group-edit') . '&poll-group-id=1';
$createPollGroupModuleURL = \ArticleRatings\URLs::moduleURL('poll-group-create');

if( filter_input(INPUT_POST, 'save-new-poll-group') ) {
    $createGroupResult = \ArticleRatings\PollGroups::createGroup($_POST);
}

// Load views
require_once( AR_PLUGIN_DIR . '/admin/views/polls/poll-group-create.v.php');