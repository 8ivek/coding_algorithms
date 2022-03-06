<?php
/*
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock/
 * 121. Best Time to Buy and Sell Stock
 *
 * You are given an array prices where prices[i] is the price of a given stock on the ith day.
 * You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
 * Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.
*/

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit(array $prices): int
    {
        $min = PHP_INT_MAX;
        $max = 0;

        foreach ($prices as $price) {
            if ($price < $min) {
                $min = $price;
            } else {
                $max = max($max, ($price - $min));
            }
        }
        return $max;
    }
}

$sol = new Solution();
$prices = [7, 1, 5, 3, 6, 4];
echo "1. ";
if ($sol->maxProfit($prices) === 5) {
    echo "Success";
} else {
    echo "Error";
}

$prices = [7, 6, 4, 3, 1];
echo "\n2. ";
if ($sol->maxProfit($prices) === 0) {
    echo "Success";
} else {
    echo "Error";
}

$prices = [7, 2, 5, 3, 6, 4, 1];
echo "\n3. ";
if ($sol->maxProfit($prices) === 4) {
    echo "Success";
} else {
    echo "Error";
}