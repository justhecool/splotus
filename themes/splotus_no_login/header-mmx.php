<?php
/**
 * The header for our Colors.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/Colorss/basics/template-files/#template-partials
 *
 * @package splotus
 */
require get_template_directory() . '/inc/constants.php';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Chrome, Firefox OS and Opera -->

<? global $blog_id; if ($blog_id == 15){?><meta name="theme-color" content="<? echo $material_color_mmx;?>"><? }?>

<!-- Windows Phone -->
<? global $blog_id; if ($blog_id == 15){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_mmx;?>"><? }?>

<!-- iOS Safari -->
<link rel="apple-touch-icon" sizes="192x192" href="<?=$imageUrl;?>/touch-icon.png">
<?php wp_head(); ?>
</head>
<? global $blog_id; if ($blog_id == 16 & is_page( 5 )){?><body class="landing page-transparent bolt"><? } elseif ($blog_id == 16 & is_page( 7 )){?><body class="landing page-transparent idle"><? }elseif ($blog_id == 16 & is_page( 13 )){?><body class="landing page-transparent thirty"><? }else {?>
<body class="landing page-transparent"><?}?>
<div class="show-loading"></div>
<div id="top"></div>
<div id=swx>
<header class="header header2 header-transparent header-waterfall " id="head" data-wow-duration="5s" style="z-index:999999; display:none;">
<ul class="nav nav-list pull-left">
<li>
<a data-toggle=menu href=#menu>
<span class="icon icon-lg">menu</span>
</a>
</li>
</ul>
<a data-toggle=menu class="header-logo margin-left-no" href=#menu></a>
<div class="header-affix pull-left" data-offset-top=108 data-spy=affix>
<span class="header-text margin-left-no">
</span>
</div>
<?php $visitor = XenForo_Visitor::getInstance(); $current_user = wp_get_current_user(); global $userdata; get_currentuserinfo(); $visitor=XenForo_Visitor::getInstance(); $current_user=wp_get_current_user(); $user=$visitor[ 'username']; $alerts = $visitor['alerts_unread']; $conversations = $visitor['conversations_unread']; $total = $alerts + $conversations; $z = 0; if ($visitor[ 'user_id']) { if ($total > $z) {
			 ?><ul class="nav nav-list pull-right">
		<li class="dropdown ">
				<a  class="dropdown-toggle wow tada" data-wow-duration="5s" data-toggle="dropdown" >
					<span class="access-hide"></span>
					<span class="avatar mdl-badge-avi" data-badge="<?=$total?>"><?=get_avatar( $userdata->ID, 96 )?></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a class="waves-attach" href="<?=$forumUrl?>/account/"><span class="icon icon-lg">account_box</span>Account Settings</a>
					</li>
					<li class="m_credits">
						<a class="waves-attach" href="<?=$forumUrl?>/adcredits"><span class="icon icon-lg">local_activity</span>ϟ <?=number_format($visitor['adcredit'], 0, '.', ',');?></a>
					</li>
					<li>
						<a class="waves-attach color-trigger"><span class="icon icon-lg color-trigger">color_lens</span>Change Colors</a>
					</li>
					<? if ($alerts > $z){echo '
					<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/alerts"><span class="icon icon-lg mdl-badge wow wobble" data-wow-duration="3s"  data-badge="'. $alerts . '" >flag</span>Alerts</a>
					</li>';} elseif ($alerts = $z){echo '
					<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/alerts"><span class="icon icon-lg mdl-badge"   data-badge="'. $alerts . '" >flag</span>Alerts</a>
					</li>';} else { echo'<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/alerts"><span class="icon icon-lg mdl-badge"   data-badge="'. $alerts . '" >flag</span>Alerts</a>
					</li>';}?> <? if ($conversations > $z){echo '

					<li>
						<a class="waves-attach" href="'.$forumUrl.'/conversations"><span class="icon icon-lg mdl-badge wow wobble" data-wow-duration="3s" data-badge="' . $conversations . '">mail</span>Conversations</a>
					</li>
					';} elseif ($conversations == $z) {echo '	<li>
						<a class="waves-attach" href="'.$forumUrl.'/conversations"><span class="icon icon-lg mdl-badge" data-badge="' . $conversations . '">mail</span>Conversations</a>
					</li>';}?>

					<li>
						<a class="waves-attach" href="<?=wp_logout_url( network_home_url() )?>"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>
			</li>
		</ul>
		<?;} elseif ( is_page( array( 8,7,4,17, 'report', 'upload', 1288, 1352) ) ){ echo '<ul class="nav nav-list pull-right">
			<li class="dropdown">
				<a  class="dropdown-toggle" data-toggle="dropdown" >
					<span class="access-hide"></span>
					<span class="avatar">'. get_avatar( $userdata->ID, 96 ) . '</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/"><span class="icon icon-lg">account_box</span>Account Settings</a>
					</li>
					<li class="m_credits">
						<a class="waves-attach" href="'.$forumUrl.'/adcredits"><span class="icon icon-lg">local_activity</span>ϟ '.number_format($visitor['adcredit'], 0, '.', ',').'</a>
					</li>
					<li>
						<a class="waves-attach color-trigger"><span class="icon icon-lg color-trigger">color_lens</span>Change Colors</a>
					</li>
					<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/alerts"><span class="icon icon-lg mdl-badge" data-badge="'. $alerts . '" >flag</span>Alerts</a>
					</li>
										<li>
						<a class="waves-attach" href="'.$forumUrl.'/conversations"><span class="icon icon-lg mdl-badge" data-badge="' . $conversations . '">mail</span>Conversations</a>
					</li>

					<li>
						<a class="waves-attach" id="logout" href="'. $siteUrl .'/?logout=1"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>
			</li>
		</ul>
'; } else  echo '<ul class="nav nav-list pull-right">
			<li class="dropdown">
				<a  class="dropdown-toggle" data-toggle="dropdown" >
					<span class="access-hide"></span>
					<span class="avatar">'. get_avatar( $userdata->ID, 96 ) . '</span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/"><span class="icon icon-lg">account_box</span>Account Settings</a>
					</li>
					<li class="m_credits">
						<a class="waves-attach" href="'.$forumUrl.'/adcredits/"><span class="icon icon-lg">local_activity</span>ϟ '.number_format($visitor['adcredit'], 0, '.', ',').'</a>
					</li>
					<li>
						<a class="waves-attach color-trigger"><span class="icon icon-lg color-trigger">color_lens</span>Change Colors</a>
					</li>
					<li>
						<a class="waves-attach" href="'.$forumUrl.'/account/alerts"><span class="icon icon-lg mdl-badge" data-badge="'. $alerts . '" >flag</span>Alerts</a>
					</li>
										<li>
						<a class="waves-attach" href="'.$forumUrl.'/conversations"><span class="icon icon-lg mdl-badge" data-badge="' . $conversations . '">mail</span>Conversations</a>
					</li>

					<li>
						<a class="waves-attach" id="logout" href="'. wp_logout_url( network_home_url() ) .'"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>
			</li>
		</ul>';}?>
		<? global $blog_id; if ($visitor[ 'user_id']){} elseif ($blog_id == 9) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_green/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 10) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_blue/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 13) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_wiki/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 14) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_red/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 15) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_yellow/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 5 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_current/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 7 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_idle/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 9 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_maker/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 11 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_island/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 13 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_second/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 15 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_jingle/" height="80" width="80" /></span></a></ul>
