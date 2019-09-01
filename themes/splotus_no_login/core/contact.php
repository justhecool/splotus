<paper-dialog id="contact" with-backdrop class="paper-dialog">
<h3 class="mdl-dialog__title">Contact Us</h3>
<hr>
<div class="social_buttons">
		<span class="icons "><a href="https://m.me/SplotusGames" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-facebook"></button></a>
    <a href="https://twitter.com/direct_messages/create/smallworldsx" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-twitter"></button></a>
	</div>
	<h4 style="text-align: center;">OR</h4>

	<form method="post" id="contact-us" action="">
<div class="contact_us mdl-grid">
        <div class="mdl-cell mdl-cell--12-col" style="text-align: center;">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="name">Name</label> <input class="mdl-textfield__input" <? if ( ($visitor['user_id']) ) {?> value="<?=$visitor['username']?>" disabled <? }?> name="username" id="name" type="text" required autocomplete="given-name">
          </div>

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="email">Email</label> <input class="mdl-textfield__input" name="email" <? if ( ($visitor['user_id']) ) {?> value="<?=$visitor['email']?>" disabled <? }?> id="email" type="email" required autocomplete="email">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="iss">
            <label class="mdl-textfield__label" id="iss" for="issue">Subject</label> <input class="mdl-textfield__input" name="subject" value="" id="issue" type="text" required>
          </div>

          <div class="mdl-textfield mdl-js-textfield " id="contactus" >
    <textarea class="mdl-textfield__input" type="text" rows= "2" cols="40" id="message" name="message" contenteditable maxlength="1000" placeholder="Please describe the issue or feedback you'd like to enclose." required></textarea>
            <label class="mdl-textfield__label" for="message">Message:</label>
  </div>
        </div>
      </div>
<? if ( ($visitor['user_id']) ) {?>
 <input type="hidden" name="username" value="<?=$visitor['username']?>">
 <input type="hidden" name="email" value="<?=$visitor['email']?>">
 <? } ?>
	</form>

<div class="buttons">
	<paper-button dialog-dismiss>Close</paper-button>
	<paper-button class="contactSubmit" >Submit</paper-button>
</div>

</paper-dialog>