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
            ]
        ]
    ];

    public function __construct()
    {
        $this->stepper = new LevelStepper();
    }
}