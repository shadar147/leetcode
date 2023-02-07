<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred3\Ten1\Exercise205;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            's' => 'egg',
            't' => 'add'
        ],
        [
            's' => 'foo',
            't' => 'bar'
        ],
        [
            's' => 'paper',
            't' => 'title'
        ]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('isIsomorphic');
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): bool
    {
        return $this->solution->{$solutionMethod}($testCase['s'], $testCase['t']);
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printStringsHandler($key, $testCase['s'], $testCase['t']);
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printStringsError($exception, $testCase['s'], $testCase['t']);
    }
}