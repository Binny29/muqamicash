<?php

# An HTTP POST request example

# a pass-thru script to call my Play server-side code.
# currently needed in my dev environment because Apache and Play run on
# different ports. (i need to do something like a reverse-proxy from
# Apache to Play.)

# the POST data we receive from Sencha (which is not JSON)
$user_id = "1212";
$ticket_number = "TIC9876543210";
$issue_selection = "4";
$subject = "Test Subject";
$message = "Test message from PHP cURL script";

# data needs to be POSTed to the Play url as JSON.
# (some code from http://www.lornajane.net/posts/2011/posting-json-data-with-php-curl)
$data = ["user_id"=>"$user_id", "ticket_number"=>"$ticket_number", "issue_selection"=>"$issue_selection", "subject"=>"$subject", "message"=>"$message"];

$data_string = json_encode($data);

$ch = curl_init('https://instantlycash.online/api/ticket_insert.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Cache-control: no-cache',
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

echo $result;

?>