<?php
namespace ArticleRatings\Admin\Profiles;
?>

<table class="wp-list-table widefat fixed users">
   <thead>
      <tr>
         <th scope='col' id='cb' class='manage-column column-cb check-column' style=""><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox" /></th>
         <th scope='col' id='profile' class='manage-column column-profile sortable desc' style=""><a href="#"><span>Профил</span><span class="sorting-indicator"></span></a></th>
         <th scope='col' id='type' class='manage-column column-type sortable desc' style=""><a href="#"><span>Тип</span><span class="sorting-indicator"></span></a></th>
      </tr>
   </thead>

   <tbody id="the-list" data-wp-lists='list:user'>
	<?php
		for ($x=0; $x<sizeof($listProfiles); $x++) { 
	?>
		<tr class="<?php if( $x % 2 == 0 ) echo 'alternate'; ?> ">
			<th scope='row' class='check-column'><label class="screen-reader-text" for="cb-select-1">Select admin</label><input type='checkbox' name='users[]' id='user_1' class='administrator' value='1' /></th>
			<td class="profile column-profile"><img alt='' src='http://1.gravatar.com/avatar/ff65825268f2c044766765d111f954ae?s=32&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G' class='avatar avatar-32 photo' height='32' width='32' /> <strong><a href=""><?= $listProfiles[$x]->profile_autor; ?><?= $listProfiles[$x]->profile_media; ?></a></strong><br /><div class="row-actions"><span class='edit'><a href="">Редактирай</a></span></div></td>
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
	?>
   </tbody>
   <tfoot>
      <tr>
         <th scope='col' class='manage-column column-cb check-column' style=""><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox" /></th>
         <th scope='col' class='manage-column column-profile sortable desc' style=""><a href="#"><span>Профил</span><span class="sorting-indicator"></span></a></th>
         <th scope='col' class='manage-column column-type sortable desc' style=""><a href="#"><span>Тип</span><span class="sorting-indicator"></span></a></th>
      </tr>
   </tfoot>
</table>

