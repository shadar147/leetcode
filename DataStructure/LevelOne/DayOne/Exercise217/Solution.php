<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayOne\Exercise217;

use Exception;
use Shadar\Leetcode\Traits\Arrayable;

/**
 * Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.
 */
class Solution
{
    use Arrayable;

    /**
     * @param int[] $nums
     * @return bool
     * @throws Exception
     */
    public function containsDuplicate(array $nums): bool
    {
        if (!$this->isArrayOfIntegers($nums)) {
            throw new \Exception('Non-integer values in an array');
        }

        if (empty($nums)) {
            return false;
        }

        $newArr = [];
        foreach ($nums as $num) {
            if (isset($newArr[$num])) {
                return true;
            }

            $newArr[$num] = 1;
        }

        return false;
    }
}
