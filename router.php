<?php

declare(strict_types=1);


$router = new \Shohjahon\Month2Exam\Router();

$router->get('/', fn() => require 'public/index.php');
$router->post('/input', fn() => (new \Shohjahon\Month2Exam\User())->Create($_POST['input']));