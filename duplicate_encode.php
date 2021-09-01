<!-- The goal of this exercise is to convert a string to a new string where each character in the new string is "
(" if that character appears only once in the original string, or ")" if that character appears more than
once in the original string. Ignore capitalization when determining if a character is a duplicate. -->

<?php

    function duplicate_encode($word){
        $wordlowercase = strtolower($word);
        $newword="";
        for ($i=0; $i < strlen($wordlowercase); $i++) { 
            $letter = substr($wordlowercase,$i,1);
            $count=substr_count($wordlowercase, $letter);
            if($count>1){
                $newword .= ")";
            }
            else{
                $newword .= "(";
            }
        }
        return $newword;

    }

    echo duplicate_encode("recede");
    echo "</br>";
    echo duplicate_encode('din');
    echo "</br>";
    echo duplicate_encode("Success");
    echo "</br>";
    echo duplicate_encode(" ( ( )");

?>