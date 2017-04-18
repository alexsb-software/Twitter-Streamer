# <span itemprop="name">Twitter Streamer</span>
[![Build Status](https://travis-ci.org/amrufathy/Twitter-Streamer.svg?branch=master)](https://travis-ci.org/amrufathy/Twitter-Streamer)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/amrufathy/Twitter-Streamer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/amrufathy/Twitter-Streamer/?branch=master)

## Installation
1) PHP 7.1 is required
2) Install [Composer](https://getcomposer.org/download/)
3) Install [twitteroauth](https://twitteroauth.com/) library (using composer)

## Usage
1) Add authorization keys in 'php/auth.php' for the Twitter API
2) Setup required configuration in 'php/config.ini'
3) Refresh 'index.php' to see changes
4) Make sure to use an auto-refresh plugin to continouosly update the stream

## TODO
1) Make AJAX request to get the tweets with a timer
2) Unit test
3) Have Tarek pass over the css for enhancements
4) PHP 5.6 compatability