<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayTwo\Exercise392;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            's' => 'abc',
            't' => 'ahbgdc'
        ],
        [
            's' => 'axc',
            't' => 'ahbgdc'
        ],
        [
            's' => '',
            't' => ''
        ]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('isSubsequence');
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