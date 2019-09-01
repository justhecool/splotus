<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package splotus
 */

get_header('error'); ?>

<div class="main">
<? global $blog_id;
if ($blog_id == 9 ){?><div class="logo logo-home wow slideInDown"></div>
<? } elseif ($blog_id == 10){?><div class="overlay-m"> <div class="logo logo-swx "></div>

</div><? } elseif ($blog_id == 13){?><div class="overlay-m"> <div class="logo logo-wiki wow slideInDown"></div>

</div><? } elseif ($blog_id == 14){?><div class="overlay-m"> <div class="logo logo-de wow slideInDown"></div>

</div><? } elseif ($blog_id == 15){?><div class="overlay-m"> <div class="logo logo-mmx wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 5 )){?><div class="overlay-m"> <div class="logo logo-current wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 7 )){?><div class="overlay-m"> <div class="logo logo-idle wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 9 )){?><div class="overlay-m"> <div class="logo logo-maker wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 11 )){?><div class="overlay-m"> <div class="logo logo-island wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 13 )){?><div class="overlay-m"> <div class="logo logo-second wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 15 )){?><div class="overlay-m"> <div class="logo logo-jingle wow slideInDown"></div>

</div><? } elseif ($blog_id == 16 & is_page( 17 )){?><div class="overlay-m"> <div class="logo logo-candy wow slideInDown"></div>

</div><? } else {?><div class="overlay-m"><div class="logo logo-home wow slideInDown"><img src="<?=$imageUrl;?>/splotus-logo/"/></div>

</div>
<? }?>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="text" align="center"><span class="top-text">Oops You've hit a</span><br><span class="maintenance-text">404</span><br>To see the real magic,<a href="<?=network_home_url()?>"><span class="color-blue">click here.</span></a>
				</div>
  			</div>
		</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="<?=$siteUrl?>/js/custom.js"></script>
