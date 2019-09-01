HEADER 12/31/2016


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
 require get_template_directory() . '/inc/api.php';
 if ($blog_id == 15) { get_header('mmx'); return 0;}
$visitor = XenForo_Visitor::getInstance();$userName = $visitor['username'];if ($visitor->isMemberOf(6)){require('/home/splotusc/public_html/wp-content/themes/swx/banned.php');exit;}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Splotus">
<!-- Chrome, Firefox OS and Opera -->
<?  if ($blog_id == 9){?><meta name="theme-color" content="<? echo $material_color_green;?>"><? }
elseif ($blog_id == 10){?><meta name="theme-color" content="<? echo $material_color_blue;?>"><? }
elseif ($blog_id == 13){?><meta name="theme-color" content="<? echo $material_color_wiki;?>"><? }
elseif ($blog_id == 14){?><meta name="theme-color" content="<? echo $material_color_de;?>"><? }
elseif ($blog_id == 15){?><meta name="theme-color" content="<? echo $material_color_mmx;?>"><? }
elseif ($blog_id == 16 & is_page( 5 )){?><meta name="theme-color" content="<? echo $material_color_current;?>"><? }
elseif ($blog_id == 16 & is_page( 7 )){?><meta name="theme-color" content="<? echo $material_color_idle;?>"><? }
elseif ($blog_id == 16 & is_page( 9 )){?><meta name="theme-color" content="<? echo $material_color_maker;?>"><? }
elseif ($blog_id == 16 & is_page( 11 )){?><meta name="theme-color" content="<? echo $material_color_island;?>"><? }
elseif ($blog_id == 16 & is_page( 13 )){?><meta name="theme-color" content="<? echo $material_color_second;?>"><? }
elseif ($blog_id == 16 & is_page( 15 )){?><meta name="theme-color" content="<? echo $material_color_jingle;?>"><? }
elseif ($blog_id == 16 & is_page( 17 )){?><meta name="theme-color" content="<? echo $material_color_candy;?>"><? } else{?><meta name="theme-color" content="<? echo $material_color_green;?>"><? }?>

