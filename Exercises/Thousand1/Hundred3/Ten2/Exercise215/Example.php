<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred3\Ten2\Exercise215;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;
use Shadar\Leetcode\Entities\ListNode;
use Shadar\Leetcode\Enums\Complexity;

class Example extends AbstractExample
{
    protected string $title = '215. Kth Largest Element in an Array';
    protected Complexity $complexity = Complexity::MEDIUM;
    protected array $testCases = [
        [
            'nums' => [3, 2, 1, 5, 6, 4],
            'k' => 2
        ],
        [
            'nums' => [3, 2, 3, 1, 2, 4, 5, 5, 6],
            'k' => 4
        ]
    ];

    public function __construct()
    {
        $this->solution = new Solution();
        $this->description =
            'Given an integer array nums and an integer k, return the kth largest element in the array.
            Note that it is the kth largest element in the sorted order, not the kth distinct element.
            You must solve it in O(n) time complexity.';

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('findKthLargest');
    }

    protected function printTestCaseInfo(int $key, array|int|string $testCase): void
    {
        $this->printArrayAndNumberTestCase($key, $testCase['nums'], $testCase['k']);
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array|int|bool|ListNode|null
    {
        return $this->solution->{$solutionMethod}($testCase['nums'], $testCase['k']);
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printIntResult($result);
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printTestCaseError($exception, $key);
    }
}