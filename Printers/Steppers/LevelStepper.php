<?php

namespace Shadar\Leetcode\Printers\Steppers;

use Shadar\Leetcode\Abstract\AbstractStepper;

class LevelStepper extends AbstractStepper
{
    protected array $steps = [
        'chooseLevel',
        'chooseDay',
        'chooseExample',
    ];
}