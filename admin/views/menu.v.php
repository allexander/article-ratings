<?php
    namespace ArticleRatings\Admin;
?>
<h2 class="nav-tab-wrapper">
    <a href="<?= tabURL('home'); ?>" class="nav-tab <?= isCurrent('home'); ?>">Начало</a>
    <a href="<?= tabURL('profiles'); ?>" class="nav-tab <?= isCurrent('profiles'); ?>">Профили</a>
    <a href="<?= tabURL('polls'); ?>" class="nav-tab <?= isCurrent('polls'); ?>">Анкети</a>
    <a href="<?= tabURL('poll-groups'); ?>" class="nav-tab <?= isCurrent('poll-groups'); ?>">Анкетни групи</a>
    <a href="<?= tabURL('poll-collections'); ?>" class="nav-tab <?= isCurrent('poll-collections'); ?>">Колекции от анкети</a>
</h2>