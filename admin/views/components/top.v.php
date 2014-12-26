<?php
    namespace ArticleRatings\Admin;
?>

<div class="wrap article-ratings-plugin">

    <h2 class="nav-tab-wrapper">
        <a href="<?= tabURL('home'); ?>" class="nav-tab <?= isCurrentTab('home'); ?>">Начало</a>
        <!--<a href="<?= tabURL('profiles'); ?>" class="nav-tab <?= isCurrentTab('profiles'); ?>">Профили</a>-->
        <!--<a href="<?= tabURL('polls'); ?>" class="nav-tab <?= isCurrentTab('polls'); ?>">Анкети</a>-->
        <?php
            $isCurrent = '';
            if( $_GET['module'] == 'poll-groups' || $_GET['module'] == 'poll-groups-edit' || $_GET['module'] == 'poll-group-create' ) {
                $isCurrent = 'nav-tab-active';
            }
        ?>
        <a href="<?= tabURL('poll-groups'); ?>" class="nav-tab <?= $isCurrent; ?>">Анкетни групи</a>
        <!--<a href="<?= tabURL('poll-collections'); ?>" class="nav-tab <?= isCurrentTab('poll-collections'); ?>">Колекции от анкети</a>-->
    </h2>