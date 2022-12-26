<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayTwo\Exercise205;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            's' => 'egg',
            't' => 'add'
        ],
        [
            's' => 'foo',
            't' => 'bar'
        ],
        [
            's' => 'paper',
            't' => 'title'
        ]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        foreach ($this->testCases as $key => $testCase) {
            $this->printTestCaseInfo($key, $testCase);
            $this->time->startTime();
            try {
                echo 'Result: ' . var_export($this->solution->isIsomorphic($testCase['s'], $testCase['t']), true) . PHP_EOL;
            } catch (Exception $e) {
                echo "Error '{$e->getMessage()}' for array " . implode(', ', $testCase) . PHP_EOL;
            }
            $this->time->stopTime();
            echo PHP_EOL;
        }

        $this->printTimeHandler();
    }

    private function printTestCaseInfo(int $key, array $testCase): void
    {
        echo $key + 1 . ' test case for strings:' . PHP_EOL
            . 'first: ' . $testCase['s'] . PHP_EOL
            . 'second: ' . $testCase['t'] . PHP_EOL;
    }
}