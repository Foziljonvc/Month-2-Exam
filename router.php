<?php

declare(strict_types=1);

$router = new \Shohjahon\Month2Exam\Router();

$phpFiles = glob(__DIR__ . '/public/*.php');

foreach ($phpFiles as $file) {
    require $file;
}

$router->post('/input', fn() => $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['input']) ? (new \Shohjahon\Month2Exam\User())->Create($_POST['input']) && require 'bot.php' : null);

require 'bot.php';