<?php

namespace Shadar\Leetcode\Abstract;

use Exception;
use Shadar\Leetcode\Contracts\{Example as ExampleContract, Solution};
use Shadar\Leetcode\TimeMarkers\Time;
use Shadar\Leetcode\Traits\Arrayable;

abstract class Example implements ExampleContract
{
    use Arrayable;

    protected array $testCases;
    protected Solution $solution;
    protected Time $time;
    protected bool $humanableKey = true;

    public function __construct()
    {
        $this->time = new Time();
    }

    abstract public function handle(): void;

    protected function defaultHandler(string $solutionMethod): void
    {
        foreach ($this->testCases as $key => $testCase) {
            $this->printArrayHandler($key, $testCase);
            $this->time->startTime();
            try {
                echo 'Result: ' . var_export($this->solution->{$solutionMethod}($testCase), true) . PHP_EOL;
            } catch (Exception $e) {
                echo "Error '{$e->getMessage()}' for array " . implode(', ', $testCase) . PHP_EOL;
            }
            $this->time->stopTime();
            echo PHP_EOL;
        }

        $this->printTimeHandler();
    }

    protected function printArrayHandler(int $key, array $value): void
    {
        echo $key + 1 . ' test case for array:' . PHP_EOL;
        $this->printArray($value, $this->humanableKey);
    }

    protected function printTimeHandler(): void
    {
        echo 'Time results for test cases:' . PHP_EOL;
        $this->printArray($this->time->getTimes(6));
    }
}