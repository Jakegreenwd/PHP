<?php

//Define variables
$day = 'Monday';
$date = '2';
$year = 2015;
$suffix = "";

//switch statement to determine proper suffix to use after date variable
switch($date) {
    case 1:
        $suffix = "st";
        break;
    case 2:
        $suffix = "nd";
        break;
    case 3:
        $suffix = "rd";
        break;
    case 4-30:
        $suffix = "th";
        break;
    default:
        $suffix = "th";
        break;
}

//echo string
echo "The date is $day the $date$suffix, $year"

?>



