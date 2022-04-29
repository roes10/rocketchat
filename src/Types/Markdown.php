<?php


namespace Roes\RocketChatChannel\Types;

class Markdown
{
    /**
     * @param array $headers
     * @param array $body
     * @return string
     */
    public static function table(array $headers, array $body)
    {
        return (new Table($headers, $body))->create();
    }

    /**
     * @param string $string
     * @return string
     */
    public static function bold($string)
    {
        return '**' . $string . '**';
    }

    /**
     * @param $heading
     * @param int $type
     * @return string
     */
    public static function headings($heading, $type)
    {
        return trim(str_repeat('#', $type)) . ' ' . $heading;
    }

    public static function listItem(array $list)
    {
        return '- ' . implode("\n-", $list);
    }

    /**
     * @param string $code
     * @param string $highlighting
     * @return string
     */
    public static function codeBlock($code, $highlighting = 'sh')
    {
        $start = "```" . $highlighting . PHP_EOL;
        $end = "```";
        return $start . $code . PHP_EOL . $end;
    }
}