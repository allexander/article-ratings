<?php
    namespace ArticleRatings\Admin;
?>

<div class="wrap">

    <h2 class="nav-tab-wrapper">
        <a href="<?= tabURL('home'); ?>" class="nav-tab <?= isCurrentTab('home'); ?>">Начало</a>
        <!--<a href="<?= tabURL('profiles'); ?>" class="nav-tab <?= isCurrentTab('profiles'); ?>">Профили</a>-->
        <!--<a href="<?= tabURL('polls'); ?>" class="nav-tab <?= isCurrentTab('polls'); ?>">Анкети</a>-->
        <a href="<?= tabURL('poll-groups'); ?>" class="nav-tab <?= isCurrentTab('poll-groups'); ?>">Анкетни групи</a>
        <!--<a href="<?= tabURL('poll-collections'); ?>" class="nav-tab <?= isCurrentTab('poll-collections'); ?>">Колекции от анкети</a>-->
    </h2>