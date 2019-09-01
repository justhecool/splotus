<?php
 $game_title = urlencode(get_the_title());
	$game_title = str_replace('+', '&nbsp;', $game_title);
	?>
<paper-dialog id="help" with-backdrop class="paper-dialog">
<h3 class="mdl-dialog__title">Help</h3>
<hr>

	<form method="post" id="game-help" action="">
<div class="game_help mdl-grid">
        <div class="mdl-cell mdl-cell--12-col" style="text-align: center;">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="name">Name</label> <input class="mdl-textfield__input" <? if ( ($visitor['user_id']) ) {?> value="<?=$visitor['username']?>" disabled <? }?> name="username" id="name" type="text" required autocomplete="given-name">
          </div>

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="email">Email</label> <input class="mdl-textfield__input" name="email" <? if ( ($visitor['user_id']) ) {?> value="<?=$visitor['email']?>" disabled <? }?> id="email" type="email" required autocomplete="email">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="game">Game</label> <input class="mdl-textfield__input" name="game" value="<?=$game_title
?>" id="game" type="text"  disabled>
          </div>

          <div class="mdl-textfield mdl-js-textfield " id="personal" >
    <textarea class="mdl-textfield__input" type="text" rows= "1" cols="40" id="message" name="message" contenteditable maxlength="340" placeholder="Please describe the issue or feedback you'd like to enclose." required></textarea>
  </div>
        </div>
      </div>
<? if ( ($visitor['user_id']) ) {?>
 <input type="hidden" name="username" value="<?=$visitor['username']?>">
 <input type="hidden" name="email" value="<?=$visitor['email']?>">
 <? } ?>
 <input type="hidden" name="game" value="<?=$game_title?>">

	</form>
<div class="buttons">
	<paper-button dialog-dismiss>Close</paper-button>
	<paper-button class="gameSubmit" >Submit</paper-button>
</div>


</paper-dialog>