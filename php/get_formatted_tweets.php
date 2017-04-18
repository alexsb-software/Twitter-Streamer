<?php

/*
    Do necessary formatting and processing on the tweets before
        sending them to the view page

    '$tweets' object is set in other files, 
        check 'twitter_streamer.php' for more info
*/
$formatted_tweets = [];
foreach ($tweets as $tweet) {

    // print_result($tweet);

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

?>