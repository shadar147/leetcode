<?php

namespace Shadar\Leetcode\Printers\Structures;

use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\Exercises;
use Shadar\Leetcode\Printers\Steppers\LevelStepper;

class Leetcode75Structure extends AbstractStructure
{
    protected array $content = [
        'Level 1' => [
            'Day 1' => [
                '1480. Running Sum of 1d Array ' => Exercises\Thousand2\Hundred5\Ten9\Exercise1480\Example::class,
                '724. Find Pivot Index' => Exercises\Thousand1\Hundred8\Ten3\Exercise724\Example::class
            ],
            'Day 2' => [
                '205. Isomorphic Strings' => Exercises\Thousand1\Hundred3\Ten1\Exercise205\Example::class,
                '392. Is Subsequence' => Exercises\Thousand1\Hundred4\Ten10\Exercise392\Example::class
            ],
            'Day 3' => [
                '21. Merge Two Sorted Lists' => Exercises\Thousand1\Hundred1\Ten3\Exercise21\Example::class,
                '206. Reverse Linked List' => Exercises\Thousand1\Hundred3\Ten1\Exercise206\Example::class
            ],
            'Day 4' => [
                '142. Linked List Cycle II' => Exercises\Thousand1\Hundred2\Ten5\Exercise142\Example::class,
                '876. Middle of the Linked List' => Exercises\Thousand1\Hundred9\Ten8\Exercise876\Example::class
            ],
            'Day 5' => [
                '121. Best Time to Buy and Sell Stock' => Exercises\Thousand1\Hundred2\Ten3\Exercise121\Example::class,
                '409. Longest Palindrome' => Exercises\Thousand1\Hundred5\Ten1\Exercise409\Example::class
            ]
        ]
    ];

    public function __construct()
    {
        $this->stepper = new LevelStepper();
    }
}