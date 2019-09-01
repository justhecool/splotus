
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN"
    "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html lang="en-US" ng-app="splotusApp">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Splotus">
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="820383837844-njj689g00vo3onkp7mb98offms9bodek.apps.googleusercontent.com">

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#99cc00">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#99cc00"><!-- Favicon -->
<link rel="shortcut icon" type="image/png" href="https://splotus.com/favicon.ico">
<!-- iOS Safari -->
<link rel="apple-touch-icon" sizes="192x192" href="https://images.splotus.com/touch-icon.png">
<title>Splotus</title>
<link rel='dns-prefetch' href='//www.google.com' />
<link rel='stylesheet' id='wp-block-library-css'  href='https://splotus.com/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='splotus-style-css'  href='https://splotus.com/css/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='splotus-date-css'  href='https://splotus.com/css/mdDateTimePicker.min.css' type='text/css' media='all' />
<link rel='https://api.w.org/' href='https://splotus.com/wp-json/' />
<link rel="canonical" href="https://splotus.com/" />


</head>
<body ng-controller="Main" data-no-instant>
<div class="signal"></div>
<div id="top"></div>
<!-- Header -->
 <div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-header load">
      <div  id="header" class="splotus-header mdl-layout__header mdl-layout--transparent">
        <div class="mdl-layout__header-row">
          <div class="splotus-title mdl-layout-title">
 <div class="logo logo-home wow slideInDown"></div>
          </div>
          <!-- Search -->
          <div class="splotus-header-spacer mdl-layout-spacer"></div>
          <div class="splotus-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <form id="search" class="mdl-textfield__expandable-holder" method="POST">
              <input class="mdl-textfield__input" type="text" id="search-field" name="q" autocomplete="off"  value="">
            </form>
          </div>
<div class="mdl-tooltip" data-mdl-for="search">
Search for items or members.
</div>
         <div class="splotus-navigation-container">
            <nav class="splotus-navigation mdl-navigation">
<!--
<paper-menu-button>
              <a class="mdl-navigation__link dropdown-trigger" slot="dropdown-trigger">Communities</a>
  <paper-listbox slot="dropdown-content">
      <a href="https://splotus.com/swx" tabindex="-1">
    <li class="mdl-menu__item" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">SmallWorlds X</li></a>    <a href="https://wiki.splotus.com" tabindex="-1">
    <li class="mdl-menu__item" style="opacity: 1;     font-family: OpenSansR, sans-serif;
    font-size: 12pt;">SmallWorlds Wiki</li></a>
    <a href="https://splotus.com/forum" tabindex="-1">
    <li class="mdl-menu__item" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Our Forum</li></a>
  </paper-listbox>
</paper-menu-button>
-->

  <a id="demo-menu-lower-right" class="mdl-navigation__link dropdown-trigger" slot="dropdown-trigger">Games</a>
<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-right">
   <a href="https://splotus.com/games/current-tycoon" class="current ctm" tabindex="-1">
    <li class="mdl-menu__item current ctm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Current Tycoon</li></a>        <a href="https://splotus.com/games/idle-city" class="idle icm" tabindex="-1">
    <li class="mdl-menu__item idle icm" style="opacity: 1; font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Idle City</li></a>         <a href="https://splotus.com/games/idle-game-dev" class="idle-dev igm" tabindex="-1">
    <li class="mdl-menu__item idle-dev igm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Idle Game Dev</li></a>         <a href="https://splotus.com/games/island-builder" class="island ibm" tabindex="-1">
    <li class="mdl-menu__item island ibm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Island Builder</li></a>         <a href="https://splotus.com/games/30-second-tap/" class="sec stm" tabindex="-1">
    <li class="mdl-menu__item sec stm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">30 Second Tap</li></a>         <a href="https://splotus.com/games/jingle-tapper/" class="jingle jtm" tabindex="-1">
    <li class="mdl-menu__item jingle jtm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Jingle Tapper</li></a>         <a href="https://splotus.com/games/candy-whacker/" class="candy cwm" tabindex="-1">
    <li class="mdl-menu__item candy cwm" style="opacity: 1;    font-family: OpenSansR, sans-serif;
    font-size: 12pt;">Candy Whacker</li></a>
