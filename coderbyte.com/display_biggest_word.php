<?php

/**
 * Return longest word of the sentence if 2 words with the same length then return the first word.
 */

class solution
{
    /**
     * Return longest word of the sentence if 2 words with the same length then return the first word.
     * @param String $sentence
     * @return string
     */
    function displayLongestWord(string $sentence): string
    {
        $words = explode(" ", $sentence);
        $longest_word = '';
        $len_longest_word = 0;
        foreach ($words as $word) {
            if (strlen($word) > $len_longest_word) {
                $len_longest_word = strlen($word);
                $longest_word = $word;
            }
        }
        return $longest_word;
    }
}

$sol = new solution();
$sentence = "My Name is Bivek Joshi";
echo "1. ";
if ($sol->displayLongestWord($sentence) === 'Bivek') {
    echo "Success";
} else {
    echo "Error";
}