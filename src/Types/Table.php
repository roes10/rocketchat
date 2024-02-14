<?php

namespace RoesTen\RocketChat\Types;

class Table
{
    private array $headers;

    private array $body;

    public function __construct(array $headers, array $body)
    {
        $this->headers = $headers;
        $this->body = $body;
    }

    private function head(): string
    {
        $headTitle = '|';
        $divisor = '|';
        foreach ($this->headers as $header) {
            $headTitle .= $header . '|';
            $divisor .= ' --- |';
        }

        $headTitle .= PHP_EOL;
        $divisor .= PHP_EOL;

        return $headTitle . $divisor;
    }

    private function body(): string
    {
        $bodyPipe = '|';
        foreach ($this->body as $bodyIndex) {
            $bodyPipe .= $bodyIndex . '|';
        }
        $bodyPipe .= PHP_EOL;
        return $bodyPipe;
    }

    public function create(): string
    {
        return $this->head() . $this->body();
    }
}
