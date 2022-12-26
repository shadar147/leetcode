<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFour\Exercise142;

use Exception;
use Shadar\Leetcode\Abstract\ListNodeAbstractExample;
use Shadar\Leetcode\Entities\ListNode;

class Example extends ListNodeAbstractExample
{
    protected array $testCases = [
        [
            'head' => [3, 2, 0, -4],
            'pos' => 1
        ],
        [
            'head' => [1, 2],
            'pos' => 0
        ],
        [
            'head' => [1],
            'pos' => -1
        ],
        [
            'head' => [],
            'pos' => -1
        ]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        foreach ($this->testCases as $key => $testCase) {
            $this->printTestCaseInfo($key, $testCase);
            $this->time->startTime();
            $this->printResult(
                $this->solution->detectCycle($this->createListNodes($testCase['head'], $testCase['pos'])),
                $testCase['head']
            );
            $this->time->stopTime();
        }

        $this->printTimeHandler();
    }

    protected function printTestCaseInfo(int $key, array|string|int $testCase): void
    {
        $this->printArrayHandler($key, $testCase['head']);
        echo 'pos: ' . $testCase['pos'] . PHP_EOL;
    }

    protected function printResult(ListNode|int|bool|array|null $result, array $testCase = []): void
    {
        if (is_null($result)) {
            echo 'no cycle' . PHP_EOL;
        } else {
            echo 'tail connects to node index ' . array_search($result->val, $testCase) . PHP_EOL;
        }
    }

    protected function printError(Exception $exception, int $key, array|int|string $testCase): void
    {
        $this->printTestCaseError($exception, $key);
    }
}