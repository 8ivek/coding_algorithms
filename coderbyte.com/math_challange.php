<?php

/**
 * https://www.geeksforgeeks.org/find-next-greater-number-set-digits/
 * Given a number n, find the smallest number that has same set of digits as n and is greater than n. If n is the greatest possible number with its set of digits, then return -1.
 */

/**
 * @param int $num
 * @return int
 */
function MathChallenge(int $num): int
{
    $input_number = str_split((string)$num);

    // we are traversing from the right side
    $length_input_number = count($input_number);
    $initial_small_number_index = -1;
    for ($i = $length_input_number - 1; $i > 0; $i--) {

        if ($input_number[$i] < $input_number[$i - 1]) {
            continue;
        }

        // current number is greater than the number right to it.
        $initial_small_number_index = $i - 1;

        // get index of the smallest number greater than $input_number[$initial_small_number_index] right to the index
        $smallest_number_right_side = PHP_INT_MAX;
        $smallest_number_right_side_index = -1;
        for ($j = $i; $j < $length_input_number; $j++) {
            if ($input_number[$initial_small_number_index] < $input_number[$j] && $smallest_number_right_side > $input_number[$j]) {
                $smallest_number_right_side = $input_number[$j];
                $smallest_number_right_side_index = $j;
            }
        }
        break;
    }

    // given number has no greater permutation
    if ($initial_small_number_index < 0) {
        return -1;
    }

    // swap the smallest_number_right_side with initial_small_number;
    $input_number [$smallest_number_right_side_index] = $input_number[$initial_small_number_index];
    $input_number[$initial_small_number_index] = $smallest_number_right_side;

    // sort
    $sort_array = array_slice($input_number, $initial_small_number_index + 1);
    if (count($sort_array) > 1) {
        asort($sort_array);
        array_splice($input_number, $initial_small_number_index + 1, count($sort_array), $sort_array);
    }
    return (int)implode('', $input_number);
}

$num = 4321;
if (MathChallenge($num) === -1) {
    echo "Success";
} else {
    echo "Failed";
}
echo "\n";

$num = 123;
if (MathChallenge($num) === 132) {
    echo "Success";
} else {
    echo "Failed";
}
echo "\n";

$num = 6938652;
if (MathChallenge($num) === 6952368) {
    echo "Success";
} else {
    echo "Failed";
}
echo "\n";