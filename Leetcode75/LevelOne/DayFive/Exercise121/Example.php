<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayFive\Exercise121;

use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [7, 1, 5, 3, 6, 4],
        [7, 6, 4, 3, 1]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('maxProfit');
    }
}