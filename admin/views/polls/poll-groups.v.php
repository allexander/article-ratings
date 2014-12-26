<h2>Анкетни групи <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-group-create'); ?>" class="add-new-h2">Създай анкетна група</a></h2>


<?php
    $listGroups = \ArticleRatings\PollGroups::listGroups();
    
    //$d($var);
    //global $arPluginSettings;
    //d( $arPluginSettings['db'] );
    //d( $listGroups['listGroups'] );
    //d( $listGroups['listGroupsSections'] );

?>

<table class="wp-list-table widefat fixed poll-groups-table">
   <thead>
      <tr>
         <!--<th scope='col' id='cb' class='manage-column column-cb check-column' style=""><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox" /></th>-->
         <!--<th scope='col' id='id' class='manage-column column-profile sortable desc' style=""><a href="#"><span>Id</span><span class="sorting-indicator"></span></a></th>
         <th scope='col' id='name' class='manage-column column-type sortable desc' style=""><a href="#"><span>Име</span><span class="sorting-indicator"></span></a></th>
         <th scope='col' id='date' class='manage-column column-type sortable desc' style=""><a href="#"><span>Дата на създаване</span><span class="sorting-indicator"></span></a></th>
         <th scope='col' id='functions' class='manage-column column-type sortable desc' style=""><a href="#"><span>Функции</span><span class="sorting-indicator"></span></a></th>
         -->
         <th scope='col' class='manage-column c1'><span>Id</span></th>
         <th scope='col' class='manage-column c2'><span>Име</span></th>
         <th scope='col' class='manage-column c3'><span>Дата на създаване</span></th>
         <th scope='col' class='manage-column c4'><span>Функции</span></th>
      </tr>
   </thead>

   <tbody>
        <?php
            $c = 0;
            foreach ( $listGroups['listGroups'] as $row) {
        ?>
        <tr class="<?php if( $c % 2 == 0 ) echo 'alternate'; ?> ">
            <td class="c1"><?= $row->id; ?></td>
            <td class="c2"><a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-group-edit'); ?>&group-id=<?= $row->id; ?>"><?= $row->name; ?></a></td>
            <td class="c3"><?= $row->created; ?></td>
            <td class="c4">
                <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-group-edit'); ?>&group-id=<?= $row->id; ?>" title="Преглед/Редакция"><img src="<?= plugins_url( 'article-ratings/admin/assets/img/edit-icon.png' ); ?>" alt="Преглед" /></a> 
                <a href="#" title="Статистика"><img src="<?= plugins_url( 'article-ratings/admin/assets/img/chart-icon.png' ); ?>" alt="Статистика" /></a> 
                <a href="<?php echo \ArticleRatings\URLs::moduleURL('poll-group-delete'); ?>&group-id=<?= $row->id; ?>" title="Изтриване" class="delete-poll-group-btn" data-delete-text="Сигурни ли сте, че искате да изтриете тази група?"><img src="<?= plugins_url( 'article-ratings/admin/assets/img/delete-icon.png' ); ?>" alt="Изтриване" /></а>
            </td>
        </tr>
        <?php
                $c++;
            }
        ?>
        
	<?php /*
		for ($x=0; $x<sizeof($listProfiles); $x++) { 
	?>
		<tr class="<?php if( $x % 2 == 0 ) echo 'alternate'; ?> ">
			<th scope='row' class='check-column'><label class="screen-reader-text" for="cb-select-1">Select admin</label><input type='checkbox' name='users[]' id='user_1' class='administrator' value='1' /></th>
			<td class="profile column-profile"><img alt='' src='http://1.gravatar.com/avatar/ff65825268f2c044766765d111f954ae?s=32&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G' class='avatar avatar-32 photo' height='32' width='32' /> <strong><a href=""><?= $listProfiles[$x]->profile_autor; ?><?= $listProfiles[$x]->profile_media; ?></a></strong><br /><div class="row-actions"><span class='edit'><a href="#">Редактирай</a></span> | <span class='edit'><a href="#">Изтрий</a></span></div></td>
			<td class="type column-type">
				<?php
					if( $listProfiles[$x]->profile_type == "1" ){
						echo 'Автор';
					}
					else if( $listProfiles[$x]->profile_type == "2" ) {
						echo 'Медия';
					}
				?>
			</td>
		</tr>
	<?php
		}
	*/?>
   </tbody>
   <!--<tfoot>
      <tr>
         <th scope='col' class='manage-column column-cb check-column' style=""><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox" /></th>
         <th scope='col' class='manage-column column-profile sortable desc' style=""><a href="#"><span>Профил</span><span class="sorting-indicator"></span></a></th>
         <th scope='col' class='manage-column column-type sortable desc' style=""><a href="#"><span>Тип</span><span class="sorting-indicator"></span></a></th>
      </tr>
   </tfoot>-->
</table>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

