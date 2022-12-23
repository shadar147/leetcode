<?php

namespace Shadar\Leetcode\Printers\Structures;

use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\DataStructure;
use Shadar\Leetcode\Printers\Steppers\LevelStepper;

class DataStructureStructure extends AbstractStructure
{
    protected array $content = [
        'Level 1' => [
            'Day 1' => [
                '53. Maximum Subarray' => DataStructure\LevelOne\DayOne\Exercise53\Example::class,
                '217. Contains Duplicate' => DataStructure\LevelOne\DayOne\Exercise217\Example::class
            ],
            'Day 2' => [
                '1. Two Sum' => DataStructure\LevelOne\DayTwo\Exercise1\Example::class,
            ]
        ]
    ];

    public function __construct()
    {
        $this->stepper = new LevelStepper();
    }
}