<?php
require_once('ibox.php');

class amfHack extends apiHack {

////////////////////
// FIND MISSIONS //
public function findmissions($dowork = false) {
$fileHandle = fopen("plugins/xviewmissions.inc", "rb");
// Get content of x-amf file (must read in binary mode)
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
if (strpos($content, 'textblock')) {
$missionsfound = $this->getContents($content, "</scripts>", "<");
if ($dowork == true) {
for ($i=0; $i<count($missionsfound); $i++) {
preg_match_all('/[a-z0-9]{32}/', $missionsfound[$i], $missionsfounded);
$domission = $this->completemission($missionsfounded[0][0]);
usleep(500000);
}
return 'success';
echo "success";
} else {
return count($missionsfound);
print "success";
}
}
} else {
    return 'fail';
    print "fail";
}
}

/////////////////////////
// COMPLETE MISSIONS  //
public function completemission($missionid) {

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xcompletemission.inc", "rb");
$postdata = str_replace("560934a00022923b4e11136b03c34454", $missionid, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
if (preg_match_all('/[a-z0-9]{32}/', $content, $newmissionid)) {
usleep(250000);
$this->completeMission($newmissionid[0][0]);
} else {
return 'success';
}
} else {
	return 'fail';
}
}

////////////////////////////////////////
// VIEW THE ARTIST, EXP, GAME, SOC   //
//////////////////////////////////////
public function viewmissions($gametype) {

$fileHandle = fopen("plugins/xautomission.inc", "rb");
$missionpage = rand(10,99);
// Get content of x-amf file (must read in binary mode)
$npostdata = stream_get_contents($fileHandle);
$epostdata = str_replace("01", strval($missionpage), $npostdata);

switch ($gametype) {
    case "artist":
        $postdata = str_replace("1", "1", $epostdata);
        break;
    case "explorer":
        $postdata = str_replace("1", "2", $epostdata);
        break;
    case "gamer":
        $postdata = str_replace("1", "3", $epostdata);
        break;
    case "social":
        $postdata = str_replace("1", "4", $epostdata);
        break;
    default:
        $postdata = str_replace("1", "1", $epostdata);
}

fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
$missionids = $this->getContents($content, "0", "http");
for($i=0; $i<count($missionids); $i++)
{
if (preg_match_all('/[a-z0-9]{32}/', $missionids[$i], $newmissionids)) {
if (count($newmissionids[0]) === 2) {
$acceptedMission = $this->acceptmission($newmissionids[0][1], $newmissionids[0][0]);
} else {
$acceptedMission = $this->acceptmission($newmissionids[0][2], $newmissionids[0][0]);
}
}
}
} else {
    return 'fail';
}
}

////////////////////////////////////////
// ACCEPT MISSIONS SOC, GAM, EXP, ART//
//////////////////////////////////////
public function acceptmission($missionid, $spaceid) {

$fileHandle = fopen("plugins/xacceptmission.inc", "rb");

// Get content of x-amf file (must read in binary mode)
$postdata = str_replace("00000000000000000000000000000000", $missionid, stream_get_contents($fileHandle));
$postdata = str_replace("e087b3d12ce91be3121185f90c85d700", $spaceid, $postdata);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
    return 'success';
} else {
    return 'fail';
}
}

