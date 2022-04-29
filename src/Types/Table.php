<?php

namespace Rocketchatchannel\Types;

class Table
{
    /**
     * @var array
     */
    private $headers;
    /**
     * @var array
     */
    private $body;

    public function __construct(array $headers, array $body)
    {
        $this->headers = $headers;
        $this->body = $body;
    }

    private function head()
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

    private function body()
    {
        $bodyPipe = '|';
        foreach ($this->body as $bodyIndex) {
            $bodyPipe .= $bodyIndex . '|';
        }
        $bodyPipe .= PHP_EOL;
        return $bodyPipe;
    }

    public function create()
    {
        return $this->head() . $this->body();
    }
}
