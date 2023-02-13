<?php
/*Question:- 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision*/

function checkEvenAndOdd($number) {
    if ($number % 2 == 0) {
       return "Even";
    } else {
       return "Odd";
    }
 }
 
 echo checkEvenAndOdd(2); 
 echo PHP_EOL;
 echo checkEvenAndOdd(3); 
 echo PHP_EOL;

 
/*Question:-2. 1+2+3...…….100  Write a loop to calculate the summation of the series.*/ 


$sum = 0;
$n=100;
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}
echo "The sum of the series 1+2+3+...+100 is: " . $sum;
?>




