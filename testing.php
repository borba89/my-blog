<?php

require __DIR__.'/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('POST', 'http://127.0.0.1:8000/api/post', [

]);
//echo $res->getStatusCode();
// "200"
//echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'

/*
$client = new GuzzleHttp\Client([
    'base_uri'=> 'http://127.0.0.1:8000/api/post',

]);

echo $client->getBody();
*/
$nickname = 'ObjectOrienter'.rand(0, 999);
$data = array(
'nickname' => $nickname,
'avatarNumber' => 5,
'tagLine' => 'a test dev!',
);

$res = $client->post('http://127.0.0.1:8000/api/post', [
'body' => json_encode($data)
]);

echo $res->getBody();