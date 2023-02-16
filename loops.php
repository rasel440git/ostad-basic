<?php
//for
/* 
for ( $i = 1; $i<10; $i++ ) {
    
   echo $i;
   echo PHP_EOL;
   
}
*/


//while loop
/* $i=1;
while($i<10){
    echo $i;
    echo PHP_EOL;
    $i++;
}
*/

//do while
 /*$i=1;
do{
   
    echo PHP_EOL;
    ++$i;
    echo $i;
}while($i<10);
*/


//GO TO
/* $i=1;
a:$i++;
echo $i;
echo PHP_EOL;
if($i<10)
    goto a;
*/


// $veryOld=0;
// $old=1;
// $new=1;

// for ( $i = 1; $i<5; $i++ ) {
//     echo $veryOld." ";
//         $old=$new;
//         $new=$old+$veryOld;
//         $veryOld=$old;
    
//  }

// $limit = 10;
// $num1 = 0;
// $num2 = 1;

// echo $num1 . " " . $num2 . " ";

// for ($i = 2; $i < $limit; $i++) {
//     $num3 = $num1 + $num2;
//     echo $num3 . " ";
//     $num1 = $num2;
//     $num2 = $num3;
// }

/***Print pattran
 * * * * *
 * * * * 
 * * *
 * *
 */
// for ( $i = 1; $i<5; $i++ ) {
//     for ( $j = 0; $j<$i; $j++ ){             
//             echo " * ";                       
//     }
// echo PHP_EOL;
// }

/***Print pattran
      *3
     * *2
   * * * *1
 * * * * * * 0

 */
$n=6;
for ( $i = 1; $i<$n; $i++ ) {
    for ( $j = 1; $j<=(2*$n)-1; $j++ ){

        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "*";
        }else{
            echo " ";
        }
        
    }
    
echo PHP_EOL;
}


