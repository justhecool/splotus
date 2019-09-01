<?php require('/home/splotusc/public_html/wp-blog-header.php');?>
<?php $page = 'spoilers';?>
<?php include '/home/splotusc/public_html/init.php';?>
<?php
$extensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp');

// init result
$result = array();

// directory to scan
$directory = new DirectoryIterator('/home/splotusc/public_html/images');

// iterate
foreach ($directory as $fileinfo) {
    // must be a file
    if ($fileinfo->isFile()) {
        // file extension
        $extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
        // check if extension match
        if (in_array($extension, $extensions)) {
            // add to result
            $result[] = $fileinfo->getFilename();
        }
    }
}
// print result
?>
<?php $images = glob('*.{jpg,png,gif}', GLOB_BRACE);   usort($images, function($a,$b){
  return filemtime($b) - filemtime($a);
}); ?>
<?php $visitor = XenForo_Visitor::getInstance();
         $userName = $visitor['username'];
        //ADMIN
        if ($visitor->isMemberOf(array(3,18,20))){?>
	        <!DOCTYPE HTML>
<html>
	<head>
		<title>Images (Admin Only)</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="https://images.splotus.com/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
			<link href="https://images.splotus.com/css/plugin-min.css" type="text/css" rel="stylesheet">
		<link href="https://images.splotus.com/css/custom-min.css" type="text/css" rel="stylesheet" >
		<link href="https://splotus.com/css/style_s?ver=4.4.2" type="text/css" rel="stylesheet" >
		<link href="https://splotus.com/css/menu_s.css?ver=4.4.2" type="text/css" rel="stylesheet" >
	</head>
	<body>

		<!-- Wrapper -->

			<? $i = 1;?>
	<!-- images-->
<div class="section scrollspy pattern" id="work main">
        <div class="row">
					<?php foreach( $result as $image ):?>

						        <div class="col s12 m2 l2">
                <div class="card thumb">
                    <div class="card-image waves-effect waves-block waves-light" id="spoilers">
                       <a href="<?php echo $image;?>"><img  src="https://images.splotus.com/<?php echo $image;?>"></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"></span>
                        <p><a href="<?php echo $image;?>"><?php echo $image;?></a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i></span>
                        <p></p>
                    </div>
                </div>
                						          <? if($i % 6 == 0) {echo '</div><div class="row">';} ?>

						        </div>
					  <?php $i++; endforeach;?>
        </div>
    </div>
</div>

		<!-- Scripts -->
			<script src="https://images.splotus.com/assets/js/jquery.min.js"></script>
			<script src="https://images.splotus.com/assets/js/jquery.poptrox.min.js"></script>
			<script src="https://images.splotus.com/assets/js/skel.min.js"></script>
			<script src="https://images.splotus.com/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="https://images.splotus.com/assets/js/main.js"></script>
      <script src="https://images.splotus.com/js/plugin-min.js"></script>
    <script src="https://images.splotus.com/js/custom-min.js"></script>
    <? get_footer();?>

	</body>
</html>
<?php  }
       //TESTER  elseif ($visitor->isMemberOf(18)){
      //      header('Location: https://splotus.com/swx/');
		//	exit;
      //   }
    //BANNED     elseif ($visitor->isMemberOf(6)){

		//	exit;
     //    }
     //GUEST elseif ($visitor->isMemberOf(1)){

       //  }
       //Registered
        elseif ($visitor->isMemberOf(array(1,2,6))){?>
<html>
	<head>
		<title>No Permission</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta http-equiv="refresh" content="7;url=<?=network_site_url();?>" />
		<link rel='stylesheet' id='splotus-style-css'  href='https://splotus.com/css/test/style.min.css' type='text/css' media='all' />
		<link rel='stylesheet' id='splotus-menu-css'  href='https://splotus.com/css/menu.css' type='text/css' media='all' />
		<link rel='stylesheet' id='splotus-font-css'  href='//cdn.materialdesignicons.com/1.5.54/css/materialdesignicons.min.css' type='text/css' media='all' />
		<style type="text/css">
			.copyright{display:none;}
			 .close{display:none;}
			 .mdl-dialog__sub_title {
    padding: 2px 24px 0 !important;}
    dialog {
    background: #dc3838 !important;
    color: white !important;}
	</style>	</head>
	<?php $user=$visitor[ 'username']; include( get_template_directory() . '/core/permission-error.php'); ?>
<a style="display:none;"><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_green/" height="80" width="80" /></span></a>

	<? get_footer('error');?>
<script src="<?=network_home_url();?>js/dialog-permission.js"></script>

</html>
       <? }

	 else { ?>
<html>
	<head>
		<title>Images</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel='stylesheet' id='splotus-style-css'  href='https://splotus.com/css/test/style.min.css' type='text/css' media='all' />
		<link rel='stylesheet' id='splotus-menu-css'  href='https://splotus.com/css/menu.css' type='text/css' media='all' />
		<link rel='stylesheet' id='splotus-font-css'  href='//cdn.materialdesignicons.com/1.5.54/css/materialdesignicons.min.css' type='text/css' media='all' />
		<style type="text/css">
			.copyright{display:none;}
			#dialog .close{display:none;}
	</style>	</head>
	<div id=swx>
<header class="header header2 header-transparent header-waterfall " id="head" data-wow-duration="5s" style="z-index:999999; display:none;">
<ul class="nav nav-list pull-right"><a ><span class="avatar waves-attach dialog-button"><img src="//images.splotus.com/guest_small_green/" height="80" width="80" /></span></a></ul>

	<? get_footer('error');?>
<script type="text/javascript">
	/*<![CDATA[*/$(document).ready(function(){
	$('.dialog-button').click();
	});/*]]>*/
	</script>
</html>
  <? };?>