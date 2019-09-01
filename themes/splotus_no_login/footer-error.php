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
<? require get_template_directory() . '/inc/constants.php';?>
<?php
$visitor = XenForo_Visitor::getInstance(); $current_user = wp_get_current_user(); global $userdata; get_currentuserinfo(); $user = $visitor['username']; if ($visitor['user_id']) {?><?php
$login = isset($_GET['login']) ? $_GET['login'] : '';
if  ($login== '1'): ?><?php include( get_template_directory() . '/core/logged_in.php'); ?><?php endif; ?>
<?} else { ?><?php include( get_template_directory() . '/core/login.php'); ?>
<?php include( get_template_directory() . '/core/forgot.php'); ?>
<?php include( get_template_directory() . '/core/register.php'); ?> <? }?>
<?php if ( ($visitor['user_id']) ) {?><?php include( get_template_directory() . '/core/colors.php'); ?><? }?>

<gcse:searchresults-only></gcse:searchresults-only><footer class="copyright">
Splotus &copy; 2016
</div></footer></main></div>
<script src="<?=network_home_url();?>js/jquery-2.1.4.min.js"></script>
<script src="<?=network_home_url();?>js/dialog-polyfill.min.js"></script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.2.0/material.min.js"></script>
<script src="<?=network_home_url();?>games/js/base.min.js"></script>
<script src="<?=network_home_url();?>js/bootstrap.min.js"></script>
<script src="<?=network_home_url();?>js/jquery.cookie.js"></script>
<script src="<?=network_home_url();?>js/custom.js"></script>
<? global $blog_id; if ($blog_id == 16){?><script src="<?=network_home_url();?>js/jquery.tosrus.min.all.js"></script><script src="<?=network_home_url();?>js/settings.js"></script><? }?>
<? global $blog_id; if ($blog_id == 9){?>
<script src="<?=network_home_url();?>js/dialog.js"></script>
<?}?>
<?php if ( ($visitor['user_id']) ) {?>
<script src="<?=network_home_url();?>js/dialog-color.js"></script>
<?}
else { ?>
<script src="<?=network_home_url();?>js/dialog-login_e.js"></script>
<? }?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php $visitor = XenForo_Visitor::getInstance(); $current_user = wp_get_current_user(); global $userdata; get_currentuserinfo(); $visitor=XenForo_Visitor::getInstance(); $current_user=wp_get_current_user(); $user=$visitor[ 'username']; $alerts = $visitor['alerts_unread']; $conversations = $visitor['conversations_unread']; $total = $alerts + $conversations; $z = 0; if ($visitor[ 'user_id']) { if ($total > $z) { ?><script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.notify').click();});/*]]>*/</script><?php }} ?>

<? /* Animations */
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
	$(document).ready(function() {
		$('.notify').addClass('magictime tada');
	});
</script><?}}?>
<?php if ( ($visitor['user_id']) ) {?><?php $login = isset($_GET['login']) ? $_GET['login'] : ''; if  ($login== '1'): ?><script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.logged-in').click();});/*]]>*/</script><script type="text/javascript">
	 (function() {'use strict';
	var dialogButton4 = document.querySelector('.logged-in');
	var dialog4 = document.querySelector('#loggedin');
    var close = document.getElementById('#main');
	if (!dialog4.showModal) {
      dialogPolyfill.registerDialog(dialog4);
    }
    dialogButton4.addEventListener('click', function() {
	openLoggedIn();
	});
    dialog4.querySelector('.close')
      .addEventListener('click', function() {
        closeLoggedin();
      });
 function pulseDialog() {
    dialog4.classList.add('pulse');
    dialog4.addEventListener('webkitAnimationEnd', function(e) {
    dialog4.classList.remove('pulse');
    });
}
 function openLoggedIn() {
	   dialog4.style.opacity = 0;
	   dialog4.style.transition = 'all 250ms ease';
	   dialog4.showModal();
	   dialog4.style.opacity = 1;
	}

function clickedInLogged(mouseEvent) {
    var rect = dialog4.getBoundingClientRect();
    return rect.top <= mouseEvent.clientY && mouseEvent.clientY <= rect.top + rect.height
        && rect.left <= mouseEvent.clientX && mouseEvent.clientX <= rect.left + rect.width;
}

document.body.addEventListener('click', function(e) {
    if (!dialog4.open)
        return;
    if (e.target != document.body)
        return;
    pulseDialog();
});

dialog4.addEventListener('click', function(e) {
    if (clickedInLogged(e))
        return;
    pulseDialog();
});
function closeLoggedin() {
    if (dialog4.open)
        dialog4.close();
}
    function pulseDialog() {
    dialog4.classList.add('pulse');
    //Chrome
    dialog4.addEventListener('webkitAnimationEnd', function(e) {
    dialog4.classList.remove('pulse');
    });
    //Firefox
    dialog4.addEventListener('animationend', function(e) {
	dialog4.classList.remove('pulse');
    });
    };
//Escape Key
document.body.addEventListener('keydown', function(e) {
    if (e.keyCode == 27)
        closeLoggedin();
});
      	    }());
      </script> <? endif;} else { ?><?php
$login = isset($_GET['login']) ? $_GET['login'] : '';
if  ($login== '1'): ?>
<script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.dialog-button').click();
});/*]]>*/</script><?php endif; ?>
<? }?>
<?if (isset($_GET['login_error'])){?><script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.dialog-button').click();});/*]]>*/</script><? }?>
<?php wp_footer(); ?>
</body>
</html>