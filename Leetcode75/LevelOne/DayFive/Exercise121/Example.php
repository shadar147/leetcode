<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFive\Exercise121;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [7, 1, 5, 3, 6, 4],
        [7, 6, 4, 3, 1]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('maxProfit');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, array|string|int $testCase): void
    {
        $this->printArrayError($exception, $testCase);
    }
}