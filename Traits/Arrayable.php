<?php

namespace Shadar\Leetcode\Traits;

trait Arrayable
{
    private function printArray(array $array): void
    {
        foreach ($array as $key => $value) {
            echo $key + 1 . '. ' . $value . PHP_EOL;
        }
    }
}