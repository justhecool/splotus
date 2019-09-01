<?php
/**
 * splotus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package splotus
 */

if ( ! function_exists( 'splotus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function splotus_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on splotus, use a find and replace
	 * to change 'splotus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'splotus', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'splotus' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'splotus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'splotus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function splotus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'splotus_content_width', 640 );
}
add_action( 'after_setup_theme', 'splotus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function splotus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'splotus' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'splotus' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'splotus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function splotus_scripts() {
	global $blog_id;

	$user_id = get_current_user_id();


	if ( is_404() ) {
	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-404', 'https://splotus.com/css/404.css');

} elseif ($blog_id == 10) {
	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-style-swx', 'https://splotus.com/css/style-swx.css');
	wp_enqueue_style( 'splotus-date', 'https://splotus.com/css/mdDateTimePicker.min.css');

	$style;

} elseif ($blog_id == 13) {
	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-style-swx', 'https://splotus.com/css/style-sww.css');
	wp_enqueue_style( 'splotus-date', 'https://splotus.com/css/mdDateTimePicker.min.css');
	$style;

} elseif ($blog_id == 14) {
	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-style-swx', 'https://splotus.com/css/style-de.css');
	wp_enqueue_style( 'splotus-date', 'https://splotus.com/css/mdDateTimePicker.min.css');
	$style;

} elseif ($blog_id == 15) {
	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-style-swx', 'https://splotus.com/css/style-mmx.css');
	wp_enqueue_style( 'splotus-date', 'https://splotus.com/css/mdDateTimePicker.min.css');
	$style;
} elseif ($blog_id == 2) {
	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-style-games', 'https://splotus.com/css/style-games.css');
	wp_enqueue_style( 'splotus-date', 'https://splotus.com/css/mdDateTimePicker.min.css');
	$style;
}

else {

	wp_enqueue_style( 'splotus-style', 'https://splotus.com/css/style.min.css');
	wp_enqueue_style( 'splotus-date', 'https://splotus.com/css/mdDateTimePicker.min.css');


	$style;
	 }

if ( get_user_meta($user_id,  'color', true ) == null) {
		$style = null;
	} elseif ( get_user_meta($user_id,  'color', true )) {
		$theme = 'css/'. get_user_meta($user_id,  'color', true );
		$style = wp_enqueue_style( 'splotus-theme', 'https://splotus.com/'.$theme.'.css' );
		}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'splotus_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/constants.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_action('widgets_init', 'my_remove_recent_comments_style');
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}


add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
function remove_head_scripts() {
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);

add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}


add_action('wp_logout', 'mw_logout');
function mw_logout() {
    $cookiesSet = array_keys($_COOKIE);
    for ($x=0;$x<count($cookiesSet);$x++) setcookie($cookiesSet[$x],"",time()-1);
}
function set_youtube_as_featured_image($post_id) {

    // only want to do this if the post has no thumbnail
    if(!has_post_thumbnail($post_id)) {

        // find the youtube url
        $post_array = get_post($post_id, ARRAY_A);
        $content = $post_array['post_content'];
        $youtube_id = get_youtube_id($content);

        // build the thumbnail string
        $youtube_thumb_url = 'http://img.youtube.com/vi/' . $youtube_id . '/0.jpg';

        // next, download the URL of the youtube image
        media_sideload_image($youtube_thumb_url, $post_id, 'Sample youtube image.');

        // find the most recent attachment for the given post
        $attachments = get_posts(
            array(
                'post_type' => 'attachment',
                'numberposts' => 1,
                'order' => 'ASC',
                'post_parent' => $post_id
            )
        );
        $attachment = $attachments[0];

        // and set it as the post thumbnail
        set_post_thumbnail( $post_id, $attachment->ID );

    } // end if

} // set_youtube_as_featured_image
add_action('save_post', 'set_youtube_as_featured_image');

function get_youtube_id($content) {

    // find the youtube-based URL in the post
    $urls = array();
    preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $content, $urls);
    $youtube_url = $urls[0][0];

    // next, locate the youtube video id
    $youtube_id = '';
    if(strlen(trim($youtube_url)) > 0) {
        parse_str( parse_url( $youtube_url, PHP_URL_QUERY ) );
        $youtube_id = $v;
    } // end if

    return $youtube_id;

}
function itg_auto_gen_thumbnail($id = null, $size = 'post-thumbnail', $default = false, $type = 'post') {
    /**
     * try to get the featured image URL
     * @see http://www.intechgrity.com/how-to-get-the-souce-url-of-the-featured-image-in-wordpress/
     */
    $image_src = get_post_thumbnail_id($post->ID, 'thumbnail_size' );
    if($image_src != '') {
        //on success return the featured image
        return $image_src;
    } else {
        //try to get the first image
        if($id == null) {
            //called within the loop
            $content = get_the_content();
        } else {
            //get the post content
            $p_data = ($type == 'post')? get_post($id) : get_page($id);
            $content = $p_data->post_content;
            unset($p_data);
        }
        //the match pattern
        $src_pattern = '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i';
        //store $default to $src for returning
        $src = $default;
        $matches = array();

        //match it
        if(preg_match($src_pattern, $content, $matches)) {
            //found, so replace the $src value
            $src = trim($matches[1]);
        }

        return $src;
    }
}

