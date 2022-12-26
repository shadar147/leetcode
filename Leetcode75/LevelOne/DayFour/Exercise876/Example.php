<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFour\Exercise876;

use Shadar\Leetcode\Abstract\Example as AbstractExample;

class Example extends AbstractExample
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
        foreach ($this->testCases as $key => $testCase) {
            $this->printArrayHandler($key, $testCase);
            $this->time->startTime();
            $this->printResult($this->solution->middleNode(
                $this->createListNodes($testCase)
            ));
            $this->time->stopTime();
        }

        $this->printTimeHandler();
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