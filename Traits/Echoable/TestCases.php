<?php

namespace Shadar\Leetcode\Traits\Echoable;

use NumberFormatter;
use Shadar\Leetcode\Traits\Arrayable;

trait TestCases
{
    use Arrayable;

    protected bool $humanableKey = true;

    protected function printArrayHandler(int $key, array $value): void
    {
        echo $key + 1 . ' test case for array:' . PHP_EOL;
        $this->printArray($value, $this->humanableKey);
    }

    protected function printArraysHandler(int $key, array ...$values): void
    {
        echo $key + 1 . ' test case for arrays:' . PHP_EOL;
        $formatter = new NumberFormatter("en", NumberFormatter::ORDINAL);
        foreach ($values as $k => $value) {
            echo $formatter->format($k + 1) . ':' . PHP_EOL;
            $this->printArray($value, $this->humanableKey);
        }
    }

    protected function printStringHandler(int $key, string $value): void
    {
        echo $key + 1 . ' test case for string: ' . $value .  PHP_EOL;
    }

    protected function printStringsHandler(int $key, string ...$values): void
    {
        echo $key + 1 . ' test case for strings:' . PHP_EOL;
        $formatter = new NumberFormatter("en", NumberFormatter::ORDINAL);
        foreach ($values as $k => $value) {
            echo $formatter->format($k + 1) . ': ' . $value . PHP_EOL;
        }
    }

    protected function printArrayAndNumberTestCase(int $key, array $value, int $number): void
    {
        echo $key + 1 . ' test case for array: ' . PHP_EOL;
        $this->printArray($value, $this->humanableKey);
        echo 'and number: ' . $number . PHP_EOL;
    }
}