/////////////////////////
//   VIEW INVENTORY   //
public function viewinventory() {

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xviewinventory.inc", "rb");
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
//$panel1 = '<div class="panel panel-default"><div class="panel-body">';
$itemsfound = $this->getContents($content, "count", "giftedByAvatarThumbPostfix");
$panel1 = '<div class="input-group-btn">
                                        <button class="btn btn-info c-btn-circle dropdown-toggle" aria-expanded="true" type="button" data-toggle="dropdown">' . count($itemsfound) . ' Items Found <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">';
for ($i=0; $i<count($itemsfound); $i++) {
if (strpos($itemsfound[$i], 'itemId')) 
{
preg_match_all('/modelIcon(.*?)png/', $itemsfound[$i], $itemurl);
preg_match('/[a-z0-9]{32}/', $itemsfound[$i], $itemfoundid);
$itimage = substr($itemurl[0][0], 12);
$itinfo = $this->getContents($itemsfound[$i], 'Desc', 'config');
$itname = substr($itinfo[0], 3, -1);
$panel1 .= '<li><label class="checkbox-inline">
                                      <input id="invoitem" name="invoitem[]" type="checkbox" value="' . $itemfoundid[0] .'">
                                    </label><img style="float:center" src="http://content.smallworlds.com/content-v' . $this->gameversion . '/assets/' . $itimage . '" onclick="copyToClipboard(\'' . $itemfoundid[0] . '\') ">' . $this->cleanjunk($itname) . '</li>&nbsp;';
}
}
$panel1 .= '</ul></div>';
return $panel1;
} else {
    return 'fail';
}
}

////////////////////////////
//  GIFT ITEM TO PLAYER  //
public function giftitem($giftid, $receiverid) {

$totalitems = count($giftid);
$sentitems = 0;
if (is_array($giftid)) {
    for($i=0;$i<count($giftid);$i++) {
        $sentitem = $this->giftitem($giftid[$i], $receiverid);
        sleep(1);
        if ($sentitem == "sent") {
            $sentitems++;
        }
    }
    return strval($sentitems) . ' items sent out of ' . strval($totalitems) . ' sent.';
    // $sentitems = $this->amfcall1arg("senditem", $giftid, $receiverid);
}


// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xgiftitem.inc", "rb");
$postdata = str_replace("00000000000000000000000000000000", $giftid, stream_get_contents($fileHandle));
$postdata = str_replace("11111111111111111111111111111111", $receiverid, $postdata);
$postdata = str_replace("V", "1", $postdata);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
    return 'sent';
} else {
    return 'fail';
}
}

///////////////////////////
// ADD MORE CL TO ACCT  //
public function addcl($clamount) {

$clamount = ($clamount == "0" ? "99" : strval(rand(11,99)));

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xcl.inc", "rb");
$postdata = str_replace("99", $clamount, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
echo $content;
if (strpos($content, "success")) {
    return 'success';
}
if (strpos($content, "internalMessage") !== true) 
{

} else {
    return 'fail';
}
}

////////////////////
// SWITCH GENDER //
public function changegender($gender) {

// Read files as binaries
if ($gender === "dog" ) {
$fileHandle = fopen("plugins/genders/xgenderdog.inc", "rb");
} elseif ($gender === "cat") {
$fileHandle = fopen("plugins/genders/xgendercat.inc", "rb");
} elseif ($gender ==="female") {
$fileHandle = fopen("plugins/genders/xgenderfemale.inc", "rb");
} elseif ($gender === "male") {
$fileHandle = fopen("plugins/genders/xgendermale.inc", "rb");
} elseif ($gender === "ghost") {
$fileHandle = fopen("plugins/genders/xgenderghost.inc", "rb");
} elseif ($gender === "no-body") {
$fileHandle = fopen("plugins/genders/xgenderhead.inc", "rb");
}

// Edit the binaries in the file to fit needs and close file
$postdata = str_replace("11111111111111111111111111111111", $this->avatarid, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
    return 'success';
} else {
    return 'fail';
}
}

//////////////////////////
// DISPLAY SPACE ITEMS //
public function searchspaceitems($spaceid) {

// Read files as binaries
$fileHandle = fopen("plugins/xspaceitemsearch.inc", "rb");

// Edit the binaries in the file to fit needs and close file
$postdata = str_replace("116091b00022478a6e1103f8043e3b42", $spaceid, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
if (preg_match_all('/[a-z0-9]{32}/', $content, $space_item)) {
$itemslist = array();
for ($i=0; $i<count($space_item[0]); $i++) {
if ($spaceid !== $space_item[0][$i]) {
$itemslist[] = $space_item[0][$i];
}
}
$panel1 = '';
//$panel1 = '<div class="panel panel-default"><div class="panel-body">';
$itemimage = $this->amfcall1arg("spaceitems", $itemslist, null);
for ($i=0; $i<count($itemimage); $i++) {
if (strpos($itemimage[$i], 'itemId')) 
{
preg_match_all('/modelIcon(.*?)png/', $itemimage[$i], $itemurl);
$itimage = substr($itemurl[0][0], 12);
$itinfo = $this->getContents($itemimage[$i], 'Desc', 'config');
$itname = substr($itinfo[0], 3, -1);
$panel1 .= '<img style="float:center" src="http://content.smallworlds.com/content-v' . $this->gameversion . '/assets/' . $itimage . '" onclick="copyToClipboard(\'' . $itemslist[$i] . '\') ">' . $this->cleanjunk($itname);
}
}
//$panel1 .= '</div></div>';
return $panel1;
if (count($itemimage) == 0) {
    return '<label class="c-content-label c-font-white c-bg-red c-margin-t-20">
                                    <i class="fa fa-check"></i>Space is empty.
                                </label>';
}
}
} else {
	return 'fail';
}
}

////////////////////
// FIND ALL POTS //
public function findavatarpots($seedtype) {

$fileHandle = fopen("plugins/xplanters.inc", "rb");

// Get content of x-amf file (must read in binary mode)
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);


// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
if (strpos($content, "modelPriceGold")) {
$foundpots = $this->getContents($content, "modelPriceGold", "giftedByAvatarFirstName");
$newpots = array();
for($i=0;$i<10;$i++) {
if (preg_match('/[a-z0-9]{32}/', $foundpots[$i], $pots)) {
$newpots[] = $pots[0];
}
}
$populatingPots = $this->amfcall1arg("pots", $newpots, $seedtype);
}
} else {
	return 'fail';
}
}

