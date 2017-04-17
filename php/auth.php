<?php

require 'vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$CONSUMER_KEY = '';
$CONSUMER_SECRET = '';
$ACCESS_TOKEN = '';
$ACCESS_TOKEN_SECRET = '';

$twitter = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

?>