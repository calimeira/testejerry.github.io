<?php
include_once 'config.php';
$lang = isset($_GET['lang']) ? $_GET['lang'] : '';
setcookie('lang', $lang, time()+3600*24*100, '/');

header('Location: '.$_SERVER['HTTP_REFERER']); die;
?>