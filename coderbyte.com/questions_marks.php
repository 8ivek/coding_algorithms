<?php

// Checking if three question marks appear between two integers that add upto 10
// return true else return false

function QuestionsMarks($str): bool
{
    $sum = 0;
    $q_count = 0;
    $str_arr = str_split($str);
    foreach ($str_arr as $s) {
        if (is_numeric($s)) {
            if ($q_count !== 3) {
                $sum = 0;
                $q_count = 0;
            }
            $sum += $s;
        } elseif ($s === '?') {
            $q_count++;
            if ($q_count > 3) {
                $sum = 0;
                $q_count = 0;
            }
        }
        if ($sum == 10 && $q_count == 3) {
            return true;
        }
    }
    return false;
}

// test
$sentence = "acc?7??sss?3rr1??????5";
echo "1. ";
if (QuestionsMarks($sentence) === true) {
    echo "Success";
} else {
    echo "Error";
}