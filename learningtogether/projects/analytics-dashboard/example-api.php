<?php
session_start();
require_once("/Users/jennifersun/dev/learningtogether/projects/analytics-dashboard/twitteroauth/src/twitteroauth.php"); //Path to twitteroauth library you downloaded in step 3

$twitteruser = "theatlantic"; //user name you want to reference
$notweets = 10; //how many tweets you want to retrieve
$consumerkey = "DTqB3TgESMg8H23T45yDgGPOG";
$consumersecret = "DJkrZiwR33ZnXrcSp3UkHy9D6sW9JG5MdtMTFLT5UgWJTzqLu0";
$accesstoken = "18130537-A5d1qSznataVBhawoZDWIR3pFUgAVGtoCZx9WQqcZ";
$accesstokensecret = "ZGKkkrEwYumluZaLpsELCG6LilqXR2GdUbfToXVKTmowG";

function getToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

$connection = getToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

echo json_encode($tweets);
//echo $tweets; //testing remove for production
?>
