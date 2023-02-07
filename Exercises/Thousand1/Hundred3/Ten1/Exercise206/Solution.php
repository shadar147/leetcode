<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred3\Ten1\Exercise206;

use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Entities\ListNode;

/**
 * Given the head of a singly linked list, reverse the list, and return the reversed list.
 */
class Solution implements SolutionContract
{
    /**
     * @param ListNode|null $head
     * @return ListNode|null
     */
    public function reverseList(?ListNode $head): ?ListNode
    {
        $previousNode = null;

        while ($head !== null) {
            $nextNode = $head->next;

            $head->next = $previousNode;

            $previousNode = $head;
            $head = $nextNode;
        }

        return $previousNode;
    }
}