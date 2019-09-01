<paper-dialog id="loginn" modal class="paper-dialog-login pad center" >
  <button class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon close" dialog-dismiss=""><i class="material-icons">clear</i></button>
  <h3 class="mdl-dialog__title">Welcome.</h3>
  <h3 class="mdl-dialog__sub_title">Enter your credentials to sign in or use a Social Network.</h3>
  <div class="mdl-dialog__content-login">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col center">
	      <div id="fb-root"></div>
	      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-facebook" value="Sign in using Facebook" onclick="checkFacebookLogin();"><i class="fa fa-facebook-official"></i>Sign In</a>
          <a onclick="startApp();"  id="customBtn" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-white"><i class="icons8-google"></i>Sign In</a>


        <form id="appLogin" method="post">
          <p class="mdl-dialog__sub_title status invalid material-icons mdi mdi-information" style="display:none"></p>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="username">Username</label> <input class="mdl-textfield__input" name="username" type="text" id="username" autocomplete="given-name">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="password">Password</label> <input class="mdl-textfield__input" type="password" name="pwd" id="password">

          </div>
          <a onclick="forgot.open();loginn.close();">
          <p align="right" style="margin-bottom:3em;">Forgot Password</p></a>
      </div>


    </div>
    <div class="below_modal-text">
      <span class="register">Don’t have an account?</span> <a onclick="loginn.close();sregister.open()"><span class="sign-up">Sign up.</span></a>
    </div>
  </div>
  <div class="mdl-dialog__actions--full-width">
    <button onclick="login()" type="submit" class="btn btn-block bottom-modal-text " value="Login" name="submit">Sign In</button>
  </div>
  <input name="mfacode" value="" id="mfacode" type="hidden">
<input name="provider" value="" id="prov" type="hidden">
  </form>
</paper-dialog>
