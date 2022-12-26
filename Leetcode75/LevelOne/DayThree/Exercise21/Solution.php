<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayThree\Exercise21;

use Shadar\Leetcode\Contracts\SolutionContract;

/**
 * You are given the heads of two sorted linked lists list1 and list2.
 * Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists.
 * Return the head of the merged linked list.
 */
class Solution implements SolutionContract
{
    /**
     * @param ListNode|null $list1
     * @param ListNode|null $list2
     * @return ListNode|null
     */
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        if (is_null($list1)) {
            return $list2;
        }

        if (is_null($list2)) {
            return $list1;
        }

        if ($list1->val <= $list2->val) {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);

            return $list1;
        } else {
            $list2->next = $this->mergeTwoLists($list1, $list2->next);

            return $list2;
        }
    }
}