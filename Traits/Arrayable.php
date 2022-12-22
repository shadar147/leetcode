<?php

namespace Shadar\Leetcode\Traits;

trait Arrayable
{
    /**
     * @param array $array
     * @return void
     */
    protected function printArray(array $array, bool $humanableKey = true): void
    {
        foreach ($array as $key => $value) {
            echo ($humanableKey ? $key + 1 : $key) . '. ' . $value . PHP_EOL;
        }
    }

    /**
     * @param array $array
     * @return bool
     */
    private function isArrayOfIntegers(array $array): bool
    {
        return count($array) === count(array_filter($array, 'is_int'));
    }
}