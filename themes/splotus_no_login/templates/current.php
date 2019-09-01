<?php /*
Template Name: Current Tycoon
*/
include get_template_directory() . '/inc/init.php';
get_header();?>
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--12-col">
<div class=" fadeInUp content-card">
<div class="icon-and-title-flex"><img src="<?php echo $imageUrl;?>/games/ct/" class="appicon">
<div class="title-container"><span class="text-title">Current Tycoon</span><br>
<div class="intertext-padding"></div>
<span class="text-subtitle">by Splotus.com</span><br>
<div class="intertext-padding"></div>
<span class="text-subtitle">Free</span></div>
</div>
<br>
<br>
 <span class="text-description" style="font-size: 1.1em">Swipe your screen to gather current to upgrade and buy your way to success! Swipe the screen to gain joules, to trade for money to further upgrade yourself. Purchase another power plant, or maybe another! Try for the 15+ achievements, or maybe try for a high score!</span>	<? if (is_user_logged_in()){} else{?>
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins><?if ($visitor[ 'user_id']){?><a href="<?=$forumUrl?>account/upgrades" rel="noopener"><paper-button class="x">Remove Ads</paper-button></a><?}}?></div>
<span class="text-description" style="font-size: 1.1em"></span>
<div class=" fadeInUp content-works" id="spoilers">
<div class="screenshot-item"><span class="text-description" style="font-size: 1.1em"><a href="<?php echo $imageUrl;?>/games/ct-1/"><img src="<?php echo $imageUrl;?>/games/ct-1/"></a></span></div>
<div class="screenshot-item"><span class="text-description" style="font-size: 1.1em"><a href="<?php echo $imageUrl;?>/games/ct-2/"><img src="<?php echo $imageUrl;?>/games/ct-2/"></a></span></div>
<div class="screenshot-item"><span class="text-description" style="font-size: 1.1em"><a href="<?php echo $imageUrl;?>/games/ct-3/"><img src="<?php echo $imageUrl;?>/games/ct-3/"></a></span></div>
<div class="screenshot-item"><span class="text-description" style="font-size: 1.1em"><a href="<?php echo $imageUrl;?>/games/ct-4/"><img src="<?php echo $imageUrl;?>/games/ct-4/"></a></span></div>
</div>
<div class=" fadeInUp content-card" style="margin-top: 0;"><span class="text-description" style="font-size: 1.1em"><span class="text-subtitle" style="font-size: 2em; font-weight: 300; color: #333">Details</span><br>
<br></span>
<div>
<div class="detail-item"><span class="details-icon icon">mail</span> <span class="text-description">Simulation</span></div>
<div class="detail-item"><span class="details-icon icon">star</span> <span class="text-description">Average Rating 3.4</span></div>
<div class="detail-item"><span class="details-icon icon">info</span> <span class="text-description">Version 1.0.2 </span></div>
<div class="detail-item"><span class="text-description"><span class="details-icon icon">mail</span> <span class="text-description">games@splotus.com</span></span></div>
<div class="detail-item"><span class="details-icon icon">android</span> <span class="text-description">Android 2.3+</span></div>
<div class="detail-item"><span class="details-icon icon">assessment</span> <span class="text-description">5,000 - 10,000 downloads</span></div>
<div class="detail-item"><span class="details-icon icon">extension</span> <span class="text-description">Contains ads</span></div>
</div>
</div>
<div class="mdl-speed-dial mdl-speed-dial--bottom-fixed">
<div class="mdl-speed-dial__options">
<div class="mdl-speed-dial__option">
<p class="mdl-speed-dial__tooltip mdl-speed-dial__tooltip--hidden">Problems?</p>
<a onclick="help.open()" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--mini-fab"><i class="material-icons">help</i></a></div>
<div class="mdl-speed-dial__option">
<p class="mdl-speed-dial__tooltip mdl-speed-dial__tooltip--hidden">Play on Newgrounds!</p>
<a href="http://www.newgrounds.com/portal/view/662022" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-button--mini-fab"><i class="material-icons">computer</i></a></div>
<div class="mdl-speed-dial__option">
<p class="mdl-speed-dial__tooltip mdl-speed-dial__tooltip--hidden">Get on the Play-Store!</p>
<a href="https://play.google.com/store/apps/details?id=air.com.splotus.ctycoon" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-button--mini-fab"><i class="material-icons">android</i></a></div>
</div>
<button class="mdl-speed-dial__main-fab mdl-speed-dial__main-fab--spin mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored"><i class="material-icons mdl-speed-dial_main-fab-icon mdl-speed-dial_main-fab-icon--primary">shop</i> <i class="material-icons mdl-speed-dial_main-fab-icon mdl-speed-dial_main-fab-icon--secondary">smartphone</i></button></div>
</div>
</div>
<?php get_footer();?>