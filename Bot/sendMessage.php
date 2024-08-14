<?php

declare(strict_types=1);

namespace Shohjahon\Month2Exam\Bot;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JetBrains\PhpStorm\NoReturn;
use Shohjahon\Month2Exam\User;

class sendMessage
{
    private string $TgAPI;
    private string $TOKEN;

    private Client $client;

    public function __construct()
    {
        $this->TOKEN = $_ENV['TOKEN'];
        $this->TgAPI = 'https://api.telegram.org/bot' . $this->TOKEN . '/';
        $this->client = new Client(['base_uri' => $this->TgAPI]);
    }

    /**
     * @throws GuzzleException
     */
    #[NoReturn] public function sendAds(array $chatId): void
    {
        $response = (new User())->getText();

        foreach ($response as $item) {
            foreach ($chatId as $id) {
                $this->client->post('sendMessage', [
                    'form_params' => [
                        'chat_id' => $id['chatId'],
                        'text' => $item['text'],
                    ]
                ]);
            }
        }

        (new User())->truncateAds();

        exit();
    }
}