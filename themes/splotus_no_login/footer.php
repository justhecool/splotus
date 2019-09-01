<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package splotus
 */
?>
<?
require get_template_directory() . '/inc/constants.php';
   require get_template_directory() . '/inc/api.php';
require_once get_template_directory() . '/inc/mobile-detect.php';
$detect = new Mobile_Detect;

$user_id = get_current_user_id();
$value = get_user_meta($user_id,  'notify', false );
$off = get_user_meta($user_id,  'notify', true );
if($value) {$notify_nodb = 'off';}
elseif($off == 'off') {$notify_nodb = 'off';}
else{}
?><?php if ($blog_id == 1 xor $blog_id == 10 xor $blog_id == 2 ){ //splotus homepage mockup?>
<div class="footer">
		<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--12-col" class="footer">
											<div class="logo-footer-home"></div>
							<span class="footer-links x">COME AND FIND US.</span>
						</div>
			<div class="mdl-cell mdl-cell--12-col" class="footer">
				<span class="footer-links"><a href="<?=get_site_url(2)?>">Games</a> <? if ($blog_id == 1 & is_page( 45 ) ){?><a class="active">Who we are</a><?} else {?><a href="<?=get_site_url(1)?>/about/">Who we are</a><?}?> <a href="<?=$siteUrl?>/privacy-policy/">Privacy Policy</a> <a onclick="contact.open()">Contact</a></span> <span class="icons x"><a <? if ($blog_id == 10){?>href="https://fb.com/OfficialSWX"<?} else {?>href="https://fb.com/SplotusGames" <?}?>target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-facebook"></button></a>
    <a href="https://twitter.com/smallworldsx" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-twitter"></button></a>
    <a href="https://instagram.com/splotus/" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-instagram"></button></a>
    <a href="https://youtube.com/c/SmallWorldsX" target="_blank" rel="noopener"><button  class="mdl-mini-footer__social-btn fa fa-youtube"></button></a></span>
			</div>
			<div class="mdl-cell mdl-cell--12-col" class="footer">
			<p>Copyright Splotus &copy; <?php echo date('Y'); ?>, All Rights Reserved.</p>
			</div>
		</div>
	</div>
</div></div>
<? } else {?>
<gcse:searchresults-only></gcse:searchresults-only><footer class="copyright">
Splotus &copy; <?php echo date('Y'); ?>

</footer></div></div><?}?><paper-toast class="toast" id="notify"></paper-toast><paper-toast class="toast" id="rf"><paper-button onclick="window.location.reload()" class="btn-rf">Reload</paper-button><paper-icon-button onclick="rf.toggle();" icon="clear" title="Dismiss"></paper-icon-button></paper-toast><paper-toast class="toast" style="font-family: var(--paper-font-common-base_-_font-family) !important;" id="cookies"><paper-button onclick="window.location.reload()" class="btn-rf">More Info</paper-button><paper-icon-button onclick="cookies.toggle();cAcknowledged();" icon="clear" title="Dismiss"></paper-icon-button></paper-toast><paper-toast id="successs" class="fit-bottom"></paper-toast><paper-toast class="toast" id="loading"><div class="loading"></div></paper-toast><paper-toast id="fail" class="fit-bottom"></paper-toast>

<? $credits_after_usrn = $visitor['adcredit'] - 1000; $current_user = wp_get_current_user(); global $userdata; $user = $visitor['username']; if (is_user_logged_in()){?><?php
$login = isset($_GET['login']) ? $_GET['login'] : '';
if  ($login== '1'): ?><?php include( get_template_directory() . '/core/logged_in.php'); ?><?php endif; ?>
<?} elseif (!$detect->isMobile() )  { ?><? }?>
<?		include( get_template_directory() . '/core/contact.php');?>

