<?/*
Template Name: Index
*/
require get_template_directory() . '/inc/init.php';

get_header();?>
<?/* $user = wp_get_current_user();

if ($user->ID) {

$value = get_cimyFieldValue($user->ID, 'COLOR');
if ($value == 'Dark'){
	set_cimyFieldValue($user->ID, 'COLOR', 'Dark');
echo 'Dark Theme Applied';}
if ($value == 'Light'){
	set_cimyFieldValue($user->ID, 'COLOR', 'Light');
echo 'Light Theme Applied';}
if ($value != NULL)
echo cimy_uef_sanitize_content($value);
}
*/
?>
<div class="eee about story-effect" id="story">
		<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col">

<img class="team" style=" vertical-align:middle;" align="left" src="<?=$imageUrl?>/team/team" draggable="false">

  <span class="heading-text b" style="vertical-align:left;"><h3 align="left">OUR STORY <hr></h3></span>
<p class="story-text">
	Splotus is a network of our small groups and organizations. We are composed of the original members from SmallWorlds X, and have expanded as Outsmart has. We offer a range of services, such as spoiler websites and forums for SmallWorlds and Minimundos, and a wiki on items and features of SmallWorlds. In comparison to SmallWorlds, Splotus acts as Outsmart, while SmallWorlds X would be the equivalent to SmallWorlds.
	<br>
	<br>
	Splotus started out as just SmallWorlds X (SWX). We started SWX with the goal of spoiling items and features of SmallWorlds. As Outsmart started to expand, so did we, but we never really had an official overhead over the many groups we created. This has since changed. Recently, we have chosen to expand out, and create a parent for our many networks. This thought is what sparked Splotus. Splotus is the parent to SWX, MMX, SWXD, SWW, and the other services we offer. Splotus was created and formed November of 2014.
</p>
<!-- <ins class="adsbygoogle"
     style=" text-align: right;"
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> -->
</div>
	</div>
</div>
<div class="grey" id="games">
	<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col center">
  <span class="heading-text"><h3 align="center"><a href="#">OUR GAMES</a><hr></h3></span><span class="byline">ONLINE • APPLE • ANDROID</span></div>
    <div class="mdl-cell mdl-cell--6-col">
  <video width="891" height="440" autoplay loop preload=”auto” align="right" id="video">
  <source src="<?=$videoUrl?>/games.mp4" type="video/mp4" />
  <source src="<?=$videoUrl?>/games.webm" type="video/webm">
  <source src="<?=$videoUrl?>/games.ogv" type="video/ogg">
  Your browser does not support the video tag.
</video>
  </div>
        <div class="mdl-cell mdl-cell--1-col">
        </div>
      <div class="mdl-cell mdl-cell--5-col games">
		<li><a class="current" href="/g/current-tycoon">CURRENT TYCOON</a></li>
		<li><a class="idle-city" href="/g/idle-city/">IDLE CITY</a></li>
		<li><a class="idle-dev" href="/g/idle-game-dev/">IDLE GAME DEV</a></li>
		<li><a class="island" href="/g/island-builder/">ISLAND BUILDER</a></li>
		<li><a class="sec" href="/g/30-second-tap">30 SECOND TAP</a></li>
		<li><a class="jingle" href="/g/jingle-tapper">JINGLE TAPPER</a></li>
		<li><a class="candy" href="/g/candy/">CANDY WHACKER</a></li>
      </div>
</div>
</div>
<div class="eee">
	<div class="mdl-grid">
	  <div class="mdl-cell mdl-cell--6-col">
		  <div class="connecting"><span class="c-blue">CONNECTING</span> <br> <span class="c-yellow">THE</span> <br> <span class="c-red">WORLD</span> <br> <span class="c-green">TOGETHER.</span></div></div>
		  	  <div class="mdl-cell mdl-cell--6-col">

  <img src="<?=$imageUrl?>/stats">
	  </div>
</div>
</div>
<div class="grey" id="teamm">
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--12-col center">  <span class="heading-text"><h3 align="center">OUR TEAM<hr></h3></span><span class="byline">LIAM • APPLESS • JUSTIN • YOU</span>
	<br>
 </div>

<div class="mdl-cell mdl-cell--3-col">
	  <section  class="box special wow fadeIn">
		<a class="image"><img class="wow rollIn icon image big rounded  major"  src="<?=$imageUrl?>/team/liam" alt="" draggable="false"></a>
		<a href="<?=$forumUrl;?>members/2/" target="_blank" class="image"><h3 class="title">Liam</a></h3>
		<p>Photoshop Magician</p>
			<div class="contact">
				<button onclick="liam.open()" class="btn btn-block waves-attach waves-button bottom-modal-text waves-effect contactbtn" >Learn More</button>
			</div>
		</section>
</div>
  <div class="mdl-cell mdl-cell--3-col">
    <section class="box special wow fadeIn">
        <a class="image"><img class="wow rollIn icon big rounded icon major" src="<?=$imageUrl?>/team/appless" alt="" draggable="false"></a>
        <a href="<?=$forumUrl;?>members/10/" target="_blank" class="image"><h3 class="title">Appless</a></h3>
        <p>Overseer/Game Developer </p>
        <div class="contact">
            <button onclick="appless.open()" class="btn btn-block waves-attach waves-button bottom-modal-text waves-effect contactbtn">Learn More</button>
        </div>
    </section>
</div>
<div class="mdl-cell mdl-cell--3-col">
    <section class="box special wow fadeIn">
        <a class="image"><img class="wow rollIn icon big  accent9 rounded icon major" src="<?=$imageUrl?>/team/justin" alt="" draggable="false"></a>
        <a href="<?= $forumUrl;?>members/1/" target="_blank" class="image"><h3 class="title">Justin</a></h3>
        <p>Website code monkey</p>
        <div class="contact">
            <button onclick="justin.open()" class="btn btn-block waves-attach waves-button bottom-modal-text waves-effect contactbtn">Learn More</button>
        </div>
    </section>
</div>
<div class="mdl-cell mdl-cell--3-col">
    <section class="box special wow fadeIn">
        <div class="circles">
            <?php $visitor=XenForo_Visitor::getInstance(); if ($visitor[ 'user_id'])  { echo '<img class="wow fadeInUp icon big rounded icon major guest" src="'.$sforumUrl.'/avatar.php?userid='.$userId.'" alt="" draggable="false">';} else { echo'<img class="wow rollIn icon big rounded icon major guest" src="'.$imageUrl.'/team/guest" alt="" draggable="false">'; }?></div>
        <h3 class="title">You</h3>
        <p>We couldn't do it without you!</p>
        <div class="you"></div>
    </section>
</div>
</div>
</div><div class="eee" id="contact">
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--12-col center">  <span class="heading-text b"><h3 align="center">CONTACT US<hr></h3></span><span class="byline b">WE’D LOVE TO CHAT.</span>
	<ul class="icons"><li><a href="//fb.com/splotusgames" target="_"><img src="<?=$imageUrl?>/icons/fb"></a></li><li><a href="//twitter.com/smallworldsx" target="_"><img src="<?=$imageUrl?>/icons/twitter"></a></li><li><a href="//instagram.com/splotus/" target="_"><img src="<?=$imageUrl?>/icons/insta"></a></li><li><a href="mailto:support@splotus.com" target="_blank"><img src="<?=$imageUrl?>/icons/email"></a></li></ul>
<p class="forumt" align="center">or visit our <a href="<?=$forumUrl;?>">forum.</a></p>
	</div>
</div>
</div>
<?php get_footer();?>