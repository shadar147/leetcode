<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred9\Ten8\Exercise876;

use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Entities\ListNode;

/**
 * Given the head of a singly linked list, return the middle node of the linked list.
 * If there are two middle nodes, return the second middle node.
 */
class Solution implements SolutionContract
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function middleNode(ListNode $head): ListNode
    {
        $leftCount = 0;
        $rightCount = 0;
        $middleNode = $head;

        while (!is_null($head->next)) {
            $head = $head->next;

            if ($leftCount <= $rightCount) {
                $middleNode = $middleNode->next;
                $leftCount++;
            } else {
                $rightCount++;
            }
        }

        return $middleNode;
    }
}