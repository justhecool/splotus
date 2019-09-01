<?/*
Template Name: Colors
*/ $user = wp_get_current_user();
	$value = get_cimyFieldValue($user->ID, 'COLOR');
	if ($_POST['submitt']){
if ($value == 'Light')
{  set_cimyFieldValue($user->ID, 'COLOR', 'Dark'); }
if ($value == 'Dark')
{  set_cimyFieldValue($user->ID, 'COLOR', 'Light'); }
}
if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != ""){
$url = $_SERVER['HTTP_REFERER'];
}else{
$url = "https://splotus.com";
}

header("Location: ".$url);exit();