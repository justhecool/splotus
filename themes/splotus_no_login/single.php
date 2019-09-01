<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package splotus
 */
include get_template_directory() . '/inc/init.php';
get_header(); ?>

<div class="article_scroll_bg">
<div class="article_bg"></div>
      <main class="mdl_main mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="mdl_content mdl_color--white mdl-shadow--4dp content mdl_color-text--grey-800 mdl-cell mdl-cell--8-col" >
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

  </div>
	</div>
</div>

<?php
get_footer();
