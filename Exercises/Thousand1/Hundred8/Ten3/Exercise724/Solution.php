<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred8\Ten3\Exercise724;

use Exception;
use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Traits\Arrayable;

/**
 * Given an array of integers nums, calculate the pivot index of this array.
 * The pivot index is the index where the sum of all the numbers strictly to the left of the index is equal to the sum of all the numbers strictly to the index's right.
 * If the index is on the left edge of the array, then the left sum is 0 because there are no elements to the left. This also applies to the right edge of the array.
 * Return the leftmost pivot index. If no such index exists, return -1.
 * Result for 3 cases by leetcode: 12ms for clear code w/o checks, 10ms for code with array checks, 7ms with isArrayOfIntegers method.
 */
class Solution implements SolutionContract
{
    use Arrayable;

    /**
     * @param int[] $nums
     * @return int
     * @throws Exception
     */
    public function pivotIndex(array $nums): int
    {
        if (!$this->isArrayOfIntegers($nums)) {
            throw new \Exception('Non-integer values in an array');
        }

        if (empty($nums)) {
            return -1;
        }

        $sum = array_sum($nums);
        $firstPartSum = 0;
        foreach ($nums as $key => $num) {
            if ($firstPartSum === $sum - $firstPartSum - $num) {
                return $key;
            }

            $firstPartSum += $num;
        }

        return -1;
    }
}
