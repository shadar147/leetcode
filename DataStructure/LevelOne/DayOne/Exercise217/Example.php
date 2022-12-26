<?php

namespace Shadar\Leetcode\DataStructure\LevelOne\DayOne\Exercise217;

use Shadar\Leetcode\Abstract\AbstractExample;

class Example extends AbstractExample
{
    protected array $testCases = [
        [1, 2, 3, 1],
        [1, 2, 3, 4],
        [1, 1, 1, 3, 3, 4, 3, 2, 4, 2]
    ];

    public function __construct()
    {
        $this->solution = new Solution();

        parent::__construct();
    }

    public function handle(): void
    {
        $this->defaultHandler('containsDuplicate');
    }
}
