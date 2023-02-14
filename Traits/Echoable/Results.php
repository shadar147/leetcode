<?php

namespace Shadar\Leetcode\Traits\Echoable;

use Shadar\Leetcode\Entities\ListNode;

trait Results
{
    protected function printVarExportResult(mixed $result): void
    {
        echo 'Result: ' . var_export($result, true) . PHP_EOL;
    }

    protected function printStringResult(string $result): void
    {
        echo "Result: {$result}" . PHP_EOL;
    }

    protected function printIntResult(int $result): void
    {
        echo "Result: {$result}" . PHP_EOL;
    }

    protected function printListNodeResults(?ListNode $listNode): void
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