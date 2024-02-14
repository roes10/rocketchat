<?php

declare(strict_types=1);
namespace RoesTen\RocketChat\Types;

class Markdown
{
    /**
     * @param array $headers
     * @param array $body
     * @return string
     */
    public static function table(array $headers, array $body): string
    {
        return (new Table($headers, $body))->create();
    }

    /**
     * @param string $string
     * @return string
     */
    public static function bold(string $string): string
    {
        return '**' . $string . '**';
    }

    /**
     * @param string $heading
     * @param int $type
     * @return string
     */
    public static function headings(string $heading, int $type): string
    {
        return trim(str_repeat('#', $type)) . ' ' . $heading;
    }

    public static function listItem(array $list): string
    {
        return '- ' . implode("\n-", $list);
    }

    /**
     * @param string $code
     * @param string $highlighting
     * @return string
     */
    public static function codeBlock(string $code, string $highlighting = 'sh'): string
    {
        $start = "```" . $highlighting . PHP_EOL;
        $end = "```";
        return $start . $code . PHP_EOL . $end;
    }
}