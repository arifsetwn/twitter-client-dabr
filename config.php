<?php

// Twitter's API URL.
define('API_URL','http://api.twitter.com/1/');

// Cookie encryption key. Max 52 characters
define('ENCRYPTION_KEY', 'arifsetiawan');

// OAuth consumer and secret keys. Available from http://twitter.com/oauth_clients
define('OAUTH_CONSUMER_KEY', 'TDBe9f4hVA0FKgHzscVLA');
define('OAUTH_CONSUMER_SECRET', 'FSwa1opXAK8WCoxe2Tm14Tsb8M5lA9UdtEjv0zyTA');

// bit.ly login and API key for URL shortening
define('BITLY_LOGIN', 'cyanohumanos');
define('BITLY_API_KEY', 'R_659b934bcfbe3fa852bdbf0398e24903');

// slideshare.com API key and Shared secret for getting Slidesha.re thumbnails. Available from http://www.slideshare.net/developers/applyforapi
define('SLIDESHARE_API_KEY', '');
define('SLIDESHARE_SHARED_SECRET', '');

// Optional API keys for retrieving thumbnails
define('FLICKR_API_KEY', '');

// API key for Twitpic - sign up at http://dev.twitpic.com/
define('TWITPIC_API_KEY', '91ce608a6fe7d71ee1728716807313e7');

// Optional: Allows you to turn shortened URLs into long URLs http://www.longurlplease.com/docs
// Uncomment to enable.
// define('LONGURL_KEY', 'true');

// Optional: Enable to view page processing and API time
define('DEBUG_MODE', 'OFF');

// Base URL, should point to your website, including a trailing slash
// Can be set manually but the following code tries to work it out automatically.
$base_url = 'http://'.$_SERVER['HTTP_HOST'];
if ($directory = trim(dirname($_SERVER['SCRIPT_NAME']), '/\,')) {
	$base_url .= '/'.$directory;
}
define('BASE_URL', $base_url.'/');



// MySQL storage of OAuth login details for users
define('MYSQL_USERS', 'OFF');
// mysql_connect('localhost', 'username', 'password');
// mysql_select_db('dabr');

/* The following table is needed to store user login details if you enable MYSQL_USERS:

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(64) NOT NULL,
  `oauth_key` varchar(128) NOT NULL,
  `oauth_secret` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`)
)

*/

// Google Analytics Mobile tracking code
// You need to download ga.php from the Google Analytics website for this to work
// Copyright 2009 Google Inc. All Rights Reserved.
$GA_ACCOUNT = "";
$GA_PIXEL = "ga.php";

function googleAnalyticsGetImageUrl() {
	global $GA_ACCOUNT, $GA_PIXEL;
	$url = "";
	$url .= $GA_PIXEL . "?";
	$url .= "utmac=" . $GA_ACCOUNT;
	$url .= "&utmn=" . rand(0, 0x7fffffff);
	$referer = $_SERVER["HTTP_REFERER"];
	$query = $_SERVER["QUERY_STRING"];
	$path = $_SERVER["REQUEST_URI"];
	if (empty($referer)) {
		$referer = "-";
	}
	$url .= "&utmr=" . urlencode($referer);
	if (!empty($path)) {
		$url .= "&utmp=" . urlencode($path);
	}
	$url .= "&guid=ON";
	return str_replace("&", "&amp;", $url);
}

?>
