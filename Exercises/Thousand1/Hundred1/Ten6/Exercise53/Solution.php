<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred1\Ten6\Exercise53;

use Exception;
use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Traits\Arrayable;

/**
 * Given an integer array nums, find the subarray which has the largest sum and return its sum.
 */
class Solution implements SolutionContract
{
    use Arrayable;

    /**
     * @param int[] $nums
     * @return int
     * @throws Exception
     */
    public function maxSubArray(array $nums): int
    {
        if (!$this->isArrayOfIntegers($nums)) {
            throw new \Exception('Non-integer values in an array');
        }

        if (empty($nums)) {
            return 0;
        }

        $maxSum = $nums[0];
        $currentSum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $currentSum += $nums[$i];
            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
            }
            if ($currentSum < 0) {
                $currentSum = 0;
            }
        }

        return $maxSum;
    }
}
