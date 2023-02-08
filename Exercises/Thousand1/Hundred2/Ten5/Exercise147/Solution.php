<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred2\Ten5\Exercise147;

use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Entities\ListNode;

class Solution implements SolutionContract
{
    /**
     * @param ListNode|null $head
     * @return ListNode|null
     */
    public function insertionSortList(?ListNode $head): ?ListNode
    {
        if (is_null($head) || is_null($head->next)) {
            return $head;
        }

        $plug = new ListNode();
        $plug->next = $head;
        $current = $head;
        $previous = $plug;

        while (!is_null($current)) {
            if (!is_null($current->next) && $current->next->val < $current->val) {
                while (!is_null($previous->next) && $previous->next->val < $current->next->val) {
                    $previous = $previous->next;
                }

                $temp = $previous->next;
                $previous->next = $current->next;
                $current->next = $current->next->next;
                $previous->next->next = $temp;

                $previous = $plug;
            } else {
                $current = $current->next;
            }

        }

        return $plug->next;
    }
}