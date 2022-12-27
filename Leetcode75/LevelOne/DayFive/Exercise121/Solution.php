<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFive\Exercise121;

use Shadar\Leetcode\Contracts\Solution as SolutionContract;

/**
 * You are given an array prices where prices[i] is the price of a given stock on the ith day.
 * You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
 * Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.
 */
class Solution implements SolutionContract
{
    /**
     * @param int[] $prices
     * @return int
     */
    public function maxProfit(array $prices): int
    {
        $minPrice = $prices[0];
        $maxProfit = 0;

        foreach ($prices as $price) {
            $minPrice = min($minPrice, $price);
            $maxProfit = max($maxProfit, $price - $minPrice);
        }

        return $maxProfit;
    }
}