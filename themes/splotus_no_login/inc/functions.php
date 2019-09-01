<?
	$visitor = XenForo_Visitor::getInstance();

		require '/home/splotusc/public_html/wp-content/themes/splotus/inc/api.php';

	require '/home/splotusc/public_html/wp-content/themes/splotus/inc/constants.php';

if ($xfId){
//Set Intial Cookies for notification showing

	//Update cookie values with count value
	$alert_num = $array['user']['user_unread_notification_count'];
	$convo_num = $array['user']['user_unread_conversation_count'];
	setcookie("alerts", $alert_num, time()+(24*3600), "/", ".splotus.com",  0);
	setcookie("conversations", $convo_num, time()+(24*3600), "/", ".splotus.com",  0);

	// Alert is active but not any conversations
	if ($alert_num > 0 && $convo_num ==0){
		if(isset($_COOKIE['alerts_shown']) && $_COOKIE['alerts_shown'] != 1 ) {
			setcookie("alerts_shown", 0, time()+(24*3600), "/", ".splotus.com",  0);
		}
			elseif(isset($_COOKIE['alerts_shown']) && $_COOKIE['alerts_shown'] == 1 ) {}
				else {
					setcookie("alerts_shown", 0, time()+(10*60*1000), "/", ".splotus.com",  0);
				}
	}

	// Conversation is active but not any alerts
	if ($alert_num == 0 && $convo_num >0){
		if(isset($_COOKIE['conversations_shown']) && $_COOKIE['conversations_shown'] != 1 ) {
			setcookie("conversations_shown", 0, time()+(24*3600), "/", ".splotus.com",  0);
		}
			elseif(isset($_COOKIE['conversations_shown']) && $_COOKIE['conversations_shown'] == 1 ) {}
				else {
					setcookie("conversations_shown", 0, time()+(10*60*1000), "/", ".splotus.com",  0);
				}
	}

	//Both conversation & alerts are active
	if ($alert_num >=1 && $convo_num >=1)
	{
		if(isset($_COOKIE['notifications_both']) && $_COOKIE['notifications_both'] != 1 ) {
			setcookie("notifications_both", 0, time()+(24*3600), "/", ".splotus.com",  0);
		}
		elseif(isset($_COOKIE['notifications_both']) && $_COOKIE['notifications_both'] == 1 ){}
		else {
			setcookie("notifications_both", 0, time()+(24*3600), "/", ".splotus.com",  0);
		}
	}

	// Alerts
	if(isset($_COOKIE['alerts']) && $_COOKIE['alerts'] != 0 ) {
	     if(isset($_COOKIE['alerts_shown']) && $_COOKIE['alerts_shown'] == 0 ) {
		 	alerts_notify($notification);
     	}
     }

     //Deploy Conversation Notification
     if(isset($_COOKIE['conversations']) && $_COOKIE['conversations'] != 0 ) {
	     if(isset($_COOKIE['conversations_shown']) && $_COOKIE['conversations_shown'] == 0 ) {
		 	conversations_notify($convos);
     	}
     }
     else {
      // Convos = 0;
     }

     if(isset($_COOKIE['alerts']) && $_COOKIE['alerts'] != 0 ) {
	     if(isset($_COOKIE['conversations']) && $_COOKIE['conversations'] != 0 ) {
		    if(isset($_COOKIE['notifications_both']) && $_COOKIE['notifications_both'] == 0 ) {
		 	both_notify($convos,$notification);
     		}
     	}
     }
     else {
      // Convos = 0;
     }


    }

//Functions
function alerts_notify($id)
{?><script type="text/javascript">
spawnAlert('You currently have <?=$id?> unread alerts!', 'https://images.splotus.com/logo.og', 'Splotus: Unread Alerts');
setCookieMin("alerts_shown", 1, 10);
</script><?
	}

function conversations_notify($id)
{
?><script type="text/javascript">
spawnConversation('You currently have <?=$id?> unread conversations!', 'https://images.splotus.com/logo.og', 'Splotus: Unread Conversations');
setCookieMin("conversations_shown", 1, 10);
</script><?
}

function both_notify($convo,$alert)
{
?><script type="text/javascript">
spawnBoth('You currently have <?=$convo?> unread conversations & <?=$alert?> alerts!', 'https://images.splotus.com/logo.og', 'Splotus: New Notifications!');
setCookieMin("notifications_both", 1, 10);
</script><?
}

