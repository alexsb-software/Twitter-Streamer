<?php

include_once 'auth.php';
include_once 'utils.php';

/*
    Get tweets by searching through a list of given hastags
*/

$options = [
    'q' => $config->values->hashtags, // one or more hashtag
    'count' => $config->values->tweets_count, // return 'count' number of tweets
    'result_type' => 'mixed'
    /*
        TODO:
        https://dev.twitter.com/rest/reference/get/search/tweets

        Check API documentation.
        Currently the search will return only 'popular & recent' tweets according to 'result_type' parameter.
        The search API has a 7-day limit. "In other words, no tweets will be found for a date older than one week."
    */
];

$tweets = $twitter->get('search/tweets', $options);

// print_result($tweets);

?>
