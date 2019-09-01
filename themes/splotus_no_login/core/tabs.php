<!-- User Drawer -->
      <div class="mdl-layout__drawer-right">
	       <header class="splotus-drawer-header--cover" <?php if ($visitor['profile_cover_image'] == 1) {?>style="background: url(<?php echo $coverImage?>) no-repeat center;webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-color: hsla(0, 0%, 0%, 0.4);
    background-blend-mode: overlay;"<?php } elseif ($visitor['profile_cover_image'] == 0){ if ($visitor['profile_cover_color'] != '0'){?>style="background:<?php echo $visitor['profile_cover_color']?>"<?php }}?>>
	    <button onclick="location.href='<?php echo $forumUrl?>covers/profile/<?php echo $visitor['user_id']?>'" class="right mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">mode_edit</i>
            </button>
  <img onclick="avatar_editor.open()"src="<?php echo $sforumUrl?>/avatar.php?userid=<?php echo $visitor['user_id']?>" class="avatar-img-drawer">
          <div class="avatar-dropdown">
            <span class="small-text avatar_text"><?php echo $visitor['username'];?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li onclick="theme.open()" class="mdl-menu__item"><i class="list material-icons">color_lens</i>Change Theme</li>
				<a class="mdl-menu__item mdl-menu__item--full-bleed-divider" href="//splotus.com/forum/chat/fullpage" target="chatWindowPopup" onclick="chatOpenPopup(); return false;" data-instant><i class="list material-icons">chat</i>Chat</a>
				<a class="mdl-menu__item" href="<?php echo wp_logout_url( home_url() )?>"><i class="list material-icons">power_settings_new</i>Logout</a>
            </ul>
          </div>
        </header>
        <div class="mdl-tabs mdl-js-tabs">
            <div class="mdl-tabs__tab-bar" >
               <a href="#personal"  class="mdl-tabs__tab swipe-tab is-active"><i class="list material-icons">account_box</i></a>
               <?php if ($convos > 0){?><a href="#conversations" id="_conversations" class="mdl-tabs__tab"><i id="convo_icon" class="list material-icons mdl-badge-sm mdl-badge--overlap" data-badge>mail</i></a><?php } else {?><a href="#conversations" class="mdl-tabs__tab"><i id="convo_icon" class="list material-icons mdl-badge-sm mdl-badge--overlap">mail</i></a><?php }?>
               <?php if ($notification > 0){?><a href="#alerts" id="_alerts" class="mdl-tabs__tab"><i id="alert_icon" class="list material-icons mdl-badge-sm mdl-badge--overlap" data-badge>flag</i></a><?php } else {?><a href="#alerts" class="mdl-tabs__tab"><i id="alert_icon" class="list material-icons mdl-badge-sm mdl-badge--overlap">flag</i></a><?php }?>
               <a href="#settings" class="mdl-tabs__tab" ><i class="list material-icons">settings</i></a>
            </div>
            <div class="tabs_panels" id="tabs_panels">
            <div class="mdl-tabs__panel is-active" id="personal">
                <div><p class="mdl-top__item mdl-menu__item--full-bleed-divider tabs_title">Personal</p></div>
                <div class="usr_icons mdl-menu__item--full-bleed-divider"><button onclick="shop_categories.open()" class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon cat-trigge"><i class="i material-icons">add</i></button> <?php $icons = @unserialize($postbiticons);
	if ($icons['icons'])
	{

		foreach ($icons['icons'] as $iconId=>$icon)
		{
			$displayIcons['icons'][] = $icon;

			?><img title="<?php echo $icon['title']?>" style="max-width: 50px; max-height:50px;" src="<?php echo $icon['image_url']?>"/><?php
		}
	}
	if (empty($displayIcons['icons']))
	{
		$displayIcons = false;?><p class="muted">You don't have any icons to show at the moment, click the + to browse the shop.</p><?php
	}
	?></div><? if(!empty($array_followers['users'])) {?><p class="mdl-top__item tabs_title">Followers</p><div class="usr_icons mdl-menu__item--full-bleed-divider"><ion-header-bar class="bar-subheader"><ion-scroll direction="x" class="wide-as-needed"><div class='followers'>
	 <? foreach ($array_followers['users'] as $users)
		          {
				  if($i)echo " ";
			          echo '<a href="" onclick="avatarDetail('.$users['user_id'].')"><img class="follow_avi" src="https://forum.splotus.com/avatar.php?userid='.$users['user_id'].'&size=s"></a>';
			             $i=1;
		          }
		          ?>
	</div></ion-scroll></ion-header-bar></div><?} else {}
		          ?>

	<? if(!empty($array_followings['users'])) {?><p class="mdl-top__item tabs_title">Following</p><div class="usr_icons mdl-menu__item--full-bleed-divider"><ion-header-bar class="bar-subheader"><ion-scroll direction="x" class="wide-as-needed">
	<? foreach ($array_followings['users'] as $users)
		          {
				  if($i)echo " ";
			          echo '<a href="" onclick="avatarDetail('.$users['user_id'].')"><img class="follow_avi" src="https://forum.splotus.com/avatar.php?userid='.$users['user_id'].'&size=s"></a>';
			             $i=1;
		          }
		          ?></ion-scroll></ion-header-bar></div><?} else {}
		          ?>

<div class="visitorText mdl-menu__item--full-bleed-divider ">
			<div class="stats">

				<dl class="pairsJustified"><dt>Messages:</dt><dd><?php echo $message_cnt?></dd></dl>
				<dl class="pairsJustified"><dt>Likes:</dt><dd><?php echo $likes_cnt?></dd></dl>
				<dl class="pairsJustified"><dt>Points:</dt><dd><?php echo $trophy_pnts?></dd></dl>

<dl class="pairsJustified"><dt>Credits:</dt> <dd><a href="<?php echo $forumUrl?>threads/780">ϟ<span class="credits"></span></a></dd></dl>

<dl class="pairsJustified "><dt>Dollars:</dt> <dd><a href="<?php echo $forumUrl?>adcredits/packages">$<?php echo $dollars?></a></dd></dl>

			</div>
		</div>


<?php if ($status !== ''){?><div id="status" class="status mdl-top__item mdl-menu__item--full-bleed-divider tabs_title"><div id="sdl"><div class="s"><button id="<?php echo $status_id;?>" class="status__edit status_icons mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="s s-icon material-icons">edit</i></button><button id="<?php echo $status_id;?>" class="status_delete status_icons mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="s s-icon material-icons">delete</i></button></div><p><span class="bold">Status:</span> <span class="current_status"><?php echo $status?></span></p></div></div><div class="sm-gutter ">
                	<?php } else {?><div id="status" class="status mdl-top__item mdl-menu__item--full-bleed-divider tabs_title" style="display:none;"></div><div class="sm-gutter "> <?php } ?>
<form action="#" id="status_edit_form" style="display:none;"><!-- EDIT FORM -->
  <div class="mdl-textfield mdl-js-textfield " >
    <textarea class="mdl-textfield__input" type="text" rows= "1" cols="40" id="edit_status_form" name="post_body" contenteditable maxlength="140" placeholder="Update your status.." ><?php echo $status?></textarea>
    <label class="mdl-textfield__label" for="edit_status_form">Status:</label>
  </div>
  <span id='remainingC' style="padding: 10px;
    font-size: 14px;
    float: left;
    margin-top: -3em;"></span>
<div class="update_status">
    <button href="#" id="<?php echo $status_id;?>" class="btn_post mdl-menu__item--full-bleed-divider tabs_title status_edit btn_special btn-flat btn-status mdl-navigation__link waves-effect">Update</button></div> <button  class="mdl-menu__item--full-bleed-divider tabs_title status__cancel btn_special btn-flat btn-cancel mdl-navigation__link waves-effect">Cancel</button>
</form>

<!-- CREATE FORM -->
<form action="#" id="status_form">
  <div class="mdl-textfield mdl-js-textfield " >
    <textarea class="mdl-textfield__input" type="text" rows= "1" cols="40" id="sample5" name="status" contenteditable maxlength="140" placeholder="Create a new status.." ></textarea>
    <label class="mdl-textfield__label" for="sample5">Status:</label>
  </div>
      <span id='remainingCC' style="padding: 10px;
    font-size: 14px;
    float: left;
    margin-top: -3em;"></span>
    <button href="#" class="mdl-menu__item--full-bleed-divider tabs_title status_post btn_special btn-status btn-flat mdl-navigation__link waves-effect">Post</button>
</form>
                </div>
            </div>
            <div class="mdl-tabs__panel" id="conversations">
               <div><p class="mdl-top__item mdl-menu__item--full-bleed-divider tabs_title">Conversations</p></div>
               <div id="convoo">
               <ul class="js-convoPlaceholder sidePanel__mediaObjectList" id="__conversations">
               <?php $z = 0; if($convos > $z){?>
	<?php $k=0; foreach ($array_conversate['conversations'] as $convo)
		{
			$text2 = $convo['message_body_html'];
			$content2 = preg_replace('/<[^>]*>/', '', $text2);
			$date = new DateTime();
			$date->setTimestamp($convo['first_message']['message_create_date']);
			$time = date_format($date, 'g:i A');
			$mdy = date_format($date, 'M j, Y');

			if($i)echo " ";
			if ($convo['conversation_has_new_message'] == 'true'){ $convo_id = ($array_conversate['conversations']['conversation_id']);$id=$convo['conversation_id'];?>
				  <li class="listItem unread PopupItemLink" id="delete_convos_<?php echo $convo['conversation_id']?>"><div class="listItemText"><button id="<?php echo $convo['conversation_id']?>" class="x delete mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" title="Mark as Viewed"><i class="x-icon material-icons">visibility</i></button><img class="avatar plainImage" src="<?php echo $sforumUrl.'/avatar.php?userid='.$convo['first_message']['creator_user_id']?>" height="48" width="48"><a href="<?php echo $forumUrl?>conversations/<?php echo $convo['conversation_title']?>.<?php echo $convo['conversation_id']?>"><div class="title"><?php echo $convo['conversation_title']?></div></a><div class="posterDate muted">With: <?php echo $convo['recipients'][1]['username']?>, <?php echo $convo['recipients'][0]['username']?></div><div class="muted">Last message by <?php echo $convo['first_message']['creator_username']?>, <span class="DateTime"><?php echo $mdy?></span></div></div></li><?php }?>
				  <?php
			$i=1;
			$k++;
		}
	}
	?> </ul></div>
                   <div>
				   <p class="mdl-menu__item--full-bleed-divider tabs_title"><a href="<?php echo $forumUrl.'conversations/add'?>">Start a New Conversation</a></p><p  class="tabs_title"><a href="<?php echo $forumUrl.'conversations/'?>" >Show All...</a></p>

	               </div>

            </div>

            <div class="mdl-tabs__panel" id="alerts">
				<div><p class="mdl-top__item mdl-menu__item--full-bleed-divider tabs_title">Alerts</p></div>
				<div id="alertt">
             	<ul class="js-convoPlaceholder sidePanel__mediaObjectList" id="__alerts">
             	<?php  if ($visitor[ 'user_id']){
		if ($array['user']['user_unread_notification_count'] > 0) {
			foreach ($array_notify['notifications'] as $notify)
			{
				$text = $notify['notification_html'];
				$content = preg_replace('/<[^>]*>/', '', $text);
				$usersTimezone = ''.$visitor['timezone'].'';
				$date2 = new DateTime();
				$tz = new DateTimeZone($usersTimezone);
				$date2->setTimeZone($tz);
				$date2->setTimestamp($notify['notification_create_date']);
				$time2 = date_format($date2, 'g:i A');
				$mdy2 = date_format($date2, 'M j, Y');

				if($i)echo " ";

				if ($notify['notification_is_unread'] == 'true' ){?><li class="listItem unread PopupItemLink" id="active__notifications"><div class="listItemText"><a href="<?php echo $forumUrl?>account/alerts"><img class="avatar plainImage" src="https://forum.splotus.com/avatar.php?userid=<?php echo $notify['creator_user_id'];?>&size=s"><div class=" title" style="font-size:14px !important;"><?php echo $content?></div></a><div class="muted"><?php echo $mdy2.' at '.$time2?></div></li><?php
					$i=1;
				}
			}
		}

		if ($array['user']['user_unread_notification_count'] > 0){?><button href="#" class="mdl-menu__item--full-bleed-divider tabs_title clear btn_special btn-flat btn_notifications mdl-navigation__link waves-effect"><i class="material-icons convo">clear_all</i> Clear All Alerts</button><?php }
	} ?> </ul><?php if ($array['user']['user_unread_notification_count'] > 0){?><div id="alerts_extra">
			</div><?php } ?>
			    <div>
				    <?php if ($array['user']['user_unread_notification_count'] == 0) {?><p class="mdl-menu__item--full-bleed-divider tabs_title">You have no active alerts.</a></p>
				    <?php }?>

				   <p class="tabs_title"><a href="<?php echo $forumUrl.'account/alert-preferences'?>">Alert Preferences</a></p>
			    </div>
			    </div>
            </div>
            <div class="mdl-tabs__panel" id="settings">
                 <div><p class="mdl-top__item mdl-menu__item--full-bleed-divider tabs_title">Account Settings</p></div>
                 <div class="sm-gutter ">
	                 <div class="ch-email">
                 <button type="button" class="mdl-chip">
				 	<span class="mdl-chip__text">Change Email</span>
				 </button>
	                 </div>

<form id="email" class="email" style="display:none;margin:0;" autocomplete="off">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
							<label class="mdl-textfield__label" for="email">Email:</label>
					<input class="mdl-textfield__input" name="email" type="email" id="email" readonly onfocus="if (this.hasAttribute('readonly')) {this.removeAttribute('readonly');this.blur();this.focus();}" placeholder="<?php echo $visitor['email']?>">
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
	<label class="mdl-textfield__label" for="c_pwd">Current Password:</label>
					<input class="mdl-textfield__input" name="password" type="password" value="" readonly onfocus="if (this.hasAttribute('readonly')) {this.removeAttribute('readonly');this.blur();this.focus();}" id="ctrl_password" placeholder="*******">
	</div>

	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect em_label" style="float:right;top:-2em;font-size: 23px;" for="icon-toggle-em">
  <input type="checkbox" id="icon-toggle-em" class="mdl-icon-toggle__input email_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
<div class="ch-pwd">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change Password</span>
	</button>
</div>
<form id="pwd" class="pwd" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
							<label class="mdl-textfield__label" for="pwd_old">Current Password:</label>
					<input class="mdl-textfield__input" name="old_password" type="password" id="pwd_old" placeholder="******">
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
	<label class="mdl-textfield__label" for="username">New Password:</label>
					<input class="mdl-textfield__input" name="password" type="password" id="email" placeholder="******">
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
	<label class="mdl-textfield__label" for="username">Confirm New Password:</label>
					<input class="mdl-textfield__input" name="password_confirm" type="password" id="pwd_cfm" placeholder="******">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect pwd_label" style="float:right;top:-2em;font-size: 23px;" for="icon-toggle-3">
  <input type="checkbox" id="icon-toggle-3" class="mdl-icon-toggle__input pwd_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
<form id="forum" style="display:none; margin:0;">
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
				<?php  $profile_icons = @unserialize($profilebiticons);

	if ($profile_icons['icons'])
	{
		$title_username = false;
		$title_usertitle = false;
		foreach ($profile_icons['icons'] as $iconId=>$icon)
		{


			if ($icon['title'] == 'Change User Name'){
				?><div class="un"></div>
			<div class="ch-un"><div class="ch-usrname">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change Username</span>
	</button>
</div>
<form id="username" class="username" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
		<label class="mdl-textfield__label" for="pwd_old">New Username:</label>
			<input class="mdl-textfield__input" onKeyPress="return disableEnterKey(event)" name="username" type="text" id="usrname" placeholder="<?php echo $visitor['username'];?>">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect usrn_label" style="float:right;top:-2em;font-size: 23px;" for="usrn-tg">
  <input type="checkbox" id="usrn-tg" class="mdl-icon-toggle__input usrn_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
						</div>

						<?php } if ($icon['title'] == 'Set Custom Title'){?>
						<div class="ct"></div>
			<div class="ch-ct"><div class="ch-title">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change User-Title</span>
	</button>
</div>
<form id="usertitle" class="usertitle" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
		<label class="mdl-textfield__label" for="pwd_old">New User-Title:</label>
			<input class="mdl-textfield__input" name="custom_title" type="text" id="usrname" onKeyPress="return disableEnterKey(event)" placeholder="<?php echo $visitor['custom_title'];?>">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect title_label" style="float:right;top:-2em;font-size: 23px;" for="title-tg">
  <input type="checkbox" id="title-tg" class="mdl-icon-toggle__input title_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
						</div>
                 <?php
			} //todo
			$ch_username = array('Change User Name');
			if (in_array($icon['title'], $ch_username)) {
				$title_username = true;
			}

			$ch_usertitle = array('Set Custom Title');
			if (in_array($icon['title'], $ch_usertitle)) {
				$title_usertitle = true;
			}

		}// end foreach
		if ($title_username == false ) {?>
				<div class="un">
				 <button onclick="purchase_username.open()" type="button" class="mdl-chip">
				 	<span class="mdl-chip__text">Change Username ϟ1,000</span>
				 </button>
				</div>
				<div class="ch-un" style="display:none;"><div class="ch-usrname">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change Username</span>
	</button>
</div>
<form id="username" class="username" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
		<label class="mdl-textfield__label" for="pwd_old">New Username:</label>
			<input class="mdl-textfield__input" name="username" type="text" id="usrname" onKeyPress="return disableEnterKey(event)" placeholder="<?php echo $visitor['username'];?>">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect usrn_label" style="float:right;top:-2em;font-size: 23px;" for="usrn-tg">
  <input type="checkbox" id="usrn-tg" class="mdl-icon-toggle__input usrn_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
				</div>


				 <?php }
		if ($title_usertitle== false) {?>
			<div class="ct">
				 <button onclick="purchase_usertitle.open()" type="button" class="mdl-chip">
				 	<span class="mdl-chip__text">Change User-Title ϟ500</span>
				 </button>
			</div>
			<div class="ch-ct" style="display:none;"><div class="ch-title">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change User-Title</span>
	</button>
</div>
<form id="usertitle" class="usertitle" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
		<label class="mdl-textfield__label" for="pwd_old">New User-Title:</label>
			<input class="mdl-textfield__input" name="custom_title" onKeyPress="return disableEnterKey(event)" type="text" id="usrname" placeholder="<?php echo $visitor['custom_title'];?>">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect title_label" style="float:right;top:-2em;font-size: 23px;" for="title-tg">
  <input type="checkbox" id="title-tg" class="mdl-icon-toggle__input title_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
				</div>
				 <?php }

	} else {?>

				<div class="un">
				 <button onclick="purchase_username.open()" type="button" class="mdl-chip">
				 	<span class="mdl-chip__text">Change Username ϟ1,000</span>
				 </button>
				</div>
				<div class="ch-un" style="display:none;"><div class="ch-usrname">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change Username</span>
	</button>
</div>
<form id="username" class="username" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
		<label class="mdl-textfield__label" for="pwd_old">New Username:</label>
			<input class="mdl-textfield__input" name="username" type="text" id="usrname" onKeyPress="return disableEnterKey(event)" placeholder="<?php echo $visitor['username'];?>">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect usrn_label" style="float:right;top:-2em;font-size: 23px;" for="usrn-tg">
  <input type="checkbox" id="usrn-tg" class="mdl-icon-toggle__input usrn_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
				</div>


			<div class="ct">
				 <button onclick="purchase_usertitle.open()" type="button" class="mdl-chip">
				 	<span class="mdl-chip__text">Change User-Title ϟ500</span>
				 </button>
			</div>
			<div class="ch-ct" style="display:none;"><div class="ch-title">
	<button type="button" class="mdl-chip">
		<span class="mdl-chip__text">Change User-Title</span>
	</button>
</div>
<form id="usertitle" class="usertitle" style="display:none; margin:0;">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label account_settings">
		<label class="mdl-textfield__label" for="pwd_old">New User-Title:</label>
			<input class="mdl-textfield__input" name="custom_title" onKeyPress="return disableEnterKey(event)" type="text" id="usrname" placeholder="<?php echo $visitor['custom_title'];?>">
	</div>
	<label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect title_label" style="float:right;top:-2em;font-size: 23px;" for="title-tg">
  <input type="checkbox" id="title-tg" class="mdl-icon-toggle__input title_save">
  <i class="mdl-icon-toggle__label material-icons">check_circle</i>
</label>
<input type="hidden" name="_xfToken" value="<?php echo $visitor['csrf_token_page']?>">
<input type="hidden" name="_xfConfirm" value="1" />
<input type="hidden" name="_xfNoRedirect" value="1">
<input type="hidden" name="_xfResponseType" value="json">
</form>
				</div>










                 <?}
?>
					<p class="tabs_title">Allow Notifications
					<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch_notify">
					<?php if($off == 'on'){?>
						<input type="checkbox" id="switch_notify" class="mdl-switch__input" checked>
					<?php } else {?> <input type="checkbox" id="switch_notify" class="mdl-switch__input"><?php }?>
						<span class="mdl-switch__label"></span>
					</label>
					</p>
<? if (!$detect->isMobile() && !$detect->isTablet()){?>
					<p class="tabs_title" id="bg_rf">Background Refresh
					<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch_rf">
					<?php if($bgrf == 'off'){?>
						<input type="checkbox" id="switch_rf" class="mdl-switch__input">
					<?php } else {?><input type="checkbox" id="switch_rf" class="mdl-switch__input" checked><?php }?>

						<span class="mdl-switch__label"></span>
					</label>
					</p>
					<paper-tooltip for="bg_rf">Recommended to turn off if you're on a slow connection.</paper-tooltip>
<? }?>
                  </div>
				   <div class="mdl-menu__item--full-bleed-divider"></div><p  class="tabs_title"><a href="<?php echo $forumUrl.'account/'?>" >Additional Forum Settings...</a></p>
            </div>
	               </div></div>
		       </div>
