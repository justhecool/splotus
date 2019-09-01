<?php //Variables
	$user_id = get_current_user_id();
	$dark = 'dark';
	$light = 'light';
?>
<dialog id="color" class="mdl-dialog">
    <button type="button" class="close" data-dismiss="dialog"  aria-hidden="true">×</button>
    <h3 class="mdl-dialog__title_avi">Choose Site Theme</h3>
    <div class="mdl-dialog__colors">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <form class="fcolor" action="" method="post" style="margin:0;">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                        <?php  	if ( get_user_meta($user_id,  'color', true ) == $dark ) {?>
                        <input type="radio" id="option-1" class="mdl-radio__button" name="theme" value="light" checked>
                            <? } else {?>
                        <input type="radio" id="option-1" class="mdl-radio__button" name="theme" value="light" disabled>
                                <?}?>
                            <span class="mdl-radio__label">Light</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                        <?php  	if ( get_user_meta($user_id,  'color', true ) == $light ) {?>
						<input type="radio" id="option-2" class="mdl-radio__button" name="theme" value="dark" checked>
                            <? } elseif ( get_user_meta($user_id,  'color', true ) == null) {?>
                        <input type="radio" id="option-2" class="mdl-radio__button" name="theme" value="dark" checked>
                                <?} else {?>
                        <input type="radio" id="option-2" class="mdl-radio__button" name="theme" value="dark" disabled>
                                <?}?>
                            <span class="mdl-radio__label">Dark</span>
                    </label>
            </div>
        </div>
    </div>
    <div class="mdl-dialog__actions--full-width">
        <button type="submit" class="btn btn-block bottom-modal-text" value="Login" name="submit">Apply</button>
    </div>
    			</form>
</dialog>