<?/*
Template Name: Candy Whacker
*/
include get_template_directory() . '/inc/init.php';
get_header();?>
			<div class="">
<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="content-card">
				<div class="icon-and-title-flex">
					<img src="<?=$imageUrl;?>/games/cw/" class="appicon"></img>
					<div class="title-container">
						<span class="text-title">Candy Whacker</span>
						<br><div class="intertext-padding"></div>
						<span class="text-subtitle">by Splotus.com</span>
						<br><div class="intertext-padding"></div>
						<span class="text-subtitle">Free</span>
					</div>
				</div><br><br>
				<span class="text-description" style="font-size: 1.1em">Swipe your screen to gather current to upgrade and buy your way to success! Swipe the screen to gain joules, to trade for money to further upgrade yourself. Purchase another power plant, or maybe another! Try for the 15+ achievements, or maybe try for a high score!</span>	<? if (is_user_logged_in()){} else{?>
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins><?if ($visitor[ 'user_id']){?><a href="<?=$forumUrl?>account/upgrades" rel="noopener"><paper-button class="x">Remove Ads</paper-button></a><?}}?>
			</div>
			<div class="wow fadeInUp content-works" id="spoilers">
			    <div class="screenshot-item">
                    <a href="<?=$imageUrl;?>/games/cw-1/">
                        <img src="<?=$imageUrl;?>/games/cw-1/">
                    </a>
                </div>
                <div class="screenshot-item">
                    <a href="<?=$imageUrl;?>/games/cw-2/">
                        <img src="<?=$imageUrl;?>/games/cw-2/">
                    </a>
                </div>
                <div class="screenshot-item">
                    <a href="<?=$imageUrl;?>/games/cw-3/">
                        <img src="<?=$imageUrl;?>/games/cw-3/">
                    </a>
                </div>
                <div class="screenshot-item">
                    <a href="<?=$imageUrl;?>/games/cw-4/">
                        <img src="<?=$imageUrl;?>/games/cw-4/">
                    </a>
                </div>
     	    </div>
		<div class="wow fadeInUp content-card" style="margin-top: 0;">
     		<span class="text-subtitle" style="font-size: 2em; font-weight: 300; color: #333">Details</span>
			<br><br>
			<div>
				<div class="detail-item">
					<span class="details-icon icon">mail</span>
					<span class="text-description">Arcade</span>
				</div>
				<div class="detail-item">
					<span class="details-icon icon">star</span>
					<span class="text-description">Average Rating 3.0</span>
				</div>
				<div class="detail-item">
					<span class="details-icon icon">info</span>
					<span class="text-description">Version 1.0.4<span>
				</div>
				<div class="detail-item">
					<span class="details-icon icon">mail</span>
					<span class="text-description">games@splotus.com</span>
				</div>
				<div class="detail-item">
					<span class="details-icon icon">android</span>
					<span class="text-description">Android 2.3+</span>
				</div>
				<div class="detail-item">
					<span class="details-icon icon">assessment</span>
					<span class="text-description">5 - 10 downloads</span>
				</div>
				<div class="detail-item">
					<span class="details-icon icon">extension</span>
					<span class="text-description">Contains ads</span>
				</div>
			</div>
     	</div>
     	<div class="mdl-speed-dial mdl-speed-dial--bottom-fixed">
<div class="mdl-speed-dial__options">
<div class="mdl-speed-dial__option">
<p class="mdl-speed-dial__tooltip mdl-speed-dial__tooltip--hidden">Problems?</p>
<a onclick="help.open()" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effecw mdl-button--mini-fab"><i class="material-icons">help</i></a></div>
<div class="mdl-speed-dial__option">
<p class="mdl-speed-dial__tooltip mdl-speed-dial__tooltip--hidden">Play on Newgrounds!</p>
<a href="http://www.newgrounds.com/portal/view/665037" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effecw mdl-button--fab mdl-button--mini-fab"><i class="material-icons">computer</i></a></div>
<div class="mdl-speed-dial__option">
<p class="mdl-speed-dial__tooltip mdl-speed-dial__tooltip--hidden">Get on the Play-Store!</p>
<a href="https://play.google.com/store/apps/details?id=air.com.splotus.CWhack15" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effecw mdl-button--fab mdl-button--mini-fab"><i class="material-icons">android</i></a></div>
</div>
<button class="mdl-speed-dial__main-fab mdl-speed-dial__main-fab--spin mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effecw mdl-button--colored"><i class="material-icons mdl-speed-dial_main-fab-icon mdl-speed-dial_main-fab-icon--primary">shop</i> <i class="material-icons mdl-speed-dial_main-fab-icon mdl-speed-dial_main-fab-icon--secondary">smartphone</i></button></div>
</div>
</div>
</div>
<?php get_footer();?>