add_action("login_form", "kill_wp_attempt_focus_start");
function kill_wp_attempt_focus_start() {
    ob_start("kill_wp_attempt_focus_replace");
}

function kill_wp_attempt_focus_replace($html) {
    return preg_replace("/d.value = '';/", "", $html);
}

add_action("login_footer", "kill_wp_attempt_focus_end");
function kill_wp_attempt_focus_end() {
    ob_end_flush();
}
if ( (isset($_GET['action']) && $_GET['action'] != 'logout') || (isset($_POST['login_location']) && !empty($_POST['login_location'])) ) {
 add_filter('login_redirect', 'my_login_redirect', 10, 3);
 function my_login_redirect() {
 $location = $_SERVER['HTTP_REFERER'];
 wp_safe_redirect($location);
 exit();
 }
}
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

function ajax_auth_init(){
	wp_enqueue_script( 'google-reCaptcha', 'https://www.google.com/recaptcha/api.js');

    wp_register_script('ajax-auth-script', ''.network_home_url().'js/ajax.min.js' );
    wp_enqueue_script('ajax-auth-script');

    wp_localize_script( 'ajax-auth-script', 'ajax_auth_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => site_url('/wp-admin/'),
        'loadingmessage' => __('Checking database, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
	// Enable the user with no privileges to run ajax_register() in AJAX
	add_action( 'wp_ajax_nopriv_ajaxregister', 'ajax_register' );
	// Enable the user with no privileges to run ajax_forgotPassword() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxforgotpassword', 'ajax_forgotPassword' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_auth_init');
}

function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
  	// Call auth_user_login
	auth_user_login($_POST['username'], $_POST['password'], 'login');

    die();
}

function ajax_register(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-register-nonce', 'security' );
// Check if reCaptcha is valid
	$recaptcha=$_POST['recaptcha'];
	if(!empty($recaptcha))
	{
		$google_url = "https://www.google.com/recaptcha/api/siteverify";
		$secret = '6LfPswoTAAAAAHXDqiJZrF3NHZ7-n3XN6MESq-KZ';
		$ip = $_SERVER['REMOTE_ADDR'];
		$url = $google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$results = curl_exec($curl);
		curl_close($curl);
		$res= json_decode($results, true);
		if(!$res['success'])
		{
			echo json_encode(array('loggedin'=>false, 'message'=>__('reCAPTCHA invalid')));
			die();
		}
	}
	else
	{
		echo json_encode(array('loggedin'=>false, 'message'=>__('Please enter reCAPTCHA')));
		die();
	}
    // Nonce is checked, get the POST data and sign user on
    $info = array();
  	$info['user_nicename'] = $info['nickname'] = $info['display_name'] = $info['first_name'] = $info['user_login'] = sanitize_user($_POST['username']) ;
    $info['user_pass'] = sanitize_text_field($_POST['password']);
	$info['user_email'] = sanitize_email( $_POST['email']);

	// Register the user
    $user_register = wp_insert_user( $info );
 	if ( is_wp_error($user_register) ){
		$error  = $user_register->get_error_codes()	;

		if(in_array('empty_user_login', $error))
			echo json_encode(array('loggedin'=>false, 'message'=>__($user_register->get_error_message('empty_user_login'))));
		elseif(in_array('existing_user_login',$error))
			echo json_encode(array('loggedin'=>false, 'message'=>__('This username is already registered.')));
		elseif(in_array('existing_user_email',$error))
        echo json_encode(array('loggedin'=>false, 'message'=>__('This email address is already registered.')));
    } else {
	  auth_user_login($info['nickname'], $info['user_pass'], 'Registration');
    }

    die();
}

function auth_user_login($user_login, $password, $login)
{
	$info = array();
    $info['user_login'] = $user_login;
    $info['user_password'] = $password;
    $info['remember'] = true;

	$user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
		wp_set_current_user($user_signon->ID);
        echo json_encode(array('loggedin'=>true, 'message'=>__($login.' successful, redirecting...')));
    }

	die();
}

