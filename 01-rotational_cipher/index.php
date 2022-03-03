<?php

// Add any extra import statements you may need here

// Add any helper functions you may need here


function rotationalCipher($input, $rotation_factor): string
{
    $input_characters = str_split($input);
    // loop through all the characters in $input
    $output = ''; // initialize output that we return
    foreach ($input_characters as $char) {
        if (ctype_alpha($char)) {// check if $char is an alphabet letter
            if (ctype_upper($char)) {
                $offset = ord('A');
            } else {
                $offset = ord('a');
            }

            $new_value = ord($char) + $rotation_factor;
            $sub = ($new_value - $offset);
            $modded_value = fmod($sub, 26);// here we have second parameter = 26 bc in alphabets total chars = 26, divide the $sub by total chars to get the remainder = cycle modded value.
            $cipher = chr($modded_value + $offset);
            $output .= $cipher;
        } elseif (ctype_digit($char)) {// check if $char is a number.
            $new_value = $char + $rotation_factor;
            $modded_value = fmod($new_value, 10);// we have 10 characters from 0-9, so we are using second parameter as '10', divide the $new_value by 10 to get the remainder = cycle modded_value.
            $output .= $modded_value;
        } else {// if $char is a symbol use it as is
            $output .= $char;
        }
    }
    return $output;
}

// These are the tests we use to determine if the solution is correct.
// You can add your own at the bottom.

function printString($str)
{
    echo "[\"" . $str . "\"]";
}

$test_case_number = 1;

function check($expected, $output)
{
    global $test_case_number;
    $result = true;
    if ($expected != $output) {
        $result = false;
    }
    $rightTick = '\u2713';
    $wrongTick = '\u2717';
    if ($result) {
        echo json_decode('"' . $rightTick . '"');
        echo " Test # " . $test_case_number;
        echo "\n";
    } else {
        echo json_decode('"' . $wrongTick . '"');
        echo " Test # " . $test_case_number . ": Expected ";
        printString($expected);
        echo " Your Output : ";
        printString($output);
        echo "\n";
    }
    $test_case_number += 1;
}

$input_1 = "All-convoYs-9-be:Alert1.";
$rotation_factor_1 = 4;
$expected_1 = "Epp-gsrzsCw-3-fi:Epivx5.";
$output_1 = rotationalCipher($input_1, $rotation_factor_1);
check($expected_1, $output_1);

$input_2 = "abcdZXYzxy-999.@";
$rotation_factor_2 = 200;
$expected_2 = "stuvRPQrpq-999.@";
$output_2 = rotationalCipher($input_2, $rotation_factor_2);
check($expected_2, $output_2);

// Add your own test cases here