<?php if ( ($visitor['user_id']) ) {
	include( get_template_directory() . '/core/colors.php');
	include( get_template_directory() . '/core/shop_categories.php');
	include( get_template_directory() . '/core/avatar_editor.php');
	include( get_template_directory() . '/core/user.php');


}
else {}
if ($blog_id == 2) {
		include( get_template_directory() . '/core/game_help.php');
}
if ($blog_id == 10 & is_page( 1657 )){
if ($visitor->isMemberOf(2) && !$visitor->isMemberOf(21) ) {
	include( get_template_directory() . '/core/purchase-outside.php');
	}}
?>
<paper-dialog id="srch" modal class="paper-dialog pad" style="overflow:auto;"><div id="top">
  <button class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon close" dialog-dismiss=""><i class="material-icons">clear</i></button>
  <div style="text-align:center;">
    <i class="shop-icon material-icons">public</i>
  </div>
  <div class="mdl-menu__item--full-bleed-divider"></div></div>
  <div id="search-results"></div>
</paper-dialog>
<script src="<?=network_home_url();?>js/jquery.min.js"></script>
<script src="<?=network_home_url();?>js/jquery.touchSwipe.min.js"></script>
<script src="<?=network_home_url();?>js/dialog-polyfill.min.js"></script>
<script src="<?=network_home_url();?>js/material.1.3.0.min.js"></script>
<script src="<?=network_home_url();?>js/bootstrap.min.js"></script>
<script src="<?=network_home_url();?>js/instantclick.min.js"></script>
<script src="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/webcomponentsjs/webcomponents-lite.js"></script>
<!--<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>-->
<?if (is_user_logged_in()){}else{?>
<script src="https://apis.google.com/js/platform.js" async defer></script><? }?>
<script type="text/javascript" data-no-instant>InstantClick.init('mousedown');</script>
<script src="<?=network_home_url();?>js/jquery.cookie.js"></script>
<? if (is_user_logged_in()){} else {?><script>var fuckAdBlock = undefined;</script>
<script src="https://splotus.com/js/adblock.min.js"></script><?}?>
<script src="<?=network_home_url();?>js/custom.min.js"></script>
<? if (is_user_logged_in()){} elseif ($visitor['user_id']) {?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type="text/javascript">
	$(window).load(function(){(adsbygoogle = window.adsbygoogle || []).push({})})
	var adBlockDetected=function(){var adblock_dialog=document.getElementById('ad_dialog');adblock_dialog.toggle();adblock_dialog.innerHTML="<h3 class='mdl-dialog__title alert'>Adblocker Detected!</h3><hr><p>Our system has detected that an 'AdBlocker' is installed in your browser. It is blocking advertisements and possibly other essential functions in our site. Please consider disabling the AdBlocker while you're browsing our site. You may not be aware, but any visitor supports our site by just viewing ads. If you wish to remove ads entirely you may so do so by upgrading your account, click <a href='https://forum.splotus.com/account/upgrades/'>here</a> to do so.</p><div class='buttons'>"}
var adBlockUndetected=function(){}
if(typeof FuckAdBlock==='undefined'){$(document).ready(adBlockDetected)}else{fuckAdBlock.on(!0,adBlockDetected).on(!1,adBlockUndetected)}
</script><? } else {?><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type="text/javascript">
	$(window).load(function(){(adsbygoogle = window.adsbygoogle || []).push({})})
	var adBlockDetected=function(){var adblock_dialog=document.getElementById('ad_dialog');adblock_dialog.toggle();adblock_dialog.innerHTML="<h3 class='mdl-dialog__title alert'>Adblocker Detected!</h3><hr><p>Our system has detected that an 'AdBlocker' is installed in your browser. It is blocking advertisements and possibly other essential functions in our site. Please consider disabling the AdBlocker while you're browsing our site. You may not be aware, but any visitor supports our site by just viewing ads. <paper-button  onclick='loginDialog();'>Login</paper-button></p><div class='buttons'>"}
var adBlockUndetected=function(){}
if(typeof FuckAdBlock==='undefined'){$(document).ready(adBlockDetected)}else{fuckAdBlock.on(!0,adBlockDetected).on(!1,adBlockUndetected)}
function loginDialog(){
	loginn.open();};
</script><?}?>
<?if (is_user_logged_in()){?>
    <script src="<?=network_home_url();?>js/angular.min.js"></script><? }?>
