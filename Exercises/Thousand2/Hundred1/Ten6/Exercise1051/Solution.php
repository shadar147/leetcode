<?php

namespace Shadar\Leetcode\Exercises\Thousand2\Hundred1\Ten6\Exercise1051;

use Shadar\Leetcode\Contracts\SolutionContract;

class Solution implements SolutionContract
{
    /**
     * @param int[] $heights
     * @return int
     */
    function heightChecker(array $heights): int
    {
        $startHeights = $heights;

        do {
            $hasChanges = false;
            for ($i = 0; $i < count($heights); $i++) {
                if (isset($heights[$i + 1]) && $heights[$i] > $heights[$i + 1]) {
                    $plug = $heights[$i];
                    $heights[$i] = $heights[$i + 1];
                    $heights[$i + 1] = $plug;
                    $hasChanges = true;
                }
            }
        } while ($hasChanges);

        $changeCounter = 0;
        for ($i = 0; $i < count($startHeights); $i++) {
            if ($startHeights[$i] !== $heights[$i]) {
                $changeCounter++;
            }
        }

        return $changeCounter;
    }
}