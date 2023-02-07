<?php

namespace Shadar\Leetcode\Abstract;

use Exception;
use Shadar\Leetcode\Contracts\{ExampleContract, SolutionContract};
use Shadar\Leetcode\Entities\ListNode;
use Shadar\Leetcode\TimeMarkers\Time;
use Shadar\Leetcode\Traits\{Arrayable, Echoable};

abstract class AbstractExample implements ExampleContract
{
    use Arrayable,
        Echoable\Errors,
        Echoable\Results,
        Echoable\TestCases;

    protected string $title = '0. Abstract example';
    protected string $description = 'Abstract example description';
    protected array $testCases;
    protected SolutionContract $solution;
    protected Time $time;

    public function __construct()
    {
        $this->time = new Time();
    }

    abstract public function handle(): void;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract protected function printTestCaseInfo(int $key, array|string|int $testCase): void;

    abstract protected function printResult(array|int|bool $result): void;

    abstract protected function printError(Exception $exception, int $key, string|int|array $testCase): void;

    protected function defaultHandler(string $solutionMethod): void
    {
        foreach ($this->testCases as $key => $testCase) {
            $this->printTestCaseInfo($key, $testCase);
            $this->time->startTime();
            try {
                $this->printResult($this->resultHandler($solutionMethod, $testCase));
            } catch (Exception $e) {
                $this->printError($e, $key, $testCase);
            }
            $this->time->stopTime();
            echo PHP_EOL;
        }

        $this->printTimeHandler();
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array|int|bool|ListNode|null
    {
        return $this->solution->{$solutionMethod}($testCase);
    }

    protected function printTimeHandler(): void
    {
        echo 'Time results for test cases:' . PHP_EOL;
        $this->printArray($this->time->getTimes(6));
    }
}