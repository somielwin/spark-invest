<?php

ini_set('display_errors', 1);
date_default_timezone_set('Asia/Manila');

$key = base64_encode('Sp@rk1nv3St');
$auth = "Authorization: Basic ". $key;
$headers = array(
	'Content-Type: application/x-www-form-urlencoded',
    $auth
);

$params = $_POST;

$chMessage = curl_init();

curl_setopt($chMessage, CURLOPT_URL, "https://tools.propelrr.com/listener/spark/save/survey");
curl_setopt($chMessage, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($chMessage, CURLOPT_HEADER, FALSE);
curl_setopt($chMessage, CURLOPT_POST, TRUE);
curl_setopt($chMessage, CURLOPT_POSTFIELDS, http_build_query($params));

curl_setopt($chMessage, CURLOPT_HTTPHEADER, $headers);

set_time_limit(0);
$response = curl_exec($chMessage);

curl_close($chMessage);

if ($response == 1) {
	echo 1;
	exit;
} else {
	echo "Error in processing your submission. Please try again.";
	exit;
}


?>