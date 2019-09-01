<? /* require get_template_directory() . '/inc/api.php'; */?>

<style type="text/css">
	.mdl-button--raised.mdl-button--colored {
    background: rgb(249, 21, 21);
    color: rgb(255, 255, 255);
    }
</style>
<dialog id="d-dialog" class="mdl-dialog">
    <button type="button" class="close" data-dismiss="dialog" aria-hidden="true">×</button>
    <h3 class="mdl-dialog__title_delete">Delete Conversation</h3>
    <hr>
    <h3 class="mdl-dialog__sub_title_delete">You are about to delete this conversation permanently, are you sure?</h3>
   <div class="mdl-dialog__actions">
	<button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised close-d delete mdl-button--colored" data-dismiss="dialog">Delete</button>
    <button type="button" class="mdl-button closee">Close</button>
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
		<input type="checkbox"  id="checkbox-1" class="mdl-checkbox__input" value="on" name="dl-check">
		<span class="mdl-checkbox__label dl">Don't show this dialog again</span>
	</label>
  </div>
</dialog>
<button class="delete-trigger" style="display:none;"></button>