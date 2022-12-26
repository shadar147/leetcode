<?php

namespace Shadar\Leetcode\Printers\Structures;

use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\Leetcode75;
use Shadar\Leetcode\Printers\Steppers\LevelStepper;

class Leetcode75Structure extends AbstractStructure
{
    protected array $content = [
        'Level 1' => [
            'Day 1' => [
                '1480. Running Sum of 1d Array ' => Leetcode75\LevelOne\DayOne\Exercise1480\Example::class,
                '724. Find Pivot Index' => Leetcode75\LevelOne\DayOne\Exercise724\Example::class
            ],
            'Day 2' => [
                '205. Isomorphic Strings' => Leetcode75\LevelOne\DayTwo\Exercise205\Example::class,
                '392. Is Subsequence' => Leetcode75\LevelOne\DayTwo\Exercise392\Example::class
            ],
            'Day 3' => [
                '21. Merge Two Sorted Lists' => Leetcode75\LevelOne\DayThree\Exercise21\Example::class,
                '206. Reverse Linked List' => Leetcode75\LevelOne\DayThree\Exercise206\Example::class
            ],
            'Day 4' => [
                '142. Linked List Cycle II' => Leetcode75\LevelOne\DayFour\Exercise142\Example::class,
                '876. Middle of the Linked List' => Leetcode75\LevelOne\DayFour\Exercise876\Example::class
            ],
            'Day 5' => [
                '121. Best Time to Buy and Sell Stock' => Leetcode75\LevelOne\DayFive\Exercise121\Example::class,
                '409. Longest Palindrome' => Leetcode75\LevelOne\DayFive\Exercise409\Example::class
            ]
        ]
    ];

    public function __construct()
    {
        $this->stepper = new LevelStepper();
    }
}