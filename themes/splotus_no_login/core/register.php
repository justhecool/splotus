<paper-dialog id="sregister" modal class="paper-dialog-login pad center register-modal" >
  <button class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon close" onclick="loginn.open();" dialog-dismiss=""><i class="material-icons">clear</i></button>
  <h3 class="mdl-dialog__title" style="text-transform:uppercase;">Let's Get you Started.</h3>
  <h3 class="mdl-dialog__sub_title">Enter your information to sign up.</h3>
  <div class="mdl-dialog__content-register">
    <form id="appRegister" method="post">
     <p class="mdl-dialog__sub_title status invalid material-icons mdi mdi-information" style="display:none"></p>
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--6-col center" style="text-align: center;">

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="signonname">Username</label> <input class="mdl-textfield__input" name="username" id="signonname" type="text"  autocomplete="given-name">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="password">Password</label> <input class="mdl-textfield__input" name="password" id="signonpassword" type="password" >
          </div>
<div id="date_pick" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="date">Birthday</label> <input class="mdl-textfield__input" name="date" value="" placeholder="M/D/Y" type="text" id="date" autocomplete="off">
          </div>
        </div>
                <div class="mdl-cell mdl-cell--6-col center" style="text-align: center;">
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="email-add">Email</label> <input class="mdl-textfield__input" name="email" id="email-add" type="email"  autocomplete="email">
          </div>


          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="password2">Confirm Password</label> <input class="mdl-textfield__input" name="password-confirm" id="password2" type="password" >
          </div>
<div style="text-align:left"><input type="checkbox" title="" class="checkbox" name="terms" value="agreed"><span style="font-size: 14px;">I agree to the <a onclick="terms.open()">Terms & Rules.</a></span></div>

        </div>
                <div class="mdl-cell mdl-cell--12-col center" style="text-align: center;">

        <div class="g-recaptcha" data-sitekey="6LfPswoTAAAAAJ-bWWqGV6ca6flYsk8cIZNGWF5x"></div><br/>
                </div>
      </div>
      <div class="spacer"></div>
      <div class="below_modal-text">
        <span class="register">Already have an account?</span> <a onclick="sregister.close();loginn.open();"><span class="sign-up2">Sign In.</span></a>
      </div>
  </div>
  <div class="mdl-dialog__actions--full-width">
    <button type="submit" class="btn btn-block waves-attach waves-button bottom-modal-text" onclick="register()">Sign up</button>
  </div>

</form>
</paper-dialog>
