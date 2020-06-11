<?php
// Require Preloader
require_once($_SERVER['DOCUMENT_ROOT'] . '/../resources/preload.php');

// Check If GET Request
if (!($_GET)) {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: /');
    die();
}

// Require Go Links
require_once($root . '/data/go.php');

// Variables
$direct = key($_GET);

// Loop Through Go Links
if (isset($go[$direct])) {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: ' . $go[$direct]);
    die();
} else {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: /');
    die();
}
?>