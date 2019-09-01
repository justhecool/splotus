<paper-dialog id="profile" modal class="paper-dialog">
<h3 class="mdl-dialog__title">Avatar Editor</h3>
<hr>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col"><img src="<?=$sforumUrl?>/avatar.php?userid=<?=$visitor['user_id']?>&size=l" class="a--edit"></div>
  <div class="mdl-cell mdl-cell--8-col"></div></div>

<div class="buttons">
	<paper-button dialog-dismiss>Close</paper-button>
	<paper-button >Profile Page</paper-button>
</div>
</paper-dialog>