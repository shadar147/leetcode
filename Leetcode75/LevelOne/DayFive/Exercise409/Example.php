<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFive\Exercise409;

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
        foreach ($this->testCases as $key => $testCase) {
            $this->printTestCase($key, $testCase);
            $this->time->startTime();
            $this->printResult($this->solution->longestPalindrome($testCase));
            $this->time->stopTime();
            echo PHP_EOL;
        }

        $this->printTimeHandler();
    }

    private function printTestCase(int $key, string $testCase): void
    {
        echo $key + 1 . ' test case for string: ' . $testCase .  PHP_EOL;
    }

    private function printResult(int $result): void
    {
        echo "Result: {$result}" . PHP_EOL;
    }
}