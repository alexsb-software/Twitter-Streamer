<?php

include_once 'auth.php';
include_once 'utils.php';

/*
    Get user data from screen name.
    (was required for previous versions of API)

    Just leave it there, no harm done.
*/
$options = [
    'screen_name' => ['IEEEAlexSB'] // can specify multiple screen names
];

$user = $twitter->get('users/lookup', $options);

print_result($user);

?>