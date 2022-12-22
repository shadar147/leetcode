<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayOne\Exercise724;

use Exception;
use Shadar\Leetcode\Contracts\Example as ExampleContract;
use Shadar\Leetcode\TimeMarkers\Time;
use Shadar\Leetcode\Traits\Arrayable;

class Example implements ExampleContract
{
    use Arrayable;

    private array $testCases = [
        [1, 7, 3, 6, 5, 6],
        [1, 2, 3],
        [2, 1, -1],
        [-1, -1, -1, -1, -1, 0],
        [-1, -1, 0, 1, 0, -1]
    ];
    private Solution $solution;
    private Time $time;

    public function __construct()
    {
        $this->solution = new Solution();
        $this->time = new Time();
    }

    public function handle(): void
    {
        foreach ($this->testCases as $key => $testCase) {
            echo $key + 1 . ' test case for array:' . PHP_EOL;
            $this->printArray($testCase, false);
            $this->time->startTime();
            try {
                echo 'Result:' . $this->solution->pivotIndex($testCase) . PHP_EOL;
            } catch (Exception $e) {
                echo "Error '{$e->getMessage()}' for array " . implode(', ', $testCase) . PHP_EOL;
            }
            $this->time->stopTime();
            echo PHP_EOL;
        }

        echo 'Time results for test cases:' . PHP_EOL;
        $this->printArray($this->time->getTimes(6));
    }
}
