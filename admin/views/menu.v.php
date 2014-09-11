<h2 class="nav-tab-wrapper">
    <a href="<?= $MenuTabs->tabURL('home'); ?>" class="nav-tab <?= $MenuTabs->isCurrent('home'); ?>">Начало</a>
    <a href="<?= $MenuTabs->tabURL('profiles'); ?>" class="nav-tab <?= $MenuTabs->isCurrent('profiles'); ?>">Профили</a>
    <a href="<?= $MenuTabs->tabURL('polls'); ?>" class="nav-tab <?= $MenuTabs->isCurrent('polls'); ?>">Анкети</a>
    <a href="<?= $MenuTabs->tabURL('poll-groups'); ?>" class="nav-tab <?= $MenuTabs->isCurrent('poll-groups'); ?>">Анкетни групи</a>
    <a href="<?= $MenuTabs->tabURL('poll-collections'); ?>" class="nav-tab <?= $MenuTabs->isCurrent('poll-collections'); ?>">Колекции от анкети</a>
</h2>