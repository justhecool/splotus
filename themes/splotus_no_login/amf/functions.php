<?
    $user_id = get_current_user_id();

function findmissions($dowork = false) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

$fileHandle = fopen("plugins/xviewmissions.inc", "rb");
// Get content of x-amf file (must read in binary mode)
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true)
{
if (strpos($content, 'textblock')) {
$missionsfound = getContents($content, "</scripts>", "<");
if ($dowork == true) {
for ($i=0; $i<count($missionsfound); $i++) {
preg_match_all('/[a-z0-9]{32}/', $missionsfound[$i], $missionsfounded);
$domission = completemission($missionsfounded[0][0]);
usleep(500000);
}
return 'success';
} else {
return count($missionsfound);
}
}
} else {
    return 'fail';
}

}

function completemission($missionid) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xcompletemission.inc", "rb");
$postdata = str_replace("560934a00022923b4e11136b03c34454", $missionid, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
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
completeMission($newmissionid[0][0]);
} else {
return 'success';
}
} else {
	return 'fail';
}
}



function viewmissions($missiontype) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

$fileHandle = fopen("plugins/xautomission.inc", "rb");
$missionpage = rand(10,99);
// Get content of x-amf file (must read in binary mode)
$npostdata = stream_get_contents($fileHandle);
$epostdata = str_replace("01", strval($missionpage), $npostdata);

switch ($missiontype) {
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
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true)
{
$missionids = getContents($content, "0", "http");
for($i=0; $i<count($missionids); $i++)
{
if (preg_match_all('/[a-z0-9]{32}/', $missionids[$i], $newmissionids)) {
if (count($newmissionids[0]) === 2) {
$acceptedMission = acceptmission($newmissionids[0][1], $newmissionids[0][0]);
} else {
$acceptedMission = acceptmission($newmissionids[0][2], $newmissionids[0][0]);
}
}
}
return 'success';
} else {
    return 'fail';
}
}


function acceptmission($missionid, $spaceid) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;
$fileHandle = fopen("plugins/xacceptmission.inc", "rb");

// Get content of x-amf file (must read in binary mode)
$postdata = str_replace("00000000000000000000000000000000", $missionid, stream_get_contents($fileHandle));
$postdata = str_replace("e087b3d12ce91be3121185f90c85d700", $spaceid, $postdata);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
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

function addcl($clamount) {
	global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

$clamount = ($clamount == "0" ? "99" : strval(rand(11,99)));

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xcl.inc", "rb");
$postdata = str_replace("99", $clamount, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
echo $content;
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

function findavatarpots($seedtype) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

$fileHandle = fopen("plugins/xplanters.inc", "rb");

// Get content of x-amf file (must read in binary mode)
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);


// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true)
{
if (strpos($content, "modelPriceGold")) {
$foundpots = getContents($content, "modelPriceGold", "giftedByAvatarFirstName");
$newpots = array();
for($i=0;$i<1000;$i++) {
if (preg_match('/[a-z0-9]{32}/', $foundpots[$i], $pots)) {
$newpots[] = $pots[0];
}
}
$populatingPots = amfcall1arg("pots", $newpots, $seedtype);
} return 'success';
} else {
	return 'fail';
}
}

function createspace($spaceid) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;


    $fileHandle = fopen("plugins/xspace.inc", "rb");
    $postdata = str_replace("SBOtn", randomstring(5), stream_get_contents($fileHandle));
    $postdata = str_replace("2529", $spaceid, $postdata);
    fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );

echo $content;

}

function randomstring($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

function harvestAll() {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

$fileHandle = fopen("plugins/xplanters.inc", "rb");

// Get content of x-amf file (must read in binary mode)
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);


// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true)
{
if (strpos($content, "modelPriceGold")) {
$foundpots = getContents($content, "modelPriceGold", "giftedByAvatarFirstName");
$newpots = array();
for($i=0;$i<1000;$i++) {
if (preg_match('/[a-z0-9]{32}/', $foundpots[$i], $pots)) {
$newpots[] = $pots[0];
}
}
$populatingPots = amfcall1arg("harvest", $newpots);
} return 'success';
} else {
	return 'fail';
}
}

