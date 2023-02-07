<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DaySix\Exercise102;

use Exception;
use Shadar\Leetcode\Abstract\TreeNodeAbstractExample;

class Example extends TreeNodeAbstractExample
{
    protected array $testCases = [
        [3, 9, 20, null, null, 15, 7],
        [1],
        []
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('levelOrder');
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