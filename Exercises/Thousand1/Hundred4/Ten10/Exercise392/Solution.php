<?php

namespace Shadar\Leetcode\Exercises\Thousand1\Hundred4\Ten10\Exercise392;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isSubsequence(string $s, string $t): bool
    {
        if ($s === $t) {
            return true;
        }

        $sIndex = 0;
        $tIndex = 0;

        while ($tIndex < strlen($t)) {
            if ($t[$tIndex] === $s[$sIndex]) {
                $sIndex++;
            }

            if ($sIndex === strlen($s)) {
                return true;
            }

            $tIndex++;
        }

        return false;
    }
}