<?php
/*
 * https://leetcode.com/problems/climbing-stairs/
 * 70. Climbing Stairs
 * You are climbing a staircase. It takes n steps to reach the top.
 * Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?
*/

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function climbStairs(int $n): int
    {
        $one = $two = 1;
        for ($i = 0; $i < ($n - 1); $i++) {
            $temp = $one;
            $one = $one + $two;
            $two = $temp;
        }
        return $one;
    }
}

$sol = new Solution();
$num = 2;
echo "1. ";
if ($sol->climbStairs($num) === 2) {
    echo "Success";
} else {
    echo "Error";
}

$num = 3;
echo "\n2. ";
if ($sol->climbStairs($num) === 3) {
    echo "Success";
} else {
    echo "Error";
}