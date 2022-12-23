<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayTwo\Exercise88;

use Shadar\Leetcode\Contracts\Solution as SolutionContract;

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 */
class Solution implements SolutionContract
{
    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     * @return void
     */
    public function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        $firstIndex = $m - 1;
        $secondIndex = $n - 1;
        $mergedIndex = $m + $n - 1;

        while ($firstIndex >= 0 && $secondIndex >= 0) {
            if ($nums1[$firstIndex] > $nums2[$secondIndex]) {
                $nums1[$mergedIndex] = $nums1[$firstIndex];
                $firstIndex--;
            } else {
                $nums1[$mergedIndex] = $nums2[$secondIndex];
                $secondIndex--;
            }

            $mergedIndex--;
        }

        while ($secondIndex >= 0) {
            $nums1[$mergedIndex] = $nums2[$secondIndex];
            $secondIndex--;
            $mergedIndex--;
        }
    }
}