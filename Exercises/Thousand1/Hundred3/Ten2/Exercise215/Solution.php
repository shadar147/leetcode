<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred3\Ten2\Exercise215;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param int[] $nums
     * @param int $k
     * @return int
     */
    public function findKthLargest(array $nums, int $k): int
    {
        $left = 0;
        $right = count($nums) - 1;
        while (true) {
            $pivotIndex = $this->partition($nums, $left, $right);
            if ($pivotIndex === $k - 1) {
                return $nums[$pivotIndex];
            } elseif ($pivotIndex > $k - 1) {
                $right = $pivotIndex - 1;
            } else {
                $left = $pivotIndex + 1;
            }
        }
    }

    /**
     * @param int[] $nums
     * @param int $left
     * @param int $right
     * @return int
     */
    private function partition(array &$nums, int $left, int $right): int
    {
        $pivot = $nums[$right];
        $i = $left;
        for ($j = $left; $j < $right; $j++) {
            if ($nums[$j] > $pivot) {
                $this->swap($nums, $i++, $j);
            }
        }
        $this->swap($nums, $i, $right);
        return $i;
    }

    /**
     * @param int[] $nums
     * @param int $i
     * @param int $j
     * @return void
     */
    private function swap(array &$nums, int $i, int $j): void
    {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
}