///////////////////////////
// FIND HOST OR SPACEID //
public function getspaceinfo($method, $arg1, $arg2 = null) {

  switch ($method)
  {
  	case "hostname":
  	$fileHandle = fopen("plugins/xhostname.inc", "rb");
  	$postdata = str_replace("116091b00022478a6e1103f8043e3b42", $arg1, stream_get_contents($fileHandle));
  	fclose($fileHandle);
  	break;
  	case "spaceid":
  	if ($arg2 === "home" ) {
			$fileHandle = fopen("plugins/xhomeid.inc", "rb");
			$postdata = str_replace("                                                  ", str_pad($arg1, 50, " "), stream_get_contents($fileHandle));
			fclose($fileHandle);
		} elseif ($arg2 === "alias") {
			$fileHandle = fopen("plugins/xaliasid.inc", "rb");
			$postdata = str_replace("                                                  ", str_pad($arg1, 50, " "), stream_get_contents($fileHandle));
			fclose($fileHandle);
		}
  	break;
  }

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
if (strpos($content, '.com')) {
preg_match_all('/ec(.*).com/', $content, $hostnamefound);
return $hostnamefound[0][0];
} elseif (preg_match_all('/[a-z0-9]{32}/', $content, $space_item)) 
{
return $space_item[0][0];
}
} else {
	return 'fail';
}
}

////////////////////
// SPACE MEMBERS //
public function findspacemembers($spaceid) {

$fileHandle = fopen("plugins/xspacemembers.inc", "rb");

// Get content of x-amf file (must read in binary mode)
$npostdata = stream_get_contents($fileHandle);
$postdata = str_replace("116091b00022478a6e1103f8043e3b42", $spaceid, $npostdata);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{
if (strpos($content, "startIndex")) {
$membersfound = '';
$spaceofficers = $this->getContents($content, "Officer", $spaceid);
$spacecontributors = $this->getContents($content, "Contributor", $spaceid);
$spacemembers = $this->getContents($content, "Member", $spaceid);
$membersfound .= "OFFICERS -<br>";
for($i=0;$i<count($spaceofficers);$i++) {
$membersfound .= substr($spaceofficers[$i], 4) . "<br>";
}
$membersfound .= "<br>CONTRIBUTORS -<br>";
for($i=0;$i<count($spacecontributors);$i++) {
$membersfound .= substr($spacecontributors[$i], 4) . "<br>";
}
$membersfound .= "<br>MEMBERS -<br>";
for($i=0;$i<count($spacemembers);$i++) {
$membersfound .= substr($spacemembers[$i], 4) . "<br>";
}
return $this->cleanjunk($membersfound);
}
} else {
    return 'fail';
}
}

