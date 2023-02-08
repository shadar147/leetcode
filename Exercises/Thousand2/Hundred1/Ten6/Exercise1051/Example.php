<?php

namespace Shadar\Leetcode\Exercises\Thousand2\Hundred1\Ten6\Exercise1051;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected string $title = '1051. Height Checker';

    protected array $testCases = [
        [1, 1, 4, 2, 1, 3],
        [5, 1, 2, 3, 4],
        [1, 2, 3, 4, 5]
    ];

    public function __construct()
    {
        $this->solution = new Solution();
        $this->description =
            'A school is trying to take an annual photo of all the students. 
            The students are asked to stand in a single file line in non-decreasing order by height. 
            Let this ordering be represented by the integer array expected where expected[i] is the expected 
            height of the ith student in line.' . PHP_EOL . 'You are given an integer array heights representing the 
            current order that the students are standing in. Each heights[i] is the height of the ith student in 
            line (0-indexed). ' . PHP_EOL . 'Return the number of indices where heights[i] != expected[i].';

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('heightChecker');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArrayHandler($key, $testCase);
    }

    protected function printResult(array|int|bool $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, string|int|array $testCase): void
    {
        $this->printArrayError($exception, $testCase);
    }
}