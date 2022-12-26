<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFour\Exercise876;

use Exception;
use Shadar\Leetcode\Abstract\ListNodeAbstractExample;
use Shadar\Leetcode\Entities\ListNode;

class Example extends ListNodeAbstractExample
{
    protected array $testCases = [
        [1, 2, 3, 4, 5],
        [1, 2, 3, 4, 5, 6]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('middleNode');
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): ListNode|null
    {
        return $this->solution->{$solutionMethod}($this->createListNodes($testCase));
    }

    protected function printResult(ListNode|int|bool|array|null $result): void
    {
        $this->printListNodeResults($result);
    }

    protected function printTestCaseInfo(int $key, array|int|string $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printTestCaseError($exception, $key);
    }
}