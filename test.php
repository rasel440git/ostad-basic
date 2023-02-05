<?php
$mark=30;
if($mark>60){
    echo "grade is First Division";
}
elseif($mark> 45 && $mark <59){
    echo "grade is second Division";
}
elseif($mark >33 && $mark<44){
    echo "grade is thard Division";
}
elseif($mark<=33 ){
    echo "grade is Faild."; 
}