<?php

namespace Shadar\Leetcode\Printers\Structures;

use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\Exercises;
use Shadar\Leetcode\Printers\Steppers\LevelStepper;

class DataStructureStructure extends AbstractStructure
{
    protected array $content = [
        'Level 1' => [
            'Day 1' => [
                '53. Maximum Subarray' => Exercises\Thousand1\Hundred1\Ten6\Exercise53\Example::class,
                '217. Contains Duplicate' => Exercises\Thousand1\Hundred3\Ten2\Exercise217\Example::class
            ],
            'Day 2' => [
                '1. Two Sum' => Exercises\Thousand1\Hundred1\Ten1\Exercise1\Example::class,
                '88. Merge Sorted Array' => Exercises\Thousand1\Hundred1\Ten9\Exercise88\Example::class,
            ],
            'Day 3' => [
                '350. Intersection of Two Arrays II' => Exercises\Thousand1\Hundred4\Ten6\Exercise350\Example::class
            ]
        ]
    ];

    public function __construct()
    {
        $this->stepper = new LevelStepper();
    }
}