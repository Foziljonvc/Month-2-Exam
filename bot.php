<?php

use GuzzleHttp\Exception\GuzzleException;

$update = json_decode(file_get_contents('php://input'));

if (isset($message)) {
    $message = $update->message;
    $chat_id = $message->chat->id;
    $text = $message->text;

    if ($text === '/start') {
        (new \Shohjahon\Month2Exam\User())->saveChatId($chat_id);
        exit();
    }

}

try {
    if ((new \Shohjahon\Month2Exam\User())->getText()) {
        (new \Shohjahon\Month2Exam\Bot\sendMessage())->sendAds((new \Shohjahon\Month2Exam\User())->sendChatId());
    }
} catch (GuzzleException $e) {
    echo $e->getMessage();
}