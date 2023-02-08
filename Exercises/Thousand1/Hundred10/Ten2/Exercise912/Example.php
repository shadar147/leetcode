<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred10\Ten2\Exercise912;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;
use Shadar\Leetcode\Enums\Complexity;

class Example extends AbstractExample
{
    protected string $title = '912. Sort an Array';
    protected Complexity $complexity = Complexity::MEDIUM;
    protected array $testCases = [
        [5, 2, 3, 1],
        [5, 1, 1, 2, 0, 0]
    ];

    public function __construct()
    {
        $this->solution = new Solution();
        $this->description =
            'Given an array of integers nums, sort the array in ascending order and return it.' . PHP_EOL . '
            You must solve the problem without using any built-in functions in O(nlog(n)) time complexity and with 
            the smallest space complexity possible.';

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('sortArray');
    }

    protected function printTestCaseInfo(int $key, array|int|string $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printArrayError($exception, $testCase);
    }
}