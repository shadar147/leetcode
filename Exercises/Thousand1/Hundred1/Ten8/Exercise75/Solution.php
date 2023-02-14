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

    /**
     * @param int[] $nums
     * @return void
     */
    public function sortColorsNonComparison(array &$nums): void
    {
        [$min, $max] = $this->findMinMax($nums);
        $k = $max - $min;

        $counter = array_fill(0, $k + 1, 0);
        foreach ($nums as $num) {
            $counter[$num - $min]++;
        }

        $index = 0;
        for ($i = 0; $i < count($counter); $i++) {
            $count = $counter[$i];
            $counter[$i] = $index;
            $index += $count;
        }

        $res = array_fill(0, count($nums), 0);
        foreach ($nums as $num) {
            $res[$counter[$num - $min]] = $num;
            $counter[$num - $min]++;
        }

        $nums = $res;
    }

    private function findMinMax(array $nums): array
    {
        $min = $nums[0];
        $max = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            if ($min > $nums[$i]) {
                $min = $nums[$i];
            } elseif ($max < $nums[$i]) {
                $max = $nums[$i];
            }
        }

        return [$min, $max];
    }
}