<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayOne\Exercise724;

use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [1, 7, 3, 6, 5, 6],
        [1, 2, 3],
        [2, 1, -1],
        [-1, -1, -1, -1, -1, 0],
        [-1, -1, 0, 1, 0, -1]
    ];
    protected bool $humanableKey = false;

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('pivotIndex');
    }
}
