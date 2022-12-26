<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DayOne\Exercise1480;

use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [1, 2, 3, 4],
        [1, 1, 1, 1, 1],
        [3, 1, 2, 10, 1],
        ['asd', 1, 2, 3]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('runningSum');
    }
}
