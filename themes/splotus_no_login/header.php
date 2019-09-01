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
$search = "";

$user_id = get_current_user_id();

$stylesArr = array('light','dark','glass');
if(isset($_POST['theme']) && in_array($_POST['theme'], $stylesArr)) {
	$style = $_POST['theme'];
	update_user_meta($user_id, 'color', $style);
	setcookie("notifyc", $style, time()+(5), "/", ".splotus.com",  0);
	if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != ""){
		$url = $_SERVER['HTTP_REFERER'];
	}else{
		$url = "https://splotus.com";
	}

	header("Location: ".$url);exit();
}

require get_template_directory() . '/inc/constants.php';
require_once get_template_directory() . '/inc/mobile-detect.php';
$detect = new Mobile_Detect;

function internoetics_fb_pagelikes($atts) {
  extract(shortcode_atts(array(
    'id' => 'OfficialSwx',
    'appid' => '246903328667856',
    'appsecret' => '0bde90b1030b22291215d495b8c7425f',
    'n' => 2,
    'cache' => 3600 * 24 * 1
  ), $atts));

 $fbcounthash = md5("$url.$cache.$appid.$appsecret.$n");
 $fbcountrecord = 'fblikes_' . $fbcounthash;
 $cachedposts = get_transient($fbcountrecord);
 if ($cachedposts !== false) {
 return $cachedposts;

  } else {

  $json_url ='https://graph.facebook.com/v2.10/' . $id . '?fields=fan_count&access_token=' . $appid . '|' . $appsecret;
  $json = file_get_contents($json_url);
  $json_output = json_decode($json);

  if($json_output->fan_count) {
   $fan_count = $json_output->fan_count;
   set_transient($fbcountrecord, $fan_count, $cache);
   return $fan_count;
    } else {
   return 'Unavailable';
  }
 }
}
add_shortcode('fbpagelikes','internoetics_fb_pagelikes');
	setcookie("fblikes", do_shortcode( '[fbpagelikes]' ), time()+(24*3600), "/", ".splotus.com",  0);


if ($xfId){
	setcookie("accessToken", $accessToken, time()+(3600*2), "/", ".splotus.com", true,  0);
	setcookie("csrf", $visitor['csrf_token_page'], time()+(3600*2), "/", ".splotus.com", true,  0);
	setcookie("xfId", $xfId, time()+(3600*12), "/", ".splotus.com", true,  0);
	setcookie("cred_balance", $visitor['adcredit'], time()+(24*3600), "/", ".splotus.com",  0);
	setcookie("alerts", $notification, time()+(24*3600), "/", ".splotus.com",  0);
	setcookie("conversations", $convos, time()+(24*3600), "/", ".splotus.com",  0);
}

require get_template_directory() . '/inc/constants.php';
$value = get_user_meta($user_id,  'notify', false );
$off = get_user_meta($user_id,  'notify', true );
$bgrf = get_user_meta($user_id,  'refresh', true );
if($value) {$dl_nodb = 'off';}
elseif($off == 'off') {$dl_nodb = 'off';}
else{}

?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="splotusApp">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Splotus">
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="820383837844-njj689g00vo3onkp7mb98offms9bodek.apps.googleusercontent.com">

<!-- Chrome, Firefox OS and Opera -->
<?php  if ($blog_id == 1){?><meta name="theme-color" content="<?php echo $material_color_green;?>"><?php }
elseif ($blog_id == 10){?><meta name="theme-color" content="<?php echo $material_color_blue;?>"><?php }
elseif ($blog_id == 13){?><meta name="theme-color" content="<?php echo $material_color_wiki;?>"><?php }
elseif ($blog_id == 14){?><meta name="theme-color" content="<?php echo $material_color_de;?>"><?php }
elseif ($blog_id == 15){?><meta name="theme-color" content="<?php echo $material_color_mmx;?>"><?php }
elseif ($blog_id == 2 & is_page( 8 )){?><meta name="theme-color" content="<?php echo $material_color_current;?>"><?php }
elseif ($blog_id == 2 & is_page( 10 )){?><meta name="theme-color" content="<?php echo $material_color_idle;?>"><?php }
elseif ($blog_id == 2 & is_page( 12 )){?><meta name="theme-color" content="<?php echo $material_color_maker;?>"><?php }
elseif ($blog_id == 2 & is_page( 14 )){?><meta name="theme-color" content="<?php echo $material_color_island;?>"><?php }
elseif ($blog_id == 2 & is_page( 16 )){?><meta name="theme-color" content="<?php echo $material_color_second;?>"><?php }
elseif ($blog_id == 2 & is_page( 18 )){?><meta name="theme-color" content="<?php echo $material_color_jingle;?>"><?php }
elseif ($blog_id == 2 & is_page( 20 )){?><meta name="theme-color" content="<?php echo $material_color_candy;?>"><?php } else{?><meta name="theme-color" content="<?php echo $material_color_green;?>"><?php }?>

