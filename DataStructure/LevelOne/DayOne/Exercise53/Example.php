<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayOne\Exercise53;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [-2, 1, -3, 4, -1, 2, 1, -5, 4],
        [1],
        [5, 4, -1, 7, 8]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('maxSubArray');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, string|int|array $testCase): void
    {
        $this->printArrayError($exception, $testCase);
    }
}
