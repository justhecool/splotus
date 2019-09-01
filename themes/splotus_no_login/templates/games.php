<?/*
Template Name: Games Index
*/
require get_template_directory() . '/inc/init.php';

get_header();?>

<style type="text/css">
	.vertical{
	width: 1px;
	min-height: 350px;
	background: #ebebeb;
}
@media screen and (max-width:1300px){.vertical{display:none}}
.fff {
	background: rgba(255, 255, 255, 0.9215686274509803);;
    box-shadow: -20px 28px 98px 58px rgba(255, 255, 255, 0.93);

}
body
{
	background: rgb(255,255,255) url('<?=$imageUrl?>/games/games') no-repeat top;
background-size: cover;
background-attachment: fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;

}
.footer{
	background: rgba(34, 34, 34, .97) !important;
}

</style>
<div class="fff" id="games">
	<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col center">
  </div>
  <div class="mdl-cell mdl-cell--1-col">
        </div>
    <div class="mdl-cell mdl-cell--5-col">
<div class="connecting"><span class="c-blue">DESIGNED,</span> <br> <span class="c-yellow">CODED &</span> <br> <span class="c-red">DELIVERED.</span></div>

  </div>
        <div class="mdl-cell mdl-cell--1-col">
		<div class="vertical"></div>
        </div>
      <div class="mdl-cell mdl-cell--5-col games">

		<li><a class="current" href="<?=get_site_url(2)?>/current-tycoon">CURRENT TYCOON</a></li>
		<li><a class="idle-city" href="<?=get_site_url(2)?>/idle-city/">IDLE CITY</a></li>
		<li><a class="idle-dev" href="<?=get_site_url(2)?>/idle-game-dev/">IDLE GAME DEV</a></li>
		<li><a class="island" href="<?=get_site_url(2)?>/island-builder/">ISLAND BUILDER</a></li>
		<li><a class="sec" href="<?=get_site_url(2)?>/30-second-tap">30 SECOND TAP</a></li>
		<li><a class="jingle" href="<?=get_site_url(2)?>/jingle-tapper">JINGLE TAPPER</a></li>
		<li><a class="candy" href="<?=get_site_url(2)?>/candy-whacker/">CANDY WHACKER</a></li>
      </div>
	</div>
<div  id="games">
	<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--12-col center">
&nbsp;
<? if (is_user_logged_in()){} else{?>
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins><?if ($visitor[ 'user_id']){?><a href="<?=$forumUrl?>account/upgrades" rel="noopener"><paper-button class="x">Remove Ads</paper-button></a><?}}?>
  </div>
</div></div>

<?php get_footer();?>