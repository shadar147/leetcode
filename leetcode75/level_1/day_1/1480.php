<?php

/**
 * Running Sum of 1d Array.
 * Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).
 * Return the running sum of nums.
 * Result for 3 cases by leetcode: 7ms for clear code w/o checks, 8ms for code with array checks, 11ms with isArrayOfIntegers method.
 */
class Solution
{
    /**
     * @param int[] $nums
     * @return int[]
     * @throws Exception
     */
    public function runningSum(array $nums): array
    {
        if (!$this->isArrayOfIntegers($nums)) {
            throw new \Exception('Non-integer values in an array');
        }

        if (empty($nums)) {
            return [];
        }

        $result = [];
        $currentSum = 0;
        foreach ($nums as $num) {
            $currentSum += $num;
            $result[] = $currentSum;
        }

        return $result;
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

$testCases = [
    [1, 2, 3, 4],
    [1, 1, 1, 1, 1],
    [3, 1, 2, 10, 1],
    ['asd', 1, 2, 3]
];
$solution = new Solution();
$times = [];
foreach ($testCases as $testCase) {
    $start = microtime(true);
    try {
        print_r($solution->runningSum($testCase));
    } catch (\Exception $e) {
        echo "Error '{$e->getMessage()}' for array " . implode(', ', $testCase) . PHP_EOL;
    }
    $times[] = round(microtime(true) - $start, 6);
}

print_r($times);