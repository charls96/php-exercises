<?php
/* In a small town the population is p0 = 1000 at the beginning of a year. The population regularly
increases by 2 percent per year and moreover 50 new inhabitants per year come to live in the town. 
How many years does the town need to see its population greater or equal to p = 1200 inhabitants? */

function nbYear($p0, $percent, $aug, $p) {
    $p_year = $p0;
    for ($i=0; ; $i++) {
        if ($p_year >= $p){
            return $i; 
            break;
        }
    $p_year = $p_year+$p_year*($percent/100)+$aug;
    $p_year = (int) $p_year;
    }
    echo $p_year;
}

/* function nbYear($p0, $percent, $aug, $p) {
    $year = 0;
    while ($p0 < $p) {
        $p0 = floor($p0 * (1 + ($percent/100)) + $aug);
        $year++;
    }
    return $year;
} */

echo nbYear(1500000, 2.5, 10000, 2000000);
?>