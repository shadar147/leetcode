<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayOne\Exercise1480;

use Exception;
use Shadar\Leetcode\Traits\Arrayable;

/**
 * Running Sum of 1d Array.
 * Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).
 * Return the running sum of nums.
 * Result for 3 cases by leetcode: 7ms for clear code w/o checks, 8ms for code with array checks, 11ms with isArrayOfIntegers method.
 */
class Solution
{
    use Arrayable;

    /**
     * @param int[] $nums
     * @return int[]
     * @throws Exception
     */
    public function runningSum(array $nums): array
    {
        if (!$this->isArrayOfIntegers($nums)) {
            throw new Exception('Non-integer values in an array');
        }

        if (empty($nums)) {
            return [];
        }

        $result = [];
        $currentSum = 0;
        foreach ($nums as $num) {
            $currentSum += $num;
            $result[] = $currentSum;
        }

        return $result;
    }
}
