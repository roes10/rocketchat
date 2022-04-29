<?php

namespace Roes\RocketChatChannel;

class Message
{
    /**
     * @var bool
     */
    private $important = false;

    /**
     * @var string
     */
    private $title;

    /**
     * @var bool
     */
    private $success = false;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $channel = null;

    /**
     * @return bool
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * @param bool $important
     */
    public function setImportant($important)
    {
        $this->important = $important;
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */

    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    public function toArray()
    {
        return [
            'title' => $this->getTitle(),
            'success' => $this->getSuccess(),
            'important' => $this->getImportant(),
            'text' => $this->getText(),
            'reference' => $this->getReference(),
            'channel' => $this->getChannel()
        ];

    }
}