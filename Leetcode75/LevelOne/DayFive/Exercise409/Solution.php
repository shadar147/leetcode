<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFive\Exercise409;

use Shadar\Leetcode\Contracts\SolutionContract;

/**
 * Given a string s which consists of lowercase or uppercase letters, return the length of the longest palindrome that can be built with those letters.
 * Letters are case sensitive, for example, "Aa" is not considered a palindrome here.
 */
class Solution implements SolutionContract
{
    /**
     * @param string $s
     * @return int
     */
    public function longestPalindrome(string $s): int
    {
        $symbols = [];
        $count = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($symbols[$s[$i]])) {
                $count += 2;
                unset($symbols[$s[$i]]);
            } else {
                $symbols[$s[$i]] = 1;
            }
        }

        if (!empty($symbols)) {
            $count++;
        }

        return $count;
    }
}