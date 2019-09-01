<?/*
Template Name: Index-2017
*/
require get_template_directory() . '/inc/init.php';

get_header();?>
<div class="splotus">
	<div class="fff" style="background-color:#fff;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="do">
		  	  <span class="heading"><h2>What we do</h2></span>
				<p>We design, code, develop your favorite websites, mobile games, and photos. We provide you with information not found anywhere else.</p>
					<div style="text-align: center;"><img  src="<?=$imageUrl?>/computer_graphic" alt=""/></div>
			</div>
		</div>
	</div>
	<!--    Add content here --->
	<div class="fff pages" style="background-color:#fff;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="pages">
			<? if (is_user_logged_in()){} else{?>
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins><?if ($visitor[ 'user_id'])  {?><a href="<?=$forumUrl?>account/upgrades" rel="noopener"><paper-button class="x">Remove Ads</paper-button></a><?}}?>
		  	  <span class="heading"><h2>Our pages</h2></span>
				<p>Get to know us, interact with us on Facebook or learn more about the beloved game SmallWorlds.</p>
			</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col" style="display:block; ">
<div class="lozad splotus-card mdl-card">
  <div class="mdl-card__title mdl-card--expand">
	  <div class=" splotus-logo__card"></div>
  </div>
      <h3 class="pages_title">Splotus</h3>
      <p class="pages_sub-title">Facebook Page</p>
  <div class="mdl-card__supporting-text">
    Composed of nerds and geeks alike, we blend together games and socialization, creating a fun and entertaining community for all to enjoy!
  </div>
  <div class="mdl-card__actions">
    <a href="https://www.facebook.com/splotusgames" target="_" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-green">
      Visit
    </a>
  </div>
</div>
			</div></div>

						<div class="mdl-grid">

			<div class="mdl-cell mdl-cell--4-col">
<div class="lozad swx-card mdl-card">
  <div class="mdl-card__title mdl-card--expand" style="overflow:hidden;">
	  <img src="https://images.splotus.com/characters2" alt="" style="margin-top: 45%;" />
  </div>
<h3 class="pages_title">SmallWorlds X</h3>
      <p class="pages_sub-title">Community</p>
  <div class="mdl-card__supporting-text">Know information before anyone else! Bringing you the very best spoilers of <a href="https://www.smallworlds.com" target="_">SmallWorlds.com</a></div>
  <div class="mdl-card__actions">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-blue" href="<?=$siteUrl?>/swx/" >
      Visit
    </a>
  </div>
</div></div></div>

		<div class="mdl-grid">

			<div class="mdl-cell mdl-cell--4-col">
				<div class="lozad wiki-card mdl-card">
  <div class="mdl-card__title mdl-card--expand">
	  <!--<img  src="https://images.splotus.com/appless-minecraft" alt="" style="margin-top: 26%;margin-left: 38%;margin-right: 30%;" />-->
  </div>
      <h3 class="pages_title">SmallWorlds Wiki</h3>
      <p class="pages_sub-title">Community</p>
  <div class="mdl-card__supporting-text">
Learn more about the game SmallWorlds and all of it's features and releases.  </div>
  <div class="mdl-card__actions">
    <a href="<?=$siteUrl?>/wiki/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-red">
      Visit
    </a>
  </div>
</div></div></div>

		</div></div>
	<div class="likes">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="likes">
		  	  <span class="heading"><h1><span class="fb_likes"></span> Likes and counting…</h1></span>
			</div>
		</div>
	</div>
	<div class="fff" style="background-color:#fff;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
<!-- Splotus Main page -->
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins>
				<br/>
			</div>
		</div>
	</div>

</div>
<?php get_footer();?>