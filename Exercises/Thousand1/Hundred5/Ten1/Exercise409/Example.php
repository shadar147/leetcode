<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred5\Ten1\Exercise409;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        'abccccdd',
        'a',
        'Aa'
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('longestPalindrome');
    }

    protected function printResult(int|bool|array $result): void
    {
        $this->printStringResult($result);
    }

    protected function printTestCaseInfo(int $key, string|int|array $testCase): void
    {
        $this->printStringHandler($key, $testCase);
    }

    protected function printError(Exception $exception, int $key, string|int|array $testCase): void
    {
        $this->printStringError($exception, $testCase);
    }
}