<?
require get_template_directory() . '/inc/constants.php';
require_once get_template_directory() . '/inc/mobile-detect.php';
$detect = new Mobile_Detect;
$user_id = get_current_user_id();
$bgrf = get_user_meta($user_id,  'refresh', true );
	$dark = 'dark';
	$light = 'light';?>

<script type="text/javascript"><? if ($visitor[ 'user_id']){?>$("#profile").click(function(){$(".mdl-layout__drawer-right").addClass("active")}),$(".mdl-layout__obfuscator-right").click(function(){$(".mdl-layout__drawer-right").removeClass("active")});<?} else {?>$(document).ready(function(){document.querySelector(".close-drawer").addEventListener("click",function(){var e=document.querySelector(".mdl-layout");e.MaterialLayout.toggleDrawer()})});site = '<?=network_home_url();?>';permalink = '<?=get_home_url();?>';<? } ?></script>
<? if ($detect->isMobile() ){
?>
<script type="text/javascript">
$(".login-mobile-trigger").click(function(){$(".mdl-layout__drawer-right-login").addClass("active")}),$(".mdl-layout__obfuscator-right-login").click(function(){$(".mdl-layout__drawer-right-login").removeClass("active")});

$(document).on("click", ".mobile-register",function() {
	$('.login-mobile').hide();
	$('.register-mobile').show();
	$('.forgot-mobile').hide();
});
$(document).on("click", ".mobile-login",function() {
		$('.register-mobile').hide();
		$('.forgot-mobile').hide();
		$('.login-mobile').show();
	});
$(document).on("click", ".mobile-forgot",function() {
	$('.forgot-mobile').show();
	$('.register-mobile').hide();
	$('.login-mobile').hide();
});

</script>
<? }?>
<?
 if ( ($visitor['user_id']) ) {?>
<? $notification = $array['user']['user_unread_notification_count']; $convos = $array['user']['user_unread_conversation_count']; $totals = $notification + $convos;
 if ($totals > 0){?>


<? } ?>
<script type="text/javascript">
	angular.module('splotusApp', ['ionic'])

.controller('Main', ['$scope', function($scope) {
  $scope.data = {
    isLoading: false
  };


}]);
	<? if ($off == 'on') {?>Notification.requestPermission().then(function(result) {
							//Set cookie
								//var notification = new Notification("You will now recieve notifications when new alerts are available.");
						});<? }?></script>
<?php if($bgrf == 'off'){} elseif (!$detect->isMobile() ) {?><script type="text/javascript">
	site = '<?=network_home_url();?>';

	var alerts = $('#alertt'),
	convos = $('#convoo'),
	notify_rf = document.querySelector('#rf'),
    loadInterval = 60000;
(function loader() {

	 $.getJSON('https://splotus.com/notify', function(data){
                alerts.empty();
                alerts.html(data.alerts);
                convos.empty();
                convos.html(data.convos);
                conv_badge();
				alert_badge();
				totals();
				update_credits();
				credits_after();
				credits_usertitle();
				fb_likes();
        setTimeout(loader, loadInterval);

    }).fail(function() {
     notify_rf.show({text: "Failed checking for new alerts in the background, please refresh page to resume!", duration: 0});
});
})();


$(window).load(function(){

  $('.mdl-layout__content').scroll(function() {
    if ($('.mdl-layout__content').scrollTop() >= 100) {
      $('#header').addClass('active');
    }
    else {
	     $('#header').removeClass('active');
    }
  });
});

</script> <? } }
elseif (!$detect->isMobile() ) { ?>
<script src="<?=network_home_url();?>js/moment.min.js"></script>
<script src="<?=network_home_url();?>js/moment.tz.js"></script>
<script src="<?=network_home_url();?>js/mdDateTimePicker.min.js"></script>
<!-- <script src="<?=network_home_url();?>js/dialog-login.min.js"></script> -->


<? }?>
<?  if ($visitor['user_id'] && $array['user']['user_unread_notification_count'] > 0){?>

<? }
	foreach ($array_conversate['conversations'] as $convo)
{
// Checks if the id is correct and the conversation is unread, then deletes the conversation and redirects user back.
	if ($convo['conversation_id'] == $id AND $convo['conversation_has_new_message'] == 'true')
	{ ?>
<script type="text/javascript">

</script>
			<? } }
$conversations = $visitor['conversations_unread'];

	if ($conversations > 0) {?>
				<? }
			 $visitor = XenForo_Visitor::getInstance(); $current_user = wp_get_current_user(); global $userdata;  $visitor=XenForo_Visitor::getInstance(); $current_user=wp_get_current_user(); $user=$visitor[ 'username']; $alerts = $visitor['alerts_unread']; $conversations = $visitor['conversations_unread']; $total = $alerts + $conversations; $z = 0;
			  if ($visitor[ 'user_id']) {
				  if ($total > $z) { ?><script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.notify').click();});/*]]>*/</script>										<? }
					  }
		 if (isset($_COOKIE['notifyc'])) {?>
<script type="text/javascript">notify.show({text: "<?=$_COOKIE['notifyc'];?> theme has been applied!", duration: 3000});</script>
<? }
/*	if(!isset($_COOKIE['cookie']) && get_user_meta($user_id,  'cookie', true) == null ) {?>
	<script type="text/javascript">cookies.show({text: "This website uses cookies to help us give you the best experience when you visit. By using this website you consent to our use of these cookies.", duration: 0});</script><?} */


if ($visitor[ 'user_id']) { if ($total > $z) { if ($conversations > $z) {?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.conv').addClass('magictime wobble');
	});
</script>
<?} elseif ($alerts > $z){?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.alert').addClass('magictime wobble');
	});
</script>
<?
}?> <script type="text/javascript">
		setInterval(function(){
	$('.notify').toggleClass('magictime tada');
}, 3000 );
</script><?}}
	 if ( ($visitor['user_id']) ) {?><?php $login = isset($_GET['login']) ? $_GET['login'] : ''; if  ($login== '1'): ?><script type="text/javascript">$(window).load(function () {$(".logged-in").click()});</script><script src="<?=network_site_url();?>js/dialog-logged-in.min.js"></script> <? endif;} else {
$login = isset($_GET['login']) ? $_GET['login'] : '';
if  ($login== '1'): ?>
<script type="text/javascript">$(window).load(function () {$(".dialog-button").click()});</script><?php endif; }
 if (isset($_GET['login_error'])){?><script type="text/javascript">$(window).load(function () {$(".dialog-button").click()});</script><? }?>
