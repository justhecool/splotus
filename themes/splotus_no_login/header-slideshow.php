<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package splotus
 */
require get_template_directory() . '/inc/constants.php';

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="<? echo $material_color;?>">
<?php wp_head(); ?>
</head>
<body class="landing">
	<? if(preg_match('/(Chrome|CriOS)\//i',$_SERVER['HTTP_USER_AGENT'])
 && !preg_match('/(Aviator|ChromePlus|coc_|Dragon|Edge|Flock|Iron|Kinza|Maxthon|MxNitro|Nichrome|OPR|Perk|Rockmelt|Seznam|Sleipnir|Spark|UBrowser|Vivaldi|WebExplorer|YaBrowser)/i',$_SERVER['HTTP_USER_AGENT'])){
    // Browser might be Google Chrome
}
else{?> <? include( get_template_directory() . '/core/browser.php'); ?>
 <?}?>

<?php include( get_template_directory() . '/core/login.php'); ?>
<?php include( get_template_directory() . '/core/forgot.php'); ?>
<?php include( get_template_directory() . '/core/register.php'); ?>
<?php include( get_template_directory() . '/core/liam.php'); ?>
<?php include( get_template_directory() . '/core/ben.php'); ?>
<?php include( get_template_directory() . '/core/justin.php'); ?>
<div id="show-loading"></div>
<div  id="top"></div>
<div id=swx>
		<header class="wow fadeIn header" data-wow-duration="5s" id="header">
					<h1 id="logo"><a href="index.php"></a></h1>
					<nav id="nav">
						<ul>
							<li class="active"><a href="">Home</a></li>
							<li>
								<a href="#">Our Story</a>
							</li>
							<li><a href="">Our Games</a>
							<ul>
									<li><a class="current" href="">CURRENT TYCOON</a></li>
									<li><a class="idle-city" href="">IDLE CITY</a></li>
									<li><a class="idle-dev" href="">IDLE GAME DEV</a></li>
									<li><a class="island" href="">ISLAND BUILDER</a></li>
									<li><a class="sec" href="">30 SECOND TAP</a></li>
									<li><a class="jingle" href="">JINGLE TAPPER</a></li>
									<li><a class="candy" href="">CANDY WHACKER</a></li>
								</ul></li>
							<li><a href="#">Our Communities</a>
								<ul>
									<li><a class="swx" href="">SMALLWORLDS X</a></li>
									<li><a class="mmx" href="">MINIMUNDOS X</a></li>
									<li><a class="de" href="">SMALLWORLDS X DE</a></li>
									<li><a class="sw-wiki" href="">SMALLWORLDS WIKI</a></li>
								</ul></li>
							<li><a href="#">Our Team</a>
							<ul>
									<li><a class="liam" href="">LIAM</a></li>
									<li><a class="appless" href="">APPLESS</a></li>
									<li><a class="justin" href="">JUSTIN</a></li>
								</ul></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</nav>
				</header>

<div class="overlay-m"><a href="#top" <div class="container-img1 wow slideInDown"></div>
<span></span>
<p></p>
</div></a>

<div id="main">