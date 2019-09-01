<dialog id="perm" class="mdl-dialog">
    <button type="button" class="close" data-dismiss="dialog" aria-hidden="true">×</button>
    <h3 class="mdl-dialog__sub_title"><? if ($userId){ echo $user ?>, you don't have permission to view this page.</h3>
    <? } else {?> You are currently banned.</h3>
        <? }?>
</dialog>
<button class="p-error" style="display:none;"></button>