function ajax_forgotPassword(){

	// First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-forgot-nonce', 'security' );

	global $wpdb;

	$account = $_POST['user_login'];

	if( empty( $account ) ) {
		$error = 'Enter an username or e-mail address.';
	} else {
		if(is_email( $account )) {
			if( email_exists($account) )
				$get_by = 'email';
			else
				$error = 'There is no user registered with that email address.';
		}
		else if (validate_username( $account )) {
			if( username_exists($account) )
				$get_by = 'login';
			else
				$error = 'There is no user registered with that username.';
		}
		else
			$error = 'Invalid username or e-mail address.';
	}

	if(empty ($error)) {
		// lets generate our new password
		//$random_password = wp_generate_password( 12, false );
		$random_password = wp_generate_password();


		// Get user data by field and data, fields are id, slug, email and login
		$user = get_user_by( $get_by, $account );

		$update_user = wp_update_user( array ( 'ID' => $user->ID, 'user_pass' => $random_password ) );

		// if  update user return true then lets send user an email containing the new password
		if( $update_user ) {

			$from = 'support@splotus.com'; // Set whatever you want like mail@yourdomain.com

			if(!(isset($from) && is_email($from))) {
				$sitename = strtolower( $_SERVER['SERVER_NAME'] );
				if ( substr( $sitename, 0, 4 ) == 'www.' ) {
					$sitename = substr( $sitename, 4 );
				}
				$from = 'admin@'.$sitename;
			}

			$to = $user->user_email;
			$subject = 'Your new password';
			$sender = 'From: '.get_option('name').' <'.$from.'>' . "\r\n";

			$message = 'Your new password is: '.$random_password;

			$headers[] = 'MIME-Version: 1.0' . "\r\n";
			$headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers[] = "X-Mailer: PHP \r\n";
			$headers[] = $sender;

			$mail = wp_mail( $to, $subject, $message, $headers );
			if( $mail )
				$success = 'Check your email address for your new password.';
			else
				$error = 'System is unable to send your email containing your new password.';
		} else {
			$error = 'Oops! Something went wrong while updating your account.';
		}
	}

	if( ! empty( $error ) )
		//echo '<div class="error_login"><strong>ERROR:</strong> '. $error .'</div>';
		echo json_encode(array('loggedin'=>false, 'message'=>__($error)));

	if( ! empty( $success ) )
		//echo '<div class="updated"> '. $success .'</div>';
		echo json_encode(array('loggedin'=>false, 'message'=>__($success)));

	die();
}

function disable_embeds_init() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}

