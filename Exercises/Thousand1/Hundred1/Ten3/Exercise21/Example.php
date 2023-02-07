<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred1\Ten3\Exercise21;

use Exception;
use Shadar\Leetcode\Abstract\ListNodeAbstractExample;
use Shadar\Leetcode\Entities\ListNode;

class Example extends ListNodeAbstractExample
{
    protected array $testCases = [
        [
            'list1' => [1, 2, 4],
            'list2' => [1, 3, 4]
        ],
        [
            'list1' => [],
            'list2' => []
        ],
        [
            'list1' => [],
            'list2' => [0]
        ]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('mergeTwoLists');
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array|int|bool|ListNode|null
    {
        return $this->solution->{$solutionMethod}(
            $this->createListNodes($testCase['list1']),
            $this->createListNodes($testCase['list2'])
        );
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArraysHandler($key, $testCase['list1'], $testCase['list2']);
    }

    protected function printResult(ListNode|int|bool|array|null $result): void
    {
        $this->printListNodeResults($result);
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printTestCaseError($exception, $key);
    }
}