<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFour\Exercise142;

use Shadar\Leetcode\Abstract\Example as AbstractExample;

class Example extends AbstractExample
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

    private function printTestCaseInfo(int $key, array $testCase): void
    {
        echo $key + 1 . ' test case for array:' . PHP_EOL;
        $this->printArray($testCase['head'], $this->humanableKey);
        echo 'pos: ' . $testCase['pos'] . PHP_EOL;
    }

    private function createListNodes(array $list, int $pos): ?ListNode
    {
        $listNodes = [];

        for ($i = count($list) - 1; $i >= 0; $i--) {
            $listNodes[] = new ListNode($list[$i], end($listNodes) ?: null);

            if ($i === $pos) {
                $listNodes[0] = new ListNode($listNodes[0]->val, end($listNodes) ?: null);
                $listNodes[count($listNodes) - 1]->next = $listNodes[0];
            }
        }

        return end($listNodes) ?: null;
    }

    private function printResult(?ListNode $listNode, array $testCase): void
    {
        if (is_null($listNode)) {
            echo 'no cycle' . PHP_EOL;
        } else {
            echo 'tail connects to node index ' . array_search($listNode->val, $testCase) . PHP_EOL;
        }
    }
}