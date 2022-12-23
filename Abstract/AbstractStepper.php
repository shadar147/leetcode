<?php

namespace Shadar\Leetcode\Abstract;

abstract class AbstractStepper
{
    protected array $steps;

    public function getSteps(): array
    {
        return $this->steps;
    }
}