</ul>
           <a class="mdl-navigation__link" href="https://splotus.com/wiki/">Wiki</a>
              <a class="mdl-navigation__link" href="https://splotus.com/about/">Who We Are</a>              <a class="mdl-navigation__link" onclick="contact.open()">Contact</a>
            </nav>
          </div>

          <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="communities">
              <li onclick="themeToggle()" class="mdl-menu__item"><i class="list material-icons">color_lens</i>Change Theme</li>
				<a class="mdl-menu__item mdl-menu__item--full-bleed-divider" href="//splotus.com/forum/chat/fullpage" target="chatWindowPopup" onclick="chatOpenPopup(); return false;" data-instant><i class="list material-icons">chat</i>Chat</a>
				<a class="mdl-menu__item" href="https://splotus.com/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fsplotus.com&amp;_wpnonce=056b714ffe"><i class="list material-icons">power_settings_new</i>Logout</a>
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
<span id="avatar" data-toggle="modal" data-modal="#d-dialog" class="mdl-button mdl-js-button mdl-button--icon avatar mdl-badge-avi splotus-more-button dialog-button "><img src="//images.splotus.com/guest_small_green/" height="80" width="80" /></span>

          </div>
</div>
<!-- Nav Drawer -->

      <div class="splotus-drawer mdl-layout__drawer">
        <header class="splotus-drawer-header">
          <a class="menu-logo"><img class="splotus-logo-image-drawer" src="https://images.splotus.com/splotus-logo-n"/></a>        </header>
<nav class="mdl-navigation">
	<ul class="nav">
		<li class="active"><a class="mdl-navigation__link active"><i class="list material-icons">home</i>Home</a> </li>

<li><a href="https://splotus.com/about/"  class="mdl-navigation__link"><i class="list material-icons">format_align_justify</i>Who We Are</a></li>

						<li><a class=mdl-navigation__link data-target="#game" data-toggle="collapse"><i class="list material-icons">games</i>Our Games</a>
							<span class="menu-collapse-toggle collapsed mdl-navigation__link" data-target="#game" data-toggle="collapse"><i class="icon menu-collapse-toggle-close">keyboard_arrow_up</i><i class="icon menu-collapse-toggle-default">keyboard_arrow_down</i></span><ul class="menu-collapse collapse" id="game">
				<li ><a class="current ctm mdl-navigation__link" href="https://splotus.com/games/current-tycoon/">Current Tycoon</a></li>
						<li ><a class="idle-city icm mdl-navigation__link" href="https://splotus.com/games/idle-city/">Idle City</a></li>
						<li ><a class="idle-dev igm mdl-navigation__link" href="https://splotus.com/games/idle-game-dev/">Idle Game Dev</a></li>
						<li ><a class="island ibm mdl-navigation__link" href="https://splotus.com/games/island-builder/">Island Builder</a></li>
						<li ><a class="sec stm mdl-navigation__link" href="https://splotus.com/games/30-second-tap/">30 Second Tap</a></li>
						<li ><a class="jingle jtm mdl-navigation__link" href="https://splotus.com/games/jingle-tapper/">Jingle Tapper</a></li>
						<li><a class="candy cwm mdl-navigation__link" href="https://splotus.com/games/candy-whacker/">Candy Whacker</a></li>
						</li>
					</ul>
<li ><a onclick="contact.open()"  class="mdl-navigation__link"><i class="list material-icons">mail</i>Contact Us</a> </li>





        </nav>
      </div>
                  <div class="mdl-layout__obfuscator-right-login"></div>




      <div class="mdl-layout__obfuscator-right"></div>

      <div class="splotus-content mdl-layout__content" id="main">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="container">
            <div class="home-caption">
 <div class="home-text">Welcome home.<br> <span class="communities-home">With our on demand communities and games, theres no need to feel left out.<br> We welcome everyone.</span><br><br><br><br></div>

        </div>
        <a href="#do">
        <svg class="arrows carousel-indicators">
							<path class="a1" d="M0 0 L30 32 L60 0"></path>
							<path class="a2" d="M0 20 L30 52 L60 20"></path>
							<path class="a3" d="M0 40 L30 72 L60 40"></path>
						</svg>
        </a>
          </div>
        </div>
                 </div>


    </div>
 <div class="splotus">
	<div class="fff" style="background-color:#fff;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="do">
		  	  <span class="heading"><h2>What we do</h2></span>
				<p>We design, code, develop your favorite websites, mobile games, and photos. We provide you with information not found anywhere else.</p>
					<div style="text-align: center;"><img  src="https://images.splotus.com/computer_graphic" alt=""/></div>
			</div>
		</div>
	</div>
	<!--    Add content here --->
	<div class="fff pages" style="background-color:#fff;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="pages">
			<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins>		  	  <span class="heading"><h2>Our pages</h2></span>
				<p>Get to know us, interact with us on Facebook or learn more about the beloved game SmallWorlds.</p>
			</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col" style="display:block; ">
<div class="lozad splotus-card mdl-card">
  <div class="mdl-card__title mdl-card--expand">
	  <div class=" splotus-logo__card"></div>
  </div>
      <h3 class="pages_title">Splotus</h3>
      <p class="pages_sub-title">Facebook Page</p>
  <div class="mdl-card__supporting-text">
    Composed of nerds and geeks alike, we blend together games and socialization, creating a fun and entertaining community for all to enjoy!
  </div>
  <div class="mdl-card__actions">
    <a href="https://www.facebook.com/splotusgames" target="_" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-green">
      Visit
    </a>
  </div>
