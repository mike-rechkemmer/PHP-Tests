<?php

/* DATE SYSTEM
Y year | four digit - 2023
y year | two digit - 23
n month | one/two digit - 5 or 12
m month | two digit - 05 or 12
F month | full name - February or March

j Day | one/two digit - 6 or 24

l weekday | full name - Monday

S suffix - th or st (example, 9th or 1st)
page 60 for more
*/

//Script
date_default_timezone_set('EST');

$user = 'Mike';

function display_date(){
    return date('l, jS F'); //weekday, | day single - with th or st suffix | full name month
}

function display_time(){
    return date('H:i');
}

function welcome($user){
    $hour = date('H');
    $greeting = ($hour < 12)?
        '</br>Good Morning, ':'</br>Good Afternoon, ';
    $greeting .= $user;
    return $greeting;
}

echo display_date();
echo '</br>The current time is '.display_time();
echo '</br>'.welcome($user);
?>