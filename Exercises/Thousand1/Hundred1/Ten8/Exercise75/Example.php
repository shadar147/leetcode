<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred1\Ten8\Exercise75;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected string $title = '75. Sort Colors';

    protected array $testCases = [
        [2, 0, 2, 1, 1, 0],
        [2, 0, 1],
        [1, 5, 0, 3, 6, 4, 2],
        [5, 4, 5, 5, 1, 1, 3]
    ];

    public function __construct()
    {
        $this->solution = new Solution();
        $this->description = 'Given an array nums with n objects colored red, white, or blue, sort them in-place so 
            that objects of the same color are adjacent, with the colors in the order red, white, and blue.' . PHP_EOL .
            'We will use the integers 0, 1, and 2 to represent the color red, white, and blue, respectively.' . PHP_EOL .
            'You must solve this problem without using the library\'s sort function.';

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('sortColorsNonComparison');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }

    protected function printResult(array|int|bool $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array
    {
        $this->solution->{$solutionMethod}($testCase);

        return $testCase;
    }

    protected function printError(Exception $exception, int $key, string|int|array $testCase): void
    {
        $this->printArrayError($exception, $testCase);
    }
}