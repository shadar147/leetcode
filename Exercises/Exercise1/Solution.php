<?php

namespace Shadar\Leetcode\Exercises\Exercise1;

use Exception;
use Shadar\Leetcode\Contracts\Solution as SolutionContract;
use Shadar\Leetcode\Traits\Arrayable;

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 */
class Solution implements SolutionContract
{
    use Arrayable;

    /**
     * @param int[] $nums
     * @param int $target
     * @return array
     * @throws Exception
     */
    public function twoSum(array $nums, int $target): array
    {
        if (!$this->isArrayOfIntegers($nums)) {
            throw new Exception('Non-integer values in an array');
        }

        if (empty($nums)) {
            return [];
        }

        $diffs = [];

        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];

            if (isset($diffs[$diff])) {
                return [$diffs[$diff], $i];
            }

            $diffs[$nums[$i]] = $i;
        }

        return [];
    }
}