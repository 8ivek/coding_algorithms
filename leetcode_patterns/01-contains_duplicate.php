<?php
// https://leetcode.com/problems/contains-duplicate/
// 217. Contains Duplicate
// Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate(array $nums): bool
    {
        $new_array = [];
        foreach ($nums as $num) {
            if (in_array($num, $new_array)) {
                return true;
            }
            $new_array[] = $num;
        }
        return false;
    }
}

// test
$sol = new Solution();

$nums = [1, 2, 3, 1];
echo "1. ";
if ($sol->containsDuplicate($nums)) {
    echo "True";
} else {
    echo "Error";
}

echo "\n";
echo "2. ";
$nums = [1, 2, 3, 4];
if ($sol->containsDuplicate($nums)) {
    echo "Error";
} else {
    echo "False";
}

echo "\n";
echo "3. ";
$nums = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
if ($sol->containsDuplicate($nums)) {
    echo "True";
} else {
    echo "Error";
}