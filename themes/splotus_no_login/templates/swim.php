<?php
	/*
Template Name: swim
*/
require get_template_directory() . '/inc/init.php';
              if ($visitor->isMemberOf(24)){

$swsid = get_user_meta($user_id,  'swid', true)[0]; //swid
$sswid = get_user_meta($user_id,  'sswid', true)[0]; // sswid
$avatarname = 'OPTIONAL';
$avatarid = 'OPTIONAL BUT MAY BE NEEDED FOR SOME MODS';
$gametype = get_user_meta($user_id,  'gametype', true);  // Game you want to hack
$proxy 	= ''; // leave blank? idk
if (get_user_meta($user_id,  'gametype', true) == "minimundos.com.br"){$gameversion = "1277";} else {
$gameversion = "4929";}
include_once(get_template_directory() .'/amf/functions.php');


get_header();

$user_id = get_current_user_id();
?>
	<?	//login user
		if (get_user_meta($user_id,  'sswid', true) == null){?>
		<div id="err"></div>
	<div class="mdl-tabs mdl-js-tabs">
            <div class="mdl-tabs__tab-bar" >
               <a href="#me"  class="mdl-tabs__tab swipe-tab is-active"><i class="list material-icons">account_circle</i></a>
            </div>
		<div class="tabs_panels" id="tabs_panels">
			<div class="splotus">
	<div class="fff" style="background-color:#fff;">
            <div class="mdl-tabs__panel is-active" id="me">
<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="do">
		  	  <span class="heading"><h2>Login</h2></span>
				<p>Login to your SmallWorlds or MiniMundos Account, We promise to keep this confidential.</p>

<form id="gameLogin" class="heading" method="post" style="margin:0">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="username">Email</label> <input class="mdl-textfield__input" name="email" type="email" id="username" autocomplete="off">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <label class="mdl-textfield__label" for="password">Password</label> <input class="mdl-textfield__input" type="password" name="pwd" id="password">
          </div>
         <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="smallworlds.com" checked>
  <span class="mdl-radio__label">SmallWorlds</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="minimundos.com.br">
  <span class="mdl-radio__label">MiniMundos</span>
</label>
<!-- <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
  <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="deploy-sw.com">
  <span class="mdl-radio__label">Deploy</span>
</label> -->
              <button onclick="gameLogin()" id="loginSubmit" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:60%;">Sign In</button>
  </form>

<br /><br />

			</div>
</div>




            </div>
	</div></div>
		</div></div>

	<?} else {?>
<div class="fff " style="background-color:#fafafa;height:100%;">

<div class="mdl-tabs mdl-js-tabs">
            <div class="mdl-tabs__tab-bar" >
               <a href="#me"  class="mdl-tabs__tab swipe-tab is-active"><i class="list material-icons">account_circle</i></a>
              <a href="#missions" class="mdl-tabs__tab"><i id="convo_icon" class="list material-icons mdl-badge-sm mdl-badge--overlap">poll</i></a>
               <a href="#search" class="mdl-tabs__tab"><i id="alert_icon" class="list material-icons mdl-badge-sm mdl-badge--overlap">public</i></a>
               <a href="#toolbox" class="mdl-tabs__tab" ><i class="list material-icons">settings</i></a>
            </div>



            <div class="tabs_panels" id="tabs_panels">
            <div class="mdl-tabs__panel is-active" id="me">
			<? //echo get_user_meta($user_id,  'swid', true)[0] ."<br/>";
				//echo get_user_meta($user_id,  'sswid', true)[0] ."<br/>";
				//echo get_user_meta($user_id,  'gametype', true) ."<br/>";
				//echo get_user_meta($user_id,  'ucl', true) ."<br/>";
				//echo get_user_meta($user_id,  'uaccid', true) ."<br/>";
				//echo get_user_meta($user_id,  'uid', true) ."<br/>";
				//echo get_user_meta($user_id,  'avatars', true)[0] ."<br/>";
				//echo get_user_meta($user_id,  'avatars', true)[1] ."<br/>";
				//echo get_user_meta($user_id,  'avatars', true)[2] ."<br/>";
				$snap_url = get_user_meta($user_id,  'usnap', true);
				$avatar_extra_1 = get_user_meta($user_id,  'avatars', true)[1];
				//echo $avatar_1 = apiGet("avatar", $swsid, $avatar_extra_1);
			?>
			<div class="mdl-grid">
				<div class='heading mdl-cell mdl-cell--12-col'><p>Choose which avatar to mod.</p></div>
				<?php $swsid = get_user_meta($user_id,  'swid', true)[0]; //swid
$sswid = get_user_meta($user_id,  'sswid', true)[0]; // sswid
$avatarname = 'OPTIONAL';
$avatarid = 'OPTIONAL BUT MAY BE NEEDED FOR SOME MODS';
$gametype = get_user_meta($user_id,  'gametype', true);  // Game you want to hack
$proxy 	= ''; // leave blank? idk
if (get_user_meta($user_id,  'gametype', true) == "minimundos.com.br"){$gameversion = "1277";} else {
$gameversion = "4929";} foreach (get_user_meta($user_id,  'avatars', true) as $avatars){
					echo avatarDetail($avatars);
				}?>

		<div class="heading mdl-cell mdl-cell--6-col">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
            <input class="mdl-textfield__input" type="text" class="gender_input"  id="gender" value="" name="gender" readonly tabIndex="-1">
            <label for="gender" class="mdl-textfield__label">Gender</label>
            <ul for="gender" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                <li class="mdl-menu__item">Male</li>
                <li class="mdl-menu__item">Female</li>
                <li class="mdl-menu__item">Dog</li>
                <li class="mdl-menu__item">Cat</li>
            </ul>
        </div>
<button href="#" onclick="changeGender()" id="genderBtn" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:20%;">Send</button></div></div>

            </div>
             <div class="tabs_panels" id="tabs_panels">
			 <div class="mdl-tabs__panel" id="missions">
		<div class="mdl-grid">
		<div class="heading mdl-cell mdl-cell--6-col">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
            <input class="mdl-textfield__input" type="text" class="path_input"  id="path" value="" name="path" readonly tabIndex="-1">
            <label for="path" class="mdl-textfield__label">Mission Path</label>
            <ul for="path" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                <li class="mdl-menu__item">Artist</li>
                <li class="mdl-menu__item">Social</li>
                <li class="mdl-menu__item">Explorer</li>
                <li class="mdl-menu__item">Gamer</li>
            </ul>
        </div>
<button href="#" onclick="sendMissions()" id="pathBtn" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:20%;">Send</button>
<style type="text/css">
	#clockdiv{
    font-family: sans-serif;
    color: #000;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
    display:none;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    display: inline-block;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
}
.btn-status[disabled] {
    background: #e0e0e0!important;}
</style>
<br /><? if (get_user_meta($user_id,  'gametype', true) == "smallworlds.com" xor get_user_meta($user_id,  'gametype', true) == "deploy-sw.com"){?>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
            <input class="mdl-textfield__input" type="text" class="old_input"  id="old" value="" name="old" readonly tabIndex="-1">
            <label for="old" class="mdl-textfield__label">Old Mission Rewards</label>
            <ul for="old" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
	            <!--<li class="mdl-menu__item">500 Gold</li> -->
                <li class="mdl-menu__item">Reindeer Antlers</li>
                <li class="mdl-menu__item">SW Retro T-Shirt</li>
                <li class="mdl-menu__item">Cupid Emote</li>
                <li class="mdl-menu__item">Berlin Wall</li>
               <!-- <li class="mdl-menu__item">VIP Halo</li>
                <li class="mdl-menu__item">VIP Surface</li>
                <li class="mdl-menu__item">VIP Emote</li>-->
                <li class="mdl-menu__item">Blade Production Video Camera</li>
                <!--<li class="mdl-menu__item">Holdable Easter Eggs</li>-->
                <li class="mdl-menu__item">test</li>
            </ul>
        </div>
<button href="#" onclick="oldMissions()" id="oldBtn" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:20%;">Send</button><? } ?>
		</div>
		<div class="heading mdl-cell mdl-cell--6-col" >
			<?
$swsid = get_user_meta($user_id,  'swid', true)[0]; //swid
$sswid = get_user_meta($user_id,  'sswid', true)[0]; // sswid
$avatarname = 'OPTIONAL';
$avatarid = 'OPTIONAL BUT MAY BE NEEDED FOR SOME MODS';
$gametype = get_user_meta($user_id,  'gametype', true);  // Game you want to hack
$proxy 	= ''; // leave blank? idk
			if (get_user_meta($user_id,  'gametype', true) == "minimundos.com.br"){$gameversion = "1277";} else {
$gameversion = "4929";}
				 if (findmissions(false) == 0){?><button href="#" onclick="completeMissions()"type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" id="complete" style="width:50%;" disabled>Complete All <span id="mission-count"></span> Active Missions</button> <? } else {?><button href="#" onclick="completeMissions()"type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" id="complete" style="width:50%;">Complete All <span id="mission-count"><?=findmissions(false);?></span> Active Missions</button><? }?>
				 <input type="hidden" name="path" value="Artist" id="allPaths-artist"><input type="hidden" name="path" value="Social" id="allPaths-social"><input type="hidden" name="path" value="Explorer" id="allPaths-explorer"><input type="hidden" name="path" value="Gamer" id="allPaths-gamer">
				 <button href="#" onclick="completeAll()"type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" id="completeall" style="width:50%;">Automate all Missions</button>
<br />
<div id="clockdiv">

  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

		</div>
		</div>
 <div class="heading mdl-cell mdl-cell--6-col">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
            <input class="mdl-textfield__input" type="text" id="plant" value="" name="plant" readonly tabIndex="-1">
            <label for="plant" class="mdl-textfield__label">Auto Plant</label>
            <ul for="plant" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                <li class="mdl-menu__item">Exotic Hybrid</li>
                <li class="mdl-menu__item">Dread Rose</li>
                <li class="mdl-menu__item">Morning Star</li>
                <li class="mdl-menu__item">Azure Trumpet</li>
            </ul>
        </div>
        <button href="#" onclick="sendPlants()" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:20%;">Send</button>
</div>
<!-- <div class="heading mdl-cell mdl-cell--6-col" ><input type="hidden" name="harvest" value="true" id="harvest">
			<button href="#" onclick="harvestAll()"type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect"  style="width:50%;">Harvest All</button></div>-->
			 </div>

             </div>


<div class="mdl-tabs__panel" id="search">
	<div class="mdl-grid">
		<div class="heading mdl-cell mdl-cell--6-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="iss">
            <label class="mdl-textfield__label" id="iss" for="avtrsrch">Search for Avatars by Name</label> <input class="mdl-textfield__input" name="avatarsrch" value="" id="avtrsrch" type="text" required>
          	</div>
          	<button href="#" onclick="searchAvtrName()" id="oldBtn" type="submit" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:20%;">Search</button>
		</div>
		<!-- <div class="heading mdl-cell mdl-cell--6-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
            <input class="mdl-textfield__input" type="text" id="spaces" value="" name="spaces" readonly tabIndex="-1">
            <label for="spaces" class="mdl-textfield__label">Purchase any Space (plz test)</label>
            <ul for="spaces" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                <li class="mdl-menu__item">Wonderland (100 Gold)</li>
                <li class="mdl-menu__item">---</li>
                <li class="mdl-menu__item">---</li>
                <li class="mdl-menu__item">---</li
            </ul>
        </div>
        <button href="#" onclick="purchaseSpace()" type="submit" id="purchase" class="mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect" style="width:20%;">Purchase</button>
	</div> -->
	</div>
</div>

            <div class="mdl-tabs__panel" id="toolbox">
	           <form id="gameLogout" class="heading" method="post" style="margin:0"><input type="hidden" name="logout" value="true"><button onclick="gameLogout()" style="width:40%;" class="mdl-menu__item--full-bleed-divider tabs_title btn_special btn-flat mdl-navigation__link waves-effect btn-status">Logout</button> <p>(This will not log you out of the game!)</p></form>

            </div>
            </div>
</div>

<? }?>


</div>



  <?


//findmissions(true); //completes all current missions

//viewmissions("artist"); //Gives you Missions
//viewmissions("social");
//viewmissions("gamer");
//viewmissions("explorer");

//findavatarpots("exotichybrid"); // I'll add more plants soon :)
//findavatarpots("dreadrose");
//findavatarpots("morningstar");
//findavatarpots("azuretrumpet");
//harvestAll();
//echo searchspaceitems("9cbfeea000220a8a7e11f87804b4e8cc");
//echo altavatars(19);
//echo searchavatarbyname("dan SmallWorlds");
//echo viewinventory();

//loginUser("peza@cmail.club", "1234", "", "minimundos.com.br", false); // for the future. ignore this for now.
get_footer();

 }

elseif ( ($visitor['user_id']) ) { get_header();?><!--<meta http-equiv="refresh" content="7;url=https://forum.splotus.com/adcreditshop-categories/miscellaneous.8/view" />--><? $user=$visitor[ 'username']; include( get_template_directory() . '/core/permission-error.php');  get_footer();?> <script src="<?=network_home_url();?>js/dialog-permission.js"></script><?} else {get_header();?> <style>.close{display:none;}</style><? get_footer();?> <script type="text/javascript">loginDialog();</script><?}
?>