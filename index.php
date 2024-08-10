<?php

declare(strict_types=1);

require 'bootstrap.php';

$router = new \Shohjahon\Month2Exam\Router();

$router->get('/', fn() => require 'public/index.php');
//$router->post('/input.php', function () {
//    $user = new \Shohjahon\Month2Exam\User();
//    $message = $user->create($_POST['input']);
//    echo $message; // Natijani ko'rsatish
//});
//require 'router.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['input'])) {
        $user = new \Shohjahon\Month2Exam\User();
        $message = $user->Create($_POST['input']);
        echo $message;
        exit();
    }
}