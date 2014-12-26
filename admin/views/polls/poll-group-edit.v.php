<h2>Редактиране на анкетна група <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-groups'); ?>" class="add-new-h2">Списък анкетни групи</a> <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-group-create'); ?>" class="add-new-h2">Създай анкетна група</a></h2>

<?php 
    //d( $getGroupData );
    d($getGroupData['group'][0]->name);
    d($getGroupData['sections']);
?>

<form method="post" name="new-poll-group">
    <table class="form-table">
        <tr>
            <th>Име</th>
            <td><input type="text" name="name" class="large-text" value="<?= $getGroupData['group'][0]->name; ?>" /></td>
        </tr>
        <tr>
            <th>Описание</th>
            <td><textarea name="description" class="large-text" rows="5"><?= $getGroupData['group'][0]->description; ?></textarea></td>
        </tr>
        <tr>
            <th>Раздели</th>
            <td>
                <div class="poll-group-sections">
                    <?php
                        $reverse = array_reverse($getGroupData['sections']); 
                        $c = 0;
                        foreach ( $reverse as $section) {
                    ?>
                        <div class="section">
                            <input type="text" name="section[<?= $section->id; ?>]" value="<?= $section->name; ?>" />
                            <?php
                                if ($c > 0) {
                            ?>
                            <input type="button" value="Премахни" class="button action remove-section" />
                            <?php
                                }
                            ?>
                        </div>
                    <?php
                            $c++;
                        }
                    ?>
                </div>
                <input type="button" value="Добави раздел" class="button action add-poll-group-section" />
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <td>
                <input type="hidden" value="<?= $getGroupData['group'][0]->id; ?>" />
                <input type="submit" name="save-new-poll-group" value="Запази" class="button button-primary" />
            </td>
        </tr>
    </table>
</form>