<style type="text/css">
			.copyright{display:none;}
			 .close{display:none;}
			 .mdl-dialog__sub_title {
    padding: 2px 24px 0 !important;}
    dialog {
    background: #dc3838 !important;
    color: white !important;}
	</style>
<dialog id="perm" class="mdl-dialog">
    <h3 class="mdl-dialog__sub_title"><? if ($userId){ echo $user ?>, you don't have permission to view this page.</h3>
    <? } else {?> You don't have permission to view this page.</h3>
        <? }?>
</dialog>
<button class="p-error" style="display:none;"></button>