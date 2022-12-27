<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayTwo\Exercise1;

use Exception;
use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [
            'nums' => [2, 7, 11, 15],
            'target' => 9
        ],
        [
            'nums' => [3, 2, 4],
            'target' => 6
        ],
        [
            'nums' => [3, 3],
            'target' => 6
        ],
    ];
    protected bool $humanableKey = false;

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('twoSum');
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        echo $key + 1 . ' test case for array:' . PHP_EOL;
        $this->printArray($testCase['nums'], $this->humanableKey);
        echo 'target: ' . $testCase['target'] . PHP_EOL;
    }

    protected function printResult(array|bool|int $result): void
    {
        $this->printVarExportResult($result);
    }

    protected function printError(Exception $exception, int $key, string|int|array $testCase): void
    {
        $this->printArrayError($exception, $testCase['nums']);
    }

    protected function resultHandler(string $solutionMethod, mixed $testCase): array|int|bool
    {
        return $this->solution->{$solutionMethod}($testCase['nums'], $testCase['target']);
    }
}