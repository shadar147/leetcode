<?php

namespace Shadar\Leetcode\Abstract;

use Shadar\Leetcode\Entities\ListNode;

abstract class ListNodeAbstractExample extends AbstractExample
{
    protected function createListNodes(array $list, int $pos = null): ?ListNode
    {
        $listNodes = [];

        for ($i = count($list) - 1; $i >= 0; $i--) {
            $listNodes[] = new ListNode($list[$i], end($listNodes) ?: null);

            if (!is_null($pos) && $i === $pos) {
                $listNodes[0] = new ListNode($listNodes[0]->val, end($listNodes) ?: null);
                $listNodes[count($listNodes) - 1]->next = $listNodes[0];
            }
        }

        return end($listNodes) ?: null;
    }

    abstract protected function printResult(ListNode|int|bool|array|null $result): void;
}