</div>
			</div></div>

						<div class="mdl-grid">

			<div class="mdl-cell mdl-cell--4-col">
<div class="lozad swx-card mdl-card">
  <div class="mdl-card__title mdl-card--expand" style="overflow:hidden;">
	  <img src="https://images.splotus.com/characters2" alt="" style="margin-top: 45%;" />
  </div>
<h3 class="pages_title">SmallWorlds X</h3>
      <p class="pages_sub-title">Community</p>
  <div class="mdl-card__supporting-text">Know information before anyone else! Bringing you the very best spoilers of <a href="https://www.smallworlds.com" target="_">SmallWorlds.com</a></div>
  <div class="mdl-card__actions">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-blue" href="https://splotus.com/swx/" >
      Visit
    </a>
  </div>
</div></div></div>

		<div class="mdl-grid">

			<div class="mdl-cell mdl-cell--4-col">
				<div class="lozad wiki-card mdl-card">
  <div class="mdl-card__title mdl-card--expand">
	  <!--<img  src="https://images.splotus.com/appless-minecraft" alt="" style="margin-top: 26%;margin-left: 38%;margin-right: 30%;" />-->
  </div>
      <h3 class="pages_title">SmallWorlds Wiki</h3>
      <p class="pages_sub-title">Community</p>
  <div class="mdl-card__supporting-text">
Learn more about the game SmallWorlds and all of it's features and releases.  </div>
  <div class="mdl-card__actions">
    <a href="https://splotus.com/wiki/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-splotus_button splotus-red">
      Visit
    </a>
  </div>
</div></div></div>

		</div></div>
	<div class="likes">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col" id="likes">
		  	  <span class="heading"><h1><span class="fb_likes"></span> Likes and counting…</h1></span>
			</div>
		</div>
	</div>
	<div class="fff" style="background-color:#fff;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
<!-- Splotus Main page -->
<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins>
				<br/>
			</div>
		</div>
	</div>

</div>
<dialog id="d-dialog" class="mdl-dialog" >
    <button type="button" class="close" data-dismiss="dialog" aria-hidden="true">×</button>
    <h3 class="mdl-dialog__title_delete">Delete Conversation</h3>
    <hr>
    <h3 class="mdl-dialog__sub_title_delete">You are about to delete this conversation permanently, are you sure?</h3>
   <div class="mdl-dialog__actions">
	<button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised close-d delete mdl-button--colored" data-dismiss="dialog">Delete</button>
    <button type="button" class="mdl-button close">Close</button>
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
		<input type="checkbox"  id="checkbox-1" class="mdl-checkbox__input" value="on" name="dl-check">
		<span class="mdl-checkbox__label dl">Don't show this dialog again</span>
	</label>
  </div>
</dialog>
<div class="footer">
		<div class="mdl-grid">
						<div class="mdl-cell mdl-cell--12-col" class="footer">
											<div class="logo-footer-home"></div>
							<span class="footer-links x">COME AND FIND US.</span>
						</div>
			<div class="mdl-cell mdl-cell--12-col" class="footer">
				<span class="footer-links"><a href="https://splotus.com/games">Games</a> <a href="https://splotus.com/about/">Who we are</a> <a href="https://splotus.com/privacy-policy/">Privacy Policy</a> <a onclick="contact.open()">Contact</a></span> <span class="icons x"><a href="https://fb.com/SplotusGames" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-facebook"></button></a>
    <a href="https://twitter.com/smallworldsx" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-twitter"></button></a>
    <a href="https://instagram.com/splotus/" target="_blank" rel="noopener"><button class="mdl-mini-footer__social-btn fa fa-instagram"></button></a>
    <a href="https://youtube.com/c/SmallWorldsX" target="_blank" rel="noopener"><button  class="mdl-mini-footer__social-btn fa fa-youtube"></button></a></span>
			</div>
			<div class="mdl-cell mdl-cell--12-col" class="footer">
			<p>Copyright Splotus &copy; 2019, All Rights Reserved.</p>
			</div>
		</div>
	</div>
</div></div>



