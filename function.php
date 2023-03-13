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




function PrintN($number){
    if($number>=10){
        return;
    }
    echo $number."\n";
    $number++;
    PrintN($number);
}

//PrintN(1);

function PrintNumber($start,$end, $step=1){
    if($start>$end){
        return;
    }
    echo $start."\n";
    $start+=$step;
    PrintNumber($start, $end,$step);
}
PrintNumber(22,50,7);












