<?php
// Required Files
$root = $_SERVER['DOCUMENT_ROOT'] . '/../';
require_once($root . 'vendor/autoload.php');
require_once($root . 'resources/config.php');
require_once($root . 'resources/functions.php');

// Enable PHP Error Logging On Non-Production
if (!($cfg['environment']['production'])) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

// Base Configuration
date_default_timezone_set($cfg['info']['timezone']);

// Composer Dependencies
$Parsedown = new Parsedown();

// Begin Session
session_start();
?>