'; } elseif ($blog_id == 16 & is_page( 17 )) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_candy/" height="80" width="80" /></span></a></ul>
'; } else { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_green/" height="80" width="80" /></span></a></ul>'; } ?>

			 </ul>
			 <? global $blog_id; if ($visitor[ 'user_id']){?>
			 <ul class="nav nav-list pull-right credit">

			<li class="dropdown">

				<a class="dropdown-togggle cred" data-toggle="dropdown">
					<span class="credits"><i class="material-icons">local_activity</i></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a class="waves-attach"><span class="icon icon-lg">local_activity</span>ϟ <?=number_format($visitor['adcredit'], 0, '.', ',');?></a>
					</li>
					<li>
						<a class="waves-attach" href="<?=$forumUrl?>/adcredits/packages"><span class="icon icon-lg color-trigger">attach_money</span>Purchase</a>
					</li>
					<li>
						<a class="waves-attach" href="<?=$forumUrl?>/adcreditshop"><span class="icon icon-lg mdl-badge">store</span>Shop</a>


				</ul>
			</li>

		</ul>
<?}?>
			 <ul class="nav nav-list pull-right">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <?php
    $search = "";
    if( isset( $_GET ["q"] )) $search = $_GET ["q"];
?>
	          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mdl-textfield__expandable-holder" method="get">
              <input class="mdl-textfield__input" type="search" id="search" name="q" autocomplete="off"  value="<? echo $search;?>">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </form>
          </div>
			 </ul> 	</header>
