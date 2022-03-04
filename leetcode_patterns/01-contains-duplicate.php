<?php
// https://leetcode.com/problems/contains-duplicate/
// 217. Contains Duplicate
// Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

class Solution
{
    function containsDuplicate(array $nums): bool
    {
        $unique = array_flip(array_flip($nums));
        if (count($nums) === count($unique)) {
            return false;
        }
        return true;
    }

    /**
     * using array unique
     * @param array $nums
     * @return bool
     */
    function containsDuplicateArrayUnique(array $nums): bool
    {
        sort($nums);
        $unique = array_unique($nums);
        if (count($nums) === count($unique)) {
            return false;
        }
        return true;
    }

    /**
     * My solution which is O(n^2).
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicateMyAlgo(array $nums): bool
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
    echo "Success";
} else {
    echo "Error";
}

echo "\n";
echo "2. ";
$nums = [1, 2, 3, 4];
if (!$sol->containsDuplicate($nums)) {
    echo "Success";
} else {
    echo "Error";
}

echo "\n";
echo "3. ";
$nums = [1, 1, 1, 3, 3, 4, 3, 2, 4, 2];
if ($sol->containsDuplicate($nums)) {
    echo "Success";
} else {
    echo "Error";
}