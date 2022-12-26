<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayTwo\Exercise88;

use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            'nums1' => [1, 2, 3, 0, 0, 0],
            'm' => 3,
            'nums2' => [2, 5, 6],
            'n' => 3
        ],
        [
            'nums1' => [1],
            'm' => 1,
            'nums2' => [0],
            'n' => 0
        ],
        [
            'nums1' => [0],
            'm' => 0,
            'nums2' => [1],
            'n' => 1
        ],
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
                $this->solution->merge($testCase['nums1'], $testCase['m'], $testCase['nums2'], $testCase['n']);
                echo 'Result: ' . var_export($testCase['nums1'], true) . PHP_EOL;
            } catch (\Exception $e) {
                echo "Error '{$e->getMessage()}' for array " . implode(', ', $testCase['nums']) . PHP_EOL;
            }
            $this->time->stopTime();
            echo PHP_EOL;
        }

        $this->printTimeHandler();
    }

    private function printTestCaseInfo(int $key, array $testCase): void
    {
        echo $key + 1 . ' test case for arrays:' . PHP_EOL;
        echo 'first: ' . PHP_EOL;
        $this->printArray($testCase['nums1'], $this->humanableKey);
        echo 'second: ' . PHP_EOL;
        $this->printArray($testCase['nums2'], $this->humanableKey);
        echo 'numbers: m=' . $testCase['m'] . ', n=' . $testCase['n'] . PHP_EOL;
    }
}