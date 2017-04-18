<?php

include_once 'auth.php';
include_once 'utils.php';

// parse configuration file
$config =  parse_ini_file('config.ini', true);

// cast array to object, because I like object notation better
$config = json_decode(json_encode($config));

// print_result($config);

// get tweets according to mode
if ($config->mode->hashtag) {
    include_once 'get_tweets_by_hashtag.php';
} else {
    include_once 'get_tweets_by_screen_name.php';
}

// format tweets
include_once 'get_formatted_tweets.php';

?>