<!-- Windows Phone -->
<?php  if ($blog_id == 1){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_green;?>"><?php }?>
<?php  if ($blog_id == 10){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_blue;?>"><?php }?>
<?php  if ($blog_id == 13){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_wiki;?>"><?php }?>
<?php  if ($blog_id == 14){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_de;?>"><?php }?>
<?php  if ($blog_id == 15){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_mmx;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 8 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_current;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 10 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_idle;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 12 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_maker;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 14 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_island;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 16 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_second;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 18 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_jingle;?>"><?php }?>
<?php  if ($blog_id == 2 & is_page( 20 )){?><meta name="msapplication-navbutton-color" content="<?php echo $material_color_candy;?>"><?php }?>
<!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="https://splotus.com/favicon.ico">
<!-- iOS Safari -->
<link rel="apple-touch-icon" sizes="192x192" href="<?php echo $imageUrl;?>/touch-icon.png">
<?php wp_head(); ?>

<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-toast/paper-toast.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-dialog/paper-dialog.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-dialog-scrollable/paper-dialog-scrollable.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-button/paper-button.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-tooltip/paper-tooltip.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/iron-icons/iron-icons.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-icon-button/paper-icon-button.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-styles/paper-styles.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-menu-button/paper-menu-button.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/web-animations-js/web-animations-next.min.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-item/paper-item.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-listbox/paper-listbox.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/2.6.0.2/lib/paper-dropdown-menu/paper-dropdown-menu.html">

</head>
<?php  if ($blog_id == 2 & is_page( 8 )){?><body class="landing page-transparent bolt" data-no-instant>
<?php } elseif ($blog_id == 2 & is_page( 10 )){?><body class="landing page-transparent idle" data-no-instant>
<?php } elseif ($blog_id == 2 & is_page( 12 )){?><body class="landing page-transparent game-dev" data-no-instant>
<?php } elseif ($blog_id == 2 & is_page( 14 )){?><body class="landing page-transparent island-builder" data-no-instant>
<?php } elseif ($blog_id == 2 & is_page( 16 )){?><body class="landing page-transparent thirty" data-no-instant>
<?php } elseif ($blog_id == 2 & is_page( 18 )){?><body class="landing page-transparent jingle-tap" data-no-instant>
<?php } elseif ($blog_id == 2 & is_page( 20 )){?><body class="landing page-transparent whack" data-no-instant>
<?php } else {?>
<body ng-controller="Main" data-no-instant>
<?php }?>
<div class="signal"></div>
<div id="top"></div>
<!-- Header -->
 <div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-header load">
      <div  id="header" class="splotus-header mdl-layout__header mdl-layout--transparent">
        <div class="mdl-layout__header-row">
          <div class="splotus-title mdl-layout-title">
<?php if ($blog_id == 1 ){?> <div class="logo logo-home wow slideInDown"></div>
<?php } elseif ($blog_id == 10){?><div class="logo logo-swx "></div>
<?php } elseif ($blog_id == 13){?> <div class="logo logo-wiki wow slideInDown"></div>
<?php } elseif ($blog_id == 14){?> <div class="logo logo-de wow slideInDown"></div>
<?php } elseif ($blog_id == 15){?> <div class="logo logo-mmx wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 8 )){?> <div class="logo logo-current wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 10 )){?> <div class="logo logo-idle wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 12 )){?> <div class="logo logo-maker wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 14 )){?> <div class="logo logo-island wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 16 )){?> <div class="logo logo-second wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 18 )){?> <div class="logo logo-jingle wow slideInDown"></div>
<?php } elseif ($blog_id == 2 & is_page( 20 )){?> <div class="logo logo-candy wow slideInDown"></div>
<?php } else {?> <div class="logo logo-home wow slideInDown"></div>
<?php }?>
          </div>
          <!-- Search -->
          <div class="splotus-header-spacer mdl-layout-spacer"></div>
          <div class="splotus-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <form id="search" class="mdl-textfield__expandable-holder" method="POST">
              <input class="mdl-textfield__input" type="text" id="search-field" name="q" autocomplete="off"  value="<?php echo $search;?>">
            </form>
          </div>
<paper-tooltip for="search">Search for items or members.</paper-tooltip>
         <div class="splotus-navigation-container">
            <nav class="splotus-navigation mdl-navigation">
<!--
<paper-menu-button>
              <a class="mdl-navigation__link dropdown-trigger<? if ($blog_id == 10 & is_front_page()){?> active<?}?>" slot="dropdown-trigger">Communities</a>
  <paper-listbox slot="dropdown-content">
  <? if ($blog_id != 10) {?>
    <a href="<?=$swxUrl?>" tabindex="-1">
    <paper-item class="mdl-menu__item" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>SmallWorlds X</paper-item></a><? } else {?><paper-item class="--paper-item-selected">SmallWorlds X</paper-item><?}?>
    <a href="<?=$wikiUrl?>" tabindex="-1">
    <paper-item class="mdl-menu__item" style="opacity: 1;     font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>SmallWorlds Wiki</paper-item></a>
    <a href="<?=$sforumUrl?>" tabindex="-1">
    <paper-item class="mdl-menu__item" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Our Forum</paper-item></a>
  </paper-listbox>
</paper-menu-button>
-->
<paper-menu-button>
              <a class="mdl-navigation__link dropdown-trigger<? if ($blog_id == 2){?> active<?}?>" slot="dropdown-trigger">Games</a>
  <paper-listbox slot="dropdown-content">
  <? if ($blog_id != 2 & !is_page(8 )) {?>
    <a href="<?=$siteUrl?>/games/current-tycoon" class="current ctm" tabindex="-1">
    <paper-item class="mdl-menu__item current ctm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Current Tycoon</paper-item></a><?} elseif ($blog_id == 2 & !is_page(8)) {?><a href="<?=$siteUrl?>/games/current-tycoon" class="current ctm" tabindex="-1">
    <paper-item class="mdl-menu__item current ctm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Current Tycoon</paper-item></a><? } else {?><paper-item class="--paper-item-selected current ctm">Current Tycoon</paper-item><?}?>
    <? if ($blog_id != 2 & !is_page(10)) {?>
    <a href="<?=$siteUrl?>/games/idle-city" class="idle icm" tabindex="-1">
    <paper-item class="mdl-menu__item idle icm" style="opacity: 1; font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Idle City</paper-item></a><? } elseif ($blog_id == 2 & !is_page(10)) {?><a href="<?=$siteUrl?>/games/idle-city"  tabindex="-1">
    <paper-item class="mdl-menu__item idl icm" style="opacity: 1; font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Idle City</paper-item></a><?} else {?><paper-item class="--paper-item-selected idle icm">Idle City</paper-item><?}?>
     <? if ($blog_id != 2 & !is_page(12 )) {?>
    <a href="<?=$siteUrl?>/games/idle-game-dev" class="idle-dev igm" tabindex="-1">
    <paper-item class="mdl-menu__item idle-dev igm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Idle Game Dev</paper-item></a><?} elseif ($blog_id == 2 & !is_page(12)) {?><a href="<?=$siteUrl?>/games/idle-game-dev" class="idle-dev igm" tabindex="-1">
    <paper-item class="mdl-menu__item idle-dev igm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Idle Game Dev</paper-item></a><? } else {?><paper-item class="--paper-item-selected idle-dev igm iron-selected">Idle Game Dev</paper-item><?}?>
     <? if ($blog_id != 2 & !is_page(14)) {?>
    <a href="<?=$siteUrl?>/games/island-builder" class="island ibm" tabindex="-1">
    <paper-item class="mdl-menu__item island ibm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Island Builder</paper-item></a><?} elseif ($blog_id == 2 & !is_page(14)) {?><a href="<?=$siteUrl?>/games/island-builder" class="island ibm" tabindex="-1">
    <paper-item class="mdl-menu__item island ibm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Island Builder</paper-item></a><? } else {?><paper-item class="--paper-item-selected island ibm">Island Builder</paper-item><?}?>
     <? if ($blog_id != 2 & !is_page(16)) {?>
    <a href="<?=$siteUrl?>/games/30-second-tap/" class="sec stm" tabindex="-1">
    <paper-item class="mdl-menu__item sec stm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>30 Second Tap</paper-item></a><?} elseif ($blog_id == 2 & !is_page(16)) {?><a href="<?=$siteUrl?>/games/30-second-tap/" class="sec stm" tabindex="-1">
    <paper-item class="mdl-menu__item sec stm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>30 Second Tap</paper-item></a><? } else {?><paper-item class="--paper-item-selected sec stm">30 Second Tap</paper-item><?}?>
     <? if ($blog_id != 2 & !is_page(18)) {?>
    <a href="<?=$siteUrl?>/games/jingle-tapper/" class="jingle jtm" tabindex="-1">
    <paper-item class="mdl-menu__item jingle jtm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Jingle Tapper</paper-item></a><?} elseif ($blog_id == 2 & !is_page(18)) {?><a href="<?=$siteUrl?>/games/jingle-tapper/" class="jingle jtm" tabindex="-1">
    <paper-item class="mdl-menu__item jingle jtm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Jingle Tapper</paper-item></a><? } else {?><paper-item class="--paper-item-selected jingle jtm">Jingle Tapper</paper-item><?}?>
     <? if ($blog_id != 2 & !is_page(20)) {?>
    <a href="<?=$siteUrl?>/games/candy-whacker/" class="candy cwm" tabindex="-1">
    <paper-item class="mdl-menu__item candy cwm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Candy Whacker</paper-item></a><?} elseif ($blog_id == 2 & !is_page(20)) {?><a href="<?=$siteUrl?>/games/candy-whacker/" class="candy cwm" tabindex="-1">
    <paper-item class="mdl-menu__item candy cwm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;"><paper-ripple></paper-ripple>Candy Whacker</paper-item></a><? } else {?><paper-item class="--paper-item-selected candy cwm">Candy Whacker</paper-item><?}?>
  </paper-listbox>
</paper-menu-button>
           <a class="mdl-navigation__link" href="<?=get_site_url(1)?>/wiki/">Wiki</a>
              <? if ($blog_id == 1 & is_page( 45 ) ){?><a class="mdl-navigation__link active" >Who We Are</a><?} else {?><a class="mdl-navigation__link" href="<?=get_site_url(1)?>/about/">Who We Are</a><?}?>
              <a class="mdl-navigation__link" onclick="contact.open()">Contact</a>
            </nav>
          </div>

          <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="communities">
              <li onclick="themeToggle()" class="mdl-menu__item"><i class="list material-icons">color_lens</i>Change Theme</li>
				<a class="mdl-menu__item mdl-menu__item--full-bleed-divider" href="//splotus.com/forum/chat/fullpage" target="chatWindowPopup" onclick="chatOpenPopup(); return false;" data-instant><i class="list material-icons">chat</i>Chat</a>
				<a class="mdl-menu__item" href="<?php echo wp_logout_url( home_url() )?>"><i class="list material-icons">power_settings_new</i>Logout</a>
            </ul>
          <!-- Mobile logo  -->
          <span class="splotus-mobile-title mdl-layout-title">
            <div class="splotus-logo-image-mobile" ></div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 50 50">
			<mask id="splotus-logo-mobile">
			<image id="img" xlink:href="https://images.splotus.com/splotus-logo-mdl" x="0" y="0" height="28px" width="140px" />
			</mask>
			</svg>
          </span>

          <?php global $blog_id;  $current_user = wp_get_current_user(); global $userdata;  $current_user=wp_get_current_user(); if ( is_user_logged_in() ){ //logged in
?>          	 	<?
}?>
</div>
</div>
<!-- Nav Drawer -->

      <div class="splotus-drawer mdl-layout__drawer">
        <header class="splotus-drawer-header">
          <?php  if ($blog_id == 1){ $page='home' ; echo '<a class="menu-logo"><img class="splotus-logo-image-drawer" src="'. $imageUrl .'/splotus-logo-n"/></a>';} elseif ($blog_id == 10){ $page='swx' ; echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-b"/></a>';} elseif ($blog_id == 13){echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-mobile-wiki"/></a>';}  elseif ($blog_id == 14){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-mobile-de"/></a>';} elseif ($blog_id == 15){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-mobile-mmx"/></a>';} elseif ($blog_id == 2 & is_page( 8 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-current"/></a>';} elseif ($blog_id == 2 & is_page( 10 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-idle"/></a>';} elseif ($blog_id == 2 & is_page( 12 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-maker"/></a>';} elseif ($blog_id == 2 & is_page( 14 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-island"/></a>';} elseif ($blog_id == 2 & is_page( 16 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-second"/></a>';} elseif ($blog_id == 2 & is_page( 18 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-jingle"/></a>';} elseif ($blog_id == 2 & is_page( 20 )){ echo '<a class="menu-logo"><img src="'. $imageUrl .'/splotus-logo-m-candy"/></a>';} else {echo'<a class="menu-logo" href="'. site_url().'"><img src="'. $imageUrl .'/splotus-logo-n"/></a>';} ?>
        </header>
<nav class="mdl-navigation">
	<ul class="nav">
		<li <?php  if ($blog_id == 1 & is_front_page()){ $page='home' ; echo 'class="active"><a class="mdl-navigation__link active"><i class="list material-icons">home</i>Home</a>';} else echo'><a class="mdl-navigation__link" href="'.get_site_url(1) .'"><i class="list material-icons">home</i>Home</a>
'?> </li>

<li><? if ($blog_id == 1 & is_page( 45 ) ){?><a class="mdl-navigation__link active"><i class="list material-icons">format_align_justify</i>Who We Are</a><?} else {?><a href="<?=get_site_url(1)?>/about/"  class="mdl-navigation__link"><i class="list material-icons">format_align_justify</i>Who We Are</a><?}?></li>
<?php  if ($blog_id == 2){?>
		<li class="active"><a class="mdl-navigation__link active__overlay" data-target=#game data-toggle=collapse><i class="list material-icons">pages</i></span>Our Games</a>

			<span class="menu-collapse-toggle collapse  mdl-navigation__link" href=#game data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>

					<ul class="menu-collapse collapse in" id=game><?php } else {?>

						<li><a class=mdl-navigation__link data-target="#game" data-toggle="collapse"><i class="list material-icons">games</i>Our Games</a>
							<span class="menu-collapse-toggle collapsed mdl-navigation__link" data-target="#game" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span><ul class="menu-collapse collapse" id="game">
<?php }?>				<li <?php  if ($blog_id == 2 & is_page( 8 )){?> class="active active__overlay_sub"><a class="current ctm">Current Tycoon</a></li><?php } else {?>><a class="current ctm mdl-navigation__link" href="<?=get_site_url(2)?>/current-tycoon/">Current Tycoon</a></li><?php } ?>

						<li <?php  if ($blog_id == 2 & is_page( 10 )){?> class="active active__overlay_sub"><a class="idle-city icm">Idle City</a></li><?php } else {?>><a class="idle-city icm mdl-navigation__link" href="<?=get_site_url(2)?>/idle-city/">Idle City</a></li> <?php }?>

						<li <?php  if ($blog_id == 2 & is_page( 12 )){?> class="active active__overlay_sub"><a class="idle-dev igm">Idle Game Dev</a></li><?php } else {?>><a class="idle-dev igm mdl-navigation__link" href="<?=get_site_url(2)?>/idle-game-dev/">Idle Game Dev</a></li><?php } ?>

						<li <?php  if ($blog_id == 2 & is_page( 14 )){?> class="active active__overlay_sub"><a class="island ibm">Island Builder</a></li><?php } else {?>><a class="island ibm mdl-navigation__link" href="<?=get_site_url(2)?>/island-builder/">Island Builder</a></li><?php } ?>

						<li <?php  if ($blog_id == 2 & is_page( 16 )){?> class="active active__overlay_sub"><a class="sec stm">30 Second Tap</a></li><?php } else {?>><a class="sec stm mdl-navigation__link" href="<?=get_site_url(2)?>/30-second-tap/">30 Second Tap</a></li><?php } ?>

						<li <?php  if ($blog_id == 2 & is_page( 18 )){?> class="active active__overlay_sub"><a class="jingle jtm">Jingle Tapper</a></li><?php } else {?>><a class="jingle jtm mdl-navigation__link" href="<?=get_site_url(2)?>/jingle-tapper/">Jingle Tapper</a></li><?php } ?>

						<li<?php  if ($blog_id == 2 & is_page( 20 )){?> class="active active__overlay_sub"><a class="candy cwm">Candy Whacker</a></li><?php } else {?>><a class="candy cwm mdl-navigation__link" href="<?=get_site_url(2)?>/candy-whacker/">Candy Whacker</a></li><?php } ?>

						</li>
					</ul>
<li <?php  if ($blog_id == 1 & is_page( 2 ) ){?>><a onclick="contact.open()" data-dismiss="menu" class="mdl-navigation__link"><i class="list material-icons">mail</i>Contact Us</a> <?php } else echo'><a onclick="contact.open()"  class="mdl-navigation__link"><i class="list material-icons">mail</i>Contact Us</a>' ?> </li>


<?php //Staff options
if ( current_user_can( 'manage_options' ) & ($visitor['user_id']) ) { ?>
<hr>
<li>
<a class="mdl-navigation__link" data-target="#staff" data-toggle="collapse"><i class="list material-icons">settings</i>Staff Options</a>
<span class="menu-collapse-toggle collapse mdl-navigation__link" data-target=#staff data-toggle=collapse><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span>
<ul class="menu-collapse collapse in" id="staff">
<li><a class=mdl-navigation__link  href=<?php echo get_site_url(); ?>/wp-admin/>Site Admin</a></li>
<li><a class=mdl-navigation__link href=<?php echo $forumUrl;?>/admin.php>Forum Admin</a></li>
<li><a class=mdl-navigation__link href=<?php echo $siteUrl;?>/test>Test</a></li>
<li><a class=mdl-navigation__link href=<?php echo $siteUrl;?>/archive>Archive</a></li>
<a class=mdl-navigation__link href=<?php echo $siteUrl;?>/backups>Site Backups</a>
<li><a class=mdl-navigation__link href=<?php echo $siteUrl;?>/cpanel>Host CPanel</a>
</ul>
</li>
<?php } ?>



        </nav>
      </div>
      <? if ($visitor['user_id']){} elseif ($detect->isMobile() ) {?>
      <div class="mdl-layout__drawer-right-login">
	       <header class="splotus-drawer-header--cover" <?php if ($visitor['profile_cover_image'] == 1) {?>style="background: url(<?php echo $coverImage?>) no-repeat center;webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-color: hsla(0, 0%, 0%, 0.4);
    background-blend-mode: overlay;"<?php } elseif ($visitor['profile_cover_image'] == 0){ if ($visitor['profile_cover_color'] != '0'){?>style="background:<?php echo $visitor['profile_cover_color']?>"<?php }}?>>
  <img src="" class="avatar-img-drawer">

        </header>
<div class="login_panel"> <div class="login-mobile"><p class="mdl-top__item mdl-menu__item--full-bleed-divider tabs_title" style="margin:0">Login</p>
   <div class=" usr_icons">
        <form id="appLogin" style="margin:0"><p class='status material-icons mdi mdi-information invalid' style="margin:0;display:none;"></p>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="username">Username</label> <input class="mdl-textfield__input" name="username" type="text" id="username" autocomplete="given-name">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="password">Password</label> <input class="mdl-textfield__input" type="password" name="pwd" id="password">          </div>
            <div id="fb-root"></div>
	      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-facebook" value="Sign in using Facebook" style="float:left;width: 110px !important;" onclick="checkFacebookLogin();"><i class="fa fa-facebook-official"></i>Sign In</a>
          <a onclick="startApp();"  id="customBtn" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-white" style="float:right;width: 110px !important;"><i class="icons8-google"></i>Sign In</a><br/><br/>
              <button id="loginSubmit" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title status_post btn_special btn-status btn-flat mdl-navigation__link waves-effect">Sign In</button>
<input name="mfacode" value="" id="mfacode" type="hidden">
<input name="provider" value="" id="prov" type="hidden">
  </form>
<paper-button class="mobile-forgot" style="float:left;">Forgot?</paper-button>
<paper-button class="mobile-register" style="float:right;">Register</paper-button></div></div>

<div class="register-mobile" style="display:none;"><p class='mdl-top__item mdl-menu__item--full-bleed-divider tabs_title' style='margin:0'>Register</p><div class=' usr_icons'><form id='register' class='ajax-auth' action='register' method='post'><p class='status material-icons mdi mdi-information' style="margin:0;"></p><? wp_nonce_field('ajax-register-nonce', 'signonsecurity');?><div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><label class='mdl-textfield__label' for='signonname'>Username</label> <input class='mdl-textfield__input' name='signonname' id='signonname' type='text' required='' autocomplete="given-name"></div><div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><label class='mdl-textfield__label' for='email'>Email</label> <input class='mdl-textfield__input' name='email' id='email' type='email' required='' autocomplete="email"></div><div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><label class='mdl-textfield__label' for='password'>Password</label> <input class='mdl-textfield__input' name='signonpassword' id='signonpassword' type='password' required=''></div><div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><label class='mdl-textfield__label' for='password2'>Confirm Password</label> <input class='mdl-textfield__input' name='password2' id='password2' type='password' required=''></div><button href='#' type='submit' class='mdl-menu__item--full-bleed-divider tabs_title status_post btn_special btn-status btn-flat mdl-navigation__link waves-effect'>Register</button></form><paper-button class='mobile-forgot' style='float:left;'>Forgot?</paper-button><paper-button class='mobile-login' style='float:right;'>Login</paper-button></div></div>

<div class="forgot-mobile" style="display:none;"><p class='mdl-top__item mdl-menu__item--full-bleed-divider tabs_title' style='margin:0'>Forgot Password</p><div class=' usr_icons'><form id='forgot_password' method='post' style='margin:0'><p class='status material-icons mdi mdi-information fp_msg' style="margin:0;display:none;"></p><div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label'><input class='mdl-textfield__input' type='text' name='username_email' id='user_login' autocomplete='email'><label class='mdl-textfield__label' for='user_login'>Username or Email</label></div><div class="g-recaptcha" data-sitekey="6LfPswoTAAAAAJ-bWWqGV6ca6flYsk8cIZNGWF5x"></div><button href='#' type='submit' onclick="forgot_password()" class='mdl-menu__item--full-bleed-divider tabs_title status_post btn_special btn-status btn-flat mdl-navigation__link waves-effect' value='submit'>Submit</button></form><paper-button class='mobile-login' style='float:right;'>Login</paper-button></div></div>

</div>
      </div><?

      }?>
            <div class="mdl-layout__obfuscator-right-login"></div>



      <?php // if ( is_user_logged_in() ){$coverImage = ''.$sforumUrl.'/data/covers/profile/l/0/'.$user_id.'.jpg';
	      // include(get_template_directory() . '/core/tabs.php');
      ?>


		       <?php // } ?>

      <div class="mdl-layout__obfuscator-right"></div>

      <div class="splotus-content mdl-layout__content" id="main">

<?php if ($blog_id == 1 & is_page( 6 ) ){?>
<?php include( get_template_directory() . '/template-parts/slides.php'); ?>

<?php }?>
<?php if ($blog_id == 10 & is_page( 6 ) ){?>
<?php include( get_template_directory() . '/template-parts/swx.php'); ?>

<?php } else {?> <?php }?>
