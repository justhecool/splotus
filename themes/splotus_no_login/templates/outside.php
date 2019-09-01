<?/*
Template Name: OUTSIDE
*/
include get_template_directory() . '/inc/init.php';
$visitor = XenForo_Visitor::getInstance();
              if ($visitor->isMemberOf(array(21))){
get_header();?>
<style>
p{
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-family: 'Open Sans';
    font-size:18px;
}
p.copy{
	-webkit-touch-callout: inherit;
    -webkit-user-select: text;
    -khtml-user-select: text;
    -moz-user-select: text;
    -ms-user-select: text;
    user-select: text;
}
</style>
<div class="article_scroll_bg">
<div class="article_bg"></div>
      <main class="mdl_main mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="mdl_content mdl_color--white mdl-shadow--4dp content mdl_color-text--grey-800 mdl-cell mdl-cell--8-col" >
<h3 style="text-align: center; color:#000; display:block;">How to go outside a space on SmallWorlds</h3><br />
<p style="text-align: center;">Download <a href="https://chrome.google.com/webstore/detail/adblock-plus/cfhdojbkjhnklbpkdaibdccddilifddb" target="_blank" class="externalLink">Adblock Plus Chrome Extension</a><br />
Download Adblock Plus <a href="https://addons.mozilla.org/en-US/firefox/addon/adblock-plus/" target="_blank" class="externalLink">Firefox Extension</a>
<p style="text-align: center;">Once installed Right click on it's icon and click on "options"</p>
<p style="text-align: center;" id="spoilers"><a href="https://splotus.com/wp-content/uploads/abpo.png"><img class="aligncenter wp-image-1296 size-full" src="https://splotus.com/wp-content/uploads/abpo.png" alt="abpo" width="230" height="193" /></a></p>
<? if ($visitor->isMemberOf(23)){} else{?>
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins><?if ($visitor[ 'user_id']){?><a href="<?=$forumUrl?>account/upgrades" rel="noopener"><paper-button class="x">Remove Ads</paper-button></a><?}}?>
<p style="text-align: center;">Navigate to Add you own own filters tab:</p>
<p style="text-align: center;" id="spoilers"><a href="https://splotus.com/wp-content/uploads/Screen-Shot-2016-03-04-at-3.33.39-PM-300x92.png"><img class="alignnone size-medium wp-image-1297" src="https://splotus.com/wp-content/uploads/Screen-Shot-2016-03-04-at-3.33.39-PM-300x92.png" alt="" width="300" height="92" /></a></p>
<? if ($visitor->isMemberOf(array(3,20))){} else{?>
<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-1606222838392126" data-ad-slot="2299296695" data-ad-format="auto"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script><?}?>
<p style="text-align: center;">Now click Edit filters as raw text:</p>
<p style="text-align: center;" id="spoilers"><a href="https://splotus.com/wp-content/uploads/Screen-Shot-2016-03-04-at-3.36.45-PM-300x82.png"><img class="alignnone size-medium wp-image-1298" src="https://splotus.com/wp-content/uploads/Screen-Shot-2016-03-04-at-3.36.45-PM-300x82.png" alt="" width="300" height="82" /></a></p>
<p style="text-align: center;">and enter this:</p>

<blockquote>
<p class="copy" style="text-align: center;">content.smallworlds.com/content-v*/packages/spaces_shared_*.swf</p>
</blockquote>
<p style="text-align: center;">Hit apply changes &amp; go back to SmallWorlds and <span style="color: #b30000">enable ABP</span> and reload the space. You will now be outside, to walk outside simply use the mini-map or<strong><span style="color: #b30000"> disable ABP and reload once more.</span></strong></p>
<p style="text-align: center;">Enjoy!</p>
          </div>
        </div>

</div>

<?
get_footer();

}
elseif ($visitor->isMemberOf(2) && !$visitor->isMemberOf(21)) {
	get_header();
  get_footer();}
/*elseif ( ($visitor['user_id']) ) { get_header();?><meta http-equiv="refresh" content="7;url=https://forum.splotus.com/adcreditshop-categories/miscellaneous.8/view" /><? $user=$visitor[ 'username']; include( get_template_directory() . '/core/permission-error.php');  get_footer();?> <script src="<?=network_home_url();?>js/dialog-permission.js"></script><?}*/ else {get_header();?> <style>.close{display:none;}</style><? get_footer();?> <script type="text/javascript">$(window).load(function() {loginn.open()});</script><?}?>