<?php
// https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array/
// 448. Find All Numbers Disappeared in an Array
// Given an array nums of n integers where nums[i] is in the range [1, n], return an array of all the integers in the range [1, n] that do not appear in nums.

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers(array $nums): array
    {
        $count = count($nums);
        $nums = array_flip($nums);
        $output = [];
        for ($i = 1; $i <= $count; $i++) {
            if (!isset($nums[$i])) {
                $output[] = $i;
            }
        }
        return $output;
    }
}

// test
$sol = new Solution();
$nums = [4, 3, 2, 7, 8, 2, 3, 1];
echo "1. ";
if ($sol->findDisappearedNumbers($nums) === [5, 6]) {
    echo "Success";
} else {
    echo "Error";
}

$nums = [1, 1];
echo "\n2. ";
if ($sol->findDisappearedNumbers($nums) === [2]) {
    echo "Success";
} else {
    echo "Error";
}