<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred1\Ten8\Exercise75;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param int[] $nums
     * @return void
     */
    public function sortColors(array &$nums): void
    {
        $counter = [
            0 => 0,
            1 => 0,
            2 => 0
        ];

        foreach ($nums as $num) {
            if (isset($counter[$num])) {
                $counter[$num]++;
            }
        }

        $nums = [];
        foreach ($counter as $value => $count) {
            $nums = array_merge($nums, array_fill(0, $count, $value));
        }
    }

    /**
     * @param int[] $nums
     * @return void
     */
    public function sortColorsOld(array &$nums): void
    {
        $count = count($nums);
        for ($i = 0; $i < $count - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($nums[$minIndex] > $nums[$j]) {
                    $minIndex = $j;
                }
            }

            if ($minIndex !== $i) {
                $min = $nums[$minIndex];
                $nums[$minIndex] = $nums[$i];
                $nums[$i] = $min;
            }
        }
    }
}