<?php

/******** Leaf Year calculation using for if else 
 $year=1901;

 if ($year%4==0 && $year/100){
    echo "$year is a leaf Year";
 }
 else{
    echo "$year is not a leaf Year";
 }
echo "\n";
*/




/******** For Loop with Tarnarey operator 
 * 
 
 $n=14;
 if( $n%2==0){
    echo"this is an Even number";
 }
 else{
    echo"this is an Odd number";
 }
 echo "\n";

 echo $result= ($n%2==0) ?"this is an Even number":"this is an Odd number";
 echo "\n";


 
$number=10;
if($number<10){
    echo "Number is less then 10";
}
elseif($number==10){
    echo "Number is Equel the 10";
}
elseif($number>10){
    echo "Number is biger the 10";
}
else{
    echo "Number is unknown";
}

$result= ($number<10) ? "" : "";

$points = 75;
$grade = '';

$grade = ($points >= 90) ? 'A' :
         (($points >= 80) ? 'B' :
         (($points >= 70) ? 'C' :
         (($points >= 60) ? 'D' : 'F')));

echo "The student's grade is: " . $grade;
echo PHP_EOL;


$tutionFee=6100;
 $commission = ($tutionFee > 20000) ? ($tutionFee * 25) / 100 :
 (($tutionFee > 10000 && $tutionFee < 20000) ? ($tutionFee * 20) / 100 :
  (($tutionFee > 7000 && $tutionFee < 10000) ? ($tutionFee * 15) / 100 :
   (($tutionFee < 7000) ? "You are not eligible for commission" : "")));

   echo "The commission is:- $commission"; 
   echo PHP_EOL;

*/



/********  for-while-do-foreach loop **************/

   for($i=10; $i>=1; $i--){
      
      for($j=0; $j<$i; $j++){
         
            echo " * ";
         }
         echo PHP_EOL;
      
       
   }
   //echo PHP_EOL;

//    $i=1;
//    while($i<10){
//     echo "$i";
//     $i++;
//     echo PHP_EOL;
//    }

//    echo PHP_EOL;

//    $frouts= array("amm","jam","kola");
//    echo $frouts[2];
//    echo PHP_EOL;
//    foreach($frouts as $element){
//         echo $element. PHP_EOL;
//    }