<?php
/*
 * https://leetcode.com/problems/single-number/
 * 136. Single Number
 * Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
 * You must implement a solution with a linear runtime complexity and use only constant extra space.
*/

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber(array $nums): int
    {
        $flipped_arr = array_flip($nums);
        $temp_arr = array_combine(array_keys($flipped_arr), array_pad([], count($flipped_arr), 0));

        foreach ($nums as $num) {
            if ($temp_arr[$num] === 0) {
                $temp_arr[$num] = 1;
            } else if ($temp_arr[$num] === 1) {
                unset($temp_arr[$num]);
            }
        }
        return array_keys($temp_arr)[0];
    }
}

// tests
$sol = new Solution();
$nums = [2, 2, 1];
echo "1. ";
if ($sol->singleNumber($nums) === 1) {
    echo "Success";
} else {
    echo "Error";
}

$nums = [4, 1, 2, 1, 2];
echo "\n2. ";
if ($sol->singleNumber($nums) === 4) {
    echo "Success";
} else {
    echo "Error";
}

$nums = [1];
echo "\n3. ";
if ($sol->singleNumber($nums) === 1) {
    echo "Success";
} else {
    echo "Error";
}