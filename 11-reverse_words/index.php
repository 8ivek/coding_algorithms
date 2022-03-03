<?php
/**
 * Reverse the words in a sentence. The string "have a nice day" should be changed to "day nice a have".
 * input = have a nice day
 * output = day nice a have
 */

$string = "have a nice day";
$exploded_string = explode(' ', $string);
$reversed_arr = array_reverse($exploded_string);
echo implode(' ', $reversed_arr);