//////////////////////////
// FIND ACCOUNT AVATARS //
public function altavatars($userid) {

// Read files as binaries
$fileHandle = fopen("plugins/xfindavatars.inc", "rb");

// Edit the binaries in the file to fit needs and close file
$postdata = str_replace("00000000000000000000", str_pad($userid, 20, " "), stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true) 
{

    $newcontent = $this->getContents($content, 'com.smallworlds.entity.pet.core.external.amf.data.PetDetailsResult', 'memoryString');
    
    for ($i=0; $i<count($newcontent); $i++) {
        $content = str_replace($newcontent[$i], "", $content);
    }
    $avatarsnap = $this->getContents($content, 'snapshotUrl', 'thumbUrl');
    $avatarthumb = $this->getContents($content, 'thumbUrl', 'active');
    $avatarname = $this->getContents($content, 'fullName', 'motto');
    $avatarid = $this->getContents($content, 'id', 'isDefault');

    $avatarpath = '';
    for ($i=0; $i<count($avatarname); $i++) {
        preg_match('/http(.*?)thumb.png/', $avatarthumb[$i], $at);
        preg_match('/http(.*?)snap.png/', $avatarsnap[$i], $as);
        preg_match('/[a-z0-9]{2,32}/', $avatarid[$i], $ai);
        $avatarpath .= '<div class="avatarfloat" style="float:left;"><img onerror="this.onerror=null;this.src=' . "'/assets/base/img/content/team/unknown.png'" . ';" style="float:left;" src="' . $as[0] . '">
        <div class="avatarinfo col-md-4 c-center" style="float:right">
            <img src="' . $at[0] . '"  onclick="copyToClipboard(\'' . $ai[0] . '\')">
            <br>' . $this->cleanjunk($avatarname[$i]) .
            '</div>
            </div>';
    }
    return $avatarpath;
} else {
    return 'fail';
}
}

//////////////////////////////////
// ALLOWS YOU TO CREATE SPACES //
////////////////////////////////
public function createspace($spaceid) {

switch ($spaceid) 
    {
        case "trading post":
        $spaceid = "";
        break;
    }
    $fileHandle = fopen("plugins/xspace.inc", "rb");
    $postdata = str_replace("SBOtn", $this->randomstring(5), stream_get_contents($fileHandle));
    $postdata = str_replace("2529", $spaceid, $postdata);
    fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );

if (strpos($content, 'success') !== false) {
$success = 'Success: space has been created!';
return $success;
}
}

////////////////////////////////////////
// ALLOWS YOU TO GET AVATARS BY NAME //
public function searchavatarbyname($avatarname) {

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xsearchfriend.inc", "rb");
$postdata = str_replace("vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv", str_pad($avatarname, 35, " "), stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );

if (preg_match_all('#(http(s?):)([/|.|\w|\s])*\_thumb.(?:png)#', $content, $face_match) and preg_match_all('/userId(.*?)p/', $content, $id_match)) 
{

$firstnames = $this->getContents($content, 'firstName', 'user');
$lastnames = $this->getContents($content, 'lastName', 'nameInstance');

$searchedavatars = '<div class="btn-group">
                <a class="btn btn-info c-theme-btn dropdown-toggle" data-toggle="dropdown"><img src="' . $face_match[0][0] . '"> ' . count($face_match[0]) . ' Avatars Found <span class="caret"></span></a>
                <ul class="dropdown-menu">';

for ($i=0; $i<count($face_match[0]); $i++) {
$searchedavatars .= '<<form id="formreg" method="post"><li class="c-font-uppercase c-font-bold" onclick="copyToClipboard(\'' . filter_var($id_match[0][$i], FILTER_SANITIZE_NUMBER_INT) . '\') ">' . '<img src="' . $face_match[0][$i] . '" />' . $this->cleanjunk($firstnames[$i]) . ' ' . $this->cleanjunk($lastnames[$i]) . '</li></form>';
            }
            
$searchedavatars .= '   </ul> </div>';
return $searchedavatars;
} 
}


