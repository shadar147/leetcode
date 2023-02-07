<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred1\Ten9\Exercise88;

use Exception;
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
        $this->defaultHandler('merge');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArraysHandler($key, $testCase['nums1'], $testCase['nums2']);
        echo 'numbers: m=' . $testCase['m'] . ', n=' . $testCase['n'] . PHP_EOL;
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, string|int|array $testCase): void
    {
        $this->printTestCaseError($exception, $key);
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array|int|bool
    {
        $this->solution->{$solutionMethod}($testCase['nums1'], $testCase['m'], $testCase['nums2'], $testCase['n']);

        return $testCase['nums1'];
    }
}