<?	// blog SWX & Page Outside
	if ($blog_id == 10 & is_page( 1657 )){ if($visitor->isMemberOf(1) && !$visitor->isMemberof(2)){?>
	<script type="text/javascript">loginDialog()</script><?

	}
	if ($visitor->isMemberOf(2) && !$visitor->isMemberOf(21)) {?>
<script src="<?=network_home_url();?>js/dialog-po.js"></script>
<? 	 $icons = @unserialize($profilebiticons);
if ($icons['icons'])
			{

				foreach ($icons['icons'] as $iconId=>$icon)
				{
					if ($icon['title'] == 'How to go outside any space!'){
				$forum_purchase = true;
					}
				}
			if ($forum_purchase == true){?>
				<script type="text/javascript">function useId(){$.get('https://splotus.com/go_outside_id_use',function(data){use(data)})};function use(responseData){var url_use="https://splotus.com/forum/adcreditshop-purchases/how-to-go-outside-any-space."+responseData+"/use";$.ajax({type:"POST",url:url_use,data:$(".purchase-form").serialize(),success:function(data)
{location.reload()},error:function(xhr,status,error){console.log(xhr);alert(xhr.responseJSON.errors[0])}})}
useId()</script>
			<?}
			}
	}}?>
<paper-dialog id="ad_dialog" modal class="paper-dialog"></paper-dialog>
<paper-dialog id="purchase_username" modal class="paper-dialog"></paper-dialog>
<paper-dialog id="purchase_usertitle" modal class="paper-dialog"></paper-dialog>
<? if ($visitor['user_id']){?>
<script src="<?=network_home_url();?>js/notify.min.js"></script>
<script src="<?=network_home_url();?>js/favico.min.js"></script>
<?} global $blog_id; if ($blog_id == 2){?><script src="<?=network_home_url();?>js/jquery.tosrus.min.all.js"></script><script src="<?=network_home_url();?>js/settings.js"></script><? }?>
<? if ($blog_id == 1 & is_page( 1872 )){?><script src="<?=network_home_url();?>js/swim.js"></script><?}?>
<?php global $blog_id; if ($blog_id == 10){?><script src="<?=network_home_url();?>js/jquery.easing.js"></script>
<script src="<?=network_home_url();?>js/jquery.tosrus.min.all.js"></script><script src="<?=network_home_url();?>js/settings.js"></script><script src="<?=network_home_url();?>js/marquee.js"></script><script src="<?=network_home_url();?>js/jquery.pause.js"></script>
<script src="<?=network_home_url();?>/js/materialize.js"></script><!-- Marquee on swx -->
<script>$(window).load(function(){$(".marquee").marquee({speed:50000,delayBeforeStart:0,direction:"left",duplicated:true,pauseOnHover:true})});</script>

<?} if ( ($visitor['user_id']) ) {?> <script src="<?=network_home_url();?>js/splotus.min.js"></script> <?} elseif($detect->isMobile()) {?><script src="<?=network_home_url();?>js/mobile_login.min.js"></script><?}//require get_template_directory() .'/scripts.php';?>
<? if ($visitor['user_id'] && $notification > 0) {?>
<script type="text/javascript">
const notifications='https://splotus.com/forum/api/?notifications&oauth_token=<?=$accessToken?>';const notification_read='https://splotus.com/forum/api/?notifications/read&oauth_token=<?=$accessToken?>';fetch(notifications).then((resp)=>resp.json()).then(function(data){if(data.notifications==0&&data.notifications_total==0){let fetchData={method:'POST',headers:new Headers()}
fetch(notification_read,fetchData).then(function(){location.reload()})}})
</script>

   <? }
wp_footer(); ?>
</body>
</html>
