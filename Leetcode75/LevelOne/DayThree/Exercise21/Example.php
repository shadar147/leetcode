<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayThree\Exercise21;

use Shadar\Leetcode\Abstract\Example as AbstractExample;

class Example extends AbstractExample
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
        foreach ($this->testCases as $key => $testCase) {
            $this->printTestCaseInfo($key, $testCase);
            $this->time->startTime();
            $this->printResult($this->solution->mergeTwoLists(
                $this->createListNodes($testCase['list1']),
                $this->createListNodes($testCase['list2'])
            ));
            $this->time->stopTime();
        }

        $this->printTimeHandler();
    }

    private function printTestCaseInfo(int $key, array $testCase): void
    {
        echo $key + 1 . ' test case for arrays:' . PHP_EOL;
        echo 'first: ' . PHP_EOL;
        $this->printArray($testCase['list1'], $this->humanableKey);
        echo 'second: ' . PHP_EOL;
        $this->printArray($testCase['list2'], $this->humanableKey);
    }

    private function createListNodes(array $list): ?ListNode
    {
        $listNodes = [];

        for ($i = count($list) - 1; $i >= 0; $i--) {
            $listNodes[] = new ListNode($list[$i], end($listNodes) ?: null);
        }

        return end($listNodes) ?: null;
    }

    private function printResult(?ListNode $listNode): void
    {
        echo 'Result: [';

        while (!is_null($listNode)) {
            echo $listNode->val;
            if (!is_null($listNode->next)) {
                echo ', ';
            }

            $listNode = $listNode->next;
        }

        echo '].' . PHP_EOL;
    }
}