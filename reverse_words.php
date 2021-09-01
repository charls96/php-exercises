<?php
/* Complete the function that accepts a string parameter, and reverses each word in the string. 
All spaces in the string should be retained. */

function reverseWords($str)
{
    $reverse_str = "";
    $words_str = explode(' ', $str);
    for ($i = 0; $i < sizeof($words_str); $i++) {
        if ($words_str[$i] == "") {
            $reverse_str .= " ";
        } else {
            if ($i == sizeof($words_str) - 1) {
                $reverse_str .= strrev($words_str[$i]);
            } else {
                $reverse_str .= strrev($words_str[$i]) . " ";
            }
        }
    }
    return $reverse_str;
}

echo reverseWords('stressed desserts');

/* function reverseWords($str) {
    return implode(' ', array_reverse(explode(' ', strrev($str)))) ;
} */