<nav aria-hidden=true class="menu" id=menu style=z-index:99999999>
<div class=menu-scroll>
<div class=menu-content>
<?php global $blog_id; if ($blog_id == 9){ $page='home' ; echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-n"/></a>';} elseif ($blog_id == 10){ $page='swx' ; echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-b"/></a>';} elseif ($blog_id == 13){echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-mobile-wiki"/></a>';}  elseif ($blog_id == 14){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-mobile-de"/></a>';} elseif ($blog_id == 15){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-mobile-mmx"/></a>';} elseif ($blog_id == 16 & is_page( 5 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-current"/></a>';} elseif ($blog_id == 16 & is_page( 7 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-idle"/></a>';} elseif ($blog_id == 16 & is_page( 9 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-maker"/></a>';} elseif ($blog_id == 16 & is_page( 11 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-island"/></a>';} elseif ($blog_id == 16 & is_page( 13 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-second"/></a>';} elseif ($blog_id == 16 & is_page( 15 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-jingle"/></a>';} elseif ($blog_id == 16 & is_page( 17 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-candy"/></a>';} else {echo'<a class="menu-logo" href="'. site_url().'"><img src="'. $imageUrl .'/splotus-logo-n"/></a>';} ?>
<ul class=nav>
<li <?php global $blog_id; if ($blog_id == 9){ $page='home' ; echo 'class="active"><a class="waves-attach"><span class="icon icon-lg">home</span>Home</a>';} else echo'><a class="waves-attach" href="'.$devUrl .'"><span class="icon icon-lg">home</span>Casa</a>
'?> </li>

<?php global $blog_id; if ($blog_id == 9){?><li><a href="#story" data-dismiss="menu" class="waves-attach"><span class="icon icon-lg" >format_align_justify</span>Our Story</a></li><? } else {?><li><a href="<?=$devUrl;?>#story"  class="waves-attach"><span class="icon icon-lg" >format_align_justify</span>Nossa história</a></li><? }?>
<?php global $blog_id; if ($blog_id == 16){?>
<li class="active"><a class="waves-attach active__overlay" data-target=#game data-toggle=collapse><span class="icon icon-lg">pages</span>nossos Jogos</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#game data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=game><? } else {?>

<li><a class=waves-attach data-target=#game data-toggle=collapse><span class="icon icon-lg">games</span>Nossos Jogos</a>
<span class="menu-collapse-toggle collapsed waves-attach" data-target="#game" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span><ul class="menu-collapse collapse" id="game"><? }?>
 									<li <? global $blog_id; if ($blog_id == 16 & is_page( 5 )){?> class="active active__overlay_sub"><a class="current ctm">CURRENT TYCOON</a></li><?} else {?>><a class="current ctm" href="/g/current-tycoon/">CURRENT TYCOON</a></li><? } ?>
									<li <? global $blog_id; if ($blog_id == 16 & is_page( 7 )){?> class="active active__overlay_sub"><a class="idle-city icm">IDLE CITY</a></li><?} else {?>><a class="idle-city icm" href="/g/idle-city/">IDLE CITY</a></li> <?}?>
									<li <? global $blog_id; if ($blog_id == 16 & is_page( 9 )){?> class="active active__overlay_sub"><a class="idle-dev igm">IDLE GAME DEV</a></li><?} else {?>><a class="idle-dev igm" href="/g/idle-game-dev/">IDLE GAME DEV</a></li><? } ?>
									<li <? global $blog_id; if ($blog_id == 16 & is_page( 11 )){?> class="active active__overlay_sub"><a class="island ibm">ISLAND BUILDER</a></li><?} else {?>><a class="island ibm" href="/g/island-builder">ISLAND BUILDER</a></li><? } ?>
									<li <? global $blog_id; if ($blog_id == 16 & is_page( 13 )){?> class="active active__overlay_sub"><a class="sec stm">30 SECOND TAP</a></li><?} else {?>><a class="sec stm" href="/g/30-second-tap">30 SECOND TAP</a></li><? } ?>
									<li <? global $blog_id; if ($blog_id == 16 & is_page( 15 )){?> class="active active__overlay_sub"><a class="jingle jtm">JINGLE TAPPER</a></li><?} else {?>><a class="jingle jtm" href="/g/jingle-tapper">JINGLE TAPPER</a></li><? } ?>
									<li <? global $blog_id; if ($blog_id == 16 & is_page( 17 )){?> class="active active__overlay_sub"><a class="candy cwm">CANDY WHACKER</a></li><?} else {?>><a class="candy cwm" href="/g/candy-whacker">CANDY WHACKER</a></li><? } ?>
</ul>
</li>
<?php global $blog_id; if ($blog_id == 10){?> <li class="active">
<a class="waves-attach active__overlay" data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=pages>
	<li class="active__overlay_sub"><a class="x-active swx" data-target=#xspoilers data-toggle=collapse>SMALLWORLDS X</a><span class="menu-collapse-toggle collapsed  waves-attach" data-target=#xspoilers data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
	<ul class="menu-collapse collapse" id=xspoilers>
	<li><a class="swx" href=""><span class="icon icon-lg">image</span>SPOILERS</a></li>
	</ul>
	</li>
	<li><a class="mmx" href="<?=$mmxUrl?>">MINIMUNDOS X</a></li>
	<li><a class="de" href="<?=$deUrl?>">SMALLWORLDS X DE</a></li>
	<li><a class="sw-wiki" href="<?=$wikitUrl?>">SMALLWORLDS WIKI</a></li>
</ul>
</li>

<?} elseif ($blog_id == 15){?> <li class="active">
<a class="waves-attach active__overlay" data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=pages>
	<li><a class="swx" href="<?=$swxUrl?>">SMALLWORLDS X</a></li>
	<li class="active__overlay_sub active"><a class="mmx">MINIMUNDOS X</a></li>
	<li><a class="de" href="<?=$deUrl?>">SMALLWORLDS X DE</a></li>
	<li><a class="sw-wiki" href="<?=$wikitUrl?>">SMALLWORLDS WIKI</a></li>
</ul>
</li>

<?}
else{?>
<li>
<a class=waves-attach data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapsed waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse" id=pages>
	<li><a class="<?php global $blog_id; if ($blog_id == 10){?>x-active<?}?> swx" href="<?=$swxUrl?>">SMALLWORLDS X</a></li>
	<li><a class="mmx" href="<?=$mmxUrl?>">MINIMUNDOS X</a></li>
	<li><a class="de" href="<?=$deUrl?>">SMALLWORLDS X DE</a></li>
	<li><a class="<?php global $blog_id; if ($blog_id == 13){?>w-active<?}?>sw-wiki" href="<?=$wikitUrl?>">SMALLWORLDS WIKI</a></li>
</ul>
</li>
<? }?>
<li>
<a class=waves-attach href="<?=$forumUrl?>"><span class="icon icon-lg">forum</span>Our Forum</a>
</li>
<li>
<a class=waves-attach data-target=#history data-toggle=collapse><span class="icon icon-lg">people</span>Our Team</a>
<span class="menu-collapse-toggle collapsed waves-attach" data-target="#history" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse" id="history">
	<li><a class="liam" href="">LIAM</a></li>
	<li><a class="appless" href="">APPLESS</a></li>
	<li><a class="justin" href="">JUSTIN</a></li>
</ul>
</li>
<li <?php if (is_page( 'faq' ) ){ $page='faq' ; echo 'class="active"><a class="waves-attach"><span class="icon icon-lg">help</span>FAQ</a>'; } else echo'><a href="'.$siteUrl .'#contact"  class="waves-attach"><span class="icon icon-lg ">mail</span>Contact Us</a>' ?> </li>
<? if ($visitor->isMemberOf(20)){?>
<hr>
<li>
<a class=waves-attach data-target=#donate data-toggle=collapse><span class="icon icon-lg">settings</span>Donator Options</a>
<span class="menu-collapse-toggle collapse waves-attach" data-target=#donate data-toggle=collapse><i class="icon menu-collapse-toggle-close">close</i><i class="icon menu-collapse-toggle-default">add</i></span>
<ul class="menu-collapse collapse in" id=donate>
<?php global $blog_id; if ($blog_id == 9){?><li class="active"><a class=waves-attach >Development</a></li><?} else {?><li><a class=waves-attach href="//splotus.com/dev/">Development</a></li><?}?>
<li><a class=waves-attach href=<?php echo $imageUrl;?>>Images</a></li>
</ul>
</li>
<?	} ?>
<? if ($visitor->isMemberOf(18)){?>
<hr>
<li>
<a class=waves-attach data-target=#test data-toggle=collapse><span class="icon icon-lg">settings</span>Tester Options</a>
<span class="menu-collapse-toggle collapse waves-attach" data-target=#test data-toggle=collapse><i class="icon menu-collapse-toggle-close">close</i><i class="icon menu-collapse-toggle-default">add</i></span>
<ul class="menu-collapse collapse in" id=test>
<?php global $blog_id; if ($blog_id == 9){?><li class="active"><a class=waves-attach >Development</a></li><?} else {?><li><a class=waves-attach href="//splotus.com/dev/">Development</a></li><?}?>
</ul>
</li>
<?	} ?>
<? if ( current_user_can( 'manage_options' ) & ($visitor['user_id']) ) { ?>
<hr>
<li>
<a class=waves-attach data-target=#staff data-toggle=collapse><span class="icon icon-lg">settings</span>Staff Options</a>
<span class="menu-collapse-toggle collapse waves-attach" data-target=#staff data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=staff>
<li><a href=<?php echo get_site_url(); ?>/wp-admin/>Site Admin</a></li>
<li><a class=waves-attach href=<?php echo $forumUrl;?>/admin.php>Forum Admin</a></li>
<li><a class=waves-attach href=<?php echo $siteUrl;?>/test>Test</a></li>
<li><a class=waves-attach href=<?php echo $siteUrl;?>/archive>Archive</a></li>
<a class=waves-attach href=<?php echo $siteUrl;?>/backups>Site Backups</a>
<li><a class=waves-attach href=<?php echo $siteUrl;?>/cpanel>Host CPanel</a>
</ul>
</li>
<?	} ?>
<? if ($visitor[ 'user_id']){}  else { echo '<li><a data-dismiss="menu" class="waves-attach login-trigger"><span class="icon icon-lg ">account_circle</span>Login</li>'; }?> </div>
</div>
</nav>


<? global $blog_id;
if ($blog_id == 9 ){?><div class="overlay-m"><a href="#top" <div class="logo logo-home wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 10){?><div class="overlay-m"><a href="#top" <div class="logo logo-swx wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 13){?><div class="overlay-m"><a href="#top" <div class="logo logo-wiki wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 14){?><div class="overlay-m"><a href="#top" <div class="logo logo-de wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 15){?><div class="overlay-m"><a href="#top" <div class="logo logo-mmx wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 5 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-current wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 7 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-idle wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 9 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-maker wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 11 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-island wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 13 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-second wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 15 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-jingle wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 17 )){?><div class="overlay-m"><a href="#top" <div class="logo logo-candy wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } else {?><div class="overlay-m"><a href="#top" <div class="logo logo-home wow slideInDown"><img src="<?=$imageUrl;?>/splotus-logo/"/></div>
<span></span>
<p></p>
</div></a>
<? }?>
<? if ($blog_id == 9 & is_page( 2 ) ){?>
<?php include( get_template_directory() . '/template-parts/slides.php'); ?>
</div>
</div>
</div>
<? }?>
<?if ($blog_id == 10 & is_page( 9 ) ){?>
<?php include( get_template_directory() . '/template-parts/swx.php'); ?>
</div>
</div>
</div>
<? } else {?> </div>
</div>
</div><? }?>
<div id="main">
