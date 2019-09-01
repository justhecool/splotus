<dialog id="mfa" class="mdl-dialog">
  <button class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon close" data-dismiss="dialog"><i class="material-icons">clear</i></button>
  <div style="text-align:center;">
    <i class="shop-icon material-icons">verified_user</i>
  </div>
  <div class="mdl-dialog__actions--full-width"></div></div>
  <div class="contact_us mdl-grid">
        <div class="mdl-cell mdl-cell--12-col" style="text-align: center;">
  <div id="2fa"><p class="mdl-dialog__sub_title status code material-icons mdi mdi-information" style="display:none"></p>
	 <h4 style="text-align: center;">Enter Your Code</h4>
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="iss">
            <label class="mdl-textfield__label" id="iss" for="issue">Authenticator Code</label> <input class="mdl-textfield__input" name="mffacode" value="" id="mffacode" type="number" pattern="\d*" maxlength="6" required>
          </div><!--<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" style="float:right;" for="checkbox-1">
  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
  <span class="mdl-checkbox__label">Backup Code</span>
</label>-->
          <button onclick="login()" id="loginSubmit" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:60%;">Sign In</button>
  </div>
        </div></div>
</dialog>