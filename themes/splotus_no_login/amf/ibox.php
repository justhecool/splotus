<?php

class apiHack {

private $user;

public $uid;
public $avatarid;
public $avatarname;
public $cl;
public $swsid;
public $sswid;
public $proxy;
public $gametype;
public $gameversion;

public function __construct($swsid, $sswid, $avatarname, $avatarid, $gametype, $proxy, $gameversion) {
$this->swsid = $swsid;
$this->sswid = $sswid;
$this->avatarname = $avatarname;
$this->avatarid = $avatarid;
$this->gametype = $gametype; // change to minimundos.com.br for mm
$this->proxy = $proxy;
$this->gameversion = $gameversion;
}

/////////////////////
// Parse Contents //
public function getContents($str, $startDelimiter, $endDelimiter) {
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

///////////////////////////
// Get between a string //
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

}

//$api = new apiHack();
//$api->apiGet("checkemail", null, "roundspa2rk@googlemail.com");
?>
