<?php

namespace Shadar\Leetcode\Exercises\Exercise1;

use Shadar\Leetcode\Abstract\Example as AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            'nums' => [2, 7, 11, 15],
            'target' => 9
        ],
        [
            'nums' => [3, 2, 4],
            'target' => 6
        ],
        [
            'nums' => [3, 3],
            'target' => 6
        ],
    ];
    protected bool $humanableKey = false;

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        foreach ($this->testCases as $key => $testCase) {
            $this->printTestCaseInfo($key, $testCase['nums'], $testCase['target']);
            $this->time->startTime();
            try {
                echo 'Result: ' . var_export($this->solution->twoSum($testCase['nums'], $testCase['target']), true) . PHP_EOL;
            } catch (\Exception $e) {
                echo "Error '{$e->getMessage()}' for array " . implode(', ', $testCase['nums']) . PHP_EOL;
            }
            $this->time->stopTime();
            echo PHP_EOL;
        }

        $this->printTimeHandler();
    }

    private function printTestCaseInfo(int $key, array $value, int $target): void
    {
        echo $key + 1 . ' test case for array:' . PHP_EOL;
        $this->printArray($value, $this->humanableKey);
        echo 'target: ' . $target . PHP_EOL;
    }
}