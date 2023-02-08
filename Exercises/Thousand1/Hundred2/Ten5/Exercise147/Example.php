<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred2\Ten5\Exercise147;

use Exception;
use Shadar\Leetcode\Abstract\ListNodeAbstractExample;
use Shadar\Leetcode\Entities\ListNode;
use Shadar\Leetcode\Enums\Complexity;

class Example extends ListNodeAbstractExample
{
    protected string $title = '147. Insertion Sort List';
    protected Complexity $complexity = Complexity::MEDIUM;
    protected array $testCases = [
        [4, 2, 1, 3],
        [-1, 5, 3, 4, 0]
    ];

    public function __construct()
    {
        $this->solution = new Solution();
        $this->description =
            'Given the head of a singly linked list, sort the list using insertion sort, and return the sorted list\'s 
            head. The steps of the insertion sort algorithm:' . PHP_EOL . 'Insertion sort iterates, consuming one input 
            element each repetition and growing a sorted output list. ' . PHP_EOL . 'At each iteration, insertion sort 
            removes one element from the input data, finds the location it belongs within the sorted list and inserts 
            it there.' . PHP_EOL . 'It repeats until no input elements remain.' . PHP_EOL . 'The following is a 
            graphical example of the insertion sort algorithm. The partially sorted list (black) initially contains 
            only the first element in the list. One element (red) is removed from the input data and inserted in-place 
            into the sorted list with each iteration.';

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('insertionSortList');
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): ListNode|null
    {
        return $this->solution->{$solutionMethod}($this->createListNodes($testCase));
    }

    protected function printResult(array|bool|int|ListNode|null $result): void
    {
        $this->printListNodeResults($result);
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printArrayError($exception, $testCase);
    }

    protected function printTestCaseInfo(int $key, array|int|string $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }
}