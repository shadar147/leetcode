<?php

namespace Shadar\Leetcode\Traits\Echoable;

use Exception;

trait Errors
{
    protected function printArrayError(Exception $exception, array $array): void
    {
        $this->printErrorHandler($exception, 'for array ' . implode(', ', $array));
    }

    protected function printTestCaseError(Exception $exception, int $key): void
    {
        $this->printErrorHandler($exception, 'for test case ' . $key);
    }

    protected function printStringError(Exception $exception, string $string): void
    {
        $this->printErrorHandler($exception, 'for string ' . $string);
    }

    protected function printStringsError(Exception $exception, string ...$strings): void
    {
        $this->printErrorHandler($exception, implode(', ', $strings));
    }

    private function printErrorHandler(Exception $exception, string $entity = null): void
    {
        echo "Error '{$exception->getMessage()}' " . $entity . PHP_EOL;
    }
}