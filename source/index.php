<?php 

$url = 'https://swapi.dev/api/people/1/';
$ch = curl_init($url);
$result = json_decode(curl_exec($ch));
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
print_r($result);die;