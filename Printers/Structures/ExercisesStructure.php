<?php

namespace Shadar\Leetcode\Printers\Structures;

use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\{DataStructure, Leetcode75};
use Shadar\Leetcode\Printers\Steppers\CommonStepper;

class ExercisesStructure extends AbstractStructure
{
    protected array $content = [
        '1. Two Sum' => DataStructure\LevelOne\DayTwo\Exercise1\Example::class,
        '21. Merge Two Sorted Lists' => Leetcode75\LevelOne\DayThree\Exercise21\Example::class,
        '53. Maximum Subarray' => DataStructure\LevelOne\DayOne\Exercise53\Example::class,
        '88. Merge Sorted Array' => DataStructure\LevelOne\DayTwo\Exercise88\Example::class,
        '121. Best Time to Buy and Sell Stock' => Leetcode75\LevelOne\DayFive\Exercise121\Example::class,
        '142. Linked List Cycle II' => Leetcode75\LevelOne\DayFour\Exercise142\Example::class,
        '205. Isomorphic Strings' => Leetcode75\LevelOne\DayTwo\Exercise205\Example::class,
        '206. Reverse Linked List' => Leetcode75\LevelOne\DayThree\Exercise206\Example::class,
        '217. Contains Duplicate' => DataStructure\LevelOne\DayOne\Exercise217\Example::class,
        '350. Intersection of Two Arrays II' => DataStructure\LevelOne\DayThree\Exercise350\Example::class,
        '392. Is Subsequence' => Leetcode75\LevelOne\DayTwo\Exercise392\Example::class,
        '409. Longest Palindrome' => Leetcode75\LevelOne\DayFive\Exercise409\Example::class,
        '724. Find Pivot Index' => Leetcode75\LevelOne\DayOne\Exercise724\Example::class,
        '876. Middle of the Linked List' => Leetcode75\LevelOne\DayFour\Exercise876\Example::class,
        '1480. Running Sum of 1d Array ' => Leetcode75\LevelOne\DayOne\Exercise1480\Example::class,
    ];

    public function __construct()
    {
        $this->stepper = new CommonStepper();
    }

    protected function getExamples(): array
    {
        return $this->content;
    }
}