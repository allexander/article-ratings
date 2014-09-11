<h3 class="title">Добави профил:</h3>

<form method="post">
    <table class="form-table">
        <tr>
            <th>Тип:</th>
            <td>
                <select name="type" id="arSwitchProfileType">
                    <option data-ar-profile-type-switch="autor" value="1">Автор</option>
                    <option data-ar-profile-type-switch="media" value="2">Медия</option>
                </select>
            </td>
        </tr>
        <tr data-ar-profile-type="autor">
            <th>Автор:</th>
            <td>
                <input type="text" name="autor" class="regular-text ltr" />
            </td>
        </tr>
        <tr data-ar-profile-type="autor">
            <th>Снимка:</th>
            <td>
                <input type="file" name="picture" />
            </td>
        </tr>
        <tr data-ar-profile-type="media">
            <th>Медия:</th>
            <td>
                <input type="text" name="media" class="regular-text ltr" />
            </td>
        </tr>
        <tr data-ar-profile-type="media">
            <th>Лого:</th>
            <td>
                <input type="file" name="logo" />
            </td>
        </tr>
        <tr data-ar-profile-type="media">
            <th>Сайт:</th>
            <td>
                <input type="text" name="site" class="regular-text ltr" />
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <td>
                <input type="submit" name="action" value="Изпрати" class="button button-primary" />
            </td>
        </tr>
    </table>
</form>