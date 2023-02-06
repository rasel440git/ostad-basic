<?php

$tutionFee = 11009;

$commission = ($tutionFee > 20000) ? ($tutionFee * 25) / 100 : (($tutionFee > 10000 && $tutionFee < 20000) ? ($tutionFee * 20) / 100 : (($tutionFee > 7000 && $tutionFee < 10000) ? ($tutionFee * 15) / 100 : (($tutionFee < 7000) ? "You are not eligible for commission" : "")));
echo "The commission is " . $commission . " Dollars";

echo PHP_EOL;



                /*using if else */
                

if ($tutionFee > 20000 && $commission = ($tutionFee * 25) / 100) {

    echo "the commission is ".$commission."Dollars";
}
elseif(
    $tutionFee > 10000 && $tutionFee < 20000 && $commission = ($tutionFee * 20) / 100
) {

    echo "the commission is ".$commission." Dollars";
}
elseif(
    $tutionFee < 10000 && $tutionFee > 7000 && $commission = ($tutionFee * 15) / 100
) {

    echo "the commission is ".$commission." Dollars";
}
elseif($tutionFee < 7000) {

    echo "You are not eligible for commission";
}
