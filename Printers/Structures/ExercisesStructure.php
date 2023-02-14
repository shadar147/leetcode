<?php

namespace Shadar\Leetcode\Printers\Structures;

use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\Exercises;
use Shadar\Leetcode\Printers\Steppers\CommonStepper;

class ExercisesStructure extends AbstractStructure
{
    protected array $content = [
        '1. Two Sum' => Exercises\Thousand1\Hundred1\Ten1\Exercise1\Example::class,
        '21. Merge Two Sorted Lists' => Exercises\Thousand1\Hundred1\Ten3\Exercise21\Example::class,
        '53. Maximum Subarray' => Exercises\Thousand1\Hundred1\Ten6\Exercise53\Example::class,
        '75. Sort Colors' => Exercises\Thousand1\Hundred1\Ten8\Exercise75\Example::class,
        '88. Merge Sorted Array' => Exercises\Thousand1\Hundred1\Ten9\Exercise88\Example::class,
        '121. Best Time to Buy and Sell Stock' => Exercises\Thousand1\Hundred2\Ten3\Exercise121\Example::class,
        '142. Linked List Cycle II' => Exercises\Thousand1\Hundred2\Ten5\Exercise142\Example::class,
        '147. Insertion Sort List' => Exercises\Thousand1\Hundred2\Ten5\Exercise147\Example::class,
        '205. Isomorphic Strings' => Exercises\Thousand1\Hundred3\Ten1\Exercise205\Example::class,
        '206. Reverse Linked List' => Exercises\Thousand1\Hundred3\Ten1\Exercise206\Example::class,
        '215. Kth Largest Element in an Array' => Exercises\Thousand1\Hundred3\Ten2\Exercise215\Example::class,
        '217. Contains Duplicate' => Exercises\Thousand1\Hundred3\Ten2\Exercise217\Example::class,
        '350. Intersection of Two Arrays II' => Exercises\Thousand1\Hundred4\Ten6\Exercise350\Example::class,
        '392. Is Subsequence' => Exercises\Thousand1\Hundred4\Ten10\Exercise392\Example::class,
        '409. Longest Palindrome' => Exercises\Thousand1\Hundred5\Ten1\Exercise409\Example::class,
        '724. Find Pivot Index' => Exercises\Thousand1\Hundred8\Ten3\Exercise724\Example::class,
        '876. Middle of the Linked List' => Exercises\Thousand1\Hundred9\Ten8\Exercise876\Example::class,
        '912. Sort an Array' => Exercises\Thousand1\Hundred10\Ten2\Exercise912\Example::class,
        '1051. Height Checker' => Exercises\Thousand2\Hundred1\Ten6\Exercise1051\Example::class,
        '1480. Running Sum of 1d Array' => Exercises\Thousand2\Hundred5\Ten9\Exercise1480\Example::class,
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