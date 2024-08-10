<?php

namespace Shohjahon\Month2Exam;

use PDO;

class DB
{
    private static ?PDO $pdo = null;

    public static function connect(): PDO
    {
        if (self::$pdo === null) {
            $dsnParams = [
                'host' => $_ENV['DB_HOST'],
                'dbname' => $_ENV['DB_NAME']
            ];

            $dsn = $_ENV['DB_CONNECTION'] . ':' . http_build_query($dsnParams, '', ';');
            $username = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];

            self::$pdo = new PDO($dsn, $username, $password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }
}