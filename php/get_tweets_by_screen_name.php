<?php

include_once 'auth.php';
include_once 'utils.php';

/*
    Get tweets from a user's timeline using his screen name.
*/
$options = [
    'screen_name' => 'IEEEAlexSB', // only one screen name
    'count' => 10 // return 'count' number of tweets
];

$tweets = $twitter->get('statuses/user_timeline', $options);

// print_result($tweets);

/*
    Do necessary formatting and processing on the tweets before
        sending them to the view page
*/
$formatted_tweets = [];
foreach ($tweets as $tweet) {
    // initialize new tweet object
    $temp_tweet = new stdClass();

    // copy only necessary attributes    
    $temp_tweet->created_at = str_replace("+0000", "", $tweet->created_at);
    $temp_tweet->id = $tweet->id;
    $temp_tweet->text = $tweet->text;

    $temp_tweet->profile_image_url = (property_exists($tweet, 'retweeted_status')) ? 
            $tweet->retweeted_status->user->profile_image_url : 
            $tweet->user->profile_image_url;

    $temp_tweet->user_name = (property_exists($tweet, 'retweeted_status')) ? 
            $tweet->retweeted_status->user->name : 
            $tweet->user->name;

    $temp_tweet->screen_name = (property_exists($tweet, 'retweeted_status')) ? 
            $tweet->retweeted_status->user->screen_name : 
            $tweet->user->screen_name;

    // push to new array
    $formatted_tweets[] = $temp_tweet;

    // delete object
    unset($temp_tweet);
}

// print_result($formatted_tweets);