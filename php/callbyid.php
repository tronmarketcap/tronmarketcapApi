<?php
$id = $_GET['id'];
$url = "https://tronmarketcap.org/api/v1/public/getMarketDataById/".$id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_HTTPGET, true);
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json')                                                                       
);  


$server_output = curl_exec ($ch);

$output = json_decode($server_output);
print_r($output);