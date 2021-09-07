<?php
$request_body = file_get_contents('php://input');

$json_str = json_decode($request_body,false);
var_dump($json_str);
//$nome = $json_str['nome'];
//$idade = $json_str['idade'];