//////////////////////////
//  CALL AMF    1 ARG  //
public function amfcall1arg($method, $args_items, $args_extra = null) {

$curly = array();
$result = array();


// POST the CURL and enjoy the outcome :)
$mh = curl_multi_init();

// loop through $data and create curl handles
// then add them to the multi-handle
foreach ($args_items as $id => $d) {

// Get the binaries from the amf file
	switch ($method) 
	{
		case "spaceitems":
		$fileHandle = fopen("plugins/xiteminfo.inc", "rb");
		$postdata = str_replace("116091b00022478a6e1103f8043e3b42", $d, stream_get_contents($fileHandle));
		fclose($fileHandle);
		break;
		case "pots":
		if ($args_extra === "azuretrumpet" ) {
			$fileHandle = fopen("plugins/plants/xazure.inc", "rb");
			$postdata = str_replace("9bfee9b0002271b86e11a2bc01218877", $d, stream_get_contents($fileHandle));
			fclose($fileHandle);
		} elseif ($args_extra === "morningstar") {
			$fileHandle = fopen("plugins/plants/xmorningstar.inc", "rb");
			$postdata = str_replace("9bfee9b0002271b86e11a2bc01218877", $d, stream_get_contents($fileHandle));
			fclose($fileHandle);
		} elseif ($args_extra === "dreadrose") {
			$fileHandle = fopen("plugins/plants/xdreadrose.inc", "rb");
			$postdata = str_replace("9bfee9b0002271b86e11a2bc01218877", $d, stream_get_contents($fileHandle));
			fclose($fileHandle);
		} elseif ($args_extra === "exotichybrid") {
			$fileHandle = fopen("plugins/plants/xexotichybrid.inc", "rb");
			$postdata = str_replace("9bfee9b0002271b86e11a2bc01218877", $d, stream_get_contents($fileHandle));
			fclose($fileHandle);
		}
		break;
        case "senditem":
        $fileHandle = fopen("plugins/xgiftitem.inc", "rb");
        $postdata = str_replace("00000000000000000000000000000000", $d, stream_get_contents($fileHandle));
        $postdata = str_replace("11111111111111111111111111111111", $args_extra, $postdata);
        $postdata = str_replace("V", "1", $postdata);
        fclose($fileHandle);
        break;
	}

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $this->gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $this->swsid . ";SSWID=" . $this->sswid,           
            "Content-Type: application/x-amf",           
            "Referer: http://content." . $this->gametype . "/content-v" . $this->gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",     
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_URL                 => "https://www." . $this->gametype . "/swds/gateway;jsessionid=" . $this->swsid,
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_TIMEOUT             => 15, 
    CURLOPT_PROXY               => $this->proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);


$curly[$id] = curl_init();
curl_setopt_array($curly[$id], $options);
curl_multi_add_handle($mh, $curly[$id]);
}
 
// Execute the request to the server
$running = null;
do {
  curl_multi_exec($mh, $running);
} while($running > 0);
 
 
// Get content from each curl made and remove the curl
foreach($curly as $id => $c) {
  $result[$id] = curl_multi_getcontent($c);
  curl_multi_remove_handle($mh, $c);
}
curl_multi_close($mh);
return $result;
}

////////////////////////////////////
// Clean a string from junk char //
public function cleanjunk($Str) {  
  $StrArr = str_split($Str); $NewStr = '';
  foreach ($StrArr as $Char) {    
    $CharNo = ord($Char);
    if ($CharNo == 163) { $NewStr .= $Char; continue; } // keep £ 
    if ($CharNo > 31 && $CharNo < 127) {
      $NewStr .= $Char;    
    }
  }  
  return $NewStr;
}

}

?>
