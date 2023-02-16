<?php


$a=10;
$b=16;
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;//12
        $a = $temp;
    }
    return $a;
}
echo gcd(12,18);
//echo $bv = 12% 18;
//12= 2*2*3
//18= 2*3*3










