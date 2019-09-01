<?/*
Template Name: XML Resource for Glitching Items
*/
require get_template_directory() . '/inc/init.php';
$visitor = XenForo_Visitor::getInstance();
       if ($visitor->isMemberOf(array(3,18))){
get_header();?>
<div class="article_scroll_bg">

<div class="article_bg"></div>
      <main class="mdl_main mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="mdl_content mdl_color--white mdl-shadow--4dp content mdl_color-text--grey-800 mdl-cell mdl-cell--8-col" >
<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>



        </div>

</div>
		</div>

<?
get_footer();

}
elseif ( ($visitor['user_id']) ) { get_header();?><meta http-equiv="refresh" content="7;url=https://splotus.com/" /><? $user=$visitor[ 'username']; include( get_template_directory() . '/core/permission-error.php');  get_footer();?> <script src="<?=network_home_url();?>js/dialog-permission.js"></script><?} else {get_header();?> <style>.close{display:none;}</style><? get_footer();?> <script type="text/javascript">/*<![CDATA[*/$(document).ready(function(){$('.dialog-button').click();});/*]]>*/</script><?}?>