<!-- Windows Phone -->
<?  if ($blog_id == 9){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_green;?>"><? }?>
<?  if ($blog_id == 10){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_blue;?>"><? }?>
<?  if ($blog_id == 13){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_wiki;?>"><? }?>
<?  if ($blog_id == 14){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_de;?>"><? }?>
<?  if ($blog_id == 15){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_mmx;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 5 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_current;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 7 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_idle;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 9 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_maker;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 11 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_island;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 13 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_second;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 15 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_jingle;?>"><? }?>
<?  if ($blog_id == 16 & is_page( 17 )){?><meta name="msapplication-navbutton-color" content="<? echo $material_color_candy;?>"><? }?>
<!-- iOS Safari -->
<link rel="apple-touch-icon" sizes="192x192" href="<?=imageUrl;?>/touch-icon.png">
<?php wp_head(); ?>
</head>
<?  if ($blog_id == 16 & is_page( 5 )){?><body class="landing page-transparent bolt" data-no-instant>
<? } elseif ($blog_id == 16 & is_page( 7 )){?><body class="landing page-transparent idle" data-no-instant>
<? } elseif ($blog_id == 16 & is_page( 9 )){?><body class="landing page-transparent game-dev" data-no-instant>
<? } elseif ($blog_id == 16 & is_page( 11 )){?><body class="landing page-transparent island-builder" data-no-instant>
<? } elseif ($blog_id == 16 & is_page( 13 )){?><body class="landing page-transparent thirty" data-no-instant>
<? } elseif ($blog_id == 16 & is_page( 15 )){?><body class="landing page-transparent jingle-tap" data-no-instant>
<? } elseif ($blog_id == 16 & is_page( 17 )){?><body class="landing page-transparent whack" data-no-instant>
<? } else {?>
<body class="landing page-transparent" data-no-instant>
<?}?>
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
<?php global $alerts; global $conversations; global $total; global $z; $visitor = XenForo_Visitor::getInstance(); $current_user = wp_get_current_user(); global $userdata; get_currentuserinfo(); $visitor=XenForo_Visitor::getInstance(); $current_user=wp_get_current_user(); $user=$visitor[ 'username']; $alerts = $visitor['alerts_unread']; $conversations = $visitor['conversations_unread']; $total = $alerts + $conversations; $z = 0; if ($visitor[ 'user_id']) {
			 ?><ul class="nav nav-list pull-right">
		<li class="dropdown ">
				<a  class="dropdown-toggle" data-toggle="dropdown" >
					<span class="access-hide"></span>
					<span class="avatar mdl-badge-avi"><?=get_avatar( $userdata->ID, 96 )?></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a class="waves-attach" data-toggle="menu" href="#profile"><span class="icon icon-lg">account_box</span>Account Settings</a>
					</li>
					<li class="m_credits">
						<a class="waves-attach" href="<?=$forumUrl?>/adcredits"><span class="icon icon-lg">local_activity</span>ϟ <?=number_format($visitor['adcredit'], 0, '.', ',');?></a>
					</li>
					<li>
						<a class="waves-attach color-trigger"><span class="icon icon-lg color-trigger">color_lens</span>Change Colors</a>
					</li>
					<li>
						<a class="waves-attach" href="//splotus.com/forum/chat/fullpage" target="chatWindowPopup" onclick="chatOpenPopup(); return false;" data-instant><span class="icon icon-lg">chat</span>Chat</a>
					<li>
						<a class="waves-attach" href="<?=wp_logout_url( home_url() )?>"><span class="icon icon-lg">exit_to_app</span>Logout</a>
					</li>
				</ul>
			</li>
		</ul>
		<?}?>
		<?  if ($visitor[ 'user_id']){} elseif ($blog_id == 9) { echo '<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_green/" height="80" width="80" /></span></a></ul>
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
			  <?  if ($visitor[ 'user_id']){?>
			  <? $notification = $array['user']['user_unread_notification_count']; $convos = $array['user']['user_unread_conversation_count']; $totals = $notification + $convos ;
					if ($totals > $z){?>
			 <ul class="nav nav-list pull-right _notification">

			<li class="dropdown keepopen">

				<a class="dropdown-togggle notify" data-toggle="dropdown">
					<span class="credits mdl-badge-avi" data-badge="<?=$totals?>"><i class="material-icons">notifications_active</i></span>

				</a>
				<ul class="dropdown-menu notification">
				<?	if($notification>$z){?>
					<div class="conversations"><h1><i class="material-icons convo">notifications</i><span class="convo-text">Notifications</span></h1></div><?
							foreach ($array_notify['notifications'] as $notify)
							{
			                   $text = $notify['notification_html'];
			                   $content = preg_replace('/<[^>]*>/', '', $text);

							   if($i)echo " ";
							   if ($notify['notification_is_unread'] == 'true'){?><a href="<?=$forumUrl?>account/alerts"><p align="center"><img align="left" src="https://forum.splotus.com/avatar.php?userid=<?=$notify['creator_user_id'];?>&size=s"><?=$content?></p></a><hr><?
							   $i=1;
							}
		          		}
?><form style="margin:0;"  name="notify" action="<?=$siteUrl?>/php/notification"method="post">
	<button class="btn btn-flat btn_notifications waves-attach waves-effect"><i class="material-icons convo">clear_all</i> Clear All Notifications</button></form><?
} if($convos >$z){?>
	<div class="conversations"><h1><i class="material-icons convo">mail</i><span class="convo-text">Conversations</span></h1></div>
	<? $k=0; foreach ($array_conversate['conversations'] as $convo)
			          {
			                   $text2 = $convo['message_body_html'];
			                   $content2 = preg_replace('/<[^>]*>/', '', $text2);

				  if($i)echo " ";
				  if ($convo['conversation_has_new_message'] == 'true'){ $convo_id = ($array_conversate['conversations']['conversation_id']);?>
				  <a href="<?=$forumUrl?>conversations/<?=$convo['conversation_title']?>.<?=$convo['conversation_id']?>"><p align="center"><img align="left" src="https://forum.splotus.com/avatar.php?userid=<?=$convo['creator_user_id']?>&size=s"><strong><?=$convo['conversation_title']?></strong><br/>Unread messages from <?=$convo['creator_username']?></p></a><hr><div class="convo_actions"><a class="pull-left" href="<?=$forumUrl?>conversations/<?=$convo['conversation_title']?>.<?=$convo['conversation_id']?>"><i align="right" class="material-icons convo">reply</i></a><a class="pull-right" href="../php/delete?id=<?=$convo['conversation_id']?>"><i align="right" class="material-icons convo">delete</i></a>
</div><? if($convos>1){?><hr><?}?><?
			             $i=1;
			             $k++;
			             }
		          }
} ?>
				</ul>
				</li>

		</ul>
<?}}?>

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
			 <? if ($visitor[ 'user_id']) {
			 echo '<nav aria-hidden="true" class="menu menu-right" id="profile" style="z-index:100000000;">
		<div class="menu-scroll ">
			<div class="menu-top">
				<div class="menu-top-img" style="background-color:#52B2EC;">
				</div>
				<div class="menu-top-info">
					<a class="menu-top-user image" href="javascript:void(0)"><span class=" icon big rounded major guest pull-left"><img src="https://forum.splotus.com/avatar.php?userid='.$visitor ['user_id'] .'&size=m" class="wow rollIn icon big  accent9 rounded icon major"</span></a>
				</div>

				<div class="menu-top-info-sub" align="center">
					<a href="http://forum.splotus.com/members/'. $visitor[ 'user_id'] . '">'.$current_user->display_name . '</a>
				</div>
			</div>
			<div class="menu-content">
				<ul class="nav">
				Coming soon
				</ul>
			</div>
		</div>
	</nav>
';}?>

<nav aria-hidden=true class="menu" id=menu style=z-index:99999999>
<div class="menu-scroll jfk-scrollbar-borderless">
<div class=menu-content>
<?php  if ($blog_id == 9){ $page='home' ; echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-n"/></a>';} elseif ($blog_id == 10){ $page='swx' ; echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-b"/></a>';} elseif ($blog_id == 13){echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-mobile-wiki"/></a>';}  elseif ($blog_id == 14){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-mobile-de"/></a>';} elseif ($blog_id == 15){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-mobile-mmx"/></a>';} elseif ($blog_id == 16 & is_page( 5 )){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-m-current"/></a>';} elseif ($blog_id == 16 & is_page( 7 )){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-m-idle"/></a>';} elseif ($blog_id == 16 & is_page( 9 )){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-m-maker"/></a>';} elseif ($blog_id == 16 & is_page( 11 )){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-m-island"/></a>';} elseif ($blog_id == 16 & is_page( 13 )){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-m-second"/></a>';} elseif ($blog_id == 16 & is_page( 15 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-jingle"/></a>';} elseif ($blog_id == 16 & is_page( 17 )){ echo '<a class="menu-logo"><img src="'. imageUrl .'/splotus-logo-m-candy"/></a>';} else {echo'<a class="menu-logo" href="'. site_url().'"><img src="'. imageUrl .'/splotus-logo-n"/></a>';} ?>
<ul class=nav>
	<? if ($visitor->isMemberOf(2)){?>
	<li><a class=waves-attach href="//splotus.com/"><span class="icon icon-lg">arrow_back</span>Back to Main Site</a></li>
	<hr>
	<? } ?>
<li <?php  if ($blog_id == 9){ $page='home' ; echo 'class="active"><a class="waves-attach"><span class="icon icon-lg">home</span>Home</a>';} else echo'><a class="waves-attach" href="'.$devUrl .'"><span class="icon icon-lg">home</span>Home</a>
'?> </li>

<?php  if ($blog_id == 9 & is_page( 2 ) ){?><li><a href="#story" data-dismiss="menu" class="waves-attach"><span class="icon icon-lg" >format_align_justify</span>Our Story</a></li><? } else {?><li><a href="<?=$devUrl;?>#story"  class="waves-attach"><span class="icon icon-lg" >format_align_justify</span>Our Story</a></li><? }?>
<?php  if ($blog_id == 16){?>
<li class="active"><a class="waves-attach active__overlay" data-target=#game data-toggle=collapse><span class="icon icon-lg">pages</span>Our Games</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#game data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=game><? } else {?>

<li><a class=waves-attach data-target=#game data-toggle=collapse><span class="icon icon-lg">games</span>Our Games</a>
<span class="menu-collapse-toggle collapsed waves-attach" data-target="#game" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span><ul class="menu-collapse collapse" id="game"><? }?>
 									<li <?  if ($blog_id == 16 & is_page( 5 )){?> class="active active__overlay_sub"><a class="current ctm">CURRENT TYCOON</a></li><?} else {?>><a class="current ctm" href="/g/current-tycoon/">CURRENT TYCOON</a></li><? } ?>
									<li <?  if ($blog_id == 16 & is_page( 7 )){?> class="active active__overlay_sub"><a class="idle-city icm">IDLE CITY</a></li><?} else {?>><a class="idle-city icm" href="/g/idle-city/">IDLE CITY</a></li> <?}?>
									<li <?  if ($blog_id == 16 & is_page( 9 )){?> class="active active__overlay_sub"><a class="idle-dev igm">IDLE GAME DEV</a></li><?} else {?>><a class="idle-dev igm" href="/g/idle-game-dev/">IDLE GAME DEV</a></li><? } ?>
									<li <?  if ($blog_id == 16 & is_page( 11 )){?> class="active active__overlay_sub"><a class="island ibm">ISLAND BUILDER</a></li><?} else {?>><a class="island ibm" href="/g/island-builder">ISLAND BUILDER</a></li><? } ?>
									<li <?  if ($blog_id == 16 & is_page( 13 )){?> class="active active__overlay_sub"><a class="sec stm">30 SECOND TAP</a></li><?} else {?>><a class="sec stm" href="/g/30-second-tap">30 SECOND TAP</a></li><? } ?>
									<li <?  if ($blog_id == 16 & is_page( 15 )){?> class="active active__overlay_sub"><a class="jingle jtm">JINGLE TAPPER</a></li><?} else {?>><a class="jingle jtm" href="/g/jingle-tapper">JINGLE TAPPER</a></li><? } ?>
									<li <?  if ($blog_id == 16 & is_page( 17 )){?> class="active active__overlay_sub"><a class="candy cwm">CANDY WHACKER</a></li><?} else {?>><a class="candy cwm" href="/g/candy-whacker">CANDY WHACKER</a></li><? } ?>
</ul>
</li>
<?php  if ($blog_id == 10 & is_page( 1657 )){?> <li class="active">
<a class="waves-attach active__overlay" data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=pages>
	<li class="active__overlay_sub"><a class=" swx" href="<?=swxUrl;?>">SMALLWORLDS X</a><span class="menu-collapse-toggle collapse  waves-attach" data-target=#xspoilers data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
	<ul class="menu-collapse collapse in" id=xspoilers>
	<li><a class="swx" href=""><span class="icon icon-lg">image</span>SPOILERS</a></li>
	<li class="active__overlay_sub"><a class="x-active swx"><span class="icon icon-lg">accessibility</span>HOW TO GO OUTSIDE ANY SPACE!</a></li>

	</ul>
	</li>
	<li><a class="mmx" href="<?=$mmxUrl?>">MINIMUNDOS X</a></li>
	<li><a class="de" href="<?=$deUrl?>">SMALLWORLDS X DE</a></li>
	<li><a class="sw-wiki" href="<?=$wikitUrl?>">SMALLWORLDS WIKI</a></li>
</ul>
</li>

<?} elseif ($blog_id == 10){?> <li class="active">
<a class="waves-attach active__overlay" data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=pages>
	<li class="active__overlay_sub"><a class="x-active swx" data-target=#xspoilers data-toggle=collapse>SMALLWORLDS X</a><span class="menu-collapse-toggle collapsed  waves-attach" data-target=#xspoilers data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
	<ul class="menu-collapse collapse" id=xspoilers>
	<li><a class="swx" href=""><span class="icon icon-lg">image</span>SPOILERS</a></li>
	<? $visitor = XenForo_Visitor::getInstance();
       if ($visitor->isMemberOf(array(3,18,21))){?><li class="active__overlay_sub"><a class="swx" href="<?=swxUrl;?>/how-to-go-outside-any-space/"><span class="icon icon-lg">accessibility</span>HOW TO GO OUTSIDE ANY SPACE!</a></li><?}?>
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
	<li><a class="swx" href="<?=swxUrl?>">SMALLWORLDS X</a></li>
	<li class="active__overlay_sub active"><a class="mmx">MINIMUNDOS X</a></li>
	<li><a class="de" href="<?=$deUrl?>">SMALLWORLDS X DE</a></li>
	<li><a class="sw-wiki" href="<?=$wikitUrl?>">SMALLWORLDS WIKI</a></li>
</ul>
</li>

<?}
	elseif ($blog_id == 13){?> <li class="active">
<a class="waves-attach active__overlay" data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapse  waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id=pages>
	<li><a class="swx" href="<?=swxUrl?>">SMALLWORLDS X</a></li>
	<li><a class="mmx" href="<?=$mmxUrl?>">MINIMUNDOS X</a></li>
	<li><a class="de" href="<?=$deUrl?>">SMALLWORLDS X DE</a></li>
	<li class="active__overlay_sub active"><a class="sw-wiki">SMALLWORLDS WIKI</a></li>
</ul>
</li>

<?}
else{?>
<li>
<a class=waves-attach data-target=#pages data-toggle=collapse><span class="icon icon-lg">pages</span>Our Communities</a>
<span class="menu-collapse-toggle collapsed waves-attach" data-target=#pages data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse" id=pages>
	<li><a class="<?php  if ($blog_id == 10){?>x-active<?}?> swx" href="<?=swxUrl?>">SMALLWORLDS X</a></li>
<li><a class="mmx soon" href="#<?/*=$mmxUrl*/?>">MINIMUNDOS X</a></li>
	<li><a class="de soon2"  href="#<?/*=$deUrl*/?>">SMALLWORLDS X DE</a></li>
	<li><a class="sw-wiki soon3"  href="#<?/*=$wikitUrl*/?>">SMALLWORLDS WIKI</a></li>
</ul>
</li>
<? }?>
<li>
<a class=waves-attach href="<?=$forumUrl?>" data-instant><span class="icon icon-lg">forum</span>Our Forum</a>
</li>
<li>
<a class=waves-attach data-target=#history data-toggle=collapse><span class="icon icon-lg">people</span>Our Team</a>
<span class="menu-collapse-toggle collapsed waves-attach" data-target="#history" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse" id="history">
	<li><a class="liam li-liam-trigger waves-attach">LIAM</a></li>
	<li><a class="appless li-appless-trigger waves-attach">APPLESS</a></li>
	<li><a class="justin li-justin-trigger waves-attach">JUSTIN</a></li>
</ul>
</li>
<li <?php  if ($blog_id == 9 & is_page( 2 ) ){?>><a href="#contact" data-dismiss="menu" class="waves-attach"><span class="icon icon-lg ">mail</span>Contact Us</a> <?} else echo'><a href="'.$devUrl .'#contact"  class="waves-attach"><span class="icon icon-lg ">mail</span>Contact Us</a>' ?> </li>
<? if ($visitor->isMemberOf(20)){?>
<hr>
<li>
<a class=waves-attach data-target=#donate data-toggle=collapse><span class="icon icon-lg">settings</span>Donator Options</a>
<span class="menu-collapse-toggle collapse waves-attach" data-target=#donate data-toggle=collapse><i class="icon menu-collapse-toggle-close">close</i><i class="icon menu-collapse-toggle-default">add</i></span>
<ul class="menu-collapse collapse in" id=donate>
<?php  if ($blog_id == 9){?><li class="active"><a class=waves-attach >Development</a></li><?} else {?><li><a class=waves-attach href="//splotus.com/dev/">Development</a></li><?}?>
<li><a class=waves-attach href=<?php echo imageUrl;?>>Images</a></li>
</ul>
</li>
<?	} ?>
<? if ($visitor->isMemberOf(18)){?>
<hr>
<li>
<a class=waves-attach data-target=#test data-toggle=collapse><span class="icon icon-lg">settings</span>Tester Options</a>
<span class="menu-collapse-toggle collapse waves-attach" data-target=#test data-toggle=collapse><i class="icon menu-collapse-toggle-close">close</i><i class="icon menu-collapse-toggle-default">add</i></span>
<ul class="menu-collapse collapse in" id=test>
<?php  if ($blog_id == 9){?><li class="active"><a class=waves-attach >Development</a></li><?} else {?><li><a class=waves-attach href="//splotus.com/dev/">Development</a></li><?}?>
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
<li><a class=waves-attach href=<?php echo siteurl;?>/test>Test</a></li>
<li><a class=waves-attach href=<?php echo $siteUrl;?>/archive>Archive</a></li>
<a class=waves-attach href=<?php echo $siteUrl;?>/backups>Site Backups</a>
<li><a class=waves-attach href=<?php echo $siteUrl;?>/cpanel>Host CPanel</a>
</ul>
</li>
<?	} ?>
<? if ($visitor[ 'user_id']){}  else { echo '<li><a data-dismiss="menu" class="waves-attach login-trigger"><span class="icon icon-lg ">account_circle</span>Login</li>'; }?> </div>
</div>
</nav>
<?
if ($blog_id == 9 ){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-home wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 10){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-swx "></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 13){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-wiki wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 14){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-de wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 15){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-mmx wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 5 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-current wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 7 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-idle wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 9 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-maker wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 11 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-island wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 13 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-second wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 15 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-jingle wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } elseif ($blog_id == 16 & is_page( 17 )){?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-candy wow slideInDown"></div>
<span></span>
<p></p>
</div></a><? } else {?><div class="overlay-m"><a data-toggle="menu" href="#menu"  <div class="logo logo-home wow slideInDown"><img src="<?=imageUrl;?>/splotus-logo/"/></div>
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
<?if ($blog_id == 10 & is_page( 6 ) ){?>
<?php include( get_template_directory() . '/template-parts/swx.php'); ?>
</div>
</div>
</div>
<? } else {?> </div>
</div>
</div><? }?>
<div id="main">
<? echo $apiRecord->profile['links']['permalink'];

 echo $xfUser['user_id'];