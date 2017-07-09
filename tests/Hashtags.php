<?php

use PHPUnit\Framework\TestCase;

class TweetTest extends TestCase
{
    public function testTweetsReturnedBySearchingThroughHashtags() : void
    {
        include_once '../php/get_tweets_by_hashtag.php';

        $this->assert(count($tweets) > 0);

        $first_object = $tweets[0];

        if ($first_object != null) {
            // $this->assert();
        }
    }
}
