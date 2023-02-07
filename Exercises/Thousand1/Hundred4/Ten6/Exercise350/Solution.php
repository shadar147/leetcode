<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred4\Ten6\Exercise350;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     * @return int[]
     */
    public function intersect(array $nums1, array $nums2): array
    {
        sort($nums1);
        sort($nums2);

        $firstIndex = 0;
        $secondIndex = 0;

        $res = [];

        while ($firstIndex < count($nums1) && $secondIndex < count($nums2)) {
            if ($nums1[$firstIndex] === $nums2[$secondIndex]) {
                $res[] = $nums1[$firstIndex];
                $firstIndex++;
                $secondIndex++;
            } elseif ($nums1[$firstIndex] < $nums2[$secondIndex]) {
                $firstIndex++;
            } else {
                $secondIndex++;
            }
        }

        return $res;
    }
}