<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Twitter</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!--<script src="http://sdepold.github.io/jquery-rss/src/jquery.rss.js"></script>-->
    <script src="http://richhollis.github.io/vticker/downloads/jquery.vticker.min.js?v=1.21"></script>
    <script src="js/index.js"></script>
</head>
<body>
<?php include_once 'php/twitter_streamer.php'; ?>
<p class="rotatedHashtag">#<?php echo $config->values->event_name ?> | #IEEEAlexSB</p>
<div class="stream-container">
    <div class="content-header">
        <div class="header-inner">
            <h2>#EDM'15 Tweets</h2>
        </div>
    </div>
    <div class="stream" id="tweets-panel">
        <ul class="stream-items">
            <?php
            // print_r($formatted_tweets);

            foreach ($formatted_tweets as $tweet) {
            ?>

            <li class="stream-item">
                <div class="tweet">
                    <div class="content">
                        <div class="stream-item-header">
                            <a class="account-group" href="http://twitter.com/<?php echo $tweet->screen_name; ?>">
                                <img class="avatar" src="<?php echo $tweet->profile_image_url; ?>" alt="">
                                <strong class="fullname">
                                    <?php echo $tweet->user_name; ?>
                                </strong>
                                <span class="username">
                                  <s>@</s><b><?php echo $tweet->screen_name; ?></b>
                                </span>
                            </a>
                            <small class="time">
                                <a href="#" class="tweet-timestamp">
                                    <span class="_timestamp"><?php echo $tweet->created_at; ?></span>
                                </a>
                            </small>
                        </div>
                        <!--<p class="tweet-text"  dir="rtl">-->
                        <p class="tweet-text">
                            <?php echo $tweet->text; ?>
                        </p>
                        <?php //if(isset($tweet->entities->media)) { ?>
                        <!-- <div class="cards-media-container"> -->
                        <?php
                        //foreach ($tweet->entities->media as $media) {
                        //$media_url = $media->media_url; // Or $media->media_url_https for the SSL version.
                        ?>
                        <!-- <a class="media" href="<?php //echo $media_url?>">
                            <img src="<?php //echo $media_url ; ?>" width="100%" alt="image" >
                            </a>
                            </div> -->
                        <?php //} } ?>

                    </div>
                </div>
            </li>
            <?php
            }  // end foreach
            ?>
        </ul>
    </div>
    <div class="twitter-footer">
        <div class="twitter-icon-inner">
            <img class="twitter-icon" src="img/twitter.png" alt="image">
        </div>
    </div>
</div>
</body>
</html>
