<?
/*
Template Name: Notifications
*/
include get_template_directory() . '/inc/init.php';
include get_template_directory() . '/inc/api.php';

$visitor = XenForo_Visitor::getInstance();
       if ($visitor->isMemberOf(2)){
get_header();?>

<div class="article_scroll_bg">
<div class="article_bg"></div>
      <main class="mdl_main mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="mdl_content mdl_color--white mdl-shadow--4dp content mdl_color-text--grey-800 mdl-cell mdl-cell--8-col" >
<h3 style="text-align: center; color:#000;"></h3><br />
<? echo $array_notify['notifications']['creator_user_id'];
	if($array['user']['user_unread_notification_count']>0){
	foreach ($array_notify['notifications'] as $notify)
		          {
			          $date_notify = new DateTime();
$date_notify->setTimestamp($notify['notification_create_date']);
$mdy_notify = date_format($date_notify, 'M j, Y');
				  if($l)echo " ";
				  if ($notify['creator_user_id']>0){
			          echo '<li><img src="https://forum.splotus.com/avatar.php?userid='.$notify['creator_user_id'].'&size=s">'.$notify['notification_html'].'</li>';}
			          else { echo '<li>'.$notify['notification_html'].'</li>';}
			             $l=1;
		          }
		          ?><div id="active__notifications"><button href="#" class="clear btn btn-flat btn_notifications mdl-navigation__link waves-effect"><i class="material-icons convo">clear_all</i> Clear All Notifications</button></div><?
}
else {echo "No new alerts";}
	$convos = $array['user']['user_unread_conversation_count'];

if ($convos >0){
	foreach ($array_conversate['conversations'] as $convo){
		if ($convo['conversation_has_new_message'] == 'true'){

$date = new DateTime();
$date->setTimestamp($convo['conversation_create_date']);
$time = date_format($date, 'g:i A');
$mdy = date_format($date, 'M j, Y');
?>

	<div class="discussionList section sectionMain">
	<form action="inline-mod/conversation/switch" method="post"
		class="DiscussionList InlineModForm"
		data-cookieName="conversations"
		data-controls="#InlineModControls"
		data-imodOptions="#ModerationSelect option">
		<dl class="sectionHeaders">
			<dt class="posterAvatar"><a><span></span></a></dt>
			<dd class="main">
				<a class="title"><span>Conversation Title</span></a>
				<a class="postDate"><span></span></a>
			</dd>
			<dd class="stats"><a><span>Replies</span></a></dd>
			<dd class="lastPost"><a><span>Delete</span></a></dd>

		</dl>

		<ol class="discussionListItems">
<li id="conversation-<?=$convo['conversation_id'];?>" class="discussionListItem " data-author="<?=$convo['creator_username'];?>">

	<div class="listBlock posterAvatar"><a href="members/byelordy.1416/" class="avatar Av1416s" data-avatarhtml="true"><img src="//forum.splotus.com/avatar.php?userid=<?=$convo['creator_user_id']?>&size=m" width="48" height="48" alt="BYELORDY" /></a></div>

	<div class="listBlock main">
		<div class="titleText">


			<h3 class="title">
				<a href="conversations/3.359/"><?=$convo['conversation_title']?></a>
				<a href="conversations/3.359/toggle-read" class="ReadToggle"
					data-counter="#ConversationsMenu_Counter"
					title="Mark as Unread"></a>
			</h3>

			<div class="secondRow">
				<div class="posterDate muted">
					<a href="members/byelordy.1416/" class="username" dir="auto" title="Conversation Starter"><?=$convo['recipients'][0]['username']?></a>,

						<a href="members/justin.1/" class="username" dir="auto"><?=$convo['recipients'][1]['username']?></a>,


					<a href="conversations/3.359/" class="faint"><span class="DateTime" title="<?=$mdy;?> at <?=$time?>"><?=$mdy?></span></a>


				</div>
			</div>
		</div>
	</div>

	<div class="listBlock stats pairsJustified">
		<dl class="major"><dt>Replies:</dt> <dd><? if ($convo['conversation_message_count'] != 1){ echo --$convo['conversation_message_count'];} else { echo '0';}?></dd></dl>
		<dl class="minor"><dt>Participants:</dt> <dd>2</dd></dl>
	</div>
<div class="listBlock lastPost">
		<dl class="lastPostInfo">
			<dt><a id="<?=$id?>"class="pull-right muted delete-d delete-trigger_<?=$id?>"><i align="right" class="material-icons convo">delete</i></a></dt>

		</dl>
	</div>



</li>
		<? }}} else{ echo "Nothing new here";}
	?>

          </div>
        </div>

</div>

<?
get_footer();

}
 else {get_header();?> <style>.close{display:none;}</style><? get_footer();?> <script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.dialog-button').click();});/*]]>*/</script><?}?>