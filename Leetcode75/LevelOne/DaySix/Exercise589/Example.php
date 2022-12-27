<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DaySix\Exercise589;

use Exception;
use Shadar\Leetcode\Abstract\NodeAbstractExample;
use Shadar\Leetcode\Entities\{ListNode, Node};

class Example extends NodeAbstractExample
{
    protected array $testCases = [
        [1, null, 3, 2, 4, null, 5, 6],
        [1, null, 2, 3, 4, 5, null, null, 6, 7, null, 8, null, 9, 10, null, null, 11, null, 12, null, 13, null, null, 14]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('preorder');
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array|int|bool|ListNode|null
    {
        return $this->solution->{$solutionMethod}($this->createRootNode($testCase));
    }

    protected function printTestCaseInfo(int $key, array|int|string $testCase): void
    {
        $this->printArraysHandler($key, $testCase);
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