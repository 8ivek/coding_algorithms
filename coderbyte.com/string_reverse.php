<?php

/**
 * Palindrom check return true if palindrome or false otherwise
 */

/**
 * @param $string
 * @return string
 */
function stringReverse($str): string
{
    $input_string_without_space = str_replace(' ', '', $str);
    $characters = str_split($input_string_without_space);
    $reverse = '';
    for($i = count($characters)-1; $i >= 0 ; $i--) {
        $reverse .= $characters[$i];
    }

    if($input_string_without_space === $reverse) {
        return true;
    }

    return false;
}

$string = "eye";
echo stringReverse($string) ? 'true': 'false';

echo "\n";

$string = "never odd or even";
echo stringReverse($string) ? 'true': 'false';

echo "\n";
$string = "never odd or evenss";
echo stringReverse($string) ? 'true': 'false';