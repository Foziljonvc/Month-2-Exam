<?php

namespace Shohjahon\Month2Exam;

use PDO;
use PDOException;

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
    }

    public function getText(): array|false
    {
        $stmt = $this->pdo->prepare("SELECT * FROM ads");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false) {
            return false;
        }
        return $result;
    }

    public function saveChatId(int $chatId): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO user (`chatId`) VALUES (:chatId)");
        $stmt->bindParam(':chatId', $chatId);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function sendChatId(): false|array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function truncateAds(): bool
    {
        $stmt = $this->pdo->prepare("TRUNCATE TABLE ads");
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

}