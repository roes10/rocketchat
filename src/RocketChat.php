<?php


namespace Roes\RocketChatChannel;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class RocketChat
{
    /**
     * @var string
     */
    private $authToken;
    /**
     * @var string
     */
    private $userId;
    /**
     * @var string
     */
    private $baseUrl;


    /**
     * RocketChat constructor.
     * @param string $baseUrl
     * @param string $authToken
     * @param string $userId
     */
    public function __construct($baseUrl,$authToken, $userId)
    {
        $this->authToken = $authToken;
        $this->userId = $userId;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @return string
     */
    public function getUserId()
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