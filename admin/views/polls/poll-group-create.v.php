<h2>Създаване на анкетна група <a href="<?= \ArticleRatings\URLs::moduleURL('poll-groups'); ?>" class="add-new-h2">Списък анкетни групи</a> <a href="<?= \ArticleRatings\URLs::moduleURL('poll-group-create'); ?>" class="add-new-h2">Създай нова анкетна група</a></h2>

<?php 
    $readOnlyInput = '';
    
    if( $ifSuccess ) {
        $readOnlyInput = 'readonly="readonly"';
    }
    
    if( $ifSuccess ){
?>
<div class="updated below-h2">
    <p>
        Анкетната група бе създадена успешно! <a href="<?= \ArticleRatings\URLs::moduleURL('poll-group-edit'); ?>&poll-id=<?= $createGroupResult['pollId']; ?>">Редактирай анкетната група</a>
    </p>
</div>
<?php
    }
?>
<form method="post" name="new-poll-group" class="poll-group-create">
    <table class="form-table">
        <tr class="<?php if( isset($createGroupResult) && isset($createGroupResult['errors']['emptyName']) ) { echo "error"; } ?>" >
            <th>Име<?php if(!$ifSuccess) { echo "*"; } ?></th>
            <td>
                <?php 
                    $nameField = '';
                    if( isset($createGroupResult) && $createGroupResult['savedFields']['name'] ){
                        $nameField = $createGroupResult['savedFields']['name'];
                    }
                ?>
                <input type="text" name="name" value="<?= $nameField; ?>" class="large-text input" <?= $readOnlyInput; ?> />
                <?php if( isset($createGroupResult) && isset($createGroupResult['errors']['emptyName']) ) { ?>
                    <div class="error-text">Моля, въведете име на анкетната група.</div>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <th>Описание</th>
            <td>
                <?php 
                    $descriptionField = '';
                    if( isset($createGroupResult) && $createGroupResult['savedFields']['description'] ){
                        $descriptionField = $createGroupResult['savedFields']['description'];
                    }
                ?>
                <textarea name="description" class="large-text input" rows="5" <?= $readOnlyInput; ?>><?= $descriptionField; ?></textarea>
            </td>
        </tr>
        <tr>
            <th>Раздели<?php if(!$ifSuccess) { echo "*"; } ?></th>
            <td>
                <div class="poll-group-sections">
                    <?php 
                        if( isset($createGroupResult) ) {
                            $counter = 0;
                            
                            foreach( $createGroupResult['savedFields']['section'] as $section => $value ) {
                                $savedValue = $createGroupResult['savedFields']['section'][$section];
                    ?>
                    <?php
                        $errorClass = '';
                        if( isset($createGroupResult['errors']['emptySection'][$counter]) ) {
                            $errorClass = 'error-field';
                        }
                    ?>
                        <div class="section <?= $errorClass; ?>">
                            <input type="text" name="section[]" value="<?= $savedValue; ?>" class="input" <?= $readOnlyInput; ?> />

                            <?php 
                                if( $counter > 0 && !$createGroupResult['success'] ) {
                            ?>
                                    <input type="button" value="Премахни" class="button action remove-section" />
                            <?php
                                }
                            ?>
                            <?php
                                if( isset($createGroupResult['errors']['emptySection'][$counter]) ) {
                            ?>
                                <div class="error-text">Моля, въведете име на раздела.</div>
                            <?php
                                }
                            ?>
                        </div>
                    <?php
                                $counter++;
                            }
                        }
                        else {
                    ?>
                        <div class="section">
                            <input type="text" name="section[]" class="input" />
                        </div>
                    <?php                 
                        }
                    ?>
                </div>
                <?php 
                    if( !isset($createGroupResult) ) {
                ?>
                    <input type="button" value="Добави раздел" class="button action add-poll-group-section" />
                <?php
                    }
                    elseif( isset($createGroupResult) && !$createGroupResult['success'] ){
                ?>
                    <input type="button" value="Добави раздел" class="button action add-poll-group-section" />
                <?php
                    } 
                ?>
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <td>
                <?php 
                    if($ifSuccess) { 
                ?>
                <input type="hidden" name="created" value="1" />
                <?php
                    } 
                ?>
                <?php 
                    if( !isset($createGroupResult) ) {
                ?>
                    <input type="submit" name="save-new-poll-group" value="Създай" class="button button-primary" />
                <?php
                    }
                    elseif( isset($createGroupResult) && !$createGroupResult['success'] ){
                ?>
                    <input type="submit" name="save-new-poll-group" value="Създай" class="button button-primary" />
                <?php
                    }
                ?>
            </td>
        </tr>
    </table>
</form>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

