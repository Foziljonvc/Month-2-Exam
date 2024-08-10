<?php

declare(strict_types=1);

session_start();

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$timezone = getenv('TIMEZONE') ?: 'UTC';
if ($timezone === false) {
    $timezone = 'UTC';
}

date_default_timezone_set($timezone);