<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred10\Ten2\Exercise912;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    public function sortArray(array $nums): array
    {
        for ($i = floor(count($nums)/2) - 1; $i >= 0; $i--) {
            $this->maxHeapify($nums, count($nums), $i);
        }

        for ($i = count($nums) - 1; $i >= 0; $i--) {
            $temp = $nums[$i];
            $nums[$i] = $nums[0];
            $nums[0] = $temp;

            $this->maxHeapify($nums, $i, 0);
        }

        return $nums;
    }

    /**
     * @param int[] $arr
     * @param int $heapSize
     * @param int $index
     * @return void
     */
    private function maxHeapify(array &$arr, int $heapSize, int $index): void
    {
        $left = 2 * $index + 1;
        $right = 2 * $index + 2;
        $head = $index;

        if ($left < $heapSize && $arr[$left] > $arr[$head]) {
            $head = $left;
        }

        if ($right < $heapSize && $arr[$right] > $arr[$head]) {
            $head = $right;
        }

        if ($head !== $index) {
            $temp = $arr[$head];
            $arr[$head] = $arr[$index];
            $arr[$index] = $temp;
            $this->maxHeapify($arr, $heapSize, $head);
        }
    }
}
