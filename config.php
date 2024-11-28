<?php
// ternary operatörü -> if bloğu karşılığı
$site_url = (isset($_SERVER['HTTP_HOST'])) ? 'http://' . $_SERVER['HTTP_HOST'] : 'https://' . $_SERVER['HTTPS_HOST'];

define('APP_URL', $site_url);
define('APP_ROOT', dirname(__FILE__));


// $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, PATCH, DELETE, OPTIONS
// $_SERVER['REQUEST_URI']; // urlimize gelen bütün istekleri alır
