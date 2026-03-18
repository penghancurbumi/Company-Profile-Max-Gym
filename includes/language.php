<?php

session_start();

if(isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? 'id';

$file = __DIR__ . "/../lang/$lang.json";

if(!file_exists($file)){
    $file = __DIR__ . "/../lang/id.json";
}

$content = json_decode(file_get_contents($file),true);

if(!function_exists('__')){
function __($key){
    global $content;
    return $content[$key] ?? $key;
}}
?>