function amfcall1arg($method, $args_items, $args_extra = null) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

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
		case "harvest":
		$fileHandle = fopen("plugins/xharvest.inc", "rb");
		$postdata = str_replace("485e14a00022c2997e110c4a0f0d9663", $d, stream_get_contents($fileHandle));
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
		} elseif ($args_extra === "midnightlantern") {
			$fileHandle = fopen("plugins/plants/midnightlanterns.inc", "rb");
			$postdata = str_replace("da8baaa00022f65a7e11fa6901b5d2a6", $d, stream_get_contents($fileHandle));
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
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_URL                 => "https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid,
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_TIMEOUT             => 15,
    CURLOPT_PROXY               => $proxy,
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

function altavatars($userid) {
	global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

// Read files as binaries
$fileHandle = fopen("plugins/xfindavatars.inc", "rb");

// Edit the binaries in the file to fit needs and close file
$postdata = str_replace("00000000000000000000", str_pad($userid, 20, " "), stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true)
{

    $newcontent = getContents($content, 'com.smallworlds.entity.pet.core.external.amf.data.PetDetailsResult', 'memoryString');

    for ($i=0; $i<count($newcontent); $i++) {
        $content = str_replace($newcontent[$i], "", $content);
    }
    $avatarsnap = getContents($content, 'snapshotUrl', 'thumbUrl');
    $avatarthumb = getContents($content, 'thumbUrl', 'active');
    $avatarname = getContents($content, 'fullName', 'motto');
    $avatarid = getContents($content, 'id', 'isDefault');

    $avatarpath = '<h3 class="mdl-dialog__title">Alternate Avatars</h3>';
    for ($i=0; $i<count($avatarname); $i++) {
        preg_match('/http(.*?)thumb.png/', $avatarthumb[$i], $at);
        preg_match('/http(.*?)snap.png/', $avatarsnap[$i], $as);
        preg_match('/[a-z0-9]{2,32}/', $avatarid[$i], $ai);
        $avatarpath .= '
        <ul class="mdl-list"><li class="mdl-list__item">
            <img onerror="this.onerror=null;this.src=' . "'/assets/base/img/content/team/unknown.png'" . ';" style="float:right;" src="' . $as[0] . '">
            <span class="mdl-list__item-primary-content">' . cleanjunk($avatarname[$i]) .
            '</span></li></ul>';
    }
    return $avatarpath;
} else {
    return 'fail';
}
}

function viewinventory() {
	global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xviewinventory.inc", "rb");
$postdata = stream_get_contents($fileHandle);
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// POST the CURL and enjoy the outcome :)
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "internalMessage") !== true)
{
//$panel1 = '<div class="panel panel-default"><div class="panel-body">';
$itemsfound = getContents($content, "count", "giftedByAvatarThumbPostfix");
$panel1 = '<div class="input-group-btn">
                                        <button class="btn btn-info c-btn-circle dropdown-toggle" aria-expanded="true" type="button" data-toggle="dropdown">' . count($itemsfound) . ' Items Found <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">';
for ($i=0; $i<count($itemsfound); $i++) {
if (strpos($itemsfound[$i], 'itemId'))
{
preg_match_all('/modelIcon(.*?)png/', $itemsfound[$i], $itemurl);
preg_match('/[a-z0-9]{32}/', $itemsfound[$i], $itemfoundid);
$itimage = substr($itemurl[0][0], 12);
$itinfo = getContents($itemsfound[$i], 'Desc', 'config');
$itname = substr($itinfo[0], 3, -1);
$panel1 .= '<li><label class="checkbox-inline">
                                      <input id="invoitem" name="invoitem[]" type="checkbox" value="' . $itemfoundid[0] .'">
                                    </label><img style="float:center" src="http://content.smallworlds.com/content-v' . $gameversion . '/assets/' . $itimage . '" onclick="copyToClipboard(\'' . $itemfoundid[0] . '\') ">' . cleanjunk($itname) . '</li>&nbsp;';
}
}
$panel1 .= '</ul></div>';
return $panel1;
} else {
    return 'fail';
}
}

