<?php

include_once 'auth.php';
include_once 'utils.php';

/*
    Get tweets from a user's timeline using his screen name.
*/

$screen_name = substr($config->values->screen_name, 1);

$options = [
    'screen_name' => $screen_name, // only one screen name
    'count' => $config->values->tweets_count // return 'count' number of tweets
];

$tweets = $twitter->get('statuses/user_timeline', $options);

// print_result($tweets);

?>