<script src="https://splotus.com/js/jquery.min.js"></script>
<script src="https://splotus.com/js/jquery.touchSwipe.min.js"></script>
<script src="https://splotus.com/js/dialog-polyfill.min.js"></script>
<script src="https://splotus.com/js/material.1.3.0.min.js"></script>
<script src="https://splotus.com/js/bootstrap.min.js"></script>
<script src="https://splotus.com/js/instantclick.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script><script type="text/javascript" data-no-instant>InstantClick.init('mousedown');</script>
<script src="https://splotus.com/js/jquery.cookie.js"></script>
<script src="https://splotus.com/js/custom.min.js"></script>
<script type="text/javascript">
 (function() {'use strict';

var modalTriggers = document.querySelectorAll('[data-toggle="modal"]');

// Getting the target modal of every button and applying listeners
for (var i = modalTriggers.length - 1; i >= 0; i--) {
  var t = modalTriggers[i].getAttribute('data-target');
  var id = '#' + modalTriggers[i].getAttribute('id');

  modalProcess(t, id);
}

/**
 * It applies the listeners to modal and modal triggers
 * @param  {string} selector [The Dialog ID]
 * @param  {string} button   [The Dialog triggering Button ID]
 */
function modalProcess(selector, button) {
  var dialog = document.querySelector(selector);
  var showDialogButton = document.querySelector(button);

  if (dialog) {
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });

    function clickedInDialog(mouseEvent) {
    var rect = dialog.getBoundingClientRect();
    return rect.top <= mouseEvent.clientY && mouseEvent.clientY <= rect.top + rect.height
        && rect.left <= mouseEvent.clientX && mouseEvent.clientX <= rect.left + rect.width;
}

document.body.addEventListener('click', function(e) {
    if (!dialog.open)
        return;
    if (e.target != document.body)
        return;
    handleClickOutsideDialog();
});

dialog.addEventListener('click', function(e) {
    if (clickedInDialog(e))
        return;
    handleClickOutsideDialog();
});
function handleClickOutsideDialog() {
    pulseDialog();
}
function closeDialog() {
    if (dialog.open){
        dialog.close();
        document.querySelector('.mdl-layout__content').style.overflowX = 'auto';
		document.querySelector('.mdl-layout__content').style.overflowX = '';
		}
}
function pulseDialog() {
    dialog.classList.add('pulse');
    //Chrome
    dialog.addEventListener('webkitAnimationEnd', function(e) {
    dialog.classList.remove('pulse');
    });
    //Firefox
    dialog.addEventListener('animationend', function(e) {
	dialog.classList.remove('pulse');
    });
    };

    dialog.querySelector('.close').addEventListener('click', function() {
     closeDialog();
    });
  }
}
}());
(function() {
    'use strict';
        var dt = document.querySelector('.delete-trigger');

    var delete_d = document.querySelector('#d-dialog');
    var close = document.getElementById('#main');


          if (!delete_d.showModal) {
      dialogPolyfill.registerDialog(delete_d);
    }
    dt.addEventListener('click', function() {
    opendelete_d1();
    });
    delete_d.querySelector('.close')

      .addEventListener('click', function() {
        closedelete_d();
      });
 function opendelete_d1() {
	   delete_d.style.opacity = 0;
	   delete_d.style.transition = 'all 250ms ease';
	   delete_d.showModal();
	   delete_d.style.opacity = 1;
	}

function clickedInDialog(mouseEvent) {
    var rect = delete_d.getBoundingClientRect();
    return rect.top <= mouseEvent.clientY && mouseEvent.clientY <= rect.top + rect.height
        && rect.left <= mouseEvent.clientX && mouseEvent.clientX <= rect.left + rect.width;
}

document.body.addEventListener('click', function(e) {
    if (!delete_d.open)
        return;
    if (e.target != document.body)
        return;
    handleClickOutsideDialog();
});

delete_d.addEventListener('click', function(e) {
    if (clickedInDialog(e))
        return;
    handleClickOutsideDialog();
});
function handleClickOutsideDialog() {
    pulseDialog();
}
function closedelete_d() {
    if (delete_d.open){
        delete_d.close();
        document.querySelector('.mdl-layout__content').style.overflowX = 'auto';
  document.querySelector('.mdl-layout__content').style.overflowX = '';}

}
    function pulseDialog() {
    delete_d.classList.add('pulse');
    //Chrome
    delete_d.addEventListener('webkitAnimationEnd', function(e) {
    delete_d.classList.remove('pulse');
    });
    //Firefox
    delete_d.addEventListener('animationend', function(e) {
	delete_d.classList.remove('pulse');
    });
    };
//Escape Key
document.body.addEventListener('keydown', function(e) {
    if (e.keyCode == 27)
        closedelete_d();
});
 delete_d.querySelector('.closee')
    .addEventListener('click', function() {
      delete_d.close();
    });
   }());
function loginDialog(){
	loginn.open();};
</script>
<script type="text/javascript">site = 'https://splotus.com/';permalink = 'https://splotus.com';</script>
<script src="https://splotus.com/js/moment.min.js"></script>
<script src="https://splotus.com/js/moment.tz.js"></script>
<script src="https://splotus.com/js/mdDateTimePicker.min.js"></script>
<script src="https://splotus.com/js/dialog-login.min.js"></script>


