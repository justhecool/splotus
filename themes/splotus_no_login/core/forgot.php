<paper-dialog id="forgot" modal class="paper-dialog pad center" >
     <button  class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon close" onclick="forgot.close();loginn.open()"><i class="material-icons">clear</i></button>
    <h3 class="mdl-dialog__title">Forgot Password</h3>
    <h3 class="mdl-dialog__sub_title">Simply enter your username or email.</h3>
    <div class="mdl-dialog__content-forgot">
        <form id="forgot_password" method="post">
            <p class="status material-icons fp_msg mdi mdi-information" style="display:none"></p>
                <div class="mdl-cell mdl-cell--12-col center">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="username_email" id="user_login" autocomplete="email">
					<label class="mdl-textfield__label" for="user_login">Username or Email</label>
  					</div>
  										<div class="g-recaptcha" data-sitekey="6LfPswoTAAAAAJ-bWWqGV6ca6flYsk8cIZNGWF5x"></div>

                </div>
    </div>
    <div class="mdl-dialog__actions--full-width">
        <button type="submit" onclick="forgot_password()" class="btn btn-block waves-attach waves-button bottom-modal-text" value="SUBMIT">Submit</button>
    </div>
    </form>
</paper-dialog>