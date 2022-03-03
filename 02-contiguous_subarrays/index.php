<?php

//Add any extra import statements you may need here


// Add any helper functions you may need here


function countSubarrays($arr) {
    // Write your code here

}

// These are the tests we use to determine if the solution is correct.
// You can add your own at the bottom.

function printInteger($n) {
    echo "[". $n ."]";
}
function printIntegerList($arr) {
    $len = count($arr);
    echo "[";
    for($i = 0; $i < $len; $i++){
        if($i !=0){
            echo ', ';
        }
        echo $arr[$i];
    }
    echo "]";

}

$test_case_number = 1;

function check($expected, $output) {
    global $test_case_number;
    $result = true;
    if($expected != $output) {
        $result = false;
    }
    $rightTick = '\u2713';
    $wrongTick = '\u2717';
    if ($result)  {
        echo json_decode('"'.$rightTick.'"');
        echo " Test #".$test_case_number ;
        echo "\n";
    }
    else {
        echo json_decode('"'.$wrongTick.'"');
        echo " Test #".$test_case_number. ": Expected ";
        printIntegerList($expected);
        echo " Your Output : ";
        printIntegerList($output);
        echo "\n";
    }
    $test_case_number += 1;
}

$test_1 = array(3, 4, 1, 6, 2);
$expected_1 = array(1, 3, 1, 5, 1);
$output_1 = countSubarrays($test_1);
check($expected_1, $output_1);

$test_2 = array(2, 4, 7, 1, 5, 3);
$expected_2 = array(1, 2, 6, 1, 3, 1);
$output_2 = countSubarrays($test_2);
check($expected_2, $output_2);

// Add your own test cases here