<?php
declare(strict_types=1);
namespace RoesTen\RocketChat;

class Message
{

    private bool $important = false;

    private string $title;

    private bool $success = false;

    private string $text;

    private string $reference;

    private ?string $channel = null;

    public function getImportant(): bool
    {
        return $this->important;
    }


    public function setImportant(bool $important)
    {
        $this->important = $important;
        return $this;
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success)
    {
        $this->success = $success;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(string $channel)
    {
        $this->channel = $channel;
        return $this;
    }

    public function toArray(): array
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