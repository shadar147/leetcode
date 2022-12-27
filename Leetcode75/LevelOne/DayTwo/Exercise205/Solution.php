<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayTwo\Exercise205;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isIsomorphic(string $s, string $t): bool
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $sSymbols = [];
        $tSymbols = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (!isset($sSymbols[$s[$i]])) {
                if (isset($tSymbols[$t[$i]]) && $tSymbols[$t[$i]] != $s[$i]) {
                    return false;
                }

                $sSymbols[$s[$i]] = $t[$i];
                $tSymbols[$t[$i]] = $s[$i];
            } elseif ($sSymbols[$s[$i]] != $t[$i]) {
                return false;
            }
        }

        return true;
    }
}