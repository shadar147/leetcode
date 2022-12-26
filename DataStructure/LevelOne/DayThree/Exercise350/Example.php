<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayThree\Exercise350;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

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
        $this->defaultHandler('intersect');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArraysHandler($key, $testCase['nums1'], $testCase['nums2']);
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
        return $this->solution->{$solutionMethod}($testCase['nums1'], $testCase['nums2']);
    }
}