function loginUser($useremail, $userpassword, $userproxy, $gametype, $saveuser = false) {

// Configure data to be sent on request
$postdata = json_encode(array("email" => $useremail, "password" => $userpassword, "authenticatorCode" => null, "rememberMe" => false));

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Content-Type: application/json",
            "X-Requested-With: XMLHttpRequest",
            "Referer: https://www." . $gametype . "/",
            "Content-Length: " . strlen($postdata),
            "DNT: 1",
            "Connection: close"
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_HEADER              => true,
    CURLOPT_PROXY               => isset($userproxy) && $userproxy !== null ? $userproxy : $proxy,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true

);

// Make the request to the server
$ch      = curl_init("https://www." . $gametype . "/api/auth/login");
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "defaultAvatar"))
{
    preg_match_all('/\{(?:[^{}]|(?R))*\}/', $content, $json2decode);
    $uswsid = getContents($content, 'SWSID=', ';');
    $usswid = getContents($content, 'SSWID=', ';');
    $uspace = getContents($content, '"spaceId":"', '"');
    $json_a = json_decode($json2decode[0][0], true);
    $aviname = $json_a['defaultAvatar']['fullName'];
    $usnap = $json_a['defaultAvatar']['snapUrl'];
    $uthumb = $json_a['defaultAvatar']['thumbUrl'];
    $uavatarid = $json_a['defaultAvatar']['id'];
    $ucl = $json_a['citizenLevel'];
    $uacctid = $json_a['id'];
    $avatars = $json_a['activeAvatars'];
    $user_id = get_current_user_id();
    update_user_meta($user_id, 'swid', $uswsid);
    update_user_meta($user_id, 'sswid', $usswid);
    update_user_meta($user_id, 'gametype', $gametype);
    update_user_meta($user_id, 'usnap', $usnap);
    update_user_meta($user_id, 'ucl', $ucl);
    update_user_meta($user_id, 'uaccid', $uacctid);
    update_user_meta($user_id, 'uid', $uavatarid);
    update_user_meta($user_id, 'avatars', $avatars);
    update_user_meta($user_id, 'swemail', $useremail);
    update_user_meta($user_id, 'swpw', $userpassword);

    //updatesavedavatar($uswsid[0], $usswid[0], $aviname, $ucl, $uavatarid, $uacctid, $uspace[0], $gametype, $uthumb, $usnap, $uid);
    if ($saveuser === true) {
        addUser($aviname, $useremail, $userpassword, (isset($userproxy) && $userproxy != null ? $userproxy : null), $uthumb, $usnap, base64_encode($json2decode[0][0]), $gametype);
    }
    /*if (isset($userproxy) && $userproxy !== null) {
        changeproxy($userproxy);
    }*/
    $response['success'] = true;
    echo json_encode($response);
    return 'successful';

} else {
	$response['html'] = "<p class='mdl-dialog__sub_title status material-icons mdi mdi-information' style='display:block;'><i class='list material-icons'>info_outline</i>Incorrect email address or password!</p>";
    echo json_encode($response);
    return "fail";
}
}

