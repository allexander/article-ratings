<h2>Редактиране на анкетна група <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-groups'); ?>" class="add-new-h2">Списък анкетни групи</a> <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-group-create'); ?>" class="add-new-h2">Създай анкетна група</a></h2>

<form method="post" name="new-poll-group">
    <table class="form-table">
        <tr>
            <th>Име</th>
            <td><input type="text" name="name" class="large-text"  /></td>
        </tr>
        <tr>
            <th>Описание</th>
            <td><textarea name="description" class="large-text" rows="5"></textarea></td>
        </tr>
        <tr>
            <th>Раздели</th>
            <td>
                <div class="section">
                    <input type="text" name="section[]" /><a href="javascript;;" class="button action remove-section">- Премахни</a>
                </div>
                <div class="section">
                    <input type="text" name="section[]" /><a href="javascript;;" class="button action remove-section">- Премахни</a>
                </div>
                <a href="javascript;;" class="button action add-section">+ Добави раздел</a>
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <td>
                <input type="submit" name="save-new-poll-group" value="Запази" class="button button-primary" />
            </td>
        </tr>
    </table>
</form>