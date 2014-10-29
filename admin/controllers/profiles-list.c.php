<?php

namespace ArticleRatings\Admin\Profiles
{
   $listProfiles = \ArticleRatings\Admin\Profiles\Profiles::View();
   require_once( AR_PLUGIN_DIR . '/admin/views/profiles/profiles-list.v.php' );
}

