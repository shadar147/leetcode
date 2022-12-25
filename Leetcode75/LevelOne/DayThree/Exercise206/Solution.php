<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayThree\Exercise206;

use Shadar\Leetcode\Contracts\Solution as SolutionContract;

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