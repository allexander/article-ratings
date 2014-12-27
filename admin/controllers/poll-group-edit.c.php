<?php
        
namespace ArticleRatings\Admin;


if( isset($_POST['save-new-poll-group']) ){
    d($_POST);
    $editSubmit = \ArticleRatings\PollGroups::editGroup($_POST);
    d($editSubmit);
}
$getGroupData = \ArticleRatings\PollGroups::showGroup($_GET['group-id']);

// Load views
require_once( AR_PLUGIN_DIR . '/admin/views/polls/poll-group-edit.v.php');