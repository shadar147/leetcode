<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayThree\Exercise350;

use Shadar\Leetcode\Abstract\Example as AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            'nums1' => [1, 2, 2, 1],
            'nums2' => [2, 2]
        ],
        [
            'nums1' => [4, 9, 5],
            'nums2' => [9, 4, 9, 8, 4]
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
            $this->printResult($this->solution->intersect($testCase['nums1'], $testCase['nums2']));
            $this->time->stopTime();
        }

        $this->time->getTimes();
    }

    private function printTestCaseInfo(int $key, array $testCase): void
    {
        echo $key + 1 . ' test case for arrays:' . PHP_EOL;
        echo 'first: ' . PHP_EOL;
        $this->printArray($testCase['nums1'], $this->humanableKey);
        echo 'second: ' . PHP_EOL;
        $this->printArray($testCase['nums2'], $this->humanableKey);
    }

    private function printResult(array $result): void
    {
        echo 'Result: ' . var_export($result, true) . PHP_EOL;
    }
}