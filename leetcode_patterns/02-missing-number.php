<?php
// https://leetcode.com/problems/missing-number/
// 268. Missing Number
// Given an array nums containing 'n' distinct numbers in the range [0, n], return the only number in the range that is missing from the array.

class Solution
{
    /**
     * Faster algorithm
     * @param array $nums
     * @return int
     */
    function missingNumber(array $nums): int
    {
        $length = count($nums);
        $nums = array_flip($nums);
        for ($i = 0; $i <= $length; $i++) {
            if (!isset($nums[$i])) {
                return $i;
            }
        }
    }

    /**
     * My solution which is bit slow
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumberMyAlgo(array $nums): int
    {
        // find min and max number
        $min_number = 0;
        $max_number = 0;
        foreach ($nums as $num) {
            if ($num > $max_number) {
                $max_number = $num;
            }
            if ($num < $min_number) {
                $min_number = $num;
            }
        }

        for ($i = $min_number; $i <= $max_number; $i++) {
            if (!in_array($i, $nums)) {
                return $i;
            }
        }
        return $i;
    }
}

// test
$sol = new Solution();

$nums = [3, 0, 1];
echo "1. ";
if ($sol->missingNumber($nums) === 2) {
    echo "Success";
} else {
    echo "Error";
}

$nums = [0, 1];
echo "\n2. ";
if ($sol->missingNumber($nums) === 2) {
    echo "Success";
} else {
    echo "Error";
}

$nums = [9, 6, 4, 2, 3, 5, 7, 0, 1];
echo "\n3. ";
if ($sol->missingNumber($nums) === 8) {
    echo "Success";
} else {
    echo "Error";
}