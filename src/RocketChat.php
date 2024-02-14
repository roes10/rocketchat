<?php


namespace RoesTen\RocketChat;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class RocketChat
{
    public function __construct(private string $baseUrl, private string $authToken, private string $userId)
    {
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getAuthToken(): string
    {
        return $this->authToken;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @throws GuzzleException
     */
    public function sendMessage(Message $message)
    {
        $client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                "Cache-Control"=> "no-cache",
                "Content-Type" => "application/json",
                "X-Auth-Token" =>  $this->authToken,
                "X-User-Id" =>  $this->userId
            ]
        ]);

        $client->post('chat.postMessage',[
            'json' => $message->toArray()
        ]);
    }

}