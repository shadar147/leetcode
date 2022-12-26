<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFour\Exercise142;

use Shadar\Leetcode\Contracts\Solution as SolutionContract;

/**
 * Given the head of a linked list, return the node where the cycle begins. If there is no cycle, return null.
 * There is a cycle in a linked list if there is some node in the list that can be reached again by continuously following the next pointer. Internally, pos is used to denote the index of the node that tail's next pointer is connected to (0-indexed). It is -1 if there is no cycle. Note that pos is not passed as a parameter.
 * Do not modify the linked list.
 */
class Solution implements SolutionContract
{
    /**
     * @param ListNode $head
     * @return ListNode|null
     */
    public function detectCycle(?ListNode $head): ?ListNode
    {
        $nextNode = $head;
        $doubleNextNode = $head;

        while (!is_null($doubleNextNode) && !is_null($doubleNextNode->next)) {
            $nextNode = $nextNode->next;
            $doubleNextNode = $doubleNextNode->next->next;

            if ($nextNode === $doubleNextNode) {
                $nextNode = $head;

                while ($nextNode !== $doubleNextNode) {
                    $nextNode = $nextNode->next;
                    $doubleNextNode = $doubleNextNode->next;
                }

                return $nextNode;
            }
        }

        return null;
    }
}