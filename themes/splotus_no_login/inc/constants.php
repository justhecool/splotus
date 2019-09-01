<? /**
	 * @package splotus
 */
global $devUrl;
global $siteUrl;
global $gamesUrl;
global $spoilerUrl;
global $wikiUrl;
global $forumUrl;
global $imageUrl;
global $videoUrl;
global $swxUrl;
global $wikitUrl;
global $mmxUrl;
global $deUrl;
global $sforumUrl;
global $blog_id;
$siteDirectory = "/home/downran1/public_html";
$links = 'https://splotus.com/';
$siteUrl = 'https://splotus.com';
$gamesUrl = 'https://games.splotus.com';
$spoilerUrl = 'https://spoilers.splotus.com';
$wikiUrl = 'https://wiki.splotus.com';
$forumUrl ="https://forum.splotus.com/";
$sforumUrl ="https://splotus.com/forum";
$imageUrl ="https://images.splotus.com";
$videoUrl ="https://videos.splotus.com";
$swxUrl   ="https://splotus.com/swx";
$wikitUrl   ="https://splotus.com/wiki";
$mmxUrl ="https://splotus.com/mmx";
$deUrl   ="https://splotus.com/de";
$devUrl = "https://splotus.com/dev";



$localhost = false;
// WEBSITE COLORS AND THEMES
$linkColor = '#39b5f7';
$linkHoverColor = '#0e74ab';
$affixColor = 'rgba(66, 133, 228, 0.6)';
$gamesTextColor = '#fff';
$gamesBC = '#6c97f4';
$material_color = $affixColor;
$material_color_green = '#99cc00';
$material_color_blue = '#0099cc';
$material_color_wiki = '#89b701';
$material_color_de = '#ff4444';
$material_color_current = '#c75046';
$material_color_idle = '#b8b7b8';
$material_color_maker = '#ac4f37';
$material_color_island = '#669900';
$material_color_second = '#448f8f';
$material_color_jingle = '#f4d147';
$material_color_candy = '#9667ac';

$subpage_color ='#52b6e9';
$wiki_affix_color = 'rgba(0, 0, 0, 0.42)';
/* DEFAULT COLORS $linkColor = '#39b5f7'; $linkHoverColor = '#0e74ab'; $affixColor = 'rgba(66, 133, 228, 0.6)'; $gamesTextColor = '#fff'; $gamesBC = '#6c97f4'; $material_color = $affixColor; $subpage_color ='#52b6e9';
DARK COLORS */
$bg_dark = '#333';
$content_dark ='#464646';
$text_dark = '#eee';
$lines_dark = '#3e3e3e';
$overlay_dark= '#1c1c1c';
$icons_dark = '#39b5f7';
$icons_dark_a = '#777';
//LIGHT COLORS
$bg_light = '#f5f5f5';
$content_light ='#fff';
$lines_light = '#e5e5e5';
$overlay_light = '#1c1c1c';
$icons_light = '#39b5f7';

/* API Stuff */


/* XENFORO VARIABLES */
$status = $visitor['status'];
$message_cnt = $visitor['message_count'];
$likes_cnt = $visitor['like_count'];
$trophy_pnts = $visitor['trophy_points'];
$credits = number_format($visitor['adcredit'], 2, '.', ',');
$dollars = number_format($visitor['dollars'], 2, '.', ',');
$status_id = $visitor['status_profile_post_id'];
$postbiticons = $visitor['adcredit_shop_postbit_icons'];
$profilebiticons = $visitor['adcredit_shop_profile_icons'];
$userName = $visitor['username'];
$xfId = $visitor[ 'user_id'];

/* WORDPRESS STUFF */

$wpId = get_current_user_id();
$z = 0;