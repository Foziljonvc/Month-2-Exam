<?php

namespace Shohjahon\Month2Exam;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function Create(string $text): string
    {
        $stmt = $this->pdo->prepare("INSERT INTO ads (`text`) VALUES (:text)");
        $stmt->bindParam(':text', $text);

        if ($stmt->execute()) {
            return 'Data successfully inserted!';
        } else {
            return 'Error occurred while inserting data.';
        }
//        header('location: /index');
//        exit();
    }

}