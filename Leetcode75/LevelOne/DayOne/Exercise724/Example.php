<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayOne\Exercise724;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [1, 7, 3, 6, 5, 6],
        [1, 2, 3],
        [2, 1, -1],
        [-1, -1, -1, -1, -1, 0],
        [-1, -1, 0, 1, 0, -1]
    ];
    protected bool $humanableKey = false;

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('pivotIndex');
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
