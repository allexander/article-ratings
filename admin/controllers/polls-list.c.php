<?php

namespace ArticleRatings\Admin\Polls
{
   $listPolls = \ArticleRatings\Admin\Polls\Polls::View();
   require_once( AR_PLUGIN_DIR . '/admin/views/polls/polls-list.v.php' );
}

