<?php
$time = time();
$timestamp = strtotime($time);
// Convert the timestamp to a formatted date
$message_date = date("H:i", $timestamp);
echo $message_date;