function searchspaceitems($spaceid) {
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

// Read files as binaries
$fileHandle = fopen("plugins/xspaceitemsearch.inc", "rb");

// Edit the binaries in the file to fit needs and close file
$postdata = str_replace("116091b00022478a6e1103f8043e3b42", $spaceid, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
echo $content;
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
$itemimage = amfcall1arg("spaceitems", $itemslist, null);
for ($i=0; $i<count($itemimage); $i++) {
if (strpos($itemimage[$i], 'itemId'))
{
preg_match_all('/modelIcon(.*?)png/', $itemimage[$i], $itemurl);
$itimage = substr($itemurl[0][0], 12);
$itinfo = getContents($itemimage[$i], 'Desc', 'config');
$itname = substr($itinfo[0], 3, -1);
$panel1 .= '<img style="float:center" src="http://content.smallworlds.com/content-v' . $gameversion . '/assets/' . $itimage . '" onclick="copyToClipboard(\'' . $itemslist[$i] . '\') ">' . cleanjunk($itname);
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

function searchavatarbyname($avatarname) {
global $swsid;
global $sswid;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;
// Get content of x-amf file (must read in binary mode)
$fileHandle = fopen("plugins/xsearchfriend.inc", "rb");
$postdata = str_replace("vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv", str_pad($avatarname, 35, " "), stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (preg_match_all('#(http(s?):)([/|.|\w|\s])*\_thumb.(?:png)#', $content, $face_match) and preg_match_all('/userId(.*?)p/', $content, $id_match))
{

$firstnames = getContents($content, 'firstName', 'user');
$lastnames = getContents($content, 'lastName', 'nameInstance');

$searchedavatars = '<h3 class="mdl-dialog__title"> ' . count($face_match[0]) . ' Avatars Found</h3>
                <ul class="mdl-list">';

for ($i=0; $i<count($face_match[0]); $i++) {
$searchedavatars .= '<li class="mdl-list__item">' . '<img src="' . $face_match[0][$i] . '" /><span class="mdl-list__item-primary-content">' . cleanjunk($firstnames[$i]) . ' ' . cleanjunk($lastnames[$i]) . '</span><button id="' . filter_var($id_match[0][$i], FILTER_SANITIZE_NUMBER_INT) . '" onclick="searchAltAvtr(this.id)" title="Search Alt Avatars" class="status__edit status_icons mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="s s-icon material-icons">search</i></button></li>';
            }

$searchedavatars .= '   </ul>';
return $searchedavatars;
}
}
function avatarMe(){
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;

$url = "http://www." . $gametype . "/api/user/me/";
$header = array(

            "GET /".$url ." HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            "Accept-Encoding: gzip, deflate, br",
            "Cookie: SWSID=" . $swsid . ";",
            "Referer: http://www." . $gametype . "/",
            "Connection: close"
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_HEADER              => false,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true

);

// Make the request to the server
$ch      = curl_init($url);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
//$aviSnap = getContents($content, '"snapUrl": "', '"');
if (strpos($content, "errorCode") !== 2)
{

		preg_match_all('/\{(?:[^{}]|(?R))*\}/', $content, $json2decode);
		 $json_a = json_decode($json2decode[0][0], true);
		 $fname = $json_a['fullName'];
    $lname = $json_a['lastName'];
		$aviSnap = $json_a['snapUrl'];
		$aviId = $json_a['id'];
		$uavatarid = $json_a['defaultAvatar']['id'];

		//echo $aviSnap;
		return $uavatarid;
		}
		else {
			return "fail";
		}

}

function changegender($gender) {
global $swsid;
global $sswid;
global $avatarname;
//global $avatarid;
global $gametype;
global $proxy;
global $gameversion;
$user_id = get_current_user_id();
$avatarid = get_user_meta($user_id,  'uid', true);
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
$postdata = str_replace("11111111111111111111111111111111", $avatarid, stream_get_contents($fileHandle));
fclose($fileHandle);

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/x-amf",
            "Referer: http://content." . $gametype . "/content-v" . $gameversion . "/webassets/main_preloader.swf",
            "DNT: 1",
            "Connection: close",
            "Content-length: " . strlen($postdata)
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true
);

// Make request to the server
$ch      = curl_init("https://www." . $gametype . "/swds/gateway;jsessionid=" . $swsid);
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


function refreshToken($useremail, $userpassword, $userproxy, $gametype, $saveuser = false) {


// Configure data to be sent on request
$postdata = json_encode(array("email" => $useremail, "password" => $userpassword, "authenticatorCode" => null, "rememberMe" => false));

// Set headers for server to read
$header = array(
            "POST / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Content-Type: application/json",
            "X-Requested-With: XMLHttpRequest",
            "Referer: https://www." . $gametype . "/",
            "Content-Length: " . strlen($postdata),
            "DNT: 1",
            "Connection: close"
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_POST                => true,
    CURLOPT_HEADER              => true,
    CURLOPT_PROXY               => isset($userproxy) && $userproxy !== null ? $userproxy : $proxy,
    CURLOPT_POSTFIELDS          => $postdata,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true

);

// Make the request to the server
$ch      = curl_init("https://www." . $gametype . "/api/auth/login");
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "defaultAvatar"))
{
    preg_match_all('/\{(?:[^{}]|(?R))*\}/', $content, $json2decode);
    $uswsid = getContents($content, 'SWSID=', ';');
    $usswid = getContents($content, 'SSWID=', ';');
    $uspace = getContents($content, '"spaceId":"', '"');
    $json_a = json_decode($json2decode[0][0], true);
    $aviname = $json_a['defaultAvatar']['fullName'];
    $usnap = $json_a['defaultAvatar']['snapUrl'];
    $uthumb = $json_a['defaultAvatar']['thumbUrl'];
    $uavatarid = $json_a['defaultAvatar']['id'];
    $ucl = $json_a['citizenLevel'];
    $uacctid = $json_a['id'];
    $avatars = $json_a['activeAvatars'];
    $user_id = get_current_user_id();
    update_user_meta($user_id, 'swid', $uswsid);
    update_user_meta($user_id, 'sswid', $usswid);

    //updatesavedavatar($uswsid[0], $usswid[0], $aviname, $ucl, $uavatarid, $uacctid, $uspace[0], $gametype, $uthumb, $usnap, $uid);
    if ($saveuser === true) {
        addUser($aviname, $useremail, $userpassword, (isset($userproxy) && $userproxy != null ? $userproxy : null), $uthumb, $usnap, base64_encode($json2decode[0][0]), $gametype);
    }
    /*if (isset($userproxy) && $userproxy !== null) {
        changeproxy($userproxy);
    }*/

    return 'success';

} else {
	$response['html'] = "<p class='mdl-dialog__sub_title status material-icons mdi mdi-information' style='display:block;'><i class='list material-icons'>info_outline</i>Incorrect email address or password!</p>";
    echo json_encode($response);
    return "fail";
}
}


function avatarDetail($id){
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;
$user_id = get_current_user_id();
$uavatarid = avatarMe();
$url = "http://www." . $gametype . "/api/avatar/" . $id;
$header = array(

            "GET /".$url ." HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            "Accept-Encoding: gzip, deflate",
            "Cookie: SWSID=" . $swsid . ";",
            "Referer: http://www." . $gametype . "/",
            "Connection: close"
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_HEADER              => false,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_PROXY               => isset($userproxy) && $userproxy !== null ? $userproxy : $proxy,
    CURLOPT_RETURNTRANSFER      => true

);

// Make the request to the server
$ch      = curl_init($url);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
//$aviSnap = getContents($content, '"snapUrl": "', '"');
if (strpos($content, "errorCode") !== 2)
{

		preg_match_all('/\{(?:[^{}]|(?R))*\}/', $content, $json2decode);
		 $json_a = json_decode($json2decode[0][0], true);
		 $fname = $json_a['fullName'];
    $lname = $json_a['lastName'];
		$aviSnap = $json_a['snapUrl'];
		$aviId = $json_a['id'];

		//echo $aviSnap;
		if ($uavatarid == $id){
			return "<div class='heading mdl-cell mdl-cell--2-col'>
			<img src='$aviSnap'>
			<p>$fname</p>
			<button href='#' onclick=chooseAvatar('$aviId',this.id) id='avtr-$aviId' type='submit' class='$aviId avtr-btn mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect' disabled>Make Default</button>
		</div>";
		}
		 else {
		return "<div class='heading mdl-cell mdl-cell--2-col'>
			<img src='$aviSnap'>
			<p>$fname</p>
			<button href='#' onclick=chooseAvatar('$aviId',this.id) id='avtr-$aviId'  type='submit' class='$aviId avtr-btn mdl-menu__item--full-bleed-divider tabs_title btn-status btn_special btn-flat mdl-navigation__link waves-effect'>Make Default</button>
		</div>";
		}}
		else {
			if (refreshToken(get_user_meta($user_id,  'swemail', true), get_user_meta($user_id,  'swpw', true), "", get_user_meta($user_id,  'gametype', true), false) == 'success'){echo '<script type="text/javascript">location.reload();</script>';}
			return "fail";
		}

}





function chooseAvatar($id){
global $swsid;
global $sswid;
global $avatarname;
global $avatarid;
global $gametype;
global $proxy;
global $gameversion;
//avatarInfo($id);
$url = "http://www." . $gametype . "/api/avatar/makeDefaultAvatar/" . $id;
$header = array(

            "GET /".$url ." HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Accept-Encoding: gzip, deflate",
            "Cookie: SWSID=" . $swsid . ";",
            "Content-Type: application/json",
            "X-Requested-With: XMLHttpRequest",
            "Referer: http://www." . $gametype . "/profile/",
            "DNT: 1",
            "Connection: close"
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_HEADER              => false,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true

);

// Make the request to the server
$ch      = curl_init($url);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
if (strpos($content, "errorCode") !== 600)
{

		preg_match_all('/\{(?:[^{}]|(?R))*\}/', $content, $json2decode);
		 $json_a = json_decode($json2decode[0][0], true);
		 $fname = $json_a['fullName'];
    $lname = $json_a['lastName'];
		$aviSnap = $json_a['snapUrl'];
		$aviId = $json_a['id'];
		$user_id = get_current_user_id();
		update_user_meta($user_id, 'uid', $id);


		//echo $aviSnap;
		return "success";
		}
		else {
			return "fail";
		}

}

function completeAll(){
	viewmissions('artist');
	usleep(180000000);
	findmissions(true);
	viewmissions('social');
	usleep(180000000);
	findmissions(true);
	viewmissions('gamer');
	usleep(180000000);
	findmissions(true);
	viewmissions('explorer');
	usleep(180000000);
	findmissions(true);
	return 'success';

}

function apiGet($method, $swsid = null, $sswid = null, $gametype = null, $varid = null, $args_extra = null) {
//global $swsid;
//global $sswid;
global $avatarname;
global $avatarid;
//global $gametype;
global $proxy;
global $gameversion;
// Configure data to be sent on request
    switch ($method)
    {
        case "checkuser":
        $apiurl = "http://www." . $gametype . "/api/user/me";
        break;
        case "avatar":
        $apiurl = "http://www." . $gametype . "/api/avatar/" . $varid;
        break;
        case "ghost":
        $apiurl = "http://www." . $gametype . "/api/avatar/chooseAvatar/" . $varid;
        break;

    }

// Set headers for server to read
$header = array(
            "GET / HTTP/1.1",
            "Host: www." . $gametype,
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36",
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Cookie: SWSID=" . $swsid . ";SSWID=" . $sswid,
            "Content-Type: application/json",
            "X-Requested-With: XMLHttpRequest",
            "Referer: http://" . $gametype . "/",
            "DNT: 1",
            "Connection: close",
);

// Set options for server to understand what to do
$options = array(
    CURLOPT_HTTPHEADER          => $header,
    CURLOPT_HEADER              => false,
    CURLOPT_PROXY               => $proxy,
    CURLOPT_FOLLOWLOCATION      => true,
    CURLOPT_RETURNTRANSFER      => true

);

// Make the request to the server
$ch      = curl_init($apiurl);
curl_setopt_array( $ch, $options );
$content = curl_exec( $ch );
$err     = curl_errno( $ch );
$errmsg  = curl_error( $ch );
$header  = curl_getinfo( $ch );
curl_close( $ch );
echo $apiurl;

	if ($method == "avatar")
    {

		$aviSnap = getContents($content, '"snapUrl": "', '"');


		preg_match_all('/\{(?:[^{}]|(?R))*\}/', $content, $json2decode);
		 $json_a = json_decode($json2decode[0][0], true);
    $aviname = $json_a['defaultAvatar']['fullName'];
    $usnap = $json_a['defaultAvatar']['snapUrl'];
    $uthumb = $json_a['defaultAvatar']['thumbUrl'];
    $uavatarid = $json_a['defaultAvatar']['id'];
    $ucl = $json_a['citizenLevel'];
    $lname = $json_a['lastName'];
    //echo $lname;
		//$aviSnap = $json_a['snapUrl'];
		echo $content;
		//var_dump($content);
    }


 else {

    return 'fail';

}
}


function getContents($str, $startDelimiter, $endDelimiter) {
  $contents = array();
  $startDelimiterLength = strlen($startDelimiter);
  $endDelimiterLength = strlen($endDelimiter);
  $startFrom = $contentStart = $contentEnd = 0;
  while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
    $contentStart += $startDelimiterLength;
    $contentEnd = strpos($str, $endDelimiter, $contentStart);
    if (false === $contentEnd) {
      break;
    }
    $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
    $startFrom = $contentEnd + $endDelimiterLength;
  }

  return $contents;
}

function cleanjunk($Str) {
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
