<?php
/*Write a function, per that takes in a positive parameter num and returns its multiplicative persistence, 
which is the number of times you must multiply the digits in num until you reach a single digit.*/

/*For example:

persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
persistence(4) === 0; // because 4 is already a one-digit number */

/*-----------------------------
Codewars show values test fails
echo "num = $num\n";
<?php echo $s; ?> "not for codewars"
<?=$s ?> "not for codewars"
-----------------------------*/

function persistence(int $num): int {
    $counter = 0;
    $newNum = $num;

    while($newNum>=10){
        $strNum = strval($newNum);
        $arrayNum = str_split($strNum);
        $newNum = array_product($arrayNum);
        $counter++;
    }
    return $counter;
}

echo persistence(10);



?>