add_action('init', 'disable_embeds_init', 9999);
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', network_home_url() . 'css/style.min.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


function splotus_theme_css()
{
	global $blog_id;

if ($blog_id == 2 & is_page( 8 )){$color = "#c75046"; $rgb= "199,80,70";}
elseif ($blog_id == 2 & is_page( 10 )){$color = "#b8b7b8"; $rgb= "184,183,184"; }
elseif ($blog_id == 2 & is_page( 12 )){$color = "#ac4f37"; $rgb= "172,79,55";}
elseif ($blog_id == 2 & is_page( 14 )){$color = "#669900"; $rgb= "102,153,0";}
elseif ($blog_id == 2 & is_page( 16 )){$color = "#448f8f"; $rgb= "68,143,143";}
elseif ($blog_id == 2 & is_page( 18 )){$color = "#f4d147"; $rgb= "244,209,71";}
elseif ($blog_id == 2 & is_page( 20 )){$color = "#9667ac"; $rgb= "150,103,172";} else{$color = "#99cc00"; $rgb= "153,204,0";}
if ($blog_id != 1 AND $blog_id !=10){ ?>
<style type="text/css">
.nav li.active>.a, .nav li.active>a,.page-transparent .nav li.active>.a,.page-transparent .nav li.active>a, .splotus-drawer .mdl-navigation__link.mdl-navigation__link.active,.mdl-navigation__link.active{color:<?=$color?>!important}.menu-collapse-toggle.collapsed:hover,.menu-collapse-toggle-default:hover,.menu-collapse-toggle-default:focus,.menu-collapse-toggle-default:active,.menu-collapse-toggle:hover{color:<?=$color;?>!important}.menu-collapse-toggle:hover{color:<?=$color;?>!important}.copyright{background:<?=$color;?>;width:auto;background-size:cover;height:auto;color:#fff;margin:0 auto;text-align:center;font-family:"OpenSansR",sans-serif;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}.about{border-top:solid 3px <?=$color;?>}hr{border:0;border-bottom:solid 1px <?=$color;?>!important;width:18em}.dropdown-menu .a:hover,.dropdown-menu a:hover{color:<?=$color;?>!important}.menu-content .nav a:hover{color:<?=$color;?>!important}.sign-up{color:<?=$color;?>;font-size:20px}.sign-up2{color:<?=$color;?>;font-size:20px}.mdl-snackbar{border-top:<?=$color;?>solid 3px;border-left:<?=$color;?>solid 3px;border-right:<?=$color;?>solid 3px}.mdl-radio.is-checked .mdl-radio__outer-circle{border:2px solid <?=$color;?>}.mdl-radio__inner-circle{position:absolute;z-index:1;margin:0;top:8px;left:4px;box-sizing:border-box;width:8px;height:8px;cursor:pointer;transition-duration:.28s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:transform;transition-property:transform,-webkit-transform;-webkit-transform:scale3d(0,0,0);transform:scale3d(0,0,0);border-radius:50%;background:<?=$color;?>}.mdl-radio__ripple-container .mdl-ripple{background:<?=$color;?>}.status.material-icons{color:<?=$color;?>!important;white-space:pre-wrap}input:-webkit-autofill,input:-webkit-autofill:active,input:-webkit-autofill:focus,input:-webkit-autofill:hover{border-bottom-color:<?=$color;?>!important}.form-group-label.control-focus .floating-label{color:<?=$color;?>!important}.form-control:focus{border-color:<?=$color;?>!important}.btn{background-color:<?=$color;?>!important;border-bottom-right-radius:6px!important;border-bottom-left-radius:6px!important}@media (max-width:768px){.header-transparent.affix{background-color:rgba(66,65,65,.6)!important;border-bottom:solid 4px <?=$color;?>}}.material-scrolltop{background:<?=$color;?>}.material-scrolltop:hover{background-color:<?=$color;?>}.material-scrolltop::before{background:<?=$color;?>}.material-scrolltop,.material-scrolltop::before{background-image:url(https://images.splotus.com/icons/top-arrow.svg);background-position:center 50%;background-repeat:no-repeat}.mdl-textfield__input{border-bottom:1px solid<?=$color;?>!important;}.splotus-drawer-header{border-bottom: 3.5px solid <?=$color;?> !important;}.nav a:hover, .mdl-menu__item:hover {color: <?=$color;?>!important;}.conversations:before, .conversations:after {background-color: <?=$color?>}.splotus-logo-image-mobile {background-color: <?=$color?>}.mdl-textfield__input{border-bottom: 1px solid <?=$color?> !important;}.mdl-textfield--floating-label.is-focused .mdl-textfield__label, .mdl-textfield--floating-label.is-dirty .mdl-textfield__label, .mdl-textfield--floating-label.has-placeholder .mdl-textfield__label {color: <?=$color?>;}.mdl-textfield__label:after {background-color: <?=$color?>;}.mdl-snackbar {border-top: <?=$color?> solid 3px;border-left: <?=$color?> solid 3px;border-right: <?=$color?> solid 3px;}.signal {border: 5px solid <?=$color?>;}.splotus-drawer-header--cover{border-bottom: 1px solid <?=$color;?> !important}.mdl-tabs.is-upgraded .mdl-tabs__tab.is-active:after {background:<?=$color?>;}.mdl-tabs__tab:hover {color: <?=$color?> !important;}.mdl-tabs.is-upgraded .mdl-tabs__tab.is-active {color:<?=$color;?> !important}.mdl-switch.is-checked .mdl-switch__thumb {background: rgb(<?=$rgb?>) !important;}.mdl-switch.is-checked .mdl-switch__track {background: rgba(<?=$rgb?>, 0.5) !important;}.mdl-switch__ripple-container .mdl-ripple{background:<?=$color?> !important}.toast{border: 2px solid <?=$color?>;}.mdl-tabs__tab-bar{border-bottom: 1px solid rgba(<?=$rgb?>, 0.56);}.btn-status{background: <?=$color?> !important;}#personal .mdl-textfield__input {border: 0 solid rgba(<?=$rgb?>, 0.56);}.mddtp-button{color:<?=$color?> !important;}
		.mddtp-picker .mddtp-picker__header{background-color:<?=$color?> !important;}
		.mddtp-picker__body .mddtp-picker__viewHolder .mddtp-picker__grid span.mddtp-picker__cell--today{color:<?=$color?> !important;}
		.mddtp-picker__body .mddtp-picker__viewHolder .mddtp-picker__grid .mddtp-picker__tr span.mddtp-picker__cell:hover,.mddtp-picker__body .mddtp-picker__viewHolder .mddtp-picker__grid span.mddtp-picker__cell--selected{background-color:<?=$color?> !important;}
		.mddtp-picker__years .mddtp-picker__li--current{color:<?=$color?> !important}
		.mddtp-picker__selection span{background-color:<?=$color?> !important;}
</style>
<?
} elseif($blog_id == 10){
	$color = '#0099cc';
?>
	<style type="text/css">
		.mddtp-button{color:<?=$color?> !important;}
		.mddtp-picker .mddtp-picker__header{background-color:<?=$color?> !important;}
		.mddtp-picker__body .mddtp-picker__viewHolder .mddtp-picker__grid span.mddtp-picker__cell--today{color:<?=$color?> !important;}
		.mddtp-picker__body .mddtp-picker__viewHolder .mddtp-picker__grid .mddtp-picker__tr span.mddtp-picker__cell:hover,.mddtp-picker__body .mddtp-picker__viewHolder .mddtp-picker__grid span.mddtp-picker__cell--selected{background-color:<?=$color?> !important;}
		.mddtp-picker__years .mddtp-picker__li--current{color:<?=$color?> !important}
		.mddtp-picker__selection span{background-color:<?=$color?> !important;}
		</style>
<?} else {}}
    add_action('wp_head', 'splotus_theme_css');


add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}

}