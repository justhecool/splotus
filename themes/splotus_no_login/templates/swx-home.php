<?/*
Template Name: SmallWorlds_X
*/
//include get_template_directory() . '/inc/init.php';

get_header();?>
<?php
/* Script to pull a notice from the XF */
/** @var $notModel XenForo_Model_Notice */
//$notModel = XenForo_Model::create('XenForo_Model_Notice');
//$notices = $notModel->getNoticeById(10);

?>

<div class="dark about" id="images">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col center">
		<span class="heading-text"><h3 align="center"><a href="#">LATEST SPOILERS</a><hr></h3></span>
		</div>
<?php query_posts('category_name=Spoilers&showposts=3'); ?>
  <?php while (have_posts()) : the_post(); ?>
<?				$imgthumb = catch_that_image();
?>

						        <div class="mdl-cell mdl-cell--4-col">
                <div class="card wow fadeIn">
                    <div class="card-image waves-effect waves-block waves-light" id="spoilers">
                       <a href="<?php echo catch_that_image() ?>"><img  src="<?php echo catch_that_image() ?>"></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php the_title(); ?> <i class="mdi-navigation-more-vert right "></i></span>
                        <p><?php /*
$records = xfac_sync_getRecordsByProviderTypeAndSyncId('', 'thread', get_post()->ID);
if (!empty($records)) {
$record = reset($records);
if (!empty($record->syncData['thread']['links']['permalink'])) {
echo sprintf('<a href="%s"><span class="icon icon-lg">comment</span> Discuss on forums', $record->syncData['thread']['links']['permalink'], __('Discussion'));
}
}
else echo '<a href="'. get_permalink().'"> Discuss on forum';
*/
?></a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?php the_title(); ?><i class="mdi-navigation-close right"></i></span>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
                						          <? if($i % 3 == 0) {echo '';} ?>

						        </div>
					  <?php $i++; endwhile;?>
        </div>
    </div>


	<div class="mdl-grid dark">
		<div class="mdl-cell mdl-cell--12-col center">

<ins class="adsbygoogle ads-responsive"
     style="display:inline-block; "
     data-ad-client="ca-pub-1606222838392126"
     data-ad-slot="2299296695"
     data-ad-format="auto"></ins>
		</div>
	</div>

<div class="eee">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--6-col center">
	<span class="heading-text b"><h3 align="center">Latest Replies<hr></h3></span>
	<div class="slist" align="center">
	<?php
foreach ($topics_query as $thread) { $threadUrl = $threadUrl = $forumUrl. XenForo_Link::buildPublicLink('threads', $thread); $threadTitle = XenForo_Template_Helper_Core::helperWordTrim($thread['title'], 50); echo '<a href="'.$threadUrl.'unread">'.$threadTitle.'</a><div class="count"><img draggable="false" src="'. $imageUrl.'/views"> '.$thread['view_count'].' <img draggable="false" src="'. $imageUrl.'/comments"> '.$thread['reply_count'].'</div>
<br />'; }?>
	</div>
		</div>
			<div class="mdl-cell mdl-cell--6-col center">
	<span class="heading-text b"><h3 align="center">Popular Threads<hr></h3></span>
		<div class="slist" align="center">
	<?php
foreach ($lastThreads as $thread) { $threadUrl = $threadUrl = $forumUrl. XenForo_Link::buildPublicLink('threads', $thread); $threadTitle = XenForo_Template_Helper_Core::helperWordTrim($thread['title'], 50); echo '<a href="'.$threadUrl.'unread">'.$threadTitle.'</a><div class="count"><img draggable="false" src="'. $imageUrl.'/views"> '.$thread['view_count'].' <img draggable="false" src="'. $imageUrl.'/comments"> '.$thread['reply_count'].'</div>
<br />'; }?>
		</div>
		</div>
	</div>
</div>

<? get_footer();?>